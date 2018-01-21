<template>
    <v-layout row justify-center>
        <v-dialog v-model="active" persistent max-width="600px">
            <v-card>
                <v-card-title>
                    <span class="headline">Product Inventory</span>
                </v-card-title>
                <v-card-text>
                    <div>{{ product.title }}</div>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn @click.native="" color="primary">Save
                        <v-icon dark right>check_circle</v-icon>
                    </v-btn>
                    <v-btn @click.native="deactivate">Close
                        <v-icon dark right>block</v-icon>
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-layout>
</template>

<script>
    export default {
        name: "EditProduct",
        props: ['product', 'active'],
        data() {
            return {
                inventory: {
                    product_id: this.product.id
                }
            }
        },
        created() {
            console.log(this.product)
        },
        methods: {
            getProductInventory: _.throttle(function () {
                this.$axios.get('/api/product/inventory/' + this.id).then((r) => {
                    Object.assign(this.inventory, r.data.data)
                }).catch((e) => {
                    console.log(e)
                })
            }, 1000),
            deactivate() {
                this.$emit('update:active', false)
            }
        }
    }
</script>

<style scoped>

</style>