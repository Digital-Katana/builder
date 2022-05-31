<template>
    <layout>
        <header class="page-header">
            <div class="container">
                <h1>PROJECTS</h1>
                <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6>
                <ul>
                    <li><Link href="/">HOME</Link></li>
                    <li>PROJECTS</li>
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
                            <li v-for="(project, index) in projects" class="one">
                                <figure class="project-box">
                                    <Link :href="'projects/'+project.id">
                                    <img :src="'/storage/images/Projects/' + projectPictures[index]['imageName']" alt="Image">
                                    </Link>
                                    <figcaption>
                                        <h5>{{ project.name }}</h5>
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
    name: "Projects",
    components: {
        Layout,
        Link
    },
    props: {
        projects: {
            type: Array,
            default: []
        },
        projectPictures: {
            type: Array,
            default: []
        },
    }
}
</script>

<style scoped>

</style>
