<?php

date_default_timezone_set('Asia/Kamchatka');

$connect = new PDO('mysql:host=localhost;dbname=helpdesk;charset=utf8', 'root', 'vertrigo');
$ffff = 'ewq';
if (! empty($_POST)) {
    if (isset($_POST['CreateTicket'])) {
        $query = "INSERT INTO ticket VALUES (NULL, :user, :title, :description, :type, :status, :date, :time)";
        $msg = $connect->prepare($query);
        $msg->execute(array(
            ':user' => get_current_user(),
            ':title' => $_POST['title'],
            ':description' => $_POST['description'],
            ':type' => $_POST['type'],
            ':date' => date("y.m.d"),
            ':time' => date("H:i:s"),
            ':status' => "Новая",
        ));

        header("Location: index.php");
    }
}
?>