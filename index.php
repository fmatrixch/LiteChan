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
$site = mysqli_query($conn, "select * from admin");
while($admin=mysqli_fetch_assoc($site)){
?>
<html>
<head>
<meta charset="utf-8">
</head>
<title><?php echo $admin['sitename']; ?></title>
<h1 style="color:white;background-color:blue;text-align:center;"><?php echo $admin['sitename']; }?></h1>
<span style="text-align:center;"><a href="/admin">篮圈</a> <a href="https://github.com/fmatrixch/LiteChan">项目</a></span>
<h3 style="color:white;background-color:blue;text-align:center;">发送串</h3>
<i>发送串时请遵循 HTML 语法规则。可酌情运用各种节目效果比如</i><span style="color:black;background-color:black;">刮刮乐</span><br>
<form action="upload.php" method="post">
名称：<input type="text" name="name" placeholder="不要写得太离谱"><br>
内容：<input type="text" name="pos" size="50" placeholder="发帖不规范，饼干两行泪"><br>
Emoji：<br>
<input type="radio" name="emoji" value=" ">无emoji<br>
<input type="radio" name="emoji" value="/(ㄒoㄒ)/~~">/(ㄒoㄒ)/~~<br>
<input type="radio" name="emoji" value="O(∩_∩)O">O(∩_∩)O<br>
<input type="radio" name="emoji" value="(●ˇ∀ˇ●)">(●ˇ∀ˇ●)<br>
<input type="radio" name="emoji" value="(￣▽￣)`">(￣▽￣)`<br>
<input type="radio" name="emoji" value="(╯▔皿▔)╯">(╯▔皿▔)╯<br>
<input type="radio" name="emoji" value="＜（＾－＾）＞">＜（＾－＾）＞<br>
<input type="radio" name="emoji" value="(￣(工)￣)">(￣(工)￣)<br>
<input type="radio" name="emoji" value="(⊙﹏⊙)">(⊙﹏⊙)<br>
<input type="radio" name="emoji" value="(*^_^*)">(*^_^*)<br>
<input type="radio" name="emoji" value="￣へ￣">￣へ￣<br>
<input type="radio" name="emoji" value="|電柱|">|電柱|<br>
签名档：<input type="text" name="append" placeholder="随便写"><input type="radio" name="append" value=" ">你可以不带这玩意<br>
身份：<input type="radio" name="name" value="匿名">以匿名身份发送<br>
<input type="submit" value="发送">
</form>



<?php 
$dat = mysqli_query($conn,"SELECT * FROM `po` ORDER BY `po`.`dat` DESC");
while($output=mysqli_fetch_assoc($dat)){
	echo "<span style='color:white;background-color:blue;'>Po. ".$output['name']." ".$output['dat']."</span><br>";
	echo $output['post']."<br>";
	echo "<i>".$output['append']."</i><br>";
	
}

?>
<br>
<span style="color:grey;">©<?php echo date("Y"); ?> <?php echo $admin['sitename']; ?></span>