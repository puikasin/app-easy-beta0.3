<template>
    <div class="col-sm-4">
        <div class="p-20">

            <div class="">
                <h4 class="text-uppercase">Search</h4>
                <div class="border m-b-20"></div>
                <div class="form-group search-box">
                    <input type="text" id="search-input" class="form-control" placeholder="Search here...">
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </div>
            </div>

            <div class="m-t-50">
                <h4 class="text-uppercase">Categories</h4>
                <div class="border m-b-20"></div>

                <ul class="blog-categories-list list-unstyled">
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Videos</a></li>
                </ul>
            </div>

            <div class="m-t-50">
                <h4 class="text-uppercase">Latest Post</h4>
                <div class="border m-b-20"></div>

                <div class="media latest-post-item">
                    <div class="media-left">
                        <a href="#"> <img class="media-object" alt="64x64" src="assets/images/small/img-1.jpg"
                                          style="width: 100px; height: 66px;"> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading"><a href="#">Exclusive: Get a First Look at the Fall Collection</a>
                        </h5>
                        <p class="font-13 text-muted">
                            Sep 03, 2016 | John Deo
                        </p>
                    </div>
                </div>

                <div class="media latest-post-item">
                    <div class="media-left">
                        <a href="#"> <img class="media-object" alt="64x64" src="assets/images/small/img-3.jpg"
                                          style="width: 100px; height: 66px;"> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading"><a href="#">The Most Impressive London Streets</a></h5>
                        <p class="font-13 text-muted">
                            Sep 03, 2016 | John Deo
                        </p>
                    </div>
                </div>

                <div class="media latest-post-item">
                    <div class="media-left">
                        <a href="#"> <img class="media-object" alt="64x64" src="assets/images/small/img-4.jpg"
                                          style="width: 100px; height: 66px;"> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading"><a href="#">How To Beat The Heat</a></h5>
                        <p class="font-13 text-muted">
                            Aug 21, 2016 | John Deo
                        </p>
                    </div>
                </div>

            </div>


            <div class="m-t-50">
                <h4 class="text-uppercase">Newsletter</h4>
                <div class="border m-b-20"></div>

                <form>
                    <div class="input-group m-t-10">
                        <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control"
                               placeholder="Email">
                        <span class="input-group-btn">
                                                    <button type="button"
                                                            class="btn waves-effect waves-light btn-primary">Submit</button>
                                                    </span>
                    </div>
                </form>
            </div>

        </div>
    </div> <!-- end col -->
</template>

<script>
    export default {
        name: "menuRight"
    }
</script>

<style scoped>

</style>