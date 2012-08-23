<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
    </head>
    <body>
        <div id="content">
            <!-- Place Content Here -->
            <?php
            require 'slider-functions.php';
         //  $date = get_format_date();
            $date= date("m.d.y");
            
            echo $date;

            ?>
        </div> <!-- #content -->

    </body>
</html>

