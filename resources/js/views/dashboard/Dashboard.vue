<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                Oi, seja bem-vindo!
            </div>

            <div class="col-md-4" v-for="item in this.data">
                <v-card class="mx-auto my-1 elevation-1">
                    <v-list-item two-line>
                        <v-list-item-content>
                            <v-list-item-title class="headline">{{ item.sigla }}</v-list-item-title>
                            <v-list-item-subtitle>{{ item.administrador }}</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>

                    <v-card-text>
                        <div class="subtitle-3">
                            Vl. Investido: <span class="primary--text">{{ formatarDinheiro(item.vl_investido) }}</span>
                        </div>
                        <div class="subtitle-3">
                            Vl. Dividendos: <span class="primary--text">{{ formatarDinheiro(item.vl_dividendos) }}</span>
                        </div>
                    </v-card-text>

                    <v-divider class="mx-4 ma-0"></v-divider>

                    <v-card-actions>
                        <v-btn
                                color="primary lighten-4"
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
            this.getRendimentos();
        },
        methods: {
            getRendimentos() {
                axios.get('/api/rendimentos?pagination=false').then(response => {
                    let rendimentos = response.data.data;
                    let teste = this.tratarDados(rendimentos);
                    Object.keys(teste).forEach(function (key) {
                        teste[key]['vl_investido'] = 0;
                    });
                    this.getCotas(teste);
                }).then(() => {
                    this.visible = true;
                })
            },
            getCotas(teste) {
                axios.get('/api/cotas?pagination=false').then(response => {
                    let investimentos = response.data.data;
                    investimentos.forEach((item) => {
                        if (teste[item.ds_sigla] !== undefined) {
                            teste[item.ds_sigla].vl_investido += item.nr_cotas * item.vl_cota;
                        }
                    });
                    Object.keys(teste).forEach((key) => {
                        this.data.push(teste[key]);
                    });
                }).then(() => {
                    this.visible = true;
                })
            },
            tratarDados(dados) {
                var novalista = [];
                dados.reduce((res, value) => {
                    if (!res[value.fii.co_sigla]) {
                        res[value.fii.co_sigla] = {
                            cd_fii: value.cd_fii,
                            sigla: value.fii.co_sigla,
                            administrador: value.fii.ds_administrador,
                            vl_dividendos: 0
                        };
                        novalista[value.fii.co_sigla] = res[value.fii.co_sigla];
                    }
                    res[value.fii.co_sigla].vl_dividendos += value.vl_recebido;
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
