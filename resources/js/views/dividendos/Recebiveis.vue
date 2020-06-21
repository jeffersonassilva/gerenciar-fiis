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
                class="elevation-1"
                @click:row="handleClick"
        >
            <template v-slot:item="row">
                <tr>
                    <td>{{row.item.co_sigla}}</td>
                    <td>{{row.item.dt_pagamento}}</td>
                    <td>{{row.item.nr_cotas}}</td>
                    <td>{{row.item.vl_recebido}}</td>
                    <td align="center">
                        <v-btn class="mx-2" fab outlined x-small color="teal" @click="confirmar(row.item)">
                            <v-icon dark>mdi-check</v-icon>
                        </v-btn>
                        <v-btn class="mx-2" fab outlined x-small color="error" @click="recusar(row.item)">
                            <v-icon dark>mdi-close</v-icon>
                        </v-btn>
                    </td>
                </tr>
            </template>
        </v-data-table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: this.$route.meta.title || '',
                data: [],
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
            confirmar(item) {
                console.log(item);
            },
            recusar(item) {
                console.log(item);
            },
        }
    }
</script>
