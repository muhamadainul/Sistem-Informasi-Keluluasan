<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>HIMSYA</title>
</head>

<body>
	<header>
		<div id="logo">
			<div class ="logo-left">
				<img src="images/jateng.png" />
			</div>
			
			<div class="logo-right">
				<img src="images/himsya.png" />
			</div>
		</div>
				
		<div id="description">
			<div class="app-name">
				SISTEM INFORMASI KELULUSAN
			</div>
			
			<div class="app-author">
				STMIK HIMSYA SEMARANG
			</div>
		</div>
	</header>

	<article>
	
	<?php
		include "connect.php";
	?>
			
		<div id="post">
			<div class="post-title">
				PENGUMUMAN KELULUSAN
			</div>
		
			<div class="post-form">
				<form method="post">
					<input class="textarea" name="no" type="text" placeholder="MASUKAN NIM ANDA" required />
					<input class="button" name="submit" type="submit" value="LIHAT KELULUSAN !"/>
				</form>
			</div>
		</div>
		
		<?php
		if(isset($_REQUEST['submit'])){
			$numexam = $_REQUEST['no'];
			
			$result = mysqli_query($db_conn, "SELECT * FROM siswa WHERE no_test='$numexam'");
			if(mysqli_num_rows($result) > 0){
				$data = mysqli_fetch_array($result);
		?>	
		
		<table id="identity">
			<tr>			
				<td class="parameter">Nama</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['nama']; ?></td>
			</tr>
			
			<tr>			
				<td class="parameter">Kompetensi Keahlian</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['prodi']; ?></td>
			</tr>
		</table>
		
		<!--
		<div class="post-title">
		    NILAI Ujian Nasional Berbasis Komputer (UNBK)
		</div>
		-->
		
		<table id="exampoint">
			<thead class="exam-head">
				<tr>
					<th>Bahasa Indonesia</th>
					<th>Bahasa Inggris</th>
					<th>Matematika</th>
					<th>Kejuruan</th>
				</tr>
			</thead>
			
			<tbody class="exam-body">
				<td><?php echo $data['kind']; ?></td>
				<td><?php echo $data['king']; ?></td>
				<td><?php echo $data['kmat']; ?></td>
				<td><?php echo $data['kpro']; ?></td>
			</tbody>
		</table>
			
		<?php
		if($data['status'] == 1){
			echo '
				<div class="alert-congrats">
					<strong>SELAMAT !</strong> Anda dinyatakan <strong>LULUS</strong>
 				</div>';
		/*
		if($random == 0) {
			echo '
				<div class="apalah">
				    
				</div>';
		*/
		} else {
			echo '
				<div class="alert-sorry">
					<strong>MAAF !</strong> Anda dinyatakan <strong>TIDAK LULUS</strong>
				</div>';
		}
		?>
		<?php
			} else {
				echo '
				<div class="alert-sorry">
				    Nomor Induk Tidak Ditemukan !</br>
					Periksa Kembali Nomor Induk Anda.
				</div>';
			} 
		}else {
				
			?>
			<?php
			}
			?>
			
		<!--
		<div id="countdown">
		            Berdasarkan Hasil Rapat Pleno Dewan Guru SMK Negeri 1 Wirosari pada tanggal 2 Mei 2018, </br>tentang Pengumuman Kelulusan Tahun Ajaran 2017/2018 disampaikan bahwa :
		            </br>
			        Pengumuman dapat diakses pada tanggal <strong>3 Mei 2018 Pukul 15.00 WIB</strong></br></br><strong>Dalam Hitungan Mundur</strong></br>
				    <script type="text/javascript" src="./countdown/jquery-2.0.3.js"></script>
                    <script type="text/javascript" src="./countdown/jquery.countdownTimer.js"></script>
                    <span id="future_date"></span>
                <div class="timer">
                   <script>
                        $(function(){
                            $('#future_date').countdowntimer({
                                dateAndTime : "2018-05-03 15:00:00",
                                size : "lg",
                                regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
                                regexpReplaceWith: "$2:$3:$4"
                            });
                        });
                    </script>
                </div>
		</div>
		-->
		
		<div id="spanner">
		    <br/><br/>
		</div>
	</article>
	
	<footer>
		<div id="information">
			<div class="founder">
				Developed by Muhamad Ainul
			</div><div class="license">
				&copy2018 &middot All right reserved
			</div>
	</footer>
</body>
</html>