<template>
    <div class="container">
        <v-card color="grey lighten-4" flat>
            <v-toolbar color="default" class="elevation-0 mb-4" :dark="false">
                <v-toolbar-title class="primary--text">Recebíveis</v-toolbar-title>
            </v-toolbar>
        </v-card>
        <v-data-table
                item-key="id_pagamento"
                :headers="headers"
                :items="data"
                :hide-default-footer=true
                :disable-pagination=true
                no-data-text="Nenhum registro encontrado"
                class="elevation-1">
            <template v-slot:item="row">
                <tr>
                    <td>{{row.item.co_sigla}}</td>
                    <td>{{row.item.dt_pagamento}}</td>
                    <td>{{row.item.nr_cotas}}</td>
                    <td>R$ {{row.item.vl_recebido}}</td>
                    <td align="center">
                        <v-btn class="mx-2" fab outlined x-small color="teal" @click="confirmar(row.item)">
                            <v-icon dark>mdi-check</v-icon>
                        </v-btn>
                        <v-btn class="mx-2" fab outlined x-small color="blue" @click="editar(row.item)">
                            <v-icon dark>mdi-pencil</v-icon>
                        </v-btn>
                    </td>
                </tr>
            </template>
        </v-data-table>

        <v-row justify="center">
            <v-dialog v-model="dialog" persistent max-width="400px">
                <ValidationObserver ref="observer" v-slot="{ validate, reset }">
                    <form>
                        <v-card>
                            <v-card-title>
                                <span class="headline">Editar Rendimento</span>
                            </v-card-title>
                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12">
                                            <ValidationProvider v-slot="{ errors }" name="Nº Cotas" rules="required">
                                                <v-text-field
                                                        v-model="objEditado.nr_cotas"
                                                        v-mask="'#####'"
                                                        :counter="5"
                                                        :error-messages="errors"
                                                        label="Quantidade de cotas"
                                                        required
                                                ></v-text-field>
                                            </ValidationProvider>
                                        </v-col>
                                        <v-col cols="12">
                                            <ValidationProvider v-slot="{ errors }" name="Valor do dividendo"
                                                                rules="required">
                                                <v-text-field
                                                        v-model.lazy="objEditado.vl_recebido"
                                                        v-money="money"
                                                        maxlength="13"
                                                        :error-messages="errors"
                                                        label="Valor do dividendo"
                                                        required
                                                ></v-text-field>
                                            </ValidationProvider>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>
                            <v-divider></v-divider>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn class="mr-4 primary" @click="salvar">Salvar</v-btn>
                                <v-btn color="primary" outlined @click="cancelar">Cancelar</v-btn>
                            </v-card-actions>
                        </v-card>
                    </form>
                </ValidationObserver>
            </v-dialog>
        </v-row>
    </div>
</template>

<style type="text/css">
    .v-card__text {
        padding-bottom: 0px !important;
    }
</style>

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
            return {
                title: this.$route.meta.title || '',
                data: [],
                dialog: false,
                objAntigo: {},
                objEditado: {
                    nr_cotas: null,
                    vl_recebido: null,
                },
                money: {
                    decimal: ',',
                    thousands: '.',
                    prefix: 'R$ ',
                    precision: 2,
                    masked: false,
                },
                headers: [
                    {text: 'Sigla', value: 'co_sigla', sortable: false},
                    {text: 'Dt. Pagamento', value: 'dt_pagamento', sortable: false},
                    {text: 'Nº de Cotas', value: 'nr_cotas', sortable: false},
                    {text: 'Vl. a Receber', value: 'vl_recebido', sortable: false},
                    {text: 'Ações', value: '', sortable: false, 'align': 'center'},
                ],
            }
        },
        mounted() {
            this.getAll();
        },
        methods: {
            getAll(filtro = '') {
                axios.get('/api/recebiveis' + filtro).then(response => {
                    this.pagination = response.data.data;
                    this.data = response.data.data;
                }).then(() => {
                    this.visible = true;
                })
            },
            addRendimento(item) {
                axios.post('/api/rendimentos', item)
                    .then(() => this.getAll())
                    .catch(() => {});
            },
            confirmar(item) {
                item.cd_usuario = this.$userId;
                this.addRendimento(item);
            },
            editar(item) {
                this.dialog = true;
                this.objAntigo = item;
                this.objEditado = Object.assign({}, item);
            },
            cancelar() {
                this.$refs.observer.reset();
                this.dialog = false;
            },
            salvar() {
                this.$refs.observer.validate().then((valid) => {
                    if (valid) {
                        this.objEditado.cd_usuario = this.$userId;
                        this.addRendimento(this.objEditado);
                        this.getAll();
                        this.dialog = false;
                    }
                });
            }
        }
    }
</script>
