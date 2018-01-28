<template>
    <v-layout row justify-center>
        <v-dialog v-model="active" persistent max-width="600px">
            <v-tabs v-model="active_tab" :scrollable="false">
                <v-tabs-bar color="grey darken-4">
                    <v-tabs-slider v-pre color="primary"></v-tabs-slider>
                    <v-tabs-item v-pre key="general" href="#general">General</v-tabs-item>
                    <v-spacer></v-spacer>
                    <v-menu>
                        <v-tabs-item slot="activator">More<v-icon>arrow_drop_down</v-icon></v-tabs-item>
                        <v-list>
                            <v-list-tile @click="">Delete</v-list-tile>
                        </v-list>
                    </v-menu>
                    <v-tabs-item>
                        <v-btn icon @click.native="deactivate" class="mx-0">
                            <v-icon class="pt-1">close</v-icon>
                        </v-btn>
                    </v-tabs-item>
                </v-tabs-bar>
                <v-tabs-items>
                    <v-tabs-content key="general" id="general">
                        <product-details v-if="active" :product.sync="lp"></product-details>
                    </v-tabs-content>
                </v-tabs-items>
            </v-tabs>
        </v-dialog>
    </v-layout>
</template>

<script>
    import ProductDetails from './EditProductPartials/ProductDetails'

    export default {
        name: "edit-product",
        props: {
            product: Object,
            active: Boolean
        },
        data() {
            return {
                active_tab: 'general',
                /* local product */
                lp: {}
            }
        },
        created() {
            _.assign(this.lp, this.product)
        },
        methods: {
            deactivate() {
                this.$emit('update:active', false)
            }
        },
        watch: {
            'lp': function () {
                this.$emit('update:product', this.lp)
            }
        },
        components: {
            ProductDetails
        }
    }
</script>