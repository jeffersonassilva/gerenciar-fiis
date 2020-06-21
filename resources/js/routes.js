import VueRouter from 'vue-router';

const routes = [
    {
        path: '',
        component: () => import('./views/dashboard/Dashboard'),
        meta: {
            title: 'Dashboard',
        }
    },
    {
        path: '/usuarios',
        component: () => import('./views/usuarios/Usuarios'),
        meta: {
            title: 'Usuários',
        }
    },
    {
        path: '/fiis',
        component: () => import('./views/fiis/Fiis'),
        meta: {
            title: 'Fiis',
        }
    },
    {
        path: '/cotas',
        component: () => import('./views/cotas/Cotas'),
        meta: {
            title: 'Cotas',
        }
    },
    {
        path: '/cotas/adicionar',
        component: () => import('./views/cotas/Adicionar'),
        meta: {
            title: 'Adicionar Nova Cota',
        }
    },
    {
        path: '/dividendos',
        component: () => import('./views/dividendos/Dividendos'),
        meta: {
            title: 'Dividendos',
        }
    },
    {
        path: '/dividendos/adicionar',
        component: () => import('./views/dividendos/Adicionar'),
        meta: {
            title: 'Adicionar Novo Dividendo',
        }
    },
    {
        path: '/recebiveis',
        component: () => import('./views/dividendos/Recebiveis'),
        meta: {
            title: 'Recebíveis',
        }
    },
];

const router = new VueRouter({
    routes // short for `routes: routes`
});

export default router;