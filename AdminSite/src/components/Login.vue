<template>
    <v-layout align-center justify-center>
        <v-flex md6>
            <v-card id="login">
                <v-card-media src="static/img/city-at-night.jpg" height="200px">
                </v-card-media>
                <v-card-title primary-title>
                    <div>
                        <h3 class="headline">Room Service Administration</h3>
                        <span class="subheader">Please log-in to continue.</span>
                    </div>
                </v-card-title>
                <v-card-text>
                    <v-text-field
                            v-model="username"
                            box
                            label="E-mail Address"
                    ></v-text-field>
                    <v-text-field
                            v-model="password"
                            box
                            label="Password"
                            type="password"
                    ></v-text-field>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" @click.native="login">Submit</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>
    </v-layout>
</template>
<script>
    export default {
        name: "login",
        data() {
            return {
                username: '',
                password: ''
            }
        },
        methods: {
            login() {
                const data = new FormData()
                data.append('client_id', 2)
                data.append('client_secret', 'oOqNudYy72K0Rvng4ClpUa2DEHr3Lj4sSDxTqKl5')
                data.append('grant_type', 'password')
                data.append('username', this.username)
                data.append('password', this.password)
                data.append('secret', '')

                this.$axios.post('/oauth/token', data).then((r) => {
                    this.$auth.setToken(r.data.access_token, r.data.expires_in)
                    this.$router.push('/')
                }).catch((e) => {
                    console.log(e)
                    alert('Invalid Credentials.')
                })
            }
        }
    }
</script>
<style scoped>
    #login {
        border-radius: 5px;
    }
</style>