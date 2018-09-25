<template>
    <v-flex>
        <v-flex class="wrapper">
            <app-header></app-header>
            <app-works :works="works"></app-works>
            <app-contacts></app-contacts>
            <app-footer></app-footer>
        </v-flex>
    </v-flex>
</template>

<script>

    export default {
        props: {
            works: Array
        }
    }
</script>

<style scoped>

</style>