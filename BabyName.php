
<?php 

if (array_key_exists('name', $_POST)) {
    
$link = mysqli_connect("localhost", "bootso5_Davg99", "VaQYEGTc2d", "bootso5_Baby_Name");

if (mysqli_connect_error()) {

    die ("There was an error connecting to the database");

    } 
         

            
            
            $query = "INSERT INTO `BabyName` (`name`, `color`, `sport`, `parent`, `weight`, `14er`, `beer`, `pizza`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['color'])."', '".mysqli_real_escape_string($link, $_POST['parent'])."', '".mysqli_real_escape_string($link, $_POST['weight'])."', '".mysqli_real_escape_string($link, $_POST['14er'])."', '".mysqli_real_escape_string($link, $_POST['beer'])."', '".mysqli_real_escape_string($link, $_POST['pizza'])."')";
                


            if (mysqli_query($link, $query)) {

                echo "<script>alert('We've recieved your informtation! Thanks so much for helping us pick a name...');</script>";

        } else {

            echo "<script>alert('Failure.');</script>";  
                 }
            }

        
    




?>
<html lang="en">
<head>
	<meta charset="utf-8"><meta name="Baby Guilfoyle" content="width=device-width, initial-scale=1">
	<title>Baby Guilfoyle</title>

</head>	
<style>
		body {
			margin:0;
			padding:0;
			background-color: #6AADE3;
			background-blend-mode:lighten;
			font-family: Arial, Helvetica, sans-serif;
            }
            
        form {
		    background-color:#0073e6;
		    text-align:center;	
            font-size:25px;
            }   
            
            #topbar {
			min-width:0 auto;
			margin-top:0 auto;
			height: 40px;
			background: #ff9900;
			}
		
		.lead {
		
			margin-left:auto;
			margin-right:auto;
			font-family: 'Shadows Into Light', cursive;
			text-align: center;
			font-weight:bold;	
			}
		
		.partition {
			width:60px;
			border-left: 1px black solid;
			height:40px
			}
			
		.topbar-menu {
			width:120px;
            float:left;
			font-weight: bold;
            font-size: 90%;
            padding: 13px 15px 0 15px;
            height:40px;
			} 
        footer {
			background-color: #ff9900;
			padding: 10px;
			text-align: center;
			color: white;
		}             
</style>
<div id="topbar">
        <div class="partition topbar-menu"><a href="http://www.bootsoles.com" hrefs="http://www.bootsoles.com&quot;">Home</a></div>

        <div class="partition topbar-menu"><a href="/GIT/Us.html" hrefs="http://www.bootsoles.com/Us&quot;">Us</a></div>

        <div class="partition topbar-menu"><a href="/GIT/Kristin.html" hrefs="http://www.bootsoles.com/Kristin&quot;">Kristin</a></div>

        <div class="partition topbar-menu"><a href="/GIT/David.html" hrefs="http://www.bootsoles.com/David&quot;">David </a></div>

        <div class="partition topbar-menu"><a href="/GIT/BabyName.php" hrefs="http://www.bootsoles.com/BabyName.php&quot;">Baby Name </a></div>

        <div class="partition topbar-menu"><a href="/GIT/Baby_Pics.html" hrefs="http://www.bootsoles.com/Baby_Pics&quot;">Baby Pics </a></div>
    </div>

    <p></p>

    <header></header>

<div class="lead">
			<h1><span style="font-size:72px;">Baby Guilfoyle</span></h1>
			<p><span style="font-size:36px;">Could he be named Aaron or Zeus !<br /> Or any name in-between <br /> Help us below ! .</span></p>
			<p><img alt="Baby_Climber" src="/GIT/Images/Baby_Climber.jpg" style="width: 400px; height: 302px;" /></p>
		</div>


<form method = "post" >  

<h2>Baby Form</h2>
<body>
<label for="BabyName">Baby Name:</label><br />
<input id= "BabyName" name="name" type="text" placeholder = "What will the baby be named?" /><br/>
<label for="FavoriteColor">Favorite Color:</label><br />
<input id="FavoriteSport" name="color" type="text" placeholder = "What will his favorite color be?" /><br />
<label for="FavoriteSport">Favorite Sport:</label><br />
<input id="FavoriteSport" name="sport" type="text" placeholder = "What sport will he play?" /><br />
<label for="FavoriteParent">Who will his favorite parent be?</label><br />
<select id="FavoriteParent" name="parent"><option></option><option>Mom</option><option>Dad</option><option>Cole</option> </select><br />
<label for="BirthWeight">How much will he weigh at birth?</label><br />
<select id="BirthWeight" name="weight"><option></option><option>5.5 lbs</option><option>6.0 lbs</option><option>6.5 lbs</option><option>7.0 lbs</option><option>7.5 lbs</option><option>8.0 lbs</option><option>8.5 lbs</option><option>9.0 lbs</option><option>9.5 lbs</option><option>10.0 lbs</option><option>10.5 lbs</option><option>15.4 lbs</option> </select><br />
<label for="First 14er">What will be the first 14,000ft Mountain he climbs?</label><br />
<select id="BirthWeight" name="14er"><option></option><option>Mt. Elbert </option><option>	Mt. Massive	</option><option>	Mt. Harvard	</option><option>	Blanca Peak	</option><option>	La Plata Peak	</option><option>	Uncompahgre Peak	</option><option>	Crestone Peak	</option><option>	Mt. Lincoln	</option><option>	Castle Peak	</option><option>	Grays Peak	</option><option>	Mt. Antero	</option><option>	Torreys Peak	</option><option>	Quandary Peak	</option><option>	Mt. Evans	</option><option>	Longs Peak	</option><option>	Mt. Wilson	</option><option>	Mt. Cameron	</option><option>	Mt. Shavano	</option><option>	Mt. Princeton	</option><option>	Mt. Belford	</option><option>	Mt. Yale	</option><option>	Crestone Needle	</option><option>	Mt. Bross	</option><option>	Kit Carson Peak	</option><option>	Maroon Peak	</option><option>	Tabeguache Mtn.	</option><option>	Mt. Oxford	</option><option>	El Diente Peak	</option><option>	Mt. Democrat	</option><option>	Mt. Sneffels	</option><option>	Capitol Peak	</option><option>	Pikes Peak	</option><option>	Snowmass Mtn.	</option><option>	Mt. Eolus	</option><option>	Windom Peak	</option><option>	Challenger Point	</option><option>	Mt. Columbia	</option><option>	Missouri Mountain	</option><option>	Humboldt Peak	</option><option>	Mt. Bierstadt	</option><option>	Conundrum Peak	</option><option>	Sunlight Peak	</option><option>	Handies Peak	</option><option>	Culebra Peak	</option><option>	Ellingwood Peak	</option><option>	Mt. Lindsey	</option><option>	North Eolus	</option><option>	Little Bear Peak	</option><option>	Mt. Sherman	</option><option>	Redcloud Peak	</option><option>	Pyramid Peak	</option><option>	North Maroon Peak	</option><option>	Wilson Peak	</option><option>	Wetterhorn Peak	</option><option>	San Luis Peak	</option><option>	Huron Peak	</option><option>	Mt. of the Holy Cross	</option><option>	Sunshine Peak	</option></select><br />
<label for="FavoriteBeer">Favorite Beer:</label><br />
<input id="FavoriteBeer" name="beer" type="text" placeholder = "Which Brand will he be enjoying after a summit?"/><br />
<label for="FavoritePizza">Favorite Pizza Toppings:</label><br />
<input id="FavoritePizza" name="pizza" type="text" placeholder = "What toppings will he put on his pizza?" /><br /><br />


<input type="submit" id="submitButton" value="Submit Form" /> 
        

</form>
<footer>
<p>&copy; Baby Guilfoyle 2020</p>
</footer>
</body>
