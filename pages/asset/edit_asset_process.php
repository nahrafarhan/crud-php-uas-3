
<?php
if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $dbh = new PDO("mysql:host=$servername;dbname=jaya_hospital",$username,$password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        $sql = "UPDATE assets SET asset_cat='".$_POST["category"]."', asset_name='".$_POST["name"]."',lokasi='".$_POST["location"]."',cond='".$_POST["cond"]."' WHERE asset_id='".$_GET['id']."'";
        if ($dbh->query($sql)) {
            echo "<script type= 'text/javascript'>alert('Record has been edited successfully!');
            window.location.href='../../index.php?page=data_asset'</script>";
        }
        else{
            echo "<script type= 'text/javascript'>alert('Error. Please check your connection!.');
                </script>";
        }
        $dbh = null;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
       
}
?>