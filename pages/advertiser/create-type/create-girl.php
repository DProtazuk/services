<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание материала Девушки</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/backend-php/advertiser/header-location.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/backend-php/advertiser/db-anketa.php");?>

<div class="myContainer py-4 d-flex justify-content-between">
        <div class="p-3 shadow bg-white" style="width: 70%;">
            <h5 class="text-center fw-bolder">Создание анкеты девушки:</h5>

            <div class="w-100 border mt-3 shadow-sm bg-light p-3">
                <h6 class="fs-14 fw-bolder">ОСНОВНАЯ ИНФОРМАЦИЯ:</h6>

                <div class="d-flex col-6 fs-6 mt-4 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Ваше имя <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input type="text" class="w-50" style="height:25px">
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Возраст, лет <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input type="text" class="w-50" style="height:25px">
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Вес, кг<img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input type="text" class="w-50" style="height:25px">
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Рост, см<img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input type="text" class="w-50" style="height:25px">
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Грудь <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input type="text" class="w-50" style="height:25px">
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Национальность <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <select class="w-50 cursor px-1 fs-14" style="height:25px" name="hero[]">
                        <option selected disabled>- Выберите значение -</option>
                        <?php select_nationality('1'); ?>
                    </select>
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Ориентация <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <select class="w-50 cursor px-1 fs-14" style="height:25px" name="hero[]">
                        <option selected disabled>- Выберите значение -</option>
                        <?php select_orientation('1'); ?>
                    </select>
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Цвет волос <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <select class="w-50 cursor px-1 fs-14" style="height:25px" name="hero[]">
                        <option selected disabled>- Выберите значение -</option>
                        <?php hair_color(); ?>
                    </select>
                </div>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Телосложение<img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <select class="w-50 cursor px-1 fs-14" style="height:25px" name="hero[]">
                        <option selected disabled>- Выберите значение -</option>
                        <?php body_type(); ?>
                    </select>
                </div>
            </div>

            <div class="w-100 border mt-3 shadow-sm bg-light p-3">
                <h6 class="fs-14 fw-bolder">КОНТАКТНАЯ ИНФОРМАЦИЯ:</h6>

                <div class="d-flex col-6 fs-6 mt-2 align-items-center justify-content-between">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Номер телефона <img class="m-1" width="8" height="8" src="/src/star.svg"></div> 
                    <input type="text" class="w-50 fs-14 px-2" id="phone" style="height:25px">
                </div>
            </div>

            <div class="w-100 border mt-3 shadow-sm bg-light p-3">
                <h6 class="fs-14 fw-bolder">МОИ ТАРИФЫ:</h6>
                <h6 class="fs-12 text-danger">Если вы не оказываете услуги в Апартаментах или на выезд, то оставьте поля пустыми</h6>

                <div class="w-100 d-flex justify-content-between">
                    <div class="col-6 border-end border-2">
                        <div class="d-flex col-11 fs-6 mt-2 align-items-center justify-content-between">
                            <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Апартаменты: 1 чаc</div> 
                            <input type="number" step="1000" class="col-4 fs-14 px-2" id="phone" style="height:25px">
                        </div>

                        <div class="d-flex col-11 fs-6 mt-2 align-items-center justify-content-between">
                            <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Апартаменты: 2 чаcа</div> 
                            <input type="number" step="2000" class="col-4 fs-14 px-2" id="phone" style="height:25px">
                        </div>

                        <div class="d-flex col-11 fs-6 mt-2 align-items-center justify-content-between">
                            <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Апартаменты: ночь</div> 
                            <input type="number" step="1" min="5000" class="col-4 fs-14 px-2" id="phone" style="height:25px">
                        </div>

                        <div class="d-flex col-11 fs-6 mt-2 align-items-center justify-content-between">
                            <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Экспресс программа</div> 
                            <input type="number" min="0" step="1" class="col-4 fs-14 px-2" id="phone" style="height:25px">
                        </div>
                    </div>

                    <div class="col-6 mx-3">
                        <div class="d-flex col-11 fs-6 mt-2 align-items-center justify-content-between">
                            <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Выезд: 1 чаc</div> 
                            <input type="number" step="1000" class="col-4 fs-14 px-2" id="phone" style="height:25px">
                        </div>

                        <div class="d-flex col-11 fs-6 mt-2 align-items-center justify-content-between">
                            <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Выезд: 2 чаcа</div> 
                            <input type="number" step="2000" class="col-4 fs-14 px-2" id="phone" style="height:25px">
                        </div>

                        <div class="d-flex col-11 fs-6 mt-2 align-items-center justify-content-between">
                            <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Выезд: ночь</div> 
                            <input type="number" step="1" min="5000" class="col-4 fs-14 px-2" id="phone" style="height:25px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 border mt-3 shadow-sm bg-light p-3">  
                <div class="d-flex w-100 justify-content-between align-items-center">
                    <h6 class="fs-14 fw-bolder">ОПИСАНИЕ О СЕБЕ И О СВОИХ УСЛУГАХ:</h6>

                    <div class="counterTextarea text-danger fw-bolder px-1 fs-12 border bg-warning" style="--bs-bg-opacity: 0.2; height: auto;">
                        <span id="numTextarea">0</span>
                        /
                        <span>200</span>
                    </div>
                </div>
                

                <div class="col-12 p-2 fs-12 border border-warning my-3 bg-warning" style=" --bs-bg-opacity: 0.1;">
                    1. Поле "О себе" должно быть максимально подробным (<span class="fw-bolder">не менее 200 символов</span>). Подробное, интересное, смысловое описание значительно увеличивает эффективность вашей анкеты.
                    <br>
                    2. Запрещено указывать любые контактные данные: <span class="fw-bolder">телефон, telegram, instagram, емайл и пр.!</span>
                </div>

                <textarea class="form-control fs-14" name="" id="textareaGirl" cols="30" rows="6" placeholder="Напишите подробное описание о себе и о своих услугах. Минимум 200 символов!"></textarea>
            </div>

            <div class="w-100 border mt-3 shadow-sm bg-light p-3">
                <h6 class="fs-14 fw-bolder">МОИ УСЛУГИ:</h6>
                <h6 class="fs-12 text-danger">Если одна из услуг требует дополнительной оплаты, то укажите ее в расположенном рядом поле.</h6>

                
                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between col-10">
                        <div class="col-5">
                            <h6 class="fs-14 fw-bolder">ОСНОВНЫЕ:</h6>
                        </div>

                        <div class="col-6">
                            <h6 class="fs-14 fw-bolder">ДОПЛАТА ЗА ОСНОВНЫЕ УСЛУГИ:</h6>
                        </div>
                    </div>    
                    <?php select_services('Основные'); ?>
                </div>

                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between col-10">
                        <div class="col-5">
                            <h6 class="fs-14 fw-bolder">ДОПОЛНИТЕЛЬНЫЕ:</h6>
                        </div>

                        <div class="col-6">
                            <h6 class="fs-14 fw-bolder">ДОПЛАТА ЗА ОСНОВНЫЕ УСЛУГИ:</h6>
                        </div>
                    </div>    
                    <?php select_services('Дополнительные'); ?>
                </div>

                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between col-10">
                        <div class="col-5">
                            <h6 class="fs-14 fw-bolder">САДО-МАЗО:</h6>
                        </div>

                        <div class="col-6">
                            <h6 class="fs-14 fw-bolder">ДОПЛАТА ЗА САДО-МАЗО УСЛУГИ:</h6>
                        </div>
                    </div>    
                    <?php select_services('Садо-мазо'); ?>
                </div>

                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between col-10">
                        <div class="col-5">
                            <h6 class="fs-14 fw-bolder">ЭКСТРИМ:</h6>
                        </div>

                        <div class="col-6">
                            <h6 class="fs-14 fw-bolder">ДОПЛАТА ЗА ЭКСТРИМ УСЛУГИ:</h6>
                        </div>
                    </div>    
                    <?php select_services('Экстрим'); ?>
                </div>

                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between col-10">
                        <div class="col-5">
                            <h6 class="fs-14 fw-bolder">МАССАЖ:</h6>
                        </div>

                        <div class="col-6">
                            <h6 class="fs-14 fw-bolder">ДОПЛАТА ЗА МАССАЖ:</h6>
                        </div>
                    </div>    
                    <?php select_services('Массаж'); ?>
                </div>

                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between col-10">
                        <div class="col-5">
                            <h6 class="fs-14 fw-bolder">ИНДИВИДУАЛЬНЫЕ УСЛУГИ:</h6>
                        </div>

                        <div class="col-6">
                            <h6 class="fs-14 fw-bolder">ДОПЛАТА ЗА ИНДИВИД. УСЛУГИ</h6>
                        </div>
                    </div>    

                    <?php
                    $count_individual_services = 4; 
                        for($i=1; $i<$count_individual_services+1; $i++){
                            echo '<div class="d-flex justify-content-between col-10 mt-1">
                            <div class="col-px-2 d-flex fs-14">
                                <input id="individual_services'.$i.'" placeholder="'.$i.'." type="text" style="height:25px" class="px-2 mx-2 individual_services">
                            </div>
    
                            <div class="col-6 px-2 d-flex fs-14">
                                <span>+</span>
                                <input disabled type="number" min="0" class="col-5 px-2 mx-2 individual_services'.$i.'" style="height:25px">
                            </div>
                        </div>';
                        }
                    ?>
                </div>
            </div>

            <div class="col-12 mt-3 border bg-light p-3">
                <h6 class="fs-14 fw-bolder text-center">ПРАВИЛА ЗАГРУЗКИ ФОТОГРАФИЙ:</h6>

                <div class="col-12 p-2 px-5 fs-12 border border-warning my-3 bg-warning" style=" --bs-bg-opacity: 0.1;">
                    <span class="fw-bolder">1.</span> В анкете должно быть загружено <span class="fw-bolder">минимум 3 фото</span> в хорошем качестве!
                    <br>
                    <span class="fw-bolder">2.</span> На фотографиях НЕ должно быть «печати»/логотипов других сайтов!
                    <br>
                    <span class="fw-bolder">3.</span> На фотографиях НЕ должны быть указаны любые контактные данные!
                    <br>
                    <span class="fw-bolder">4.</span> На фотографиях НЕ могут быть сцены с половым актом!
                    <br>
                    <span class="fw-bolder">5.</span> Фотографии <span class="fw-bolder">НЕ ДОЛЖНЫ быть «порнографией»</span>, максимум – легкая эротика. То есть фото строго <span class="fw-bolder">БЕЗ гениталий!!!</span>
                    <br>
                    <span class="fw-bolder">6.</span> Запрещено использовать фото взятые с соц. сетей!
                </div>

                <div class="col-12 px-2">
                    <div class="d-flex text-nowrap fw-bolder" style="font-size: 13px">Добавить новый файл<img class="m-1" width="8" height="8" src="/src/star.svg"></div> 

                    <div class="col-12 p-2 d-flex flex-wrap align-items-center div_create_img_girl">
                        <div class="col-3 mx-2 ">
                            <img id="img_girl_1" data-input="img_input1" src="/src/+.png" class="col-12 cursor img_plus img_anketa_girl">
                            <input data-check="1" data-img="img_girl_1" id="img_input1" type="file" class="d-none">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 mt-3 border bg-light p-3">
                <h6 class="fs-14 fw-bolder text-center">ФОРМА ЗАГРУЗКИ ПРОВЕРОЧНОГО ФОТО</h6>
                
                <div class="col-12 p-2 px-5 fs-12 border border-warning my-3 bg-warning" style=" --bs-bg-opacity: 0.1;">
                    <span class="fw-bolder">Требования к проверочному фото:</span> 
                    <br>
                    <span class="fw-bolder">1.</span>  На проверочном фото должны быть вы в полный рост с открытым лицом, держа в руках лист бумаги на котором будет написана <span class="fw-bolder">сегодняшняя дата</span> и название сайта <span class="fw-bolder">eburg-xxx.net</span> .
                    <br>
                    <span class="fw-bolder">2.</span> На проверочном фото не должно быть ретуши или фильтра.
                    <br>
                </div>

                <div class="col-12 p-2 d-flex flex-wrap align-items-center">
                        <div class="col-3 mx-2 ">
                            <img src="/src/+.png" class="col-12 cursor img_plus img_girl_verification">
                            <input data-img="img_girl_verification" id="img_girl_verification" type="file" class="d-none">
                        </div>
                </div>

                <div class="col-12 p-2 px-5 fs-12 border border-danger border-2 my-3 bg-warning" style=" --bs-bg-opacity: 0.1;">
                      При попытки обмануть администратора, подсунув на проверку анкету с "левыми фото" (типажные фото скаченные с интернета) или проверочным фото, измененное в графическом редакторе с целью обмана, анкета будет <span class="fw-bolder">НАВСЕГДА заблокирована!</span>  К нарушителю будут применены самые жесткие меры!
                </div>

                <h6 class="text-danger fw-bolder mt-4 text-decoration-underline erorApproval"></h6>

                <div class="form-check mt-4 fs-14 ">
                    <input class="form-check-input" type="checkbox" value="" id="approval">
                    <label class="form-check-label text-decoration-underline cursor" for="approval">
                        Я внимательно все прочитал-(а) и соглашаюсь со всеми условиями, написанными выше.
                    </label>
                </div>

                <button id="btnApproval" disabled="disabled" type="button" class="btn btn-success col-4 mt-3" style="--bs-bg-opacity: 0.8 !important;">Создать Анкету</button>
            </div>
        </div>
        

        <div style="width: 25%;">
            <div class="col-12 shadow bg-white p-3">
                <div class="my-4 mt-2">
                    <h5 class="fw-bolder">Мои Анкеты</h5>
                    <h6 class="fs-14 text-danger">Анкеты девушек (1)</h6>
                    <h6 class="fs-14 text-danger">Анкеты массажисток (0)</h6>
                    <h6 class="fs-14 text-danger">Анкеты трансcексуалов (0)</h6>
                    <h6 class="fs-14 text-danger">Анкеты парней (0)</h6>
                    <h6 class="fs-14 text-danger">Анкеты салонов (0)</h6>
                    <h6 class="fs-14 text-danger">Анкеты саун (0)</h6>
                </div>

                <div class="my-4">
                    <h5 class="fw-bolder">Меню пользователя</h5>
                    <h6 class="fs-14 text-danger">Стоимость платных услуг</h6>
                    <h6 class="fs-14 text-danger">Вопросы и ответы</h6>
                </div>

                <div class="my-4">
                    <h5 class="fw-bolder">Мой профиль</h5>
                    <h6 class="fs-14 text-danger">История операций</h6>
                    <h6 class="fs-14 text-danger">Редактировать профиль</h6>
                </div>

                <div class="my-4">
                    <h5 class="fw-bolder">Тех. поддержка</h5>
                    <h6 class="fs-14 text-danger">Написать в тех. поддержку</h6>
                </div>
            </div>
        </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/layouts/footer.php"); ?>
</body>
</html>


<style>
    .fs-14 {
        font-size: 14px;
    }

    .fs-12 {
        font-size: 12px;
    }
</style>