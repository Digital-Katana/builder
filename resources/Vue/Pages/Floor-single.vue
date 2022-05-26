<template>
    <layout>
        <header class="page-header">
            <div class="container">
                <h1>Floor: {{ floor.floorNumber }}</h1>
                <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6>
                <ul>
                    <li>
                        <Link href="/">Home</Link>
                    </li>
                    <li>
                        <Link href="/projects">Projects</Link>
                    </li>
                    <li>
                        <Link href="/projects">Projects</Link>
                    </li>
                    <li>
                        <Link :href="'/projects/' + floor.building.project.id">
                            {{ floor.building.project.name }}
                        </Link>
                    </li>
                    <li>
                        <Link :href="'/projects/' + floor.building.project.id + '/buildings/' + floor.building.id">
                            {{ floor.building.name }}
                        </Link>
                    </li>
                    <li>
                        Floor: {{ floor.floorNumber }}
                    </li>
                </ul>
            </div>
            <!-- end container -->
        </header>
        <!-- end page-header -->
        <section class="content-section no-bottom-spacing">
            <div class="swiper-container project-slider">
                <div class="swiper-wrapper">
                    <div v-for="(image, index) in floor.Renders" class="swiper-slide">
                        <figure class="project-box">
                            <Link href="#">
                                <img :src="'/images/Floors/'+image['imageName']" alt="Image">
                            </Link>
                        </figure>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- end project-slider -->
        </section>


        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h6><h2>Flats</h2></h6>
                        </div>
                        <!-- end section-title -->
                    </div>
                    <!-- end col-12 -->
                    <div class="col-lg-12">
                        <div class="row inner">
                            <Link :href="'/projects/' + floor.building.project.id + '/buildings/'+ floor.building.id + '/floors/'+ floor.id + '/flats/' + flat.id " v-for="(flat, index) in floor.flats" class="col-md-3 pb-5">
                                <div class="recent-news border">
                                    <figure>
                                        <img v-if="flat.Renders.length > 0" :src="'/images/Flats/' + flat.Renders[0]['imageName']" alt="Image">
                                    </figure>
                                    <div class="content">
<!--                                        <small>29 February, 2020</small>-->
                                        <h3>
                                            <h5># {{ flat.flatNumber }}</h5>
                                            <h5>{{ flat.sumSQM }} M2</h5>
                                            <h5>Price M2: {{ flat.sqPrice }} $</h5>
                                            <h5>Price: {{ flat.sqPrice * flat.sumSQM }} $</h5>
                                        </h3>
                                    </div>
                                    <!-- end content -->
                                </div>
                                <!-- end recent-news -->
                            </Link>
                            <!-- end col-4 -->
                        </div>
                        <!-- end row inner -->
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end content-section -->

        <!-- end content-section -->
        <section class="content-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3><strong>Life Science Center</strong></h3>
                        <p>At <u>Consto Construction</u> our team specializing in building repurposing, or adaptive
                            reuse,
                            respects the history of a building and believes in letting a structure’s story help
                            determine its
                            future. </p>
                        <p>From vacant historic warehouses to <strong>luxury boutique</strong> hotels and event venues,
                            when it
                            comes to the talent of this group the possibilities are endless. And they aren’t just
                            focused on the
                            end result, they are focused on doing what is right every single step of the way.</p>
                    </div>
                    <!-- end col-5 -->
                    <div class="col-lg-7">
                        <div class="project-specifications">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>LOCATION</td>
                                    <td>United States</td>
                                </tr>
                                <tr>
                                    <td>CLIENT</td>
                                    <td>The University Of North Carolina</td>
                                </tr>
                                <tr>
                                    <td>ENGINEER</td>
                                    <td>EK. Fox & Asscoiates LTD.</td>
                                </tr>
                                <tr>
                                    <td>ARCHITEXT</td>
                                    <td>Southerland Page LLP</td>
                                </tr>
                                <tr>
                                    <td>SCOPE</td>
                                    <td>691 total pieces including spandreal panels</td>
                                </tr>
                                <tr>
                                    <td>COMPLETED</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <td>SIZE</td>
                                    <td>SIZE</td>
                                    <td>158.000 sq feet</td>
                                </tr>
                            </table>
                        </div>
                        <!-- end project-specifications -->
                    </div>
                    <!-- end col-7 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end content-section -->
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-left">
                            <h6>COMMUNITY QUIESTIONS</h6>
                            <h2>We offer commitment at all <br>building projects</h2>
                        </div>
                        <!-- end section-title -->
                    </div>
                    <!-- end col-12 -->
                    <div class="col-lg-8">
                        <div class="accordion" id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne"><a data-toggle="collapse"
                                                                                       href="#collapseOne"
                                                                                       aria-expanded="true"
                                                                                       aria-controls="collapseOne">Dedication
                                    to
                                    client satisfaction <i class="lni lni-arrow-right"></i></a></div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus
                                        terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                        them
                                        accusamus labore sustainable VHS.
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end collapse -->
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo"><a class="collapsed"
                                                                                       data-toggle="collapse"
                                                                                       href="#collapseTwo"
                                                                                       aria-expanded="false"
                                                                                       aria-controls="collapseTwo">
                                    Where can I
                                    find credit and bond ratings for a particular company? <i
                                    class="lni lni-arrow-right"></i></a></div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus
                                        terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                        them
                                        accusamus labore sustainable VHS.
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end collapse -->
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree"><a class="collapsed"
                                                                                         data-toggle="collapse"
                                                                                         href="#collapseThree"
                                                                                         aria-expanded="false"
                                                                                         aria-controls="collapseThree">
                                    Where
                                    can I get access to Custom properties? <i class="lni lni-arrow-right"></i></a></div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus
                                        terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                        them
                                        accusamus labore sustainable VHS.
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end collapse -->
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFour"><a class="collapsed"
                                                                                        data-toggle="collapse"
                                                                                        href="#collapseFour"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapseFour">
                                    Where can
                                    I find the Wall Street Journal - today's and historical <i
                                    class="lni lni-arrow-right"></i></a>
                                </div>
                                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                                     data-parent="#accordion">
                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus
                                        terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                        them
                                        accusamus labore sustainable VHS.
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end collapse -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end accordion -->
                    </div>
                    <!-- end col-8 -->
                    <div class="col-lg-4">
                        <div class="info-box-dark">
                            <h6>INFO BOX</h6>
                            <p>Anim pariatur cliche <strong>reprehenderit</strong>, enim eiusmod high life accusamus
                                terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            </p>
                            <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                bird on
                                it squid single-origin coffee nulla <u>assumenda</u> shoreditch et. </p>
                        </div>
                        <!-- end info-box-dark -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end content-section -->
        <section class="content-section no-spacing white-space-top" data-background="images/section-bg02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cta-box-yellow">
                            <h4>The first thing we build is relationships</h4>
                            <p>To they four in love. Settling you has separate supplied bed. Concluded resembled
                                suspected his
                                resources curiosity joy. Led all cottage met enabled attempt through talking delight.
                                Dare he
                                feet my tell busy. Considered imprudence of he friendship boisterous.</p>
                            <a href="#" class="button">GET AN ESTIMATE</a>
                        </div>
                        <!-- end cta-box-yellow -->
                    </div>
                    <!-- end col-8 -->
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
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Floor-single",
    components: {
        Layout,
        Link
    },
    props: {
        floor: {
            type: Object,
            default: {}
        },
    },
    methods: {

    },
}
</script>

<style scoped>

</style>
