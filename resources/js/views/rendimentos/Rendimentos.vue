<template>
    <div class="container">
        <v-card color="grey lighten-4" flat>
            <v-toolbar color="default" class="elevation-0 mb-4" :dark="false">
                <v-toolbar-title class="primary--text">Rendimentos</v-toolbar-title>
            </v-toolbar>
        </v-card>

        <v-data-table
                :headers="headers"
                :items="data.data"
                :items-per-page="data.per_page"
                :hide-default-footer=true
                class="elevation-1"
        ></v-data-table>

        <div class="text-center mt-5">
            <v-pagination
                    v-model="data.current_page"
                    :length="data.last_page"
                    :circle=true
                    :total-visible="7"
                    color="primary"
                    @input="onPageChange"
            ></v-pagination>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: this.$route.meta.title || '',
                data: [],
                headers: [
                    {text: 'Sigla', value: 'fii.co_sigla', sortable: false},
                    {text: 'Dt. Pagamento', value: 'dt_pagamento', sortable: false},
                    {text: 'Nº de Cotas', value: 'nr_cotas', sortable: false},
                    {text: 'Rendimento', value: 'vl_rendimento', sortable: false},
                ],
            }
        },
        mounted() {
            this.getAll();
        },
        methods: {
            getAll(filtro = '') {
                axios.get('/api/rendimentos' + filtro).then(response => {
                    this.pagination = response.data.data;
                    this.data = response.data.data;
                }).then(() => {
                    this.visible = true;
                })
            },
            onPageChange(page) {
                this.getAll('?page=' + page);
            },
        }
    }
</script>
