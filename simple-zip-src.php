<title>Link Search</title>

<?php
$urlz = $_POST['urldom2'];
$url = $urlz;
include 'simple_html_dom.php';

$html = file_get_html($url);

foreach($html->find("a") as $f){ 
	 $f = $f->href;	//ngimbil isi atribut
	 $ahh = $f;
	 $ahh = str_replace(']','%5d',$ahh);
	 echo $ahh;
	 echo "<br/>\n";
}

?>

