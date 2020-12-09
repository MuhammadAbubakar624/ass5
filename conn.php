<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 


    $connection=mysqli_connect('localhost','root','');
    if($connection)
    {
     //   echo " You are Successfully Connected to MySql </br>";
    }
    else
    echo  mysqli_connect_error();
    $db_name="student_db";
    $selected=mysqli_select_db($connection,$db_name);
    if($selected)
    { 
      //  echo " You are Connected with the Database </br>";
    }

    ?>
</body>
</html