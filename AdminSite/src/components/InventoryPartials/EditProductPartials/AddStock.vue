<template>
    <v-form v-model="valid" ref="form">
        <v-layout row wrap justify-space-between>
            <v-flex v-pre xs12>
                <h4 class="title py-3">Add New Inventory</h4>
            </v-flex>
            <v-flex xs12>
                <v-select
                        label="Distribution Center"
                        autocomplete
                        :loading="loading"
                        :rules="[$rules.required, distributionCenterRule]"
                        item-text="name"
                        return-object
                        :items="distribution_centers"
                        :search-input.sync="search"
                        v-model="distribution_center"
                        hint="Begin typing the name of the center."
                        persistent-hint
                        @keyup="distributionCenterKeyUp"
                >
                    <template slot="item" slot-scope="data">
                        <v-list-tile-content>
                            <v-list-tile-title>{{ data.item.name | truncate(50) }}</v-list-tile-title>
                            <v-list-tile-sub-title class="caption">{{ data.item.quantity }} in stock
                                - <i>{{ data.item.address| truncate(65) }}</i>
                            </v-list-tile-sub-title>
                        </v-list-tile-content>
                    </template>
                    <template slot="no-data">
                        <v-list-tile-content class="pa-2">
                            <h4>
                                <v-icon dark left color="red">info_outline</v-icon>
                                Oops. That distribution center was not found.
                            </h4>
                        </v-list-tile-content>
                    </template>
                </v-select>
            </v-flex>
            <v-flex xs3>
                <v-text-field label="Gross Cost" v-model="product_cost_audit.total_cost"
                              :rules="[$rules.required, $rules.money]" prefix="$" :maxlength="12"></v-text-field>
            </v-flex>
            <v-flex xs3>
                <v-text-field label="Quantity (Units)" v-model="product_inventory.quantity"
                              :rules="[$rules.required, $rules.number, (v) => v > 0 || 'Must be greater than zero.']"
                              :maxlength="12"></v-text-field>
            </v-flex>
            <v-flex xs3>
                <v-tooltip right :nudge-right="5">
                    <v-text-field label="Cost Per-Unit"
                                  :value="product_cost_audit.total_cost / product_inventory.quantity | round(2)"
                                  disabled prefix="$" slot="activator"
                                  :rules="[$rules.number]"></v-text-field>
                    <span>Gross Cost ÷ Quantity</span>
                </v-tooltip>
            </v-flex>
            <v-flex xs2>
                <v-spacer></v-spacer>
                <v-btn @click="addStock" :disabled="!valid">Add</v-btn>
            </v-flex>

        </v-layout>
    </v-form>
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
                distributionCenterRule: (v) => v.id && !isNaN(v.id) || 'Please select a distribution center.',
                loading: false,
                valid: false,
                search: String(),
                product_inventory: {
                    quantity: Number(),
                    product_id: Number,
                    distribution_center_id: Number,
                },
                product_cost_audit: {
                    total_cost: Number(),
                    cost_per_unit: Number(),
                    supplier_note: String
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

                this.$axios.get(url).then(r => {
                    this.distribution_centers = r.data.map(d => {
                        if (d.product_inventories.length > 0) {
                            d.quantity = d.product_inventories[0].quantity
                        } else {
                            d.quantity = 0
                        }
                        return d
                    })
                    this.loading = false
                }).catch(e => {
                    console.log(e)
                })
            }, 500),
            addStock: _.debounce(function () {
                if (this.$refs.form.validate()) {
                    this.$axios.post('/api/product_cost_audit', {
                        data: {
                            units_purchased: this.product_inventory.quantity,
                            total_cost: this.product_cost_audit.total_cost,
                            supplier_note: this.product_cost_audit.supplier_note,
                            product_id: this.product.id
                        }
                    }).then(r => {
                        console.log(r)
                        this.$refs.form.reset()
                    }).catch(e => {
                        console.log(e)
                    })
                }
            }, 1500),
            distributionCenterKeyUp() {
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