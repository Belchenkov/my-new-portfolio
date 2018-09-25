<template>
    <v-layout row>
        <v-flex xs12 sm9 offset-sm2>
            <v-card>
                <v-toolbar color="green darken-3" dark>
                    <v-toolbar-side-icon></v-toolbar-side-icon>

                    <v-toolbar-title>Категории</v-toolbar-title>

                    <v-spacer></v-spacer>

                    <v-btn icon>
                        <v-icon>more_vert</v-icon>
                    </v-btn>
                </v-toolbar>

                <v-list>
                    <v-list-group
                            v-for="item in items"
                            v-model="item.alias"
                            :key="item.id"
                            no-action
                    >
                        <v-list-tile slot="activator">
                            <img class="mr-2" :src="item.icon">
                            <v-list-tile-content>
                                <v-list-tile-title>{{ item.name }}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>

                        <v-list-tile
                                v-for="subItem in item.get_child_category"
                                :key="subItem.id"
                                @click=""
                        >
                            <v-list-tile-content>
                                <v-list-tile-title>
                                    <v-icon>subdirectory_arrow_right</v-icon>  {{ subItem.name }}
                                </v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list-group>
                </v-list>
            </v-card>
        </v-flex>

        <!-- Modal -->
        <v-btn
                fab
                bottom
                right
                color="success"
                dark
                fixed
                @click.stop="dialog = !dialog"
        >
            <v-icon>add</v-icon>
        </v-btn>

        <v-dialog v-model="dialog" width="800px">
            <v-card>
                <v-card-title class="green darken-3 py-4 title white--text">
                    Добавить категорию
                </v-card-title>
                <v-container grid-list-sm class="pa-4">
                    <v-layout row wrap>
                        <v-flex xs12 align-center justify-space-between>
                            <v-layout align-center>
                                <v-text-field
                                        placeholder="Название"
                                        color="success"
                                        v-model="categoryName"
                                ></v-text-field>
                            </v-layout>
                        </v-flex>
                        <v-flex xs6>
                            <v-text-field
                                    placeholder="Псевдоним"
                                    color="success"
                                    v-model="aliasCategory"
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs6>
                            <v-text-field
                                    color="success"
                                    placeholder="Иконка"
                                    v-model="iconCategory"
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <label>Родительская категория</label>
                            <v-autocomplete
                                    autocomplete
                                    :items="categories"
                                    v-model="parentCategory"
                                    item-text="name"
                                    item-value="id"
                                    color="green"
                                    clearable
                            ></v-autocomplete>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field
                                    type="tel"
                                    prepend-icon="phone"
                                    placeholder="(000) 000 - 0000"
                                    mask="phone"
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field
                                    prepend-icon="notes"
                                    placeholder="Notes"
                            ></v-text-field>
                        </v-flex>
                    </v-layout>
                </v-container>
                <v-card-actions>
                    <v-btn color="primary" @click="dialog = false">Cancel</v-btn>
                    <v-spacer></v-spacer>
                    <v-btn @click="dialog = false">Добавить</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

    </v-layout>


</template>

<script>
    export default {
        props: {
            categories: Array
        },
        data () {
            return {
                items: this.categories,
                dialog: false,
                categoryName: '',
                aliasCategory: '',
                iconCategory: '',
                parentCategory: '',
            }
        }
    }
</script>

<style scoped>
    .mt-100 {
        margin-top: 100px;
    }
</style>