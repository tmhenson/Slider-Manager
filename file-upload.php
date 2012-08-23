<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>File Upload</title>
        <link rel="stylesheet" href="style.css" /> 
    </head>
    <body>
        <div id="main">  
            <h1>Upload Your Images</h1>  
            <form method="post" enctype="multipart/form-data"  action="upload.php">  
                <input type="file" name="images" id="images" multiple />  
                <button type="submit" id="btn">Upload Files!</button>  
            </form>  

            <div id="response"></div>  
            <ul id="image-list">  

            </ul>  
        </div>  

        <script src="js/upload.js"></script>
        <script src="js/jquery-1.8.0.min.js"></script>

    </body>
</html>

