<template>
    <div class=" d-flex justify-content-center align-items-center min-vh-100 Login">
        <!-- header - navbar -->
        <header>
            <link rel="stylesheet" href="/css/login.css">

        </header>

        <!-- main content -->

        <!-- Section: Design Block -->
        <section class="background-radial-gradient ">
            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            Welcome to the login page!
                        </h1>
                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                            Please Log in before continuing
                        </p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <form class="" @submit.prevent="form.post('/login')" >
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input v-model="form.email" id="email" type="email" placeholder="Email" class="w-100 form-control"  aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input v-model="form.password" id="password" type="password" placeholder="**************" class="w-100 form-control" >
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input v-model="form.remember" type="checkbox" id="remember-me" class="form-check-input" >
                                        <label class="form-check-label" for="remember-me" >Remember me</label>
                                    </div>
                                    <button :disabled="form.processing" class="w-100 btn btn-primary">Sign in</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->


        <!-- footer -->
    </div>
</template>

<script>
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    name: 'login',
    components: {
    },
    setup() {
      const form = useForm({
          email: null,
          password: null,
          remember: false,
      });

      return { form }
    }
};
</script>
