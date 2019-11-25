<?php
$connect = mysqli_connect("localhost" , "root", "", "listadogadjaja2");
$id=$_REQUEST['ID'];
$query = "SELECT * FROM teme INNER JOIN event ON teme.Tema = event.Tema_id where ID='".$id."'"; 
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$ime = $row['Ime'];
$tema = $row['Tema_id'];
$slika = $row['Slika'];
$opis = $row['Opis'];
$mesto = $row['Mesto'];
$datum = $row['Datum'];
$cena = $row['Cena'];
?>

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="style5.css">
        <link rel="stylesheet" href="searchbar.css">
        <link rel="stylesheet" href="buttons.css">
        <link rel="stylesheet" href="Slider.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <header class="header">
	
                <a href="index.html" class="logo"><b>za</b>Kulturu.</a>
                <form action="./search.php" method="get">
                    <div class="afterlogo">
                        <div>
                            <input  style="padding:12px;" type="text" placeholder="     Pretrazi dogadjaje . . ." name="q" required>
                            <input type="submit" value="go"  hidden >
                        </div>
                    </form>
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <ul style="z-index:2;" class="menu">
                <li><a href="oNama.html"><b>O nama</b></a></li>
                 <li><a href="finalEventList.php"><b>Lista događaja</b></a></li>
                 <li><a href="kreiraj.php"><b>Napravi događaj</b></a></li>
             </ul>
            </header>
<div class="bg-slika"></div>
 
<div class="kont">
	<img class="slikaevent" src="<?php echo $row["Slika"]; ?>" />
		<div class="naziv" style="background-color:white; color:black;"><?php echo $ime; ?></div>
			<div class="kontenjerEvent">
				<div class="dis">
				<div class="lokDatum ne">

				<div class="dis">
                    <div class="dis5"><img src="lokacija.png" class="lok"/>Mesto održavanja: <?php echo $mesto; ?></div>
					<div class="dis5"><img src="kalendar.png" class="lok"/>Datum održavanja: <?php echo $datum; ?></div>
                </div>
                
				<div class="lokDatum">
					<div class="dis"><img src="meeting.png" class="lok"/>Tema događaja: <?php echo $tema; ?></div>
                </div>
                
				<div class="lokDatum">
					<div class="dis"><img src="coins.png" class="lok"/>Cena ulaznice: <?php echo $cena; ?></div>
                </div>
                
             </div>
             <div class="opis">
                <?php echo $opis; ?>
			</div> 
        </div>
    
</div> 
</div>


</body>
</html>