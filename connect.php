<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$file = $_POST['file'];



$connect = new mysqli('localhost', 'root', '', 'contactus');
if($connect->connect_error) {
    echo "$connect->connect_error";
    die("Connection Failed : ". $connect->connect_error);
}else {
    $stmt= $connect-> prepare("INSERT INTO form (`name`, `email`, `phone`, `message`, `file`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss",  $name,$email, $phone, $message, $file);
    $stmt->execute();
    echo "Сообщение успешно отправлено!";
    $stmt->close();
    $connect->close();
}
?>
