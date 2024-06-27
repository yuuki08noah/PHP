<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
if (mysqli_connect_errno()) {
    echo 'Failed to connect MySQL : ' . mysqli_connect_error();
    exit();
}
$query = "delete from myuser where num=".$_GET['num'];
$result = mysqli_query($conn, $query);

if($result) {
    echo "<script>alert('Succeeded to delete data');</script>";
} else {
    echo "<script>alert('Failed to delete data');</script>";
}
?>
<meta http-equiv="refresh" content="0; url=view.php">
