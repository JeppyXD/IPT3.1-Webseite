<?php
	$servername = "localhost:3306";
	$username = "joel.erni";
	$password = "Jsf87648?";
	$dbname = "FH5";
	$type = 4;

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	
	$result5 = mysqli_query($conn, "SELECT * FROM car WHERE rank=5 AND fk_racetypeid = $type");
	$result4 = mysqli_query($conn, "SELECT * FROM car WHERE rank=4 AND fk_racetypeid = $type");
	$result3 = mysqli_query($conn, "SELECT * FROM car WHERE rank=3 AND fk_racetypeid = $type");
	$result2 = mysqli_query($conn, "SELECT * FROM car WHERE rank=2 AND fk_racetypeid = $type");
	$result1 = mysqli_query($conn, "SELECT * FROM car WHERE rank=1 AND fk_racetypeid = $type");
	$resultb = mysqli_query($conn, "SELECT * FROM racetype WHERE racetypeid = $type");
	
	while($rowb = mysqli_fetch_assoc($resultb))
	{
		$gt = $rowb["bez"];
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cross Country Racing</title>
        <link rel="stylesheet" href="/styles.css">
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/png" href="/images/icon.png">
    </head>
    <body>
    <div id="mobile-nav">
    <img src="/images/back.png" class="mobilemenu" id="btnoff" alt="Start">
            <a href="/index.html" class="LogoClick center mobilea">Home</a>
            <a href="/news.html" class="LogoClick center mobilea">News</a>
            <a href="/cars.html" class="LogoClick center mobilea">Cars</a>
            <a href="/map.html" class="LogoClick center mobilea">Map</a>
            <a href="/tuning.html" class="LogoClick center mobilea">Tuning</a>
            <a href="/tips.html" class="LogoClick center mobilea">Tips</a>
            <a href="/aboutme.html" class="LogoClick center mobilea">About Me</a>
        </div>
        <header>
            <div class="colorramp"></div>
                <div class="header-navigation">
                    <div>
                        <img src="/images/menu-icon.png" class="mobilemenu" id="btnon" alt="Start">
                    </div>
                    <nav class="center">
                        <a href="/index.html" class="LogoClick">
                            <img src="/images/Logo2.png" class="Logo center" alt="Start">
                        </a>
                        <a href="/news.html">News</a>
                        <div class="dropdown">
                            <a class="dropbtn" href="/cars.html">Cars</a>
                            <div class="dropdown-content">
                                <a href="/cars/roadracing.html">Road Racing</a>
                                <a href="/cars/dirtracing.html">Dirt Racing</a>
                                <a href="/cars/crosscountryracing.html">Cross Country Racing</a>
                                <a href="/cars/prstunts.html">PR Stunts</a>
                                <a href="/cars/streetracing.html">Street Racing</a>
                            </div>
                        </div>
                        <a href="/map.html">Map</a>
                        <a href="/tuning.html">Tuning</a>
                        <a href="/tips.html">Tips</a>
                        <a href="/aboutme.html">About-Me</a>
                    </nav>
                </div>
            <div class="colorramp"></div>
        </header>
        <article>
            <h1 class="center" style="font-size: 4em;">Top 5 cars for <?php echo $gt?></h1>
            <div class="paragraph-trenner"></div>

            <ol reversed>
                <li class="carlist">
                    <div>
                        <h1 class="center" style="line-height: 1; margin-bottom: 40px;"><?php while($row = mysqli_fetch_assoc($result5)) {echo $row["bez"];?></h1>
                        <div class="flex-container">
                            <div class="flex-item1" style="margin: auto 1vw;">
                                <img class="center" src="/images/cars/<?php echo $gt?>/5.png" width="500em">
                            </div>
                            <div class="flex-item2">
                                <div><h2 style="margin-bottom: -0.25vw; font-size: 30px;" class="center"><?php echo $row["price"];?></h2></div>
                                <div>
                                    <table width="100%">
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Speed<br><?php echo $row["speed"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["speed"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Handling<br><?php echo $row["handling"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["handling"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Acceleration<br><?php echo $row["acceleration"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["acceleration"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Launch<br><?php echo $row["launch"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["launch"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Braking<br><?php echo $row["braking"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["braking"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Offroad<br><?php echo $row["offroad"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["offroad"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            </div>
                        </div>
                        <div>
                            <h4><?php echo $row["besch"];}?></h4>
                        </div>
                    </div>
                </li>
                <div class="paragraph-trenner"></div>
                <li class="carlist">
                    <div>
                        <h1 class="center" style="line-height: 1; margin-bottom: 1.5vw;"><?php while($row = mysqli_fetch_assoc($result4)) {echo $row["bez"];?></h1>
                        <div class="flex-container" >
                            <div class="flex-item1" style="margin: auto 1vw;">
                                <img class="center" src="/images/cars/<?php echo $gt?>/4.png" width="500em">
                            </div>
                            <div class="flex-item2" style="margin: auto 1vw;">
                                <h2 style="margin-bottom: -0.25vw; font-size: 30px;" class="center"><?php echo $row["price"];?></h2>
                                <table width="100%">
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Speed<br><?php echo $row["speed"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["speed"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Handling<br><?php echo $row["handling"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["handling"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Acceleration<br><?php echo $row["acceleration"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["acceleration"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Launch<br><?php echo $row["launch"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["launch"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Braking<br><?php echo $row["braking"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["braking"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Offroad<br><?php echo $row["offroad"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["offroad"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <h4><?php echo $row["besch"];}?></h4>
                    </div>
                </li>
                <div class="paragraph-trenner"></div>
                <li class="carlist">
                    <div>
                        <h1 class="center" style="line-height: 1; margin-bottom: 1.5vw;"><?php while($row = mysqli_fetch_assoc($result3)) {echo $row["bez"];?></h1>
                        <div class="flex-container">
                            <div class="flex-item1" style="margin: auto 1vw;">
                                <img class="center fade-in" src="/images/cars/<?php echo $gt?>/3.png" width="500em">
                            </div>
                            <div class="flex-item2" style="margin: auto 1vw;">
                                <h2 style="margin-bottom: -0.25vw; font-size: 30px;" class="center"><?php echo $row["price"];?></h2>
                                <table width="100%">
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Speed<br><?php echo $row["speed"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["speed"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Handling<br><?php echo $row["handling"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["handling"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Acceleration<br><?php echo $row["acceleration"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["acceleration"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Launch<br><?php echo $row["launch"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["launch"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Braking<br><?php echo $row["braking"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["braking"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Offroad<br><?php echo $row["offroad"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["offroad"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <h4><?php echo $row["besch"];}?></h4>
                    </div>
                </li>
                <div class="paragraph-trenner"></div>
                <li class="carlist">
                    <div>
                        <h1 class="center" style="line-height: 1; margin-bottom: 30px;"><?php while($row = mysqli_fetch_assoc($result2)) {echo $row["bez"];?></h1>
                        <div class="flex-container" >
                            <div class="flex-item1" style="margin: auto 1vw;">
                                <img class="center" src="/images/cars/<?php echo $gt?>/2.png" width="500em">
                            </div>
                            <div class="flex-item2" style="margin: auto 1vw;">
                                <h2 style="margin-bottom: -0.25vw; font-size: 1.5vw;" class="center"><?php echo $row["price"];?></h2>
                                <table width="100%">
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Speed<br><?php echo $row["speed"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["speed"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Handling<br><?php echo $row["handling"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["handling"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Acceleration<br><?php echo $row["acceleration"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["acceleration"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Launch<br><?php echo $row["launch"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["launch"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Braking<br><?php echo $row["braking"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["braking"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Offroad<br><?php echo $row["offroad"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["offroad"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <h4><?php echo $row["besch"];}?></h4>
                    </div>
                </li>
                <div class="paragraph-trenner"></div>
                <li class="carlist">
                    <div>
                        <h1 class="center" style="line-height: 1; margin-bottom: 1.5vw;"><?php while($row = mysqli_fetch_assoc($result1)) {echo $row["bez"];?></h1>
                        <div class="flex-container" >
                            <div class="flex-item1" style="margin: auto 1vw;">
                                <img class="center" src="/images/cars/<?php echo $gt?>/1.png" width="500em">
                            </div>
                            <div class="flex-item2" style="margin: auto 1vw;">
                                <h2 style="margin-bottom: -0.25vw; font-size: 30px;" class="center"><?php echo $row["price"];?></h2>
                                <table width="100%">
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Speed<br><?php echo $row["speed"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["speed"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Handling<br><?php echo $row["handling"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["handling"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Acceleration<br><?php echo $row["acceleration"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["acceleration"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Launch<br><?php echo $row["launch"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["launch"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Braking<br><?php echo $row["braking"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["braking"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Offroad<br><?php echo $row["offroad"];?></h3>
                                                <div class="center ani" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["offroad"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <h4><?php echo $row["besch"];}?></h4>
                    </div>
                </li>
            </ol>
            <div class="paragraph-trenner"></div>
            <a href="/cars.html" class="center default link"><h3>&#129080;Go Back</h3></a>

        </article>
        <footer>
            <div class="colorramp"></div>
            <div class="flex-container footerconent">
                <div class="footerflex">
                    <h3>Contact me</h3>
                    <ul>
                        <li><a href="joel_erni1@sluz.ch">send E-Mail</a></li>
                        <li><a>on Discord</a></li>
                        <li>Tel.: 079 123 45 67</li>
                    </ul>
                </div>
                <div class="footerflex">
                    <h3>Social Media</h3>
                    <ul>
                        <li><a href="https://www.youtube.com/c/RickastleyCoUkOfficial">Youtube</a></li>
                        <li><a href="https://www.instagram.com/jeppylino/">Instagram</a></li>
                        <li><a href="https://discord.gg/4ctjPXzg">Discord</a></li>
                        <li><a href="https://www.reddit.com/user/Jeppy_">Reddit</a></li>
                        <li><a href="https://www.linkedin.com/in/joel-erni-745116239/">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="footerflex">
                    <h3>About</h3>
                    <ul>
                        <li><a href="/aboutme.html">About me</a></li>
                        <li><a href="https://c.tenor.com/_4YgA77ExHEAAAAC/rick-roll.gif" target="_blank">AGB</a></li>
                        <li><a href="https://c.tenor.com/rUa8MTSuXFEAAAAd/who-cares.gif" target="_blank">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
    <script src="/script.js"></script>
</html>