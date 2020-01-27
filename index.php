<!doctype html>
<html>
<head>
<title> TEST </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Description" content="">
<meta name="Keywords" content="">
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id = "calosc">
	<div id = "menu">
		<a href="?s=a">O stronie</a><br>
		<a href="?s=b">Grafik czyszczenia</a><br>
		<a href="?s=c">Limity załadunku</a><br>
	</div>
		<div id = "tresc">
	<?php
	if (isset($_GET['s']))
			{
				//echo($_GET['s']); echo"\n";
				if ($_GET['s'] == "a") echo"<p>Strona ma na celu 		zaznajomienie z grafikiem czyszczenia kotła 50kW <br> oraz przedstawienie 		limitów załadunku przy paleniu \"od góry\".</p>"; 
				if ($_GET['s'] == "b") 
				echo"<p>Grafik czyszczenia kotła:</p>
	<table border=\"2\">	
	<tr><td>miesiąc</td><td>data</td></tr>
	<tr><td>Wrzesień</td><td>01 Września</td></tr>
	<tr><td>Październik</td><td>02 Października</td></tr>
	<tr><td>Listopad</td><td>01 Listopada</td></tr>
	<tr><td>Grudzień</td><td>01 Grudnia</td></tr>
	<tr><td>Styczeń</td><td>01 Stycznia</td></tr>
	<tr><td>Luty</td><td>01 Luty</td></tr>
	<tr><td>Marzec</td><td>01 Marzec</td></tr>
	<tr><td>Kwiecień</td><td>02 Kwietnia</td></tr>
	</table>"; 
				if ($_GET['s'] == "c")         
				{
				echo"<p> Limity załadunku - podaj temperaturę w °C: </p>";
		
		$temperatura = isset($_POST['temperatura']) ? $_POST['temperatura'] : '';
	
                //$temperatura = $_POST['temperatura'];
		echo"<form action='?s=c' method=post> 
		<input name=temperatura type=text value=$temperatura>
		<input type=submit value='Oblicz'></form>";
		
		if ($temperatura <> "") 
		{	
		if ($temperatura >= 10) 
		echo"<br><b>4 łopaty (max!)</b><br>";
		if (($temperatura >= 5) && ($temperatura < 10)) 
		echo"<br><b>4 - 5 łopat (5 max!)</b><br>";
		if (($temperatura) >= 0 && ($temperatura < 5)) 
		echo"<br><b>5 - 6 łopat (6 max!)</b><br>";
		if (($temperatura > -10) && ($temperatura < 0)) echo"<br><b>6 łopat (max!)</b><br>";
		if ($temperatura <= -10) echo"<br><b>6 - 7 łopat (7 max!)</b><br>";
		}

	echo"<p> 15 i więcej °C : 4 łopaty (max!)<br>
	    10 do 15 °C : 4 łopaty (max!)<br>
	    5 do 10 °C : 4 - 5 łopat (5 max!)<br>
	    0 do 5 °C : 5 - 6 łopat (6 max!)<br>
	    -5 do 0 °C : 6 łopat (max!)<br>
	    -10 do -5 °C : 6 łopat (max!)<br>
	    -10 i mniej °C : 6 - 7 łopat (7 max!)<br>	</p>"; 
				}
			}
	//else exit;
	?>
		</div>
			<div id ="dol"> <p> (c) 2017 </p> </div>
</div>
</body>
</html>
