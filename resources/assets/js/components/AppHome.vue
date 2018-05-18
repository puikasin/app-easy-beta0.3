<template>
    <div>
        <toolbar></toolbar>
        <app-menu></app-menu>
        <router-view></router-view>
    </div>


</template>

<script>

    import Toolbar from "./Toolbar"
    import AppMenu from "./AppMenu"
    import Login from "./login/Login";


    export default {
        components: {Login, AppMenu, Toolbar}
    }
</script>

<style scoped>

</style>
