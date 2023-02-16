<template>
 <div>
     <Head>
         <title>Home</title>
     </Head>

     <Master>
         <div class="Home mt-4">
         </div>
     </Master>
 </div>


</template>
<script>

import {Link} from "@inertiajs/vue3";
import Master from "./Layouts/master.vue";
import {Head} from "@inertiajs/vue3";
export default {
    components:{
        Master,
        Link,
        Head

    }
}
</script>

<style>
.Home{
    margin-left: 10px;
}
</style>
