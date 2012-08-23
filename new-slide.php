<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create New Slide</title>
        <link href="css/jquery-ui-1.8.23.custom.css" media="screen,projection,print" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

        <div id="content">
            <h1>New Slide Upload </h1>

            <form id="frmNewSlide" method="post" action="new-slide-upload.php" enctype="multipart/form-data">

                <input type='hidden' name='slider_id' value=''/>
                Slide Title<br/>
                <input name='slider_title' type='text' value=''/><br/>
                Start Date<br/>
                <input name='begin_date' type='text' class='date' value=''/><br/>
                End Date<br/>
                <input name='end_date' type='text' class='date' value=''/><br/>
                Slide Alt<br/>
                <input name='slider_anchor' type='text' value=''/><br/>
                Slide Anchor<br/>
                <input name='slider_alt' type='text' value=''/><br/>
                File Upload (Enter Custom dimensions for Slide ie 300px X 150px)<br/>
                <input type="file" name="filename" id="filename"  /><br/><br/>
                <input class="btnSlider" type="submit"/>
            </form>

            <div style="display: none;" id="hidMessage" class="highlight">
                <p>The slide has been created!!!!</p>
                <p><a href="index.php">Index</a><br/>
                    <a href="test.php">See Slide Show</a></p>
            </div>
            <br style="clear:both;"/>
            
        </div> <!-- #content -->
          <script src="js/jquery-1.8.0.min.js"></script>
        <script src="js/jquery-ui-1.8.23.custom.min.js"></script>

        <script>
            //do stufff……
            $(function() {
                $('.date').datepicker();
                $('.btnSlider').button();
            })
        </script>
    </body>
</html>

