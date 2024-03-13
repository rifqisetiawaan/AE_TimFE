<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">
            <!--MULAI ISI KONTEN DISINI-->

            <div class="container-fluid">
                <h1 class="mt-4">Pengecoran Logam</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/webview/index">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pengecoran Logam</li>
                </ol>
                <!--MULAI DARI SINI-->
                <div class="card mb-4">
                    <div class="card-body">
                        This page is an example of using the light side navigation option. By appending the
                        <code>.sb-sidenav-light</code>
                        class to the
                        <code>.sb-sidenav</code>
                        class, the side navigation will take on a light color scheme. The
                        <code>.sb-sidenav-dark</code>
                        is also available for a darker option.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</html>
<?= $this->endSection();?>