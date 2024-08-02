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
   <tr class="tabel table-primary center">
    <?php
    $collection=[
        ['sufyan ' , 'ashraf     ' , ' ghani ' , '  ghafor ' , 'aladin' ],
        ['sufyan','ashraf','ghani','ghafor','aladin'],
        ['sufyan','ashraf','ghani','ghafor','aladin'],
        ['sufyan','ashraf','ghani','ghafor','aladin'],
        ['sufyan','ashraf','ghani','ghafor','aladin'],
    ];?>
<tr class="tabel table-primary center row">
    <?php
    // echo $collection[1];
    ?> <td class="row">   <?php
    for($i=0;$i<count($collection);$i++){
        echo "<br>"." ";?>   </td> <?php ?> <td class="row">  <?php
        for($u=0;$u<count($collection[$i]);$u++){
     echo $collection [$i][$u] ." ";
    ?> </td><?php
     ?></tr><?php
        }
    }
    ?>    
     </tr>
   
</body>
</html>