<?PHP
/**Functions**/

function make_alpha($listOfNames){
	$returnString="";
	$names=explode(", ", $listOfNames);
	sort($names);
	foreach ($names as $key => $value) {
		if ($key<(count($names)-1)) {$returnString.= $names[$key] . ", ";}
		else {$returnString.= "and " . $names[$key];}
	}
	return $returnString;	
}


function copyRighted($copyRightYear){
	$time=time(); 
	$year= date("Y",$time);
	if ($year != $copyRightYear) {$copyRightYear .= " - " . $year;}
	return $copyRightYear;
}
function socialMediaIcons($className){

	global $fbAddress;
	global $twAddress;
	global $blAddress;
	global $liAddress;
	global $plAddress;
	global $msAddress;
	global $ytAddress;
	global $mainEmail;
	
	$smCounter=0;
	$returnstring='<ul class="' . $className . '">'  . PHP_EOL;
	
	if ($fbAddress) {++$smCounter; $returnstring.='<li><a href="' . $fbAddress . '"><img src="images/sm_Small_fb.png" border="0" ></a></li>' . PHP_EOL;}
	if ($twAddress) {++$smCounter; $returnstring.='<li><a href="' . $twAddress . '"><img src="images/sm_Small_tw.png" border="0" ></a></li>' . PHP_EOL;}
	if ($blAddress) {++$smCounter; $returnstring.='<li><a href="' . $blAddress . '"><img src="images/sm_Small_bl.png" border="0" ></a></li>' . PHP_EOL;}
	if ($liAddress) {++$smCounter; $returnstring.='<li><a href="' . $liAddress . '"><img src="images/sm_Small_li.png" border="0" ></a></li>' . PHP_EOL;}
	if ($plAddress) {++$smCounter; $returnstring.='<li><a href="' . $plAddress . '"><img src="images/sm_Small_pl.png" border="0" ></a></li>' . PHP_EOL;}
	if ($msAddress) {++$smCounter; $returnstring.='<li><a href="' . $msAddress . '"><img src="images/sm_Small_ms.png" border="0" ></a></li>' . PHP_EOL;}
	if ($ytAddress) {++$smCounter; $returnstring.='<li><a href="' . $ytAddress . '"><img src="images/sm_Small_yt.png" border="0" ></a></li>' . PHP_EOL;}
    if ($smCounter <= 1) {$returnstring.='<li><a href="mailto:' . $mainEmail . '"><img src="images/mail.png" border="0" ></a>' . PHP_EOL;}
	
	$returnstring.="</ul>" . PHP_EOL;
	return $returnstring;
}
    
?>