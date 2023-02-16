<template>
    <Head>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    </Head>
    <div>

        <div class="page-content">
            <!-- Main sidebar -->
            <!-- /main sidebar -->
            <!-- Main content -->

            <div class="content-wrapper">
                <div class="content">
                    <slot />
                </div>
            </div>
        </div>
        <!-- /main content -->
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    components: {
        Link
    },

}

</script>
