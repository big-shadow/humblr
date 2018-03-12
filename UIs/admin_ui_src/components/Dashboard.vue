<template>
    <div>
        <pretty-links/>
        <v-layout row justify-center>
            <v-card :width="640">
                <v-card-title primary-title>
                    <h3 class="title">Welcome, {{ vendor.title }}!</h3>
                </v-card-title>
                <v-divider/>
                <v-card-text>
                    <div class="subheading mb-3">{{ app_name }} is currently available as early release trial product.
                    </div>
                    <p>You're seeing this because the menu item you clicked isn't yet finished. To try features that are
                        currently available, see the beta menu above this card.</p>
                    <p>If you like what you see, donate a few bucks. It'll buy the boys a beer.</p>
                </v-card-text>
                <v-card-actions>
                    <v-layout row justify-center>
                        <donate-button/>
                    </v-layout>
                </v-card-actions>
            </v-card>
        </v-layout>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import PrettyLinks from './Partials/PrettyLinks'
    import DonateButton from './Partials/DonateButton'

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
            PrettyLinks,
            DonateButton
        }
    }
</script>