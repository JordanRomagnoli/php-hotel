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

    $filteredHotels = [];

    $resultParking = null;
    $resultVote = null;

    if(isset($_GET['parking'])){
        $resultParking = $_GET['parking'];
    };
    if(isset($_GET['vote'])){
        $resultVote = $_GET['vote'];
    };

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
                    <input type="number" name="vote">
                    <button type="submit">
                        Invia
                    </button>
                </form>

                <?php

                    if(isset($resultParking) && isset($resultVote)){

                        for($i = 0; $i < count($hotels); $i ++){
                        
                            if((($hotels[$i]["parking"] == true) && ($resultParking == "si")) && ($hotels[$i]["vote"] >= intval($resultVote))){             
        
                                array_push($filteredHotels, $hotels[$i]);
        
                            }elseif((($hotels[$i]["parking"] == false) && ($resultParking == "no")) && ($hotels[$i]["vote"] >= intval($resultVote))){
        
                                array_push($filteredHotels, $hotels[$i]);
        
                            }elseif($resultParking == "tutti" && $hotels[$i]["vote"] >= intval($resultVote)){
        
                                array_push($filteredHotels, $hotels[$i]);
                            }
                            
                        };

                        $hotels = $filteredHotels;
                    };
                    
                ?>

                <ul class=" row list-unstyled ">

                    
                        <?php
                            foreach($hotels as $singleHotel) {    
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
                        
                        




                        
                    

                </ul>
            </main>
    
            <footer>
                <!-- FOOTER -->
            </footer>
        </div>

    </body>
</html>