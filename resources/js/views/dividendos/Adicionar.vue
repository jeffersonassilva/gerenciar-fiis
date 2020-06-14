<template>
    <div class="container">
        <v-card color="grey lighten-4" flat>
            <v-toolbar color="default" class="elevation-0 mb-4" :dark="false">
                <v-toolbar-title class="primary--text">Adicionar Dividendo</v-toolbar-title>
            </v-toolbar>
        </v-card>
        <ValidationObserver ref="observer" v-slot="{ validate, reset }">
            <form>
                <ValidationProvider v-slot="{ errors }" name="Valor do dividendo" rules="required">
                    <v-text-field
                            v-model.lazy="form.vl_dividendo"
                            v-money="money"
                            maxlength="13"
                            :error-messages="errors"
                            label="Valor do dividendo"
                            required
                    ></v-text-field>
                </ValidationProvider>
                <ValidationProvider v-slot="{ errors }" name="Data do pagamento" rules="required">
                    <v-text-field
                            v-model="form.dt_pagamento"
                            v-mask="'##/##/####'"
                            :error-messages="errors"
                            label="Data do pagamento"
                            required
                    ></v-text-field>
                </ValidationProvider>
                <ValidationProvider v-slot="{ errors }" name="Data do fechamento" rules="required">
                    <v-text-field
                            v-model="form.dt_fechamento"
                            v-mask="'##/##/####'"
                            :error-messages="errors"
                            label="Data do fechamento"
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
                <!--<ValidationProvider v-slot="{ errors, valid }" name="Indicador de pagamento">-->
                    <!--<v-checkbox-->
                            <!--v-model="form.ic_subscricao"-->
                            <!--:error-messages="errors"-->
                            <!--value="1"-->
                            <!--label="É subscrição?"-->
                            <!--type="checkbox"-->
                    <!--&gt;</v-checkbox>-->
                <!--</ValidationProvider>-->

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
                    vl_dividendo: null,
                    dt_pagamento: null,
                    dt_fechamento: null,
                    // ic_pagamento: 0,
                    cd_fii: null,
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
                axios.post('/api/dividendos', this.form).then(response => {
                    this.$router.push('/dividendos');
                });
            },
            cancelar() {
                this.$router.push('/dividendos');
            }
        },
    }
</script>