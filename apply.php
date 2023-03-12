<?php
$path = realpath(dirname(__FILE__).'/');
include $path.'/app_config.php';
include $path.'/libs/meta.php';
?>

<script src="<?php echo APP_URL; ?>js/form.js"></script>

</head>
<body>
<?php include $path.'/libs/header.php'; ?>

<!-- contents -->

<main class="contact">
  <?php include $path.'/libs/menu.php'; ?>

  <section class="mv">
    <img class="mv__bg pc" src="<?php echo APP_URL; ?>img/apply/mv.png" alt="">
    <img class="mv__bg sp" src="<?php echo APP_URL; ?>img/apply/mv_sp.png" alt="">

    <div class="mv__txt">
      <div class="mv__txt-inner">
        <h1 class="mv__ttl">Apply<span>入会お申し込み</span></h1>
        <div class="mv__breadcrumb">
          <div class="mv__breadcrumb-item"><a href="<?php echo APP_URL; ?>">ホーム</a></div>
          <div class="mv__breadcrumb-item">入会お申し込み</div>
        </div>
      </div>
    </div>
  </section>

  <section class="flow">
    <div class="inner">
      <h2 class="heading">Flow<span>入会の流れ</span></h2>

      <div class="flow__content">
        <div class="flow__item">
          <div class="flow__circle">
            <div class="flow__index">step<span>01</span></div>
            <div class="flow__ttl pc">入会審査</div>
          </div>
          <div class="flow__txt">
            <div class="flow__ttl sp">入会審査</div>
            <p>
              現在、入会希望者多数につき入会枠に制限を設けており、事前審査を実施しています。<br>
              お申し込みから約1週間で事前審査を行った後、審査結果をご連絡します。
            </p>
          </div>
        </div>

        <div class="flow__item">
          <div class="flow__circle">
            <div class="flow__index">step<span>02</span></div>
            <div class="flow__ttl pc">本入会手続き</div>
          </div>
          <div class="flow__txt">
            <div class="flow__ttl sp">本入会手続き</div>
            <p>
              審査に通過した場合は、正式に本入会手続きを行います。<br>
              なお、お電話やメールにて必要事項を確認の上で本入会手続きを行うため、来訪いただく必要はありません。
            </p>
          </div>
        </div>

        <div class="flow__item">
          <div class="flow__circle">
            <div class="flow__index">step<span>03</span></div>
            <div class="flow__ttl pc">本入会完了</div>
          </div>
          <div class="flow__txt">
            <div class="flow__ttl sp">本入会完了</div>
            <p>
              入会手続きが完了後、会員専用の予約アプリより予約いただくことが可能です。<br>
              予約アプリは、各種クレジットカードでの決済に対応しています。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply">
    <div class="inner">
      <h2 class="heading">Application <br class="sp">Form<span>入会お申し込みフォーム</span></h2>

      <div class="apply__intro">入会をご希望の方は、以下のフォームに必要事項を入力の上で送信してください。</div>

      <div class="apply__wrapper">
        <div class="apply__step">
          <div class="apply__step-item current">
            <div class="apply__step-index">step<span>01</span></div>
            <div class="apply__step-txt">内容入力</div>
          </div>

          <div class="apply__step-item">
            <div class="apply__step-index">step<span>02</span></div>
            <div class="apply__step-txt">内容確認</div>
          </div>

          <div class="apply__step-item">
            <div class="apply__step-index">step<span>03</span></div>
            <div class="apply__step-txt">送信完了</div>
          </div>
        </div>

        <form class="form" action="" method="post">
          <div class="form__item">
            <div class="form__label"><span class="form__label-tag form__label-tag--required">必須</span>希望のプラン</div>
            <div class="form__radio">
              <label class="form__radio-item"><input type="radio" name="plan" required>法人会員</label>
              <label class="form__radio-item"><input type="radio" name="plan" required>プレミアム会員</label>
              <label class="form__radio-item"><input type="radio" name="plan" required>アドバンス会員</label>
              <label class="form__radio-item"><input type="radio" name="plan" required>未定</label>
            </div>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--optional">任意</span>法人名
            </label>
            <input  class="form__input" type="text" name="" placeholder="（例）simdrive株式会社">
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--required">必須</span>名前
            </label>
            <input  class="form__input" type="text" name="" placeholder="（例）名字 名前" required>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--required">必須</span>ふりがな
            </label>
            <input  class="form__input" type="text" name="" placeholder="（例）みょうじ なまえ" required>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--required">必須</span>電話番号
            </label>
            <input  class="form__input" type="tel" name="" placeholder="（例）000-0000-0000" required>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--required">必須</span>メールアドレス
            </label>
            <input  class="form__input" type="mail" name="" placeholder="（例）exsample@xyz.com" required>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--required">必須</span>生年月日
            </label>
            <div class="form__birthday">
              <div class="form__birthday-item">
                <select class="js-birthday-year" name=""></select><span>年</span>
              </div>

              <div class="form__birthday-item">
                <select class="js-birthday-month"></select><span>月</span>
              </div>

              <div class="form__birthday-item">
                <select class="js-birthday-day"></select><span>日</span>
              </div>
            </div>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--required">必須</span>希望の車両メーカー
            </label>
            <input  class="form__input" type="text" name="" placeholder="（例）ポルシェ" required>
            <div class="form__notice">※入力いただく内容で確定ではありません。</div>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--required">必須</span>希望の車両モデル
            </label>
            <input  class="form__input" type="text" name="" placeholder="（例）911 GT3RS" required>
            <div class="form__notice">※入力いただく内容で確定ではありません。</div>
          </div>

          <div class="form__item">
            <div class="form__label"><span class="form__label-tag form__label-tag--required">必須</span>ステータス</div>
            <div class="form__checkbox">
              <label class="form__checkbox-item"><input type="checkbox" name="">現在レースに参戦している</label>
              <label class="form__checkbox-item"><input type="checkbox" name="">レースに参戦した経験がある</label>
              <label class="form__checkbox-item"><input type="checkbox" name="">趣味でモータースポーツを行っている</label>
              <label class="form__checkbox-item"><input type="checkbox" name="">モータースポーツの経験がほとんどない</label>
            </div>
          </div>

          <div class="form__item">
            <label class="form__label" for="">
              <span class="form__label-tag form__label-tag--optional">任意</span>備考
            </label>
            <textarea class="form__textarea" name="" rows="20"></textarea>
          </div>

          <button class="form__submit" type="submit">
            check<span>入力内容の確認</span>
          </button>
        </form>
      </div>
    </div>
  </section>

</main>

<!-- contents -->

<?php include $path.'/libs/footer.php'; ?>

</body>
</html>
