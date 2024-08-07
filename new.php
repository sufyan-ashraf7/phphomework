<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for=""> persentage</label>
            <input type="text" name="username" class="form-control mb-5 " placeholder="enter your persentage">
            <br>
            <label for=""> if you what toi cheek your persetage so click buttin</label>
            <button  type="submit" name="button" class=" btn btn-secondary">click</button>
        </form>
    </div>
<?php 
if(isset($_POST ['button'])){
    $per = $_POST['username'];
    if($per>90 && $per<=100){
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>you are  aligible for take addmition  </strong>
        </div>
        <?php
    }
    else if($per>80 && $per<=90){
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>you are not  aligible for take addmition  </strong>
        </div>
        <?php
    }
    else if($per>70 && $per<=80){
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>you are not  aligible for take addmition  </strong>
        </div>
        <?php
    }
    else if($per>60 && $per<=70){
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>you are not  aligible for take addmition  </strong>
        </div>
        <?php
    }
    else if($per>50 && $per<=60){
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>you are not  aligible for take addmition  </strong>
        </div>
        <?php
    }
    else if($per>40 && $per<=50){
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>you are not  aligible for take addmition  </strong>
        </div>
        <?php
    }
    else if($per>30 && $per<=40){
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>you are not  aligible for take addmition  </strong>
        </div>
        <?php
    }
    else {
        ?>
        <div class="container mt-5 alert alert-primary">
            <strong>sorry sir  </strong>
        </div>
        <?php
    }
}
?>

</body>
</html>