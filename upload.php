<title>发送成功</title>
<meta charset="utf-8">
<?php
ini_set('date.timezone','Asia/Shanghai');
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

$thread = $_POST['pos'].$_POST['emoji'];
$time = date('Y-m-d H:i:s');
$append=$_POST['append'];
$sql = "INSERT INTO po (post,name,dat,append) VALUES ('$thread','$_POST[name]','$time','$append')";
 
if (mysqli_query($conn, $sql)) {
    echo $_POST['name']."在".$time."发送成功，<a href='/'>回到首页</a>";
} else {
    echo "错误: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>