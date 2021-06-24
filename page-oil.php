<?php /* Template Name: オイル説明 */ ;?>
<?php get_header(); ?>
<section class="oil-variety">
  <h2 class="section-title">各種オイル説明</h2>
  <div class="mainvisual">
    <img src="<?= get_template_directory_uri();?>/images/oil-main.jpg" alt="" class="main-image">
  </div>
  <div class="inner">
    <section class="oil1">
      <h3 class="title">&lt;プロズビ&gt; マッサージノイル</h3>
      <div class="flex-col">
        <p class="text">
          オイル成分が1滴も入っていない<br>
          ノンオイルのマッサージリキッドです。<br>
          圧をかけやすい重みのある<br>
          とろっとしたテクスチャー。<br>
          通常オイルでは配合できない<br>
          美容成分を贅沢に配合しています。<br>
          まるで美容液のようなマッサージリキッドです。
        </p>
        <figure class="figure">
          <img src="<?= get_template_directory_uri();?>/images/oil-image1.png" alt="" class="image">
          <figcaption class="caption">美容成分たっぷりの<br>マッサージリキッド</figcaption>
        </figure>
      </div>
      <p class="description">
        ■ノイルとは主成分がグリセリンや水の水溶性タイプのため、<br>
        オイル成分は1滴も入っていません。さらに、通常オイルでは配合できない<br>
        美容成分を贅沢に配合しているため、美容液でマッサージをするような感覚です。<br>
        まさに、全く新しいジャンルのマッサージオイル、それが「NOIL(ノイル)」です。
      </p>
      <div class="staff-message">
        <span class="staff-message-label">スタッフ感想</span>
        メンズエステ王道のオイル！シャワーで流れ落ち肌にオイル感も残らないオイルの伸びは若干重く、ベタッとした印象です。
      </div>
    </section>
    
    <section class="oil2">
      <h3 class="title">&lt;プロズビ&gt;ウォーターソルブルマッサージオイル</h3>
      <div class="flex-col">
        <div class="text-col">
          <p class="text">
            べたつかず、拭き取りが簡単な<br>
            水溶性の業務用マッサージオイルです。<br>
            さらっとした軽いテクスチャーで<br>
            伸びがよく全身のマッサージに最適です。
          </p>
          <p class="description">
            ■水溶性オイルとは水と油を乳化させることで<br>
            油のべたつきなどをなくし、水でも簡単に洗い流せる<br>
            ようにしたマッサージオイルのことです
          </p>
        </div>
        <figure class="figure">
          <img src="<?= get_template_directory_uri();?>/images/oil-image2.png" alt="" class="image">
        </figure>
      </div>
      <div class="staff-message">
        <span class="staff-message-label">スタッフ感想</span>
        肌が弱い方はコチラのオイルがオススメです。サラッとしたオイルで
        非常に伸びが良いです。<br>
        シャワーで完全に流れ落ちるというよりは少しオイル感が肌に残るイメージです。
      </div>
    </section>
    
  </div>
</section>
<?php get_footer(); ?>