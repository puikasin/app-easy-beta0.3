<template>
    <!-- Image Post -->
    <div class="blog-post m-b-30">
        <div class="post-title">
            <h3>{{data.title}}</h3>
            <span class="label label-danger">Lifestyle</span>
        </div>
        <div class="text-muted">
            <span>by <a class="text-dark font-secondary">{{data.user}}</a>,</span>
            <span>{{data.created_at}}</span>

        </div>

        <div>
            <p>
                {{data.body}}
            </p>
        </div>
        <div v-if="own">
            <button class="btn btn-icon btn-rounded waves-effect waves-light btn-default m-b-5" @click="edit"><i
                    class="fa fa-edit"></i></button>
            <button class="btn btn-icon btn-rounded waves-effect waves-light btn-danger m-b-5" @click="destroy"><i
                    class="fa fa-trash"></i></button>
        </div>
    </div>

    <!--<div class="m-t-50">-->
    <!--<h4 class="text-uppercase">About Author</h4>-->
    <!--<div class="border m-b-20"></div>-->

    <!--<div class="media">-->
    <!--<div class="media-left">-->
    <!--<a href="#"> <img class="media-object m-r-10" alt="64x64" src="assets/images/users/avatar-1.jpg" style="width: 96px; height: 96px;"> </a>-->
    <!--</div>-->
    <!--<div class="media-body">-->
    <!--<h4 class="media-heading">Daniel Syme</h4>-->
    <!--<p>-->
    <!--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque-->
    <!--ante sollicitudin commodo.-->
    <!--</p>-->

    <!--<a href="javascript:void(0);" class="btn btn-xs btn-success waves-light waves-effect">View Profile</a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<hr/>-->

    <!--<div class="m-t-50 blog-post-comment">-->
    <!--<h4 class="text-uppercase">Comments <small>(4)</small></h4>-->
    <!--<div class="border m-b-20"></div>-->

    <!--<ul class="media-list">-->

    <!--<li class="media">-->
    <!--<a class="pull-left" href="#">-->
    <!--<img class="media-object img-circle"-->
    <!--src="assets/images/users/avatar-2.jpg" alt="img">-->
    <!--</a>-->
    <!--<div class="media-body">-->
    <!--<h5 class="media-heading">Johnathan deo</h5>-->
    <!--<h6 class="text-muted">March 23, 2016, 11:45 am</h6>-->
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam-->
    <!--viverra euismod odio, gravida pellentesque urna varius-->
    <!--vitae. Sed dui lorem, adipiscing in adipiscing et, interdum-->
    <!--nec metus. Mauris ultricies, justo eu convallis placerat,-->
    <!--felis enim.</p>-->
    <!--<a href="#" class="text-success"><i-->
    <!--class="mdi mdi-reply"></i>&nbsp; Reply</a>-->
    <!--</div>-->
    <!--</li>-->

    <!--<li class="media">-->
    <!--<a class="pull-left" href="#">-->
    <!--<img class="media-object img-circle"-->
    <!--src="assets/images/users/avatar-3.jpg" alt="img">-->
    <!--</a>-->
    <!--<div class="media-body">-->
    <!--<h5 class="media-heading">John deo</h5>-->
    <!--<h6 class="text-muted">March 23, 2016, 11:45 am</h6>-->
    <!--<p>Nulla venenatis. In pede mi, aliquet sit amet, euismod in,-->
    <!--auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent-->
    <!--justo dolor, lobortis quis, lobortis dignissim, pulvinar ac,-->
    <!--lorem. Vestibulum sed ante.</p>-->
    <!--<a href="#" class="text-success"><i-->
    <!--class="mdi mdi-reply"></i>&nbsp; Reply</a>-->


    <!--<div class="media sub_media">-->
    <!--<a class="pull-left" href="#">-->
    <!--<img class="media-object img-circle"-->
    <!--src="assets/images/users/avatar-4.jpg" alt="img">-->
    <!--</a>-->
    <!--<div class="media-body">-->
    <!--<h5 class="media-heading">Johnathan deo</h5>-->
    <!--<h6 class="text-muted">March 23, 2016, 11:45 am</h6>-->
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing-->
    <!--elit. Nam viverra euismod odio, gravida pellentesque-->
    <!--urna varius vitae.</p>-->
    <!--<a href="#" class="text-success"><i-->
    <!--class="mdi mdi-reply"></i>&nbsp;-->
    <!--Reply</a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</li>-->

    <!--<li class="media">-->
    <!--<a class="pull-left" href="#">-->
    <!--<img class="media-object img-circle"-->
    <!--src="assets/images/users/avatar-5.jpg" alt="">-->
    <!--</a>-->
    <!--<div class="media-body">-->
    <!--<h5 class="media-heading">John deo</h5>-->
    <!--<h6 class="text-muted">March 23, 2016, 11:45 am</h6>-->
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam-->
    <!--viverra euismod odio, gravida pellentesque urna varius-->
    <!--vitae. Sed dui lorem, adipiscing in adipiscing et, interdum-->
    <!--nec metus. Mauris ultricies, justo eu convallis placerat,-->
    <!--felis enim.</p>-->
    <!--<a href="#" class="text-success"><i-->
    <!--class="mdi mdi-reply"></i>&nbsp; Reply</a>-->
    <!--</div>-->
    <!--</li>-->

    <!--</ul>-->

    <!--<h4 class="text-uppercase m-t-50">Leave a comment</h4>-->
    <!--<div class="border m-b-20"></div>-->

    <!--<form name="ajax-form" action="#" method="post" class="contact-form" data-parsley-validate="" novalidate="">-->

    <!--<div class="form-group">-->
    <!--<input class="form-control" id="name2" name="name" placeholder="Your name" type="text" value="" required="">-->
    <!--</div>-->
    <!--&lt;!&ndash; /Form-name &ndash;&gt;-->

    <!--<div class="form-group">-->
    <!--<input class="form-control" id="email2" name="email" type="email" placeholder="Your email" value="" required="">-->
    <!--</div>-->
    <!--&lt;!&ndash; /Form-email &ndash;&gt;-->

    <!--<div class="form-group">-->
    <!--<textarea class="form-control" id="message2" name="message" rows="5" placeholder="Message" required=""></textarea>-->
    <!--</div>-->
    <!--&lt;!&ndash; /Form Msg &ndash;&gt;-->

    <!--<div class="row">-->
    <!--<div class="col-xs-12">-->
    <!--<div class="">-->
    <!--<button type="submit" class="btn btn-custom" id="send">Submit</button>-->
    <!--</div>-->
    <!--</div> &lt;!&ndash; /col &ndash;&gt;-->
    <!--</div> &lt;!&ndash; /row &ndash;&gt;-->

    <!--</form>-->


    <!--</div>&lt;!&ndash; end m-t-50 &ndash;&gt;-->
    <!--</div>-->
</template>

<script>

    export default {
        name: "showQuestion",
        props: ['data'],
        data() {
            return {
                own: User.own(this.data.user_id)
            }
        },
        computed: {
            body() {
                return md.parse(this.data.body)
            }
        },
        methods: {
            destroy() {
                axios.delete(`/api/question/${this.data.slug}`)
                    .then(res => this.$router.push('/forum'))
                    .catch(erroe => console.log(error.response.data))
            },
            edit() {
                EventBus.$emit('startEditing')
            }
        }
    }
</script>

<style scoped>

</style>