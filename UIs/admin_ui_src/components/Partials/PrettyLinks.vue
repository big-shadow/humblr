<template>
    <div class="text-xs-center mb-5">
        <h1>{{ app_name }} Beta Features</h1>
        <div v-pre class="links mt-2">
            <router-link to="/inventory">Inventory</router-link>
            <a href="#">Newsletter</a>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "pretty-links",
        computed: {
            ...mapGetters([
                'app_name',
                'vendor'
            ])
        },
    }
</script>