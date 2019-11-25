<?php
 $connect = mysqli_connect("localhost" , "root", "", "listadogadjaja2");
 $sql = "SELECT * FROM teme INNER JOIN event ON teme.Tema = event.Tema_id";  
 $result = mysqli_query($connect, $sql);  
?>

<html>
<head>
<title>EVENTS</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="searchbar.css">
		<link rel="stylesheet" href="allEvents.css">
		<link rel="stylesheet" href="mainPageStyle.css">
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
				
            <br>
            <?php
        echo '<div class="kontenjer">';
        $count=1;		
		while($row = mysqli_fetch_assoc($result)) { ?>
            <br>
			<a style="text-decoration: none;" href="aboutEvent.php?ID=<?php echo $row["ID"]; ?>"><div class="div1 btn display1">
				<div class="dis">
						<img src="<?php echo $row["Slika"]; ?>"  class="image"/>
				</div>
				<div class="pad dis">
						<echo class="naslov boldd"><?php echo $row["Ime"]; ?>,<?php echo date(" l jS \of F Y", strtotime($row["Datum"])); ?></span></echo>
						<div class="prostor"></div>
						<echo class="naslov"><?php echo $row["Opis"]; ?></echo>
						<br>
						<div class="ikonice_pare">
						<echo class="naslov poz text" style='bottom:20px; left:80%;'><?php echo $row["Cena"]; ?>RSD</echo>
						<a class="ikonica" href="delete.php?ID=<?php echo $row["ID"]; ?>"><i style="color:white; font-size:20px; position:absolute; bottom:10px; left:47%; " class="fa fa-trash" aria-hidden="true"></i></a>
						<a class="ikonica" href="edit.php?ID=<?php echo $row["ID"]; ?>"><i style="color:white; font-size:20px; position:absolute; bottom:10px; left:27%; " class="fa fa-pencil-square" aria-hidden="true"></i></a>
						
						</div>
						
				</div>
			</div>
		
        <?php $count++; 
		} 
		if ($count==1){
			echo '<p style="color:white;"> Ne postoji ni jedan dogadjaj! </p>';
		}
		?>
		</div></a>
</body>
</html>