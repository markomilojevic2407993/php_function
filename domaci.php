<?php  


function racunanjePDV($broj){
    $pdv=$broj*0.22;
    $rezultat=$broj+$pdv;

    return $rezultat;
    
}

if(isset($_POST['broj'])){
   // $nameBroj=floatval($_POST['broj']);
    $nameBroj = filter_var($_POST['broj'], FILTER_VALIDATE_FLOAT);
}
if($nameBroj<1){
   echo'Broj je manji od jedan';
}

$rezultat=racunanjePDV($nameBroj);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$rezultat?></h1>
    <form method="post">
        <input type="text" name="broj">
        <button type="submit">Klik</button>
        
    </form>
</body>
</html>