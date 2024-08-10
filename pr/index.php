<? include "../config/core.php";

   
   $course_id = 1;


   // 
	$site_name = 'course';
   $site_set['header'] = false;   
   $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   // $site_set['footer'] = false;
   $css = ['project/fitnessabi'];
   $js = ['project/fitnessabi'];


   // 
   $whatsapp = '77786364950';
   $wh_txt1 = 'Төлем жасадым, чек ..';

?>
<? include "../block/header.php"; ?>
<? unset($_SESSION['loader']); ?>

   <div class="blo1">
      <div class="bl_c">
         <div class="blo1_c">
            <div class="blo1_ts">
               <div class="blo1_tsi">
                  <i class="fal fa-calendar-alt"></i>
                  <div class="blo1_tsic">                     
                     <p>Басталуы:</p>
                     <p>12.08.24</p>
                  </div>
               </div>
               <div class="blo1_tsi">
                  <i class="fal fa-play"></i>
                  <div class="blo1_tsic">
                     <p>Формат:</p>
                     <p>Онлайн</p>
                  </div>
               </div>
            </div>
            <div class="blo1_t">
               <h1 class="blo1_tof">Күніне небәрі 30-40 минут <br> уақыт бөлу арқылы сәбиіңізге <br> сау болашақ силаңыз!</h1>
               <p>Баланың дені сау болуы үшін массаж емес <br> <b>моторлы дамуын білу қажет.</b></p>
               <div class="blo1_tb">
                  <a class="btn" href="#price">Қатысқым келеді</a>
               </div>
            </div>
            <div class="blo1_s">
               <div class="blo1_ss lazy_img" data-src="/assets/img/bag/IMG_9309.JPG"></div>
               <div class="blo1_cm">
                  <div class="blo1_cm2">
                     <p>Жеңілдіктің аяқталуына:</p>
                     <div class="blo1_cmc">
                        <div class=""><div class="">02</div><span>күн</span></div>
                        <p>:</p>
                        <div class=""><div class="">16</div><span>сағат</span></div>
                        <p>:</p>
                        <div class=""><div class="">25</div><span>минут</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


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
               <div class="blo8_ci blo8_c78">
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
      </div>
   </div>


<? include "../block/footer.php"; ?>
   
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