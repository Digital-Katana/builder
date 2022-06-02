<template>

    <main class="d-flex">

        <sidebar/>

        <section id="flats" class="w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h6><h2>Projects</h2></h6>
                        </div>
                        <!-- end section-title -->
                        <div class="d-flex justify-content-end py-2">
                            <button class="btn"> <i class="fas fa-plus"></i> Add New </button>
                        </div>
                    </div>
                    <!-- end col-12 -->
                    <div class="col-lg-12">

                        <v-pagination v-if="projects.total > projects.per_page" class="mb-3"
                                      v-model="form.page"
                                      :pages="projects.last_page"
                                      :range-size="3"
                                      @update:modelValue="submit"
                        />

                        <table class="table">
                            <thead class="table-dark">
                            <tr>
                                <th @click="sortTable(id)" scope="col">id</th>
                                <th @click="sortTable(Name)" scope="col">Name</th>
                                <th @click="sortTable(Actions)" scope="col" class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(project, index) in projects.data" >
                                <th scope="row">{{ project.id }}</th>
                                <td>{{ project.name }}</td>
                                <td class="text-right">
                                    <button type="button" class="bg-primary p-2 mr-2 btn btn-action-admin" >
                                        <i class="far fa-eye"></i>
                                    </button>
                                    <button type="button" class="bg-warning p-2 mr-2 btn btn-action-admin" >
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="bg-danger p-2 btn btn-action-admin" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="projects.total === 0">
                                <td colspan="3" class="text-center">No Data</td>
                            </tr>
                            </tbody>
                        </table>

                        <v-pagination v-if="projects.total > projects.per_page" class="mt-3"
                                      v-model="projects.page"
                                      :pages="projects.last_page"
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

    </main>


</template>


<script>
import {Link} from "@inertiajs/inertia-vue3";
import {useForm, usePage} from "@inertiajs/inertia-vue3";
import VPagination from "@hennge/vue3-pagination";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";
import sidebar from "../../Shared/Admin/sidebar";

export default {
    name: 'projects',
    components: {
        Link,
        VPagination,
        sidebar
    },
    props: {
        projects:{
            type: Object,
            default: {}
        },
    },
    setup() {
        const form = useForm({
            page: 1,
        })

        function submit() {
            form.post('/admin/projects',{
                preserveScroll: true,
                onSuccess: page => {

                },
                onError: errors => {

                },
            })
        }

        return { form, submit }
    },
}
</script>
