<template>
    <v-card flat height="522px">
        <v-card-title v-pre>
            <span class="headline">Product Inventory</span>
        </v-card-title>
        <v-card-text>
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
    }
</script>

<style scoped>

</style>