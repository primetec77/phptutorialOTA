  <?php
    $first_name = 'Michael';
    $last_name = 'Adokwu';

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<h4><?php echo 'My name is' . ' ' . $last_name . $first_name ?></h4>
<h4><?php echo "my name is ${last_name} ${first_name}"; ?></h4>
<h4><?php echo "my name is $last_name $first_name"; ?></h4>
</body>
</html>