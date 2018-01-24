<template>
    <div class="text-xs-center">
        <h1>{{ appName }} Administrative Dashboard</h1>
        <div class="links mt-2">
            <a href="#">Drivers</a>
            <router-link to="/inventory">Inventory</router-link>
            <a href="#">Orders</a>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: 'dashboard',
        created() {

        },
        data() {
            return {
                prop: ''
            }
        },
        computed: {
            ...mapGetters([
                'appName'
            ])
        },
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
