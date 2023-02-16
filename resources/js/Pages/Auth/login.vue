<template>
    <Head>
        <title>
            Login
        </title>
    </Head>
    <Guest>
        <div class="container mt-4">

            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">

                            <form @submit.prevent="loginForm.post(route('login'))">
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" v-model="loginForm.email"
                                               autocomplete="email">
                                        <div v-if="errors.email" class="text-danger">
                                            {{ errors.email }}
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" v-model="loginForm.password"
                                               autocomplete="password">
                                        <div v-if="errors.password" class="text-danger">
                                            {{ errors.password }}
                                        </div>

                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <Link :href="route('clinics.index')" class="btn btn-secondary btn-outline btn">Back</Link>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </Guest>
</template>

<script>
import Guest from "../Layouts/Guest.vue";
import {Link,Head,useForm} from "@inertiajs/vue3";

export default {
    components: {Guest,Head,Link,useForm},
    props:{
        errors:Object
    },
    setup(){
      const loginForm = useForm({
          email:'',
          password:'',
          remember:false
      })
        return{
          loginForm
        }
    }
}
</script>
