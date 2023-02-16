<template>
    <Head title="Show"></Head>
    <master>
        <template v-slot:header>
            <div class="breadcrumb mt-5" >
                <Link :href="route('home')" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</Link>
                <Link :href="route('users.index')" class="breadcrumb-item">Users</Link>
                <span class="breadcrumb-item active">{{ user.name ?? '' }}</span>
            </div>
        </template>

        <div class="row justify-content-md-center">
            <div class="col-md-8 justify-content-md-center">

                <!-- Multi column -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Show</h5>
                    </div>

                    <ul class="list-group list-group-flush border-top">
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Full name:</span>
                            <div class="ml-auto">{{ user.name ?? '--'}}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Phone number:</span>
                            <div class="ml-auto">{{user.phone ?? '--'}}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">E-mail:</span>
                            <div class="ml-auto"><a href="#">{{ user.email ?? '--' }}</a></div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Created At:</span>
                            <div class="ml-auto">{{ user.created_at ?? '--' }}</div>
                        </li>
                    </ul>

                </div>
                <!-- /multi column -->

            </div>
        </div>
        <!-- /card navigation options -->
    </master>

</template>
<script>
import Master from "../Layouts/master.vue";
import {Head,Link} from "@inertiajs/vue3";
import moment from "moment";

export default {
    components: {Head,Link,Master},
    props:{
        user:Object
    },
    data() {
        return {
            moment: moment
        }
    }
}
</script>
