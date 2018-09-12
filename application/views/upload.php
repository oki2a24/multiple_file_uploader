<html>
<head>
<title>Upload Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body>
    <form action="filehandle/upload" method='post' enctype='multipart/form-data'> 
        <div id="drag_drop_area">
            <div class="drag_drop_inside">
                <p class="drag_drop_info">ここにファイルをドロップ</p>
                <p>または</p>
                <p><input id="fileInput" value="ファイルを選択" type="file" multiple name="files[]"/></p>
                <output id="file_list"></output>
            </div>
        </div>
        <input type="submit" value="送信" name="fileSubmit">
    </form>
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="<?php echo base_url('js/uploadFile.js'); ?>"></script>
</body>
</html>
