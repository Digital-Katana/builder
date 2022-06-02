<template>

    <main class="d-flex">

        <sidebar/>

        <section id="flats" class="p-3 w-100">
            <div class="col-12">
                <div class="section-title">
                    <h1 class="text-center">Projects</h1>
                </div>
                <!-- end section-title -->
                <div class="d-flex justify-content-end py-2">
                    <button class="btn"><i class="fas fa-plus"></i> Add New</button>
                </div>
            </div>
            <Table :dataObject="this.projects"/>
        </section>
        <!-- end content-section -->

    </main>


</template>


<script>
import {useForm, usePage} from "@inertiajs/inertia-vue3";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";
import sidebar from "../../Shared/Admin/sidebar";
import Table from "../../Shared/Table";

export default {
    name: 'projects',
    components: {
        sidebar,
        Table
    },
    props: {
        projects: {
            type: Object,
            default: {}
        },
    },
    setup() {
        const form = useForm({
            page: 1,
        })

        function submit() {
            form.post('/admin/projects', {
                preserveScroll: true,
                onSuccess: page => {

                },
                onError: errors => {

                },
            })
        }

        return {form, submit}
    },
}
</script>
