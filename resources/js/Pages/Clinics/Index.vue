<template>
  <div>
      <Head>
          <title>Clinics</title>

      </Head>

      <Master>
          <template v-slot:header>
              <div class="breadcrumb mt-5" >
                  <Link :href="route('home')" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</Link>
                  <span class="breadcrumb-item active">All Clinics</span>
              </div>
          </template>
          <div class="text-right">
              <Link class="btn btn-info btn-lg mb-3" :href="route('clinics.create')">Create</Link>
          </div>

          <!-- Default ordering -->
          <div class="card">
              <div class="card-header header-elements-inline">
                  <h5 class="card-title">All Clinics</h5>
                  <div class="header-elements">
                      <div class="list-icons">
                          <a class="list-icons-item" data-action="collapse"></a>
                          <a class="list-icons-item" data-action="reload"></a>
                          <a class="list-icons-item" data-action="remove"></a>
                      </div>
                  </div>
              </div>
              <table class="table datatable-sorting">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Logo</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>City</th>
                      <th>Address</th>
                      <th>status</th>
                      <th>Comments</th>
                      <th class="text-center">Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                  <tr v-for="clinic in clinics.data" :key="clinic.id">
                      <td>{{ clinic.id }}</td>
                      <td>
                          <img :src="showLogo() + clinic.logo " alt="logo" height="30" class="rounded-2">
                      </td>
                      <td>
                          <Link :href="route('clinics.show',clinic.id)">{{ clinic.name }}</Link>
                      </td>
                      <td>{{ clinic.username }}</td>
                      <td>{{ clinic.address }}</td>
                      <td>{{ clinic.address }}</td>
                      <td><span class="badge badge-success">Active</span></td>
                      <td><span>The Clinic is open until the end of March.</span></td>
                      <td class="text-center">
                          <div class="list-icons">
                              <div class="dropdown">
                                  <a href="#" class="list-icons-item" data-toggle="dropdown">
                                      <i class="icon-menu9"></i>
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right">

                                      <button class="dropdown-item" type="button" @click.prevent="confirmClinicDeletion(clinic.id)">
                                          <i class="icon-trash"></i>
                                          Delete
                                      </button>
                                      <Link style="color: inherit;" class="dropdown-item"
                                            :href="route('clinics.edit',clinic.id)">
                                          <i class="icon-database-edit2"></i>
                                          Edit
                                      </Link>
                                  </div>
                              </div>
                          </div>
                      </td>
                  </tr>

                  </tbody>
              </table>
          </div>
          <!--Delete Modal-->
          <div class="modal" id="deleteClinicModal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">
                              <span>Delete Clinic</span>
                          </h5>

                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <div class="modal-body">
                          <h5>Are you sure you want to delete this Clinic ?</h5>
                      </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button @click.prevent="deleteClinic" type="button" class="btn btn-info">Confirm</button>
                      </div>
                  </div>
              </div>
          </div>
          <!--Delete Modal-->
          <pagination :links="clinics.links"></pagination>
          <!-- /default ordering -->
      </Master>
  </div>

</template>
<script>
import Master from "../Layouts/master.vue";
import {Head, Link} from "@inertiajs/vue3";
import {Inertia} from "@inertiajs/inertia"
import pagination from "../includes/pagination.vue";

export default {
    components: {Master,Head,Link,pagination},
    methods: {
        showImage() {
            return "./storage/images/";
        },
        showLogo() {
            return "./storage/logos/";
        },
        confirmClinicDeletion (id){
            this.clinicIdBeingDeleted = id
            $('#deleteClinicModal').modal('show');
        },
        deleteClinic(){
            Inertia.delete(route('clinics.destroy',this.clinicIdBeingDeleted))
        }


    },
    props:{
        clinics:Object,
    },
    data() {
        return {
            clinicIdBeingDeleted : null
        }
    },


}

</script>

<style>

</style>
