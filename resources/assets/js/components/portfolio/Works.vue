<template>
    <v-flex class="works" xs12>
        <v-flex class="works__header" xs12>Мои работы</v-flex>
        <v-flex class="works__skills" xs12>
            <a href="#">HTML</a>
            <a href="#">CSS</a>
            <a href="#">Bootstrap</a>
            <a href="#">Foundation</a>
        </v-flex>
        <v-flex class="works__work" xs12>
            <v-flex
                    v-for="work in works"
                    class="works__work"
                    :key="work.id"
                    mb-4
            >
                <!--<v-card class="work__card">
                    <img :src="work.img" alt="">
                    <v-flex class="work__btn">
                        <v-btn dark color="black">
                            <i class="fab fa-github mr-2"></i> GitHub
                        </v-btn>
                        <v-btn dark color="green">
                            <i class="fas fa-desktop mr-2"></i> Demo
                        </v-btn>
                    </v-flex>
                </v-card>-->
                <v-card class="work__card elevation-12">
                    <v-img
                            :src="work.img"
                            height="400px"
                    >
                        <v-container
                                fill-height
                                fluid
                                pa-2
                        >
                            <v-layout fill-height>
                                <v-flex xs12 align-end flexbox>
                                    <span class="headline text--black" v-text="work.name"></span>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-img>

                    <v-slide-y-transition>
                        <v-card-text>
                            I'm a thing. But, like most politicians.
                            I'm a thing. But, like most politicians.
                            I'm a thing. But, like most politicians.
                            I'm a thing. But, like most politicians.
                            I'm a thing. But, like most politicians.
                        </v-card-text>
                    </v-slide-y-transition>

                    <v-card-actions class="pt-3">
                        <a href="https://github.com/Belchenkov" title="GitHub" target="_blank">
                            <v-btn fab dark>
                                <i class="fab fa-github" style="font-size:20px"></i>
                            </v-btn>
                        </a>
                        <v-spacer></v-spacer>
                        <a href="https://github.com/Belchenkov" title="Demo" target="_blank">
                            <v-btn fab dark color="cyan darken-3">
                                <i class="fas fa-desktop" style="font-size:20px"></i>
                            </v-btn>
                        </a>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-flex>
    </v-flex>
</template>

<script>
    export default {
        data () {
            return {
                show: false,
                works: [
                    {
                        id: 1,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },
                    {
                        id: 2,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },
                    {
                        id: 3,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },
                    {
                        id: 4,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },
                    {
                        id: 5,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },
                    {
                        id: 6,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },
                    {
                        id: 7,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },
                    {
                        id: 8,
                        name: 'Eventide',
                        img: 'http://185.228.232.41/digital-ocean/portfolio/img/Eventide.png'
                    },

                ]
            }
        }
    }
</script>

<style scoped>

</style>