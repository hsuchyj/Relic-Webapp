<?php
$myfile = fopen("examExport.txt", "w") or die("Unable to open file!");
$arr = $_POST['myData'];
$expArr = json_decode($arr);
//var_dump($expArr);
//question id must always be first value
for($i= 0; $i < count($expArr); $i++)
{
	foreach($expArr[$i] as $key => $value)
	{
	//echo $value;
	if($key === "questionText")
	{
		fwrite($myfile, ($i+1).") ");
	}
	if($key !== "questionId")
	{
		fwrite($myfile, $value);
	}
	}
}
fclose($myfile);
?>