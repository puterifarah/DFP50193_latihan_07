<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
    <style>
        * {
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <?php
    $nama = "Puteri Farah Diba Natasha";
    echo $nama[0]; #p
    echo $nama[5]; #I
    echo $nama[10];#A
    echo $nama[4]; #R
    ?>

    <hr>

    <?php
    $pelajar[0] = "Irfan";
    $pelajar[1] = "Amanda";
    $pelajar[2] = "Dibo";

    #echo $pelajar[0];
    for ($x = 0; $x < 3; $x++){
        echo $pelajar[$x] . ' ';
    }
    echo '<hr';

    foreach ($pelajar as $pel){
        echo $pel . ' ';
    }
    echo'<hr';

    #join90 @ implode
    $pelajars = implode(' ', $pelajar);
    echo $pelajars;
    echo '<hr';

    #explode()
    $ptss = 'POLITEKNIK TUANKU SYED SIRAJUDDIN';
    $kata = explode(' ', $ptss);
    echo $kata[2];
    echo'<hr>';

    $senarai = 'Putera, Daniel, Adam, Zuhairi';
    $ahli = explode(',', $senarai);
    Echo '<pre>', print_r($ahli), '</pre>';
    ?>

    <ol>
        <?php
        foreach($ahli as $nama){
            echo "<li> $nama </li>";
        }
        ?>
    </ol>
    <hr>

    <?php
    $citacita = 'Forensik';  
    $hasil = strcmp($citacita, 'Forensik');
    if($hasil == 0){
        echo 'Sama';
    }
    elseif($hasil<0){
        echo 'Kurang';
    }
    else {
        echo 'Lebih';
    }
    ?>
</body>

</html>