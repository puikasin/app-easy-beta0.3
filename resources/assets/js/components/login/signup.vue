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
                            <form class="form-horizontal" @submit.prevent="signup">
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" placeholder="Name" id="name"
                                               name="name" v-model="form.name">
                                        <ul class="parsley-errors-list filled" v-if="errors.name">
                                            <li class="parsley-required">{{errors.name[0]}}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="email" placeholder="Email" id="email"
                                               name="email" v-model="form.email">
                                        <ul class="parsley-errors-list filled" v-if="errors.email">
                                            <li class="parsley-required">{{errors.name[0]}}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" placeholder="Password"
                                               id="password"
                                               name="password" v-model="form.password">
                                        <ul class="parsley-errors-list filled" v-if="errors.password">
                                            <li class="parsley-required">{{errors.password[0]}}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password"
                                               placeholder="password_confirmation" id="password_confirmation"
                                               name="password_confirmation" v-model="form.password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox-signup" type="checkbox" checked="checked">
                                            <label for="checkbox-signup">I accept <a href="#">Terms and
                                                Conditions</a></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn w-md btn-danger btn-bordered waves-effect waves-light"
                                                type="submit">Register
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
                            <p class="text-muted">Already have account?
                                <router-link to="/login">
                                    <a class="text-primary m-l-5"><b>Sign In</b></a>
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
        name: "signup",
        data() {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                    password_confirmation: null
                },
                errors: {}
            }
        },
        created() {
            if (User.loggedIn()) {
                this.$router.push({name: 'forum'})
            }
        },
        methods: {
            signup() {
                axios.post('/api/auth/signup', this.form)
                    .then(res => {
                        User.responseAfterLogin(res)
                        this.$router.push({name: 'forum'})
                    })
                    .catch(error => this.errors = error.response.data.errors)
            }
        }
    }

</script>

<style scoped>

</style>