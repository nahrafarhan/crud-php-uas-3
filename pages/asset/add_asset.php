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
            <li class="breadcrumb-item active">ADD ASSET</li>
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
            <h3>Add Asset</h3>
            </div>
            <form role="form" method="post" action="pages/asset/tambah_mahasiswa_proses.php">
              <div class="card-body">
                
                <div class="form-group">
                  <label>ASSET CATEGORY</label>
                  <select class="form-control" name="category">
                    <option value="">- Pilih Category -</option>
                    <option value="Car">Car</option>
                    <option value="Medkit">Medkit</option>
                    <option value="Motorcycle">Motorcycle</option>
                    <option value="Toolkit">Toolkit</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>ASSET NAME</label>
                  <input type="text" name="name" class="form-control" placeholder="Asset Name" required>
                </div>
                <div class="form-group">
                  <label>LOCATION</label>
                  <input type="text" name="location" class="form-control" placeholder="Asset Location" required>
                </div>
                <div class="form-group">
                  <label>CONDITION</label>
                  <input type="text" name="condition" class="form-control" placeholder="Asset Condition Value (10-100)" required>
                </div>
        </div>
    </section>
</div>