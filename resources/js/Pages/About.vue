<template>
    <div>
        <Head>
            <title>About</title>
        </Head>


        <Master>
            <div class="aboutUs mt-4">
                <h2 class="cssT">About Us.</h2>
                <p class="cssT">Text Coming soon</p>
            </div>
        </Master>

    </div>

</template>

<script>
import Master from "./Layouts/master.vue";
import {Head} from "@inertiajs/vue3";

export default {
    components: {Master, Head}
}
</script>
<style>

.cssT{
   position: relative;
    left: 50px;
    top: 50px;

}
</style>
