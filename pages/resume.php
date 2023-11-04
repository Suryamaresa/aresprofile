<?php
require_once ROOT_DIR . '/pages/partials/header.php';
?>
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume section-show">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0" x-data>
                        <h4 x-text="$store.profile.name"></h4>
                        <p><em x-text="$store.profile.about"></em></p>
                        <p>
                        <ul>
                            <li x-text="$store.profile.address"></li>
                            <li x-text="$store.profile.phone"></li>
                            <li x-text="$store.profile.email"></li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" x-data="experiences">
                    <h3 class="resume-title">Professional Experience</h3>
                    <template x-for="experience in experiences">
                        <div class="resume-item">
                            <h4 x-text="experience.title">Senior graphic design specialist</h4>
                            <h5><span x-text="experience.start_year"></span> <span x-text="experience.end_year ? '' : '- Present'"></span></h5>
                            <p><em x-text="experience.organization"></em></p>
                            <p x-text="experience.description"></p>
                        </div>
                    </template>

                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->
<?php
require_once ROOT_DIR . '/pages/partials/footer.php';
