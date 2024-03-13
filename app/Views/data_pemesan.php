<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Data Pemesan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/webview/index">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pemesan</li>
            </ol>
            <h6 class="mx-3 my-2">Mohon untuk memasukkan data pesanan di sini:</h6>
            <form action="/TDB_PEMESAN_CTRL/save" method="post">
                <?= csrf_field(); ?>
                <table class="mx-2">
                    <tr>
                        <th class="px-2 py-2">Nama Perusahaan</th>
                        <td> <input type="text" class="<?= ($validation->hasError('perusahaan')) ?'is-invalid' : ''; ?>"
                                id="perusahaan" name="perusahaan" required></td>
                        <div class="invalid-feedback">
                            <?= $validation->getError('perusahaan');?>
                        </div>
                    </tr>
                    <tr>
                        <th class="px-2 py-2">Kontak Person</th>
                        <td><input type="text" class="" id="contact_person" name="contact_person" required></td>
                    </tr>
                    <tr>
                        <script>
                            function hanyaAngka(evt) {
                                var charCode = (evt.which) ? evt.which : evt.keyCode;
                                if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
                                    evt.preventDefault();
                                    return false;
                                }
                                return true;
                            }
                        </script>
                        <th class="px-2 py-2">No Telepon</th>
                        <td><input type="text" id="no_tlp" name="no_tlp" onkeypress="return hanyaAngka(event)" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="px-2 py-2">Alamat</th>
                        <td><input type="text" class="" id="alamat" name="alamat" required></td>
                    <tr>

                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-success">Submit</button></td>
                    </tr>
                </table>
                    
            </form>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hasil Form</h1>
            <?php if (session()->getFlashdata('pesan')) :?>
            <div class="alert alert-succes" role="alert">
                <?= session()->getFlashdata('pesan');
                endif;?>
            </div>
            <table id="hasil-form" class="table">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Perusahaan</th>
                        <th>Kontak</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($parmesan as $unsur):?>
                    <tr>
                        <td><?= $unsur['id']; ?></td>
                        <td><?= $unsur['perusahaan']; ?></td>
                        <td><?= $unsur['contact_person']; ?></td>
                        <td><?= $unsur['no_tlp'] ?></td>
                        <td><?= $unsur['alamat'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection();?>