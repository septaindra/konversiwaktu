<form action="" method="post">
<table border="3" align="center" bgcolor="#00CCFF">
<tr>
	<td><h1 align="center">Konversi Waktu</h1></td>
</tr>
<tr>
<td>
	<table border="0" align="center">
		<tr>
			<td align="right">Masukkan Waktu :</td>
			<td><input type="text" name="waktu" required=""></td>
		</tr>
		<tr>
			<td align="right">Konversi Dari :</td>
			<td align="left"><select name="w1">
				<option value="jam">Jam</option>
				<option value="menit">Menit</option>
				<option value="detik">Detik</option>
			</select></td>
		</tr>
		<tr>
			<td align="right">Ke :</td>
			<td align="left"><select name="w2">
				<option value="jam">Jam</option>
				<option value="menit">menit</option>
				<option value="detik">Detik</option>
			</select></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="hasil" value="Proses">
			 <input type="reset" name="batal" value="Batal"></td>
		</tr>
		<tr>
			<td align="right">Hasil :</td>
			<td><?php require "konversi.php"?></td>
		</tr>
	</table>
</td>
</tr>
</table>
</form>