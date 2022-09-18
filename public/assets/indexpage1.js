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


//INSTAGRAM

function instTypeSelect(val){
    $('#inst-subscribe-service').remove();
    $('#inst-likes-service').remove();
    $('#inst-view-service').remove();
    $('#inst-history-service').remove();
    $('#inst-live-service').remove();
    $('#inst-comments-service').remove();
    $('#inst-coverage-service').remove();
    $('#inst-save-service').remove();

    if(val == 'inst-subscribe-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-subscribe-service">\n' +
            '                            <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                            <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                                <option value="383">Подписчики RU & ЖИВЫЕ (65 руб.)</option>\n' +
            '                                <option value="428">Подписчики MIX REAL (45 руб.)</option>\n' +
            '                                <option value="375">Подписчики БЕЗ ОТПИСОК (45 руб.)</option>\n' +
            '                                <option value="263">Подписчики (30 руб.)</option>\n' +
            '                            </select>\n' +
            '                        </div>');
    }

    if(val == 'inst-like-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-likes-service">\n' +
            '                            <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                            <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                                <option value="384">Лайки RU & ЖИВЫЕ (18 руб.)</option>\n' +
            '                                <option value="376">Лайки [Без списаний] (18 руб.)</option>\n' +
            '                                <option value="350">Лайки (3 руб.)</option>\n' +
            '                                <option value="479">Лайки быстрые (20 руб.)</option>\n' +
            '                                <option value="505">Лайки RU [30R] (6.30 руб.)</option>\n' +
            '                            </select>\n' +
            '                           </div>');
    }

    if(val == 'inst-view-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-view-service">\n' +
            '                            <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                            <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                                <option value="123">Просмотры видео (2 руб.)</option>\n' +
            '                                <option value="119">Просмотры видео с охватом быстрее (25 руб.)</option>\n' +
            '                            </select>\n' +
            '                        </div>');
    }

    if(val == 'inst-history-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-history-service">\n' +
            '                            <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                            <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                                <option value="172">Просмотры историй (Stories) - 1.50p</option>\n' +
            '                                <option value="135">Просмотры историй (Stories) - 2p</option>\n' +
            '                            </select>\n' +
            '                        </div>');
    }
    if(val == 'inst-live-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-live-service">\n' +
            '                        <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                        <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                            <option value="340">Зрители в прямой эфир - 500p</option>\n' +
            '                        </select>\n' +
            '                    </div>');
    }
    if(val == 'inst-comments-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-comments-service">\n' +
            '                        <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                        <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                            <option value="396">Комментарии (положительные) - 500p</option>\n' +
            '                        </select>\n' +
            '                    </div>');
    }
    if(val == 'inst-coverage-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-coverage-service">\n' +
            '                        <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                        <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                            <option value="343">Охват публикации - 6p</option>\n' +
            '                            <option value="342">Охват публикации - 5p</option>\n' +
            '                        </select>\n' +
            '                    </div>');
    }
    if(val == 'inst-save-service'){
        $('#inst-service-area').append('<div class="mb-1" id="inst-save-service">\n' +
            '                        <label class="form-label" for="basicSelect">Вид накрутки</label>\n' +
            '                        <select class="form-select" name="service_id" id="basicSelect">\n' +
            '                            <option value="173">Сохранения - 0.40p</option>\n' +
            '                            <option value="133">Сохранения - 0.60p</option>\n' +
            '                        </select>\n' +
            '                    </div>');
    }
}
