<?php  
// konstanta

define("NAMA", "Indra Rusyana");
echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR; 

echo "<br>";

// define tidak bisa berada didalam class sedangkan const bisa didalam kelas

class Coba{
	
	const STR = "Halo";

}

echo coba::STR;
echo "<br>";

// magic const

echo __LINE__;
echo "<br>";
echo __FILE__;

?>