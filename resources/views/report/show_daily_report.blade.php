
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

        <title>Silab</title>
	
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
                                    <H4><STRONG>LAPORAN HARIAN</STRONG></H4>
                                </th>
                                <th rowspan='2'><img class='rounded mx-auto d-block' src='/admin_template/img/QC.png' width="100" height="100"></img></th>
                            </tr>
                            <tr>
                                <th class='text-center'>No Dok : KBA/FRM/QC/005-00</th>
                                <th class='text-center'>Tanggal : {{ date('d F Y', strtotime($date)) }}</th>
                            </tr>
                        </thead>
                    </table>
			    </div>
			</div>
			
			<br>

			<div class='row d-flex justify-content-center text-dark'>

                <div class="col-10 table-responsive">
                    <table width='100%' border='1' cellpadding='5'>
                        <tr>
                            <th>Sampel</th>
                            <th>% Brix</th>
                            <th>% Pol</th>
                            <th>% HK</th>
                            <th>Z</th>
                            <th>IU</th>
                            <th>% Moisture</th>
                            <th>% Air</th>
                            <th>Pol</th>
                        </tr>
                        @foreach ($samples as $sample)
                        <tr>
                            <td>{{ $sample->name }}</td>
                            <td>{{ $sample->percent_brix }}</td>
                        </tr>
                        @endforeach
                    </table>
				
			    </div>
			  
			</div>
			
			<br>

		  </section>
		</div>

		<!--<script type="text/javascript"> 
		  window.addEventListener("load", window.print());
		</script>-->
	</body>
</html>
