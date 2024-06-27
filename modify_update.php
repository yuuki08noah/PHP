<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
if (mysqli_connect_errno()) {
    echo 'Failed to connect MySQL : ' . mysqli_connect_error();
    exit();
}
$query = 'update myuser set name = "'.$_POST['name'].'", age = '.$_POST['age'].', gender = "'.$_POST['gender'].'", work = "'.$_POST['work'].'" where num='.$_POST['mynum'];
$result = mysqli_query($conn, $query);
if($result) {
    echo "<script>alert('Succeeded to modify data');</script>";
} else {
    echo "<script>alert('Failed to modify data');</script>";
}
?>
<meta http-equiv="refresh" content="0; url=view.php">
