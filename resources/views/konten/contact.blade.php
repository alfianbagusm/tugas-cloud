<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <!-- <p>Hubungi Kami Di </p> -->
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Basecamp :</h4>
                        <p>KH COFFEE<br>
                        Jl. Delima RT 03 / RW 02 <br>
                        Kel. Perbon, Kec. Tuban, Kab. Jawa Timur <br>
                    </p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email :</h4>
                        <p>kudahitam19072012@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Phone :</h4>
                        <p>085731870515</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.080958552978!2d112.0377858147726!3d-6.880904595027724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77a2b63dc8d62d%3A0x856c77005645aba9!2sKH%20Coffee%20%26%20Juice!5e0!3m2!1sen!2sid!4v1642137718651!5m2!1sen!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" data-rule="required"
                            data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    
    </div>
</section><!-- End Contact Section -->
