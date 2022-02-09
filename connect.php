<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(fistName, lastName, gender, email, number)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $firstName, $lastName, $gender, $email, $number);
    $stmt->execute();
    echo "Registration Succesfully ..."
    $stmt->close();
    $conn->close();
}
?>
