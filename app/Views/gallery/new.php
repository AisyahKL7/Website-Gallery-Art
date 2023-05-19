<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    
    <form action="/gallery" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Galeri</label>
        <br />
        <input type="text" id="nama" placeholder="Masukkan Nama Galeri" name="nama" />
        
        <br />
        <br />
        <label for="tahun">Tahun</label>
        <br />
        <input type="number" min="0" id="tahun" placeholder="Masukkan Tahun" name="tahun" />

        <br /> 
        <br />
        <label for="seniman">Seniman</label>
        <br />
        <input type="text" id="seniman" placeholder="Masukkan Nama Seniman" name="seniman" />

        <br /> 
        <br />
        <label for="deskripsi">Deksripsi</label>
        <br />
        <input type="text" id="deskripsi" placeholder="Masukkan Deskripsi" name="deskripsi" />

        </br>
        </br>
        <label for="example-product-photo">Photo</label>
        <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp" name="photo">

        <br />
        <br />
        <button type="submit">Submit</button>
    </form>
<?= $this->endSection() ?>