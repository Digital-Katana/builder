<template>
    <layout>
        <header class="page-header">
            <div class="container">
                <h1>CONTACT</h1>
                <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li>CONTACT</li>
                </ul>
            </div>
            <!-- end container -->
        </header>
        <!-- end page-header -->
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <figure><img src="images/icon-global.png" alt="Image"></figure>
                            <h6>Head Office</h6>
                            <p>228 Cardigan Road, Leeds<br>
                                Geneva Switzerland</p>

                        </div>
                        <!-- end contact-box -->
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <figure><img src="images/icon-phone.png" alt="Image"></figure>
                            <h6>Phones</h6>
                            <p>+1 (850) 344 0 66 <br>Dial #20</p>
                        </div>
                        <!-- end contact-box -->
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <figure><img src="images/icon-email.png" alt="Image"></figure>
                            <h6>Write Us</h6>
                            <p><a href="#">info@consto.co.uk</a><br>for all purpose</p>
                        </div>
                        <!-- end contact-box -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end content-section -->
        <section class="content-section no-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title text-left">
                            <h6>OUR HISTORY</h6>
                            <h2>Quality & Passion With<br>
                                Our Services</h2>
                        </div>
                        <!-- end section-title -->
                    </div>
                    <!-- end col-6 -->
                    <div class="col-lg-6">
                        <form class="contact-form">
                            <div class="form-group">
                                <span>Full Name</span>
                                <input type="text">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <span>Your E-mail</span>
                                <input type="text">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <span>Subject</span>
                                <input type="text">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <span>Your Message</span>
                                <textarea></textarea>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="submit" value="Send Now">
                            </div>
                            <!-- end form-group -->
                        </form>
                        <!-- end contact-form -->
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end content-section -->
        <section class="content-section no-spacing">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2280.946732017157!2d6.139779638725402!3d46.19997236441594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c652ab04e9aaf%3A0xf17a439abec4708d!2sSkatepark%20of%20Plainpalais!5e0!3m2!1str!2str!4v1592672296075!5m2!1str!2str"
                    frameborder="0" class="google-maps" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
        <!-- end content-section -->
    </layout>
</template>

<script>
import Layout from "../Shared/Layout";

export default {
    name: "Contact",
    components: {Layout}
}
</script>

<style scoped>

</style>
