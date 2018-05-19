<template>
    <div>
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Blog List </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Zircos</a>
                                    </li>
                                    <li>
                                        <a href="#">Blogs </a>
                                    </li>
                                    <li class="active">
                                        Blog List
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


                                    <question
                                            v-for="question in questions"
                                            :key="question.path"
                                            :data=question
                                    ></question>
                                </div>
                            </div>

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


    import Question from "./question";
    import MenuRight from "./menuRight";
    import AppFooter from "../AppFooter";


    export default {
        name: "Forum",
        data() {
            return {
                questions: {}
            }
        },
        components: {AppFooter, MenuRight, Question},

        created() {
            axios.get('/api/question')
                .then(res => this.questions = res.data.data)
                .catch(error => console.log(error.response.data))
        }

    }
</script>

