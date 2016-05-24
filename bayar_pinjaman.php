<!doctype html>
<html>
<head>
    <title>Koperasi BTSA Logistics</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <style type="text/css">
        body{
            background-color:lightcyan;
        }
        .space{
            margin-bottom: 10px;
        }
        .warna_header{
            background-color: skyblue;  
            margin-bottom: 30px;
        }
        .gambar{
            margin-bottom: 30px;
            text-align: left;
            padding-left: 20px;
            padding-top: 20px;
        }
        .sign_out{
            padding: 10px 20px 20px 20px;
            text-align: right;
        }
        .main{
            height: 500px;   
        }
        .footer{
            height: auto;
            border: 5px solid white;
            word-spacing: 3px;
            text-align: center;
            padding:10px 0px;
            background-color: skyblue;
            color: black;
            font-weight: bolder;
            font-size: 15px;
        }
        /*
        .kotak{
            border: 1px solid black;

        }
        */
        
    </style>
</head>
<body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div class="warna_header">
        <div class="row">
            <div class="col-sm-10">
                <div class="gambar">
                    <img src="img/logo.png">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="sign_out">
                    <button type="button" class="btn btn-default btn-lg btn-block">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sign Out
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-3">
                <div class="list-group">
                    <div class="list-group-item list-group-item-success">
                        Menu
                    </div>
                    <a href="" class="list-group-item" data-toggle="modal" data-target="#myModal">Tambah Anggota</a>
                        <!-- Modal --> 
						<form method=POST action="proses_tambah.php">
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                            <div class="modal-dialog"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x
                                        </button> 
                                        <h4 class="modal-title" id="myModalLabel"> 
                                            Daftar Karyawan Baru
                                        </h4> 
                                    </div> 
                                    <div class="modal-body"> 
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form role="form"> 
                                                    <div class="form-group"> 
                                                        <div class="space">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label for="name">Nik</label>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <input name="nik" type="text" class="form-control" placeholder="Masukkan Nik Anda"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label for="name">Nama</label>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Anda"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label for="name">Divisi</label>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" name="divisi"> 
                                                                        <option value="IT">IT</option> 
                                                                        <option value="Personalia Umum">Personalia Umum</option> 
                                                                        <option value="Eksport">Eksport</option> 
                                                                        <option value="Import">Import</option> 
                                                                        <option value="Antar Pulau">Antar Pulau</option> 
                                                                        <option value="Armada">Armada</option> 
                                                                        <option value="Accounting">Accounting</option> 
                                                                        <option value="Finance">Finance</option> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label for="name">Gaji</label>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <input name="gaji" type="text" class="form-control" placeholder="Masukkan jumlah gaji yang Anda terima saat ini (Digit)"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="modal-footer"> 
										<input type="submit" class="btn btn-primary" value="Simpan">
                                        <input type="submit" class="btn btn-default" data-dismiss="modal" value="Keluar">
                                    </div> 
                                </div>
                                <!-- /.modal-content --> 
                            </div>
                            <!-- /.modal-dialog --> 
                        </div>
						</form>
						
                    <a href="data_karyawan.php" class="list-group-item">Data Karyawan</a>
                    <a href="perubahan_gaji.php" class="list-group-item">Perubahan Gaji</a>
                    <a href="bayar_pinjaman.php" class="list-group-item">Bayar Pinjaman</a>
                    <a href="form_pinjaman.php" class="list-group-item">Form Pinjaman</a>
                    <a href="data_peminjam.php" class="list-group-item">Data Peminjam</a>
					<a href="pembagian_keuntungan.php" class="list-group-item">Pembagian Keuntungan</a>
					<a href="history.php" class="list-group-item">Riwayat</a>
					<a href="persen.php" class="list-group-item">Persen</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="main">
                        <div class="panel-body">
                            <div class="modal-header"> 
								<h4 class="modal-title" id="myModalLabel"> 
									Bayar Pinjaman
								</h4> 
							</div> 
							<div class="modal-body"> 
								<div class="row">
									<div class="col-sm-12">
										<form role="form"> 
											<div class="form-group"> 
												<div class="space">

												<form method="GET">
													<div class="row">
														<div class="col-sm-3">
															<label for="name">Nik</label>
														</div>
														<div class="col-sm-7">
															<input type="text" class="form-control" placeholder="Masukkan Nik" name="nik"> 
															<input type="hidden" name="status" value="BP">
														</div>
														<div class="col-sm-2">
															<input class="btn btn-default" type="submit" value="Cari">
														</div>
													</div>
												</form>
												<?php
													$nik = $_GET["nik"];
													if(isset($nik)){
														//printf("NIK = $nik<br>");
													}else{
														printf("nik belum diinput");
													}

													$status = $_GET["status"];
													if(isset($status)){
														//printf("status di pemanggilan = $status<br>");
													}else{
														//printf("status belum diinput<br>");
													}
																																							
													$koneksi=mysql_connect("localhost","root","");
													/*
													if($koneksi){
														printf("Database berhasil tekonek<br>");
													}else{
														printf("Database berhasil tekonek<br>");
													}
													*/

													$pilih = mysql_select_db("koperasi_btsa");
													/*
													if($pilih){
														printf("Database berhasil dipilih<br>");
													}else{
														printf("Database berhasil dipilih<br>");
													}
													*/												

													$tampil="select * from data_karyawan where nik=$nik";
													$hasil=mysql_query($tampil);
													

													//printf("nik diatas = $nik<br>");
													if(isset($nik)){
														//printf("NIK = $nik");
														if($nik==0){
															$nik=0;
														}else{
															while($data=mysql_fetch_row($hasil)){
															$nama=$data[1];
															}
														}
														
														if($nik==0){
															$nik=0;
														}else{
															$nik = $_GET["nik"];
															//printf("NIK = $nik<br>");
														}
													}
													
													//printf("nama = $nama<br>");
													
													
													//printf("status di php = $status<br>");

													$tampil = "SELECT * FROM data_keseluruhan WHERE nik=$nik AND status='BP'";
													$hasil=mysql_query($tampil);
													if(isset($nik)){
														//printf("NIK = $nik");
														while($data=mysql_fetch_row($hasil)){
															/*
															echo"<tr>
																	<td>$data[0]</td>
																	<td>$data[1]</td>
																	<td>$data[2]</td>
																	<td>$data[3]</td>
																	<td>$data[4]</td>
																	<td>$data[5]</td>
																	<td>$data[6]</td>
																	<td>$data[7]</td>
																	<td>$data[8]</td>
																	<td>$data[9]</td>
																	<td>$data[10]</td>
																	<td>$data[11]</td>
																	<td>$data[12]</td>
																	<td>$data[13]</td>
																</tr>";
																*/

																if($data[1]=="BP"){
																	//printf("<br>ini adalah BP<br>");
																}else{
																	//printf("<br>gagal<br>");
																}

																
																$sisa=$data[6];
																$total_pembayaran=$data[5];
																$status=$data[1];
																//printf("<p>$status</p>");
																
															
														}
													}
													//printf("status dari database = $status<br>");
													
													
													
												?>
												</div>
												<div class="space">
													<div class="row">
														<div class="col-sm-3">
															<label for="name">Nama Peminjam</label>
														</div>
														<div class="col-sm-9">
															<input type="text" class="form-control" placeholder="<?php printf("$nama"); ?>" disabled> 
														</div>
													</div>
												</div>
												<div class="space">
													<div class="row">
														<div class="col-sm-3">
															<label for="name">Sisa Pinjaman</label>
														</div>
														<div class="col-sm-9">
															<input type="text" class="form-control" placeholder="<?php printf("$sisa"); ?>" disabled> 
														</div>
													</div>
												</div>
												<div class="space">
													<div class="row">
														<div class="col-sm-3">
															<label for="name">Total Pembayaran</label>
														</div>
														<div class="col-sm-9">
															<input type="text" class="form-control" placeholder="<?php printf("$total_pembayaran"); ?>" disabled> 
														</div>
													</div>
												</div>
							<form method="GET" action="proses_bayar_pinjaman.php">
												<input type="hidden" name="nika" value="<?php echo"$nik"; ?>">
												<input type="hidden" name="status" value="BP">
												<div class="space">
													<div class="row">
														<div class="col-sm-3">
															<label for="name">Bayar</label>
														</div>
														<div class="col-sm-9">
															<?php
																//printf("sisa = $sisa");
																if($sisa==0){
																	echo '<input type="text" class="form-control" name="bayar" placeholder="Masukkan jumlah cicilan Anda" disabled>';
																}else{
																	echo '<input type="text" class="form-control" name="bayar" placeholder="Masukkan jumlah cicilan Anda">';
																}

															?>
															
														</div>
													</div>
												</div>
											</div> 
										</form>
									</div>
								</div>
							</div> 
							<div class="modal-footer"> 
								<input type="submit" class="btn btn-primary" value="Simpan">
								<input type="submit" class="btn btn-default" data-dismiss="modal" value="Keluar">
							</div> 

							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="footer">
                Copyright © 2016 Ivan Fernando. All Rights Reserved. Developed by AA Soft.
            </div>
        </div>
    </div>
</body>
</html>