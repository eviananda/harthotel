<!DOCTYPE HTML>
<html>
<head>
<title>Membuat Read More di CodeIgniter</title>
<style type="text/css">
#kotak
{
width: 40%;
height: 25%;
background-color:dark;
float: left;
}
.isi
{
color: black;
}
</style>
</head>
<body>
<div id="kotak">
<?php foreach ($data as $row):?>
<h1><?php echo $row->judul;?></h1>
<p><?php echo $row->isi;?></p>
<a  href="<?php echo base_url();?>#artikels">Kembali</a>
<?php endforeach;?>
</div>
</body>
</html>