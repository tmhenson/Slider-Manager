
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>   
        <title>Slide Manger</title>
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="content" class="home">				
            <div class="slider-wrapper theme-default">
                <div class="ribbon"></div>
                <div id="slider" class="nivoSlider">

                    <?php
                    include_once 'slider-functions.php';
                    getSliderImages();
                    ?>
                </div> 
            </div>
        </div> <!-- #content -->
        <br style="clear:both;" />
        </div> <!-- #bulk -->
<!--        <script src="js/jquery.nivo.slider.pack.js"></script>-->
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    pauseTime: 5000,
                    effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
                    controlNav: true, // 1,2,3... navigation
                    keyboardNav: true, // Use left & right arrows
                    pauseOnHover: true // Stop animation while hovering
                });
            });
        </script>

    </body>

</html>