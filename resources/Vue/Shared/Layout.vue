<template>
    <Navbar/>
    <div class="container-xxl">
        <slot/>
    </div>
    <Footer/>
</template>

<script>
import Navbar from "./Navbar";
import Footer from "./Footer";

export default {
    name: "Layout",
    components: {Footer, Navbar}
}
</script>

<style scoped>

</style>
