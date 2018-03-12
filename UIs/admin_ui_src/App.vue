<template>
    <v-app dark toolbar>
        <template v-if="!$route.meta.public">
            <v-navigation-drawer fixed clipped v-model="drawer" app>
                <template v-for="item in menu">
                    <h3 class="ml-3 mt-3">{{item.title}}</h3>
                    <v-divider></v-divider>
                    <v-list>
                        <v-list-tile v-for="(link, i) in item.links" :key="i" @click="$router.push(link.href)">
                            <v-list-tile-action>
                                <v-icon color="primary" v-html="link.icon"></v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title class="links">
                                    <span>{{link.title}}</span>
                                </v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list>
                </template>
            </v-navigation-drawer>
            <v-toolbar fixed app clipped-left>
                <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                <v-toolbar-title v-text="app_name" class="title site-title"></v-toolbar-title>
                <v-spacer/>
                <v-menu bottom offset-y>
                    <v-btn flat slot="activator">{{ vendor.title }}</v-btn>
                    <v-list>
                        <v-list-tile @click="logout">
                            <v-list-tile-title>Log Out</v-list-tile-title>
                        </v-list-tile>
                    </v-list>
                </v-menu>
            </v-toolbar>
        </template>
        <v-content>
            <v-container fluid>
                <v-slide-y-transition mode="out-in">
                    <router-view v-cloak></router-view>
                </v-slide-y-transition>
                <messenger></messenger>
            </v-container>
        </v-content>
        <v-footer app v-if="!$route.meta.public" class="px-2">
            <span>{{ app_name }} &copy; {{year}}</span>
            <v-spacer></v-spacer>
            <span class="caption">{{ vendor.title }} - {{ vendor.phone }} - {{ vendor.email }}</span>
        </v-footer>
    </v-app>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        data() {
            return {
                drawer: true,
                menu: [
                    {
                        title: 'Quick Links',
                        links: [
                            {
                                icon: 'dashboard',
                                title: 'Dashboard',
                                href: '/'
                            }
                        ]
                    },
                    {
                        title: 'Assets',
                        links: [
                            {
                                icon: 'domain',
                                title: 'Distribution',
                                href: '/'
                            },
                            {
                                icon: 'view_list',
                                title: 'Inventory',
                                href: '/inventory'
                            }
                        ]
                    },
                    {
                        title: 'Logistics',
                        links: [
                            {
                                icon: 'mdi-store',
                                title: 'Hives',
                                href: '/'
                            },
                            {
                                icon: 'mdi-road-variant',
                                title: 'Drivers',
                                href: '/'
                            }
                        ]
                    },
                    {
                        title: 'Marketing',
                        links: [
                            {
                                icon: 'mdi-book-open-page-variant',
                                title: 'Blog',
                                href: '/'
                            },
                            {
                                icon: 'mdi-contact-mail',
                                title: 'Newsletter',
                                href: '/'
                            }
                        ]
                    },
                    {
                        title: 'Accounting',
                        links: [
                            {
                                icon: 'mdi-cart',
                                title: 'Orders',
                                href: '/'
                            }
                        ]
                    },
                    {
                        title: 'Settings',
                        links: [
                            {
                                icon: 'settings',
                                title: 'General',
                                href: '/'
                            },
                            {
                                icon: 'mdi-shape-outline',
                                title: 'e-Commerce',
                                href: '/'
                            }
                        ]
                    },
                    {
                        title: 'Support',
                        links: [
                            {
                                icon: 'mdi-phone-incoming',
                                title: 'Tickets',
                                href: '/'
                            }
                        ]
                    }
                ]
            }
        },
        computed: {
            year: () => (new Date()).getFullYear(),
            ...mapGetters([
                'app_name',
                'vendor'
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
