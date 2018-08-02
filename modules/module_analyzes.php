<?php 
    include("rec_analyses.php");
    include("rec_analyses_generation.php");
?>

<div class="threeb">
    <div class="rec-wrapper">
    <div class="rec-icon-container">
        <div class="icon-analyzes icon-rec"></div>
    </div>

    <div class="rec-container analyzes">
    <div class="rec-text-container">
        <div class="rec-text">Рекомендуем сдать следующие комплексы анализов и обследований</div>
    </div>
        <div class="analyzes-list-container">
			<ul class="rec-list">
                <li class="analyzes-list-title">Анализы</li>
                <?php
                generate_list_item("Общий анализ крови",true);
                generate_list_item("Биохимическй анализ крови",true,"blood","Рекомендовано сдавать данный анализ (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                generate_list_item("Общий анализ мочи",true,"pee","Рекомендовано сдавать данный анализ (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                if($an_gastro) {
                    generate_list_item("Гастрокомплекс",true,"gastro","Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>заболеваниям ЖКТ</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_diabetes) {
                    generate_list_item("Диагностика диабета, биохимический",true,"diabetes","Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>диабету</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_cardio) {
                    generate_list_item("Кардиологический",true,"cardio","Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к заболеваниям <strong>сердечно сосудистой системы</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_onco_m){
                    generate_list_item("Онкологический для мужчин, биохимический",true,"onco_m","Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>раковым</strong> заболеваниям (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_onco_f){
                    generate_list_item("Онкологический для женщин, биохимический",true,"onco_f","Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к <strong>раковым</strong> заболеваниям (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_vessels){
                    generate_list_item("Диагностика сосудистых заболеваний головного мозга",true,"vessels","Рекомендовано сдавать данный анализ на основании возможной генетической предрасположенности к заболеваниям <strong>сосудистой системы головного мозга</strong> (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_hormones_m){
                    generate_list_item("Гормональный профиль (комплекс) для мужчин",true,"hormones_m","Рекомендовано сдавать данный анализ для поддержания иммунитета и эндокринной системы в норме (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_hormones_f){
                    generate_list_item("Гормональный профиль (комплекс) для женщин",true,"hormones_f","Рекомендовано сдавать данный анализ для поддержания иммунитета и эндокринной системы в норме (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                if($an_vitamins){
                    generate_list_item("Комплексный анализ крови на витамины",true,"vitamins","Рекомендовано сдавать данный анализ для поддержания иммунитета и эндокринной системы в норме (до 40 лет – 1 раз в 2 года, 40-60 лет 1 раз в год, старше 60 лет 1 раз в пол года)");
                }
                ?>
            </ul>
            </div>
            <a class="rec-button" href="services.php#analyzes">Перейти</a>

            <div class="analyzes-list-container">
                <ul class="rec-list">
                <li class="analyzes-list-title">Обследования</li>
                <?php
                    generate_list_item("Измерение давления",false);
                    generate_list_item("ЭКГ",false);
                    generate_list_item("УЗИ брюшной полости",false);
                    generate_list_item("УЗИ мочевого органа и мочеточников",false);
                    if($ch_uzi_liver) {
                        generate_list_item("УЗИ печени и желчного органа",false);
                    }
                    if($ch_uzi_mammary) {
                        generate_list_item("УЗИ молочных желез",false);
                    }
                    if($ch_uzi_vessels) {
                        generate_list_item("УЗИ сосудов нижних конечностей (вены + артерии)",false);
                    }
                    if($ch_uzi_heart) {
                        generate_list_item("УЗИ сердца",false);
                    }
                    if($ch_xray_lungs) {
                        generate_list_item("Рентген легких",false);
                    }
                ?>
            </ul>
            </div>
        <a class="rec-button" href="services.php#home-checkup">Перейти</a>
    
        <div class="rec-text-container">
            <div class="rec-text">В нашем сервисе есть возможность заказать рекомендованные анализы с бесплатным выездом сестры на дом или в офис и с бесплатной их расшифровкой</div>
        </div>
        <div class="plus-life">+ 2 года жизни</div>
        </div>
    </div>
</div>