
 <?php 

 include('../lib/lib_func.php');
include('../lib/titik_koma.php');
$link          = koneksi_db();

 $sql="SELECT * FROM pelanggan
 WHERE pelanggan.`status` = 'Aktif'";             


 $res=mysql_query($sql,$link);
 $banyakrecord=mysql_num_rows($res);
 if($banyakrecord>0){
 	?>

 	<table width="100%" border="1">
 		<thead>
 			<tr>
 				<th>No.</th>
 				<th>Nama Agen</th>
 				<th>Nama Pengguna</th>
 				<th>Kata Sandi</th>
 			</tr>
 		</thead>
 		<tbody>

 			<?php
 			$i=0;
 			while($data=mysql_fetch_array($res)){
 				$i++;
 				?>
 				<tr>
 					<td><?php  echo $i; ?>.</td>
 					<td><?php echo $data['nama_pelanggan']; ?></td>
 					<td><?php echo $data['username']; ?></td>
 					<td><?php echo $data['unencrypt_password']; ?></td>
 				</tr>
 				<?php
 			}
 			?>

 		</tbody>
 	</table>
 	<?php
 }
 else{
 	echo "data tidak ada";
 }