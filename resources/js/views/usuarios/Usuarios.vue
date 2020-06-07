<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                Tela de usuários
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: this.$route.meta.title || '',
            }
        },
        mounted() {
            // console.log(this.$route.meta.title);
        }
    }
</script>
