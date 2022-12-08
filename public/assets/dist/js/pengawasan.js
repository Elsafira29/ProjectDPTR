$(document).ready(function(){
    $('#tabelpengawasan').submit(function(event){
        event.preventDefault();

        $.validator.addMethod("valueNotEquals", function (value, element, arg) {
            return arg != value;
        }, "value must not equal arg.");

        $("#tabelpengawasan").validate({

            highlight: function (input) {
                $(input).parents('.mb-2').addClass('error');
            },
            unhighlight: function (input){
                $(input).parents('.mb-2').removeClass('error');
            },
            errorPlacement: function (error, element){
                $(element).parents('.mb-2').append(error);
            },

            rules: {
                kabupaten: "required",

            },
            messages: {
                kabupaten : "Kabupaten tidak boleh kosong",  
            },

        })
    })
});
