<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <!-- css -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="debug">
        <div class="container">
            <header class="pt-4">
                <h1>
                    HOTEL
                </h1>
            </header>
    
            <main>
                <form action="" method="GET">
                    <label for="parking">Parcheggio</label>
                    <select name="parking" id="parking">
                        <option value="tutti">tutti</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    <button type="submit">
                        Invia
                    </button>
                </form>

                <ul class=" row list-unstyled ">

                    
                        <?php
                            
                            foreach($hotels as $singleHotel) {
                                if($singleHotel["parking"] == true && $_GET['parking'] == "si"){
                                    
                                
                        ?>
                                    <li class="col-4 tab">
                                        <h3 class=" m-0 ">
                                            <?php echo $singleHotel["name"]?>
                                        </h3>
                                        <p>
                                                <?php echo $singleHotel["description"]?>
                                        </p>
                                        <span>
                                                <?php

                                                if($singleHotel["parking"] == true){
                                                    echo "Parcheggio Disponibile";
                                                }else{
                                                    echo "Parcheggio Non Disponibile";
                                                }
                                                ?>
                                        </span>
                                        <div class="vote-info">
                                                <span class=" fs-5">Voto degli utenti</span>
                                                <div class="vote"><?php echo $singleHotel["vote"]?></div>
                                        </div>
                                        <div class="distance">
                                                <span>Chilometri di distanza dal centro :</span>
                                                <span><?php echo $singleHotel["distance_to_center"] . "Km"?></span>
                                        </div>
                                    </li>
                        <?php
                                }elseif ($singleHotel["parking"] == false && $_GET['parking'] == "no") {
                        ?>

                                    <li class="col-4 tab">
                                        <h3 class=" m-0 ">
                                            <?php echo $singleHotel["name"]?>
                                        </h3>
                                        <p>
                                                <?php echo $singleHotel["description"]?>
                                        </p>
                                        <span>
                                                <?php

                                                if($singleHotel["parking"] == true){
                                                    echo "Parcheggio Disponibile";
                                                }else{
                                                    echo "Parcheggio Non Disponibile";
                                                }
                                                ?>
                                        </span>
                                        <div class="vote-info">
                                                <span class=" fs-5">Voto degli utenti</span>
                                                <div class="vote"><?php echo $singleHotel["vote"]?></div>
                                        </div>
                                        <div class="distance">
                                                <span>Chilometri di distanza dal centro :</span>
                                                <span><?php echo $singleHotel["distance_to_center"] . "Km"?></span>
                                        </div>
                                    </li>

                        <?php
                                }elseif($_GET['parking'] == "tutti"){
                        ?>

                                    <li class="col-4 tab">
                                        <h3 class=" m-0 ">
                                            <?php echo $singleHotel["name"]?>
                                        </h3>
                                        <p>
                                                <?php echo $singleHotel["description"]?>
                                        </p>
                                        <span>
                                                <?php

                                                if($singleHotel["parking"] == true){
                                                    echo "Parcheggio Disponibile";
                                                }else{
                                                    echo "Parcheggio Non Disponibile";
                                                }
                                                ?>
                                        </span>
                                        <div class="vote-info">
                                                <span class=" fs-5">Voto degli utenti</span>
                                                <div class="vote"><?php echo $singleHotel["vote"]?></div>
                                        </div>
                                        <div class="distance">
                                                <span>Chilometri di distanza dal centro :</span>
                                                <span><?php echo $singleHotel["distance_to_center"] . "Km"?></span>
                                        </div>
                                    </li>

                        <?php
                                }
                        ?>


                        
                        <?php
                            }
                        ?>
                        
                        




                        
                    

                </ul>
            </main>
    
            <footer>
                <!-- FOOTER -->
            </footer>
        </div>

    </body>
</html>