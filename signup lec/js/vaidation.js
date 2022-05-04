var $formvalidate = $('#signValidation');
if($formvalidate.lenght){
    $formvalidate.validate({
        rules:{
            required:true,
        },
        messages:{
            required:'This field is required'
        }
    })
}