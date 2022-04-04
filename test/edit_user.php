<?php
    include 'settings.php';


if( isset( $_POST['submit'] ) ){ // اگر از فرم آمده
    // a. validate data
    $id = $_GET['id'];
    // b. عملیات درج
    // 1. connect db
    $dbc = new mysqli( $dbHost, $dbUser, $dbPass, $dbName);
    $dbc -> set_charset('utf8_mb4');
    // 2. create query
    $sql = "UPDATE users SET
            fullname = '{$_POST['fullname']}',
            username = '{$_POST['username']}',
            password = '{$_POST['password']}' 
            WHERE id = {$_GET['id']}";
    // 3. execute query
    $result = $dbc -> query( $sql );
    // 4. close connection
    $dbc -> close();

    // include a view
    echo 'با موفقیت ویرایش شد <br/>';
    
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo ("fullname=".$fullname."<br/>");
    echo ("username=".$username."<br/>");
   echo ("password=".$password."<br/>");
}
else{
    // نمایش فرم
    include 'view/edit_user.php';
}
?>