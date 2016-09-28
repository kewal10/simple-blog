/*jslint browser:true, devel:true, white:true, vars:true */
/*global $:false */
/* jshint strict: false, -W117 */

$(function() {
    
    $.validator.setDefaults({
       highlight: function(element) {
           $(element)
           .closest('.form-group')
           .addClass('has-error')
           .addClass('.error');

       },
        unhighlight: function(element) {
           $(element)
           .closest('.form-group')
           .removeClass('has-error')
           .removeClass('.error');
       }
    });
    
    
   $("#userForm").validate({
       
       rules: {
           email: {
               required: true,
               email: true
           },
           password: "required",
           password2: {
               required: true,
               equalTo: "#password"
           },
           firstName: {
               required: true,
               nowhitespace: true,
               lettersonly: true
           },
           
            lastName: {
               required: true,
               nowhitespace: true,
               lettersonly: true
           },

           username: {
               required: true,
               minlength: 4
           },
           
            message: {
               required: true
           }
           
       },
       messages: {
           firstName: {
               required: 'Please enter First Name'
           },
           
           lastName: {
               required: 'Please enter Last Name'
           },
           
           email: {
               required: 'Please enter a email address.',
               email: 'Please enter a <em>valid</em> address'
           },
           
           username: {
               required: 'Please enter username at least 4 characters'
           },
           
           password: {
               required: 'Please enter a password'
           },
           
           message: {
               required: 'Please enter your message'
           }
       }
   }); 
});




$(document).ready(function(){
    $("#logon").click(function(){
        $(".hidden:first").addClass("show");
    })});


$(document).ready(function() {
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });
});









































