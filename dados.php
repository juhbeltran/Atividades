<!doctype html>


<?php



$title = "DADOS";
$n1 = rand(1, 6);
$n2 = rand(1, 6);
$use1 = rand(1, 6);
$use2 = rand(1, 6);


?>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
<h1><?php echo $title ?></h1>
<form action="" method="post">

    <input type="submit" name="jogar" value="JOGAR">
</form> 
<?php 
if (isset($_POST ['jogar'])) : ?>
 <?php
 echo "Máquina: ";
 echo "<img src='img/dados/$n1.png' alt=''>";
 echo "<img src='img/dados/$n2.png' alt=''>";
 ?><br /><?php

 echo "Usuário: ";

   
   ?>
   <img src='img/dados/<?php echo $use1;?>.png'>
   <img src='img/dados/<?php echo $use2;?>.png'>
   <br /><?php
$somaMaquina = $n1 + $n2;
echo " <b>A soma da máquina: </b>".$somaMaquina;
$somaUsuario = $use1 + $use2;
echo "<br/>";
echo " <b>A soma do usuário foi: </b>".$somaUsuario;
echo "<br/>";
 if($somaMaquina == $somaUsuario){
    ?><br /><?php 
    echo "<b>Empatou.</b>";
 }
 
 else if($somaUsuario > $somaMaquina) {
    ?><br /><?php
    echo "<b>Usuário ganhou.</b>";
} else{
    echo "<b>Computador ganhou.</b>";
}


endif;
 ?>



</body>

</html>