<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Edit</b></h4>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" @submit.prevent="update">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Title"
                                           name="title" id="title" v-model="form.title">
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
                                    <button class="btn btn-default waves-effect w-md waves-light m-b-5" @click="cancel"
                                            type="submit">Cancel
                                    </button>

                                    <button class="btn btn-success waves-effect w-md waves-light m-b-5"
                                            type="submit">Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "editQuestion",
        props: ['data'],
        data() {
            return {
                form: {
                    title: null,
                    body: null,
                }
            }
        },
        methods: {
            cancel() {
                EventBus.$emit('cancelEditing')
            },
            update() {
                axios.patch(`/api/question/${this.form.slug}`, this.form)
                    .then(res => this.cancel())
            }
        },
        mounted() {
            this.form = this.data
        }
    }
</script>

<style>
    @import '~simplemde/dist/simplemde.min.css';
</style>