<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<table class="tabel table-primary center">
<?php

for ($i=1;$i<=10;$i++){
    if($i<1==0){
    ?> 
    
    <tr class="table table-primary center" >
    <td scope="row"> 2</td>
    <td> x</td>
    <td><?php echo $i?></td>
    <td scope="row"> =</td>
    <td><?php echo $i*2?>  </td>
    </tr>
<?php
}
}
?>


</table>

</body>
</html>