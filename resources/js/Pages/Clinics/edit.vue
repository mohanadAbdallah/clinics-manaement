<template>
    <Head>
        <title>Update</title>
    </Head>
    <master>
        <template v-slot:header>
            <div class="breadcrumb">
                <Link :href="route('home')" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</Link>
                <Link :href="route('clinics.index')" class="breadcrumb-item">Clinics</Link>
                <span class="breadcrumb-item active">Edit</span>
            </div>
        </template>

                            <form @submit.prevent="form.put(route('clinics.update',form.id))">

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
                                    <label for="phone" class="col-md-4 col-form-label text-md-end">phone</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control" v-model="form.phone"
                                               autocomplete="phone">
                                        <div v-if="errors.phone" class="text-danger">
                                            {{errors.phone}}
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="city" class="col-md-4 col-form-label text-md-end">city</label>

                                    <div class="col-md-6">
                                        <input id="city" type="text" class="form-control" v-model="form.city"
                                               autocomplete="city">
                                        <div v-if="errors.city" class="text-danger">
                                            {{errors.city}}
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-md-4 col-form-label text-md-end">address</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="address" v-model="form.address" rows="3"></textarea>
                                        <div v-if="errors.address" class="text-danger">
                                            {{errors.address}}
                                        </div>
                                    </div>
                                </div>
                                <fieldset>
                                    <legend class="text-uppercase font-size-sm font-weight-bold mt-4">Images :</legend>
                                    <div class="col-lg-10">
                                        <input class="file-input-custom" type="file" multiple="multiple" data-show-caption="true"
                                               data-show-upload="true" accept="image/*" data-fouc
                                               @change="form.images = $event.target.files" @input="form.images">

                                        <div v-if="errors.images" class="text-danger">
                                            {{ errors.images }}
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row mb-0">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        <button type="submit" class="btn btn-info">Update</button>
                                        <Link :href="route('clinics.index')" class="btn btn-secondary btn-outline btn">Back</Link>
                                    </div>
                                </div>
                            </form>
    </master>
</template>
<script>
import Master from "../Layouts/master.vue";
import {Head} from "@inertiajs/vue3";
import {Link,useForm} from "@inertiajs/vue3";

export default {
    components: {Master, Head,Link},
    props:{
        clinic:Object,
        errors:Object,
    },
    methods:{
        onFileSelected(e) {
            let images = e.target.files
            const reader = new FileReader()
            reader.readAsDataURL(images)
            reader.onload = e => {
                this.form.images = e.target.result
            }

        }
    },

    setup(props){
        const form= useForm(props.clinic)
        return{form}
    }
}
</script>
