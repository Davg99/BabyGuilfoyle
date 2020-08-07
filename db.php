
<?php 

if (array_key_exists('name', $_POST)) {
    
$link = mysqli_connect("localhost", "bootso5_Davg99", "Iceland18!", "bootso5_Baby_Name");

if (mysqli_connect_error()) {

    die ("There was an error connecting to the database");

} 
    if ($_POST['name'] == '') {

        echo "The Name is blank!";
    } else {

        $query = "SELECT `id` FROM `BabyName` WHERE name = '".mysqli_real_escape_string($link, $_POST['name'])."'";   

        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) > 0) {

            echo "That Name already exists";
        } else { 
            
            $query = "INSERT INTO `BabyName` (`name`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."')";

            if (mysqli_query($link, $query)) {

                echo "We got the name.";

        } else {

            echo "Nope";  
        }
    }

}

}


?>	

<form method = "post">  

<h2>Baby Form</h2>
<label for="BabyName">Baby Name:</label><br />
<input name="name" type="text" placeholder = "What should the baby be named?" /><br/>
<label for="FavoriteSport">Favorite Sport:</label><br />
<input id="FavoriteSport" name="FavoriteSport" type="text" placeholder = "What sport will he play?" /><br />
<label for="FavoriteParent">Favorite Parent:</label><br />
<select id="FavoriteParent" name="FavoriteParent"><option></option><option>Mom</option><option>Dad</option><option>Cole</option> </select><br />
<label for="BirthWeight">BirthWeight:</label><br />
<select id="BirthWeight" name="BirthWeight"><option></option><option>5.5 lbs</option><option>6.0 lbs</option><option>6.5 lbs</option><option>7.0 lbs</option><option>7.5 lbs</option><option>8.0 lbs</option><option>8.5 lbs</option><option>9.0 lbs</option><option>9.5 lbs</option><option>10.0 lbs</option><option>10.5 lbs</option><option>15.4 lbs</option> </select><br />
<label for="FavoriteBeer">Favorite Beer:</label><br />
<input id="FavoriteBeer" name="FavoriteBeer" type="text" placeholder = "Which Brand of Beer will he be breaking out after climbing a 14er?"/><br />
<label for="FavoritePizza">Favorite Pizza Toppings:</label><br />
<input id="FavoritePizza" name="FavoritePizza" type="text" placeholder = "What toppings will he put on his pizza?" /><br />


<input type="submit" id="submitButton" value="Submit Form" /> 


</form>
