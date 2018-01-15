<template>
    <v-app dark>
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
            <v-toolbar-title v-text="title" class="title"></v-toolbar-title>
        </v-toolbar>
        <v-content>
            <v-container fluid>
                <v-slide-y-transition mode="out-in">
                    <router-view></router-view>
                </v-slide-y-transition>
            </v-container>
        </v-content>
        <v-footer app>
            <span>Room Service &copy; {{year}}</span>
            <v-spacer></v-spacer>
            <span>Support</span>
        </v-footer>
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
                drawer: true,
                items: [
                    {
                        icon: 'bubble_chart',
                        title: 'Dashboard',
                        href: '/'
                    },
                    {
                        icon: 'view_list',
                        title: 'Inventory',
                        href: '/inventory'
                    }
                ],
                title: 'Room Service Admin'
            }
        },
        computed: {
            year: () => (new Date()).getFullYear()
        }
    }
</script>
