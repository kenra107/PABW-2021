<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cari Produk</title>
  	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method="post" id="search_bar" align="center">
		<input type="text" id="tulis_produk" name="tulis_produk" placeholder="Cari produk">
		<button type="submit" id="cari_produk" name="cari_produk">Cari</button>
	</form>

	<div class="filter_button" align="center">
		<button id="filter" name="filter">Filter</button>
	</div>

	<div class="filter_button" align="center">
		<input id="filter_cb" type="checkbox" name="filter_cb">
		<div class="filter_menu">
			<ul>
				<li>Urutkan berdasar harga</li>
				<li>Terpopuler</li>
			</ul>
		</div>
	</div>


</body>
</html>

<?php
    include "cari.php";

    if ($_POST[tulis_produk] <> null) {
    	if(isset($_POST['cari_produk'])){
    		$i=1;
      		$ambildata = mysqli_query($cari,"select nama_produk from ...");
      		while($export = mysqli_fetch_array($ambildata)){
      			if($_POST[tulis_produk] == $export[nama_produk])
          		echo"
          		<tr>
            		<td>$export[nama_produk]</td>
          		</tr>"; 
          		$i++; 
      		}
    	}
    }       
?>