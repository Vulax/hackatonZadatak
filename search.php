<?php
   
    $connect = mysqli_connect("localhost", "root", "", "listadogadjaja2");
   
    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_error();
    }
 
    error_reporting(0);
 
    $output = '';
   
    if(isset($_GET['q']) && $_GET['q'] !== ' '){
        $searchq = $_GET['q'];
       
        $q = mysqli_query($connect, "SELECT * FROM teme INNER JOIN event ON teme.Tema = event.Tema_id WHERE Ime LIKE '%$searchq%'") or die(mysqli_error());
        $c = mysqli_num_rows($q);
        echo'
        <header class="header">
                 
        <a href="index.html" class="logo"><b>za</b>Kulturu.</a>
        <form action="./search.php" method="get">
            <div class="afterlogo">
                <div>
                    <input style="padding:12px" type="text" placeholder="     Pretrazi dogadjaje . . ." name="q" required>
                    <input type="submit" value="go"  hidden >
                </div>
            </form>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
        <li><a href="oNama.html"><b>O nama</b></a></li>
        <li><a href="finalEventList.php"><b>Lista događaja</b></a></li>
        <li><a href="kreiraj.php"><b>Napravi događaj</b></a></li>
     </ul>
    </header>
        
        ';
        echo '<div class="kontenjer">';
        if($c == 0){
            $output = ' <p style="color:white;">Ne postoji događaj <b>"' . $searchq . '".</b></p>';
        } else {
            while($row = mysqli_fetch_array($q)){
                $id = $row['ID'];
                $ime = $row['Ime'];
                $tema = $row['Tema_id'];
                $slika = $row['Slika'];
                $opis = $row['Opis'];
                $mesto = $row['Mesto'];
                $datum = $row['Datum'];
                $cena = $row['Cena'];
                $output .= '
                                
                                
                <a style="text-decoration: none;" href="aboutEvent.php?ID=' . $id . '"><div class="div1 btn display1">
                                <div class="dis">
                                        <img src="' . $slika . '"  class="image"/>
                                </div>
                                <div class="pad dis">
                                        <echo class="naslov boldd">' . $ime . ',' . date(" l jS \of F Y", strtotime($datum)) . '</span></echo>
                                        <div class="prostor"></div>
                                        <echo class="naslov">' . $opis .'</echo>
                                        <br>
                                        <echo class="naslov poz text" style="bottom:20px; left:80%;">' . $cena . ' RSD</echo>
                                        <div class="ikonice_pare">
						                <a class="ikonica" href="delete.php?ID=' .$id. '"><i style="color:white; font-size:20px; position:absolute; bottom:10px; left:47%; " class="fa fa-trash" aria-hidden="true"></i></a>
						                <a class="ikonica" href="edit.php?ID=' .$id. '"><i style="color:white; font-size:20px; position:absolute; bottom:10px; left:27%; " class="fa fa-pencil-square" aria-hidden="true"></i></a>
						                </div>
                                        
                                </div>
                                
                                
                                
                            </div>
                                ';
            }
        }
    } else {
        header("location: ./");
    }
    print("$output");
    mysqli_close($connect);
 
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="allEvents.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="searchbar.css">
        <link rel="stylesheet" href="mainPageStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>


    </body>
</html>