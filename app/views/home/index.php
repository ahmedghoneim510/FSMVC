<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php echo $h1?>

<table class="table">
    <th>
        <td>ID</td>
        <td>-name</td>
        <td>Email</td>
        <td>password</td>
    </th>
    <?php foreach($data as $da) :?>
    <tr>
        <td></td>
        <td><?= $da['id']?></td>
        <td><?= $da['name']?></td>
        <td><?= $da['email']?></td>
        <td><?= $da['password']?></td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>