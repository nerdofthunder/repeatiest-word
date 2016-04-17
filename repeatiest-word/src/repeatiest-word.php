<?php

require __DIR__ . '/../src/Word.php';
require __DIR__ . '/../src/Passage.php';

if (count($argv) != 2){
	die ("usage: php repeatiest-word [file]");
}

$myfile = fopen($argv[1], "r") or die("Unable to open file!");
$passage = new Passage(fread($myfile,filesize($argv[1])));
fclose($myfile);

echo $passage->getRepeatiestWord()."\n";
	