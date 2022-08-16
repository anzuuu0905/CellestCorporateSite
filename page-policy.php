<?php get_header(); ?>

<?php
    $home = esc_url(home_url('/'));
    $about = esc_url(home_url('/about/'));
    $service = esc_url(home_url('/service/'));
    $company = esc_url(home_url('/company/'));
    $topics = esc_url(home_url('/topics/'));
    $career = esc_url(home_url('/career/'));
    $contact = esc_url(home_url('/contact/'));    
    $policy = esc_url(home_url('/policy/'));    
  ?>


    <div class="p-mv__titlebox">
      <h1 class="p-mv__sub-title">
        Privacy Policy
      </h1> 
      <p class="p-mv__jp-title">
      プライバシーポリシー
      </p>
    </div>
  </div>
</section>

<!-- policy -->
<section class="l-sub-policy p-sub-policy">
  <div class="p-sub-policy__wrapper l-inner">
      <h2 class="p-sub-policy__title c-common-title">
        PRIVACY POLICY
      </h2>
    <div class="p-sub-policy__items">
      <div class="p-sub-policy__item p-sub-policy-item">
        <p class="p-sub-policy-item__text c-common-text">
        ウェブサイトは、株式会社Cellest（以下「当社」）の事業内容等を紹介するサイトです。
        </p>
        <h3 class="p-sub-policy-item__title">
        01.  個人情報保護方針
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        当社は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
        </p>
        <h3 class="p-sub-policy-item__title">
        02.  個人情報の管理
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
        </p>
        <h3 class="p-sub-policy-item__title">
        03.  個人情報の利用目的
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        本ウェブサイトでは、お客様からのお問い合わせ時に、お名前、e-mailアドレス、電話番号等の個人情報をご登録いただく場合がございますが、これらの個人情報はご提供いただく際の目的以外では利用いたしません。<br>
        お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
        </p>
        <h3 class="p-sub-policy-item__title">
        04.  個人情報の第三者への開示・提供の禁止
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br>
        ・お客さまの同意がある場合<br>
        ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合<br>
        ・法令に基づき開示することが必要である場合
        </p>
        <h3 class="p-sub-policy-item__title">
        05.  個人情報の安全対策
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。
        </p>
        <h3 class="p-sub-policy-item__title">
        06.  ご本人の照会
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
        </p>
        <h3 class="p-sub-policy-item__title">
        07.  法令、規範の遵守と見直し
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
        </p>
        <h3 class="p-sub-policy-item__title">
        08.  お問い合せ
        </h3>
        <p class="p-sub-policy-item__text c-common-text">
        当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。
        </p>
        </br>
        <p class="p-sub-policy-item__text c-common-text">
        株式会社Cellest<br>
        〒541-0047 <br>
        大阪府大阪市中央区淡路町2-3-12 CBMビル 6F<br>
        お問い合わせは<a href="<?php echo $contact ?>">こちら</a>
        </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>