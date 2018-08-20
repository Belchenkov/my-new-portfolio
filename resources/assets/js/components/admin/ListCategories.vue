<template>
    <v-flex xs12 p-4>
        <v-card>
                    <v-toolbar color="green darken-3" dark>
                        <v-toolbar-side-icon></v-toolbar-side-icon>
                        <v-toolbar-title>
                           Категории
                        </v-toolbar-title>
                        <v-spacer></v-spacer>
                    </v-toolbar>

                    <v-list>
                        <v-list-group
                                v-for="item in items"
                                v-model="item.active"
                                :key="item.title"
                                :prepend-icon="item.action"
                                no-action
                        >
                            <v-list-tile slot="activator">
                                <v-list-tile-content>
                                    <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>

                            <v-list-tile
                                    v-for="subItem in item.items"
                                    :key="subItem.title"
                                    @click=""
                            >
                                <v-list-tile-content>
                                    <v-list-tile-title>{{ subItem.title }}</v-list-tile-title>
                                </v-list-tile-content>

                                <v-list-tile-action>
                                    <v-icon>{{ subItem.action }}</v-icon>
                                </v-list-tile-action>
                            </v-list-tile>
                        </v-list-group>
                    </v-list>
                </v-card>
    </v-flex>

</template>

<script>
    export default {
        props: {
            categories: Array
        },
        data () {
            return {
                //items: this.categories,
                items: [
                    {
                        action: 'local_activity',
                        title: 'Attractions',
                        items: [
                            {
                                action: 'local_activity',
                                title: 'Angular'
                            }
                        ]
                    },
                    {
                        action: 'restaurant',
                        title: 'Dining',
                        active: true,
                        items: [
                            { title: 'Breakfast & brunch' },
                            { title: 'New American' },
                            { title: 'Sushi' }
                        ]
                    },
                    {
                        action: 'school',
                        title: 'Education',
                        items: [
                            { title: 'List Item' }
                        ]
                    },
                    {
                        action: 'directions_run',
                        title: 'Family',
                        items: [
                            { title: 'List Item' }
                        ]
                    },
                    {
                        action: 'healing',
                        title: 'Health',
                        items: [
                            { title: 'List Item' }
                        ]
                    },
                    {
                        action: 'content_cut',
                        title: 'Office',
                        items: [
                            { title: 'List Item' }
                        ]
                    },
                    {
                        action: 'local_offer',
                        title: 'Promotions',
                        items: [
                            { title: 'List Item' }
                        ]
                    }
                ]
            }
        }
    }
</script>

<style scoped>

</style>