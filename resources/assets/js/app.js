/* jshint esversion:6 */
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./croppie.js');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('card', require('./components/Card.vue'));


const app = new Vue({
    el: '#panel',
    data: {
        image: '',
        noImage: true
    },
    methods: {
        readURL(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.showImage(files[0]);
        },
        showImage(file) {
          // var image = new Image();
            let reader = new FileReader();
            let vm = this;

            reader.onload = (e) => {
                vm.image = e.target.result;
                $( "#draggable" ).draggable();
                vm.noImage = false;
            };
            reader.readAsDataURL(file);
        }
    }
});

$( document ).ready(() => {
    var $uploadCrop;
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();          
            reader.onload = (e) => {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                });
                $('.upload-demo').addClass('ready');
            }           
            reader.readAsDataURL(input.files[0]);
        }
    }
    $uploadCrop = $('#upload-demo').croppie({
        viewport: {
            width: 130,
            height: 130,
            type: 'circle'
        },
        boundary: {
            width: 130,
            height: 130
        },
        showZoomer: true
    });

    $('#upload').on('change', function () { readFile(this); });
    $('.upload-result').on('click', ev => {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'original'
        }).then(resp => {
            $('#imagebase64').val(resp);
            $('#form').submit();
        });
    });
});
