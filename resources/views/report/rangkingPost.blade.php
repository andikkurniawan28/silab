
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

        <title>SiLab</title>
	
        <link rel="icon" type="image/png" href="/admin_template/img/QC.png"/>
        <link href="/admin_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link href="/admin_template/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="/admin_template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	</head>

	<body>

        @if($handling == 'export')
            @php
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Silab_".$date.".xls");
            @endphp
        @endif

        <div class="wrapper">

		  <section class="invoice">
		  
		  <br></br>

			<div class="row d-flex justify-content-center text-dark">
			    <div class="col-10 table-responsive">
                    <table border='1' cellpadding='0' width='100%'>
                        <thead>
                            <tr>
                                <th rowspan='2'><img class='rounded mx-auto d-block' src='/admin_template/img/ka.jpg' width="100" height="100"></img></th>
                                <th colspan='3' class='text-center'>
                                    <H6><STRONG>PT. KEBON AGUNG UNIT PABRIK GULA KEBON AGUNG</STRONG></H6>
                                    <p><SMALL>FORMULIR</SMALL></p>
                                    <H4><STRONG>LAPORAN RENDEMEN AKUMULATIF PER POS PANTAU</STRONG></H4>
                                </th>
                                <th rowspan='2'><img class='rounded mx-auto d-block' src='/admin_template/img/QC.png' width="100" height="100"></img></th>
                            </tr>
                            <tr>
                                <th class='text-center'>No Dok : KBA/FRM/QC/005-00</th>
                                <th class='text-center'>Tanggal : {{ date('d F Y', strtotime($date)) }}</th>
                                {{-- <th class='text-center'>KUD : {{ $data['region'] }}</th> --}}
                            </tr>
                        </thead>
                    </table>
			    </div>
			</div>

            <br>

            <div class='row d-flex justify-content-center text-dark'>
                <div class="col-10 table-responsive">
                    <table width='100%' border='1' cellpadding='5' class="text-xs">
                        <h5>Rendemen Akumulatif Per Pos Pantau</h5>
                        <tr bgcolor="pink">
                            <th rowspan="2">No</th>
                            <th rowspan="2">Pos Pantau</th>
                            <th colspan="4">Engkel Kecil</th>
                            <th colspan="4">Engkel Besar & Gandeng</th>
                        </tr>
                        <tr bgcolor="pink">
                            <th>Rit</th>
                            <th>Brix</th>
                            <th>Pol</th>
                            <th>Rendemen</th>
                            <th>Rit</th>
                            <th>Brix</th>
                            <th>Pol</th>
                            <th>Rendemen</th>
                        </tr>
                        @for($i=1; $i<=count($data['core_ek']); $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data['core_ek'][$i]['region'] }}</td>
                            <td>{{ $data['core_ek'][$i]['rit'] }}</td>
                            <td>{{ $data['core_ek'][$i]['brix'] }}</td>
                            <td>{{ $data['core_ek'][$i]['pol'] }}</td>
                            <td>{{ $data['core_ek'][$i]['rendemen'] }}</td>
                            <td>{{ $data['core_eb'][$i]['rit'] }}</td>
                            <td>{{ $data['core_eb'][$i]['brix'] }}</td>
                            <td>{{ $data['core_eb'][$i]['pol'] }}</td>
                            <td>{{ $data['core_eb'][$i]['rendemen'] }}</td>
                        </tr>
                        @endfor
                    </table>
			    </div>
			</div>

		  </section>
		</div>

		<!--<script type="text/javascript"> 
		  window.addEventListener("load", window.print());
		</script>-->
	</body>
</html>
