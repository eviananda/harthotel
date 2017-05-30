<!DOCTYPE HTML>
<html>
<head>
<title>Membuat Read More di CodeIgniter</title>
<style type="text/css">
#kotak
    {
    width: 40%;
    height: 25%;
    background-color:lightgreen;
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
        <?php if($row->id_artikel == '11'){echo $row->judul; echo $row->isi;} 

        ?>
    <h1><?php echo $row->judul;?></h1>
    <?php $lagu=$row->isi;
    $lagu=character_limiter($lagu,100);?>
    <p><?php echo $lagu;?></p>
    <a  href="<?php echo base_url();?>index.php/baca/selanjutnya/<?php echo $row->id_artikel;?>">Selanjutnya</a>
    <?php endforeach;?>

    </div>
    </body>
    </html>