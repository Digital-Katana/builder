<template>
    <main class="d-flex">

        <sidebar/>

        <section class="w-100 p-4">

            <h1>Hello World</h1>

        </section>

    </main>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import sidebar from "../../Shared/Admin/sidebar";

export default {
    name: 'admin',
    components: {
        Link,
        sidebar,
    },
    setup() {
    }
};
</script>
