<div class="reg__wrapper bg-body-2">
        <div class="container">
			<br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="reg_form__wrap">
                        <div class="reg_form__top">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-shapes.png" alt="" class="reg-shapes">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-fig.png" alt="">
                            <h4>Register To <?=ucfirst($this->fungsi->sett_website()->nama_website)?></h4>
                            <p>Already have an account? <a href="<?= base_url() ?>web/login">Login</a></p>
                        </div>

                        <div class="reg__inputs mt-40 flex-column flex-lg-row">
                            <div class="reg__left order-2 order-lg-0">
                                <form action="<?= base_url() ?>auth_member/register" id="login__form" method="post" autocomplete="off">
                                    <div class="custom_input_style__two">
                                        <input type="text" placeholder="Your full name" name="nama_lengkap" id="name" autocomplete="off">
                                    </div>
									<div class="custom_input_style__two mt-3">
                                        <input type="email" placeholder="Email" name="email" id="email" autocomplete="off">
                                    </div>
                                    <div class="custom_input_style__two mt-3">
                                        <input type="text" placeholder="Username" name="username" id="username" autocomplete="off">
                                    </div>
									<div class="custom_input_style__two mt-3">
                                        <input type="text" placeholder="Phone" name="no_hp" id="no_hp" autocomplete="off">
                                    </div>
									<div class="custom_input_style__two mt-3">
										<span class="label-radio">Jenis Kelamin</span><br>
										<div class="d-flex">
											<div class="d-flex mr-3">
												<input class="form-radio" type="radio" name="jk_kelamin">
												<label class="label-form-radio">
													Laki laki
												</label>
											</div>
											<div class="d-flex">
												<input class="form-radio" type="radio" name="jk_kelamin">
												<label class="label-form-radio" >
													Perempuan
												</label>
											</div>
										</div>
                                    </div>
									<div class="custom_input_style__two mt-3">
                                        <textarea name="alamat" id="alamat" placeholder="Alamat" autocomplete="off"></textarea>
									</div>
                                    <div class="custom_input_style__two mt-3">
                                        <input type="password" placeholder="Password" name="password" id="password" autocomplete="off">
                                    </div> <br>

                                    <button type="submit" name="register" class="submit-v2">Register</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
