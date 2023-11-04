<?php
require_once ROOT_DIR . '/pages/partials/header.php';
?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-show">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2" x-data>

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p x-text="$store.profile.address"></p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a x-bind:href="$store.profile.social_media.linkedin ?? '#'" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            <a x-bind:href="$store.profile.social_media.instagram ?? '#'" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a x-bind:href="$store.profile.social_media.twitter ?? '#'" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a x-bind:href="$store.profile.social_media.facebook ?? '#'" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p x-text="$store.profile.email"></p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p x-text="$store.profile.phone"></p>
                    </div>
                </div>
            </div>

            <div x-data="contact">
                <form method="post" role="form" class="php-email-form mt-4" x-on:submit.prevent="submit">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" x-model="form.name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" x-model="form.email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" x-model="form.subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" x-model="form.message" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <template x-if="loading">
                            <div class="loading d-block">Loading</div>
                        </template>
                        <template x-if="error">
                            <div class="error-message d-block" x-text="message"></div>
                        </template>
                        <template x-if="success">
                            <div class="sent-message d-block">Your message has been sent. Thank you!</div>
                        </template>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </section><!-- End Contact Section -->
<?php
require_once ROOT_DIR . '/pages/partials/footer.php';
