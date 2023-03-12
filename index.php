<?php
$path = realpath(dirname(__FILE__).'/');
include $path.'/app_config.php';
include $path.'/libs/meta.php';
?>
<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>
<script src="<?php echo APP_URL; ?>js/top.js"></script>

</head>
<body>
<?php include $path.'/libs/header.php'; ?>

<!-- contents -->

<main class="top">
  <?php include $path.'/libs/menu.php'; ?>

  <section class="top-mv">
    <img class="top-mv__bg pc" src="<?php echo APP_URL; ?>img/common/bg.png" alt="">
    <img class="top-mv__bg sp" src="<?php echo APP_URL; ?>img/common/bg_sp.png" alt="">
    <img class="top-mv__logo" src="<?php echo APP_URL; ?>img/common/logo.svg" alt="">
  </section>

  <section class="ttl">
    <div class="ttl__scroll js-fade-in">scroll</div>
    <h1 class="ttl__h1 js-fade-in">
      Exclusive <br class="sp">Membership<br>Driving Lab
    </h1>
  </section>

  <section class="about" id="about">
    <h2 class="about__ttl">
      About<br><span>simdrive</span>
    </h2>

    <div class="about__intro">
      <div class="about__intro-txt">
        <p>東京タワーや東京湾を一望できる<br>東麻布のプライベートエリア。</p>
        <p>足を踏み入れた瞬間、<br class="sp">至高の空間が広がる。</p>
        <p>
          シートに着き、息を深く吸い込み、<br class="sp">ハンドルを握ると、<br>
          モータースポーツの至極・英国の<br class="sp">テクノロジーが生み出す<br>
          "フルスケール・レーシング"が<br class="sp">始動する。
        </p>
      </div>
      <img class="about__intro-img" src="<?php echo APP_URL; ?>img/top/about01.jpg" alt="">
    </div>

    <div class="about__detail">
      <h3 class="about__detail-ttl">racing simulator position</h3>
      <img class="about__detail-img pc" src="<?php echo APP_URL; ?>img/top/about02.svg" alt="">
      <img class="about__detail-img sp" src="<?php echo APP_URL; ?>img/top/about02_sp.svg" alt="">
      <p class="about__detail-txt">
        一般的なシミュレーターとは一線を画す、日本初のドライビングシミュレーションサービスにより、<br class="pc">
        お客様の日常に最高のドライビングエクスペリエンスを提供します。
      </p>
    </div>
  </section>

  <section class="service">
    <div class="service__item service__item--01">
      <div class="service__detail">
        <div class="service__ttl-wrapper">
          <div class="service__index">service<span class="service__index-num">01</span></div>
          <h2 class="service__ttl">モータースポーツ界をリードする<br>英国の最新技術を体感する</h2>
        </div>
        <p class="service__txt">
          F1チームや自動車メーカーの施設と同等のリアルを実現した、英国仕込みのシミュレーションマシン。<br>
          車両・コース・テレメトリー等の全てにおいて、世界水準のサービスを提供します。
        </p>
      </div>
    </div>

    <div class="service__item service__item--02">
      <div class="service__detail">
        <div class="service__ttl-wrapper">
          <div class="service__index">
            service<span>02</span>
          </div>
          <h2 class="service__ttl">パーソナライズした車両で<br>重力さえも制する</h2>
        </div>
        <p class="service__txt">
          英国・日本のエンジニアリングチームが運転時の微細な感覚まで忠実に再現。<br>
          会員専用にパーソナライズし、実際の車両と寸分違わないMODオリジナルデータを提供します。
        </p>
      </div>
    </div>

    <div class="service__item service__item--03">
      <div class="service__detail">
        <div class="service__ttl-wrapper">
          <div class="service__index">
            service<span>03</span>
          </div>
          <h2 class="service__ttl">サーキットを駆け抜ける興奮を<br>すべての方に</h2>
        </div>
        <p class="service__txt">
          ハイレベルな設備を備えながらも、プロ以外の方も気軽に利用できるカスタマーユースのサービス。<br>
          レベルに応じてコースを選択し、ドライビングの爽快感や楽しさを体験することができます。
        </p>
      </div>
    </div>
  </section>

  <section class="price" id="price">
    <div class="inner">

      <div class="price__member">
        <div class="price__member-header">
          <h3 class="price__member-ttl">membership fee<span>入会金</span></h3>
          <div class="price__member-fee">550,000<span>円(税込)</span></div>
        </div>

        <div class="price__benefits">
          <div class="price__benefits-item">
            <div class="price__benefits-ttl">benefits<span>01</span></div>
            <div class="price__benefits-txt">simdrive会員施設利用<br>メンバーシップ入会金</div>
          </div>
          <div class="price__benefits-item">
            <div class="price__benefits-ttl">benefits<span>02</span></div>
            <div class="price__benefits-txt">会員名入りオリジナル<br>レーシングシューズ</div>
          </div>
          <div class="price__benefits-item">
            <div class="price__benefits-ttl">benefits<span>03</span></div>
            <div class="price__benefits-txt">会員名入りオリジナル<br>レーシンググローブ</div>
          </div>
          <div class="price__benefits-item">
            <div class="price__benefits-ttl">benefits<span>04</span></div>
            <div class="price__benefits-txt">ご指定車両の<br>MODオリジナルデータ<br>開発・制作費用</div>
          </div>
          <div class="price__benefits-item">
            <div class="price__benefits-ttl">benefits<span>05</span></div>
            <div class="price__benefits-txt">プロドライバーによる<br>マスターテレメトリー<br>データ制作費用</div>
          </div>
        </div>
      </div>

      <ul class="price__notice">
        <li class="price__notice-item">入会時にご希望の車両1台（例：ポルシェ911 GT3RS）とご希望のサーキット（例：富士スピードウェイ）を選択可能。</li>
        <li class="price__notice-item">日本・英国のsimエンジニアとプロドライバーが会員様専用にパーソナライズした車両MODデータをオリジナルで開発・制作し、可能な限り実車データに近付けたプログラムをご用意。</li>
        <li class="price__notice-item">ご希望サーキットでのマスターテレメトリー（ターゲットデータ）をご用意。</li>
        <li class="price__notice-item">会員のドライビングデータとプロドライバーのドライビングデータを専用のテレメトリーシステムで比較し、実車走行に限りなく近いデータ環境の中で運転技術の向上をサポート。</li>
      </ul>

      <div class="price__table">
        <div class="price__table-corp">
          <h3 class="price__table-ttl">corporate<span>法人会員</span></h3>
          <div class="price__table-wrapper">
            <div class="price__table-header">
              <div class="price__table-item">月額</div>
              <div class="price__table-item">走行枠</div>
              <div class="price__table-item">会員専用の<br>オリジナル車両MOD</div>
              <div class="price__table-item">プロドライバー<br>マスター走行データ</div>
              <div class="price__table-item">予約優先権</div>
              <div class="price__table-item">複数人利用権</div>
              <div class="price__table-item">1日あたりの<br>予約上限数</div>
            </div>
            <div class="price__table-data">
              <div class="price__table-item"><span class="num">198,000</span><span class="txt">円(税込)</span></div>
              <div class="price__table-item"><span class="num">12</span><span class="txt">時間 / 月</span></div>
              <div class="price__table-item"><span class="symbol">○</span></div>
              <div class="price__table-item"><span class="symbol">○</span></div>
              <div class="price__table-item"><span class="num">60</span><span class="txt">日先の予約可能</span></div>
              <div class="price__table-item">福利厚生利用など<br>1アカウントで複数名の利用が可能</div>
              <div class="price__table-item"><span class="num">3</span><span class="txt">時間</span></div>
            </div>
          </div>
        </div>

        <div class="price__table-premium">
          <h3 class="price__table-ttl">premium<span>プレミアム会員</span></h3>
          <div class="price__table-wrapper">
            <div class="price__table-header sp">
              <div class="price__table-item">月額</div>
              <div class="price__table-item">走行枠</div>
              <div class="price__table-item">会員専用の<br>オリジナル車両MOD</div>
              <div class="price__table-item">プロドライバー<br>マスター走行データ</div>
              <div class="price__table-item">予約優先権</div>
              <div class="price__table-item">複数人利用権</div>
              <div class="price__table-item">1日あたりの<br>予約上限数</div>
            </div>
            <div class="price__table-data">
              <div class="price__table-item"><span class="num">99,000</span><span class="txt">円(税込)</span></div>
              <div class="price__table-item"><span class="num">6</span><span class="txt">時間 / 月</span></div>
              <div class="price__table-item"><span class="symbol">○</span></div>
              <div class="price__table-item"><span class="symbol">○</span></div>
              <div class="price__table-item"><span class="num">60</span><span class="txt">日先の予約可能</span></div>
              <div class="price__table-item"><span class="symbol">―</span></div>
              <div class="price__table-item"><span class="num">3</span><span class="txt">時間</span></div>
            </div>
          </div>
        </div>

        <div class="price__table-advance">
          <h3 class="price__table-ttl">advance<span>アドバンス会員</span></h3>
          <div class="price__table-wrapper">
            <div class="price__table-header sp">
              <div class="price__table-item">月額</div>
              <div class="price__table-item">走行枠</div>
              <div class="price__table-item">会員専用の<br>オリジナル車両MOD</div>
              <div class="price__table-item">プロドライバー<br>マスター走行データ</div>
              <div class="price__table-item">予約優先権</div>
              <div class="price__table-item">複数人利用権</div>
              <div class="price__table-item">1日あたりの<br>予約上限数</div>
            </div>
            <div class="price__table-data">
              <div class="price__table-item"><span class="num">66,000</span><span class="txt">円(税込)</span></div>
              <div class="price__table-item"><span class="num">4</span><span class="txt">時間 / 月</span></div>
              <div class="price__table-item"><span class="symbol">○</span></div>
              <div class="price__table-item"><span class="symbol">○</span></div>
              <div class="price__table-item"><span class="symbol">―</span></div>
              <div class="price__table-item"><span class="symbol">―</span></div>
              <div class="price__table-item"><span class="num">2</span><span class="txt">時間</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="price__option">
        <div class="price__option-item">
          <div class="price__option-ttl">option 01</div>
          <div class="price__option-txt">走行枠の<br>追加<span>(2時間あたり)</span></div>
          <div class="price__option-fee">40,000<span>円</span></div>
        </div>

        <div class="price__option-item">
          <div class="price__option-ttl">option 02</div>
          <div class="price__option-txt">プロドライバーによる<br>コーチング<span>(2時間)</span></div>
          <div class="price__option-fee">40,000<span>円</span></div>
        </div>

        <div class="price__option-item">
          <div class="price__option-ttl">option 03</div>
          <div class="price__option-txt">エンジニアによる<br>サポート<span>(1時間あたり)</span></div>
          <div class="price__option-fee">12,000<span>円</span></div>
        </div>

        <div class="price__option-item">
          <div class="price__option-ttl">option 04</div>
          <div class="price__option-txt">車両の<br>追加</div>
          <div class="price__option-fee">30,000<span>円</span></div>
        </div>
      </div>

      <div class="price__trial">
        <div>
          <h3 class="price__trial-ttl">trial</h3>
          <div class="price__trial-fee">49,500<span>円(税込)</span></div>
        </div>
        <div class="price__trial-txt">
          体験用の車両MOD<span>（ポルシェ911 GT3RSなど数車両から選択）</span>で<br class="pc">
          1時間のレーシングシミュレーションを行い、<br class="pc">
          simdriveの施設や世界観を体感することができます。
        </div>
      </div>

      <ul class="price__notice">
        <li class="price__notice-item">会員の予約枠に空きがある場合のみ入会体験枠を募集。</li>
      </ul>

    </div>
  </section>

  <section class="facility" id="facility">
    <div class="facility__intro">
      <div class="facility__img">
        <img class="pc" src="<?php echo APP_URL; ?>img/top/facility_bg.png" alt="">
        <img class="sp" src="<?php echo APP_URL; ?>img/top/facility_bg_sp.png" alt="">
      </div>
      <h2 class="facility__ttl">Facility</h2>
      <div class="facility__txt">
        個室トレーニングルームを3室完備し、<br class="pc">
        会員様専用の上質なプライベート空間でお客様をお迎えします。
      </div>
    </div>

    <div class="facility__slide slide">
      <div class="slide__container">
        <div class="slide__list-wrapper">
          <ul class="slide__list">
            <li class="slide__item">
              <h3>sim room<span>シムルーム</span></h3>
              <img src="<?php echo APP_URL; ?>img/top/facility01.png" alt="">
            </li>
            <li class="slide__item">
              <h3>lounge room<span>ラウンジルーム</span></h3>
              <img src="<?php echo APP_URL; ?>img/top/facility02.png" alt="">
            </li>
            <li class="slide__item">
              <h3>telemetry room<span>テレメトリールーム</span></h3>
              <img src="<?php echo APP_URL; ?>img/top/facility03.png" alt="">
            </li>
            <li class="slide__item">
              <h3>view space<span>ビュースペース</span></h3>
              <img src="<?php echo APP_URL; ?>img/top/facility04.png" alt="">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- contents -->

<?php include $path.'/libs/footer.php'; ?>
</body>
</html>
