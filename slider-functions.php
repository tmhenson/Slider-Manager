<?php

/*
 * Manager for the Front Page Slider
 * Developer: Thomas Henson
 * Email: tmhenson@una.edu
 */

//db connection should be moved 
require 'db_conn.php';
//check to see if we trying to pos

if (isset($_POST['slider_id'])) {
    connect();
    update_image();
}

function connect() {
    global $pdo;
    require 'db_conn.php';
    $pdo = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . ';', $dbUser, $dbPass);
}

//get slider image and ID for display
function get_slide_image() {
    global $pdo;
    connect();
    
    $stmt = $pdo->prepare('SELECT slider_id, file_name FROM slider');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

//get the full data for the sliders
function get_slide_info($slider_id) {
    global $pdo;
    connect();
    $stmt = $pdo->prepare('SELECT * FROM slider WHERE slider_id = :slider_id LIMIT 1');
    $stmt->execute(array(':slider_id' => $slider_id));
    return $stmt->fetch(PDO:: FETCH_OBJ);
}

function update_image() {
    global $pdo;

    $stmt = $pdo->prepare('UPDATE slider SET slider_title = ?, begin_date= ?, end_date= ?, slider_anchor= ?, slider_alt = ?  WHERE slider_id= ?');
    $stmt->execute(array($_POST[slider_title], $_POST[begin_date], $_POST[end_date], $_POST[slider_anchor], $_POST[slider_alt], $_POST[slider_id]));
}

//get slide show images
function getSliderImages() {

    $date = date("m/d/Y");
    require 'db_conn.php';
    
    mysql_connect($dbHost, $dbUser, $dbPass);
    @mysql_select_db($dbName) or die("Unable to select database" . mysql_error());
    $sql = "SELECT slider_title, file_name, slider_alt FROM slider WHERE end_date > '$date' AND begin_date < '$date'";
    $result = mysql_query($sql);

    while ($row = mysql_fetch_array($result)) {
        echo '<img src="uploads/' . $row["file_name"] . '" title="' . $row["slider_title"] . '" alt="' . $row["slider_alt"] . '"/>';
    }

    mysql_close();
}

?>
