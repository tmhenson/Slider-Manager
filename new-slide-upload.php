<?php
/*
 * Process for new-slide.php form
 * Developer: Thomas Henson
 * Email: tmhenson@una.edu
 */

//uploads file into the uploads directory
$name = date("mdYG") . $_FILES['filename']['name'];
move_uploaded_file($_FILES['filename']['tmp_name'], "uploads/" . $name);

function connect() {
    global $pdo;

    $dbType = "mysql";
    $dbHost = 'nabdb.beacontec.com';
    $dbUser = 'weblion';
    $dbPass = 'weblion';
    $dbName = 'una_edu';

    $pdo = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . ';', $dbUser, $dbPass);
}

global $pdo;
connect();
//$slider_title = $_POST[slider_title];
//insert info into database
// $stmt = $pdo->prepare('UPDATE slider SET slider_title = ?, begin_date= ?, end_date= ?, slider_anchor= ?, slider_alt = ?  WHERE slider_id= ?');
$stmt = $pdo->prepare('INSERT INTO slider (slider_title, begin_date, end_date, slider_anchor, slider_alt, file_name ) VALUES ( :slider_title, :begin_date, :end_date, :slider_anchor, :slider_alt, :file_name) ');
$stmt->execute(array(':slider_title' => $_POST['slider_title'], ':begin_date' => $_POST['begin_date'], ':end_date' => $_POST['end_date'], ':slider_anchor' => $_POST['slider_anchor'], ':slider_alt' => $_POST['slider_alt'], ':file_name' => $name));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create New Slide</title>
        <script src="js/jquery-1.8.0.min.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>
    <link href="css/jquery-ui-1.8.23.custom.css" media="screen,projection,print" rel="stylesheet" type="text/css" />
    
        <link rel="stylesheet" href="css/style.css" />

    </head>
    <body>

        <div id="content">
            <h1>Success</h1>

            <p>The slide has been created!!!!</p>
            <p>
                <a href="index.php">Home</a><br/>
                <a href="test.php">See Slide Show</a><br/>
                <a href="new-slide.php">Add Another Slide</a><br/>
            </p>

            <br style="clear:both;"/>

        </div> <!-- #content -->
        <script src="js/jquery-1.8.0.min.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>
    
    </body>