<template>
    <v-btn class="upload--button">
        {{ title }}<input type="file" v-on:change="fileSelected">
    </v-btn>
</template>

<script>
    export default {
        name: 'file-upload-button',
        props: {
            selectedCallback: Function,
            title: String
        },
        methods: {
            fileSelected(e) {
                if (this.selectedCallback) {
                    if (e.target.files[0]) {
                        this.selectedCallback(e.target.files[0]);
                    } else {
                        this.selectedCallback(null);
                    }
                }
            }
        }
    }
</script>

<style scoped>
    input[type=file] {
        display: none;
    }
    .upload--button {
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .upload--button input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;
    }
</style>