<template>
    <v-app dark>
        <template v-if="!$route.meta.public">
            <v-navigation-drawer fixed clipped v-model="drawer" app>
                <v-list>
                    <v-list-tile value="true" v-for="(item, i) in items" :key="i" exact>
                        <v-list-tile-action>
                            <v-icon v-html="item.icon"></v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title class="links">
                                <router-link :to="item.href">{{item.title}}</router-link>
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-navigation-drawer>
            <v-toolbar fixed app clipped-left>
                <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                <v-toolbar-title v-text="app_name" class="title"></v-toolbar-title>
            </v-toolbar>
        </template>
        <v-content>
            <v-container fluid>
                <v-slide-y-transition mode="out-in">
                    <router-view v-cloak></router-view>
                </v-slide-y-transition>
            </v-container>
            <messenger></messenger>
        </v-content>
        <v-footer app v-if="!$route.meta.public">
            <span>{{ app_name }} &copy; {{year}}</span>
            <v-spacer></v-spacer>
            <a @click="logout">Log Out</a>
        </v-footer>
    </v-app>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        data() {
            return {
                drawer: true,
                items: [
                    {
                        icon: 'dashboard',
                        title: 'Dashboard',
                        href: '/'
                    },
                    {
                        icon: 'view_list',
                        title: 'Inventory',
                        href: '/inventory'
                    },
                    {
                        icon: 'domain',
                        title: 'Distribution',
                        href: '/'
                    }
                ]
            }
        },
        computed: {
            year: () => (new Date()).getFullYear(),
            ...mapGetters([
                'app_name'
            ])
        },
        methods: {
            logout() {
                this.$auth.destroyToken()
                this.$router.push('/login')
            }
        }
    }
</script>
