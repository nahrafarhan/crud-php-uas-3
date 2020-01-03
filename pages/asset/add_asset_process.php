
<?php
if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $dbh = new PDO("mysql:host=$servername;dbname=jaya_hospital",$username,$password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "INSERT INTO assets (asset_cat, asset_name, lokasi, cond)
        VALUES ('".$_POST["category"]."','".$_POST["name"]."','".$_POST["location"]."','".$_POST["cond"]."')";
        if ($dbh->query($sql)) {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');
            window.location.href='index.php?page=data_asset'</script>";
        }
        else{
            echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');
                </script>";
        }
        $dbh = null;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
       
}
?>