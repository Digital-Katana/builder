<template>

    <div class="d-flex py-2">
        <div class="form-group has-search">
            <input type="text" @keyup="search" class="form-control" placeholder="Search">
        </div>
    </div>

    <table class="table">
        <thead class="table-dark">
        <tr>
            <th @click="sortTable('id')" scope="col">id
                <template v-if="isFilteredBy('id')">
                    <i class="ml-2 fas"
                       :class="{ 'fa-sort-up': this.filteredBY.ordering === 'asc', 'fa-sort-down' : this.filteredBY.ordering === 'desc' }"></i>
                </template>
                <template v-else>
                    <i class="ml-2 fas fa-sort"></i>
                </template>
            </th>
            <th @click="sortTable('name')" scope="col">Name

                <template v-if="isFilteredBy('name')">
                    <i class="ml-2 fas"
                       :class="{ 'fa-sort-up': this.filteredBY.ordering === 'asc', 'fa-sort-down' : this.filteredBY.ordering === 'desc' }"></i>
                </template>
                <template v-else>
                    <i class="ml-2 fas fa-sort"></i>
                </template>
            </th>
            <th scope="col" class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(project, index) in filteredData">
            <th scope="row">{{ project.id }}</th>
            <td>{{ project.name }}</td>
            <td class="text-right">
                <button type="button" class="bg-primary p-2 mr-2 btn btn-action-admin">
                    <i class="far fa-eye"></i>
                </button>
                <button type="button" class="bg-warning p-2 mr-2 btn btn-action-admin">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="bg-danger p-2 btn btn-action-admin">
                    <i class="far fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr v-if="dataObject.total === 0">
            <td colspan="3" class="text-center">No Data</td>
        </tr>
        </tbody>
    </table>

    <div class="col-lg-12">

        <v-pagination v-if="dataObject.total > dataObject.per_page" class="mt-3"
                      v-model="dataObject.page"
                      :pages="dataObject.last_page"
                      :range-size="3"
                      @update:modelValue="submit"
        />
    </div>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import VPagination from "@hennge/vue3-pagination";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";
import {ref} from "vue";

export default {
    name: "Table",
    components: {
        Link,
        VPagination
    },
    props: {
        dataObject: {
            type: Object,
            default: {}
        },
    },
    methods: {
        sortTable(key) {

            if (this.filteredBY.key === key) {
                this.filteredBY.ordering = this.filteredBY.ordering === 'desc' ? 'asc' : 'desc'
            } else {
                this.filteredBY = {
                    key: key,
                    ordering: 'asc'
                }
            }

            // Sorts props
            this.filteredData.sort((a, b) => {

                if (this.filteredBY.ordering === 'asc') {
                    return a[key] > b[key] ? 1 : -1
                } else {
                    return a[key] < b[key] ? 1 : -1
                }
            })


        },
        isFilteredBy(key) {
            return this.filteredBY.key === key
        },
        search(clickEvent) {
            console.log(clickEvent.target.value)
            if (clickEvent.target.value) {
                this.filteredData = this.$props.dataObject.data.filter((e) => {
                    return e.name.indexOf(clickEvent.target.value) !== -1
                })
            } else {
                this.filteredData = this.$props.dataObject.data
            }
        }
    },
    data() {
        return {
            filteredBY: ref({
                key: null,
            }),
            filteredData: this.dataObject.data
        }
    },
}
</script>

<style scoped>


</style>
