<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class FiisTableSeeder
 */
class FiisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fiis')->insert([
            [
                'co_sigla' => 'ABCP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,49',
                'dt_pagamento' => '06/03/20',
                'nr_cotistas' => '21.556',
                'vl_patrimonio' => '1.042.562.590,71'
            ],
            [
                'co_sigla' =>'AFCR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'CM Capital Markets',
                'vl_ultimo_rendimento' => '0,05',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '103',
                'vl_patrimonio' => '66.071.472,50'
            ],
            [
                'co_sigla' =>'ALMI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,37',
                'dt_pagamento' => '13/04/17',
                'nr_cotistas' => '4.053',
                'vl_patrimonio' => '220.815.601,33'
            ],
            [
                'co_sigla' =>'ALZR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Híbrido',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,59',
                'dt_pagamento' => '24/04/20',
                'nr_cotistas' => '41.165',
                'vl_patrimonio' => '270.798.703,14'
            ],
            [
                'co_sigla' =>'ANCR11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Geração Futuro Corretora de Valores',
                'vl_ultimo_rendimento' => '33,85',
                'dt_pagamento' => '25/11/19',
                'nr_cotistas' => '56',
                'vl_patrimonio' => '1.557.754.734,77'
            ],
            [
                'co_sigla' =>'AQLL11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'FOCO DTVM',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '37',
                'vl_patrimonio' => '147.576.997,34'
            ],
            [
                'co_sigla' =>'ARFI11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'FOCO DTVM',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '29',
                'vl_patrimonio' => '139.099.529,85'
            ],
            [
                'co_sigla' =>'ARRI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,63',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '1.841',
                'vl_patrimonio' => '36.039.196,42'
            ],
            [
                'co_sigla' =>'ATCR11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'RJI CTVM LTDA',
                'vl_ultimo_rendimento' => '0,16',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '33',
                'vl_patrimonio' => '70.521.190,50'
            ],
            [
                'co_sigla' =>'ATSA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,25',
                'dt_pagamento' => '13/03/20',
                'nr_cotistas' => '201',
                'vl_patrimonio' => '190.392.412,18'
            ],
            [
                'co_sigla' =>'BARI11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,71',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '4.716',
                'vl_patrimonio' => '220.080.642,63'
            ],
            [
                'co_sigla' =>'BBFI11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '25,46',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '6.596',
                'vl_patrimonio' => '407.125.502,63'
            ],
            [
                'co_sigla' =>'BBIM11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BB Gestão de Recursos',
                'vl_ultimo_rendimento' => '0,63',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '20',
                'vl_patrimonio' => '73.673.551,85'
            ],
            [
                'co_sigla' =>'BBPO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Bancário',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '1,06',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '65.283',
                'vl_patrimonio' => '1.625.996.231,08'
            ],
            [
                'co_sigla' =>'BBRC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Bancário',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,92',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '7.245',
                'vl_patrimonio' => '175.686.812,62'
            ],
            [
                'co_sigla' =>'BBVJ11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,33',
                'dt_pagamento' => '09/01/19',
                'nr_cotistas' => '2.072',
                'vl_patrimonio' => '156.913.697,56'
            ],
            [
                'co_sigla' =>'BCFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '174.807',
                'vl_patrimonio' => '1.655.218.417,73'
            ],
            [
                'co_sigla' =>'BCIA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Banco Bradesco',
                'vl_ultimo_rendimento' => '0,75',
                'dt_pagamento' => '30/04/20',
                'nr_cotistas' => '5.801',
                'vl_patrimonio' => '188.732.630,33'
            ],
            [
                'co_sigla' =>'BCRI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,72',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '25.019',
                'vl_patrimonio' => '312.395.570,83'
            ],
            [
                'co_sigla' =>'BICR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Inter DTVM',
                'vl_ultimo_rendimento' => '0,48',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '893',
                'vl_patrimonio' => '49.970.027,12'
            ],
            [
                'co_sigla' =>'BLMO11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '44',
                'vl_patrimonio' => '63.104.741,73'
            ],
            [
                'co_sigla' =>'BMII11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,23',
                'dt_pagamento' => '07/08/19',
                'nr_cotistas' => '12',
                'vl_patrimonio' => '70.464.580,38'
            ],
            [
                'co_sigla' =>'BMLC11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,53',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '1.771',
                'vl_patrimonio' => '93.926.200,43'
            ],
            [
                'co_sigla' =>'BNFS11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Bancário',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,89',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '1.809',
                'vl_patrimonio' => '67.114.310,10'
            ],
            [
                'co_sigla' =>'BPFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Geração Futuro Corretora de Valores',
                'vl_ultimo_rendimento' => '0,5',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '10.514',
                'vl_patrimonio' => '235.806.843,03'
            ],
            [
                'co_sigla' =>'BPML11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,28',
                'dt_pagamento' => '24/04/20',
                'nr_cotistas' => '242',
                'vl_patrimonio' => '435.098.471,97'
            ],
            [
                'co_sigla' =>'BPRP11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,75',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '74',
                'vl_patrimonio' => '139.933.152,32'
            ],
            [
                'co_sigla' =>'BRCO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,55',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '9.420',
                'vl_patrimonio' => '1.205.309.716,71'
            ],
            [
                'co_sigla' =>'BRCR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,49',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '92.306',
                'vl_patrimonio' => '2.521.283.012,57'
            ],
            [
                'co_sigla' =>'BREV11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BR-CAPITAL',
                'vl_ultimo_rendimento' => '0,43',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '23',
                'vl_patrimonio' => '66.789.281,99'
            ],
            [
                'co_sigla' =>'BRHT11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Hotéis',
                'ds_administrador' => 'BNY Mellon',
                'vl_ultimo_rendimento' => '0,86',
                'dt_pagamento' => '14/07/14',
                'nr_cotistas' => '11',
                'vl_patrimonio' => '157.758.832,26'
            ],
            [
                'co_sigla' =>'BTCR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '6.139',
                'vl_patrimonio' => '467.766.223,93'
            ],
            [
                'co_sigla' =>'BTLG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,5',
                'dt_pagamento' => '24/04/20',
                'nr_cotistas' => '19.226',
                'vl_patrimonio' => '341.063.811,11'
            ],
            [
                'co_sigla' =>'BVAR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Varejo',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '2,13',
                'dt_pagamento' => '24/04/20',
                'nr_cotistas' => '69',
                'vl_patrimonio' => '751.088.019,76'
            ],
            [
                'co_sigla' =>'BZLI11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Híbrido (Tijolo/Papel)',
                'ds_administrador' => 'FOCO DTVM',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '30',
                'vl_patrimonio' => '418.003.932,97'
            ],
            [
                'co_sigla' =>'CARE11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Outros',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '2.317',
                'vl_patrimonio' => '249.344.011,34'
            ],
            [
                'co_sigla' =>'CBOP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '3.946',
                'vl_patrimonio' => '121.223.355,34'
            ],
            [
                'co_sigla' =>'CEOC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,51',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '6.824',
                'vl_patrimonio' => '178.389.117,85'
            ],
            [
                'co_sigla' =>'CNES11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,11',
                'dt_pagamento' => '30/03/20',
                'nr_cotistas' => '3.075',
                'vl_patrimonio' => '281.945.335,46'
            ],
            [
                'co_sigla' =>'CPFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,3',
                'dt_pagamento' => '16/04/20',
                'nr_cotistas' => '9.683',
                'vl_patrimonio' => '195.949.707,98'
            ],
            [
                'co_sigla' =>'CPTS11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,65',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '15.885',
                'vl_patrimonio' => '297.212.758,39'
            ],
            [
                'co_sigla' =>'CRFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Caixa Econômica Federal',
                'vl_ultimo_rendimento' => '0,3',
                'dt_pagamento' => '13/04/20',
                'nr_cotistas' => '1.288',
                'vl_patrimonio' => '60.080.328,32'
            ],
            [
                'co_sigla' =>'CTXT11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Outros',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,38',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '3.743',
                'vl_patrimonio' => '138.325.326,34'
            ],
            [
                'co_sigla' =>'CVBI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,6',
                'dt_pagamento' => '16/04/20',
                'nr_cotistas' => '3.583',
                'vl_patrimonio' => '353.257.488,00'
            ],
            [
                'co_sigla' =>'CXCE11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Caixa Econômica Federal',
                'vl_ultimo_rendimento' => '20,64',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '1.280',
                'vl_patrimonio' => '147.643.134,95'
            ],
            [
                'co_sigla' =>'CXRI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Caixa Econômica Federal',
                'vl_ultimo_rendimento' => '8,5',
                'dt_pagamento' => '13/04/20',
                'nr_cotistas' => '1.807',
                'vl_patrimonio' => '153.134.244,63'
            ],
            [
                'co_sigla' =>'CXTL11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Caixa Econômica Federal',
                'vl_ultimo_rendimento' => '0,16',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '578',
                'vl_patrimonio' => '41.146.433,67'
            ],
            [
                'co_sigla' =>'DAMT11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Banco Modal S.A.',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '51',
                'vl_patrimonio' => '130.525.067,83'
            ],
            [
                'co_sigla' =>'DMAC11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '3,51',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '415',
                'vl_patrimonio' => '120.986.102,91'
            ],
            [
                'co_sigla' =>'DOMC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Monetar DTVM',
                'vl_ultimo_rendimento' => '5,33',
                'dt_pagamento' => '10/05/16',
                'nr_cotistas' => '1.161',
                'vl_patrimonio' => '241.921.029,50'
            ],
            [
                'co_sigla' =>'DOVL11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BNY Mellon',
                'vl_ultimo_rendimento' => '3,11',
                'dt_pagamento' => '22/04/20',
                'nr_cotistas' => '52',
                'vl_patrimonio' => '73.864.997,99'
            ],
            [
                'co_sigla' =>'DRIT11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,45',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '291',
                'vl_patrimonio' => '59.872.907,16'
            ],
            [
                'co_sigla' =>'EDFO11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '1,53',
                'dt_pagamento' => '09/04/20',
                'nr_cotistas' => '668',
                'vl_patrimonio' => '47.925.712,93'
            ],
            [
                'co_sigla' =>'EDGA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,16',
                'dt_pagamento' => '31/03/20',
                'nr_cotistas' => '7.017',
                'vl_patrimonio' => '299.907.410,51'
            ],
            [
                'co_sigla' =>'ELDO11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '4,3',
                'dt_pagamento' => '19/03/20',
                'nr_cotistas' => '61',
                'vl_patrimonio' => '915.197.494,29'
            ],
            [
                'co_sigla' =>'ERPA11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '3',
                'vl_patrimonio' => '21.120.640,32'
            ],
            [
                'co_sigla' =>'EURO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'COINVALORES',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '1.885',
                'vl_patrimonio' => '117.747.869,69'
            ],
            [
                'co_sigla' =>'FAED11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Educacional',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '1,54',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '5.242',
                'vl_patrimonio' => '131.655.160,39'
            ],
            [
                'co_sigla' =>'FAMB11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '29,75',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '3.835',
                'vl_patrimonio' => '364.424.107,68'
            ],
            [
                'co_sigla' =>'FCFL11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Educacional',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,52',
                'dt_pagamento' => '24/04/20',
                'nr_cotistas' => '4.023',
                'vl_patrimonio' => '354.160.060,94'
            ],
            [
                'co_sigla' =>'FEXC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,95',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '8.022',
                'vl_patrimonio' => '241.407.890,74'
            ],
            [
                'co_sigla' =>'FIGS11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,1',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '18.641',
                'vl_patrimonio' => '279.897.021,69'
            ],
            [
                'co_sigla' =>'FIIB11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'COINVALORES',
                'vl_ultimo_rendimento' => '2,4',
                'dt_pagamento' => '13/04/20',
                'nr_cotistas' => '17.700',
                'vl_patrimonio' => '288.720.729,37'
            ],
            [
                'co_sigla' =>'FIIP11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '1,33',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '6.631',
                'vl_patrimonio' => '179.161.299,78'
            ],
            [
                'co_sigla' =>'FINF11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '0,19',
                'dt_pagamento' => '24/04/20',
                'nr_cotistas' => '4',
                'vl_patrimonio' => '117.432.760,77'
            ],
            [
                'co_sigla' =>'FISC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Corretora Geral de Valores e Cambio',
                'vl_ultimo_rendimento' => '5,61',
                'dt_pagamento' => '31/12/19',
                'nr_cotistas' => '67',
                'vl_patrimonio' => '253.241.136,17'
            ],
            [
                'co_sigla' =>'FISD11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'RJI CTVM LTDA',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '25',
                'vl_patrimonio' => '96.096.431,78'
            ],
            [
                'co_sigla' =>'FIVN11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '2.119',
                'vl_patrimonio' => '71.565.807,16'
            ],
            [
                'co_sigla' =>'FLMA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BR-CAPITAL',
                'vl_ultimo_rendimento' => '0,01',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '59.894',
                'vl_patrimonio' => '199.914.353,43'
            ],
            [
                'co_sigla' =>'FLRP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '13,52',
                'dt_pagamento' => '28/02/20',
                'nr_cotistas' => '925',
                'vl_patrimonio' => '95.306.912,98'
            ],
            [
                'co_sigla' =>'FMOF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'COIN DTVM',
                'vl_ultimo_rendimento' => '0,27',
                'dt_pagamento' => '17/01/20',
                'nr_cotistas' => '361',
                'vl_patrimonio' => '66.555.783,08'
            ],
            [
                'co_sigla' =>'FOFT11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '1,15',
                'dt_pagamento' => '13/12/19',
                'nr_cotistas' => '3.055',
                'vl_patrimonio' => '125.562.421,95'
            ],
            [
                'co_sigla' =>'FPAB11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'COIN DTVM',
                'vl_ultimo_rendimento' => '1,55',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '986',
                'vl_patrimonio' => '310.737.306,67'
            ],
            [
                'co_sigla' =>'FPNG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BR-CAPITAL',
                'vl_ultimo_rendimento' => '0,5',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '50',
                'vl_patrimonio' => '143.080.848,01'
            ],
            [
                'co_sigla' =>'FTCE11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Híbrido (Tijolo/Papel)',
                'ds_administrador' => 'BNY Mellon',
                'vl_ultimo_rendimento' => '164,66',
                'dt_pagamento' => '04/12/19',
                'nr_cotistas' => '57',
                'vl_patrimonio' => '1.925.762.203,75'
            ],
            [
                'co_sigla' =>'FVBI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,58',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '4.158',
                'vl_patrimonio' => '343.452.609,34'
            ],
            [
                'co_sigla' =>'FVPQ11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,87',
                'dt_pagamento' => '09/03/20',
                'nr_cotistas' => '5.429',
                'vl_patrimonio' => '600.578.628,62'
            ],
            [
                'co_sigla' =>'GESE11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Educacional',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '8,79',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '54',
                'vl_patrimonio' => '69.054.476,02'
            ],
            [
                'co_sigla' =>'GGRC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'CM Capital Markets',
                'vl_ultimo_rendimento' => '0,76',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '68.095',
                'vl_patrimonio' => '771.690.205,34'
            ],
            [
                'co_sigla' =>'GRLV11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,64',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '2.411',
                'vl_patrimonio' => '141.174.242,67'
            ],
            [
                'co_sigla' =>'GSFI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '832',
                'vl_patrimonio' => '814.459.487,03'
            ],
            [
                'co_sigla' =>'GTWR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,69',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '12.261',
                'vl_patrimonio' => '1.178.203.147,06'
            ],
            [
                'co_sigla' =>'HABT11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,83',
                'dt_pagamento' => '09/04/20',
                'nr_cotistas' => '9.564',
                'vl_patrimonio' => '383.339.559,07'
            ],
            [
                'co_sigla' =>'HBTT11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '16',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '129',
                'vl_patrimonio' => '181.363.603,67'
            ],
            [
                'co_sigla' =>'HCRI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Hospital',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '2,41',
                'dt_pagamento' => '20/04/20',
                'nr_cotistas' => '2.943',
                'vl_patrimonio' => '58.397.494,11'
            ],
            [
                'co_sigla' =>'HCTR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '1,43',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '7.381',
                'vl_patrimonio' => '117.530.478,93'
            ],
            [
                'co_sigla' =>'HFOF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '34.891',
                'vl_patrimonio' => '1.005.780.234,41'
            ],
            [
                'co_sigla' =>'HGBS11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,9',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '60.628',
                'vl_patrimonio' => '2.224.704.535,10'
            ],
            [
                'co_sigla' =>'HGCR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,6',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '55.890',
                'vl_patrimonio' => '1.281.455.228,79'
            ],
            [
                'co_sigla' =>'HGFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,55',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '3.948',
                'vl_patrimonio' => '166.347.571,88'
            ],
            [
                'co_sigla' =>'HGLG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,78',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '177.963',
                'vl_patrimonio' => '1.595.945.849,70'
            ],
            [
                'co_sigla' =>'HGPO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,89',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '8.298',
                'vl_patrimonio' => '335.683.690,81'
            ],
            [
                'co_sigla' =>'HGRE11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,65',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '83.971',
                'vl_patrimonio' => '1.762.551.233,56'
            ],
            [
                'co_sigla' =>'HGRU11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Educacional',
                'ds_administrador' => 'Credit Suisse Hedging-Griffo',
                'vl_ultimo_rendimento' => '0,68',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '36.170',
                'vl_patrimonio' => '1.046.224.879,54'
            ],
            [
                'co_sigla' =>'HLOG11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,63',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '163',
                'vl_patrimonio' => '172.251.531,35'
            ],
            [
                'co_sigla' =>'HMOC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,25',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '259',
                'vl_patrimonio' => '81.227.214,84'
            ],
            [
                'co_sigla' =>'HOSI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Outros',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '2.165',
                'vl_patrimonio' => '54.569.460,46'
            ],
            [
                'co_sigla' =>'HPDP11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,2',
                'dt_pagamento' => '13/03/20',
                'nr_cotistas' => '193',
                'vl_patrimonio' => '282.371.127,07'
            ],
            [
                'co_sigla' =>'HRDF11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '668',
                'vl_patrimonio' => '15.249.074,34'
            ],
            [
                'co_sigla' =>'HSML11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Santander Securities Services Brasil DTVM',
                'vl_ultimo_rendimento' => '0,22',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '74.053',
                'vl_patrimonio' => '1.515.648.680,24'
            ],
            [
                'co_sigla' =>'HTMX11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Hotéis',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,71',
                'dt_pagamento' => '06/03/20',
                'nr_cotistas' => '20.860',
                'vl_patrimonio' => '183.784.680,73'
            ],
            [
                'co_sigla' =>'HUSC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Hospital',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,42',
                'dt_pagamento' => '15/07/19',
                'nr_cotistas' => '427',
                'vl_patrimonio' => '71.155.775,65'
            ],
            [
                'co_sigla' =>'HUSI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Hospital',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '1',
                'vl_patrimonio' => '95.080.396,82'
            ],
            [
                'co_sigla' =>'IBFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,24',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '3.088',
                'vl_patrimonio' => '56.864.459,31'
            ],
            [
                'co_sigla' =>'IRDM11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '45.901',
                'vl_patrimonio' => '756.273.124,15'
            ],
            [
                'co_sigla' =>'JPPA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,65',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '105',
                'vl_patrimonio' => '54.147.599,94'
            ],
            [
                'co_sigla' =>'JPPC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Banco Finaxis',
                'vl_ultimo_rendimento' => '5,98',
                'dt_pagamento' => '13/03/20',
                'nr_cotistas' => '77',
                'vl_patrimonio' => '27.116.574,30'
            ],
            [
                'co_sigla' =>'JRDM11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '13/03/20',
                'nr_cotistas' => '6.170',
                'vl_patrimonio' => '227.507.010,51'
            ],
            [
                'co_sigla' =>'JSRE11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Híbrido (Tijolo/Papel)',
                'ds_administrador' => 'Banco J. Safra',
                'vl_ultimo_rendimento' => '0,37',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '43.663',
                'vl_patrimonio' => '2.324.530.247,59'
            ],
            [
                'co_sigla' =>'JTPR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '1,2',
                'dt_pagamento' => '15/04/19',
                'nr_cotistas' => '7',
                'vl_patrimonio' => '26.759.863,13'
            ],
            [
                'co_sigla' =>'KFOF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,45',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '4.377',
                'vl_patrimonio' => '362.714.046,65'
            ],
            [
                'co_sigla' =>'KINP11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,15',
                'dt_pagamento' => '15/01/20',
                'nr_cotistas' => '206',
                'vl_patrimonio' => '72.661.185,26'
            ],
            [
                'co_sigla' =>'KNCR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,45',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '62.917',
                'vl_patrimonio' => '4.080.592.477,66'
            ],
            [
                'co_sigla' =>'KNHY11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '4.878',
                'vl_patrimonio' => '1.138.129.474,37'
            ],
            [
                'co_sigla' =>'KNIP11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '21.215',
                'vl_patrimonio' => '3.590.231.906,37'
            ],
            [
                'co_sigla' =>'KNRE11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,26',
                'dt_pagamento' => '14/11/19',
                'nr_cotistas' => '6.040',
                'vl_patrimonio' => '84.665.330,25'
            ],
            [
                'co_sigla' =>'KNRI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Híbrido',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,65',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '182.198',
                'vl_patrimonio' => '3.759.962.016,70'
            ],
            [
                'co_sigla' =>'LATR11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '336,52',
                'dt_pagamento' => '23/08/19',
                'nr_cotistas' => '144',
                'vl_patrimonio' => '18.021.535,86'
            ],
            [
                'co_sigla' =>'LGCP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Inter DTVM',
                'vl_ultimo_rendimento' => '0,45',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '4.751',
                'vl_patrimonio' => '169.748.103,42'
            ],
            [
                'co_sigla' =>'LOFT11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Modal DTVM',
                'vl_ultimo_rendimento' => '2,71',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '201',
                'vl_patrimonio' => '232.864.119,45'
            ],
            [
                'co_sigla' =>'LUGG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Inter DTVM',
                'vl_ultimo_rendimento' => '0,44',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '4.306',
                'vl_patrimonio' => '86.366.772,24'
            ],
            [
                'co_sigla' =>'LVBI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,6',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '24.596',
                'vl_patrimonio' => '775.220.064,70'
            ],
            [
                'co_sigla' =>'MALL11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Geração Futuro Corretora de Valores',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '60.424',
                'vl_patrimonio' => '799.100.716,23'
            ],
            [
                'co_sigla' =>'MAXR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Varejo',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '12,54',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '2.572',
                'vl_patrimonio' => '132.629.972,85'
            ],
            [
                'co_sigla' =>'MBRF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '8,5',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '2.880',
                'vl_patrimonio' => '130.507.768,99'
            ],
            [
                'co_sigla' =>'MCCI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,5',
                'dt_pagamento' => '20/04/20',
                'nr_cotistas' => '8.430',
                'vl_patrimonio' => '717.426.325,76'
            ],
            [
                'co_sigla' =>'MFII11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '1,03',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '20.373',
                'vl_patrimonio' => '290.469.512,26'
            ],
            [
                'co_sigla' =>'MGFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,6',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '46.371',
                'vl_patrimonio' => '637.870.923,82'
            ],
            [
                'co_sigla' =>'MGHT11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Hospital',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '87',
                'vl_patrimonio' => '83.793.537,74'
            ],
            [
                'co_sigla' =>'MXRF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,08',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '147.044',
                'vl_patrimonio' => '1.260.127.605,12'
            ],
            [
                'co_sigla' =>'NCHB11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '2,19',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '1',
                'vl_patrimonio' => '10.829.516,97'
            ],
            [
                'co_sigla' =>'NEWL11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Brasil Plural S.A. Banco Múltiplo',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '234',
                'vl_patrimonio' => '86.419.090,77'
            ],
            [
                'co_sigla' =>'NEWU11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Brasil Plural S.A. Banco Múltiplo',
                'vl_ultimo_rendimento' => '0,04',
                'dt_pagamento' => '14/02/20',
                'nr_cotistas' => '2.171',
                'vl_patrimonio' => '65.514.984,43'
            ],
            [
                'co_sigla' =>'NPAR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '0,98',
                'dt_pagamento' => '15/01/19',
                'nr_cotistas' => '61',
                'vl_patrimonio' => '14.516.672,55'
            ],
            [
                'co_sigla' =>'NSLU11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Hospital',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '1,69',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '5.270',
                'vl_patrimonio' => '218.391.355,30'
            ],
            [
                'co_sigla' =>'NVHO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Hospital',
                'ds_administrador' => 'Geração Futuro Corretora de Valores',
                'vl_ultimo_rendimento' => '0,06',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '93',
                'vl_patrimonio' => '299.736.890,32'
            ],
            [
                'co_sigla' =>'NVIF11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Modal DTVM',
                'vl_ultimo_rendimento' => '0,89',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '7',
                'vl_patrimonio' => '63.444.956,21'
            ],
            [
                'co_sigla' =>'ONEF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,62',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '5.593',
                'vl_patrimonio' => '140.483.567,24'
            ],
            [
                'co_sigla' =>'ORPD11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '1,38',
                'dt_pagamento' => '29/03/19',
                'nr_cotistas' => '7',
                'vl_patrimonio' => '38.895.265,82'
            ],
            [
                'co_sigla' =>'OUCY11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Banco Ourinvest S.A.',
                'vl_ultimo_rendimento' => '0,55',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '1.828',
                'vl_patrimonio' => '81.546.848,34'
            ],
            [
                'co_sigla' =>'OUFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Banco Ourinvest S.A.',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '1.678',
                'vl_patrimonio' => '60.419.082,70'
            ],
            [
                'co_sigla' =>'OUJP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Finaxis CTVM SA',
                'vl_ultimo_rendimento' => '0,6',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '13.090',
                'vl_patrimonio' => '196.196.699,65'
            ],
            [
                'co_sigla' =>'OULG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Banco Ourinvest S.A.',
                'vl_ultimo_rendimento' => '0,65',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '2.612',
                'vl_patrimonio' => '239.747.646,41'
            ],
            [
                'co_sigla' =>'PABY11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'BRKB DTVM',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '475',
                'vl_patrimonio' => '-1.260.744,40'
            ],
            [
                'co_sigla' =>'PATC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Modal DTVM',
                'vl_ultimo_rendimento' => '0,3',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '18.682',
                'vl_patrimonio' => '345.113.318,34'
            ],
            [
                'co_sigla' =>'PBLV11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '24,55',
                'dt_pagamento' => '29/01/20',
                'nr_cotistas' => '2',
                'vl_patrimonio' => '2.674.955.075,02'
            ],
            [
                'co_sigla' =>'PLCR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Brasil Plural S.A. Banco Múltiplo',
                'vl_ultimo_rendimento' => '0,3',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '4.154',
                'vl_patrimonio' => '202.555.037,76'
            ],
            [
                'co_sigla' =>'PLRI11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,17',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '724',
                'vl_patrimonio' => '66.711.229,07'
            ],
            [
                'co_sigla' =>'PORD11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,96',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '2.960',
                'vl_patrimonio' => '197.844.117,03'
            ],
            [
                'co_sigla' =>'PQDP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '14,47',
                'dt_pagamento' => '20/04/20',
                'nr_cotistas' => '4.399',
                'vl_patrimonio' => '810.909.891,25'
            ],
            [
                'co_sigla' =>'PRSN11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,01',
                'dt_pagamento' => '15/01/20',
                'nr_cotistas' => '912',
                'vl_patrimonio' => '25.492.187,75'
            ],
            [
                'co_sigla' =>'PRSV11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BEM DTVM',
                'vl_ultimo_rendimento' => '1,9',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '1.338',
                'vl_patrimonio' => '77.003.548,44'
            ],
            [
                'co_sigla' =>'PRTS11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Banco Modal S.A.',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '13',
                'vl_patrimonio' => '11.547.443,84'
            ],
            [
                'co_sigla' =>'QAGR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Indefinido',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,19',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '13.979',
                'vl_patrimonio' => '483.358.711,69'
            ],
            [
                'co_sigla' =>'RBBV11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Caixa Econômica Federal',
                'vl_ultimo_rendimento' => '0,34',
                'dt_pagamento' => '13/04/20',
                'nr_cotistas' => '3.021',
                'vl_patrimonio' => '125.211.085,03'
            ],
            [
                'co_sigla' =>'RBCB11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,3',
                'dt_pagamento' => '10/06/19',
                'nr_cotistas' => '460',
                'vl_patrimonio' => '40.071,39'
            ],
            [
                'co_sigla' =>'RBCO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,03',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '2.460',
                'vl_patrimonio' => '387.343.274,28'
            ],
            [
                'co_sigla' =>'RBDS11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '1,84',
                'dt_pagamento' => '10/12/19',
                'nr_cotistas' => '1.043',
                'vl_patrimonio' => '3.148.488,41'
            ],
            [
                'co_sigla' =>'RBED11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Educacional',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '1',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '7.905',
                'vl_patrimonio' => '267.562.905,02'
            ],
            [
                'co_sigla' =>'RBFF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,3',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '7.826',
                'vl_patrimonio' => '203.393.940,55'
            ],
            [
                'co_sigla' =>'RBGS11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,53',
                'dt_pagamento' => '13/03/20',
                'nr_cotistas' => '3.074',
                'vl_patrimonio' => '93.284.753,48'
            ],
            [
                'co_sigla' =>'RBIV11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,39',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '2.324',
                'vl_patrimonio' => '98.950.023,25'
            ],
            [
                'co_sigla' =>'RBRD11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Varejo',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,99',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '6.720',
                'vl_patrimonio' => '147.964.010,83'
            ],
            [
                'co_sigla' =>'RBRF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,6',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '39.988',
                'vl_patrimonio' => '487.664.807,82'
            ],
            [
                'co_sigla' =>'RBRL11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '2',
                'vl_patrimonio' => '181.946.373,80'
            ],
            [
                'co_sigla' =>'RBRM11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '5.561,32',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '52',
                'vl_patrimonio' => '86.771.083,16'
            ],
            [
                'co_sigla' =>'RBRP11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,37',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '16.394',
                'vl_patrimonio' => '711.456.529,83'
            ],
            [
                'co_sigla' =>'RBRR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,55',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '50.921',
                'vl_patrimonio' => '677.730.550,70'
            ],
            [
                'co_sigla' =>'RBRY11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,65',
                'dt_pagamento' => '17/04/20',
                'nr_cotistas' => '348',
                'vl_patrimonio' => '200.536.485,68'
            ],
            [
                'co_sigla' =>'RBTS11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '56',
                'vl_patrimonio' => '55.283.642,66'
            ],
            [
                'co_sigla' =>'RBVA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Bancário',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,8',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '13.495',
                'vl_patrimonio' => '709.436.490,81'
            ],
            [
                'co_sigla' =>'RBVO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,08',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '1.582',
                'vl_patrimonio' => '15.563.986,26'
            ],
            [
                'co_sigla' =>'RCFA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Fram Capital DTVM SA',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '1.353',
                'vl_patrimonio' => '18.833.921,28'
            ],
            [
                'co_sigla' =>'RCRB11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,75',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '20.778',
                'vl_patrimonio' => '590.033.702,67'
            ],
            [
                'co_sigla' =>'RCRI11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '28,1',
                'dt_pagamento' => '15/01/20',
                'nr_cotistas' => '142',
                'vl_patrimonio' => '63.211.209,19'
            ],
            [
                'co_sigla' =>'RDPD11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '842',
                'vl_patrimonio' => '105.441.569,59'
            ],
            [
                'co_sigla' =>'RECT11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Indefinido',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,81',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '14.777',
                'vl_patrimonio' => '534.556.964,75'
            ],
            [
                'co_sigla' =>'REIT11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BNY Mellon',
                'vl_ultimo_rendimento' => '22,39',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '34',
                'vl_patrimonio' => '32.633.520,35'
            ],
            [
                'co_sigla' =>'RFOF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,18',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '2.195',
                'vl_patrimonio' => '95.920.391,66'
            ],
            [
                'co_sigla' =>'RNDP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '4,08',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '908',
                'vl_patrimonio' => '116.806.799,40'
            ],
            [
                'co_sigla' =>'RNGO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,42',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '15.260',
                'vl_patrimonio' => '274.428.577,05'
            ],
            [
                'co_sigla' =>'RSPD11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '98',
                'vl_patrimonio' => '39.545.292,76'
            ],
            [
                'co_sigla' =>'RVBI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,25',
                'dt_pagamento' => '20/04/20',
                'nr_cotistas' => '9.095',
                'vl_patrimonio' => '127.738.874,88'
            ],
            [
                'co_sigla' =>'SAAG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Bancário',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,93',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '16.251',
                'vl_patrimonio' => '627.916.463,29'
            ],
            [
                'co_sigla' =>'SADI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Santander Securities Services Brasil DTVM',
                'vl_ultimo_rendimento' => '0,35',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '2.769',
                'vl_patrimonio' => '318.675.314,66'
            ],
            [
                'co_sigla' =>'SAIC11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BRB DTVM',
                'vl_ultimo_rendimento' => '0,66',
                'dt_pagamento' => '16/10/18',
                'nr_cotistas' => '63',
                'vl_patrimonio' => '79.212.450,47'
            ],
            [
                'co_sigla' =>'SARE11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Indefinido',
                'ds_administrador' => 'Santander Securities Services Brasil DTVM',
                'vl_ultimo_rendimento' => '0,27',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '4.562',
                'vl_patrimonio' => '360.426.136,55'
            ],
            [
                'co_sigla' =>'SCPF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BR-CAPITAL',
                'vl_ultimo_rendimento' => '0,04',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '4.581',
                'vl_patrimonio' => '48.511.874,04'
            ],
            [
                'co_sigla' =>'SDIL11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,46',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '35.114',
                'vl_patrimonio' => '455.237.326,55'
            ],
            [
                'co_sigla' =>'SDIP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,49',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '5.272',
                'vl_patrimonio' => '349.136.649,98'
            ],
            [
                'co_sigla' =>'SFND11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,76',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '55',
                'vl_patrimonio' => '103.505.531,06'
            ],
            [
                'co_sigla' =>'SHDP11B',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '8,45',
                'dt_pagamento' => '20/02/20',
                'nr_cotistas' => '3',
                'vl_patrimonio' => '1.999.467.613,95'
            ],
            [
                'co_sigla' =>'SHOP11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Banco Modal S.A.',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '11',
                'vl_patrimonio' => '100.219.687,02'
            ],
            [
                'co_sigla' =>'SHPH11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '3,6',
                'dt_pagamento' => '13/03/20',
                'nr_cotistas' => '2.809',
                'vl_patrimonio' => '479.563.792,75'
            ],
            [
                'co_sigla' =>'SPAF11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Brasil Plural S.A. Banco Múltiplo',
                'vl_ultimo_rendimento' => '1,81',
                'dt_pagamento' => '06/03/20',
                'nr_cotistas' => '1',
                'vl_patrimonio' => '12.554.878,75'
            ],
            [
                'co_sigla' =>'SPTW11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Geração Futuro Corretora de Valores',
                'vl_ultimo_rendimento' => '0,75',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '13.553',
                'vl_patrimonio' => '138.860.200,78'
            ],
            [
                'co_sigla' =>'STRX11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '37,06',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '53',
                'vl_patrimonio' => '311.837.070,30'
            ],
            [
                'co_sigla' =>'TBOF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,41',
                'dt_pagamento' => '30/04/20',
                'nr_cotistas' => '9.292',
                'vl_patrimonio' => '979.821.191,73'
            ],
            [
                'co_sigla' =>'TCPF11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Indefinido',
                'ds_administrador' => 'BR-CAPITAL',
                'vl_ultimo_rendimento' => '1,8',
                'dt_pagamento' => '15/01/20',
                'nr_cotistas' => '52',
                'vl_patrimonio' => '38.733.916,34'
            ],
            [
                'co_sigla' =>'TFOF11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,85',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '1.932',
                'vl_patrimonio' => '101.220.599,50'
            ],
            [
                'co_sigla' =>'TGAR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,82',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '17.311',
                'vl_patrimonio' => '458.385.653,15'
            ],
            [
                'co_sigla' =>'THRA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,52',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '2.630',
                'vl_patrimonio' => '175.511.774,89'
            ],
            [
                'co_sigla' =>'TORD11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Indefinido',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '7',
                'vl_patrimonio' => '29.800.550,57'
            ],
            [
                'co_sigla' =>'TORM13',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '1,03',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '246',
                'vl_patrimonio' => '15.885.641,22'
            ],
            [
                'co_sigla' =>'TOUR11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Desenvolvimento',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '1,23',
                'dt_pagamento' => '13/03/20',
                'nr_cotistas' => '151',
                'vl_patrimonio' => '2.676.968,41'
            ],
            [
                'co_sigla' =>'TRNT11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,2',
                'dt_pagamento' => '20/04/20',
                'nr_cotistas' => '693',
                'vl_patrimonio' => '872.415.013,91'
            ],
            [
                'co_sigla' =>'TRXF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Outros',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,67',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '200',
                'vl_patrimonio' => '189.249.901,68'
            ],
            [
                'co_sigla' =>'TSNC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Outros',
                'ds_administrador' => 'Banco Finaxis',
                'vl_ultimo_rendimento' => '33,8',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '66',
                'vl_patrimonio' => '101.209.518,08'
            ],
            [
                'co_sigla' =>'UBSR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '27.877',
                'vl_patrimonio' => '665.428.280,65'
            ],
            [
                'co_sigla' =>'VCJR11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'INTRAG DTVM',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '2.738',
                'vl_patrimonio' => '577.362.158,29'
            ],
            [
                'co_sigla' =>'VERE11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '1,45',
                'dt_pagamento' => '09/04/20',
                'nr_cotistas' => '54',
                'vl_patrimonio' => '145.416.263,67'
            ],
            [
                'co_sigla' =>'VGIP11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0',
                'dt_pagamento' => '00/00/0000',
                'nr_cotistas' => '829',
                'vl_patrimonio' => '71.660.527,73'
            ],
            [
                'co_sigla' =>'VGIR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,53',
                'dt_pagamento' => '20/04/20',
                'nr_cotistas' => '28.829',
                'vl_patrimonio' => '436.664.164,24'
            ],
            [
                'co_sigla' =>'VILG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,6',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '30.645',
                'vl_patrimonio' => '789.195.393,85'
            ],
            [
                'co_sigla' =>'VINO11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,37',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '17.456',
                'vl_patrimonio' => '603.327.723,32'
            ],
            [
                'co_sigla' =>'VISC11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BRL Trust DTVM',
                'vl_ultimo_rendimento' => '0,3',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '146.779',
                'vl_patrimonio' => '1.740.581.862,06'
            ],
            [
                'co_sigla' =>'VLJS11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Planner Corretora de Valores',
                'vl_ultimo_rendimento' => '16,43',
                'dt_pagamento' => '20/01/20',
                'nr_cotistas' => '12',
                'vl_patrimonio' => '47.195.787,40'
            ],
            [
                'co_sigla' =>'VLOL11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Oliveira Trust',
                'vl_ultimo_rendimento' => '0,41',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '6.631',
                'vl_patrimonio' => '161.871.347,59'
            ],
            [
                'co_sigla' =>'VOTS11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,4',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '372',
                'vl_patrimonio' => '80.936.273,01'
            ],
            [
                'co_sigla' =>'VPSI11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,07',
                'dt_pagamento' => '13/04/20',
                'nr_cotistas' => '53',
                'vl_patrimonio' => '157.379.746,42'
            ],
            [
                'co_sigla' =>'VRTA11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Banco Fator',
                'vl_ultimo_rendimento' => '0,74',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '47.529',
                'vl_patrimonio' => '501.948.240,39'
            ],
            [
                'co_sigla' =>'VSHO11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,7',
                'dt_pagamento' => '09/03/20',
                'nr_cotistas' => '1.517',
                'vl_patrimonio' => '223.997.555,06'
            ],
            [
                'co_sigla' =>'VTLT11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Votorantim Asset Management',
                'vl_ultimo_rendimento' => '0,72',
                'dt_pagamento' => '08/04/20',
                'nr_cotistas' => '2.145',
                'vl_patrimonio' => '213.404.909,89'
            ],
            [
                'co_sigla' =>'VVPR11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,68',
                'dt_pagamento' => '07/04/20',
                'nr_cotistas' => '667',
                'vl_patrimonio' => '189.787.242,90'
            ],
            [
                'co_sigla' =>'WPLZ11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'Hedge Investments DTVM LTDA',
                'vl_ultimo_rendimento' => '0,25',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '2.218',
                'vl_patrimonio' => '96.018.702,42'
            ],
            [
                'co_sigla' =>'WTSP11B',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Híbrido',
                'ds_administrador' => 'Banco Ourinvest S.A.',
                'vl_ultimo_rendimento' => '0,28',
                'dt_pagamento' => '23/04/20',
                'nr_cotistas' => '162',
                'vl_patrimonio' => '90.423.572,12'
            ],
            [
                'co_sigla' =>'XPCI11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: CRIs',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,61',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '6.172',
                'vl_patrimonio' => '622.613.567,42'
            ],
            [
                'co_sigla' =>'XPCM11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Rio Bravo Investimentos',
                'vl_ultimo_rendimento' => '0,85',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '19.636',
                'vl_patrimonio' => '148.140.255,92'
            ],
            [
                'co_sigla' =>'XPHT11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Hotéis',
                'ds_administrador' => 'Genial Investimentos Corretora de Valores Mobiliários S.A.',
                'vl_ultimo_rendimento' => '0,34',
                'dt_pagamento' => '15/04/20',
                'nr_cotistas' => '1.604',
                'vl_patrimonio' => '469.107.792,84'
            ],
            [
                'co_sigla' =>'XPIN11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,56',
                'dt_pagamento' => '24/04/20',
                'nr_cotistas' => '26.513',
                'vl_patrimonio' => '717.274.539,29'
            ],
            [
                'co_sigla' =>'XPLG11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,58',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '131.214',
                'vl_patrimonio' => '1.670.626.538,48'
            ],
            [
                'co_sigla' =>'XPML11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Shoppings',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,5',
                'dt_pagamento' => '21/02/20',
                'nr_cotistas' => '186.468',
                'vl_patrimonio' => '1.929.024.242,20'
            ],
            [
                'co_sigla' =>'XPPR11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,5',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '19.857',
                'vl_patrimonio' => '414.451.783,33'
            ],
            [
                'co_sigla' =>'XPSF11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Papel: Fundo de Fundos',
                'ds_administrador' => 'Vórtx DTVM LTDA',
                'vl_ultimo_rendimento' => '0,65',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '2.661',
                'vl_patrimonio' => '311.812.429,63'
            ],
            [
                'co_sigla' =>'XTED11',
                'ds_alvo' => 'Geral',
                'ds_tipo' => 'Tijolo: Escritórios',
                'ds_administrador' => 'BTG Pactual',
                'vl_ultimo_rendimento' => '0,32',
                'dt_pagamento' => '14/07/16',
                'nr_cotistas' => '6.121',
                'vl_patrimonio' => '26.558.885,22'
            ],
            [
                'co_sigla' =>'YCHY11',
                'ds_alvo' => 'Investidor Qualificado',
                'ds_tipo' => 'Tijolo: Galpões',
                'ds_administrador' => 'Fram Capital DTVM SA',
                'vl_ultimo_rendimento' => '10,24',
                'dt_pagamento' => '14/04/20',
                'nr_cotistas' => '77',
                'vl_patrimonio' => '23.645.812,17'
            ]
        ]);
    }
}
