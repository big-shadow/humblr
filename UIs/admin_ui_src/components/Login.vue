<template>
    <v-layout align-center justify-center>
        <v-flex md6>
            <v-card id="login">
                <v-card-media src="admin_static/img/city-at-night.jpg" height="200px">
                </v-card-media>
                <v-card-title primary-title>
                    <div>
                        <h3 class="headline">{{ app_name }} Administration</h3>
                        <span class="subheader">Please log-in to continue.</span>
                    </div>
                </v-card-title>
                <v-card-text>
                    <v-form v-model="valid" ref="form">
                        <v-text-field
                                @keyup.enter="login"
                                v-model="username"
                                box
                                label="E-mail Address"
                                :rules="[$rules.required, $rules.email]"
                        ></v-text-field>
                        <v-text-field
                                @keyup.enter="login"
                                v-model="password"
                                box
                                label="Password"
                                type="password"
                                :rules="[$rules.required]"
                        ></v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" @click.native="login" :disabled="!valid">Submit</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>
    </v-layout>
</template>
<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "login",
        data() {
            return {
                valid: false,
                username: String(),
                password: String()
            }
        },
        methods: {
            login: _.throttle(function () {
                if (!this.$refs.form.validate()) {
                    return;
                }
                const data = new FormData()
                data.append('client_id', this.$configuration.client_id)
                data.append('client_secret', this.$configuration.client_secret)
                data.append('grant_type', 'password')
                data.append('username', this.username)
                data.append('password', this.password)
                data.append('scope', '')

                this.$axios.post('/oauth/token', data).then(r => {
                    this.$auth.setToken(r.access_token, r.expires_in)
                    this.$router.push('/')
                }).catch(e => {
                    console.log(e)
                    this.$store.dispatch('messenger_broadcast', ['error', 'Unauthorized.'])
                })
            }, 1000)
        },
        computed: {
            ...mapGetters([
                'app_name'
            ])
        },
    }
</script>
<style scoped>
    #login {
        border-radius: 5px;
    }
</style>