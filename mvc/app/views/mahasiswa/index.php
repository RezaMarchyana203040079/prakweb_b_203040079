<div class="container mt-5">


  <div class="row">
    <div class="col-6">
      <h3>daftar mahasiswa</h3>


      <ul class="list-group bg-warning">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-danger">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>


    </div>
  </div>






</div>