<template>
    <layout>
        <header class="page-header">
            <div class="container">
                <h1>NEWS</h1>
                <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li>NEWS</li>
                </ul>
            </div>
            <!-- end container -->
        </header>
        <!-- end page-header -->
        <section class="content-section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="news-box">
                            <figure>
                                <img src="images/slide01.jpg" alt="Image">
                            </figure>
                            <div class="content"><small>29 February, 2020</small>
                                <h3><a href="news-single.html">Result of a challenge I participated in as a guest on The
                                    Futuristic</a></h3>
                                <div class="author"><img src="images/author01.jpg" alt="Image">
                                    <span>by <b>Consto Editor</b></span></div>
                                <!-- end author -->
                            </div>
                            <!-- end content -->
                        </div>
                        <!-- end news-box -->

                        <div class="news-box">
                            <figure>
                                <img src="/images/slide02.jpg" alt="Image">
                            </figure>
                            <div class="content"><small>29 February, 2020</small>
                                <h3><a href="news-single.html">Result of a challenge I participated in as a guest on The
                                    Futuristic</a></h3>
                                <div class="author"><img src="images/author01.jpg" alt="Image">
                                    <span>by <b>Consto Editor</b></span></div>
                                <!-- end author -->
                            </div>
                            <!-- end content -->
                        </div>
                        <!-- end news-box -->

                        <div class="news-box">
                            <figure>
                                <img src="images/slide03.jpg" alt="Image">
                            </figure>
                            <div class="content"><small>29 February, 2020</small>
                                <h3><a href="news-single.html">Result of a challenge I participated in as a guest on The
                                    Futuristic</a></h3>
                                <div class="author"><img src="images/author01.jpg" alt="Image">
                                    <span>by <b>Consto Editor</b></span></div>
                                <!-- end author -->
                            </div>
                            <!-- end content -->
                        </div>
                        <!-- end news-box -->
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">PREV</a></li>
                            <li class="page-item"><a class="page-link" href="#">NEXT</a></li>
                        </ul>
                        <!-- end pagination -->
                    </div>
                    <!-- end col-8 -->
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <div class="widget">
                                <h6 class="widget-title">SEARCH</h6>
                                <form>
                                    <input type="search" placeholder="Type here to search">
                                    <input type="submit" value="Search">
                                </form>
                            </div>
                            <!-- end widget -->
                            <div class="widget">
                                <h6 class="widget-title">CATEGORIES</h6>
                                <ul class="categories">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Construction</a></li>
                                    <li><a href="#">Buildings</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Apartments</a></li>
                                    <li><a href="#">Condos</a></li>
                                    <li><a href="#">Villas & Houses</a></li>
                                </ul>
                            </div>
                            <!-- end widget -->

                            <div class="widget">
                                <h6 class="widget-title">GALLERY</h6>
                                <figure>
                                    <img src="images/slide01.jpg" alt="Image">
                                </figure>
                                <figure>
                                    <img src="images/slide02.jpg" alt="Image">
                                </figure>
                            </div>
                            <!-- end widget -->
                        </aside>
                        <!-- end sidebar -->
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
    name: "News",
    components: {Layout}
}
</script>

<style scoped>

</style>
