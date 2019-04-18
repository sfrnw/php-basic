<?php
$db = @mysqli_connect("localhost","test","12345","images") or die("Ошибка" . mysqli_connect_error());
$sql = "SELECT * FROM `img` WHERE 1";
$result = mysqli_query($db,$sql);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Домашняя работа</title>
</head>
<body>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="' . '/image.php?id=' . $row['id'] . '" target="_blank"><img src=' . $row['img_small'] . '></a>';
}
?>
</body>
</html>