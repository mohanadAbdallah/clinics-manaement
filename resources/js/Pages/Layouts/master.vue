<template>
    <Head>

        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
              type="text/css">
        <link href="/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">


    </Head>

    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <Link :href="route('home')" class="d-inline-block">
                <img src="/global_assets/images/logo_light.png" alt="">
            </Link>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" @click="toggleSidebar()"
                       class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <Link :href="route('logout')"  method="post"
                          class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        Logout
                    </Link>
                </li>

            </ul>

            <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

            <ul class="navbar-nav">

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
                       data-toggle="dropdown">
                        <img v-if="$page.props.user.image" :src="showImage() + $page.props.user.image" class="rounded-2 mr-2"
                             height="34" alt="">
                        <span>{{ $page.props.user.name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <Link :href="route('users.show',$page.props.user.id)" class="dropdown-item"><i class="icon-user-plus"></i> My profile</Link>
                       <div class="dropdown-divider"></div>
                        <a :href="route('users.edit',$page.props.user.id)" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <Link :href="route('logout')" method="post" class="dropdown-item"><i class="icon-switch2"></i> Logout</Link>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content" :class="{'sidebar-xs':showSidebar}">
        <!-- Main content -->

        <!-- Main sidebar -->
        <sidebar></sidebar>
        <!-- /main sidebar -->

        <div class="content-wrapper">

            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <slot name="header"></slot>
                    </div>

                </div>
            </div>

            <div class="content">
                <div v-if="$page.props.flash.message" v-show="showPopup" class="alert alert-success mb-4">
                    {{ $page.props.flash.message }}
                </div>
                <slot/>
            </div>
        </div>
    </div>
    <!-- /main content -->

</template>

<script>
import {Link} from "@inertiajs/vue3";
import Navbar from "../includes/navbar.vue";
import sidebar from "../includes/sidebar.vue";
import {Head} from "@inertiajs/vue3";


export default {
    components: {
        sidebar,
        Navbar,
        Head,
        Link
    },
    data() {
        return {
            showSidebar: false,
            showPopup: true
        }
    },
    mounted() {
        this.msgShow();
    },
    methods: {
        toggleSidebar: function () {
            this.showSidebar = !this.showSidebar
        },

        msgShow() {
            setTimeout(() => {
                this.showPopup = false
            }, 4000)
        },
        showImage() {
            return "./storage/Auth/images/";
        },
    }
}

</script>


