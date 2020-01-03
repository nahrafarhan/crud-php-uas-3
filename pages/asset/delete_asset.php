<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=jaya_hospital",$username,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    $sql = "DELETE FROM assets WHERE asset_id ='".$_GET['id']."'";
    if ($dbh->query($sql)) {
        echo "<script type= 'text/javascript'>alert('Record has been deleted successfully!');
        window.location.href='../../index.php?page=data_asset'</script>";   
    }  $dbh = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>