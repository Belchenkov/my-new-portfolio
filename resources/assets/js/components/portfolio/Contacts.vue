<template>
    <v-flex class="contacts" xs12>
        <v-card flat>
            <v-snackbar
                    v-model="snackbar"
                    absolute
                    top
                    right
                    color="success"
            >
                <span>Ваше письмо отправлено!</span>
                <v-icon dark>check_circle</v-icon>
            </v-snackbar>
        </v-card>

        <v-flex class="contacts__header">
            <h2>Связаться со мной</h2>
        </v-flex>
        <v-flex class="contacts__sub-header">
            <p>Заинтересованы в создании проекта?</p>
            <p>Просто заполните форму обратной связи.</p>
        </v-flex>

        <v-flex xs8 mx-auto>
            <v-form
                class="contacts__form"
                ref="form"
                v-model="valid"
                @submit.prevent="submit"
                lazy-validation
            >
                <v-container grid-list-xl fluid>
                    <v-layout wrap>
                        <v-flex xs12 sm6>
                            <v-text-field
                                    v-model="form.name"
                                    color="success"
                                    prepend-icon="person"
                                    label="Ваше имя"
                                    :rules="rules.nameRules"
                                    required
                                    clearable
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <v-text-field
                                    prepend-icon="email"
                                    v-model="form.email"
                                    color="success"
                                    :rules="rules.emailRules"
                                    label="Ваша почта"
                                    required
                                    clearable
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-textarea
                                    v-model="form.message"
                                    color="success"
                                    clearable
                                    prepend-icon="comment"
                            >
                                <div slot="label">
                                    Ваше сообщение
                                </div>
                            </v-textarea>
                        </v-flex>
                    </v-layout>
                </v-container>
                <v-card-actions>
                    <v-btn
                        color="success"
                        class="mx-auto"
                        type="submit"
                        :disabled="!valid"
                    >
                        <i class="fab fa-telegram-plane mr-1"></i> Отправить
                    </v-btn>
                </v-card-actions>
            </v-form>
        </v-flex>
    </v-flex>
</template>

<script>
    export default {
        data () {
            return {
                form: {
                    name: '',
                    email: '',
                    message: ''
                },
                snackbar: false,
                valid: false,
                rules: {
                    nameRules: [
                        v => !!v || 'Представьтесь пожалуйста!'
                    ],
                    emailRules: [
                        v => !!v || 'Как я с Вами свяжусь?',
                        v => /.+@.+/.test(v) || 'Думаю Вы где-то ошиблись!'
                    ]
                }
            }
        },
        methods: {
            // Отправляем письмо
            submit () {
                if (this.$refs.form.validate()) {

                    axios.post('/send-message', this.form)
                        .then(res => {
                            console.log(res);
                            this.snackbar = true;
                            this.$refs.form.reset()
                        })
                        .catch(error => console.error(error));
                }
            }
        }
    }
</script>

<style scoped>

</style>