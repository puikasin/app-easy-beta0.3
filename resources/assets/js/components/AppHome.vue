<template>
    <div>
        <toolbar></toolbar>
        <app-menu></app-menu>
    </div>

</template>

<script>

    import Toolbar from "./Toolbar";
    import AppMenu from "./AppMenu";

    export default {
        components: {AppMenu, Toolbar}
    }
</script>

<style scoped>

</style>
