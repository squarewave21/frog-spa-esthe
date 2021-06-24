<?php
/****************************************
  Template Name: セラピスト一覧
*****************************************/
;?>
<?php include('load-schedule.php');?>
<?php get_header(); ?>
<section class="page-therapists section-bg">
  <h2 class="page-title">セラピスト一覧</h2>
  <?php $users = get_users( array('order'=>'ASC', 'orderby'=>'meta_value_num', 'meta_key'=>'priority', 'exclude'=>'') );?>
  <ul class="therapists-listwrap">
    <?php
    foreach($users as $girls):
    $uid =$girls->ID;
    $userData = get_userdata($uid);
    ?>
    <?php if($userData->attmgr_ex_attr_staff): ?>
    <li class="therapist-page-list<?php if($userData->newface) echo ' new';?>">
      <div class="therapist-img-wrap">
        <div class="therapist-img">
          <a href="<?php echo home_url().'/?author='.$uid;?>" class="expand-link"><?php echo get_avatar( $uid ,420);?></a>

        </div>
        <?php if($girls->option_fee): ?>
        <p class="option-fee-pc">指名料+<?php echo $girls->option_fee;?></p>
        <?php else : ?>
        <p class="option-fee-pc">指名料+1000</p>
        <?php endif;?>
        
        <?php if( $girls->basic_oil || $girls->doba_oil ):?>
        <div class="oil pc">
        <?php if($girls->basic_oil):?>
          <span class="item">フロッグコース可</span>
        <?php endif; if($girls->doba_oil):?>
          <span class="item">フロッグSPコース可</span>
        <?php endif;?>
        </div>
        <?php endif; ?>
        
      </div>
      <div class="therapist-info-flexwrap">
        <div class="therapist-infowrap">
          <div class="therapist-contentwrap">
            <p class="therapist-name"><?php echo $girls->display_name;?><span class="age">（<?php if(!empty($girls->fage)) echo $girls->fage;?>）</span></p>
            <p class="therapist-tall">身長：<?php echo $girls->tall;?><span>cm</span></p>
          </div>
          <p class="therapist-more"><a href="<?php echo home_url().'/?author='.$uid;?>">もっとみる</a></p>
        </div>
        <p class="therapist-text">
          <?php echo $userData->user_description;?>
        </p>
        <?php if($girls->option_fee): ?>
        <p class="option-fee-sp">指名料+<?php echo $girls->option_fee;?></p>
        <?php else : ?>
        <p class="option-fee-sp">指名料+1000</p>
        <?php endif;?>
      </div>
      <?php if( $girls->basic_oil || $girls->doba_oil ):?>
      <div class="oil sp">
      <?php if($girls->basic_oil):?>
        <span class="item">フロッグコース可</span>
      <?php endif; if($girls->doba_oil):?>
        <span class="item">フロッグSPコース可</span>
      <?php endif;?>
      </div>
      <?php endif; ?>
    </li>

    <?php endif;?>
    <?php endforeach;?>
  </ul>

</section>
<?php get_footer(); ?>