<?php
// $estado=true;
// $noestado=false;
// $operacion=$estado || $noestado;

// echo $estado.'<br>';
// echo var_dump($estado);
// echo $noestado.'<br>';
// echo var_dump($noestado);
// echo '<br>'."var->1 $estado"."var->2 $noestado". "var->3 $operacion";

$texto = "texto largo";
 echo $texto.'<br>';

 $numero = 100;
 --$numero;
 echo "$numero";
 ++$numero;
 echo "$numero".'<br>';

 $array= array("valor1",4,6,80,8, "estado"=> true,[5,8]);
 echo var_dump($array);
 $est = true && $arraay['estado'];
 echo $est = (true || 'estado') && (true && 'estado');

?>
