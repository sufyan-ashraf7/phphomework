<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container ml-5 mr-5">
        <form action="" method="post">
<div class="mb-3">
<label for=""> name</label>
<input type="text"name="usernam" class="form-control" placeholder="name" >
<br>
<label for="">sacond_name</label>
<input type="text"name="username" class="form-control" placeholder="name" > 
<br>
<button type="submit" class="btn btn-primary"name="submitedata"  > button</button>
</div>

        </form>
    </div>
    <?php 
    if (isset($_POST['submitedata'])){
    $username = $_POST['username'];
    $usernam = $_POST['usernam']
    ?>
    <div class="container">
    <table class="container alert alert-primary" >
<tr>
    <th class="text-center"><strong class="text-center"><?php echo$username ?></storng> </th>
</tr>
<tr>

<th class="text-center "><strong class="text-center"><?php echo$usernam ?></storng> </th>
    </tr>

    </table>
    </div>
 
    <?php
}
?>
</body>
</html>