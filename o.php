<?php
session_start();
?>
<?php

/*$tex= ["le","php","est","un","language","facile","à","comprendre"];

echo $tex[0]." ";
echo $tex[1]." ";
echo $tex[2]." ";
echo $tex[3]." ";
echo $tex[4]." ";
echo $tex[5]." ";
echo $tex[6]." ";
echo $tex[7]." ";



?><br><br><br>
<table border="1px">
<tr>
    <td> <?php echo ucwords($tex[0]);?> </td>
    <td> <?php echo ucwords($tex[1]);?> </td>
    <td> <?php echo ucwords($tex[2]);?> </td>
    <td> <?php echo ucwords($tex[3]);?> </td>
    <td> <?php echo ucwords($tex[4]);?> </td>
    <td> <?php echo ucwords($tex[5]);?> </td>
    <td> <?php echo ucwords($tex[6]);?> </td>
    <td> <?php echo ucwords($tex[7]);?> </td>
</tr>
</table>*/
?>

<?php
/*function carre ($n){

    return $n * $n;
}
$x = carre(9);
echo "9 au carre = ".$x .'<br>';





$nom = array('nom1'=>'mamadou' ,'nom2'=> 'mareme','nom3'=>'adama');
echo $nom['nom1']. ' '.$nom['nom2']. ' '.$nom['nom3'].'<br>';

$age = array('age1' => 15,'age2' => 55,'age3' => 10 );
echo $age['age1']. ' ' .$age['age2']. ' ' .$age['age3'];*/




$tab = array(
        'nom' =>array ('mamadou','penda','omar','sandangobi'),
        'age' =>array ('55','12','25')

 );
 /*foreach ($tab["nom"] as $value) {
     echo  $value.'<br/>';
 }
 foreach ($tab["age"] as $value) {
     echo  $value.'<br/>';
 }

 function ln ($tab){
     $n= count($tab);
     $ln = strlen($tab[0]);
     for ($i= 0;$i<$n;++$i){
         if(strlen($tab[$i])> $ln){
             $ln =strlen($tab[$i]);
         }
     }
     return $ln;
 }
 echo ln($tab['nom']).'<br>';


 function moy($tab){
     $p = count($tab);
     for ($i = 1; $i < $p; ++$i){
     $s = $tab[0] + $tab[$i];
 }
 $moy = $s / $p;
 return $moy;
}
echo moy($tab['age']);*/


function maxnom($tab){
    $nb = strlen($tab['nom'][0]);
    $nomlong = $tab['nom'][0];
    foreach ($tab['nom'] as $nom ) {
        if(strlen($nom)> $nb){
            $nb = strlen($nom);
            $nomlong = $nom;
        }
    }

    return array($nb,$nomlong);
}
list($nom,$nb)=maxnom($tab);
echo $nb,$nom;


?>

