<template>
    <div class="text-xs-center">
        <h1>{{ msg }}</h1>
        <div class="links mt-2">
            <a href="#">Drivers</a>
            <router-link to="/inventory">Inventory</router-link>
            <a href="#">Orders</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Dashboard',
        created() {

        },
        data() {
            return {
                msg: 'Room Service Administrative Dashboard'
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
