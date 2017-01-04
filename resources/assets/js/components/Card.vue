<template>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <!-- card-header -->
            <div class="card-header">
                    <div class="card-profile-pic">
                        <div class="card-name">
                            <h4>Jiran kurian</h4>
                            <p>Nov15,2015</p>
                        </div>
                    </div>
            </div>
            <!-- end-of-header -->
            <div class="card-body">
                <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                 <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullam.<p>
            </div>
            <div class="card-image">
                <img src="images/images/sample.png" alt="" height="390px" width="350px">
            </div>
            <div class="card-social">
                <div class="share">

                </div>
                <div class="social-share">
                    <button type="button" name="button"></button>
                    <button type="button" name="button"></button>
                    <button type="button" name="button"></button>
                </div>
                <div class="comment-button">

                </div>
            </div>
            <div class="comments">
                <div class="ico">
                    <h3>S</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return{
                hoverStatus: false
            }
        },
        methods: {
            shareHover(){
                this.hoverStatus = true;
            }
        }
    }
</script>
