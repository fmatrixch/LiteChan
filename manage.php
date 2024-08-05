<title>更新成功</title>
<meta charset="utf-8">
<?php
//↓往里面输入从服务器方所提供的服务器相关信息
$servername = "";//服务器host（地址）
$username = "";//服务器用户名
$password = "";//服务器密码
$dbname = "";//服务器数据库名
 //↑连接到服务器
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$newname = $_POST['sitenam'];
$nam = "UPDATE `admin` SET `sitename`='$newname' WHERE 1";
 
if (mysqli_query($conn, $nam)) {
    echo "更新成功，<a href='/'>回到首页</a>";
} else {
    echo "错误: " . $nam . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>