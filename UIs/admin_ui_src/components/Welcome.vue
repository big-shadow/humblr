<template>
    <div class="text-xs-center">
        <h1>{{ app_name }} Administrative Dashboard</h1>
        <div v-pre class="links mt-2">
            <a href="#">Drivers</a>
            <router-link to="/inventory">Inventory</router-link>
            <a href="#">Orders</a>
        </div>
        <h1>Welcome!</h1>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: 'dashboard',
        data() {
            return {
                prop: ''
            }
        },
        computed: {
            ...mapGetters([
                'app_name'
            ])
        },
    }
</script>