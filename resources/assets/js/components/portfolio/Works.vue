<template>
    <v-flex class="works" xs12>
        <v-flex class="works__header" xs12>Мои работы</v-flex>
        <v-flex
            v-for="category in works"
            :key="category.id"
            mb-4
        >
            <v-flex class="works__skills" xs12>
                <a
                    href="#"
                    v-for="childCategory in category.get_child_category"
                    :key="childCategory.id"
                >{{ childCategory.name }}</a>
            </v-flex>
            <v-flex class="works__work" xs12>
                <v-flex
                        v-for="work in category.works"
                        class="works__work"
                        :key="work.id"
                        mb-4
                >
                    <v-card class="work__card elevation-12">
                        <v-img
                                :src="work.img"
                                height="250px"
                        >
                            <v-container fill-height fluid pa-2>
                                <v-layout fill-height>
                                    <v-flex xs12 align-end flexbox>
                                        <span id="title" class="headline title" v-text="work.title"></span>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-img>

                        <v-slide-y-transition>
                            <v-card-text class="work__desc">
                                {{work.desc}}
                            </v-card-text>
                        </v-slide-y-transition>

                        <v-card-actions class="pt-3 work__links">
                            <a :href="work.github_link" title="GitHub" target="_blank">
                                <v-btn fab dark>
                                    <i class="fab fa-github"></i>
                                </v-btn>
                            </a>
                            <v-spacer></v-spacer>
                            <a :href="work.preview_link" title="Demo" target="_blank">
                                <v-btn fab dark color="cyan darken-3">
                                    <i class="fas fa-desktop"></i>
                                </v-btn>
                            </a>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-flex>
        </v-flex>
    </v-flex>
</template>

<script>
    export default {
        props: {
            works: Array
        },
        data () {
            return {
                show: false
            }
        }
    }
</script>

<style scoped>

</style>