<template>
    <div>
        <pretty-links/>
        <v-layout row justify-center>
            <v-card :width="640">
                <v-card-media src="admin_static/img/pig.jpeg" :height="400"/>
                <v-card-title primary-title>
                    <h3 class="title">Hi, {{ vendor.title }}!</h3>
                </v-card-title>
                <v-card-text>
                    Congratulations on securing your {{ app_name }} account. We're working diligently to deliver the
                    features that you'll need to run {{ vendor.title }} smoothly.
                </v-card-text>
                <v-card-actions>
                    <v-layout row justify-end>
                        <v-btn to="/dashboard">Dismiss</v-btn>
                    </v-layout>
                </v-card-actions>
            </v-card>
        </v-layout>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import PrettyLinks from './Partials/PrettyLinks'

    export default {
        name: 'dashboard',
        data() {
            return {
                prop: ''
            }
        },
        computed: {
            ...mapGetters([
                'app_name',
                'vendor'
            ])
        },
        components: {
            PrettyLinks
        }
    }
</script>