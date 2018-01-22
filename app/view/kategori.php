<!DOCTYPE html>
<html>
<head>
	<title>Mini Framework</title>

	<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['path'] ;?>css/style.css">
</head>
<body>
	<div id="container">
	<h1>Selamat Datang Di Mini Framework</h1>

	<div id="body">
		<h1>Daftar Kategori</h1>
		<?php
		foreach($data['category_name'] as $coba){ ?>
		<p><?php echo $coba['post_cat'];?></p>
		<p><?php echo $coba['category_name'];?></p>
		<?php }?>
	</div>

	<p class="footer">CopyRight By Stefanus Prasetyo Nugroho</p>

	
</body>
</html>


 