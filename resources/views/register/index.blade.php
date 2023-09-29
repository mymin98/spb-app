<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SPB | Register</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                        <form action="/register" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_nama" type="text" placeholder="pengguna_nama" />
                                                <label for="pengguna_nama">Nama Pegawai</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_noKP" type="number" placeholder="pengguna_noKP" />
                                                <label for="pengguna_noKP">No. KP</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_gelaranJawatan" type="text" placeholder="pengguna_gelaranJawatan" />
                                                <label for="pengguna_gelaranJawatan">Gelaran Jawatan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_bahagianID" type="text" placeholder="pengguna_bahagianID" />
                                                <label for="pengguna_bahagianID">bahagian ID</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_namaBahagian" type="text" placeholder="pengguna_namaBahagian" />
                                                <label for="pengguna_namaBahagian">namaBahagian</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_katalaluan" type="text" placeholder="pengguna_katalaluan" />
                                                <label for="pengguna_katalaluan">katalaluan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_IDPerananRef" type="text" placeholder="pengguna_IDPerananRef" />
                                                <label for="pengguna_IDPerananRef">ID Peranan Ref</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pengguna_staffID" type="text" placeholder="pengguna_staffID" />
                                                <label for="pengguna_staffID">Staff ID</label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="/login">Already have an account? Login!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-info mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
