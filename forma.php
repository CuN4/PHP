<?php

$pizza = $_POST['pizza'];
$kolicina = $_POST['kolicina'];
$velicina = $_POST['velicina'];
$adresa = $_POST['adresa'];
$mob = $_POST['mob'];

$cijena = 6;






if ($velicina == 1)
{
	echo "Dobar dan. Naručili ste ".$kolicina." pizza ".$pizza." veličine: Mala na adresu
".$adresa.". Stiže uskoro. Dobar tek!";
echo "<br>";
if ($kolicina > 1)
{
$gratis = 0;
	
for ($i = 0; $i<=$kolicina;$i++)
{
	if ($i % 5 == 0)
	{
		$gratis++;
	}
}
	$cijena = $cijena * ($kolicina - $gratis);
	
}

echo "Cijena je :".$cijena." €";
}

if ($velicina == 2)
{
	$cijena = $cijena + 2;
	echo "Dobar dan. Naručili ste ".$kolicina." pizza ".$pizza." veličine: Srednja na adresu
".$adresa.". Stiže uskoro. Dobar tek!";
echo "<br>";
if ($kolicina > 1)
{
$gratis = 0;
	
for ($i = 0; $i<=$kolicina;$i++)
{
	if ($i % 5 == 0)
	{
		$gratis++;
	}
}
	$cijena = $cijena * ($kolicina - $gratis);
	
}


echo "Cijena je :".$cijena." €";
}
if ($velicina == 3)
{
		$cijena = $cijena + 3;
	echo "Dobar dan. Naručili ste ".$kolicina." pizza ".$pizza." veličine: Velika na adresu
".$adresa.". Stiže uskoro. Dobar tek!";
echo "<br>";
echo "<br>";
if ($kolicina > 1)
{
$gratis = 0;
	
for ($i = 0; $i<=$kolicina;$i++)
{
	if ($i % 5 == 0)
	{
		$gratis++;
	}
}
	$cijena = $cijena * ($kolicina - $gratis);
	
}


echo "Cijena je :".$cijena." €";
}





?>
