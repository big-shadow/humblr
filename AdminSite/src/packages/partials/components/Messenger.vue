<template>
    <v-snackbar :timeout="$configuration.messenger_timeout" :color="messenger.color"
                v-model="messenger.active" bottom :multi-line="false" :vertical="false">
        {{ messenger.message }}
        <v-btn flat @click.native="$store.commit('deactivate_messenger')">Close</v-btn>
    </v-snackbar>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "messenger",
        computed:{
            ...mapGetters([
                'messenger'
            ])
        }
    }
</script>