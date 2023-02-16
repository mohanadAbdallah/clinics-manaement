<template>
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style="min-height: 575px;">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="#"><img :src="showImage() + $page.props.user.image" height="38" class="rounded-2" alt=""></a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold">{{ $page.props.user.name }}</div>
                            <div class="font-size-xs opacity-50">
                              {{ $page.props.user.email }}
                            </div>
                        </div>

                        <div class="ml-3 align-self-center">
                            <Link :href="route('users.show',$page.props.user.id)" class="text-white"><i class="icon-cog3"></i></Link>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <Link href="/" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
									Dashboard
								</span>
                        </Link>
                    </li>


                </ul>
            </div>


            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item nav-item-submenu" @click="toggleNavClinics" :class="{'nav-item-open':isActiveClinics}">
                        <a href="#" class="nav-link"><i class="icon-bookmark"></i> <span>Clinics</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Starter kit" :style="[isActiveClinics ? {'display':displayClinics} : {}]" >
                            <li class="nav-item"><Link :href="route('clinics.index')" class="nav-link">View All</Link></li>
                            <li class="nav-item"><Link :href="route('clinics.create')" class="nav-link">Create</Link></li>
                        </ul>

                    </li>
                    <li class="nav-item nav-item-submenu" @click="toggleNavUsers" :class="{'nav-item-open':isActiveUsers}">
                        <a href="#" class="nav-link"><i class="icon-users4"></i> <span>users</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Starter kit" :style="[isActiveUsers ? {'display':displayUsers } : {}]">
                            <li class="nav-item"><Link :href="route('users.index')" class="nav-link">View All</Link></li>
                            <li class="nav-item"><Link :href="route('register')" class="nav-link">Create</Link></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>

</template>
<script>
import {Head, Link} from "@inertiajs/vue3";
import { useI18n } from "vue-i18n";

export default {
    components: {
        Head,
        Link,

    },
    data(){
        return{
            isActiveClinics:false,
            isActiveUsers:false,
            displayClinics: '',
            displayUsers: ''
        }
    },
    methods:{

        toggleNavClinics: function (){
            this.isActiveClinics=!this.isActiveClinics
            this.displayClinics=this.isActiveClinics === true ? 'block' : 'none'
            this.isActiveUsers=false
            this.displayUsers ='none'
        },
        toggleNavUsers: function (){
            this.isActiveUsers=!this.isActiveUsers
            this.displayUsers=this.isActiveUsers === true ? 'block' : 'none'
            this.isActiveClinics=false
            this.displayClinics ='none'
        },
        showImage() {
            return "./storage/Auth/images/";
        },
    },
}
</script>

<style>
h1{

}
</style>
