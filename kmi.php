<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
<head> 
<title>KMI-Kuno mases indekso skaiciuokle</title> 
<link rel="stylesheet" href="main.css">
</head> 
<body> 
<h2>KMI-Kuno mases indekso skaiciuokle</h2> 
<? 
//priskiriamo nulines reiksmes
$height=0; 
$width=0; 


if ($_POST['height']!=strval(floatval($_POST['height'])))  
{ 
//Print klaida ir galimybe grizti i pagrindini puslapi.
    print "Ugis netinkamas arba neivestas <br />"; 
    print "<a href='index.html'>grizti i pradini puslapi</a>"; 
    exit; 
} 

//skaityti ivesta ugi
$height=$_POST['height']; 

 
if ($height<0 || $height>2.5) 
{ 
    print "Ugis turi buti 0 ir 2.5<br />"; 
    print "<a href='index.html'>grizti i pradini puslapi</a>"; 
    exit; 
} 

if ($_POST['weight']!=strval(intval($_POST['weight'])))  
{ 
    print "Svoris netinkamas arba neivestas<br />"; 
    print "<a href='index.html'>grizti i pradini puslapi</a>"; 
    exit; 
} 

$weight=$_POST['weight']; 

if ($weight<0 || $weight>400) 
{ 
    print "Svoris turi buti tarp 0 ir 400<br />"; 
    print "<a href='index.html'>grizti i pradini puslapi</A>"; 
    exit; 
} 

$kmi=$weight / ($height * $height); 
$kmi_rounded = number_format((float)$kmi, 2, '.', '');

echo "Jusu KMI yra $kmi_rounded. ";
          if($kmi_rounded > '18.5' && $kmi_rounded < '25') {  echo "---> Normalus svoris.<br /><br />"; 
          } elseif($kmi_rounded < '18.5') { echo "---> Nepakankamas svoris.<br /><br />";
          } elseif($kmi_rounded >= '25' && $kmi_rounded < '30') { echo "---> Antsvoris.<br /><br />";
          } elseif($kmi_rounded >= '30' && $kmi_rounded < '80') { echo "---> Nutukimas.<br /><br />";
          }

//Print result. 
// print("Kuno mases indeksas yra  $kmi_rounded"); 
?> 
<br /><br /><a href="index.html">Grizti i pagridini puslapi</a> 
</body> 
</html>