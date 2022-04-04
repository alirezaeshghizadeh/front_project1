<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش نام</title>
</head>
<body>
    <h1>ویرایش نام</h1>
    <form action="../edit_user.php" method="post">
        <div>
            <label for="fullname">نام کامل</label>
            <input type="text" name="fullname" id="fullname">
        </div>
        <div>
            <label for="username">نام کاربری</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">کلمه عبور</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" name = "submit">ویرایش نام</button>
    </form>
</body>
</html>