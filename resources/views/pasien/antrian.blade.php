<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Pasien</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php $kode_urut = "A" . sprintf("%03s", "1"); ?>
    <?php echo $kode_urut ?>

    <br><br><br><br><br>
    <div class="content">
        <div class="container">
            <div class="row text-center">

                <div class="col-md-6 col-lg-3">

                    <!-- Simple card -->
                    <div class="card m-b-20">
                        <img class="card-img-top img-fluid" src="../assets/images/gallery/1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Umum</h4>
                            <p class="card-text">Antrian Untuk Pasien Umum</p>
                            <a href="antrian/umum" class="btn btn-primary pull-right">Button</a>
                        </div>
                    </div>

                </div><!-- end col -->

                <div class="col-md-6 col-lg-3">

                    <!-- Simple card -->
                    <div class="card m-b-20">
                        <img class="card-img-top img-fluid" src="../assets/images/gallery/1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">BPJS</h4>
                            <p class="card-text">Antrian Untuk Pasien BPJS</p>
                            <a href="antrian/bpjs" class="btn btn-primary pull-right">Button</a>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
</body>
</html>