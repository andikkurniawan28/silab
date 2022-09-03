
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
                                    <H4><STRONG>CERTIFICATE OF ANALYSIS</STRONG></H4>
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
                    <table width='100%' border='1' cellpadding='20'>
                        <p>Pada tanggal {{ date('d-m-Y', strtotime($date)) }} telah dilakukan analisa kapur dengan hasil sebagai berikut : </p> 
                        <tr bgcolor="lightblue">
                            <th>Sample</th>
                            <th>Kadar Kapur</th>
                        </tr>
                        @for($i=0; $i<count($data); $i++)
                        <tr>
                            <th>{{ $data[$i]['name'] }}</th>
                            <th>{{ $data[$i]['calcium'] }}</th>
                        </tr>
                        @endfor
                    </table>
                </div>
            </div>

            <br>
			<div class='row d-flex justify-content-center text-dark'>
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-4 table-responsive">
                    <table width='100%' border='1' cellpadding='10' class="text-center">
                        <tr>
                            <th>Kepala Bagian QC</th>
                        </tr>
                        <tr>
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
			
			<br><br>

		  </section>
		</div>

		<script type="text/javascript"> 
		  window.addEventListener("load", window.print());
		</script>
	</body>
</html>
