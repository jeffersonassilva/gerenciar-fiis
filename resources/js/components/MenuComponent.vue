<template>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
                <ul>
                    <li><router-link to="/">Dashboard (u)</router-link></li>
                    <li><router-link to="/usuarios">Usuários (s)</router-link></li>
                    <li><router-link to="/fiis">Fiis (s)</router-link></li>
                    <li><router-link to="/dividendos">Dividendos (s)</router-link></li>
                    <li><router-link to="/cotas">Cotas (u)</router-link></li>
                    <li><router-link to="/recebiveis">Recebíveis (u)</router-link></li>
                    <li><router-link to="/rendimentos">Rendimentos (u)</router-link></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>
