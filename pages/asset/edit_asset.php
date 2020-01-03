<?php
    include 'conf/conn.php';
    try {
        $sql = "SELECT * FROM assets WHERE asset_id='".$_GET['id']."'";

        $result = $conn->query($sql);
        //$stmt = $conn->prepare($sql);
        // $stmt->execute();
        //$row = $result->setFetchMode(PDO::FETCH_ASSOC);
        
     } catch(PDOException $e) {
         echo "Can not retrieve: " . $e->getMessage();
     }
     foreach ($result as $row) {
            
        
    // $result = $conn->query($sql);
    // $sql = "SELECT * FROM assets WHERE asset_id =  :id";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);   
    // $stmt->execute();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 1203.6px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">DATA ASSET</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">DATA ASSET</a>
            </li>
            <li class="breadcrumb-item active">EDIT ASSET</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-6">
                            <h3>Edit Asset</h3>
                        </div>
                    </div>
                    <form role="form" method="post" action="pages/asset/edit_asset_process.php?id=<?php echo $row['asset_id'];?>">
                        <div class="card-body">
                
                            <div class="form-group">
                                <label>ASSET CATEGORY</label>
                                <select class="form-control" name="category">
                                    <option value="<?php echo $row['asset_cat'];?>"><?php echo $row['asset_cat'];?>
                                    <option value="Car">Car</option>
                                    <option value="Medkit">Medkit</option>
                                    <option value="Motorcycle">Motorcycle</option>
                                    <option value="Toolkit">Toolkit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ASSET NAME</label>
                                <input value="<?php echo $row['asset_name'];?>" type="text" name="name" class="form-control" placeholder="Asset Name" required>
                            </div>
                            <div class="form-group">
                                <label>LOCATION</label>
                                <input value="<?php echo $row['lokasi'];?>" type="text" name="location" class="form-control" placeholder="Asset Location" required>
                            </div>
                            <div class="form-group">
                                <label>CONDITION</label>
                                <input value="<?php echo $row['cond'];?>" type="text" name="cond" class="form-control" placeholder="Asset Condition Value (10-100)" required>
                            </div>
                            <div class="float-sm-right">
                                <button type="submit" class="btn btn-primary" title="Save Data" name="submit"> <i class="fas fa-save"></i> Save</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
     <?php } ?>