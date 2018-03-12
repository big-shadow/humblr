<template>
    <a :href="'https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=raywinkelman@gmail.com&item_name='+app_name+'+Donation&item_number=Community+Campaign&currency_code=CAD'"
       target="_blank">
        <img src="admin_static/img/donate-paypal.png"/>
    </a>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "donate-button",
        computed: {
            ...mapGetters([
                'app_name'
            ])
        },
    }
</script>