<title>Link Scrap</title>

<?php
$urlz = $_POST['urldom'];
$link = explode("\n",$urlz);
include 'simple_html_dom.php';

foreach($link as $url){
$html = file_get_html($url);
$zippy = substr($url,0,29);
$zippy = str_replace('m/','m',$zippy);

	foreach($html->find("iframe") as $f){ 
	 $f = $f->src;	//ngimbil isi atribut
	 $ahh = str_replace("/js/ViewerJS/index.html#../..",$zippy,$f);
	 $ahh = str_replace(' ','%20',$ahh);
	 $ahh = str_replace('[','%5b',$ahh);
	 $ahh = str_replace(']','%5d',$ahh);
	 echo $ahh;
	 echo "<br/>\n";
	}
}
?>

