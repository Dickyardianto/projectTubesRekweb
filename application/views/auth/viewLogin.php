<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Masukkan alamat email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <a href="index.html" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa password ?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url() ?>auth/registrasi">Buat akun!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>