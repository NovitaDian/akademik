<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<h4>FORM PENJUMLAHAN</h4>
<HR></HR>
<?php
$server=$_SERVER['PHP_SELF'];
?>
<form action="<?php echo $server;?>" method="post">
<TABLe>
    <Tr>
        <Td>Nilai A</Td>
        <Td>:</Td>
        <Td><input type="text" name="nilai_a" class="form-control"id=""></Td>
    </Tr>
    <Tr>
        <Td>Nilai B</Td>
        <Td>:</Td>
        <Td><input type="text" name="nilai_b" class="form-control" id=""></Td>
    </Tr>
    <Tr>
        <Td></Td>
        <Td></Td>
        <Td><button type="submit" class="btn btn-primary">Tambah</button> 
        <button type="reset" class="btn btn-warning">Reset</button> 
    </Td>
    </Tr>
</form>
<?php   
$a=$_POST['nilai_a'];
$b=$_POST['nilai_b'];
$hasil=$a+$b;
?>
    <Tr>
    <Td>Hasil</Td>
        <Td>:</Td>
        <Td>
            <?php
            echo "$hasil";
            ?>
            </td>
    </Tr>

</TABLe>
