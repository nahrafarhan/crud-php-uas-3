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
              <a href="#">EDIT DATA</a>
            </li>
            <li class="breadcrumb-item active">DATA ASSET</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="index.php?page=add_asset" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="dataTables_wrapper dt-bootstrap4" id="asset_wrapper">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                    <table id="asset" name="asset" class="table table-bordered table-hover dataTable">
                        <thead>
                          <tr role="row">
                            <th>Asset ID</th>
                            <th>Asset Category</th>
                            <th>Asset Name</th>
                            <th>Location</th>
                            <th>Condition</th>
                            <th style="width:180px;" class="" tabindex="0" aria-controls="" rowspan="" colspan="" aria-label="" aria-sort=""></th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include 'conf/conn.php';
                          $sql = "SELECT * FROM assets";
                          $result = $conn->query($sql);

                          // $stmt = $conn->prepare("SELECT * FROM assets ;");
                          // $stmt->execute();
                          // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                          // // var_dump($result); die();
                          //while ($row = $stmt->fetchAll());
                          foreach ($result as $row) {
                            // code...



                          echo "<tr>
                            <td>".$row['asset_id']."</td>
                            <td>".$row['asset_cat']."</td>
                            <td>".$row['asset_name']."</td>
                            <td>".$row['lokasi']."</td>
                            <td>".$row['cond']."</td>
                            <td align='center'>
                              <a href='index.php?page=edit_asset&id=".$row['asset_id']."' id='btnEdit' class='btn btn-md btn-success' role='button' title='Edit Data'><i class='fas fa-edit'></i> Edit</a>
                              <a href='pages/asset/delete_asset.php?id=".$row['asset_id']."' id='btnDelete' class='btn btn-md btn-danger' role='button' title='Delete Data'><i class='fas fa-trash-alt'></i> Delete</a>
                            </td>
                          </tr>";

                        }?>

                      </tbody>
                    </table>
                  </div>
            <!-- /.box-body -->
                </div>
          <!-- /.box -->
              </div>
        <!-- /.col -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<!-- /.content-wrapper -->
<!-- <script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.js"></script> -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<!-- Javascript Datatable -->
<!-- https://code.jquery.com/jquery-3.3.1.js
https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js
https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js -->
<script type="text/javascript">
$(document).ready(function() {
		$('#asset').DataTable(); 
			// "paging":   true,
			// "pagingType": "full_numbers",
			// "ordering": true,
			// "info":     true,
		 
  });
// document.getElementById("btnEdit").href = "index.php?page=edit_asset";
</script>
