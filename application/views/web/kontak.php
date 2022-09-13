<div class="contact_wrapper__style bg-body-2 section_gap_y_top__2">
        <div class="container">
			<br>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 text-center">
                    <h2 class="contact__title"><span>Hi,🖐 We are</span> <?= ucfirst($this->fungsi->sett_website()->nama_website) ?></h2>
                    <p class="disc-text-2 pt-2">We’re here to help and answer any question you might have.We look forward to hearing from you 🙂</p>
                </div>
            </div>
            <div class="contact_form__wrap section_gap_y_top__3 section_gap_y_bottom__3"> 
                <div class="row">
                    <div class=" offset-lg-1 col-lg-4 h-100 d-none d-lg-block">
						<center>
							<img src="<?= base_url() ?>template/web/assets/images/contact-form-img.png" alt="" style="width: 80%;border-radius:5%">
						</center>
                        
                    </div>
                    <div class="col-lg-6">
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
