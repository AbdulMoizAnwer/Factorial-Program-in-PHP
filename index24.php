<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Program</title>
</head>
<body>
    <h1>Factorial Program</h1>
    <form action="#" method="POST">
        <label>Write a number to get its Factorial</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

//FOR LOOP
if(isset($_POST['submit'])){
    $fact = 1;
    $N1 = $_POST['n1'];
    for($i=1;$i<=$N1;$i++){
        $fact = $fact * $i;
    }
    echo $fact;
}


//WHILE LOOP
if(isset($_POST['submit'])){
    $fact = 1;
    $N1 = $_POST['n1'];
    $i = 1;
    while($i<=$N1){
        $fact = $fact * $i;
        $i++;
    }
    echo $fact;
}


//DO WHILE LOOP
if(isset($_POST['submit'])){
    $fact = 1;
    $N1 = $_POST['n1'];
    $i = 1;
    do{
        $fact = $fact * $i;
        $i++;
    }while($i<=$N1);
    echo $fact;
}

?>
