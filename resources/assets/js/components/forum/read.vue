<template>
    <div>
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Blog Detail </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Zircos</a>
                                    </li>
                                    <li class="active">
                                        Blog Detail
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="blog-list-wrapper">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="p-20">
                                    <div v-if="question">
                                        <edit-question v-if="editing"
                                                       :data=question
                                        ></edit-question>

                                        <show-question v-else
                                                       :data="question"

                                        ></show-question>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->


                            <menu-right></menu-right>

                        </div>
                        <!-- end row -->
                    </div>


                </div> <!-- container -->

            </div> <!-- content -->

            <app-footer></app-footer>
        </div>
    </div>
</template>

<script>
    import ShowQuestion from "./showQuestion";
    import MenuRight from "./menuRight";
    import AppFooter from "../AppFooter";
    import EditQuestion from "./editQuestion";

    export default {
        name: "read",
        components: {EditQuestion, AppFooter, MenuRight, ShowQuestion},
        data() {
            return {
                question: null,
                editing: false
            }
        },
        created() {

            this.listen()
            this.getQuestion()

        },
        methods: {
            listen() {
                EventBus.$on('startEditing', () => {
                    this.editing = true
                })
                EventBus.$on('cancelEditing', () => {
                    this.editing = false
                })
            },
            getQuestion() {
                axios.get(`/api/question/${this.$route.params.slug}`)
                    .then(res => this.question = res.data.data)
            }
        }
    }
</script>

<style scoped>

</style>