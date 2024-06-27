<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
if (mysqli_connect_errno()) {
    echo 'Failed to connect MySQL : ' . mysqli_connect_error();
    exit();
}
$query = 'select * from myuser';
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

echo '
<table border=1px width=500px">
    <tr align="center">
        <td colspan="7">
            데이터는 '.$count.'개 입니다.
        </td>
    </tr>
    <tr>
        <th>Num</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Work</th>
        <th>Delete</th>
        <th>Modify</th>
    </tr>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr align="center"><td>'.$row['num'].'</td><td>'.$row['name'].'</td><td>'.$row['age'].'</td><td>'.$row['gender'].'</td><td>'.$row['work'].'</td><td><a href="delete.php?num='.$row['num'].'">삭제</a></td><td><a href=modify.php?num='.$row['num'].'>수정</a></td></tr>';
}

echo '</table>';
mysqli_close($conn);
?>
<html>
    <form action="insert.php" method="post">
        Name : <input type="text" name="name"><br>
        Age : <input type="text" name="age"><br>
        Gender : <input type="text" name="gender"><br>
        Work : <input type="text" name="work"><br>
        <input type="submit" value="store">
    </form>
</html>