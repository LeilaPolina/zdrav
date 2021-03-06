                    <p class="inline">Данная услуга предоставляется совместно с нашим партнером клиникой </p>
                    <img src="images/icons/kdl_logo2.png" class="img-inline kdl-logo">
                    <h1>Программа профилактического обследования</h1>
                    <div class="checkup-list inline">
                        <p><i class="fa fa-check" aria-hidden="true"></i>Сейчас выделено рекомендованное Вам по результатам теста</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Добавьте нужное Вам или уберите лишние позиции</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Нажмите кнопку "Заказать"</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Введите номер телефона</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>С Вами свяжется наш сотрудник для уточнения деталей прохождения чекапа</p>
                    </div>
                    <div class="inline">
                        <img src="images/home_checkup.png" class="inline img-checkup">
                    </div>
                    <hr>
                    <!-- <p class="total">Стоимость</p> <p class="checkup-pre-price">2900 руб.</p> -->
                    <h1 class="additional">Обследования:</h1>

                    <label class="container-checkbox">
                        <?php
                            echo '<input type="checkbox" checked="checked" class="checkup-option-only checkup-checkbox" id="base-checkup">';
                        ?>
                        <span class="checkmark"></span>
                        <span>Базовый домашний медосмотр</span>
                    </label>

                    <div class="info-right">
                        <div class="uzi-price"><?php echo $checkup_prices['Базовый домашний медосмотр']; ?> руб.</div>
                    </div><br>
                    <div class="uzi-stomach-additional">
                      <p>измерение веса и роста;</p>
                      <p>измерение давления;</p>
                      <p>экспресс анализ на сахар, холестерин, гемоглобин;</p>
                      <p>ЭКГ (проверка сердца);</p>
                      <p>проверка зрения.</p>
                    </div>

                    <label class="container-checkbox">
                            <input type="checkbox" checked="checked" class="checkup-option-only checkup-checkbox" id="uzi-stomach">
                            <span class="checkmark"></span>
                            <span>УЗИ брюшной полости на дому</span>
                    </label>

                    <div class="info-right">
                        <div class="uzi-price"><?php echo $checkup_prices['УЗИ брюшной полости на дому']; ?> руб.</div>
                    </div>
                    <div class="uzi-stomach-additional">
                        <p>железу поджелудочную;</p>
                        <p>орган-депо желчи;</p>
                        <p>почки и зону надпочечников;</p>
                        <p>печень;</p>
                        <p>селезенку.</p>
                    </div>

                    <label class="container-checkbox">
                            <?php
                                if($ch_uzi_liver){
                                    echo '<input type="checkbox" checked="checked" class="checkup-option-only checkup-checkbox" id="uzi-liver">';
                                }
                                else{
                                    echo '<input type="checkbox" class="checkup-option-only checkup-checkbox" id="uzi-liver">';
                                }
                            ?>
                            <span class="checkmark"></span>
                            <span>УЗИ печени и желчного органа</span>
                    </label>

                    <div class="info-right">
                        <div class="uzi-price"><?php echo $checkup_prices['УЗИ печени и желчного органа']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                            <input type="checkbox" checked="checked" class="checkup-option-only checkup-checkbox" id="uzi-pee">
                            <span class="checkmark"></span>
                            <span>УЗИ мочевого органа и мочеточников</span>
                    </label>

                    <div class="info-right">
                        <div class="uzi-price"><?php echo $checkup_prices['УЗИ мочевого органа и мочеточников']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                            <?php
                                if($ch_uzi_vessels){
                                    echo '<input type="checkbox" checked="checked" class="checkup-option-only checkup-checkbox" id="uzi-vessels">';
                                }
                                else{
                                    echo '<input type="checkbox" class="checkup-option-only checkup-checkbox" id="uzi-vessels">';
                                }
                            ?>
                            <span class="checkmark"></span>
                            <span>УЗИ сосудов нижних конечностей (вены + артерии)</span>
                    </label>

                    <div class="info-right">
                        <div class="uzi-price"><?php echo $checkup_prices['УЗИ сосудов нижних конечностей (вены + артерии)']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                            <?php
                                if($ch_uzi_heart){
                                    echo '<input type="checkbox" checked="checked" class="checkup-option-only checkup-checkbox" id="uzi-heart">';
                                }
                                else{
                                    echo '<input type="checkbox" class="checkup-option-only checkup-checkbox" id="uzi-heart">';
                                }
                            ?>
                            <span class="checkmark"></span>
                            <span>УЗИ сердца</span>
                    </label>

                    <div class="info-right">
                        <div class="uzi-price"><?php echo $checkup_prices['УЗИ сердца']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                            <?php
                                if($ch_xray_lungs){
                                    echo '<input type="checkbox" checked="checked" class="checkup-option-only checkup-checkbox" id="uzi-lungs">';
                                }
                                else{
                                    echo '<input type="checkbox" class="checkup-option-only checkup-checkbox" id="uzi-lungs">';
                                }
                            ?>
                            <span class="checkmark"></span>
                            <span>Рентген легких на дому</span>
                    </label>

                    <div class="info-right">
                        <div class="uzi-price"><?php echo $checkup_prices['Рентген легких на дому']; ?> руб.</div>
                    </div><br>

                    <!-- ANALYZES -->

                    <h1 class="additional">Анализы:</h1>

                    <label class="container-checkbox">
                        <input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">
                        <span class="checkmark"></span>
                        <span>Общий анализ крови</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="blood btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Общий анализ крови']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">
                        <span class="checkmark"></span>
                        <span>Биохимический анализ крови</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="blood btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Биохимический анализ крови']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">
                        <span class="checkmark"></span>
                        <span>Общий анализ мочи</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="pee btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Общий анализ мочи']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <input type="checkbox" class="an-option-only checkup-checkbox">
                        <span class="checkmark"></span>
                        <span>Гастрокомплекс</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>заболеваниям ЖКТ</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="gastro btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Гастрокомплекс']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                    <?php
                            if($an_gastro){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Диагностика диабета, биохимический</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>диабету</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="diabetes btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Диагностика диабета, биохимический']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <?php
                            if($an_cardio){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Кардиологический</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к заболеваниям <strong>сердечно сосудистой системы</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="cardio btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Кардиологический']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <?php
                            if($an_onco_m){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Онкологический для мужчин, биохимический</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>раковым</strong> заболеваниям (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="onco_m btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Онкологический для мужчин, биохимический']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <?php
                            if($an_onco_f){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Онкологический для женщин, биохимический</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>раковым</strong> заболеваниям (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="onco_f btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Онкологический для женщин, биохимический']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <?php
                            if($an_vessels){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Диагностика сосудистых заболеваний головного мозга</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к заболеваниям <strong>сосудистой системы головного мозга</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="vessels btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Диагностика сосудистых заболеваний головного мозга']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <?php
                            if($an_hormones_m){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Гормональный профиль (комплекс) для мужчин</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ для поддержания иммунитета и эндокринной системы в норме (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="hormones_m btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Гормональный профиль (комплекс) для мужчин']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <?php
                            if($an_hormones_f){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Гормональный профиль (комплекс) для женщин</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ для поддержания иммунитета и эндокринной системы в норме (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="hormones_f btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Гормональный профиль (комплекс) для женщин']; ?> руб.</div>
                    </div><br>

                    <label class="container-checkbox">
                        <?php
                            if($an_vitamins){
                                echo '<input type="checkbox" checked="checked" class="an-option-only checkup-checkbox">';
                            }
                            else{
                                echo '<input type="checkbox" class="an-option-only checkup-checkbox">';
                            }
                        ?>
                        <span class="checkmark"></span>
                        <span>Комплексный анализ крови на витамины</span>
                    </label>
                    <div class="info-right">
                        <div class="questionmark">
                            <span class="tooltip-content">Рекомендовано сдавать данный анализ для поддержания иммунитета и эндокринной системы в норме (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)</span>
                        </div>
                        <a class="vitamins btn-info">Подробнее</a>
                        <div class="analysis-price uzi-price"><?php echo $an_prices['Комплексный анализ крови на витамины']; ?> руб.</div>
                    </div><br>


                    <!-- /ANALYZES -->

                    <p><i class="fa fa-info-circle"></i> Результаты осмотра с комментариями врача будут доступны в личном кабинете в<br>течение 24 часов после прохождения обследования</p>
                    <p><i class="fa fa-info-circle"></i> Обследование проходит у вас дома или в офисе. Необходимо наличие стула, стола, а так<br>же небольшой кушетки (дивана) для УЗИ</p>
                    <hr>
                    <h1 class="inline">Стоимость для Москвы</h1>
                    <p class="total-number" id="checkup-price">10000 руб.</p>
                    <button class="inline" id="order-home-checkup">Заказать</button>
                    <p id="checkup-cashback">Кэшбэк <strong>100 руб.</strong> (3%)<p>
                    <h1 class="inline">Примерная длительность обследования:</h1>
                    <p class="total-time" id="checkup-time">0 минут</p>
