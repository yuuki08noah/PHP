<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
if (mysqli_connect_errno()) {
    echo 'Failed to connect MySQL : ' . mysqli_connect_error();
    exit();
}
$query = 'select * from myuser where num='.$_GET['num'].';';
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if($count==0) {
    echo "조회값이 없음";
} else {
    $row = mysqli_fetch_assoc($result);
}
?>
<html>
    <h3>정보 수정 페이지</h3>
    <form action="modify_update.php" method="post">
        Name : <input type="text" name="name" value="<?php echo $row['name']?>"><br>
        Age : <input type="text" name="age" value="<?php echo $row['age']?>"><br>
        Gender : <input type="text" name="gender" value="<?php echo $row['gender']?>"><br>
        Work : <input type="text" name="work" value="<?php echo $row['work']?>"><br>
        <input type="hidden" name="mynum" value="<?php echo $_GET['num']?>">
        <input type="submit" value="store"> 
    </form>
</html>