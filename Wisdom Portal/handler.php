<?
$num = $_GET["num"];
$act = $_GET["act"];
$count = $_GET["c"];
if ($act == "l") {
	$dir = "./marks/".$num."l.txt";
	$file = fopen($dir,"w");
	fwrite($file , $count);
};
if ($act == "d") {
	$dir = "./marks/".$num."d.txt";
	$file = fopen($dir , "w");
	fwrite($file , $count);
}
?>