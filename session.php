<?php

if ($_SESSION['name']) {

echo "Success";

} else {

    header("Location: GIT/babyname.php");
}

?>
