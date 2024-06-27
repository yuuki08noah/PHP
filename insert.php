<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
if (mysqli_connect_errno()) {
    echo 'Failed to connect MySQL : ' . mysqli_connect_error();
    exit();
}
$query = "insert into myuser (name, age, gender, work) values ('".$_POST['name']."', ".$_POST['age'].", '".$_POST['gender']."', '".$_POST['work']."');";
$result = mysqli_query($conn, $query);

if($result) {
    echo "<script>alert('Succeeded to insert data');</script>";
} else {
    echo "<script>alert('Failed to insert data');</script>";
}
?>
<meta http-equiv="refresh" content="0; url=view.php">
