
<!DOCTYPE html>
<html>
    <head>
        <title>Pitor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            *{
                text-align: center;
                transition-duration: 0.5s;
            }
            form{
                margin:auto
            }
            p{
                color:lightgrey;
            }
            h1{
                margin-top:25vh;
            }
        </style>
        <script>
                function fn(){
                    var x=document.getElementById('magnet').value;
                    if(( document.getElementById("file").files.length == 0 )&&(x!="")){
                        document.getElementById('demo').innerHTML="no files selected and  no ";
                    }
                }
        </script>
    </head>
    <body>
        <h1>PiTor :)</h1>
            <form action="download.php" method="POST" enctype="multipart/form-data" class='container form-group'>
                <br><br>Get the Magnet link or upload the .torrent file<br><br>
                <input type="text" id="magnet" name="magnet" placeholder="Magnet Link" autocomplete="off" onblur="fn()"> or <input type="file" name="file">
                <br>
                <p><strong>Note:</strong> Only .torrent format allowed to a max size of 1 MB.</p>
                <input type="submit" class='btn btn-primary'>
            </form>
            <p id="demo"></p>
    </body>
    
    </html>

