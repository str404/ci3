<?php echo $judul ;?>
<hr>

<table><tr><th>KODE BARANG</th><th>Nama Barang</th><th>harga</th></tr>
<?php
//echo print_r($barang) ;
foreach ($barang as $b) {
	echo "<tr>
			<td>$b->kode_barang</td>
			<td>$b->nama_barang</td>
			<td>$b->harga</td>
		</tr>" ;
	//echo $b->nama_barang, '<br>' ;
}
?>
</table>
