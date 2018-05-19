<template>
    <!-- Text Post -->
    <div class="blog-post m-b-30">
        <div class="post-image">
            <div class="bg-brown text-white p-20">
                <i class="fa fa-quote-left fa-3x fa-pull-left"></i>

                {{data.title}}

            </div>
            <span class="label label-danger">Lifestyle</span>
        </div>
        <div class="text-muted"><span>by <a class="text-dark font-secondary">{{data.user}}</a>,</span> <span>{{data.created_at}}</span>
        </div>
        <div class="post-title">
            <router-link :to="data.path">
                <h3> {{data.title}}</h3>
            </router-link>
        </div>
        <div>
            <p>{{data.body}}</p>
        </div>
        <div class="text-right">
            <router-link :to="data.path">
                <a class="btn btn-success btn-sm waves-effect waves-light">Read More <i
                        class="mdi mdi-arrow-right m-l-5"></i></a>
            </router-link>
        </div>
    </div>

</template>

<script>
    export default {
        name: "question",
        props: ['data']
    }
</script>

<style scoped>

</style>