<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                Oi, seja bem-vindo!
            </div>

            <div class="col-md-4" v-for="item in this.data">
                <v-card
                        class="mx-auto my-12 elevation-1"
                        max-width="374"
                >
                    <v-list-item two-line>
                        <v-list-item-content>
                            <v-list-item-title class="headline">{{ item.sigla }}</v-list-item-title>
                            <v-list-item-subtitle>{{ item.administrador }}</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>

                    <v-card-text>
                        <div class="subtitle-1">
                            {{ formatarDinheiro(item.valor) }}
                        </div>
                    </v-card-text>

                    <v-divider class="mx-4 ma-0"></v-divider>

                    <v-card-actions>
                        <v-btn
                                color="deep-purple lighten-2"
                                text
                                @click="detalhar"
                        >
                            Detalhar
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </div>


        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: this.$route.meta.title || '',
                data: [],
            }
        },
        mounted() {
            this.getAll();
        },
        methods: {
            getAll() {
                axios.get('/api/rendimentos?pagination=false').then(response => {
                    let rendimentos = response.data.data;
                    this.data = this.tratarDados(rendimentos);
                }).then(() => {
                    this.visible = true;
                })
            },
            tratarDados(dados) {
                var novalista = [];
                dados.reduce((res, value) => {
                    if (!res[value.cd_fii]) {
                        res[value.cd_fii] = {
                            cd_fii: value.cd_fii,
                            sigla: value.fii.co_sigla,
                            administrador: value.fii.ds_administrador,
                            valor: 0
                        };
                        novalista.push(res[value.cd_fii])
                    }
                    res[value.cd_fii].valor += value.vl_recebido;
                    return res;
                }, {});

                return novalista;
            },
            formatarDinheiro(numero) {
                return "R$ " + numero.toLocaleString('pt-BR', {minimumFractionDigits: 2});
            },
            detalhar() {

            },
        }
    }
</script>
