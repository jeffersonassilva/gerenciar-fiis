<template>
    <div class="container">
        <v-card color="grey lighten-4" flat>
            <v-toolbar color="default" class="elevation-0 mb-4" :dark="false">
                <v-toolbar-title class="primary--text">Adicionar Cota</v-toolbar-title>
            </v-toolbar>
        </v-card>
        <ValidationObserver ref="observer" v-slot="{ validate, reset }">
            <form>
                <ValidationProvider v-slot="{ errors }" name="Quantidade de cotas" rules="required|max:10">
                    <v-text-field
                            v-model="form.nr_cotas"
                            v-mask="'#####'"
                            :counter="5"
                            :error-messages="errors"
                            label="Quantidade de cotas"
                            required
                    ></v-text-field>
                </ValidationProvider>
                <ValidationProvider v-slot="{ errors }" name="Valor por cota" rules="required">
                    <v-text-field
                            v-model.lazy="form.vl_cota"
                            v-money="money"
                            maxlength="13"
                            :error-messages="errors"
                            label="Valor por cota"
                            required
                    ></v-text-field>
                </ValidationProvider>
                <ValidationProvider v-slot="{ errors }" name="Data da compra" rules="required">
                    <v-text-field
                            v-model="form.dt_compra"
                            v-mask="'##/##/####'"
                            :error-messages="errors"
                            label="Data da compra"
                            required
                    ></v-text-field>
                </ValidationProvider>
                <ValidationProvider v-slot="{ errors }" name="Código do Fii" rules="required">
                    <v-select
                            v-model="form.cd_fii"
                            :hint="`${fiis.co_sigla}, ${fiis.id}`"
                            :items="fiis"
                            item-text="co_sigla"
                            item-value="id"
                            :error-messages="errors"
                            label="Fii"
                            data-vv-name="Fii"
                            required
                    ></v-select>
                </ValidationProvider>
                <ValidationProvider v-slot="{ errors, valid }" name="Indicador de subscrição">
                    <v-checkbox
                            v-model="form.ic_subscricao"
                            :error-messages="errors"
                            value="1"
                            label="É subscrição?"
                            type="checkbox"
                    ></v-checkbox>
                </ValidationProvider>

                <v-btn class="mr-4 primary" @click="submit">Salvar</v-btn>
                <v-btn class="mr-4" @click="clear">Limpar</v-btn>
                <v-btn @click="cancelar">Cancelar</v-btn>
            </form>
        </ValidationObserver>
    </div>
</template>

<script>
    import {required, max} from 'vee-validate/dist/rules'
    import {extend, ValidationObserver, ValidationProvider, setInteractionMode} from 'vee-validate'

    setInteractionMode('eager');

    extend('required', {
        ...required,
        message: '{_field_} é obrigatório.',
    });

    extend('max', {
        ...max,
        message: '{_field_} não pode ter mais do que {length} caracteres.',
    });

    export default {
        components: {
            ValidationProvider,
            ValidationObserver,
        },
        data() {
            this.setDataForm();
            return {
                fiis: [],
                money: {
                    decimal: ',',
                    thousands: '.',
                    prefix: 'R$ ',
                    precision: 2,
                    masked: false,
                }
            }
        },
        mounted() {
            this.getAllFiis();
        },
        methods: {
            getAllFiis() {
                axios.get('/api/fiis?pagination=false').then(response => {
                    this.fiis = response.data.data;
                }).then(() => {
                    this.visible = true;
                })
            },
            setDataForm() {
                this.form = {
                    nr_cotas: null,
                    vl_cota: null,
                    dt_compra: null,
                    cd_fii: null,
                    ic_subscricao: 0,
                };
            },
            submit() {
                this.$refs.observer.validate().then((valid) => {
                    if (valid) {
                        this.adicionar();
                    }
                });
            },
            clear() {
                this.setDataForm();
                this.$refs.observer.reset()
            },
            adicionar() {
                axios.post('/api/cotas', this.form).then(response => {
                    this.$router.push('/cotas');
                });
            },
            cancelar() {
                this.$router.push('/cotas');
            }
        },
    }
</script>