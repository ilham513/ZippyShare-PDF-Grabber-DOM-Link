<title>Link Search</title>

<?php
#$urlz = $_POST['urldom2'];
$urlz = "https://www.meganebuk.net/2017/09/akame-ga-kill-zero-bahasa-indonesia.html";
$url = $urlz;
include 'simple_html_dom.php';


$html = file_get_html($url);
echo '<iframe src="'.$html.'"></iframe>';

/*

$html = file_get_html($url);

foreach($html->find("a[class='maia-button maia-button-primary']") as $f){ 
	 $f = $f->href;	//ngimbil isi atribut
	 $ahh = $f;
	 $url = str_replace(']','%5d',$ahh);
	 echo $url;
}

*/





?>
