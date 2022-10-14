<div class="container mt-5">


  <div class="row">
    <div class="col-6">
      <h3>daftar mahasiswa</h3>


      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item"><?= $mhs['nama']; ?>
          <?php endforeach; ?>
      </ul>


    </div>
  </div>






</div>