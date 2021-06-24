<?php
/****************************************
  Template Name: 出勤情報
*****************************************/
;?>
<?php include('load-schedule.php');?>
<?php get_header(); ?>
<section class="page-schedule section-bg">
  <div class="page-schedule-border inner">
    <h2 class="page-title">スケジュール</h2>
    <div class="inner">
      <div class="date-tab">
        <?php
        for($i=0; $i<7; $i++) {
          $day_list = date('Y-m-d', strtotime("+".$i."day"));
          if($i==0) {
            echo '<label class="date-tab-item selected" for="day'.$i.'">';
          } else {
            echo '<label class="date-tab-item" for="day'.$i.'">';
          }
          echo date("n/j", strtotime("+".$i."day", current_time('timestamp')));
          echo '<span class="date-tab-week">('.$week[date('w',strtotime("+".$i."day", current_time('timestamp')))].')</span></label>';
          echo '</label>';
        }
        ?>
      </div>

      <?php for($j=0; $j<7; $j++):?>
        <input type="radio" name="date-select" id="day<?php echo $j;?>" <?php if($j==0) echo 'checked';?> hidden>
      <?php endfor;?>

      <section class="page-schedule-therapists">
        <div class="schedule-therapists-wrap">
          <?php for($k=0; $k<7; $k++):?>
          <?php $day = date('Y-m-d', strtotime('+'.$k.'day', current_time('timestamp'))); ?>
          <div class="box">
            <h2 class="page-schedule-title-day"><?php echo date('n/j', strtotime('+'.$k.'day', current_time('timestamp'))).'('.$week[date('w', strtotime('+'.$k.'day', current_time('timestamp')))].')'.'の出勤情報';?></h2>

            <ul class="therapist-list-wrap">
              <?php 
              if($rows) {
                $count = 0;
                foreach($rows as $val) {
                  if($val->date === $day) {
                    $staff = $val->staff_id;
                    $count += 1;
                    $user_id = get_the_author_meta('ID', $val->staff_id);
                    $newface = get_the_author_meta('newface', $val->staff_id);
                    $option_fee = get_the_author_meta('option_fee', $val->staff_id);
                    $basic_oil = get_the_author_meta('basic_oil', $val->staff_id);
                    $doba_oil = get_the_author_meta('doba_oil', $val->staff_id);
                    if($newface && $user_id) {
                      print('<li class="therapist-list new">');
                    } elseif($user_id) {
                      print('<li class="therapist-list">');
                    }
                    if($user_id){
                      print('<p class="therapist-list-image">'.'<a href="'.home_url().'?author='.$val->staff_id.'" class="expand-link">'.get_avatar($val->staff_id, 420).'</a>'.'</p>');
                      print('<p class="therapist-list-name">'.get_the_author_meta('display_name', $val->staff_id).'<span class="age">（'.get_the_author_meta('fage', $val->staff_id).'）</span></p>');
                      print('<p class="therapist-list-tall">'.'身長：'.get_the_author_meta('tall', $val->staff_id).' cm'.'</p>');
                      print('<p class="therapist-list-worktime">');
                      if($val->workplace && strcmp($val->workplace, "未選択")){
                        print($val->workplace. '<br>');
                      }
                      print(preg_replace('/([0-9]{2})\:([0-9]{2})\:(00)/','$1:$2', $val->starttime).'～'.preg_replace('/([0-9]{2})\:([0-9]{2})\:(00)/','$1:$2', $val->endtime).'</p>');
                      print('<div class="page-schedule-staff-prof-content">');
                    }
                    if($option_fee && $user_id) {
                      print('<p class="therapist-list-option">'.'指名料+'.get_the_author_meta('option_fee', $val->staff_id).'</p>');
                    }elseif($user_id) {
                      print('<p class="therapist-list-option">'.'指名料+1000'.'</p>');
                    }
                    if( $basic_oil || $doba_oil ){
                      print('<div class="oil">');
                      if($basic_oil){
                        print('<span class="item">フロッグコース可</span>');
                      }
                      if($doba_oil){
                        print('<span class="item">フロッグSPコース可</span>');
                      }
                      print('</div>');
                    }
                    if($user_id){
                      print('</div></li>');
                    }
                  } elseif($val==end($rows) && $count==0) {
                    print('<li class="panel-nostaff">現在出勤情報はございません。</li>');
                  }
                }
              }
              ?>
            </ul>
          </div>
          <?php endfor;?>
        </div>
      </section>
    </div>
  </div>
</section>
<?php get_footer(); ?>