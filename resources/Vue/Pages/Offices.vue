<template>
    <layout>
        <header class="page-header">
            <div class="container">
                <h1>OFFICES</h1>
                <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li>OFFICES</li>
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
                            <figure><img src="images/icon-paris.png" alt="Image"></figure>
                            <h6>Paris Office</h6>
                            <p>228 Cardigan Road, Leeds<br>
                                Paris France</p>

                        </div>
                        <!-- end contact-box -->
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <figure><img src="images/icon-newyork.png" alt="Image"></figure>
                            <h6>New York Office</h6>
                            <p>228 Cardigan Road, Leeds<br>
                                New York USA</p>
                        </div>
                        <!-- end contact-box -->
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <figure><img src="images/icon-roma.png" alt="Image"></figure>
                            <h6>Rome Office</h6>
                            <p>228 Cardigan Road, Leeds<br>
                                Rome Italy</p>
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
    </layout>
</template>

<script>
import Layout from "../Shared/Layout";

export default {
    name: "Offices",
    components: {Layout}
}
</script>

<style scoped>

</style>
