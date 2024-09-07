<? include "../../config/core.php";

	// Қолданушыны тексеру
	if (!$user_id) header('location: /education/');
	if (!$user['open']) $ubd = db::query("UPDATE `user` SET `open` = 1 WHERE id = '$user_id'");

	// Cours 
	$pay_course = db::query("select * from course_pay where user_id = '$user_id' ORDER BY ins_dt DESC");


	// Сайттың баптаулары
	$menu_name = 'my';
	$css = ['education/main', 'education/cours'];
	$js = ['education/main']; if ($user_right) $js = ['education/main', 'education/admin'];
?>
<? include "../block/header.php"; ?>

	<div class="ucours">

		<? // include "tabs.php"; ?>

		<div class="uc_d">
			<? while($pay_course_d = mysqli_fetch_assoc($pay_course)): ?>
				<? $course_id = $pay_course_d['course_id']; ?>
				<? $course_d = fun::course($course_id); ?>
				<? if ($pay_course_d['ins_dt'] != null && $pay_course_d['end_dt'] != null) $result = intval((strtotime($pay_course_d['end_dt']) - strtotime(date("d.m.Y"))) / (60*60*24)); ?>
				<? // if ($course_d['info']) $course_d = array_merge($course_d, fun::course_info($course_d['id'])); ?>

				<? if (!$course_d['arh']): ?>

					<a class="uc_di" href="../course/?id=<?=$course_id?>">
						<div class="bq_ci_img"><div class="lazy_img" data-src="/assets/uploads/course/<?=$course_d['img']?>"></div></div>
						<div class="uc_dit">
							<div class="bq_ci_info"><div class="bq_cih"><?=$course_d['name_'.$lang]?></div></div>
							<div class="uc_dib">
								<? if ($result > 0): ?>
									<div class="bq_ci_btn">
										<div class="btn btn_grs">
											<span>Начать урок</span>
											<i class="fal fa-long-arrow-right"></i>
										</div>
									</div>
								<? else: ?>
									<div class="bq_ci_btn">
										<div class="btn btn_grs">Доступ окончен</div>
									</div>
								<? endif ?>
							</div>
						</div>
					</a>

				<? endif ?>
				
			<? endwhile ?>
		</div>

	</div>

<? include "../block/footer.php"; ?>