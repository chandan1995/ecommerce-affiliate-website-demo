<?php
error_reporting(0);
/*
* Author 	: Expert coder
* Email 	: expertcoder10@gmail.com
* Subject 	: Autocomplete using PHP/MySQL and jQuery
*/
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=flip', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'];
$sql = "SELECT * FROM phone WHERE title LIKE (:keyword)";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$sname = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['title']);
	// add new option
    echo '<li onclick="set_item(\''.$rs['title'].'\')">'.$sname.'</li>';
}
?>
