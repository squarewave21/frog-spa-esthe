<?php include('load-schedule.php');?>
<?php $user_twitter = get_field('twitter_shop','user_1'); ?>
<?php get_header(); ?>

<div class="mainvisual">
  <div class="main-img-innerwrap">
    <p class="business-hours">営業時間 12:00〜27:00（受付時間 11:00〜25:30）</p>
    <p class="sp-credit"><a href="https://pay2.star-pay.jp/site/pc/shop.php?tel=&payc=A2038&guide=" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/credit.png" alt=""></a></p>
    <div class="slider">
      <?php $args= array(
        'post_type' => 'banner',
        'posts_per_page' => 5,
        'paged' => get_query_var('paged'),
      );
      $the_query = new WP_Query($args);
      if($the_query->have_posts()):
      ?>
      <?php while($the_query->have_posts()) : $the_query->the_post();?>
      <div class="slider-img">
      <?php
        $image = get_field('banner_img');
        $link = get_field('banner_link');
        if($image && $link) {
          echo '<a href="'.$link.'" rel="noopener" target="_blank">';
          echo wp_get_attachment_image($image, 'full');
          echo '</a>';
        } elseif($image) {
          echo wp_get_attachment_image($image, 'full');
        }
        ?>
        </div>
        <?php endwhile; else: ?>
        <div class="noslide">
          <p>投稿はまだありません。</p>
        </div>
        <?php endif; wp_reset_postdata();?>
      </div>
    </div>
    <ul class="mainvisual-menu">
      <li class="mainvisual-menu-list"><a href="<?php echo home_url('/therapists'); ?>">セラピスト一覧<span>THERPIST</span></a></li>
      <li class="mainvisual-menu-list"><a href="<?php echo home_url('/schedule'); ?>">出勤情報<span>SCHEDULE</span></a></li>
    </ul>
  </div>
  
  <main class="main">
    <div class="main-inner">
    <div class="top-therapists-bg">
      <div class="therapists-container top-therapists-container">
        <section class="therapists-wrap">
          <h2 class="therapists-title">本日出勤のセラピスト</h2>
          <?php $day = current_time('Y-m-d'); ?>
          <div class="schedule-therapists-wrap  top-schedule-therapist-wrap">
            <div class="box">
              <ul class="therapist-list-wrap">
              <?php 
              if($rows) {
                $count = 0;
                $image = get_field('prof-img1');
                foreach($rows as $val) {
                  if($val->date === $day ) {
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
                        print($val->workplace.'<br>');
                      }
                      print( preg_replace('/([0-9]{2})\:([0-9]{2})\:(00)/','$1:$2', $val->starttime).'～'.preg_replace('/([0-9]{2})\:([0-9]{2})\:(00)/','$1:$2', $val->endtime).'</p>');
                      print('<div class="page-schedule-staff-prof-content">');
                      if($option_fee) {
                        print('<p class="therapist-list-option">'.'指名料+'.get_the_author_meta('option_fee', $val->staff_id).'</p>');
                      } else {
                        print('<p class="therapist-list-option">'.'指名料+1000'.'</p>');
                      }
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
          </div>
          <p class="therapist-link"><a href="<?php echo home_url('/schedule'); ?>">週間スケジュールはコチラから<span><img src="<?php echo get_template_directory_uri() ?>/images/arrow-right.png" alt="矢印"></span></a></p>
        </section>
        
        <section class="twitter">
         <h2 class="twitter-title"><img src="<?php echo get_template_directory_uri() ?>/images/twitter.png" alt="twitterアイコン"></h2>
         <div class="twitter-inner">
            <?php if($user_twitter) : ?>
            <div class="twitter-wrap">
              <a class="twitter-timeline" data-lang="ja" data-height="666" href="https://twitter.com/<?php echo $user_twitter; ?>?ref_src=twsrc%5Etfw">Tweets by frogspa184</a>
              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <p class="twitter-link"><a href="https://twitter.com/<?php echo $user_twitter; ?>" target="_blank">Twitterで表示<span><img src="<?php echo get_template_directory_uri() ?>/images/arrow-right.png" alt="矢印"></span></a></p>
            <?php endif;?>
          </div>
        </section>
				</div>
				</div>
				<section class="about">
				  <div class="">
				    <h2 class="about-title"><span>FROG SPA</span>とは?</h2>
				    <p class="about-title-text">当店がお約束する３つの事<br>フロッグスパ(当店)が考える</p>

				    <div class="about-contentwrap">
				      <div class="pcabout-conten-flextwrap">
				        <div class="about-content">
				          <div class="about-content-flexwrap">
				            <h3 class="about-content-title"><span><img src="<?php echo get_template_directory_uri() ?>/images/about-before1.png" alt=""></span>オイルマッサージの手法(技術)とは</h3>
				            <p class="about-content-text">フロッグスパのすべてのセラピストにメンズエステとしての癒しの提供を
				              心がけるよう強く思い指導しています。<br>
				              従来『メンズエステ』で大事に考えるべきディープリンパ施術(鼠径部)には
				              格別に強い思いがあります。</p>
				          </div>
				          <div class="about-image-wrap">
				            <p class="about-image"><img src="<?php echo get_template_directory_uri() ?>/images/sample-bg.jpg" alt="当店ポイント１画像"></p>
				          </div>
				        </div>
				        <div class="about-content">
				          <div class="about-content-flexwrap">
				            <h3 class="about-content-title"><span><img src="<?php echo get_template_directory_uri() ?>/images/about-before2.png" alt=""></span>オイルマッサージへの特化</h3>
				            <p class="about-content-text">フロッグスパのすべてのコースにご満足頂けるように努力を務めます。<br>
				              パウダー、ホイップクリームなど様々な楽しみ方も良いですが当店
				              メンズエステの『原点』を重要視しており、スタンダードオイルマッサージに
				              特化した店舗運営をしていく事をお約束します。</p>
				          </div>
				          <div class="about-image-wrap">
				            <p class="about-image"><img src="<?php echo get_template_directory_uri() ?>/images/about-img2.jpg" alt="当店ポイント２画像"></p>
				          </div>
				        </div>
				        <div class="about-content">
				          <div class="about-content-flexwrap">
				            <h3 class="about-content-title"><span><img src="<?php echo get_template_directory_uri() ?>/images/about-before3.png" alt=""></span>居心地の良いお部屋の提供</h3>
				            <p class="about-content-text about-content-text1">フロッグスパのすべてのルームは、清潔感、綺麗さが大事と考えます。<br>
				              メンズエステを気持ち良くご利用頂けるように、お部屋をご準備しています。<br>
				              シャワー内には、香料or無香料ボディーソープの２つご用意しています。<br>
				              そのほかにも、シャンプーやリンス、洗顔料をご用意しています。<br>
				              洗面台にはドライヤーを初めに、化粧水、美容液を用意し、身支度に
				              必要なものが揃う設備も充実しています。</p>


				            <p class="about-content-text about-contetn-text2">技術や接客だけでなく、また来たいなぁ。と言って頂けるよう一つ
				              ひとつにもこだわり、<br>
				              お客様に居心地のよさ、くつろぎを追求していきます。</p>
				          </div>
				          <div class="about-image-wrap">
				            <p class="about-image"><img src="<?php echo get_template_directory_uri() ?>/images/about-img1.jpg" alt="当店ポイント３画像"></p>
				          </div>
				        </div>
				      </div>

				      <div class="pcabout-img-wrap"> <img src="<?php echo get_template_directory_uri() ?>/images/about-img-pc.png" alt="当店ポイント画像"></div>
				    </div>
				  </div>
				</section>
				</div>
</main>
<?php get_footer(); ?>
