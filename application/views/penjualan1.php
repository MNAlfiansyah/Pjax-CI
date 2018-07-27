<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>
<?php $this->load->view('samping'); ?>

<!-- Content -->
  <section id="main" class="col-md-9 ml-sm-auto col-lg-10 pt-1 px-3" id="content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Penjualan</h1>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
       <thead>
        <tr>
          <th>Nama</th>
          <th>Gender</th>
          <th>Harga</th>
          <th>Jumlah</th>
        </tr>
       </thead>
          <tbody>
            <tr>
              <td>Acer Predator</td>
              <td>L/P</td>
              <td>11000000</td>
              <td>4</td>
            </tr>
            <tr>
              <td>Apple Mouse</td>
              <td>L/P</td>
              <td>350000</td>
              <td>10</td>
            </tr>
            <tr>
              <td>Asus Laptop</td>
              <td>L/P</td>
              <td>5000000</td>
              <td>15</td>
            </tr>
          </tbody>
      </table>
    </div>
  </section>
<?php $this->load->view('footer'); ?>