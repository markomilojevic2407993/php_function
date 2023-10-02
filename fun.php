<?php   


function pozdrav(){
    echo "Hello world";
}


pozdrav();
pozdrav();
pozdrav();

function imeKorisnika($ime, $prezime){
    echo $ime;
    echo $prezime;

}
function sabiranje($broj1,$broj2){
    echo $broj1+$broj2;
}



imeKorisnika("Marko", 'Milojevic');
sabiranje(2,5);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><?=pozdrav()?></p>
    
</body>
</html>