<html>

<head>
    <title>Visitor Counter Shits</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>


<body style="text-align: center; background: url('http://i577.photobucket.com/albums/ss212/Yashido/Hypnotic%20Seizure/Seizure-rainbow.gif'); background-position: center; background-size: 100%;">
<div style="text-align: center;">
<h1 style="font-family: 'arial'; color: #ffffff;">JOCELIN LEE PROJECT 3</h1>
<div style="margin-left: auto; margin-right: auto; font-size: 20pt; color: #ffffff; text-align: center; background: url(http://3datelier.com/Psy24a_animation_3dateliercom.gif); background-size: 100%; height: 150px; width: 200px; border-radius:5px;">
<h1 style="font-family: 'arial'; color: #00ff00;">Visitors</h1>
<?php
//outputs the result of the python scripts
echo exec('python get_visitors.py');
exec ('python modify_visitors.py');
?>
</div>

<div style="margin-left: auto; margin-right: auto; text-align: center; background: url(http://th806.photobucket.com/albums/yy342/pzimaruss/th_psychedelic.gif); height: 200px; color: #ffffff; width: 200px; background-position: center; border-radius: 5px;">
<h1 style="font-family: 'arial'; color: #ffff00">Browser Counter</h1>
<?php
//include the shits
require './phpbrowscap-1.0/browscap/Browscap.php';

//read in file with info
$file=fopen('browsers.txt','r');
if ($file == false)
{
  echo ("Error in loading data info.");
  exit();
}
//read chrome (first line)
$chrome_num=fgets($file);
//read firefox
$firefox_num=fgets($file);
//read opera
$opera_num=fgets($file);
//read safari
$safari_num=fgets($file);
//read is
$ie_num=fgets($file);

fclose($file);
$file=fopen('browsers.txt','w');
echo "Chrome: $chrome_num <br/>
     Firefox: $firefox_num <br/>
     Opera: $opera_num <br/>
     Safari: $safari_num <br/>
     Internet Explorer: $ie_num";

//update the values of the counters in file
$new_chrome_num=intval($chrome_num);
$new_firefox_num=intval($firefox_num);
$new_safari_num=intval($safari_num);
$new_opera_num=intval($opera_num);
$new_ie_num=intval($ie_num);

$bc = new Browscap('./cache/dir');
$browser = $bc->getBrowser();

switch ($browser->Browser) {
  case "IE":
    $new_ie_num++;
    break;
  case "Firefox":
    $new_firefox_num++;
    break;
  case "Safari":
    $new_safari_num++;
    break;
  case "Opera":
    $new_opera_num++;
    break;
  case "Chrome":
    $new_chrome_num++;
    break;
}

fwrite($file, $new_chrome_num . "\n" . $new_firefox_num . "\n" . $new_opera_num . "\n" . $new_safari_num . "\n" . $new_ie_num . "\n");

fclose($file);
?>
</div>
</div>
</body>
</html>
