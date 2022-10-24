$(document).ready(function(){
    $('#selectModel').change(function(){
        if($(this).data('options') == undefined){
            $(this).data('options', $('#selectStorage option').clone());
        }
        var id = $(this).val();
        var options = $(this).data('options').filter('[data-value=' + id + ']');
        $('#selectStorage').html(options).show();
    });

    $('#selectStorage').change(function(){
        if($(this).data('options') == undefined){
            $(this).data('options', $('#selectColor option').clone());
        }
        var id = $(this).val();
        var options = $(this).data('options').filter('[data-value=' + id + ']');
        $('#selectColor').html(options).show();
    });
});

