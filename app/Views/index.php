<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">
            <!-- START ISI KONTEN KOTAK KOTAK -->
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Homepage</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Input Data Pemesan</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/TDB_PEMESAN_CTRL/index">Klik di
                                    sini</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">2</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">3</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END KOTAK KOTAK -->
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-4 mx-2 px-3">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Data Dashboard
                </div>

                <!-- YANG DIKOMEN ADALAH FUNGSI UNTUK SEARCH -->
                <!-- <table>
                    <thead>
                        <tr class="text-center">
                            <th>No.PF</th>
                            <th>Nama Benda</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <script>
                                function hanyaAngka(evt) {
                                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                                    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode >
                                            57)) {
                                        evt.preventDefault();
                                        return false;
                                    }
                                    return true;
                                }
                            </script>
                        </tr>
                        <div>

                            <tr>
                                <td class="text-center"><input type="number" name="No.PF"
                                        onkeypress="return hanyaAngka(event)">
                                </td>
                                <td class="text-center"><input type="text" name="Nama Benda"></td>
                                <td class="text-center"><input type="number" name="Jumlah"
                                        onkeypress="return hanyaAngka(event)">
                                </td>
                                <td class="text-center"><input class="" type="checkbox" name="Status"></td>
                            </tr>
                        </div>
                    </tbody>
                </table> -->
                <!-- Start DEMO HTML (Use the following code into your project)-->
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>No.PF</th>
                            <th>Nama Benda</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>08938183130</td>
                            <td>Ladle 8</td>
                            <td>2</td>
                            <td>NG</td>
                        </tr>
                    </tbody>
                    <!-- SILAHKAN TAMMBAHKAN FOOTER TABEL JIKA DIBUTUHKAN -->
                    <!-- <tfoot>
                        <tr class="text-center">
                            <th>No.PF</th>
                            <th>Nama Benda</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </tfoot> -->
                </table>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection();?>