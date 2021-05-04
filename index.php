<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>MAIL API</title>
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- vue -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="js/script.js"></script>

    <style>

        .box{
            height: 100px;
            width: 100px;
        }

    </style>
</head>

<body style="background-color: coral;">
    <div class="container vh-100">
        <div class="row h-100">
            <div class="col-12 d-flex">
                <div class="m-auto">

                    <h6>da inserire in percorso:</h6>
                    <h4>/?name=paolo&email=piratideicaraibi@hotmail.com&age=10</h4>


                    <br>
                    <p>--------------------------------</p>
                    <br>

                    <!-- ## Snack 1
                        Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
                        Ogni array avrà una squadra di casa e una squadra ospite,
                        punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
                        Stampiamo a schermo tutte le partite con questo schema.
                        Olimpia Milano - Cantù | 55-60 -->

                        
                    <?php

                        $rnd1 = rand(1,50);
                        $rnd2 = rand(1,50);
                        
                        $incontri = [
                                [
                                    'casa' => 'Pisa',
                                    'ospiti' => 'Roma',
                                    'puntiCasa' => 12,
                                    'puntiOspiti' => 22
                                ],
                                [
                                    'casa' => 'Rimini',
                                    'ospiti' => 'Milano',
                                    'puntiCasa' => 22,
                                    'puntiOspiti' => 45
                                ],
                                [
                                    'casa' => 'Genova',
                                    'ospiti' => 'Palermo',
                                    'puntiCasa' => 18,
                                    'puntiOspiti' => 13
                                ],
                                [
                                    'casa' => 'Cremona',
                                    'ospiti' => 'Sassari',
                                    'puntiCasa' => $rnd1,
                                    'puntiOspiti' => $rnd2
                                ]
                        ];                        
                        
                        for ($i=0;$i<count($incontri);$i++){
                            
                            $incontro = $incontri[$i];

                            $casa = $incontro['casa'];
                            $ospiti = $incontro['ospiti'];
                            $puntiCasa = $incontro['puntiCasa'];
                            $puntiOspiti = $incontro['puntiOspiti'];
                            
                            echo '<h1 class="">' 
                                . $casa . ' - ' 
                                . $ospiti . ' | ' 
                                . $puntiCasa . '-' 
                                . $puntiOspiti .
                                '</h1>';
                        }
                    ?>
                    
                    <br>
                    <p>--------------------------------</p>
                    <br>

                    <!-- ## Snack 2
                        Passare come parametri GET name, mail e age e verificare
                        (cercando i metodi che non conosciamo nella documentazione)
                        che name sia più lungo di 3 caratteri,
                        che mail contenga un punto e una chiocciola e che age sia un numero.
                        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->                   
                        
                    <?php

                    $name = $_GET['name'];
                    $email = $_GET['email'];
                    $age = $_GET['age'];

                    $nameLength = strlen($name);

                    $dot = strpos($email, '.');
                    $at = strpos($email, '@');

                    $ageNum = is_numeric($age);

                    if($nameLength < 3 || $dot == false || $at == false || $ageNum == false){

                        echo "accesso NEGATO";
                    
                    } else {

                        echo "accesso CONSENTITO";
                    };

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>