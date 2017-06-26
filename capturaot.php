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
$n = 0;
if ($pricap)
{
	if (!isset($_POST['refsisa']))
	{
		$validado = false;
		$errores[$n]
		$n++;
	}
	else
	{	
		$validado = valida($refsisa,"refsisa");
		if (!$validado)
		{
			$errores[$n] = "Referencia SISA";
			$n++;
		}
	}
	if (!isset($_POST['ordtra']))
	{
		$validado = false;
		$errores[$n] = "OT no capturada en pantalla";
		$n++;
	}	
	else
	{	
		$validado = valida($ordtra, "ordtra");
		if (!$validado)
		{
			$validado = false;
			$errores[$n] = "Orden de trabajo";
			$n++;
		}
	}
	if (!isset($_POST['folio']))
	{
		$validado = false;
		$errores[$n] = "Folio no capturado";
		$n++;
	}
	else
	{	
		$validado = valida($folio, "folio");
		if (!$validado)
		{
			$errores[$n] = "Folio mal capturado";
			$n++;
		}	
	}
	if (!isset($_POST['estado']))
	{
		$validado = false;
		$errores[$n] = "Estado";
		$n++;
	}
	if (!isset($_POST['tiptrab']))
	{
		$validado = false;
		$errores[$n] = "Tipo de trabajo";
		$n++;
	}
	if (!isset($_POST['nodo_a']))
		
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
Trayecto<br />
<input type="text" name="trayecto" value="<?= $trayecto ?>" /><br />
CLLI Nodo A<br />
<input type="text" name="clli_a" value="<?= $clli_a ?>" /><br />
CLLI nodo Z<br />
<input type="text" name="clli_z" value="<?= $clli_z ?>" /><br />
Version de la OT<br />
<input type="text" name="version_ot" value="<?= $version_ot ?>" /><br />
Conmutacion<br />
<input type="text" name="conmutacion" value="<?= $conmutacion ?>" /><br />
Fecha de recepcion<br />
<input type="date" name="fecrec" value="<?= $fecrec ?>" /><br />
Fecha programada<br />
<input type="date" name="fecpro" value="<?= $fecpro ?>" /><br />
Fecha objetivo<br />
<input type="date" name="fecobj" value="<?= $fecobj ?>" /><br />
Fecha real programada<br />
<input type="date" name="ferepr" value="<?= $ferepr ?>" /><br />
Fecha real de ejecucion<br />
<input type="date" name="fereej" value="<?= $fereej ?>" /><br />
Fecha de liquidacion<br />
<input type="date" name="fecliq" value="<?= $fecliq ?>" /><br />
Ruta archivo<br />
<input type="file" name="rutaar" /><br />
Observaciones<br />
<input type="text" name="observ" value="<?= $observ ?>" /><br />
<input type="submit" name="Enviar" /><br />
</form>
<?php
function valida($valor, $variab)
{
	$valida = true;
	switch($variab){
		case 'refsisa'  //Valida la referencia SISA
			$divsisa = preg_split("/-/",$valor);
			if (count($divsisa) != 3)
			{
				$valida = false;
			}
			else
			{
				if (strlen($divsisa[0]) < 3 || strlen($divsisa[0]) == 4 || strlen($divsisa[0]) > 6)
				{
					$valida = false;
				}
				else
				{
					$tiposisa = false;
					$conta = 1;
					while ($conta < 3)
					{
						$tiposisa = preg_match("/[^0-9]/", $divsisa[$conta]);
						if($tiposisa || strlen($divsisa[$conta])) != 4)
						{
							$valida = false;
							$conta = 3;
						}
						$conta++;
					}
				}
			}	
			
	}	
		case ordtra  //valida la orden de trabajo
			$divortr = preg_split("/-/",$valor);
			if (count($divortr) != 2)
			{
				$valida = false;
			}
}			if (preg_match("/^[0-9]/",$divortr[0]) == false)
			{
				$valida = false;
			}
			else
			{
				if (preg_match("/^[\w]+$/",$divortr[0]) == false)
				{
					$valida = false;
				}
				else
				{
					if (preg_match("/[^0-9]/",$divortr[1]))
					{
						$valida = false;
					}
				}
			}
		case folio //valida el folio del enlace
			if (preg_match("/[^0-9]/", $valor))
			{
				$valida = false;
			}
?>

    

