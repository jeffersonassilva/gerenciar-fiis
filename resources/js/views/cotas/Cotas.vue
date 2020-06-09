<template>
    <div class="container">
        <v-card color="grey lighten-4" flat>
            <v-toolbar color="default" class="elevation-1 mb-4" :dark="false">
                <v-toolbar-title class="primary--text">Minhas Cotas</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-text-field
                        hide-details
                        single-line
                        v-model="search"
                        v-on:keypress="filtrar"
                ></v-text-field>
                <v-btn icon>
                    <v-icon @click="filtrar">mdi-magnify</v-icon>
                </v-btn>
                <v-btn icon>
                    <v-icon>mdi-plus-circle</v-icon>
                </v-btn>
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
                search: '',
                headers: [
                    {text: 'Sigla', value: 'ds_sigla', sortable: false},
                    {text: 'Quantidade', value: 'nr_cotas', sortable: false},
                    {text: 'Valor Unitário', value: 'vl_unitario_cota', sortable: false},
                    {text: 'Valor Investido', value: 'vl_investido', sortable: false},
                    {text: 'Dt. Compra', value: 'dt_compra', sortable: false},
                ],
            }
        },
        mounted() {
            this.getAll();
        },
        methods: {
            getAll(filtro = '') {
                axios.get('/api/cotas' + filtro).then(response => {
                    this.pagination = response.data.data;
                    this.data = response.data.data;
                }).then(() => {
                    this.visible = true;
                })
            },
            onPageChange(page) {
                this.getAll('?page=' + page);
            },
            filtrar() {
                if (this.timer) {
                    clearTimeout(this.timer);
                    this.timer = null;
                }
                this.timer = setTimeout(() => {
                    this.getAll('?search=fii.co_sigla:' + this.search);
                }, 800);
            }
        }
    }
</script>
