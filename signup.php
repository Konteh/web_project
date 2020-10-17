<?php
    $dbsevername = "localhost";
    $dbusername = "mathema";
    $dbpassword =  "mathema12345" ;
    $dbname = "login";
    $dbemail="email";

    $conn = mysqli_connect($dbsevername, $dbusername, $dbpassword, $dbname);

    if(!$conn) {
        die('The connection failed');
    } else{
        echo 'connection successful';
    }

    $dbname = $_POST["name"];
    $dbemail = $_POST["email"];
    $dbpassword = $_POST["password"];
    $dbsalt = 'login';
    $dbpassword_encrypted = shal($password.$salt);

    $sql = 'INSERT INTO signup(name, email, password) 
            VALUES("$name", "$email", "$password_encrypted")';

    if($conn->query($sql)=== TRUE){
        ?>
        <script>
            alert('the values have been inserted')      
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('the value did not insert')      
        </script>
        <?php
    }

?>