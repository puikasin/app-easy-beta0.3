<template>
    <div>
        <div v-if="username">
            <toolbar></toolbar>
            <app-menu></app-menu>
        </div>
        <router-view></router-view>
    </div>


</template>

<script>

    import Toolbar from "./Toolbar"
    import AppMenu from "./AppMenu"
    import Login from "./login/Login";


    export default {
        components: {Login, AppMenu, Toolbar},
        data() {
            return {
                username: User.name()
            }
        }

    }
</script>

<style scoped>

</style>
