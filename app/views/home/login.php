<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
</head>
<body>
    <form action="/home/postlogin" method="post">
        Email:<input type="text" name="email" >
        Password:<input type="password" name="password" >
        <!-- <input type="confirm_password" name="password" > -->
        <input type="submit" name="submit" >
    </form>
</body>
</html>