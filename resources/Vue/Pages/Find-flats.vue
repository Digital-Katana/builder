<template>
    <layout>
        <section class="p-5 mt-0 ontent-section calculator">
            <!-- end bg-image -->
            <div class="container">
                <div class="mt-5 row no-gutters">
                    <div class="col-12 mt-lg-5">
                        <div class="section-title text-left">
                            <h6><h2>Search Flats with Filters Below</h2></h6>
                        </div>
                        <!-- end section-title -->
                    </div>
                    <!-- end col-12 -->
                    <div class="col-lg-10">
                        <form @submit.prevent="submit" class="form">
                            <div class="row">
                                <div v-if="form.errors.sqmTo" class="d-block invalid-feedback">
                                    'm² to' must be more than 'm² From'.
                                </div>
                                <div class="form-group col-md-6">
                                    <p>m² From :</p>
                                    <div class="range-slider">
                                        <input v-model="form.sqmFrom" class="range-slider__range" type="range" min="0" max="300"
                                               step="1">
                                        <span class="range-slider__value">0</span></div>
                                    <!-- edn range-slider -->
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-md-6">
                                    <p>m² to :</p>
                                    <div class="range-slider">
                                        <input v-model="form.sqmTo" class="range-slider__range" type="range"  min="0" max="300"
                                               step="1">
                                        <span class="range-slider__value">300</span></div>
                                    <!-- edn range-slider -->
                                </div>
                                <!-- end form-group -->
                                <div v-if="form.errors.priceTo" class="d-block invalid-feedback">
                                    'price to' must be more than 'price From'.
                                </div>
                                <div class="form-group col-md-6">
                                    <p>price From :</p>
                                    <div class="range-slider">
                                        <input v-model="form.priceFrom" class="range-slider__range" type="range" min="0" max="200000"
                                               step="1">
                                        <span class="range-slider__value">0</span><span> $</span></div>
                                    <!-- edn range-slider -->
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-md-6">
                                    <p>price to :</p>
                                    <div class="range-slider">
                                        <input v-model="form.priceTo" class="range-slider__range" type="range" min="0" max="200000"
                                               step="1">
                                        <span class="range-slider__value">200000</span><span> $</span></div>
                                    <!-- edn range-slider -->
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-lg-4 col-md-6">
                                    <p>Project :</p>
                                    <select v-model="form.projectID" v-on:change="getbuildings($event)">
                                        <option value="all" >All</option>
                                        <option :value="project.id" v-for="(project, index) in projects" > {{ project.name }} </option>
                                    </select>
                                </div>
                                <!-- end form-group -->

                                <div class="form-group col-lg-4 col-md-6">
                                    <p>Building :</p>
                                    <select v-model="form.buildingID" v-on:change="getproject($event)">
                                        <option value="all" >All</option>
                                        <option :value="building.id" v-for="(building, index) in project_buildings" > {{ building.name }} </option>
                                    </select>
                                </div>
                                <!-- end form-group -->

                                <div class="form-group col-lg-4 col-md-6">
                                    <p>Balcony :</p>
                                    <select v-model="form.hasBalcony">
                                        <option value="all" >All</option>
                                        <option value="yes" >Yes</option>
                                        <option value="no" >No</option>
                                    </select>
                                </div>
                                <!-- end form-group -->
                                <div v-if="form.errors.floorTo" class="d-block invalid-feedback">
                                    'Floor to' must be more than 'Floor From'.
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Floor from:</p>
                                    <div class="range-slider">
                                        <input v-model="form.floorFrom" class="range-slider__range" type="range" min="1" max="35"
                                               step="1">
                                        <span class="range-slider__value">1</span></div>
                                    <!-- edn range-slider -->
                                </div>
                                <!-- end form-group -->
                                <!-- end form-group -->
                                <div class="form-group col-md-6">
                                    <p>Floor to:</p>
                                    <div class="range-slider">
                                        <input v-model="form.floorTo" class="range-slider__range" type="range" min="1" max="35"
                                               step="1">
                                        <span class="range-slider__value">35</span></div>
                                    <!-- edn range-slider -->
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-6">
                                    <p>Flat Direction:</p>
                                    <input type="checkbox" v-model="form.directions.north" id="one" checked>
                                    <label class="custom-checkbox" for="one"> North </label>
                                    <input type="checkbox" v-model="form.directions.south" id="two" checked>
                                    <label class="custom-checkbox" for="two"> South </label>
                                    <input type="checkbox" v-model="form.directions.east" id="three" checked>
                                    <label class="custom-checkbox" for="three"> East </label>
                                    <input type="checkbox" v-model="form.directions.west" id="four" checked>
                                    <label class="custom-checkbox" for="four"> West </label>
                                </div>

                                <div class="form-group col-lg-4 col-md-6">
                                    <p>Order by :</p>
                                    <select v-model="form.orderby">
                                        <option value="sqm-asc" >m² asc ↑</option>
                                        <option value="sqm-desc" >m² desc ↓</option>
                                        <option value="pricesqm-asc" >Price m² asc ↑</option>
                                        <option value="pricesqm-desc" >Price m² desc ↓</option>
                                        <option value="price-asc" >Price asc ↑</option>
                                        <option value="price-desc" >Price desc ↓</option>
                                    </select>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-12">
                                    <button type="submit" class="price-box border-0"> Search </button>
                                    <!-- end price-box -->
                                </div>
                                <!-- end form-group -->
                            </div>
                            <!-- end form row -->
                        </form>
                        <!-- end mortgage-form -->
                    </div>
                    <!-- end col-9 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end content-section -->
        <section id="flats" class="content-section">
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

                        <v-pagination v-if="flats.total > flats.per_page" class="mb-3"
                            v-model="form.page"
                            :pages="flats.last_page"
                            :range-size="3"
                            @update:modelValue="submit"
                        />

                        <div class="row inner">
                            <Link :href="'/projects/' + flat.floor.building.project.id + '/buildings/'+ flat.floor.building.id + '/floors/'+ flat.floor.id + '/flats/' + flat.id " v-for="(flat, index) in flats.data" class="col-md-3 pb-5">
                                <div class="recent-news border">
                                    <figure>
                                        <img v-if="flat.Renders.length > 0" :src="'/storage/images/Flats/' + flat.Renders[0]['imageName']" alt="Image">
                                    </figure>
                                    <div class="content">
                                        <!--                                        <small>29 February, 2020</small>-->
                                        <h3>
                                            <h5>Project : {{ flat.floor.building.project.name }}</h5>
                                            <h5>Building : {{ flat.floor.building.name }}</h5>
                                            <h5>Floor : {{ flat.floor.floorNumber }}</h5>
                                            <h5># {{ flat.flatNumber }}</h5>
                                            <h5>{{ flat.sumSQM }} M2</h5>
                                            <h5>m² Price: {{ flat.sqPrice }} $</h5>
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

                        <div v-if="flats.total == 0"  class="justify-content-center row inner">
                            <h3>Sadly no flats avaliable in that range</h3>
                        </div>

                        <v-pagination v-if="flats.total > flats.per_page" class="mt-3"
                            v-model="form.page"
                            :pages="flats.last_page"
                            :range-size="3"
                            @update:modelValue="submit"
                        />
                    </div>
                    <!-- end col-12 -->
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
import { reactive } from 'vue'
import Layout from "../Shared/Layout";
import {Link} from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia'
import {useForm, usePage} from "@inertiajs/inertia-vue3";
import VPagination from "@hennge/vue3-pagination";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";

export default {
    name: "Find-flats",
    components: {
        Layout,
        Link,
        VPagination
    },
    setup() {
        const form = useForm({
            projectID: 'all',
            buildingID: 'all',
            sqmFrom: 0,
            sqmTo: 300,
            priceFrom: 0,
            priceTo: 200000,
            hasBalcony: 'all',
            floorFrom: 0,
            floorTo: 35,
            directions: {
                north: true,
                south: true,
                east: true,
                west: true,
            },
            page: 1,
            orderby: 'sqm-asc'
        })

        function submit() {
            form.post('/findflats',{
                preserveScroll: true,
                onSuccess: page => {
                    var element = document.getElementById("flats");
                    element.scrollIntoView({behavior: "smooth", inline: "nearest"});
                },
                onError: errors => {
                    window.scrollTo({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                },
            })
        }

        return { form, submit }
    },
    data() {
    return {project_buildings: this.buildings,};
    },
    props: {
        flats: {
            type: Object,
            default: {}
        },
        floors:{
            type: Array,
            default: []
        },
        buildings:{
            type: Array,
            default: []
        },
        projects:{
            type: Array,
            default: []
        },
    },
    methods: {
        getbuildings: function(e) {
            this.project_buildings = [];
            if (this.form.projectID === 'all'){
                this.project_buildings = this.buildings;
            } else {
                this.buildings.forEach((building) => {
                    if (building.projectID === this.form.projectID ){
                        this.project_buildings.push(building);
                    }
                })
            }
        },
        getproject: function(e) {
            if (this.form.buildingID !== 'all'){
                this.buildings.find(building =>{
                    if (building.id === this.form.buildingID){
                        this.form.projectID = building.projectID;
                    }
                })
            }
        },
    },
}
</script>

<style scoped>

</style>
