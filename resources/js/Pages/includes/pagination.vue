<template>
    <div v-if="links.length > 3">
            <div class="main">
            <template v-for="(link, p) in links" :key="p">
                <div v-if="link.url === null" class="linkStyle"
                     v-html="link.label" />
                <Link v-else
                              class="notHover"
                              :class="{ 'OHover': link.active }" :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>
<script>

import {Link} from "@inertiajs/vue3";

    export default {
        props: {
            links: Array,
        },
        components : {
            Link
        }
    }
</script>

<style>
.notHover{
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    padding-left: 1rem;
    padding-right: 1rem;
    margin-right: 0.25rem;
    margin-bottom: 0.25rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    line-height: 1rem;
    border-radius: 0.25rem;
    border-width: 1px;

}
.OHover{
    background-color: #1D4ED8;
    color: #ffffff;

}
.linkStyle{
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    padding-left: 1rem;
    padding-right: 1rem;
    margin-right: 0.25rem;
    margin-bottom: 0.25rem;
    color: #9CA3AF;
    font-size: 0.875rem;
    line-height: 1.25rem;
    line-height: 1rem;
    border-radius: 0.25rem;
    border-width: 1px;

}
.main{
    display: flex;
    margin-bottom: -0.25rem;
    flex-wrap: wrap;
}
</style>
