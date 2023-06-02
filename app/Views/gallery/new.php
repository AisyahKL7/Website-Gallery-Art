<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Tambah Gallery</h5>
                <form action="/gallery" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Galeri" name="nama" required/>
                    </div>
                    <div class="form-group">
                        <label for="nama">Tahun</label>
                        <input type="number" class="form-control"  min="0" id="tahun" placeholder="Masukkan Tahun" name="tahun" required/>
                    </div>
                    <div class="form-group">
                        <label for="nama">Seniman</label>
                        <input type="text" class="form-control" id="seniman" placeholder="Masukkan Nama Seniman" name="seniman" required/>
                    </div>
                    <div class="form-group">
                        <label for="nama">Foto</label>
                        <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp" name="photo" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5" placeholder="Masukkan Deskripsi"></textarea>
                    </div>
                    <a href="/gallery" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>