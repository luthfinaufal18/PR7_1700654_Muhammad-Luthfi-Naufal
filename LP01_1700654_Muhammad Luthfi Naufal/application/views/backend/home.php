<!-- kursi -->
<div class="col-md-4">
  <h2 style="text-align: center;margin-botton:30px"> Data Lokomotif</h2>
  <hr>
  <table id="table_id" class="table table-striped table-bordered" cells>
    <thead>
      <tr>
        <th> Kode Kereta</th>
        <th> Nama Kereta</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($data_lokomotif as $kursi) {
        // code...
        ?>
        <tr>
          <td><?php echo $kursi->kd_kereta; ?></td>
          <td><?php echo $kursi->nama; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

<div class="col-md-4">
  <h2 style="text-align: center;margin-botton:30px"> Data Gerbong</h2>
  <hr>
  <table id="table_id" class="table table-striped table-bordered" cells>
    <thead>
      <tr>
        <th> Kode Gerbong</th>
        <th> Kode Kereta</th>
        <th> Nama Gerbong</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($data_gerbong as $kursi) {
        // code...
        ?>
        <tr>
          <td><?php echo $kursi->kd_kereta; ?></td>
          <td><?php echo $kursi->kd_gerbong; ?></td>
          <td><?php echo $kursi->nama; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

<div class="col-md-4">
  <h2 style="text-align: center;margin-botton:30px"> Data Kursi</h2>
  <hr>
  <table id="table_id" class="table table-striped table-bordered" cells>
    <thead>
      <tr>
        <th> Kode Kursi</th>
        <th> Kode Gerbong</th>
        <th> Kode Kereta</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($data_kursi as $kursi) {
        // code...
        ?>
        <tr>
          <td><?php echo $kursi->kd_kursi; ?></td>
          <td><?php echo $kursi->kd_gerbong; ?></td>
          <td><?php echo $kursi->kd_kereta; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

<div class="col-md-4">
  <h2 style="text-align: center;margin-botton:30px"> LeftJoin</h2>
  <hr>
  <table id="table_id" class="table table-striped table-bordered" cells>
    <thead>
      <tr>
        <th> Kode Kereta</th>
        <th> Nama Kereta</th>
        <th> Kode Kursi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($datalj as $kursi) {
        // code...
        ?>
        <tr>
          <td><?php echo $kursi->kd_kereta; ?></td>
          <td><?php echo $kursi->nama; ?></td>
          <td><?php echo $kursi->kd_kursi; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

<div class="col-md-4">
  <h2 style="text-align: center;margin-botton:30px"> RightJoin</h2>
  <hr>
  <table id="table_id" class="table table-striped table-bordered" cells>
    <thead>
      <tr>
        <th> Kode Gerbong</th>
        <th> Nama Gerbong</th>
        <th> Kode Kursi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($datarj as $kursi) {
        // code...
        ?>
        <tr>
          <td><?php echo $kursi->kd_gerbong; ?></td>
          <td><?php echo $kursi->nama; ?></td>
          <td><?php echo $kursi->kd_kursi; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
