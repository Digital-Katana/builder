<template>
    <layout>
        <header class="page-header">
            <div class="container">
                <h1>BUILDINGS</h1>
                <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/projects">PROJECTS</a></li>
                    <li>BUILDINGS</li>
                </ul>
            </div>
            <!-- end container -->
        </header>
        <!-- end page-header -->
        <section class="content-section ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="isotope-filter">
                            <li data-filter="*" class="current">ALL</li>
                            <li data-filter=".one">BUILDING</li>
                            <li data-filter=".two">COMMERCIAL</li>
                            <li data-filter=".three">VILLAS</li>
                        </ul>
                    </div>
                    <!-- end col-12 -->
                    <div class="col-12">
                        <ul class="projects">
                            <li v-for="(building, index) in buildings" class="one">
                                <figure class="project-box">
                                    <Link :href="'buildings/'+building.id">
                                        <img :src="'/images/Buildings/' + buildingPictures[index]['imageName']" alt="Image">
                                    </Link>
                                    <figcaption>
                                        <h5>{{ building.name }}</h5>
                                    </figcaption>
                                </figure>
                                <!-- end project-box -->
                            </li>
                            <!-- end li -->
                        </ul>
                    </div>
                    <!-- end col-12 -->
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
    name: "Building",
    components: {
        Layout,
        Link
    },
    props: {
        buildings: {
            type: Array,
            default: []
        },
        buildingPictures: {
            type: Array,
            default: []
        },
    }
}
</script>

<style scoped>

</style>
