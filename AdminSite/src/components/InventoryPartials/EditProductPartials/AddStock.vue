<template>
    <v-layout row wrap justify-space-between>
        <v-flex v-pre xs12>
            <h4 class="title py-3">Add New Inventory</h4>
        </v-flex>
        <v-flex xs12>
            <v-select
                    label="Distribution Center"
                    autocomplete
                    :loading="loading"
                    :rules="[$rules.required]"
                    item-text="text"
                    return-object
                    :items="distribution_centers"
                    :search-input.sync="search"
                    v-model="distribution_center"
                    hint="Type the name."
                    persistent-hint
            ></v-select>
        </v-flex>
        <v-flex xs3>
            <v-text-field label="Quantity" v-model="product_inventory.quantity"
                          :rules="[$rules.required, $rules.number]" :maxlength="12"></v-text-field>
        </v-flex>
        <v-flex xs3>
            <v-text-field label="Gross Cost" v-model="product_cost_audit.total_cost"
                          :rules="[$rules.required, $rules.money]" prefix="$" :maxlength="12"></v-text-field>
        </v-flex>
        <v-flex xs3>
            <v-tooltip right :nudge-right="5">
                <v-text-field label="C.P.U."
                              :value="product_cost_audit.total_cost / product_inventory.quantity | round(2)"
                              disabled prefix="$" slot="activator"></v-text-field>
                <span>Cost Per-Unit</span>
            </v-tooltip>
        </v-flex>
        <v-flex xs2>
            <v-spacer></v-spacer>
            <v-btn @click="">Add</v-btn>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        name: "add-stock",
        props: {
            product: Object
        },
        data() {
            return {
                distribution_centers: Array(),
                distribution_center: Object,
                loading: false,
                search: String(),
                product_inventory: {
                    quantity: 0,
                    product_id: Number,
                    distribution_center_id: 0,
                },
                product_cost_audit: {
                    units_purchased: Number(),
                    total_cost: Number(),
                    cost_per_unit: Number(),
                    supplier_note: String,
                    product_id: Number
                }
            }
        },
        methods: {
            getDistributionCenters: _.debounce(function (byName) {
                let url = '/api/distribution_centers/' + this.product.id
                this.loading = true

                if (byName) {
                    url += '/' + this.search
                }

                this.$axios.get(url).then((r) => {
                    this.distribution_centers = r.data.map(d => {
                        if (d.product_inventories.length > 0) {
                            d.text = d.name + ' (' + d.product_inventories[0].quantity + ' In stock)'
                        } else {
                            d.text = d.name + ' (0 In stock)'
                        }
                        return d
                    })
                    this.loading = false
                }).catch((e) => {
                    console.log(e)
                })
            }, 500)
        },
        watch: {
            'search': function () {
                if (this.search && this.search.length > 1) {
                    this.getDistributionCenters(true)
                } else {
                    this.getDistributionCenters()
                }
            }
        }
    }
</script>

<style scoped>

</style>