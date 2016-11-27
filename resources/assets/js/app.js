
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(".delete").click(function (event){
    event.preventDefault();
    $("#delete-form").attr("action",$(this).attr('href'));
    $("#delete-form").submit();
});

$(".cancel").click(function(event){
    parent.history.back();
    return false;
});

$(".submit").click(function(event){
    event.preventDefault();
    $("#submit-form").submit();
});
