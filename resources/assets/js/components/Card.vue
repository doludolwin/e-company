<template>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <!-- card-header -->
            <div class="card-header">
                    <div class="card-profile-pic">
                        <div class="card-name">
                            <h4><slot name="admin-name"></slot></h4>
                            <p><slot name="post-date"></slot></p>
                        </div>
                    </div>
            </div>
            <!-- end-of-header -->
            <div class="card-body">
                <h1><slot name="post-header"></slot></h1>
                 <p><slot name="post-body"></slot></p>
            </div>
            <div class="card-image">
                <img src="images/images/sample.png" alt="" height="390px" width="350px">
            </div>
            <div class="card-social">
                <div class="share" @click="buttonShow">

                </div>
                <div class="social-share">
                    <a href="https://www.facebook.com/sharer.php?u=https://www.behance.net/sannssunny5f13">
                        <button :style="{ left: Styles.shareStylefb + 'px' }" type="button" name="button"></button>
                    </a>
                    <button :style="{ left: Styles.shareStyletw + 'px' }" type="button" name="button"></button>
                    <button :style="{ left: Styles.shareStylegp + 'px' }" type="button" name="button"></button>
                </div>
                <div class="comment-button" :style="{ left: Styles.commentStyle + 'px' }" @click="toggleComment">

                </div>
            </div>
            <div id="comments" class="comments">
                <div class="comment-wrapper">
                    <div class="ico">
                        <h3>S</h3>
                    </div>
                    <div class="comment-input" @click="init">
                        <textarea id="text" name="comment" rows="1" cols="80" placeholder="Write a comment.."></textarea>
                    </div>
                </div>
                <div class="comment-show">
                    <div class="ico">
                        <h3>J</h3>
                    </div>
                    <div class="comment-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data() {
            return{
                Styles: {
                    buttonStatus: false,
                    commentStyle: 50,
                    shareStylefb: 5,
                    shareStyletw: 5,
                    shareStylegp: 5
                }
            }
        },
        methods: {
            buttonShow(){
                if (!this.Styles.buttonStatus) {
                    this.Styles.buttonStatus = true;
                    this.Styles.commentStyle = 165;
                    this.Styles.shareStyletw = 40;
                    this.Styles.shareStylegp = 75;
                }
                else{
                    this.Styles.buttonStatus = false;
                    this.Styles.commentStyle = 50;
                    this.Styles.shareStyletw = 5;
                    this.Styles.shareStylegp = 5;
                }
            },
            // comment section toogle function
            toggleComment(){
              $( "#comments" ).slideToggle();
            },

            init(){
                var text = document.getElementById('text');
                function resize () {
                   text.style.height = 'auto';
                   text.style.height = text.scrollHeight+'px';
                }
                /* 0-timeout to get the already changed text */
                function delayedResize () {
                   window.setTimeout(resize, 0);
                }
                observe(text, 'change',  resize);
                observe(text, 'cut',     delayedResize);
                observe(text, 'paste',   delayedResize);
                observe(text, 'drop',    delayedResize);
                observe(text, 'keydown', delayedResize);
                function observe(element, event, handler){
                    if (window.attachEvent) {
                        element.attachEvent('on'+event, handler);
                    }
                    else {
                        element.addEventListener(event, handler, false);
                    }
                }
                text.focus();
                text.select();
                resize();
            }

        }
    }
</script>
