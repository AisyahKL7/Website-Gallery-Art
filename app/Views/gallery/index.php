<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
        <h5 class="mb-4">Halo, <?= session('nama') ?> </h5>
            <div class="row justify-content-between mb-3">
                <div class="col-md-9">
                <h2>Daftar Galeri Indonesia</h2>
                </div>
                <div class="col-md-3">
                <a class="btn btn-primary shadow btn-block" href="/gallery/new"><i class="fas fa-plus"></i> Tambahkan galeri baru</a>
                </div>
                
            </div>
            <table class="table table-hover " id="list-gallery">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Nama</th>
                        <th scope="col ">Tahun</th>
                        <th scope="col ">Seniman</th>
                        <th scope="col ">Deskripsi</th>
                        <th scope="col ">photo</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($gallery2 as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['tahun'] ?></td>
                        <td><?= $item['seniman'] ?></td>
                        <td><?= $item['deskripsi'] ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/gallery/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Apakah Anda yakin?`)">
                                <div class="form-input-group">
                                <input type="hidden" name="_method" value="DELETE" />
                                <div class="input-group-append">
                                <a ttile="Edit Gallery" href="/gallery/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='fas fa-pencil'></i></a>
                                    
                                    <button  ttile="Delete Gallery" class="btn btn-danger text-white" type="submit">
                                        <i class='fas fa-trash'></i>
                                    </button>
                                </div>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>