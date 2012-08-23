<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Slide Manager</title>
        <link rel="stylesheet" href="css/style.css" />
        <link href="css/jquery-ui-1.8.23.custom.css" media="screen,projection,print" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="content">
            <!-- Place Content Here -->
            <h1>Welcome to the Slider Manager</h1><br/>
            <p> 
                <a href="new-slide.php" class="button">New Slide</a><a href="test.php" class="button">Slideshow</a><br/><br/>
                <strong>(Click Slide to edit)</strong>
            </p>

            <?php
            //controller
            require 'slider-functions.php';
            ?>

            <ul class="slider_list">

                <?php
                $results = get_slide_image();
                foreach ($results as $r) {
                    echo "<li><a href='edit-images.php?slider_id={$r->slider_id}'><img src='uploads/{$r->file_name}' target='_blank'/></a><div class='btnHover' style='display:none;'><button class='button'>Delete</a></button></li>";
                }
                ?>

            </ul>

        </div> <!-- #content -->
        <br style="clear:both;" />
        <script src="js/jquery-1.8.0.min.js"></script>
        <script src="js/jquery-ui-1.8.23.custom.min.js"></script>
        <link href="css/jquery-ui-1.8.23.custom.css" media="screen,projection,print" rel="stylesheet" type="text/css" />


        <script>
            //do stufff……
            $(function() {
                $('.date').datepicker();
                $('.button').button();
            });                  
        </script>

    </body>
</html>

