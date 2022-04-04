<?php
    include '../settings.php';

if( isset( $_GET['submit'] ) ){ // اگر از فرم آمده
    // a. validate data
    // b. عملیات درج
    // 1. connect db
    $dbc = new mysqli( $dbHost, $dbUser, $dbPass, $dbName);
    $dbc -> set_charset('utf8_mb4');
    // 2. create query
    $sql = "INSERT INTO contact(title, message) VALUES('{$_GET['title']}', '{$_GET['message']}')";
    // 3. execute query
    $result = $dbc -> query( $sql );
    // 4. close connection
    $dbc -> close();

    // include a view
    echo ' با موفقیت ثبت شد <br/>';
    $title = $_GET['title'];
    $message = $_GET['message'];
    echo ("titile=".$title."<br/>");
    echo ("message=".$message."<br/>");

}
else{
    // نمایش فرم
    include 'contact.php';
}
?>