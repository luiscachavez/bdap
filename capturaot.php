<?php
$refsisa = 		$_POST['refsisa'];
$ordtra = 		$_POST['ordtra'];
$folio = 		$_POST['folio'];
$estado = 		$_POST['estado'];
$tiptrab = 		$_POST['tiptrab'];
$nodo_a = 		$_POST['nodo_a'];
$nodo_z = 		$_POST['nodo_z'];
$trayecto = 	$_POST['trayecto'];
$clli_a = 		$_POST['clli_a'];
$clli_z = 		$_POST['clli_z'];
$version_ot = 	$_POST['version_ot'];
$conmutacion = 	$_POST['conmutacion'];
$fecrec = 		$_POST['fecrec'];
$horrec = 		$_POST['horrec'];
$fecpro =		$_POST['fecpro'];
$fecobj = 		$_POST['fecobj'];
$horobj =		$_POST['horobj'];
$ferepr = 		$_POST['ferepr'];
$fereej = 		$_POST['fereej'];
$fecliq = 		$_POST['fecliq'];
$rutaar =		$_POST['rutaar'];
$observ = 		$_POST['observ'];

$pricap = ($_POST['pricap'] == "si" );
if ($pricap)
	{
	$validado = valida();

	}

if ($pricap && $validado)
{
// Insertar o actualizar registro en base de datos
}



?>

<form name="capturaot" action="<?= $PHP_SELF ?>" method="POST">
Referencia SISA<br />
<input type="text" name="refsisa" value="<?= $refsisa ?>" /><br />
Orden de trabajo<br />
<input type="text" name="ordtra" value="<?= $ordtra ?>" /><br />
Folio<br />
<input type="text" name="folio" value="<?= $folio ?>" /><br />
Estado<br />
<input type="radio" name="estado" value="P" <?php if ($estado == 'P') {echo "checked";}?>/> En Proceso
<input type="radio" name="estado" value="L" <?php if ($estado == 'L') {echo "checked";}?>/> Liquidada
<input type="radio" name="estado" value="C" <?php if ($estado == 'C') {echo "checked";}?>/> Cancelada
<input type="radio" name="estado" value="R" <?php if ($estado == 'R') {echo "checked";}?>/> Rechazada<br />
Tipo de trabajo<br />
<input type="radio" name="tiptrab" value="A" <?php if ($tiptrab == 'A') {echo "checked";}?>/> Alta
<input type="radio" name="tiptrab" value="B" <?php if ($tiptrab == 'B') {echo "checked";}?>/> Baja
<input type="radio" name="tiptrab" value="C" <?php if ($tiptrab == 'C') {echo "checked";}?>/> Cambio<br />
Nodo A<br />
<input type="text" name="nodo_a" value="<?= $nodo_a ?>" /><br />
Nodo Z<br />
<input type="text" name="nodo_z" value="<?= $nodo_z ?>" /><br />
Trayecto<br>



</form>