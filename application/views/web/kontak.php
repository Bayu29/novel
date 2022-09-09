<div class="contact_wrapper__style bg-body-2 section_gap_y_top__2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 text-center">
                    <h2 class="contact__title"><span>Hi,🖐 We are</span> <?= ucfirst($this->fungsi->sett_website()->nama_website) ?></h2>
                    <p class="disc-text-2 pt-2">We’re here to help and answer any question you might have.We look forward to hearing from you 🙂</p>
                </div>
            </div>
            
            <div class="row pt-50 gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="contact_card__style">
                        <div class="contact__icon">
                            <img src="<?= base_url() ?>template/web/assets/images/icons/3d-phone.svg" alt="">
                        </div>
                        <div class="contact__disc">
                            <h5>Telpon : <a href="tel:012345678910"><?= ucfirst($this->fungsi->sett_website()->telpon) ?></a> <br>
							Whatsapp : <a href="tel:012345678910"><?= ucfirst($this->fungsi->sett_website()->telpon) ?></a></h5>
                            
                                <a href="tel:012345678910" class="btn-pill-outlined">Call Us
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6.49988H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6 1.49988L11 6.49988L6 11.4999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="contact_card__style">
                        <div class="contact__icon">
                            <img src="<?= base_url() ?>template/web/assets/images/icons/3d-support.svg" alt="">
                        </div>
                        <div class="contact__disc">
                            <h5>Online and always available, we’re
                                here to answer your questions 24/7</h5>
                            
                                <a href="tel:012345678910" class="btn-pill-outlined">Contact Support
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6.49988H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6 1.49988L11 6.49988L6 11.4999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_card__style">
                        <div class="contact__icon">
                            <img src="<?= base_url() ?>template/web/assets/images/icons/3d-mail.svg" alt="">
                        </div>
                        <div class="contact__disc">
                            <h5>Email us, 24/7, we’re alweys <br>
                                responding</h5>
                            
                                <a href="#" class="btn-pill-outlined">Contact Support
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6.49988H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6 1.49988L11 6.49988L6 11.4999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact_form__wrap section_gap_y_top__3 section_gap_y_bottom__3"> 
                <div class="row">
                    <div class="col-lg-4 h-100 d-none d-lg-block">
                        <img src="<?= base_url() ?>template/web/assets/images/contact-form-img.png" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="contact_form__outer">
                            <form action="#" id="contact__form">
                                <div class="row">
                                    <div class="col-lg-6 pt-20">
                                        <div class="custom_input__style">
                                            <label for="name">Your Name</label>
                                            <input type="text" id="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pt-20">
                                        <div class="custom_input__style">
                                            <label for="name">Your Email</label>
                                            <input type="email" id="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pt-20">
                                        <div class="custom_input__style">
                                            <label for="massege">Message</label>
                                            <textarea id="massege" cols="30" rows="5" placeholder="Write a Message"></textarea>
                                        </div>
                                    </div>
    
                                    <div class="condition">
                                    </div>

                                   <div class="submit__btn">
                                    <button type="submit" class="submit-v1">Send Message</button>
                                   </div>
    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
