<?php    

function sabiranje($broj1,$broj2){

    if($broj1==0||$broj2==0){
        die('Brojevi ne smeju biti nula');
    }
    echo $broj1+$broj2;
}


sabiranje(10, 5);



function parnostBroja($broj) {

    if ($broj == 0) {
        echo 'Broj ne sme biti nula 0';
    } elseif ($broj % 2 == 0) {
        echo 'Ovaj broj je paran: ' . $broj;
    } else {
        echo 'Ovaj broj nije paran: ' . $broj;
    }


 
}


parnostBroja(10);
echo '<br>';
parnostBroja(5);
echo '<br>';
parnostBroja(7);
echo '<br>';
parnostBroja(6);
echo '<br>';
parnostBroja(0);
echo '<br>';
?>