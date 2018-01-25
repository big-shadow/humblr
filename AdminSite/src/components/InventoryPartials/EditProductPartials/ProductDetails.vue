<template>
    <v-card flat>
        <v-card-title>
            <span class="headline">Product Details</span>
        </v-card-title>
        <v-card-text>
            <v-layout row wrap>
                <v-flex md12>
                    <v-text-field single-line label="Product Title" v-model="lp.title"></v-text-field>
                </v-flex>
                <v-flex md12>
                    <file-upload-button title="Browse" :selectedCallback="updateProductImage"></file-upload-button>
                    <span v-if="lp.product_image && lp.product_image.name">{{ lp.product_image.name }}</span>
                </v-flex>
            </v-layout>
            <v-layout row>
                <v-text-field box multi-line label="Description" v-model="lp.description"></v-text-field>
            </v-layout>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click.native="updateProduct" color="primary">Save
                <v-icon dark right>check_circle</v-icon>
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
    import FileUploadButton from '../FileUploadButton'

    export default {
        name: "product-details",
        props: ['product', 'active'],
        data() {
            return {
                lp: {
                    /* local product */
                    title: '',
                    product_image: '',
                    description: '',
                    price: 0,
                }
            }
        },
        created() {
            this.lp = Object.assign({}, this.product)
        },
        methods: {
            updateProduct: _.throttle(function () {
                this.$axios.put('/api/productu', {
                    data: this.lp
                }).then((r) => {
                    console.log(r)
                }).catch((e) => {
                    console.log(e)
                })
            }, 1000),
            updateProductImage(file) {
                console.log("name : " + file.name)
                console.log("size : " + file.size)
                console.log("type : " + file.type)
                console.log("date : " + file.lastModified)
                this.lp.product_image = file
            }
        },
        components: {
            FileUploadButton
        }
    }
</script>

<style scoped>
    input[type=file] {
        position: absolute;
        left: -99999px;
    }
</style>