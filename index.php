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
<span style="text-align:center;"><a href="https://github.com/fmatrixch/LiteChan">GitHub Project</a></span>
<h3 style="color:white;background-color:blue;text-align:center;">Threads</h3>
<i>HTML-styling required. You can</i><span style="color:black;background-color:black;">blackout</span>here!<br>
<form action="upload.php" method="post">
Name: <input type="text" name="name" placeholder="Type here"><br>
Post: <input type="text" name="pos" size="50" placeholder="Type here"><br>
Emoji: <br>
<input type="radio" name="emoji" value=" ">N/A<br>
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
Append: <input type="text" name="append" placeholder="Actually"><input type="radio" name="append" value=" ">you can come without this<br>
Anonymous? <input type="radio" name="name" value="Anonymous">Yes<br>
<input type="submit" value="Send">
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
