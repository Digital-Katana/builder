<template>
    <div class="first-transition"></div>
    <!-- end first-transition -->
    <div class="page-transition"></div>
    <!-- end page-transition -->
    <div class="search-box">
        <div class="inner">
            <form>
                <input type="search" placeholder="Tyhe here to search">
                <input type="submit" value="SEARCH">
            </form>
        </div>
    </div>
    <!-- end search-box -->
    <aside class="side-widget">
        <div class="inner">
            <div class="logo"><a href="index.html"><img src="/images/logo.png" alt="Image"></a></div>
            <!-- end logo -->
            <div class="hide-mobile">
                <p>Extremity direction existence as dashwoods do up. Securing <u>marianne led</u> welcomed offended but
                    offering six raptures. </p>
                <figure class="gallery"><img src="images/slide02.jpg" alt="Image"><img src="images/slide03.jpg"
                                                                                       alt="Image"></figure>
                <h6 class="widget-title">ADDRESS</h6>
                <address class="address">
                    <p>228 Cardigan Road, Leeds<br>
                        Geneva Switzerland</p>
                    <p>+1 (850) 344 0 66 #20</p>
                </address>
                <h6 class="widget-title">FOLLOW US</h6>
                <ul class="social-media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            <!-- end hide-mobile -->
            <div class="show-mobile">
                <div class="languages">
                    <ul>
                        <li><a href="#">en</a></li>
                        <li><a href="#">ru</a></li>
                    </ul>
                </div>
                <!-- end languages -->
                <div class="site-menu">
                    <ul>
                        <li><a href="#">Consto</a><i class="lni lni-chevron-down-circle"></i>
                            <ul>
                                <li><a href="/about-company">About Company</a></li>
                                <li><a href="/core-values">Core Values</a></li>
                                <li><a href="/leadership">Leadership</a></li>
                                <li><a href="/our-history">Our History</a></li>
                                <li><a href="/offices">Offices</a></li>
                                <li><a href="/certificates">Certificates</a></li>
                            </ul>
                        </li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/projects">Projects</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- end site-menu -->
            </div>
            <!-- end show-mobile -->
            <small>© 2020 Consto | Industrial Construction Company</small></div>
        <!-- end inner -->
    </aside>
    <!-- end side-widget -->
    <nav class="navbar">
        <div class="container">
            <div class="logo"><a href="index.html"><img src="/images/logo.png" alt="Image"></a></div>
            <!-- end logo -->
            <div class="languages">
                <ul>
                    <li><a href="#">en</a></li>
                    <li><a href="#">ru</a></li>
                </ul>
            </div>
            <!-- end languages -->
            <div class="site-menu">
                <ul>
                    <li><a href="#">Consto</a>
                        <ul>
                            <li><a href="/about-company">About Company</a></li>
                            <li><a href="/core-values">Core Values</a></li>
                            <li><a href="/leadership">Leadership</a></li>
                            <li><a href="/our-history">Our History</a></li>
                            <li><a href="/offices">Offices</a></li>
                            <li><a href="/certificates">Certificates</a></li>
                        </ul>
                    </li>
                    <li><NavLink :active="$page.component === 'services'" href="/services">Services</NavLink></li>
                    <li><NavLink :active="$page.component === 'projects'" href="/projects">Projects</NavLink></li>
                    <li><NavLink :active="$page.component === 'news'" href="/news">News</NavLink></li>
                    <li><NavLink :active="$page.component === 'contact'" href="/contact">Contact</NavLink></li>
                </ul>
            </div>
            <!-- end site-menu -->
            <div class="search"><i class="lni lni-search-alt"></i></div>
            <!-- end search -->

            <div class="hamburger">
                <div id="hamburger"><span></span> <span></span> <span></span></div>
                <div id="cross"><span></span> <span></span></div>
            </div>
            <!-- end hamburger -->
            <!-- end hamburher -->
            <a href="#sales-specialist-form" class="navbar-button" data-fancybox><i class="lni lni-mobile"></i> <span>SALES SPECIALIST</span></a>
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
</template>
<script>
import {Link} from '@inertiajs/inertia-vue3';
import NavLink from "./NavLink";

export default {
    name: 'Navbar',
    components: {
        NavLink,
        Link,
    },
}
</script>
