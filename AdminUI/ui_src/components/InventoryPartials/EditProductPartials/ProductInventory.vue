<template>
    <v-card flat height="530px">
        <v-card-title v-pre primary-title>
            <span class="headline">Product Inventory</span>
        </v-card-title>
        <v-card-text class="card--text">
            <v-data-table
                    :items="productInventories"
                    hide-actions
                    :pagination.sync="pagination"
                    disable-initial-sort
                    :loading="loading">
                <template slot="headers" slot-scope="props">
                    <tr class="text-xs-left table--header">
                        <th>Distribution Center</th>
                        <th>Address</th>
                        <th class="text-xs-right">Units</th>
                    </tr>
                </template>
                <template slot="items" slot-scope="props">
                    <tr class="caption">
                        <td>{{ props.item.name | truncate(50)}}</td>
                        <td>{{ props.item.address | truncate(50)}}</td>
                        <td class="text-xs-right">{{ props.item.product_inventories[0].quantity }}</td>
                    </tr>
                </template>
            </v-data-table>
            <div v-if="pagination.pages > 1" class="text-xs-center pt-2">
                <v-pagination v-model="pagination.pager" :length="pagination.pages"/>
            </div>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click.native="" color="primary">Thing
                <v-icon right>check_circle</v-icon>
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
    export default {
        name: "product-inventory",
        props: {
            product: Object,
        },
        data() {
            return {
                productInventories: [],
                search: String(),
                loading: false,
                pagination: {
                    pager: 1,
                    pages: 0
                },
            }
        },
        created() {
            this.getProductInventories()
        },
        methods: {
            getProductInventories: _.debounce(function (page) {
                let url = `/api/distribution_centers/${this.product.id}`
                this.loading = true

                if (this.search.length > 1) {
                    url += '/' + this.search
                }
                this.pagination.pager = page ? page : this.pagination.pager
                this.$axios.get(url, {
                    params: {
                        page: this.pagination.pager
                    }
                }).then(r => {
                    this.productInventories = r.data
                    this.pagination.pages = r.meta.last_page
                    this.pagination.rowsPerPage = r.meta.per_page
                    this.pagination.totalItems = r.meta.total
                    this.loading = false
                }).catch(e => {
                    console.log(e)
                })
            }, 500)
        }
    }
</script>

<style scoped>
    .table--header {
        height: 24px;
    }

    .card--text {
        height: 404px;
        overflow-y: auto;
    }
</style>