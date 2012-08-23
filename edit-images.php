<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Edit Slide</title>
        <link rel="stylesheet" href="css/style.css" /> 
        <link href="css/jquery-ui-1.8.23.custom.css" media="screen,projection,print" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div id="content">
            <!-- Place Content Here -->
            <h1>Edit Slider Images/Content/Order</h1>

            <?php
            require 'slider-functions.php';
            connect();
            $results = get_slide_info($_GET['slider_id']);
            ?>
            <form id="frmEdit_slider" action="process.php" method="post">

<?php
//view logic
if ($results) {
    echo "
                                    <input type='hidden' name='slider_id' value='$results->slider_id'/>
                                    <strong>Slide Title</strong><br/>
                                    <input name='slider_title' type='text' value='$results->slider_title'/><br/>
                                    <strong>Start Date</strong><br/>
                                    <input name='begin_date' type='text' class='date' value='$results->begin_date'/><br/>
                                    <strong>End Date</strong><br/>
                                    <input name='end_date' type='text' class='date' value='$results->end_date'/><br/>
                                    <strong>Slide Alt</strong><br/>
                                    <input name='slider_anchor' type='text' value='$results->slider_alt'/><br/>
                                    <strong>Slide Anchor</strong><br/>
                                    <input name='slider_alt' type='text' value='$results->slider_anchor'/><br/><br/>
                                    ";
    echo "<ul id='image-list'><img src='uploads/{$results->file_name}'/></ul>";
} else {
    echo "<p>No results available.</p>";
}
?>

                <br style="clear:both;"/>
                <input class="btnSlider" type="submit" value="Save"/>
            </form>
            <div style="display: none;" id="hidMessage" class="highlight">
                <p>The slide has been updated!!!!</p>
                <p><a href="index.php">Index</a></p>
            </div>
            <!--            <form method="post" enctype="multipart/form-data"  action="upload.php">  
                            <input type="file" name="images" id="images" multiple />  
                            <button type="submit" id="btn">Upload Files!</button>  
                        </form>  
            
                        <div id="response"></div>              <script src="upload.js"></script>-->

        </div> <!-- #content -->

        <br style="clear:both;" />
        <script src="js/jquery-1.8.0.min.js"></script>
        <script src="js/jquery-ui-1.8.23.custom.min.js"></script>

        <script>
            //do stufff……
            $(function() {
                $('.date').datepicker();
                $('.btnSlider').button();
                $('#frmEdit_slider').submit(function() {
                    $.ajax({ type: "POST", url: "slider-functions.php", data:     $(this).serialize(), success: 
                            function() {
                            $('#frmEdit_slider').hide();
                            $('#hidMessage').show();
                        }
                    })
                    return false;
                });
            })
        </script>

    </body>
</html>

