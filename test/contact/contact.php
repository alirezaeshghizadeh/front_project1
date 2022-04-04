﻿<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما</title>
    <style>
        textarea{
            height:     9em;
        }
        input:not( [type="submit"] ), textarea{
            width:      50%;
        }
        label{
            display: inline-block;
            width:  6em;
            margin: 0 1em;
            text-align: right;
        }
        form div *{
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <h1>تماس با ما</h1>
    <form action="contact_controller.php" method = "get">
        <div>
            <label for="title"> عنوان: </label><input type="text" name="title" id="title">
        </div>
        
        <div>
            <label for="description">متن پیام: </label><textarea name="description" id="description"></textarea>
        </div>
        <input type="submit" value="ارسال">
        <button type="reset">جدید</button>
    </form>
</body>
</html>