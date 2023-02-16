<template>
    <Head>
        <title>Create</title>
    </Head>

    <master>

        <!--        <div class="container mt-4">-->

        <!--            <div class="row justify-content-center">-->

        <!--                <div class="col-md-8">-->
        <!--                    <div class="card">-->

        <!--                        <div class="card-body">-->

        <!--                            <form @submit.prevent="form.post(route('clinics.store'))">-->
        <!--                                <div class="row mb-3">-->
        <!--                                    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>-->

        <!--                                    <div class="col-md-6">-->
        <!--                                        <input id="name" type="text" class="form-control" v-model="form.name"-->
        <!--                                               autocomplete="name" autofocus>-->
        <!--                                        <div v-if="errors.name" class="text-danger">-->
        <!--                                            {{errors.name}}-->
        <!--                                        </div>-->
        <!--                                    </div>-->

        <!--                                </div>-->
        <!--                                <div class="row mb-3">-->
        <!--                                    <label for="phone" class="col-md-4 col-form-label text-md-end">phone</label>-->

        <!--                                    <div class="col-md-6">-->
        <!--                                        <input id="phone" type="text" class="form-control" v-model="form.phone"-->
        <!--                                               autocomplete="phone">-->
        <!--                                        <div v-if="errors.phone" class="text-danger">-->
        <!--                                            {{errors.phone}}-->
        <!--                                        </div>-->

        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row mb-3">-->
        <!--                                    <label for="city" class="col-md-4 col-form-label text-md-end">city</label>-->

        <!--                                    <div class="col-md-6">-->
        <!--                                        <input id="city" type="text" class="form-control" v-model="form.city"-->
        <!--                                               autocomplete="city">-->
        <!--                                        <div v-if="errors.city" class="text-danger">-->
        <!--                                            {{errors.city}}-->
        <!--                                        </div>-->

        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row mb-3">-->
        <!--                                    <label for="address" class="col-md-4 col-form-label text-md-end">address</label>-->

        <!--                                    <div class="col-md-6">-->
        <!--                                        <input id="address" type="text" class="form-control" v-model="form.address"-->
        <!--                                               autocomplete="address">-->
        <!--                                        <div v-if="errors.address" class="text-danger">-->
        <!--                                            {{errors.address}}-->
        <!--                                        </div>-->

        <!--                                    </div>-->
        <!--                                </div>-->

        <!--                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">-->
        <!--                                    <button type="submit" :disabled="form.processing" class="btn btn-primary">Create</button>-->
        <!--                                    <Link :href="route('clinics.index')" class="btn btn-secondary btn-outline btn">Back</Link>-->
        <!--                                </div>-->
        <!--                            </form>-->

        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <form @submit.prevent="submit">-->
        <!--            <input type="text" v-model="form.name" />-->
        <!--            <input type="file" @input="form.avatar = $event.target.files[0]" />-->
        <!--            <progress v-if="form.progress" :value="form.progress.percentage" max="100">-->
        <!--                {{ form.progress.percentage }}%-->
        <!--            </progress>-->
        <!--            <button type="submit">Submit</button>-->
        <!--        </form>-->
        <template v-slot:header>
            <div class="breadcrumb mt-5">
                <Link :href="route('home')" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</Link>
                <Link :href="route('clinics.index')" class="breadcrumb-item">Clinics</Link>
                <span class="breadcrumb-item active">Create</span>
            </div>
        </template>
        <form @submit.prevent="form.post(route('clinics.store'))" enctype="multipart/form-data">
            <fieldset>
                <legend class="text-uppercase font-size-sm font-weight-bold mb-5">Create</legend>

                <div class="form-group row ">
                    <div class="col-lg-10">
                        <div class="row">
                            <label class="col-form-label col-lg-1">Name</label>
                            <div class="col-4 mr-5 form-group-feedback-right">
                                <input type="text" class="form-control" :class="{'border-danger':errors.name}" placeholder="Name" v-model="form.name">
                                <div v-if="errors.name" class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>
                            <label class="col-form-label col-lg-1">Username</label>
                            <div class="col-4 form-group-feedback-right">
                                <input type="text" class="form-control" :class="{'border-danger':errors.username}" placeholder="Username" v-model="form.username">
                                <div v-if="errors.username" class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-10">
                        <div class="row">
                            <label class="col-form-label col-lg-1">E-mail</label>
                            <div class="col-4 mr-5 form-group-feedback-right">
                                <input type="email" autocomplete="email" class="form-control" :class="{'border-danger':errors.email}" placeholder="E-mail"
                                       v-model="form.email">
                                <div v-if="errors.email" class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>
                            <label class="col-form-label col-lg-1">City</label>
                            <div class="col-4 form-group-feedback-right">
                                <input type="text" class="form-control" :class="{'border-danger':errors.city}" placeholder="City" v-model="form.city">
                                <div v-if="errors.city" class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-10">
                        <div class="row">
                            <label class="col-form-label col-lg-1">Password</label>
                            <div class="col-4 mr-5 form-group-feedback-right">
                                <input type="password" class="form-control" :class="{'border-danger':errors.password}" placeholder="Password"
                                       v-model="form.password">
                                <div v-if="errors.password" class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>
                            <label class="col-form-label col-lg-1">Address</label>
                            <div class="col-4 form-group-feedback-right">
                                <input type="text" class="form-control" :class="{'border-danger':errors.address}" placeholder="Full Address"
                                       v-model="form.address">
                                <div v-if="errors.address" class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-10">
                        <div class="row">
                            <label class="col-form-label col-lg-1">phone</label>
                            <div class="col-4 mr-5 form-group-feedback-right">
                                <input type="text" class="form-control" :class="{'border-danger':errors.phone}" placeholder="phone" v-model="form.phone">
                                <div v-if="errors.phone" class="form-control-feedback text-danger">
                                    <i class="icon-cancel-circle2"></i>
                                </div>
                            </div>
                            <label class="col-form-label col-lg-1">Logo :</label>
                            <div class="col-4 form-group-feedback-right">
                                <input type="file" class="form-control" :class="{'border-danger':errors.logo}"
                                       @change="form.logo = $event.target.files[0]" id="customFile">

                                <div v-if="errors.logo" class="form-control-feedback text-danger">
                                    <p>{{errors.logo}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend class="text-uppercase font-size-sm font-weight-bold mt-4">Images :</legend>
                <div class="col-lg-10">
                    <input class="file-input-custom" type="file" multiple="multiple" data-show-caption="true"
                           data-show-upload="true" accept="image/*" data-fouc
                           @change="form.images = $event.target.files">

                    <div v-if="errors.images" class="text-danger">
                        {{ errors.images }}
                    </div>
                </div>
            </fieldset>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Save <i class="icon-paperplane ml-2"></i></button>
                <Link :href="route('users.index')" class="btn btn-secondary btn">Back</Link>
            </div>
        </form>
    </master>
</template>
<script>
import Master from "../Layouts/master.vue";
import {Head} from "@inertiajs/vue3";
import {Link, useForm} from "@inertiajs/vue3";


export default {
    components: {Master, Head, Link},

    props: {
        errors: Object
    },
    data() {
        return {
            avatar: null
        }
    },

    setup() {
        const form = useForm({
            name: '',
            username: '',
            password: '',
            phone: '',
            city: '',
            address: '',
            email: '',
            images: [],
            logo:''
        })
        return {
            form
        }
    }
}
</script>
