<template>
    <v-tabs v-model="active_tab" :scrollable="false" slider-color="primary" color="grey darken-4">
        <v-tab v-pre key="general" href="#general">General</v-tab>
        <v-spacer></v-spacer>
        <v-menu offset-y>
            <v-btn flat slot="activator">More
                <v-icon>arrow_drop_down</v-icon>
            </v-btn>
            <v-list>
                <v-list-tile @click="">
                    <v-list-tile-title>Delete</v-list-tile-title>
                </v-list-tile>
            </v-list>
        </v-menu>
        <v-tab>
            <v-btn icon @click.native="deactivate" class="mx-0">
                <v-icon>close</v-icon>
            </v-btn>
        </v-tab>
        <v-tabs-items>
            <v-tab-item key="general" id="general">
                <product-details v-if="active" :product.sync="lp"></product-details>
            </v-tab-item>
        </v-tabs-items>
    </v-tabs>
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
        components: {
            ProductDetails
        }
    }
</script>