<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
	
		{include file="_bloklar/head_admin.tpl"} 

	</head>
	<body>
		<table class="table_security" cellpadding="0" cellspacing="0">
			<tr>
	
				<td class="td_div">
				
				<br />
				
				{if $hata} 
				<div class="hata">{$hata}</div>
				{/if}
				
					<form name="login" method="post" action="admin_giris.php">
						<p>
							<b>Admin Girişi</b>
						</p>
						<p>
							<input type="password" name="sifre" class="admintext" />
						</p>
						<p><input type="image" src="resimler/ok.gif" class="adminpicbutton" alt="Tamam" title="Tamam" /></p>
						<a href="index.php">Galeri Sayfası</a>
	
					</form> <br />
					<br /></td>
			</tr>
			<tr>
				<td class="td_div"><br />
					<p>Bu proje açık kaynak kodlu bir galeri projesidir. Projenin adresine aşağıdaki adresten ulaşabilirsiniz.</p>
					<p><a href="#">deneme</a></p>
					<br />
				</td>
			</tr>
		</table>
	
	</body>
</html>

