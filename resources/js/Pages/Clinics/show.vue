<template>
    <Head title="Show"></Head>
    <master>
        <template v-slot:header>
            <div class="breadcrumb mt-5" >
                <Link :href="route('home')" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</Link>
                <Link :href="route('clinics.index')" class="breadcrumb-item">Clinics</Link>
                <span class="breadcrumb-item active">Show</span>
            </div>
        </template>
        <div class="row justify-content-md-center">
            <div class="col-md-8 justify-content-md-center">

                <!-- Multi column -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Clinic Show</h5>
                    </div>

                    <ul class="list-group list-group-flush border-top">
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Full name:</span>
                            <div class="ml-auto">{{ clinic.name ?? '--'}}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Phone number:</span>
                            <div class="ml-auto">{{clinic.phone ?? '--'}}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">E-mail:</span>
                            <div class="ml-auto">{{ clinic.email ?? '--' }}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Username:</span>
                            <div class="ml-auto">{{ clinic.username ?? '--' }}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Address:</span>
                            <div class="ml-auto">{{ clinic.address ?? '--' }}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Created At:</span>
                            <div class="ml-auto">{{ clinic.created_at ?? '--' }}</div>
                        </li>

                        <li class="list-group-item mt-4">
                            <span class="text-uppercase font-size-sm font-weight-bold font-weight-semibold">Images:</span>
                            <div class="ml-auto text-right">
                                <img v-for="image in clinic.images" :src="showImage() + image" alt="mohanad" style="" class="rounded ml-2 mb-2" height="150">
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- /multi column -->

            </div>
        </div>

    </master>
</template>
<script>
import Master from "../Layouts/master.vue";
import {Head,Link} from "@inertiajs/vue3";
export default {
    components: {Master,Head,Link},
    methods:{
        showImage() {
            return "../storage/images/";
        },
        showLogo() {
            return "../storage/logos/";
        },
    },
    props:{
        clinic:Object
    }
}
</script>
