<template>
    <v-card flat>
        <v-toolbar card>
            <v-toolbar-title v-pre>Add A Product</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn icon @click.native="deactivate">
                <v-icon>close</v-icon>
            </v-btn>
        </v-toolbar>
        <v-card-text>
            <v-form v-model="valid" ref="form">
                <v-layout row wrap>
                    <v-flex d-flex md4>
                        <v-avatar :tile="false" size="120px" :key="lp.image_filename">
                            <img alt="avatar" :src="lp.image_path"/>
                            <v-spacer></v-spacer>
                        </v-avatar>
                    </v-flex>
                    <v-flex md8>
                        <v-text-field label="Product Title" v-model="lp.title" :rules="[$rules.words]"></v-text-field>
                        <v-layout row wrap>
                            <v-layout column>
                                <v-text-field label="Retail Price" prefix="$" v-model="lp.price" :rules="[$rules.money]"></v-text-field>
                            </v-layout>
                            <v-layout column>
                                <div class="text-xs-right">
                                    <file-upload-button :disabled="!this.lp.id" title="Upload Photo"
                                                        :selectedCallback="updateProductImage"></file-upload-button>
                                </div>
                            </v-layout>
                        </v-layout>
                    </v-flex>
                </v-layout>
                <v-divider></v-divider>
                <v-layout row>
                    <v-text-field multi-line label="Product Description" v-model="lp.description" :rules="[$rules.words]"></v-text-field>
                </v-layout>
            </v-form>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click.native="createProduct" color="primary" :disabled="!valid">Save
                <v-icon right>check_circle</v-icon>
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
    export default {
        name: "product-details",
        props: {
            product: Object,
            active: Boolean
        },
        data() {
            return {
                valid: false,
                lp: {
                    /* local product */
                    title: String(),
                    description: String(),
                    price: 0,
                }
            }
        },
        created() {
            _.assign(this.lp, this.product)
            this.lp.image_filename = 'default.png'
            this.lp.image_path = this.$configuration.api_url + 'product_images/' + this.lp.image_filename
        },
        methods: {
            createProduct: _.throttle(function () {
                if (!this.$refs.form.validate()) {
                    return;
                }

                this.$axios.post('/api/product', {
                    data: this.lp
                }).then(product => {
                    console.log(product)
                    this.lp = product
                    this.lp.image_path = this.$configuration.api_url + 'product_images/' + this.lp.image_filename
                    this.$store.dispatch('messenger_broadcast', ['success', 'Product updated.'])
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

                    this.$forceUpdate()
                    this.$store.dispatch('messenger_broadcast', ['success', 'Image was uploaded.'])
                }).catch(e => {
                    console.log(e)
                })
            }, 3000),
            deactivate() {
                this.$refs.form.reset()
                this.$emit('update:active', false)
            }
        }
    }
</script>