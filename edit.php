<?php
$connect = mysqli_connect("localhost" , "root", "", "listadogadjaja2");
$id=$_REQUEST['ID'];
$query = "SELECT * FROM teme INNER JOIN event ON teme.Tema = event.Tema_id where ID='".$id."'"; 
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Azuriranje</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="header.css"/>
        <link rel="stylesheet" href="searchbar.css"/>
        <link rel="stylesheet" href="successfully.css"/>
    </head>

    <body>
    <header class="header">
                 
                 <a href="index.html" class="logo"><b>za</b>Kulturu.</a>
                 <form action="./search.php" method="get">
                   <div class="afterlogo">
                     <div>
                       <input type="text" placeholder="     Pretrazi dogadjaje . . ." name="q" required>
                       <input type="submit" value="go"  hidden >
                     </div>
                   </form>
                 <input class="menu-btn" type="checkbox" id="menu-btn" />
                 <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                 <ul class="menu">
                            <li><a href="oNama.html">O nama</a></li>
                            <li><a href="finalEventList.php">Lista događaja</a></li>
                            <li><a href="kreiraj.php">Napravi događaj</a></li>
                        </ul>
               </header>

<?php
$status = "";

if(isset($_POST['updatebre']) && $_POST['updatebre']==1)
{
$ime = $_REQUEST['ime'];
$tema = $_REQUEST['tema'];
$slika = $_REQUEST['img'];
$opis = $_REQUEST['opis'];
$mesto = $_REQUEST['mesto'];
$datum = $_REQUEST['datum'];
$cena = $_REQUEST['cena'];
$update="update event set Ime='".$ime."', Tema_id='".$tema."', Slika='".$slika."', Opis='".$opis."', Mesto='".$mesto."', Datum='".$datum."', Cena='".$cena."' where ID='".$id."'";
mysqli_query($connect, $update);

$status = "Uspesno azuriran dogadjaj. </br></br>
<a href='eventList.php'>Pogledaj listu dogadjaja!</a>"; 
echo '
<div class="wrapper">
	<div class="screen">
		<svg class="clouds" viewBox="0 0 243 172">
			<defs>
				<linearGradient id="a" x1="0%" y1="21.631%" y2="78.369%">
					<stop offset="0%" stop-color="#01BAEF"/>
					<stop offset="100%" stop-color="#20BF55"/>
				</linearGradient>
				<linearGradient id="b" x1="0%" y1="21.875%" y2="78.125%"><stop offset="0%" stop-color="#01BAEF"/>
					<stop offset="100%" stop-color="#20BF55"/>
				</linearGradient>
				<linearGradient id="c" x1="0%" y1="22.565%" y2="77.435%">
					<stop offset="0%" stop-color="#01BAEF"/>
					<stop offset="100%" stop-color="#20BF55"/>
				</linearGradient>
			</defs>
			<g fill="none">
				<path fill="url(#a)" d="M222.088 121.3384a28.8588 28.8588 0 0 0-4.1438-7.771c-2.3029-3.0704-5.1734-5.622-8.413-7.5423-3.2394-1.9202-6.8508-3.2057-10.642-3.7437-3.65-.5156-7.457-.335-11.2353.6443-3.7782.9794-7.1973 2.674-10.1416 4.9036-3.0566 2.31-5.5968 5.1936-7.5085 8.4476a29.0671 29.0671 0 0 0-3.7237 10.69c-.5132 3.6664-.3335 7.4906.6414 11.2859.882 3.4312 2.3446 6.5692 4.2594 9.3271a28.7704 28.7704 0 0 0 7.2325 7.2265c4.7405 3.2927 10.4592 5.1614 16.4602 5.1936h28.8822c2.6012 0 5.09-.5187 7.3609-1.4659 2.3574-.9795 4.4742-2.4164 6.248-4.198a19.3854 19.3854 0 0 0 4.1791-6.2761c.9398-2.2778 1.4562-4.778 1.4562-7.3908 0-2.6129-.5164-5.113-1.4593-7.394-.975-2.3681-2.4055-4.4945-4.1792-6.2762-1.7737-1.7817-3.8906-3.2153-6.248-4.198-2.2676-.944-4.7565-1.4628-7.3576-1.4628l-1.6678.0002z"/>
				<path fill="url(#b)" d="M106.4963 29.0076a43.2273 43.2273 0 0 0-6.2427-11.6565c-3.4693-4.6055-7.7937-8.433-12.674-11.3134A43.5245 43.5245 0 0 0 71.5475.422c-5.4987-.7732-11.234-.5025-16.926.9665-5.6919 1.4691-10.8427 4.0111-15.2783 7.3555-4.6048 3.465-8.4316 7.7903-11.3115 12.6713-2.8798 4.881-4.8076 10.3276-5.6097 16.035-.7732 5.4996-.5025 11.236.9663 16.929 1.3287 5.1467 3.532 9.8538 6.4167 13.9906a43.2499 43.2499 0 0 0 10.8958 10.8397c7.1414 4.939 15.7567 7.742 24.797 7.7904h43.511c3.9186 0 7.668-.778 11.089-2.1988 3.5515-1.4692 6.7405-3.6246 9.4125-6.2971a29.0696 29.0696 0 0 0 6.296-9.4142C137.222 65.6732 138 61.923 138 58.0037s-.7779-7.6695-2.1985-11.091c-1.4689-3.552-3.6239-6.7417-6.296-9.4142a29.0639 29.0639 0 0 0-9.4124-6.297c-3.4161-1.416-7.1657-2.1941-11.0843-2.1941l-2.5125.0002z" transform="matrix(-1 0 0 1 160 0)"/>
			<path fill="url(#c)" d="M39.3345 145.3368c-.6995-1.9642-1.6892-3.7617-2.906-5.3593-1.6151-2.1175-3.6282-3.8772-5.9-5.2016a20.4283 20.4283 0 0 0-7.4633-2.5819c-2.5597-.3555-5.2296-.231-7.8793.4444s-5.0475 1.8442-7.1124 3.3818a20.1076 20.1076 0 0 0-5.2656 5.826c-1.3406 2.244-2.238 4.7482-2.6115 7.3723-.3599 2.5286-.2339 5.166.4499 7.7834.6185 2.3664 1.6442 4.5305 2.987 6.4325 1.3879 1.9642 3.1108 3.6462 5.0722 4.9838 3.3245 2.2708 7.335 3.5596 11.5435 3.5818h20.255c1.8243 0 3.5697-.3577 5.1622-1.011a13.5058 13.5058 0 0 0 4.3817-2.8952c1.244-1.2287 2.2448-2.6952 2.9309-4.3283.659-1.5709 1.0212-3.2952 1.0212-5.0971 0-1.802-.3621-3.5262-1.0234-5.0994-.6838-1.633-1.687-3.0996-2.9309-4.3283a13.5419 13.5419 0 0 0-4.3817-2.8952c-1.5902-.651-3.3357-1.0088-5.1599-1.0088l-1.1696.0001z" transform="matrix(-1 0 0 1 54 0)"/>
			</g>
		</svg>
			<svg class="plane" viewBox="0 0 139 139">
				<defs>
					<linearGradient id="a" x1="147.152%" x2="0%" y1="-47.397%" y2="100%">
						<stop offset="0%" stop-color="#01BAEF"/><stop offset="100%" stop-color="#20BF55"/>
					</linearGradient>
				</defs>
				<path fill="#FFF" stroke="url(#a)" stroke-width="2" d="M171.1455 37.3577l-131.69 71.251a2.7136 2.7136 0 0 0-1.4535 2.5092 2.7138 2.7138 0 0 0 1.6436 2.3892l22.4823 8.4671a5.2937 5.2937 0 0 1 2.9597 2.7138l17.4183 35.9715c.3259 1.5876 3.2583 2.0083 3.299.3935l-2.7152-29.7026c.157-2.2004.997-4.297 2.403-5.9975L153.795 58.471a1.6162 1.6162 0 0 1 1.4798-.4207c.526.1172.9531.4993 1.1277 1.0088a1.5462 1.5462 0 0 1-.2724 1.488l-58.8803 71.9973a13.1443 13.1443 0 0 0-2.308 5.9297l-3.5298 25.659c.2986 2.239 2.05 3.0938 3.462 1.0855l12.6802-14.926c.8703-1.1836 2.525-1.4602 3.7334-.624l32.6917 23.8136a2.635 2.635 0 0 0 2.5231.3387 2.6328 2.6328 0 0 0 1.6313-1.9534l26.8131-131.6197a2.713 2.713 0 0 0-1.004-2.6831 2.7164 2.7164 0 0 0-2.8516-.2886l.0543.0815z" transform="translate(-37 -36)"/>
			</svg>
		<p class="message">Uspesno ažuriran događaj!</p>
		<a href="finalEventList.php"><button class="button">Lista događaja</button></a>
	</div>
</div>
';
}else {
?>
                <div class="flex">
                    <div class="container">
                        <form name="form" class="forme" method="POST">
                            <input type="hidden" name="updatebre" value="1" />
                            <input name="id" type="hidden" value="<?php echo $row['ID'];?>" />
                            <label for="ime">Ime događaja</label>
                            <br>
                            <input class="Polje" type="text" id="ime" name="ime" placeholder="Ime događaja . . ." required value="<?php echo $row['Ime'];?>">
                            <br>
                            <br>
                            <label for="tema">Tema događaja </label>
                            <br>
                            <select id="tema" size="1" name="tema" required value="<?php echo $row['Tema'];?>">
                                <option value="Umetnost">Umetnost</option>
                                <option value="Komedija">Komedija</option>
                                <option value="Radionica">Radionica</option>
                                <option value="Ples">Ples</option>
                                <option value="Nocni provod">Nocni provod</option>
                                <option value="Film">Film</option>
                                <option value="Fitness">Fitness</option>
                                <option value="Hrana">Hrana</option>
                                <option value="Video igrice">Video igrice</option>
                                <option value="Vrticarstvo">Vrticarstvo</option>
                                <option value="Zdravlje">Zdravlje</option>
                                <option value="Literatura">Literatura</option>
                                <option value="Muzika">Muzika</option>
                                <option value="Umrezavanje">Umrezavanje</option>
                                <option value="Zurka">Zurka</option>
                                <option value="Religija">Religija</option>
                                <option value="Kupovina">Kupovina</option>
                                <option value="Sport">Sport</option>
                                <option value="Pozoriste">Pozoriste</option>
                                <option value="Nesto drugo">Nesto drugo</option>
                            </select>
                            <br>
                            <br>

                            <label for="img">Slika</label>
                            <br>
                            <input class="Polje img" type="text" id="img" name="img" placeholder="https://example-image.(jpg|png|svg)" required value="<?php echo $row['Slika'];?>">
                            <br>
                            <br>

                            <label for="opis">Opis dogadjaja</label>
                            <br>
                            <textarea class="Polje" row="4" id="opis" name="opis" placeholder="Opis događaja . . .">
                                <?php echo $row['Opis'];?>
                            </textarea>
                            <br>
                            <br>
                            <label for="mesto">Mesto odrzavanja</label>
                            <br>
                            <select id="mesto" name="mesto" required value="<?php echo $row['Mesto'];?>">
                                <option value="Beograd">Beograd</option>
                                <option value="Novi Sad">Novi Sad</option>
                                <option value="Sabac">Sabac</option>
                            </select>
                            <br>
                            <br>
                            <label for="datum">Datum pocetka</label>
                            <br>
                            <input type="date" id="datum" name="datum" value="<?php echo $row['Datum']; ?>" min="2019-01-01" max="2025-12-31">
                            <br>
                            <br>
                            <label for="cena">Cena ulaznice</label>
                            <br>
                            <input class="Polje" type="number" min="0" max="10000" id="cena" name="cena" placeholder="Cena ulaznice . . ." required value="<?php echo $row['Cena'];?>">
                            <br>
                            <br>
                            <input type="submit" name="update" value="Azuriraj događaj !" onclick="return mess()">
                        </form>
                    </div>
                    <div class="slogan">
                        <h1> Nešto <br><span> želiš da </span> <span style=" margin-left:50px; color:black; "> promeniš? </span></h1>
                    </div>

                </div>
                
                <?php } ?>

                    </div>
   
    <script type="text/javascript">

      function isImgFound() {
        altText = img.alt
        img.alt = '';
        const found = img.width !== 0;
        img.alt = altText;
        return found;
      }

      const dateInput = document.querySelector('#datum')
      const now = new Date().toISOString().substr(0, 10)
      dateInput.value = now
      dateInput.min = now

      function isImgFound() {
        altText = img.alt
        img.alt = '';
        const found = img.width !== 0;
        img.alt = altText;
        return found;
      }

      function capitalizeTextInputs() {
        const header = document.querySelector('#ime');
        header.value = header.value.substr(0, 1).toUpperCase() + header.value.substr(1)
        const body = document.querySelector('#opis');
        body.value = body.value.substr(0, 1).toUpperCase() + body.value.substr(1)
      }

      function mess(){
        if(!isImgFound()) {
          imgInput.value = defaultImgUrl
        }
        capitalizeTextInputs()

        alert("Vas zahtev se jos uvek obradjuje.");
        return true;
      }

      var imageExtensions = ['jpg', 'png', 'gif', 'svg'];

      function createImgElement(src) {
        var img = document.createElement('img'); 
        img.src = src;
        
        img.style.maxHeight  = '200px';
        img.style.maxWidth = '200px';
        return img;
      }

      function createEmptyDiv() {
        var paragraph = document.createElement('div');
        return paragraph;
      }

      function insertAfter(newNode, referenceNode) {
        referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
      }  

      function validURL(str) {
        var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
          '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
          '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
          '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
          '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
          '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
        return !!pattern.test(str) && imageExtensions.some((extension) => str.endsWith(extension));
      }

      var defaultImgUrl = 'https://i.ibb.co/7KQdPCp/1-w-MOt-Pw-RPga-Nf-KWi-SKPAw-JQ.jpg'

      var imgInput = document.querySelector('.img');
      var img = createImgElement('');
      insertAfter(img, imgInput);
      var paragraph = createEmptyDiv();
      insertAfter(paragraph, img); 
      
      imgInput.addEventListener("keyup", function(event) {
        if(validURL(imgInput.value)) {
            img.src = imgInput.value
        } else {
          img.alt = 'Default img will be displayed.'
          img.src =  '';
        }
      })
    </script> 
    
    </body>

    </html>