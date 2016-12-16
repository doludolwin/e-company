/* jshint esversion:6 */
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#panel',
    data:{
        image: ''
    },
    methods:{
        readURL(e){
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.showImage(files[0]);
        },
        showImage(file){
            console.log(e);
            // var image = new image();
            let reader = new FileReader();
            let vm = this;

            reader.onload = (e) => {
                vm.image = e.targt.result;
            };
            reader.readAsDataURL(file);
        }
    }
});
