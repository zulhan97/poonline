<!-- edited by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Tambah Vendor      </title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Vendor Baru</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form role="form" action="<?php echo base_url(). 'Vendors/add_vendor'; ?>" method="post">
              <div class="card-body">
                <a class="btn btn-success" style="margin-bottom:20pt "; href="<?php echo base_url().'Vendors/import' ?>" class="nav-link">
                    <i class="fas fa-file-import "></i>  Import
                  </a>
                <div class="form-group">    
                    <label>Vendor Name</label>
                    <input type="text" class="form-control" name="vendor_name" placeholder="please insert the vendor name correctly" required> 
                </div>
                <div class="form-group">    
                    <label>PIC Vendor</label>
                    <input type="text" class="form-control" name="pic" placeholder="please insert the PIC Vendor correctly" required>
                </div>
                <div class="form-group">    
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="please insert the email correctly" required>
                </div>
                <div class="form-group">    
                    <label>Contact Number</label>
                    <input type="text" class="form-control" name="contact" placeholder="please insert the contact number correctly" required>
                </div>
                <div class="form-group">    
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" placeholder="please insert the address correctly" required>
                </div>
                <div class="form-group">    
                  <label>Category</label>
                    <select name="category" id="" class="custom-select">
                      <option value="">Public Training</option>
                      <option value="">Inhouse Training</option>
                    </select>
                </div>
              </div>
              <div class="card-footer clearfix">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-info float-right" style="background-color:#273b7a; border-color:#273b7a";>Save</button>
                <button type="button" class="btn btn-default float-right" onClick="javascript:history.back()">Back</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('template/footer'); ?>

</body>
</html>