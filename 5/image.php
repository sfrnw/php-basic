<?php
$db = @mysqli_connect("localhost","test","12345","images") or die("Ошибка" . mysqli_connect_error());
$id = $_GET['id'];
$sql = "SELECT * FROM `img` WHERE id = {$id}";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Домашняя работа</title>
</head>
<body>
<?php
    echo '<img src=' . $row['img_big'] . ' >';
?>


</body>
</html> 