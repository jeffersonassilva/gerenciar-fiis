<template>
    <div class="container">
        <h4 class="mb-5 primary--text">Minhas Cotas</h4>

        <v-data-table
                :headers="headers"
                :items="data.data"
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
                    {text: 'Sigla', value: 'ds_sigla', sortable: false},
                    {text: 'Quantidade', value: 'nr_cotas', sortable: false},
                    {text: 'Valor Unitário', value: 'vl_cota', sortable: false},
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
            }
        }
    }
</script>
