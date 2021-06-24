<?php $user_twitter = get_field('twitter_shop', 'user_1'); ?>
<footer class="footer">
  <div class="footer-flexdiv">
    <ul class="footer-spnav">
      <li class="footer-spnav-list"><a href="<?php echo home_url('/'); ?>">ホーム<span>HOME</span></a></li>
      <li class="footer-spnav-list"><a href="<?php echo home_url('/therapists'); ?>">セラピスト一覧<span>THERPIST</span></a></li>
      <li class="footer-spnav-list"><a href="<?php echo home_url('/schedule'); ?>">出勤情報<span>SCHEDULE</span></a></li>
      <li class="footer-spnav-list"><a href="<?php echo home_url('/system'); ?>">システム料金<span>SYSTEM</span></a></li>
      <li class="footer-spnav-list"><a href="https://pay2.star-pay.jp/site/pc/shop.php?tel=&payc=A2038&guide=" target="_blank">クレジットカード決済<span>CREDIT CARD</span></a></li>
      <li class="footer-spnav-list"><a href="https://recruit-frogspa.com/" target="_blank">求人情報<span>RECRUIT</span></a></li>
      <li class="footer-spnav-list"><a href="<?php echo home_url('/access'); ?>">アクセス<span>ACCESS</span></a></li>
      <li class="footer-spnav-list"><a href="http://frogspa.livedoor.blog/" target="_blank">ブログ<span>BLOG</span></a></li>
      <?php if ($user_twitter) : ?>
        <li class="footer-spnav-list"><a href="https://twitter.com/<?php echo $user_twitter; ?>" target="_blank">ツイッター<span>TWITTER</span></a></li>
      <?php endif; ?>
    </ul>
    <div class="footer-logo-wrap">
      <h2 class="footer-logo"><img src="<?php echo get_template_directory_uri() ?>/images/header-logo.png" alt="FROG SPAロゴ画像"><span class="footer-logo-text">南船場</span></h2>
      <p class="gotop"><a href="#header"><img src="<?php echo get_template_directory_uri() ?>/images/gotop.png" alt="矢印"></a></p>
      <p class="footer-logo-hours">営業時間 12:00〜27:00（受付時間 11:00〜25:30）</p>
      <p class="footer-logo-tel"><span>TEL.</span>080-3832-1844</p>
      <ul class="footer-logo-snswrap">
        <li class="footer-logo-snslist"><a href="http://frogspa.livedoor.blog/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/header-blog-icon.png" alt="ブログアイコン"><span>BLOG</span></a></li>
        <?php if ($user_twitter) : ?>
          <li class="footer-logo-snslist"><a href="https://twitter.com/<?php echo $user_twitter; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/header-twitter.png" alt="twitterアイコン"><span>Twitter</span></a></li>
        <?php endif; ?>
        <li class="footer-logo-snslist"><a href="https://line.me/ti/p/71Sadk-PUI" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/header-line-icon.png" alt="LINEアイコン"><span>LINE</span></a></li>
      </ul>
    </div>
    <div class="footer-pc-navwrap">
      <ul class="footer-pc-nav">
        <li class="footer-pc-nav-list"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
        <li class="footer-pc-nav-list"><a href="<?php echo home_url('/therapists'); ?>">セラピスト一覧
          </a></li>
        <li class="footer-pc-nav-list"><a href="<?php echo home_url('/schedule'); ?>">出勤情報</a></li>
        <li class="footer-pc-nav-list"><a href="<?php echo home_url('/system'); ?>">システム料金</a></li>
        <li class="footer-pc-nav-list"><a href="https://pay2.star-pay.jp/site/pc/shop.php?tel=&payc=A2038&guide=" target="_blank">クレジットカード決済</a></li>
        <li class="footer-pc-nav-list"><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
        <li class="footer-pc-nav-list"><a href="http://frogspa.livedoor.blog/" target="_blank">ブログ</a></li>
        <li class="footer-pc-nav-list"><a href="https://recruit-frogspa.com/" target="_blank">求人情報</a></li>
      </ul>
      <div class="footer-nav-imgwrap">
        <p class="footer-nav-img"><a href="https://osaka.refle.info/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/footer-banner1.gif" alt="リフナビ大阪"></a></p>
        <p class="footer-nav-img"><a href="https://osaka.aroma-tsushin.com/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/footer-img2.jpg" alt="優良エステ店　アロマパンダ通信推奨"></a></p>
        <p class="footer-nav-img"><a href="https://panda-job.com/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/footer-banner03.jpg" alt="女性の安心求人情報パンダエステジョブ"></a></p>

        <p class="footer-nav-img"><a href="https://www.est-tatsujin.jp/osaka" target="_blank"><img src="https://www.est-tatsujin.jp/theme/esthe_no_tatsujin_front/banner/estbnr_s1_88x31.jpg" alt="大阪の風俗エステ（回春性感マッサージ）情報 エステの達人" /></a>
        </p>
        <p class="footer-nav-img"><a href="https://esthe-zukan.com/" target="_blank"><img src="https://esthe-zukan.com/lib/img/banner200x40.png" alt="メンズエステで使えるクーポンサイト「エステ図鑑 全国版」 /"></a></p>
        <p class="footer-nav-img"><a href="https://choi-es.com/" target="_blank"><img src="https://choi-es.com/banner/200_40.png" alt="メンズエステ店を投票ランキングで検索｜Choi-Es（チョイエス）大阪"></a></p>
        <p class="footer-nav-img"><a href="https://refjob.jp/" target="_blank" title="メンズエステ女性求人サイト「リフジョブ」"><img src="https://refjob.jp/lib/img/banner_20040.jpg" alt="メンズエステ女性求人サイト「リフジョブ」"></a></p>
        <p class="footer-nav-img"><a href="http://www.esthe-de-job.com/" target="_blank"><img src="<?= get_template_directory_uri() ?>/images/banner-esthedejob.jpg" alt="メンズエステ求人情報" style="width:200px;height:40px"></a></p>
        <p class="footer-nav-img"><a href="https://ore-aroma.jp/" target="_blank"><img src="https://ore-aroma.jp/img2/ore_20040.jpg" alt="俺のアロマ｜メンズエステの体験談クチコミ検索" target="_blank" style="width:200px;height:40px"></a></p>
        <p class="footer-nav-img"><a href="https://h55.jp/" target="_blank"><img src="https://h55.jp/img2/h55_20040.jpg" alt="エスワク｜メンズエステの求人クチコミ検索" target="_blank" style="width:200px;height:40px"></a></p>
        <p class="footer-nav-img"><a href="https://eslove.jp/kansai/osaka" target="_blank"><img src="https://eslove.jp/eslove_front_theme/banner/banner_200x40.gif" alt="大阪のメンズエステ店｜エステラブ" /></a></p>
        <p class="footer-nav-img"><a href="https://job.eslove.jp/kansai/osaka" target="_blank"><img src="https://job.eslove.jp/eslove_job_front_theme/banner/banner_200x40.gif" alt="大阪のメンズエステ求人情報ならエステラブワーク" /></a></p>
        <p class="footer-nav-img"><a href="https://menesth.jp/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/banner-menesth.jpeg" alt="メンズリラク｜口コミとランキングで探せるメンズエステ情報サイト" /></a></p>

      </div>
    </div>
  </div>
  <div class="footer-pc-copyright-wrap">
    <p class="footer-pc-copyright-wrap-text">©20209 FROG SPA（フロッグスパ）. All Rights Reserved. </p>
  </div>
</footer>

<ul class="footer-sp-listwrap">
  <li class="footer-sp-list">
    <a href="tel:080-3832-1844">
      <p class="footer-sp-list-img"><img src="<?php echo get_template_directory_uri() ?>/images/tel-icon.png" alt="電話アイコン"></p>
    </a>
  </li>
  <li class="footer-sp-list">
    <a href="sms:080-3832-1844">
      <p class="footer-sp-list-img footer-sp-list-img-sms"><img src="<?php echo get_template_directory_uri() ?>/images/sms-icon.png" alt="SMSアイコン"></p>
    </a>
  </li>
  <li class="footer-sp-list">
    <a href="https://line.me/ti/p/71Sadk-PUI" target="_blank">
      <p class="footer-sp-list-img"><img src="<?php echo get_template_directory_uri() ?>/images/line-icon.png" alt="LINEアイコン"></p>
    </a>
  </li>
</ul>

<script type="text/javascript">
  $(document).ready(function () {
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      centerMode: false,
      dots: true,
    });
  });
</script>

<script>
  $(function () {
    $('.author-mainimg-wrap').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      autoplay: false,
      asNavFor: '.author-thumbnail-wrap'
    });
    $('.author-thumbnail-wrap').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.author-mainimg-wrap',
      dots: false,
      centerMode: false,
      focusOnSelect: true,
      autoplay: false,
    });
  });

  $('.author-mainimg-wrap').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    if ($('.author-thumbnail-wrap .author-thumbnail').length < 4) {
      $('.author-thumbnail-wrap').slick('slickSetOption', 'centerMode', false, true);
    }
  });


  $('.author-thumbnail-wrap li').on('mouseover', function (e) {
    var $currTarget = $(e.currentTarget),
      index = $currTarget.data('slick-index'),
      slickObj = $('.author-mainimg-wrap').slick('getSlick');
    slickObj.slickGoTo(index, true); // アニメーション中でも切り替える
    $slide.slick('slickPause'); // 自動切り替え停止
  })
    .on('mouseout', function (e) {
      $slide.slick('slickPlay'); // 自動切り替え再開
    });
</script>

<!--ハンバーガーメニュー -->
<script>
  $(function () {
    $('.toggle').click(function () {
      $(this).toggleClass("active");
      if ($(this).hasClass('active')) {
        $('.global-nav').addClass('active');
      } else {
        $('.global-nav').removeClass('active');
      }
    });
  });
</script>

<script>
  var navPos = jQuery('#global-nav').offset().top; // グローバルメニューの位置
  var navHeight = jQuery('#global-nav').outerHeight(); // グローバルメニューの高さ
  jQuery(window).on('scroll', function () {
    if (jQuery(this).scrollTop() > navPos) {
      jQuery('body').css('padding-top', navHeight);
      jQuery('#global-nav').addClass('m_fixed');
    } else {
      jQuery('body').css('padding-top', 0);
      jQuery('#global-nav').removeClass('m_fixed');
    }
  });
</script>

<?php wp_footer(); ?>
</body>

</html>