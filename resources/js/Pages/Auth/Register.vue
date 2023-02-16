<template>
    <Head>
        <title>
            Create
        </title>
    </Head>
    <guest>

        <div class="container mt-4">

            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Create
                        </div>
                        <div class="card-body">

                            <form @submit.prevent="form.post(route('register.store'))">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" v-model="form.name"
                                               autocomplete="name" autofocus>
                                        <div v-if="errors.name" class="text-danger">
                                            {{errors.name}}
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" v-model="form.email"
                                               autocomplete="email">
                                        <div v-if="errors.email" class="text-danger">
                                            {{errors.email}}
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">password</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" v-model="form.password"
                                               autocomplete="new-password" required name="password">
                                        <div v-if="errors.password" class="text-danger">
                                            {{errors.password}}
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input id="password_confirmation"
                                               type="password"
                                               class="form-control"
                                               v-model="form.password_confirmation"
                                               required
                                               autocomplete="new-password">

                                    </div>


                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Image</label>

                                    <div class="col-md-6">
                                        <input id="image" type="file" class="form-control"
                                               @change="form.image = $event.target.files[0]">
                                        <div v-if="errors.image" class="text-danger">
                                            {{errors.image}}
                                        </div>

                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-info">Create</button>
                                    <Link :href="route('clinics.index')" class="btn btn-secondary btn">Back</Link>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </guest>
</template>

<script>
import Guest from "../Layouts/Guest.vue";
import {Link, useForm,Head} from "@inertiajs/vue3";
import Master from "../Layouts/master.vue";

export default {
    components: {Master, Guest,Link,Head},
    props: {
        errors:Object
    },
    setup(){
        const form = useForm({
            name: '',
            email: '',
            image:'',
            password: '',
            password_confirmation: '',
        })
        return{
            form
        }
    }
}
</script>
