<template>
    <v-layout row>
        <v-snackbar
                v-model="snackbar"
                :right=true
                :timeout=6000
                :top=true
        >
            {{ textSnackbar }}
            <v-btn
                    color="pink"
                    flat
                    @click="snackbar = false"
            >
                Close
            </v-btn>
        </v-snackbar>
        <v-flex xs12 sm9 offset-sm2>
            <v-card>
                <v-toolbar color="green darken-3" dark>
                    <v-toolbar-side-icon></v-toolbar-side-icon>
                    <v-toolbar-title>Работы</v-toolbar-title>
                </v-toolbar>

                <v-list three-line>
                    <template v-for="(work, index) in works">
                        <v-divider
                                :key="index"
                        ></v-divider>

                        <v-subheader
                                v-if="work.title"
                                :key="work.id"
                        >
                            {{ work.title }}
                        </v-subheader>

                        <v-list-tile>
                            <v-list-tile-avatar>
                                <img :src="work.img">
                            </v-list-tile-avatar>

                            <v-list-tile-content>
                                <v-list-tile-title>{{ work.desc }}</v-list-tile-title>
                                <v-list-tile-sub-title>
                                    <strong>GitHub:</strong> <a :href="work.github_link">{{work.github_link}}</a>
                                </v-list-tile-sub-title>
                                <v-list-tile-sub-title>
                                    <strong>Demo:</strong>  <a :href="work.preview_link">{{work.preview_link}}</a>
                                </v-list-tile-sub-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </template>
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
                    Добавить работу
                </v-card-title>
                <v-container grid-list-sm class="pa-4">
                    <v-layout row wrap>
                        <v-flex xs12 align-center justify-space-between>
                            <v-layout align-center>
                                <v-text-field
                                        placeholder="Заголовок"
                                        color="success"
                                        v-model="title"
                                ></v-text-field>
                            </v-layout>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field
                                    type="text"
                                    placeholder="Скриншот работы"
                                    color="success"
                                    v-model="img"
                                    @click="clickImg"
                            ></v-text-field>
                            <input
                                    type="file"
                                    ref="img"
                                    style="display: none"
                                    @change="onFileSelected"
                            >
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field
                                    color="success"
                                    placeholder="Ссылка на репозиторий"
                                    v-model="repositoryLink"
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field
                                    type="text"
                                    color="success"
                                    placeholder="Ссылка на демонстрацию"
                                    v-model="demoLink"
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <label>Категория</label>
                            <v-autocomplete
                                    autocomplete
                                    :items="categories"
                                    v-model="category"
                                    item-text="name"
                                    item-value="id"
                                    color="success"
                                    clearable
                            ></v-autocomplete>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field
                                    type="text"
                                    color="success"
                                    multi-line
                                    placeholder="Краткое описание"
                                    v-model="desc"
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-checkbox
                                    v-model="isVisible"
                                    label="Показывать работу"
                                    color="success"
                            ></v-checkbox>
                        </v-flex>
                    </v-layout>
                </v-container>
                <v-card-actions>
                    <v-btn color="red lighten-3" dark @click="dialog = false">Cancel</v-btn>
                    <v-spacer></v-spacer>
                    <v-btn @click="saveWork" dark color="primary">Добавить</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-layout>
</template>

<script>
    export default {
        props: {
            categories: Array,
            works: Array
        },
        data () {
            return {
                dialog: false,
                snackbar: false,
                textSnackbar: '',
                title: '',
                desc: '',
                demoLink: '',
                img: '',
                category: '',
                repositoryLink: '',
                isVisible: true,
            }
        },
        methods: {
            // Имитация клика на img
            clickImg () {
                console.log(this.$refs.img.click());
            },
            // Загрузка скриншота
            onFileSelected (event) {
                this.img = event.target.files[0];
            },
            // Сохранение работы
            saveWork () {
                this.dialog = false;
                const fd = new FormData();
                fd.append('img', this.img);
                fd.append('title', this.title);
                fd.append('desc', this.desc);
                fd.append('demoLink', this.demoLink);
                fd.append('category', this.category);
                fd.append('repositoryLink', this.repositoryLink);
                fd.append('isVisible', this.isVisible ? 1 : 0);

                axios.post('api/save-work', fd)
                    .then(res => {
                        this.clearForm();
                        this.textSnackbar = 'Работа добавлена!';
                        this.snackbar = true;
                        console.log(res);
                    })
                    .catch(error => console.log(error))
            },
            // Очистка формы
            clearForm () {
                this.title = '';
                this.desc = '';
                this.demoLink = '';
                this.img = '';
                this.category = '';
                this.repositoryLink = '';
                this.isVisible = false;
            }


        }
    }
</script>

<style scoped>

</style>