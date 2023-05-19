<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="row m-2">
    <h1 class="mb-1">Daftar Galeri</h1>
</div>
<div class="container">
    <?php
        if(isset($gallery2) && !empty($gallery2)) : 
            foreach($gallery2 as $row) :
    ?>
    <div class="row mb-4">
        <div class="col-12">
        <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="<?=base_url('photos/')?><?= $row['photo']; ?>" alt="Card image cap">
            <div class="card-body">
                    <h5 class="card-title text-center"><?= $row['nama'] ?></h5>
                <div class="row justify-content-center">
                    <button  class="btn btn-primary detailbutton btn-sm" data-tahun="<?= "(".$row['tahun'].")"; ?>" data-seniman="<?= $row['seniman']?>" data-img="<?=base_url('photos/')?><?= $row['photo'] ? $row['photo'] : ''; ?>" data-title="<?= $row['nama'] ?>" data-desc="<?= $row['deskripsi'] ? $row['deskripsi'] : '' ?>"> <i class="fas fa-eye"></i> Detail</button>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <?php endforeach;
    endif; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showtitle">Modal title</h5>
      </div>
      <div class="modal-body">
        <img id="showimg" src=""  width="150" height="200">
        <br>
        <b><p id="showseniman"></p></b>
        <b class="mt-0"><p id="showtahun" class="mt-0"></p></b>
        <br>
        <p id="showdesc"></p>
      </div>
      <div class="modal-footer">
        <button type="button" id="closemodal" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection()?>

