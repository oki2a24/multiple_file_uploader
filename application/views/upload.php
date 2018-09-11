<html>
<head>
<title>Upload Form</title>
</head>
<body>
    <form action="filehandle/upload" method='post' enctype='multipart/form-data'> 

    <input type="file" name="files[]" multiple/>

    <br /><br />

    <input type="submit" value="upload" name="fileSubmit"/>

    </form>
</body>
</html>
