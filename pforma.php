<html><head></head><body>
<?php $refsisa = "ST1-1706-0001"; $ordtra = "17NAL-12345"; $folio = "1234567"; $estado = 'L'; $tiptrab = 'B'?>
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
</body>
</html>