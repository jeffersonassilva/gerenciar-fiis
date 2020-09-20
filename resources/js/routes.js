import VueRouter from 'vue-router';
import Dashboard from './views/dashboard/Dashboard';
import Usuarios from './views/usuarios/Usuarios';
import Fiis from './views/fiis/Fiis';
import Cotas from './views/cotas/Cotas';
import CotasAdd from './views/cotas/Adicionar';
import Dividendos from './views/dividendos/Dividendos';
import DividendosAdd from './views/dividendos/Adicionar';
import DividendosRecebiveis from './views/dividendos/Recebiveis';
import Rendimentos from './views/rendimentos/Rendimentos';

const routes = [
    {
        path: '',
        component: Dashboard,
        meta: {
            title: 'Dashboard',
        }
    },
    {
        path: '/usuarios',
        component: Usuarios,
        meta: {
            title: 'Usuários',
        }
    },
    {
        path: '/fiis',
        component: Fiis,
        meta: {
            title: 'Fiis',
        }
    },
    {
        path: '/cotas',
        component: Cotas,
        meta: {
            title: 'Cotas',
        }
    },
    {
        path: '/cotas/adicionar',
        component: CotasAdd,
        meta: {
            title: 'Adicionar Nova Cota',
        }
    },
    {
        path: '/dividendos',
        component: Dividendos,
        meta: {
            title: 'Dividendos',
        }
    },
    {
        path: '/dividendos/adicionar',
        component: DividendosAdd,
        meta: {
            title: 'Adicionar Novo Dividendo',
        }
    },
    {
        path: '/recebiveis',
        component: DividendosRecebiveis,
        meta: {
            title: 'Recebíveis',
        }
    },
    {
        path: '/rendimentos',
        component: Rendimentos,
        meta: {
            title: 'Rendimentos',
        }
    },
];

const router = new VueRouter({
    routes // short for `routes: routes`
});

export default router;