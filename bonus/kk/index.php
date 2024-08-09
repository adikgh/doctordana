<? include "../../config/core.php";

	if ($_GET['v'] == 1) {
		$v = 'YtehnEPImFI';
		$name = 'Бонус сабақ БЛОГ';
	}
	// else if ($_GET['v'] == 2) {
	// 	$v = 'PqQ7NHfy3K0';
	// 	$name = 'Баланы қатты құндақтау қаншалықты дұрыс?';
	// }
	// else if ($_GET['v'] == 3) {
	// 	$v = 'HXE5WS0cMmY';
	// 	$name = 'Жаралы солдан болып еңбектеуді неге түзету керек?';
	// }



   $whatsapp = '77786364950';
   $wh_txt1 = 'Төлем жасадым, чек ..';

   // $site_set['header'] = false;
   // $site_set['footer'] = false;
   // $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   $site_set['swiper'] = true;
   $css = ['ln', 'bonus'];
   $js = ['ln'];
?>
<? include "../../block/header.php"; ?>

   <? if ($_GET['v']): ?>
      <div class="">
         <div class="bl_c">
            <div class="bonus">
               <h4 class="bonus_name"><?=$name?></h4>
               <div class="bonus_c">
                  <div class="bonus_l">
                     <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id="<?=$v?>"></div>
                  </div>
               </div>
   
            </div>
         </div>
      </div>
   <? else: ?>
      <div class="blo1">
         <div class="bl_c">
            <div class="blo1_c">
               <div class="blo1_ts">
                  <div class="blo1_tsi">
                     <div class="blo1_tsic">      
                        <p>1 СӘУІР</p>
                        <p>марафон басталады</p>
                     </div>
                  </div>
               </div>
               <div class="blo1_t">
                  <p>Баланың сау болашағының баспалдағы — дұрыс күтімнен басталады</p>
                  <h1>“Балаға базалық күтім“ марафоны</h1>
               </div>
               <div class="blo1_s">
                  <div class="blo1_ss_1 lazy_img" data-src="/assets/img/bag/chrome_Z62FynRJ14.png"></div>
                  <div class="blo1_ss_2 lazy_img" data-src="/assets/img/bag/chrome_BD2K5wD3yO.png"></div>
                  <div class="blo1_ss lazy_img" data-src="/assets/img/bag/L18A8519 2.png"></div>
                  <div class="blo1_tb">
                     <a class="btn" href="#price">Қатысқым келеді</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <? endif ?>

   <div class="<?//=($_GET['v']?'ooi':'')?>">
   
      <!--  -->
      <div class="blo3 blo35">
         <div class="bl_c">
            <div class="blo3p">
               <div class="head_c txt_c">
                  <h1>Практикум кімдерге <br> арналған?</h1>
                  <!-- <p>1 жасқа дейінгі сәбиі бар аналарға</p> -->
               </div>
               <div class="blo3_c">
                  <div class="blo3_i">Участокта педиатр немесе ВОП болып жүрген коллегаларға</div>
                  <div class="blo3_i">Гостан частныйға шыққысы келетін врачтарға</div>
                  <div class="blo3_i">Өз білімін жаңартып, жоғары деңгейге жеткізгісі келетіндерге</div>
                  <div class="blo3_i">Декретте отырған аналарға</div>
                  <div class="blou_tb">
                     <p>Бұл практикум сіз үшін!</p>
                     <!-- <p>Тіпті, екінші, үшінші сәбиіңіз болса да, <br> бұл марафон әрқашан өзекті!</p> -->
                     <div class="blo5_bb">
                        <a class="btn" href="#price">Қатысқым келеді</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   
      <!--  -->
      <div class="blo8" id="price">
         <div class="bl_c">
            <div class="head_c txt_c">
               <h1>Практикум бағдарламасы</h1>
            </div>
            <div class="blo8_c">
               <div class="blo8_cse">
                  <div class="lazy_img" data-src="/assets/img/bag/open-gifts-bs r.png"></div>
               </div>
               <div class="blo8_ci blo8_c78">
                  <!-- <div class="blo8_cin">Мамандарға</div> -->
                  <ul class="blo8_ciс">
                     <li><i class="fal fa-gift"></i><span>10 күн бойы күнде 1 клиникалық кейс  талдау</span></li>
                     <li><i class="fal fa-gift"></i><span>Педиатриядағы эффектитвті емдеу жолдарын үйрену</span></li>
                     <li><i class="fal fa-gift"></i><span>Инста арқылы табысты арттыруды білу</span></li>
                     <li><i class="fal fa-gift"></i><span>Топовый доктор болудың үш жолы</span></li>
                     <li><i class="fal fa-gift"></i><span>Балаларға тез диагноз қойып, дұрыс ем жазу стратегиялары</span></li>
                     <li><i class="fal fa-gift"></i><span>“Педиатр ретінде өз блогыңды дамытып, табыс көзіне айналдыру” бонус сыйлық сабақ</span></li>
                  </ul>
                  <div class="blo8_cip">
                     <div class="blo8_cipo">
                        <div class="blo8_cipoi">26 000 тенге</div>
                     </div>
                     <div class="blo8_cip_btn">
                        <div class="btn btn_ukl" data-price="26 000" data-price2="0">Төлем жасаймын</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="blo8_csr">
            <div class="lazy_img" data-src="/assets/img/bag/open-gifts-bs s.png"></div>
         </div>
      </div>
   </div>


<? include "../../block/footer.php"; ?>

   <div class="oko">
      <div class="oko_a oko_close"></div>
      <div class="oko_s">
         <div class="menuc_cb">
            <div class="btn btn_dd2 oko_close"><i class="fal fa-times"></i></div>
         </div>
         <div class="bl_c">
            <div class="oko_sc">
               <div class="oko_s_name">Төлеу үшін KASPI GOLD картаға аударыңыз</div>
               <img class="lazy_card copy" onclick="copytext('87012063905')" data-src="/assets/img/card/s_kaspi.png" />
               <div class="oko_s_s">Нөмірді көшіру үшін, картаны басыңыз</div>
               <div class="oko_s_p">Ватсапқа чек жіберіңіз</div>
               <a href="https://wa.me/<?=$whatsapp?>?text=<?=$wh_txt1?>" target="_blank" class="btn btn_cl">Жіберу</a>
            </div>
         </div>
      </div>
   </div>

   <script>
      $('html').on('click', '.plyr__control', function(){
         setTimeout(function () { 
            $('.ooi').addClass('ooi2');
         }, 15000)
      })
   </script>