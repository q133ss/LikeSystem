function serviceChange(category_id, count){
    for(i = 1; i<count; i++){
        $('#'+i+'-service-form').hide()
    }
    $('#'+category_id+'-service-form').show()
}
