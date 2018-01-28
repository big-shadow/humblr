<template>
    <v-card flat>
        <v-card-title v-pre>
            <span class="headline">Product Details</span>
        </v-card-title>
        <v-card-text>
            <v-layout row wrap>
                <v-flex d-flex md4>
                    <v-avatar :tile="false" size="120px" :key="lp.image_filename">
                        <img alt="avatar" :src="lp.image_path"/>
                        <v-spacer></v-spacer>
                    </v-avatar>
                </v-flex>
                <v-flex md8>
                    <v-text-field label="Product Title" v-model="lp.title"></v-text-field>
                    <v-layout row wrap>
                        <v-layout column>
                            <v-text-field label="Retail Price" prefix="$" v-model="lp.price"></v-text-field>
                        </v-layout>
                        <v-layout column>
                            <div class="text-xs-right">
                                <file-upload-button title="Upload Photo"
                                                    :selectedCallback="updateProductImage"></file-upload-button>
                            </div>
                        </v-layout>
                    </v-layout>
                </v-flex>
            </v-layout>
            <v-divider></v-divider>
            <v-layout row>
                <add-stock :product.sync="lp"></add-stock>
            </v-layout>
            <v-layout row align-center>
                <v-divider></v-divider>
                <a @click="more=!more">
                    <v-icon>arrow_drop_down</v-icon>
                    <span v-html="'Show ' + (more ? 'Less':'More')"></span>
                    <v-icon>arrow_drop_down</v-icon>
                </a>
                <v-divider></v-divider>
            </v-layout>
            <v-layout v-if="more" row>
                <v-text-field multi-line label="Product Description" v-model="lp.description"></v-text-field>
            </v-layout>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click.native="updateProduct" color="primary">Save
                <v-icon right>check_circle</v-icon>
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
    import AddStock from './ProductDetailsPartials/AddStock'

    export default {
        name: "product-details",
        props: {
            product: Object,
            active: Boolean
        },
        data() {
            return {
                lp: {
                    /* local product */
                    title: '',
                    description: '',
                    price: 0,
                },
                more: false
            }
        },
        created() {
            _.assign(this.lp, this.product)
        },
        methods: {
            updateProduct: _.throttle(function () {
                this.$axios.put('/api/product', {
                    data: this.lp
                }).then(r => {
                    this.$emit('update:product', r)
                }).catch(e => {
                    console.log(e)
                })
            }, 3000),
            updateProductImage: _.throttle(function (file) {
                const config = {
                    headers: {'content-type': 'multipart/form-data'}
                }
                let data = new FormData();
                data.append('id', this.lp.id);
                data.append('product_image', file, file.name);

                console.log("name : " + file.name)
                console.log("size : " + file.size)
                console.log("type : " + file.type)
                console.log("date : " + file.lastModified)

                this.$axios.post('/api/product/image', data, config).then(r => {
                    if (r.image_filename) {
                        this.lp.image_path = this.$configuration.api_url + 'product_images/' + r.image_filename
                        this.lp.image_filename = r.image_filename
                    }

                    this.$emit('update:product', this.lp)
                    this.$forceUpdate()
                }).catch(e => {
                    console.log(e)
                })
            }, 3000)
        },
        components: {
            AddStock
        }
    }
</script>