<div class="reg__wrapper bg-body-2">
        <div class="container">
			<br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="reg_form__wrap">
                        <div class="reg_form__top">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-shapes.png" alt="" class="reg-shapes">
                            <img src="<?= base_url() ?>template/web/assets/images/shapes/reg-fig.png" alt="">
                            <h4>Forgot Password <?=ucfirst($this->fungsi->sett_website()->nama_website)?></h4>
                            <p>Don't have an account yet? <a href="<?= base_url() ?>web/register">Register</a></p>
                        </div>

                        <div class="reg__inputs mt-40 flex-column flex-lg-row">
                            <div class="reg__left order-2 order-lg-0">
                                <form action="<?= base_url() ?>lupa_password" id="login__form" method="post">
                                    <div class="custom_input_style__two">
                                        <input type="email" placeholder="Enter your Email" name="email" id="email">

                                        <label for="email">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M12 13.6H4C1.6 13.6 0 12.4 0 9.6V4C0 1.2 1.6 0 4 0H12C14.4 0 16 1.2 16 4V9.6C16 12.4 14.4 13.6 12 13.6Z" fill="currentColor"></path>
                                                <path d="M8.0006 7.49604C7.3286 7.49604 6.64861 7.28804 6.12861 6.86404L3.6246 4.86404C3.3686 4.65604 3.32061 4.28004 3.52861 4.02404C3.73661 3.76804 4.11261 3.72005 4.36861 3.92805L6.8726 5.92805C7.4806 6.41605 8.5126 6.41605 9.1206 5.92805L11.6246 3.92805C11.8806 3.72005 12.2646 3.76004 12.4646 4.02404C12.6726 4.28004 12.6326 4.66404 12.3686 4.86404L9.8646 6.86404C9.3526 7.28804 8.6726 7.49604 8.0006 7.49604Z" fill="currentColor"></path>
                                            </svg>

                                        </label>

                                    </div>
									<br>
                                    <button type="submit" name="forgot_password" class="submit-v2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
