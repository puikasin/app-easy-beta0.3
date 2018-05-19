<template>
    <div>
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Create </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Zircos</a>
                                    </li>
                                    <li class="active">
                                        Create
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Input Types</b></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" @submit.prevent="create">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Title</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Title"
                                                           name="title" id="title" v-model="form.title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Categories</label>
                                                <div class="col-md-10">
                                                    <select v-model="form.category_id" class="form-control">
                                                        <option v-for="categorie in categories"
                                                                :value="categorie.id"
                                                        >{{ categorie.name }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Body</label>
                                                <div class="col-md-10">
                                                    <markdown-editor v-model="form.body" preview-class="markdown-body"
                                                                     id="body" name="body"></markdown-editor>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button class="btn btn-success waves-effect w-md waves-light m-b-5"
                                                            type="submit">Create
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "create",
        data() {
            return {
                form: {
                    title: null,
                    category_id: null,
                    body: null
                },
                categories: {},
                errors: {}

            }
        },
        created() {
            axios.get('/api/category')
                .then(res => this.categories = res.data.data)
        },
        methods: {
            create() {
                axios.post('/api/question', this.form)
                    .then(res => this.$router.push(res.data.path))
                    .catch(error => this.errors = error.response.data.error)
            },
        }
    }
</script>

<style>
    @import '~simplemde/dist/simplemde.min.css';

</style>