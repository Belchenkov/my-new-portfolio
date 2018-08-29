<template>
    <v-flex>
        <v-navigation-drawer
                :clipped="$vuetify.breakpoint.lgAndUp"
                v-model="drawer"
                fixed
                app
        >
            <v-list dense>
                <template v-for="item in items">
                    <v-layout
                            v-if="item.heading"
                            :key="item.heading"
                            row
                            align-center
                    >
                    </v-layout>
                    <v-list-tile v-else :key="item.text" @click="go(item.url)">
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>
                                {{ item.text }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </template>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar
                :clipped-left="$vuetify.breakpoint.lgAndUp"
                color="green darken-3"
                dark
                app
                fixed
                class="elevation-11"
        >
            <v-toolbar-title
                    style="width: 700px"
                    class="ml-0 pl-3"
            >
                <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                <span class="hidden-sm-and-down">Панель администратора</span>
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn icon>
                <v-icon>home</v-icon>
            </v-btn>
            <v-btn icon>
                <v-icon>notifications</v-icon>
            </v-btn>
        </v-toolbar>
    </v-flex>
</template>

<script>
    export default {
        data: () => ({
            dialog: false,
            drawer: null,
            items: [
                { icon: 'playlist_add', text: 'Категории', url: '/admin/categories' },
                { icon: 'note_add', text: 'Работы', url: '/admin/works' },
            ]
        }),
        props: {
            source: String
        },
        methods: {
            go(url) {
                document.location.href = url;
            }
        }
    }
</script>

<style scoped>

</style>