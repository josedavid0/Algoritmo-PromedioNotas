<?php
if($_POST){
$cant = count($_POST);
$j = 1;
$suma = 0;
while($j<=$cant){
    $suma+=$_POST['txtN'.$j];
    $j++;
}
$prom = $suma / $cant;
echo "El promedio es: ".$prom;

}else{
    echo "No permitido";
}
?>
<br>
<a href="index.php">Volver</a>