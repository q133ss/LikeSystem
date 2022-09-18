function serviceChange(category_id, count){
    for(i = 1; i <= count; i++){
        $('#'+i+'-service-form').hide()
    }
    $('#'+category_id+'-service-form').show()

    //ищем выбранную услугу
    let select = $('#'+category_id+'-service-form > .card > .card-body > #service-area > .mb-1 > select').val();
    //Выводим инфу о ней
    serviceInfo(select)
}

function serviceInfo(id){
    $.ajax({
        url: '/api/get-service/'+id,
        method: 'GET',
        headers: {
           'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: 1,
        cache: false,
        success: function (data) {
            $('#info-service-name').text(data.name)
            $('#info-service-price').text(data.price+'₽')
            $('#info-service-quality').text(data.quality)
            $('#info-service-start').text(data.start)
            $('#info-service-speed').text(data.speed)
            $('#info-service-write_offs').text(data.write_offs)
            $('#info-service-guarantee').text(data.guarantee)
            $('#info-service-max').text(data.max)
            $('#info-service-peculiarities').text(data.peculiarities)
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(xhr.responseText);
        }
    });
}
