<template>
    <div class="container-alt">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 account-pages">
                        <div class="text-center account-logo-box">
                            <h2 class="text-uppercase">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/logo.png" alt="" height="36"></span>
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal" @submit.prevent="login">

                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="email" required placeholder="Email" id="email"
                                               name="email" v-model="form.email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" required placeholder="Password"
                                               id="password" name="password" v-model="form.password">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox-signup" type="checkbox" checked>
                                            <label for="checkbox-signup">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group text-center m-t-30">
                                    <div class="col-sm-12">
                                        <a href="page-recoverpw.html" class="text-muted"><i
                                                class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                    </div>
                                </div>

                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn w-md btn-bordered btn-danger waves-effect waves-light"
                                                type="submit">Log In
                                        </button>
                                    </div>
                                </div>

                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->


                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Don't have an account?
                                <router-link to="/signup">
                                    <a class="text-primary m-l-5"><b>Sign Up</b></a>
                                </router-link>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                form: {
                    email: null,
                    password: null
                }
            }
        },
        created() {
            if (User.loggedIn()) {
                this.$router.push({name: 'forum'})
            }
        },
        methods: {
            login() {
                User.login(this.form)
            }
        }
    }
</script>

<style scoped>

</style>