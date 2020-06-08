<template>
    <div class="container">
        <!--<v-icon>arrow_downward</v-icon>-->
        <!--<v-btn color="success">Success</v-btn>-->
        <!--<v-btn color="error">Error</v-btn>-->
        <!--<v-btn color="warning">Warning</v-btn>-->
        <!--<v-btn color="info">Info</v-btn>-->

        <h4 class="mb-5 primary--text">Lista de FIIs</h4>

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
                    {text: 'Sigla', value: 'co_sigla', sortable: false},
                    {text: 'Administrador', value: 'ds_administrador', sortable: false},
                    {text: 'Alvo', value: 'ds_alvo', sortable: false},
                    {text: 'Tipo', value: 'ds_tipo', sortable: false},
                    {text: 'Cotistas', value: 'nr_cotistas', sortable: false},
                ],
            }
        },
        mounted() {
            this.getAll();
        },
        methods: {
            getAll(filtro = '') {
                axios.get('/api/fiis' + filtro).then(response => {
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
