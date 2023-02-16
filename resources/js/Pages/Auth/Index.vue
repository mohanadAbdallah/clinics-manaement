<template>
    <Head title="Users"></Head>
    <master>
        <template v-slot:header>
            <div class="breadcrumb mt-5" >
                <Link :href="route('home')" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</Link>
                <span class="breadcrumb-item active">Users</span>
            </div>
        </template>

        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
              Users
            </h6>
        </div>
        <div class="text-right">
            <Link class="btn btn-info btn-lg mb-3 " :href="route('register')">Create</Link>
        </div>
        <!-- users content -->
        <div class="row">

            <div v-for="user in users" class="col-xl-3 col-md-6">
                <div class="card card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="#">
                                <img src="/global_assets/images/placeholders/placeholder.jpg" class="rounded" width="38" height="38" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="font-weight-semibold">
                                <Link :href="route('users.show',user.id)">{{ user.name }}</Link>
                                </div>
                            <span class="text-muted">{{ user.email }}</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <span class="badge badge-mark bg-success border-success"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /users content -->
    </master>

</template>
<script>
import Master from "../Layouts/master.vue";
import {Head,Link} from "@inertiajs/vue3";

export default {
    components: {Master,Head,Link},
    props:{
        users:Object
    }
}
</script>
