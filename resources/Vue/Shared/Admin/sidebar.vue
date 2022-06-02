<template>

    <!-- header - navbar -->

    <!--Sidebar-->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light vh-100" style="width: 280px;">
        <h2 class="mb-3">Admin Hub</h2>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <Link class="nav-link link-dark mb-1" :class="{'bg-primary text-light': $page.component === 'Admin/admin' }" href="/admin">
                    <i class="fa-solid fa-table-columns"></i>
                    Dashboard
                </Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link link-dark mb-1" :class="{'bg-primary text-light': $page.component === 'Admin/projects' }" href="/admin/projects">
                    <i class="fa-solid fa-city"></i>
                    Projects
                </Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link link-dark mb-1" :class="{'bg-primary text-light': $page.component === 'Admin/buildings' }" href="/admin/buildings">
                    <i class="fa-solid fa-building"></i>
                    Buildings
                </Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link link-dark mb-1" :class="{'bg-primary text-light': $page.component === 'Admin/floors' }" href="/admin/floors">
                    <i class="fa-solid fa-arrow-right-to-city"></i>
                    Floors
                </Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link link-dark mb-1" :class="{'bg-primary text-light': $page.component === 'Admin/flats' }" href="/admin/flats">
                    <i class="fa-solid fa-house"></i>
                    Flats
                </Link>
            </li>
        </ul>
        <div class="dropdown">
            <Link class="text-danger" href="/logout">Sign out</Link>
        </div>
    </div>

</template>


<script>
import {Link,Head} from "@inertiajs/inertia-vue3";

export default {
    name: 'sidebar',
    components: {
        Link,
        Head
    }
}
</script>
