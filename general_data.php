<?php include('includes/config.php'); ?>
<?php
	if(!$user->is_logged_in()){ header('Location: index.html'); }

	include('modules/general_data_src.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Общие сведения</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/test.css" />
	<link rel="stylesheet" href="css/accordion.css" />
	<script src="jquery/jquery-3.1.1.min.js"></script>
	<script>
		window.index_mass = '<?php echo $index_mass; ?>';
	</script>
	<script src="jquery/jquery.maskedinput.min.js"></script>
	<script src="scripts/save_general_data.js"></script>
	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<!-- MULTISELECT -->
	<link rel="stylesheet" type="text/css" href="css/multiselect.css" />
	<script src="scripts/multiselect.js"></script>
	<script src="scripts/header.js"></script>
	<script src="scripts/signout.js"></script>
	<script src="scripts/accordions.js"></script>

	<!-- Yandex.Metrika counter --> 
	<script type="text/javascript">
		(function (d, w, c) { 
			(w[c] = w[c] || []).push(function() { 
				try { w.yaCounter40933314 = new Ya.Metrika({
					id:40933314, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true 
					}); } catch(e) { } 
		}); 
		var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { 
			n.parentNode.insertBefore(s, n); 
		}; 
		s.type = "text/javascript"; 
		s.async = true; 
		s.src = "https://mc.yandex.ru/metrika/watch.js"; 
		if (w.opera == "[object Opera]") { 
			d.addEventListener("DOMContentLoaded", f, false); 
		} 
		else { f(); } 
	})(document, window, "yandex_metrika_callbacks");
	</script> 
	<noscript><div><img src="https://mc.yandex.ru/watch/40933314" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
	<!-- /Yandex.Metrika counter -->   

	<!-- Rating@Mail.ru counter -->
	<script type="text/javascript">
	var _tmr = window._tmr || (window._tmr = []);
	_tmr.push({id: "2885114", type: "pageView", start: (new Date()).getTime()});
	(function (d, w, id) {
		if (d.getElementById(id)) return;
		var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
		ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
		var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
		if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
	})(document, window, "topmailru-code");
	</script><noscript><div>
	<img src="//top-fwz1.mail.ru/counter?id=2885114;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
	</div></noscript>
	<!-- //Rating@Mail.ru counter -->
	
	<!-- Google analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-96242372-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- /Google analytics -->

</head>
<body>

<?php
	include 'header.php';
?>

<div class="main">

	<div class="recommendations">
		<div class="personal-recommendations threeb">
			<a class="link-for-toggle" href="" onclick="return false">
				<div class="img-rec"></div>
				<div class="per-rec"><p>Личные рекомендации</p></div>
				<div class="rec-numb">12</div>
				<p>Свернуть</p>
			</a>
			<div class="toggle-inf hide">

			</div>
		</div>
		<div class="rec-list">
		<?php 
		
			include './modules/module_mass.php';

		if ($result_test['smoke'] == 1) {
			include './modules/module_smoke.php';
		}

		include './modules/module_analyzes.php';

		if ($result_test['homebodycheck'] == 1) {
			include './modules/module_homebodycheck.php';
		}

		if ($result_test['healthyfood'] == 1) {
			include './modules/module_healthyfood.php';
		}

		include './modules/module_tester.php';

		if ($result_test['healthyheart'] == 1) {
			include './modules/module_healthyheart.php';
		}

		if ($result_test['personal_manager'] == 1) {
			include './modules/module_personal_manager.php';
		}

		?>
	</div>
	</div>

	<form name="personal-inf"  id="save_gen_data">
	<div class="accordion">
		<p>
			<span class="accordions-left">Общие сведения</span>
			<span class="accordions-right">Открыть</span>
		</p>		
	</div>

	<div class="panel">
		<div class="service-content">
			<div class="private-office threeb">
				<div class="input-block">
					<form name="personal-inf"  id="save_gen_data">
						<div class="general-information">
							<p>Общая информация</p>
							<div class="input-name">
								<p>Как к Вам обращаться</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['name'].'" id="iname">';							
								?>
							</div>	
							<div class="input-sex">		
								<p>Пол</p>
								<?php
									if($user_data_arr['sex'] == 'male'){
										echo '<input type="radio" checked="checked" name="sex" value="Мужской" id="iman">';
										echo '<label for="man">Мужской</label>';
										echo '<input type="radio" name="sex" value="Женский" id="iwoman">';
										echo '<label for="woman">Женский</label>';
									}
									else{
										echo '<input type="radio" name="sex" value="Мужской" id="iman">';
										echo '<label for="man">Мужской</label>';
										echo '<input type="radio" checked="checked" name="sex" value="Женский" id="iwoman">';
										echo '<label for="woman">Женский</label>';
									}
								?>
							</div>
							<div class="input-birth">
								<p>Год рождения</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['year_birth'].'"  placeholder="гггг" id="iyear">';
								?>
							</div>
							<div class="input-height">
								<p>Рост, см</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['height'].'" id="iheight">';
								?>
							</div>
							<div class="input-weight">
								<p>Вес, кг</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['weight'].'" id="iweight">';
								?>
							</div>
						</div>

						<div class="lifestyle">
							<p>Образ жизни</p>
							<div class="input-work">
								<p>Работа</p>
								
								<select name="work" id="iwork">
								<?php							
									$work_query = $db->query('SELECT job_conditions_type_name, job_conditions_type_id FROM job_conditions_types ORDER BY job_conditions_type_id');
									while ($row = $work_query->fetch(PDO::FETCH_ASSOC)){
										if($row['job_conditions_type_name'] == $user_data_arr['job']){				
											echo '<option value='.$row['job_conditions_type_id'].' selected>'.$row[	'job_conditions_type_name'].'</option>';
										}
										else{								
											echo '<option value='.$row['job_conditions_type_id'].'>'.$row[	'job_conditions_type_name'].'</option>';
										}
									}
								?>
								</select>
								
							</div>
							
							<div class="input-smoke">
								<p>Курение</p>
														
								<select name="smoking" id="ismoke">
								<?php
									$smoking_query = $db->query('SELECT smoking_type_name, smoking_type_id FROM smoking_types ORDER BY smoking_type_id');
									while ($row = $smoking_query->fetch(PDO::FETCH_ASSOC)){
										if($row['smoking_type_name'] == $user_data_arr['smoking']){						
											echo '<option value='.$row['smoking_type_id'].' selected>'.$row['smoking_type_name'].'</option>';
										}
										else{								
											echo '<option value='.$row['smoking_type_id'].'>'.$row['smoking_type_name'].'</option>';
										}
									}
								?>
								</select>
								
							</div>
							
							<div class="input-sport">
								<p>Спорт</p>
														
								<select name="sport" id="isport">
								<?php
									$sport_query = $db->query('SELECT sport_activity_type_name, sport_activity_type_id FROM sport_activity_types ORDER BY sport_activity_type_id');
									while ($row = $sport_query->fetch(PDO::FETCH_ASSOC)){
										if($row['sport_activity_type_name'] == $user_data_arr['sport']){								
											echo '<option value='.$row['sport_activity_type_id'].' selected>'.$row['sport_activity_type_name'].'</option>';
										}
										else{								
											echo '<option value='.$row['sport_activity_type_id'].'>'.$row['sport_activity_type_name'].'</option>';
										}
									}
								?>
								</select>
							</div>
							<div class="input-food">
								<p>Питание</p>						
								<select name="food" id="ifood">
								<?php
									$food_query = $db->query('SELECT diet_type_name, diet_type_id FROM diet_types ORDER BY diet_type_id');
									while ($row = $food_query->fetch(PDO::FETCH_ASSOC)){
										if($row['diet_type_name'] == $user_data_arr['diet']){								
											echo '<option value='.$row['diet_type_id'].' selected>'.$row['diet_type_name'].'</option>';
										}
										else{								
											echo '<option value='.$row['diet_type_id'].'>'.$row['diet_type_name'].'</option>';
										}
									}
								?>
								</select>
								
							</div>
							<div class="input-children">
								<p>Дети</p>
								
								<select name="children" id="ichildren">
								<?php
									$children_query = $db->query('SELECT children_type_name, children_type_id FROM children_types ORDER BY children_type_id');
									while ($row = $children_query->fetch(PDO::FETCH_ASSOC)){
										if($row['children_type_name'] == $user_data_arr['children']){								
											echo '<option value='.$row['children_type_id'].' selected>'.$row['children_type_name'].'</option>';
										}
										else{								
											echo '<option value='.$row['children_type_id'].'>'.$row['children_type_name'].'</option>';
										}
									}
								?>
								</select>
								
							</div>
							
							<div class="input-alcohol">
								<p>Алкоголь</p>
								
								<select name="alcohol" id="ialcohol">
								<?php
									$alcohol_query = $db->query('SELECT alcohol_type_name, alcohol_type_id FROM alcohol_types ORDER BY alcohol_type_id');
									while ($row = $alcohol_query->fetch(PDO::FETCH_ASSOC)){
										if($row['alcohol_type_name'] == $user_data_arr['alcohol']){
											echo '<option value='.$row['alcohol_type_id'].' selected>'.$row['alcohol_type_name'].'</option>';
										}
										else{								
											echo '<option value='.$row['alcohol_type_id'].'>'.$row['alcohol_type_name'].'</option>';
										}
									}
								?>
								</select>
							</div>
						</div>

						<div class="diseases">
							<p>Заболевания</p>
							<div class="input-genetic_risks">
								<p>Генетические риски</p>
								<div class="gen-risks-selectBox" onclick="showCheckboxes()">
									<select id="gen_risks">
										<option>Нажмите, чтобы развернуть</option>
									</select>
									<div class="gen-risks-overSelect"></div>
								</div>						
								<div id="gen-risks-checkboxes">						
									<?php
										$risks_query = $db->query('SELECT relatives_death_causes_type_id, relatives_death_causes_type_name FROM relatives_death_causes_types ORDER BY relatives_death_causes_type_id');
										while ($row = $risks_query->fetch(PDO::FETCH_ASSOC)){
											if(in_array($row['relatives_death_causes_type_name'], $user_data_arr['risks'])){
												echo '<label><input type="checkbox" value='.$row['relatives_death_causes_type_id'].' name="risks_group" checked>'.$row['relatives_death_causes_type_name'].'</label>';
											}
											else{
												echo '<label><input type="checkbox" value='.$row['relatives_death_causes_type_id'].' name="risks_group">'.$row['relatives_death_causes_type_name'].'</label>';
											}
										}
									?>
								</div>
							</div>
							<div class="input-sick_before">
								<p>Чем болел(а) раньше</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['diseases'].'" id="isick">';
								?>
							</div>
							<div class="input-chronic_dis">
								<p>Хронические заболевания</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['chronical'].'" id="ichronic">';
								?>
							</div>
						</div>

						<div class="contacts-po">
							<p>Контакты</p>
							<div class="input-email">
								<p>e-mail</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['email'].'" id="iemail">';
								?>
							</div>
							<div class="input-telephone">
								<p>Телефон</p>
								<?php
									echo '<input type="text" value="'.$user_data_arr['phone'].'" placeholder="(xxx) xxx-xx-xx" id="itele">';
								?>
							</div>
						</div>						
				</div>
			</div>
		</div>
	</div>
	<input type="submit" id="save_gen_data_button" value="Сохранить" class="save-btn">			
	</form>

	<div class="time-link threeb">
		<div class="img-time"></div>
		<p class="info">Предоставить временный доступ к Личному кабинету по ссылке:</p>
		<p id="acctual-link">http://site.ru/url&2333?</p>
		<a class="" href="" onclick="return false">Открыть доступ</a>
	</div>

	<div class="family-profile threeb">
		<div class="img-family"></div>
		<p class="info">Создать семейный профиль</p>
		<p class="allfam">(ребенок, муж, жена, мама, папа, родственник)</p>
		<a class="" href="" onclick="return false">+ Добавить члена семьи</a>
	</div>

	<div class="services">
		<p>Сервисы</p>
		<a class="all-serv">Активировать все сервисы</a>
		<div class="click-services">
			
				<a class="weight-control threeb" href="" onclick="return false">
					<p>Контроль веса</p>
					<div class="trigger"></div>
				</a>
				<a class="healthy-eating threeb" href="" onclick="return false">
					<p>Здоровое питание</p>
					<div class="trigger"></div>
				</a>
				<a class="give-up-smoking threeb" href="" onclick="return false">
					<p>Отказ от курения</p>
					<div class="trigger"></div>
				</a>
			
				<a class="personal-health-manager threeb" href="" onclick="return false">
					<p>Персональный менеджер здоровья</p>
					<div class="trigger"></div>
				</a>
				<a class="reminder threeb" href="" onclick="return false">
					<p>Напоминания</p>
					<div class="trigger"></div>
				</a>
				<a class="immunity threeb" href="" onclick="return false">
					<p>Поднятие иммунитета</p>
					<div class="trigger"></div>
				</a>
			
				<a class="analyzes threeb" href="" onclick="return false">
					<p>Сдача анализов</p>
					<div class="trigger"></div>
				</a>
				<a class="home-bodycheck threeb" href="" onclick="return false">
					<p>Домашний медосмотр</p>
					<div class="trigger"></div>
				</a>
				<a class="healthy-heart threeb" href="" onclick="return false">
					<p>Здоровое сердце</p>
					<div class="trigger"></div>
				</a>
			
				<a class="wait-kid threeb" href="" onclick="return false">
					<p>Жду малыша</p>
					<div class="trigger"></div>
				</a>
				<a class="be-mom threeb" href="" onclick="return false">
					<p>Хочу быть мамой</p>
					<div class="trigger"></div>
				</a>
				<a class="be-dad threeb" href="" onclick="return false">
					<p>Хочу быть папой</p>
					<div class="trigger"></div>
				</a>
			
		</div>
	<div class="instructions">
   		<input type="checkbox" id="how_video" name="video" value="how_video">
    	<label for="video">Показывать видеоинструкции?</label>
  	</div>
	<hr>
	</div>
	<?php
		include("footer.php");
	?>
</div>
</body>
</html>
