<html>
<head>
    <?php
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'course';
        
        $conn = mysqli_connect($host,$username,$password);
        
        if (!$conn) {
            echo "Connection Failed!".mysqli_error();
        }
        
        if (isset($_post["name"])){
            $name = $_POST["name"];
            $fname = $_POST['f_name'];
            $result = mysqli_query($conn , "INSERT INTO test VALUES ('$name','$fname')");
            
        }
        
    ?>
</head>
<body>
    <form method="post">
        <input type="text" name="name">
        <input type="text" name="f_name">
        <input type="submit" value="submit">
    </form>
</body>
</html>