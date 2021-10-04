<?php
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>homepage</h1>
    <!-- <h1><?php echo $data?></h1> -->
    <?php foreach($data as $d) : ?>
        <?php echo $d['Email']; ?>
        <?php echo $d['Password']; ?>
    <?php endforeach; ?>
</body>
</html>