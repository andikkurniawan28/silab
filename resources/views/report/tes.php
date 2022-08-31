
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
                                    <H4><STRONG>LAPORAN HARIAN PROSES GILING TEBU</STRONG></H4>
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

            <div class="col-5 table-responsive">
                <h3 class="page-header"><b>GILINGAN</b></h3>

                <table width='100%' border='1' cellpadding='5'>
                <thead>
                    <tr>
                        <th bgcolor='pink'>Uraian</th>
                        <th bgcolor='pink'>Brix</th>
                        <th bgcolor='pink'>Pol</th>
                        <th bgcolor='pink'>HK</th>
                        <th bgcolor='pink'>ZK</th>
                        <th bgcolor='pink'>Potensi</th>
                        <!-- <th bgcolor='pink'>Testing</th> -->
                    </tr>
                </thead>
                <tbody>
					<!------------------------------------------->
										<tr>
						<td>NPP New</td>
						<td>14.70</td>
						<td>11.38</td>
						<td>77.41</td>
						<td>-</td>
						<td>7.04</td>
					</tr>
					<!------------------------------------------->
                                        <tr>
                        <td>Nira Gilingan 1</td>
                        <td>
                            0.00                        </td>
                        <td>
                            0.00							
                        </td>
                        <td>
                            0.00                        </td>
                        <td>-</td>
						<td>
							0.00						</td>
						<!-- <td>0</td> -->
                    </tr>
                                        <tr>
                        <td>Nira Gilingan 2</td>
                        <td>
                            8.63                        </td>
                        <td>
                            6.31							
                        </td>
                        <td>
                            73.12                        </td>
                        <td>-</td>
						<td>
							3.66						</td>
						<!-- <td>6.485529</td> -->
                    </tr>
                                        <tr>
                        <td>Nira Gilingan 3</td>
                        <td>
                            4.74                        </td>
                        <td>
                            3.27							
                        </td>
                        <td>
                            68.99                        </td>
                        <td>-</td>
						<td>
							1.80						</td>
						<!-- <td>3.3668</td> -->
                    </tr>
                                        <tr>
                        <td>Nira Gilingan 4</td>
                        <td>
                            3.35                        </td>
                        <td>
                            2.25							
                        </td>
                        <td>
                            67.16                        </td>
                        <td>-</td>
						<td>
							1.21						</td>
						<!-- <td>2.313548</td> -->
                    </tr>
                                        <tr>
                        <td>Nira Gilingan 5</td>
                        <td>
                            1.82                        </td>
                        <td>
                            1.17							
                        </td>
                        <td>
                            64.29                        </td>
                        <td>-</td>
						<td>
							0.60						</td>
						<!-- <td>1.208352</td> -->
                    </tr>
                                        <tr>
                        <td>NPP Press</td>
                        <td>
                            0.00                        </td>
                        <td>
                            0.00							
                        </td>
                        <td>
                            0.00                        </td>
                        <td>-</td>
						<td>
							0.00						</td>
						<!-- <td>0</td> -->
                    </tr>
                                                            <tr>
                        <td>Ampas Gilingan 1</td>
                        <td>-</td>
                        <td>
                            7.43                        </td>
                        <td>-</td>
                        <td>
                            47.90                        </td>
                        <td>-</td>
                    </tr>
                                        <tr>
                        <td>Ampas Gilingan 2</td>
                        <td>-</td>
                        <td>
                            5.68                        </td>
                        <td>-</td>
                        <td>
                            49.54                        </td>
                        <td>-</td>
                    </tr>
                                        <tr>
                        <td>Ampas Gilingan 3</td>
                        <td>-</td>
                        <td>
                            3.39                        </td>
                        <td>-</td>
                        <td>
                            46.81                        </td>
                        <td>-</td>
                    </tr>
                                        <tr>
                        <td>Ampas Gilingan 4</td>
                        <td>-</td>
                        <td>
                            2.76                        </td>
                        <td>-</td>
                        <td>
                            46.24                        </td>
                        <td>-</td>
                    </tr>
                                        <tr>
                        <td>Ampas Gilingan 5</td>
                        <td>-</td>
                        <td>
                            1.36                        </td>
                        <td>-</td>
                        <td>
                            55.58                        </td>
                        <td>-</td>
                    </tr>
                                    </tbody>
                </table>

                <br>

                <h3 class="page-header"><b>PEMURNIAN</b></h3>

                <table width='100%' border='1' cellpadding='5'>
                <thead>
                    <tr>
                        <th bgcolor='pink'>Uraian</th>
                        <th bgcolor='pink'>Brix</th>
                        <th bgcolor='pink'>Pol</th>
                        <th bgcolor='pink'>HK</th>
                        <th bgcolor='pink'>ICUMSA</th>
                        <th bgcolor='pink'>CaO</th>
                        <th bgcolor='pink'>pH</th>
						<th bgcolor='pink'>Turb</th>
                        <th bgcolor='pink'>KA</th>
                    </tr>
                </thead>
                <tbody>
                                        <tr>
                        <td>Nira Mentah</td>
                        <td>
                            11.91                        </td>
                        <td>
                            8.89                        </td>
                        <td>
                            74.64                        </td>
                        <td>
                            47,899                        </td>
                        <td>
                            309.2                        </td>
                        <td>
                            5.7                        </td>
                        <td>
                            401.3                        </td>
                        <td>-</td>
                    </tr>
                                        <tr>
                        <td>NM Sulfitasi</td>
                        <td>
                            11.72                        </td>
                        <td>
                            8.80                        </td>
                        <td>
                            75.14                        </td>
                        <td>
                            32,098                        </td>
                        <td>
                            737.5                        </td>
                        <td>
                            7.0                        </td>
                        <td>
                            435.9                        </td>
                        <td>-</td>
                    </tr>
                                        <tr>
                        <td>Nira Tapis</td>
                        <td>
                            11.21                        </td>
                        <td>
                            8.38                        </td>
                        <td>
                            74.71                        </td>
                        <td>
                            27,491                        </td>
                        <td>
                            692.5                        </td>
                        <td>
                            6.5                        </td>
                        <td>
                            449.3                        </td>
                        <td>-</td>
                    </tr>
                                        <tr>
                        <td>Nira Encer</td>
                        <td>
                            11.51                        </td>
                        <td>
                            8.57                        </td>
                        <td>
                            74.49                        </td>
                        <td>
                            28,698                        </td>
                        <td>
                            635.8                        </td>
                        <td>
                            7.0                        </td>
                        <td>
                            86.3                        </td>
                        <td>-</td>
                    </tr>
                                                            <tr>
                        <td>Blotong Truk</td>
                        <td>-</td>
                        <td>
                            4.80                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            46.70                        </td>
                    </tr>
                                        <tr>
                        <td>Blotong RVF B</td>
                        <td>-</td>
                        <td>
                            0.00                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            0.00                        </td>
                    </tr>
                                        <tr>
                        <td>Blotong RVF K</td>
                        <td>-</td>
                        <td>
                            0.00                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            0.00                        </td>
                    </tr>
                                    </tbody>
                </table>

				<br>

				<h3 class="page-header"><b>DRK</b></h3>

				<table width='100%' border='1' cellpadding='5'>
				  <thead>
					<tr>
						<th bgcolor='pink'>Uraian</th>
						<th bgcolor='pink'>Brix</th>
						<th bgcolor='pink'>Pol</th>
						<th bgcolor='pink'>HK</th>
						<th bgcolor='pink'>ICUMSA</th>
						<th bgcolor='pink'>CaO</th>
						<th bgcolor='pink'>pH</th>
						<th bgcolor='pink'>Turb</th>
						<th bgcolor='pink'>KA</th>
					</tr>
				  </thead>
				  <tbody>
										<tr>
						<td>Remelter</td>
						<td>
                            46.66                        </td>
						<td>
                            42.79                        </td>
						<td>
							91.71						</td>
						<td>
                            6,331                        </td>
						<td>
                            695.0                        </td>
						<td>
                            5.8                        </td>
						<td>
                            78.7                        </td>
						<td>-</td>
					</tr>
										<tr>
						<td>Reaction</td>
						<td>
                            43.68                        </td>
						<td>
                            39.11                        </td>
						<td>
							89.54						</td>
						<td>
                            5,982                        </td>
						<td>
                            6,254.2                        </td>
						<td>
                            10.9                        </td>
						<td>
                            766.5                        </td>
						<td>-</td>
					</tr>
										<tr>
						<td>Carbonated</td>
						<td>
                            44.83                        </td>
						<td>
                            41.40                        </td>
						<td>
							92.36						</td>
						<td>
                            4,192                        </td>
						<td>
                            1,720.8                        </td>
						<td>
                            7.4                        </td>
						<td>
                            719.5                        </td>
						<td>-</td>
					</tr>
										<tr>
						<td>Clear</td>
						<td>
                            44.36                        </td>
						<td>
                            40.35                        </td>
						<td>
							90.96						</td>
						<td>
                            3,777                        </td>
						<td>
                            1,538.3                        </td>
						<td>
                            7.5                        </td>
						<td>
                            161.6                        </td>
						<td>-</td>
					</tr>
															<tr>
						<td>Cake Head</td>
						<td></td>
						<td>
                            0.38                        </td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>
                            35.68                        </td>
					</tr>
										<tr>
						<td>Cake Mid</td>
						<td></td>
						<td>
                            0.24                        </td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>
                            29.48                        </td>
					</tr>
										<tr>
						<td>Cake End</td>
						<td></td>
						<td>
                            0.32                        </td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>
                            29.05                        </td>
					</tr>
									  </tbody>
				</table>

					</br>

                    <h3 class="page-header"><b>DATA PENDUKUNG</b></h3>

				<table width='100%' border='1' cellpadding='5'>
					<thead>
						<tr>
							<th bgcolor='pink'>Uraian</th>
							<th bgcolor='pink'>pH</th>
							<th bgcolor='pink'>TDS</th>
							<th bgcolor='pink'>Kesadahan</th>
							<th bgcolor='pink'>Phospat</th>
							<th bgcolor='pink'>Uap</th>
							<th bgcolor='pink'>Tekanan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Air Pengisi</td>
							<td>
								7.27							</td>
							<td>
								17.50							</td>
							<td>
								0.00							</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>JJ</td>
							<td>
								10.43							</td>
							<td>
								1,659.17							</td>
							<td>
								0.17							</td>
							<td>
								6.00							</td>
							<td>
								2,590.00							</td>
							<td>
								21.96							</td>
						</tr>
						<tr>
							<td>Yoshimine1</td>
							<td>
								10.75							</td>
							<td>
								958.18							</td>
							<td>
								0.55							</td>
							<td>
								4.00							</td>
							<td>
								1,393.00							</td>
							<td>
								21.96							</td>
						</tr>
						<tr>
							<td>Yoshimine2</td>
							<td>
								10.55							</td>
							<td>
								667.27							</td>
							<td>
								0.99							</td>
							<td>
								5.00							</td>
							<td>
								2,436.00							</td>
							<td>
								20.96							</td>
						</tr>
						<tr>
							<td>WTP</td>
							<td>
								0.00							</td>
							<td>
								0.00							</td>
							<td>
								0.00							</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Daert JJ</td>
							<td>
								7.80							</td>
							<td>
								20.83							</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Daert Yosh</td>
							<td>
								7.27							</td>
							<td>
								10.83							</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
					</tbody>
				</table>

				<br>

				<h3 class="page-header"><b>FLOW NIRA MENTAH</b></h3>

				<table width='100%' border='1' cellpadding='5'>
				<thead>
					<tr>
						<th bgcolor='pink'>Tebu Tergiling<sub>Ton</sub></th>
						<th bgcolor='pink'>Flow Nira Mentah</th>
						<th bgcolor='pink'>Nira Mentah % Tebu</th>
						<th bgcolor='pink'>Imbibisi</th>
					</thead>
					<tbody>
						<td>
							12,801						</td>
						<td>
							14,033.10						</td>
						<td>
							111.02						</td>
						<td>
							3,101.75						</td>
					</tbody>
				</table>

			<br>

			<h3 class="page-header"><b>PEMAKAIAN BAHAN KIMIA</b></h3>

			<table width='100%' border='1' cellpadding='5'>
			<thead>
				<tr>
					<th bgcolor='pink'>Kapur</th>
					<th bgcolor='pink'>Belerang</th>
					<th bgcolor='pink'>Floc</th>
					<th bgcolor='pink'>NaOH</th>
					<th bgcolor='pink'>B894</th>
					<th bgcolor='pink'>B895</th>
					<th bgcolor='pink'>B210</th>
				</thead>
				<tbody>
					<td>
						0					</td>
					<td>
						4,050					</td>
					<td>
						10					</td>
					<td>
						125					</td>
					<td>
						22					</td>
					<td>
						94					</td>
					<td>
						972					</td>
				</tbody>
			</table>

			<br>

			<h3 class="page-header"><b>KUALITAS PRODUK</b></h3>
				
				<table width='100%' border='1' cellpadding='5'>
				<thead>
					<tr>
						<th bgcolor='pink'>Uraian</th>
						<th bgcolor='pink'>IU</th>
						<th bgcolor='pink'>Brix</th>
						<th bgcolor='pink'>Pol</th>
						<th bgcolor='pink'>HK</th>
						<th bgcolor='pink'>KA</th>
						<th bgcolor='pink'>SO<sub>2</sub></th>
						<th bgcolor='pink'>TSAI</th>
						<th bgcolor='pink'>BJB</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Gula Produk</td>
						<td>
							231						</td>
						<td>0</td>
						<td>
							0.00						</td>
						<td>99.66</td>
						<td>0.00</td>
						<td>
							8.93						</td>
						<td>-</td>
						<td>
							0.95						</td>
					</tr>
					<tr>
						<td>Tetes Puteran</td>
						<td>
							85,257						</td>
						<td>
							93.36						</td>
						<td>
							30.13						</td>
						<td>32.27</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
				</tbody>
				</table>

			  </div>
			  <!-- /.col -->
				
			<div class="col-5 table-responsive">

                <h3 class="page-header"><b>PENGUAPAN</b></h3>

                <table width='100%' border='1' cellpadding='5'>
                <thead>
                    <tr>
                        <th bgcolor='pink'>Uraian</th>
                        <th bgcolor='pink'>Brix</th>
                        <th bgcolor='pink'>Pol</th>
                        <th bgcolor='pink'>HK</th>
                        <th bgcolor='pink'>ICUMSA</th>
                        <th bgcolor='pink'>CaO</th>
                        <th bgcolor='pink'>pH</th>
						<th bgcolor='pink'>Turb</th>
                    </tr>
                </thead>
                <tbody>
                                        <tr>
                        <td>Nira Kental</td>
                        							<td>
								62.08							</td>
						                        
                            
                        <td>
                            46.69                        </td>
                        <td>
                            75.21                        </td>
                        <td>
                            25,769                        </td>
                        <td>
                            3,809.1                        </td>
                        <td>
                            6.4                        </td>
                        <td>
                            162.0                        </td>
                    </tr>
                                                            <tr>
                        <td>NK Sulfitasi</td>
                        							<td>
								59.13							</td>
						                        
                            
                        <td>
                            46.11                        </td>
                        <td>
                            77.98                        </td>
                        <td>
                            20,944                        </td>
                        <td>
                            3,209.1                        </td>
                        <td>
                            5.6                        </td>
                        <td>
                            205.1                        </td>
                    </tr>
                                                            <tr>
                        <td>Pre-Evap</td>
                        							<td>
								15.58							</td>
						                                                <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                                                                <tr>
                        <td>Evaporator1</td>
                        							<td>
								17.48							</td>
						                                                <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                                                                <tr>
                        <td>Evaporator2</td>
                        							<td>
								20.52							</td>
						                                                <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                                                                <tr>
                        <td>Evaporator3</td>
                        							<td>
								17.31							</td>
						                                                <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                                                                <tr>
                        <td>Evaporator4</td>
                        							<td>
								24.67							</td>
						                                                <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                                                                <tr>
                        <td>Evaporator5</td>
                        							<td>
								34.88							</td>
						                                                <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                                                            </tbody>
                </table>

                <br>

				<h3 class="page-header"><b>MASAKAN</b></h3>
			  
				<table width='100%' border='1' cellpadding='5'>
				  <thead>
				  	<tr>
						<th bgcolor='pink'>Uraian</th>
						<th bgcolor='pink'>ICUMSA</th>
						<th bgcolor='pink'>Brix</th>
						<th bgcolor='pink'>Pol</th>
						<th bgcolor='pink'>HK</th>
						<th bgcolor='pink'>HL</th>
				 	</tr>
				  	</thead>
				  	<tbody>
										
					<tr>
						<td>Masakan A</td>
						<td>
							23,210						</td>
						<td>
							92.41						</td>
						<td>
							74.54						</td>
						<td>80.67</td>
						<td>
								18,000							</td>
                    </tr>
					
					<tr>
						<td>Masakan C</td>
						<td>
							35,036						</td>
						<td>
							96.73						</td>
						<td>
							68.86						</td>
						<td>71.19</td>
						<td>
								5,600							</td>
                    </tr>
					
					<tr>
						<td>Masakan D</td>
						<td>
							58,070						</td>
						<td>
							96.15						</td>
						<td>
							59.96						</td>
						<td>62.36</td>
						<td>
								3,200							</td>
                    </tr>
					
					<tr>
						<td>Masakan A Halus</td>
						<td>
							26,482						</td>
						<td>
							91.38						</td>
						<td>
							71.78						</td>
						<td>78.56</td>
						<td>
								3,250							</td>
                    </tr>
					
					<tr>
						<td>Masakan R1</td>
						<td>
							0						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>0.00</td>
						<td>
								400							</td>
                    </tr>
									  	</tbody>
				</table>

                <br>

				<h3 class="page-header"><b>STROOP</b></h3>
			  
				<table width='100%' border='1' cellpadding='5'>
				  <thead>
				  	<tr>
						<th bgcolor='pink'>Uraian</th>
						<th bgcolor='pink'>ICUMSA</th>
						<th bgcolor='pink'>Brix</th>
						<th bgcolor='pink'>Pol</th>
						<th bgcolor='pink'>HK</th>
				 	</tr>
				  	</thead>
				  	<tbody>
                      					<tr>
						<td>Einwuurf C</td>
						<td>
							7,828						</td>
						<td>
							93.60						</td>
						<td>
							87.33						</td>
						<td>93.30</td>
						
					</tr>
										<tr>
						<td>Einwuurf D</td>
						<td>
							32,498						</td>
						<td>
							87.00						</td>
						<td>
							75.30						</td>
						<td>86.55</td>
						
					</tr>
										<tr>
						<td>Klare RS</td>
						<td>
							0						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>0.00</td>
						
					</tr>
										<tr>
						<td>Klare SHS</td>
						<td>
							32,411						</td>
						<td>
							79.33						</td>
						<td>
							55.53						</td>
						<td>70.00</td>
						
					</tr>
										<tr>
						<td>Klare D</td>
						<td>
							77,546						</td>
						<td>
							76.55						</td>
						<td>
							49.18						</td>
						<td>64.24</td>
						
					</tr>
										<tr>
						<td>Stroop A</td>
						<td>
							50,450						</td>
						<td>
							79.40						</td>
						<td>
							51.67						</td>
						<td>65.08</td>
						
					</tr>
										<tr>
						<td>Stroop C</td>
						<td>
							83,289						</td>
						<td>
							78.53						</td>
						<td>
							40.79						</td>
						<td>51.94</td>
						
					</tr>
										<tr>
						<td>R1 Mol</td>
						<td>
							41,972						</td>
						<td>
							78.20						</td>
						<td>
							54.91						</td>
						<td>70.22</td>
						
					</tr>
										<tr>
						<td>R2 Mol</td>
						<td>
							0						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>0.00</td>
						
					</tr>
										<tr>
						<td>Remelter CD</td>
						<td>
							23,916						</td>
						<td>
							63.30						</td>
						<td>
							56.04						</td>
						<td>88.53</td>
						
					</tr>
										<tr>
						<td>Remelter A</td>
						<td>
							4,788						</td>
						<td>
							48.43						</td>
						<td>
							45.10						</td>
						<td>93.13</td>
						
					</tr>
										<tr>
						<td>Magma RS</td>
						<td>
							0						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>0.00</td>
						
					</tr>
										<tr>
						<td>CVP C</td>
						<td>
							0						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>0.00</td>
						
					</tr>
										<tr>
						<td>CVP D</td>
						<td>
							66,882						</td>
						<td>
							97.02						</td>
						<td>
							57.27						</td>
						<td>59.03</td>
						
					</tr>
									  	</tbody>
				</table>

                <br>

				<h3 class="page-header"><b>GULA IN PROSES</b></h3>
			  
				<table width='100%' border='1' cellpadding='8'>
				  <thead>
				  	<tr>
						<th bgcolor='pink'>Uraian</th>
						<th bgcolor='pink'>ICUMSA</th>
						<th bgcolor='pink'>Brix</th>
						<th bgcolor='pink'>Pol</th>
						<th bgcolor='pink'>HK</th>
						<th bgcolor='pink'>KA</th>
						<th bgcolor='pink'>SO<sub>2</sub></th>
						<th bgcolor='pink'>BJB</th>
				 	</tr>
				  	</thead>
				  	<tbody>
                      
					<tr>
						<td>Gula R1</td>
						<td>
                            128                        </td>
                            						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>0.00</td>
						<td>0.00</td>
						<td>
                            3.40                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Gula R2</td>
						<td>
                            0                        </td>
                            						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>0.00</td>
						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Gula R3</td>
						<td>
                            0                        </td>
                            						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>0.00</td>
						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Gula C</td>
						<td>
                            1,518                        </td>
                            						<td>99.51</td>
						<td>
                            97.88                        </td>
						<td>98.37</td>
						<td>0.49</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Gula D1</td>
						<td>
                            16,023                        </td>
                            						<td>97.44</td>
						<td>
                            85.20                        </td>
						<td>87.43</td>
						<td>2.56</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Gula D2</td>
						<td>
                            5,225                        </td>
                            						<td>98.79</td>
						<td>
                            94.87                        </td>
						<td>96.03</td>
						<td>1.21</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Gula A Raw</td>
						<td>
                            1,172                        </td>
                            						<td>99.04</td>
						<td>
                            97.76                        </td>
						<td>98.71</td>
						<td>0.96</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Kristal RS</td>
						<td>
                            0                        </td>
                            						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>0.00</td>
						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Raw Sugar Silo</td>
						<td>
                            0                        </td>
                            						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>0.00</td>
						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					
					<tr>
						<td>Gula SHS</td>
						<td>
                            235                        </td>
                            						<td>99.98</td>
						<td>
                            99.63                        </td>
						<td>99.66</td>
						<td>0.02</td>
						<td>
                            8.55                        </td>
						<td>
                            0.98                        </td>
					</tr>

					
					<tr>
						<td>Gula A</td>
						<td>
                            0                        </td>
                            						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>0.00</td>
						<td>0.00</td>
						<td>
                            0.00                        </td>
						<td>
                            0.00                        </td>
					</tr>

					                    </tbody>
                </table>

			</div>

			</div>

			<br>
			
			<div class="row d-flex justify-content-center">
			  
			  <div class="col-10 table-responsive">
			  
				<h3 class="page-header"><b>DATA KELILING PROSES</b></h3>

				<table width='100%' border='1' cellpadding='5'>
					<thead>
						<tr bgcolor='pink'>
							<!--<th colspan = '9'>Tekanan Evaporator</th>-->
							<th colspan = '18'>Tekanan Pan Masakan</th>
							<th colspan = '1'>Tekanan</th>
							<th colspan = '4'>Tekanan Uap</th>
						</tr>
						<tr bgcolor='pink'>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>13</th>
							<th>14</th>
							<th>15</th>
							<th>16</th>
							<th>17</th>
							<th>18</th>
							<th>Vakum</th>
							<th>Baru</th>
							<th>3Ato</th>
							<th>Bekas</th>
							<th>-</th>
						</tr>
					</thead>
					
					<tbody>
					<tr>
						
						<td>
							60.19						</td>
						<td>
							59.47						</td>
						<td>
							60.47						</td>
						<td>
							61.20						</td>
						<td>
							59.33						</td>
						<td>
							60.38						</td>
						<td>
							58.95						</td>
						<td>
							60.79						</td>
						<td>
							60.53						</td>
						<td>
							60.33						</td>
						<td>
							60.25						</td>
						<td>
							60.13						</td>
						<td>
							60.25						</td>
						<td>
							60.29						</td>
						<td>
							60.50						</td>
						<td>
							60.29						</td>
						<td>
							60.84						</td>
						<td>
							60.12						</td>
						

						<td>
							0.00						</td>
						
						<td>
							0.00						</td>
						<td>
							2.38						</td>
						<td>
							0.76						</td>
						<td>-</td>
						
					</tr>
						<tr bgcolor='pink'>
						<th colspan = '9'>Tekanan Evaporator</th>
						<th colspan = '9'>Suhu Uap Evaporator</th>
						<th colspan = '2'>Suhu Air</th>
						<th colspan = '3'>Suhu Heater</th>
					</tr>
					
					<tr>
						<th>PE1</th>
						<th>PE2</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						
						<th>PE1</th>
						<th>PE2</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<!--<th>H3</th>-->
						<th>Injeksi</th>
						<th>Terjun</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
					</tr>
						
					<tr>

						<td>
                            0.00                        </td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>
						
						<td>
							0.00						</td>
						<td>
							0.00						</td>

						<td>
							0.00						</td>
						<td>
							0.00						</td>
						<td>
							0.00						</td>

					</tr>
					
					</tbody>
				</table>
				
			  </div>
			  <!-- /.col -->
			  
			</div>
			<!-- /.row -->
			
			
			<br>

			<!--<div class='row d-flex justify-content-center'>

				<div class='col-5'>	

				</div>

			</div>-->

						
		  </section>
		  <!-- /.content -->
		</div>
		<!-- ./wrapper -->

		<!--<script type="text/javascript"> 
		  window.addEventListener("load", window.print());
		</script>-->
	</body>
</html>
