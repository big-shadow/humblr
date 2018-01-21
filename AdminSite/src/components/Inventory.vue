<template>
    <div>
        <div class="text-xs-center">
            <h1 class="headline">Inventory</h1>
            <p class="body-1 grey--text">Update product information, and inventory.</p>
        </div>
        <v-data-table
                v-bind:headers="headers"
                v-bind:items="products"
                v-bind:search="search"
                v-bind:pagination.sync="pagination"
                hide-actions
                class="elevation-1"
        >
            <template slot="items" slot-scope="props">
                <td class="text-xs-center">
                    <v-avatar :tile="false">
                        <img alt="avatar" class="product--image" src="/static/img/product/default.jpg"/>
                    </v-avatar>
                </td>
                <td>{{ props.item.title }}</td>
                <td>{{ props.item.description | truncate(35) }}</td>
                <td class="text-xs-right">{{ props.item.price | currency }}</td>
                <td class="text-xs-center">
                    <v-btn flat icon color="primary" @click="editProduct(props.item)">
                        <v-icon>edit</v-icon>
                    </v-btn>
                </td>
            </template>
        </v-data-table>
        <div class="text-xs-center pt-2">
            <v-pagination v-model="pagination.pager" :length="pagination.pages"></v-pagination>
        </div>
        <component :active.sync="partials.edit.active" :is="partials.edit.component"
                   :product="partials.edit.product"></component>
    </div>
</template>

<script>
    import Edit from './InventoryPartials/EditProduct'

    export default {
        name: "Inventory",
        data() {
            return {
                products: [],
                headers: [
                    {text: 'Image', value: 'image', align: 'center'},
                    {text: 'Title', value: 'title', align: 'left'},
                    {text: 'Description', value: 'description', align: 'left', sortable: false},
                    {text: 'Price', value: 'price', align: 'right'},
                    {text: 'Edit', value: 'edit', align: 'center', sortable: false},
                ],
                search: '',
                pagination: {
                    pager: 1,
                    pages: 0
                },
                partials: {
                    edit: {
                        component: Edit,
                        product: {},
                        active: false
                    }
                }
            }
        },
        created() {
            this.getProducts()
        },
        methods: {
            getProducts: _.throttle(function () {
                this.$axios.get('/api/products', {
                    params: {
                        page: this.pagination.pager
                    }
                }).then((r) => {
                    this.products = r.data.data
                    this.pagination.pages = r.data.meta.last_page
                    this.pagination.rowsPerPage = r.data.meta.per_page
                    this.pagination.totalItems = r.data.meta.total
                }).catch((e) => {
                    console.log(e)
                })
            }, 1000),
            editProduct(product) {
                this.partials.edit.product = product
                this.partials.edit.active = true
            }
        },
        watch: {
            'pagination.pager': function () {
                this.getProducts()
            }
        }
    }
</script>

<style scoped>
    .product--image {
        width: 24px;
        height: 24px;
    }
</style>