<?php
if( isset($_POST['enter'])){
//     $myname = $_POST['myname'];
//     $myage = $_POST['myage'];
//     echo "<h4>My name is {$myname}</h4>";
//     echo " <br> <h4>My age is {$myage}</h4>"; 
//     echo " " ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .img-fluid{
            width: 350px;
            height: 350px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        input[type=text]{
            display: block;
            margin-right: auto;
            margin-left: auto;
            /* margin-top: ; */
            width: 50%;
            height: 40px;
        }
        input[type=number]{
            display: block;
            margin-right: auto;
            margin-left: auto;
            margin-top:10px;
            width: 50%;
            height: 40px;
          
        }
        button{
            display: block;
            margin-right: auto;
            margin-left: auto;
            margin-top: 10px;
            width: 20%;
            height: 40px;
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
        <img src="assets/images/logo 2.png" class="img-fluid" alt="">
        <form action="access_post.php" method="post">
        <input type="text" name="myname" placeholder="enter you name here!">
        <input type="number" name="myage" placeholder="enter you age here!">
        <button type="submit" name="enter">submit</button>
    
        
    </div>
</body>
</html>