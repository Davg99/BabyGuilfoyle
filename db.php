
<?php 

mysqli_connect("localhost:3306", "bootso5_Davg99", "Iceland18!");

if (mysqli_connect_error()) {

    echo "There was an error connecting to the database";

} else {

    echo "Database connection succesful";
}

?>	
