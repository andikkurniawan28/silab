
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
                                    <H4><STRONG>LAPORAN 
                                        @if($shift == 0)
                                        {{ 'HARIAN' }}
                                        @else
                                        {{ 'MANDOR' }}
                                        @endif CORE SAMPLE</STRONG></H4>
                                </th>
                                <th rowspan='2'><img class='rounded mx-auto d-block' src='/admin_template/img/QC.png' width="100" height="100"></img></th>
                            </tr>
                            <tr>
                                <th class='text-center'>No Dok : KBA/FRM/QC/005-00</th>
                                <th class='text-center'>Tanggal : {{ date('d F Y', strtotime($date)) }}</th>
                                <th class='text-center'>Shift : {{ $shift }}</th>
                            </tr>
                        </thead>
                    </table>
			    </div>
			</div>

            <br>

            <div class='row d-flex justify-content-center text-dark'>
                <div class="col-10 table-responsive">
                    <table width='100%' border='1' cellpadding='5' class="text-xs">
                        <h5>Core Sample Engkel Kecil</h5>
                        <tr bgcolor="pink">
                            <th>No</th>
                            <th>ID</th>
                            <th>Time</th>
                            <th>Antrian</th>
                            <th>Register</th>
                            <th>Brix</th>
                            <th>Pol</th>
                            <th>Rendemen</th>
                        </tr>
                        @for($i=0; $i<count($data['core_ek']); $i++)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $data['core_ek'][$i]['id'] }}</td>
                            <td>{{ $data['core_ek'][$i]['created_at'] }}</td>
                            <td>{{ $data['core_ek'][$i]['barcode_antrian'] }}</td>
                            <td>{{ $data['core_ek'][$i]['register'] }}</td>
                            <td>{{ $data['core_ek'][$i]['brix_nira'] }}</td>
                            <td>{{ $data['core_ek'][$i]['pol_nira'] }}</td>
                            <td>{{ $data['core_ek'][$i]['rendemen'] }}</td>
                        </tr>
                        @endfor
                        <tr bgcolor="pink">
                            <th colspan="4">Akumulasi</th>
                            <th>{{ $data['core_ek_aggregate']['rit'] }}</th>
                            <th>{{ $data['core_ek_aggregate']['brix'] }}</th>
                            <th>{{ $data['core_ek_aggregate']['pol'] }}</th>
                            <th>{{ $data['core_ek_aggregate']['rendemen'] }}</th>
                        </tr>
                    </table>

                    <br>

                    <table width='100%' border='1' cellpadding='5' class="text-xs">
                        <h5>Core Sample Engkel Besar dan Gandeng</h5>
                        <tr bgcolor="pink">
                            <th>No</th>
                            <th>ID</th>
                            <th>Time</th>
                            <th>Antrian</th>
                            <th>Register</th>
                            <th>Brix</th>
                            <th>Pol</th>
                            <th>Rendemen</th>
                        </tr>
                        @for($i=0; $i<count($data['core_eb']); $i++)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $data['core_eb'][$i]['id'] }}</td>
                            <td>{{ $data['core_eb'][$i]['created_at'] }}</td>
                            <td>{{ $data['core_eb'][$i]['barcode_antrian'] }}</td>
                            <td>{{ $data['core_eb'][$i]['register'] }}</td>
                            <td>{{ $data['core_eb'][$i]['brix_nira'] }}</td>
                            <td>{{ $data['core_eb'][$i]['pol_nira'] }}</td>
                            <td>{{ $data['core_eb'][$i]['rendemen'] }}</td>
                        </tr>
                        @endfor
                        <tr bgcolor="pink">
                            <th colspan="4">Akumulasi</th>
                            <th>{{ $data['core_eb_aggregate']['rit'] }}</th>
                            <th>{{ $data['core_eb_aggregate']['brix'] }}</th>
                            <th>{{ $data['core_eb_aggregate']['pol'] }}</th>
                            <th>{{ $data['core_eb_aggregate']['rendemen'] }}</th>
                        </tr>
                    </table>
			    </div>
			</div>

            @if($shift != 0)
            <br>
			<div class='row d-flex justify-content-center text-dark'>
                <div class="col-10 table-responsive">
                    <table width='100%' border='1' cellpadding='5' class="text-center">
                        <tr bgcolor="pink">
                            <th>Mandor Core Sample</th>
                            <th>Katim QC</th>
                            <th>PIC Core Sample</th>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                <br>
                                <br>
                                <br>
                            </td>
                            <td>
                                <br>
                                <br>
                                <br>
                                <br>
                            </td>
                            <td>
                                <br>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            @endif
			
			<br><br>

		  </section>
		</div>

		<!--<script type="text/javascript"> 
		  window.addEventListener("load", window.print());
		</script>-->
	</body>
</html>
