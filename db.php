
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

<input name="name" type="text" placeholder = "What should the baby be named?" />

<input type="submit" id="submitButton" value="Submit Form" /> 


</form>
