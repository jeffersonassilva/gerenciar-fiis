<template>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
                <ul>
                    <li><router-link to="/usuarios">Usuários</router-link></li>
                    <li><router-link to="/fiis">Fiis</router-link></li>
                    <li><router-link to="/cotas">Cotas</router-link></li>
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
