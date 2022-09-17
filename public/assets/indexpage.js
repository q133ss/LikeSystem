function vkTypeSelect(val){
    $('#vk-likes-service').remove();
    $('#vk-polls-service').remove();
    $('#vk-subscribe-service').remove();

    if(val == 'vk-likes-service') {
        $('#service-area').append('<div class="mb-1" id="vk-likes-service">\n' +
            '                    <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>\n' +
            '                    <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                        <option value="400">Лайки качественные (70 руб.)</option>\n' +
            '                    </select>\n' +
            '                </div>');
    }

    if(val == 'vk-subscribe-service') {
        $('#service-area').append('<div class="mb-1" id="vk-subscribe-service">\n' +
            '                    <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>\n' +
            '                    <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                        <option value="463" id="vk_sub_first">Подписчики на страницу (150 руб.)</option>\n' +
            '                        <option value="464">Друзья в профиль (150 руб.)</option>\n' +
            '                        <option value="402">Подписчики на страницу качественные (80 руб.)</option>\n' +
            '                        <option value="399">Друзья в профиль качественные (150 руб.)</option>\n' +
            '                    </select>\n' +
            '                </div>');
    }

    if(val == 'vk-polls-service') {
        $('#service-area').append('<div class="mb-1" id="vk-polls-service">\n' +
            '                    <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>\n' +
            '                    <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                    </select>\n' +
            '                </div>');
    }
}


function serviceChange(service){
    $('#vk-form').hide();
    $('#inst-form').hide();
    $('#'+service+'-form').show();
}
