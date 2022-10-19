<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8">

  
<script>
  (function() {
    var w = window;
    if (w.ChannelIO) {
      return (window.console.error || window.console.log || function() {})('ChannelIO script included twice.');
    }
    var ch = function() {
      ch.c(arguments);
    };
    ch.q = [];
    ch.c = function(args) {
      ch.q.push(args);
    };
    w.ChannelIO = ch;

    function l() {
      if (w.ChannelIOInitialized) {
        return;
      }
      w.ChannelIOInitialized = true;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
      s.charset = 'UTF-8';
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
    if (document.readyState === 'complete') {
      l();
    } else if (window.attachEvent) {
      window.attachEvent('onload', l);
    } else {
      window.addEventListener('DOMContentLoaded', l, false);
      window.addEventListener('load', l, false);
    }
  })();
  ChannelIO('boot', {
    "pluginKey": "77edce18-ede3-42d4-886a-0cff8c8889f4" //please fill with your plugin key
  });
</script>

<!-- End Channel Plugin -->
  <title>노블레스 수현</title>
  <title>노블레스 수현</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="국내 상류층 결혼을 책임지고 있는 한국 대표 상류층결혼정보회사, 고객만족도 1위 / 상류층 업계 1위 / 성혼율 1위 / 회원수 1위" />
<meta http-equiv="imagetoolbar" content="no" />
<!--
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
-->
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="naver-site-verification" content="ae9a9cc8bd4437b8470b34f3a5c5d668d2da3916" />
<meta property="og:type" content="website">
<meta property="og:title" content="한국 대표 상류층결혼정보회사 노블레스 수현">
<meta property="og:description" content="국내 상류층 결혼을 책임지고 있는 한국 대표 상류층결혼정보회사, 고객만족도 1위 / 상류층 업계 1위 / 성혼율 1위 / 회원수 1위">
<meta property="og:image" content="https://www.isoohyun.co.kr/new/image/main_image20211231.png">

<link href="/images/64.ico" rel="shortcut icon" type="image/x-icon" />

  <!-- font -->
  <link href="//fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<style>
* {
  font-family: 'Noto Sans KR', sans-serif;
}

a {
  text-decoration: none;
  color: #404040;
}

ul li {
  list-style: none;
}

/*header ()*/
header {
  position: fixed;
  z-index: 100;
  width: 100%;
  text-align: center;
  overflow: hidden;
  transition: all .4s ease-in-out;
  transform: translateX(0);
}


/*navigation*/
#header_section {
  padding: 0 50px 0 50px;
  width: 100%;
  margin: 0 auto;
  height: 76px;
  justify-content: space-between;
  transition: all .4s ease-in-out;
  transform: translateX(0);
  z-index: 20;
}
#header_section.active {
  height: 420px !important;
}

/* #header_section.active ul.clearfix li div.menu {
  font-size: 16px;
  color: #fff;
  font-weight: 800;
  text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
  font-size: 16px;
  letter-spacing: 1px;
} */
/* #header_section.active ul.clearfix li ul.sub_menu li,
#header_section.active ul.clearfix li ul.sub_menu2 li {
  color: black !important;
  text-shadow: -1px -1px 0 transparent, 1px -1px 0 transparent, -1px 1px 0 transparent, 1px 1px 0 transparent;
  font-size: 12px;
  letter-spacing: 1px;
  font-weight: initial;
} */
#header_section:hover {
  background: #fff !important;
}
#header_section h1 {
}
#header_section h1 img {
}


#mheader_section {
  padding: 10px 10px;
  width: 100%;
  margin: 0 auto;
  justify-content: space-between;
  transition: all .4s ease-in-out;
  transform: translateX(0);
  z-index: 20;
}
#mheader_section h1 {
  width: 135px;
  flex-direction: column;
}
#mheader_section h1 img {
  width: 100%;
}


.clearfix {
  margin-top: 25px;
}
#header_section>ul>li {
  text-align: left;
}
#header_section>ul>li div.menu {
  font-size: 1.1rem;
  color: #fff;
  letter-spacing: 1px;
  font-weight: 500;
}
#header_section.active>ul>li div.menu {
  color: #000;
  padding-bottom: 15px;
}
#header_section.active>ul>li div.menu.on,
#header_section.active>ul>li div.menu:hover {
  color: #f00;
  transition: all 300ms ease-in;
}

#header_section ul.clearfix li ul.sub_menu li,
#header_section ul.clearfix li ul.sub_menu2 li {
  color: black;
  font-size: 14px;
  padding: 5px 0;
  letter-spacing: 1px;
  text-align: left;
  transition: all 300ms ease-in;
}

#header_section ul.clearfix li ul.sub_menu,
#header_section ul.clearfix li ul.sub_menu2 {
  border-top: 1px solid transparent;
  padding-top: 15px;
  transition: all 300ms ease-in;
}
#header_section ul.clearfix li ul.sub_menu.on,
#header_section ul.clearfix li ul.sub_menu2.on {
  border-top: 1px solid #f00;
  transition: all 300ms ease-in;
}

#header_section ul.clearfix li ul.sub_menu>li>a:hover,
#header_section ul.clearfix li ul.sub_menu2>li>a:hover {
  color: #f00;
	transition: all 300ms ease-in;
}

/* .fixmenu{padding: 0;overflow: hidden;clip: rect(0, 0, 0, 0);white-space: nowrap;}
    .fr_fm{font-size: 16px;color: #000;position: absolute;right: 20px;transform: translateY(-50%);cursor: pointer;} width: calc(100% / 7);*/

/*menu bar*/
.menu_Wrap {
  display: none;
}

.menu_bar {
  position: relative;
  height: 48px;
  display: block;
  cursor: pointer;
}

.top {
  width: 28px;
  position: absolute;
  top: 45%;
  height: 2px;
  background-color: #333;
}

.center {
  width: 28px;
  position: absolute;
  top: 50%;
  height: 2px;
  background-color: #333;
}

.bottom {
  width: 28px;
  position: absolute;
  top: 55%;
  height: 2px;
  background-color: #333;
}

/**/
.text {
  flex-direction: column;
}
.text >div {
  display: flex;
  align-items: center;
  gap: 1.8rem;
}

.num {
  color: #f00;
  font-size: 16px;
  border: 2px solid #fff;
  background-color: #fff;
  border-radius: 40px;
  padding: 4px 18px;
}

.num>a:hover {
  color: #f00;
  transition: all 300ms ease-in;
}

.login {
  display: flex;
  color: #fff;

	font-size: 1.1rem;
	letter-spacing: 1px;
	font-weight: 500;

  gap: 0.25rem;
}

#header_section.active .login {
  color: #000;
}

.login a:hover {
  color: #f00;
  transition: all 300ms ease-in;
}


/* .menu.on{
  color: #f00;
} */
/* .sub_menu>li>a:hover + .menu{
    font-weight: bold;
    color: #f33;
} */


.wrap {
    width: 1536px;
    min-width: 1536px;
    margin: 0 auto;
}

/* #fullpage {
  position: relative;
  width: 100%;
} */

/* .fullsection {
  position: relative;
  margin: 0 auto;
  width: 100%;
  height: 100vh;
  padding-top: 16vh;
} */

.section {
  position: relative;
  background-color: #f3f3f3;
}

.full1 {}

.full2 {
  background-image: url(https://www.isoohyun.co.kr/new/image/new_main/sec2.jpg);
  background-size: cover;
}

.full3 {
}

.full4 {
  background-image: url(https://www.isoohyun.co.kr/nm/static/images/new_main/5.jpg);
  background-size: cover;
  justify-content: space-between;
}
.full4::before {
}

.full5 {
}

.full6 {
  background-image: url(https://www.isoohyun.co.kr/new/image/new_main/sec6.jpg);
  background-size: cover;
}

.full7 {
  /* background-image: url(https://www.isoohyun.co.kr/new/image/new_main/7.png); */
  background-size: cover;
}

.full8 {
  /* background-image: url(https://www.isoohyun.co.kr/new/image/new_main/8.png); */
  background-color: #031a35;
  background-size: cover;
}

.full9 {
  background-image: url(https://www.isoohyun.co.kr/new/image/new_main/sec9.jpg);
  background-size: cover;
  /* background-color: #124276; */
}

.full10 {
  /* background-image: url(https://www.isoohyun.co.kr/new/image/new_main/10.png); */
  background-size: cover;
  /* background: linear-gradient(to bottom, #ffb7bc 60%, #ffbdb4 70%, #ffc3ac); */
  background-color: #ffddde;
}

.full11 {
  background-image: url(https://www.isoohyun.co.kr/new/image/new_main/sec11_1.jpg);
  background-size: cover;
  position: relative;
  height: 100%;
}

.full12 {
  background-image: url(https://www.isoohyun.co.kr/new/image/new_main/bg12.jpg);
  background-size: cover;
  /* background: linear-gradient(to bottom, #ffffff 60%, #f1f1f1); */
}

.full13 {
  /* background-image: url(https://www.isoohyun.co.kr/new/image/new_main/13.png); */
  background-size: cover;
  background-color: #f6f6f6;
}

.full14 {
  background-size: cover;
  background-color: #fff;
}

.full15 {
  background-size: cover;
  background-color: #f6f6f6;
}

/* #fullpage span {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-size: 4em;
  font-weight: bold;
} */

.full2 span {
}

.showOn {
  visibility: visible;
}

.quick {
  position: fixed;
  right: 1em;
  top: 7em;
  z-index: 1;
  text-align: right;
}

.quick li {
  width: 100%;
  height: 30px;
  margin-bottom: 10px;
  /* border: 2px solid #fff; */
  cursor: pointer;
  font-size: 0;
  position: relative;
}
.quick li::after {
  content: '';
  background-color: #fff;
  width: 12px;
  height: 25px;
  font-weight: bolder;
  position: absolute;
  top: 0;
  margin-left: 5px;
}


.quick .on {
  /* background: #fff; */
  color: #FF0000;
  font-weight: bold;
}

.quick li:hover {
  /* background: #fff; */
  color: #FF0000;
  font-weight: bold;
}

/*  */

/* flex_display */
.flex_display {
  display: flex;
  margin-left: 4px;
  margin-top: 48px;
}

#section12_1 {
  justify-content: end;
  max-width: 66%;
  margin: 0 auto;
}

#section12_2 {
  justify-content: space-between;
  max-width: 66%;
  margin: 0 auto;
}

.full7 h5 {
}

/* content 12  */
.content12_header {
  padding-top: 4vh;
  padding-right: 17vh;
}

.content12_header h5 {
  font-size: 41px;
  font-weight: 500;
  line-height: 47px;
  letter-spacing: -5px;
  word-spacing: -5px;
  margin-top: 13px;
  color:#fff;
}

.content12_header p {
  font-size: 20px;
  font-weight: 400;
  margin-top: 40px;
  letter-spacing: -1px;
  word-spacing: 0px;
  color:#fff;
}

.content12_artwrap button {
  width: 160px;
  line-height: 48px;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  cursor: pointer;
  margin-top: 56px;
  padding-left: 20px;
  padding-right: 20px;
}

.content12_artwrap button img {
  float: right;
  vertical-align: middle;
  margin-top: 7px;

}

.view_btn {
  background-color: #000;
  margin-right: 30px;
  margin-top: 4px;
}

.subscribe_btn {
  background-color: #ed2024;
  margin-right: 10px;
}

.redbtn2 {
  width: 261px;
  line-height: 51px;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  font-weight: 300;
  cursor: pointer;
  background-color: #b91d1e;
  transition: background-color 1s ease-out 100ms;
  border-radius: 12px;
  margin-top: 46px;
  letter-spacing: 1px;
  word-spacing: -5px;
}

.redbtn2:hover {
  background-color: #b61213;
}

/* start */
.infinity-slide2 {
  display: flex;
  width: 80%;
  height: 50%;
  overflow: hidden;
  margin: 0 auto;
  margin-top: 35px;
}


/* section 2 */
.full2 {
  text-align: center;
}

.content2_header {
  color: #fff;
  text-align: center;
}

.content2_header h2 {
  font-size: 48px;
  line-height: 68px;
  font-weight: 100;
  letter-spacing: -7px;
  word-spacing: 3px;
}

.content2_banner {
}

.content2_artbox {
  /* padding: 8vh 0 8vh 0; */
  text-align: center;
  color: #fff;
}

.artground {
}

.artground article img {
  /* margin-top: -20px; */
}

.artground h5 {
  font-size: 24px;
  margin-top: 20px;
  font-weight: 500;
}

.artground h4 {
  font-size: 64px;
  color: #bc9268;
  font-weight: 700;
  margin-top: 44px;
}

.artground p {
}

.member {
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  padding-right: 1vh;
  padding-left: 22vh;
}

.membership_fee {
  border-right: 1px solid rgba(255, 255, 255, 0.2);
  padding-right: 1vh;
  padding-left: 1vh;
}

.association {
  padding-right: 22vh;
  padding-left: 1vh;
}

/* content 4 */

.content4_artwrap {
}

/* section 5 */
.full5 {
}

.content5_header {
}

.content5_header h5 {
}

.content5_header h3 {
}

.content5_header h4 {
}

.content5_header button {
}

/* section 9 */
.full9 h5 {
}

.full9 p {
}

.content_subtitle {
  background-color: #b91d1e;
  width: 420px;
  height: 51px;
  border-radius: 16px;
  margin-top: 46px;
  margin-bottom: 10vh;
  font-size: 22px;
  /* margin-top: 3vh; */
  font-weight: 300;
  display: inline-block;
  color: #fff;
}

/* content 10 */
.content10_header {
  padding-top: 15vh;
  text-align: center;
}

.content10_header h5 {
  font-size: 25px;
  font-weight: 500;
}

.content10_header img {
  margin-top: 10px;
}

.textbox {
  text-align: center;
  color: #fff;
  background-color: #ffadb3;
  /* padding: 10px 10px 10px 10px; */
  width: 321px;
  height: 99px;
  margin-top: -3px;
}

.textbox a {
  color: #fff;
  font-size: 18px;
  line-height: 50px;
  font-weight: 500;
  margin-top: 50px;
  padding-top: 20px;
  width: 321px;
  overflow: hidden;
}

.textbox p {
  font-size: 16px;
  margin-top: 15px;
  opacity: 0.6;
}

.event_btn {
  width: 322px;
  height: 177px;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.8);
  top: 0;
  transition: 0.3s;
  opacity: 0;
}

.event_btn p {
  color: #fff;
  text-align: center;
  font-size: 22px;
  border-radius: 20px;
  border: 1px solid #fff;
  width: 150px;
  line-height: 30px;
  position: absolute;
  top: 40%;
  left: 80px;
}

.event_btn:hover {
  opacity: 1;
}

.event_banner {
}
.event_banner section {
}

.event_banner article {
}

.event2_btn {
  background-image: url(/new/image/new_main/event_btn.png);
  background-size: contain;
}
.event2_btn:hover{
  background-image: url(/new/image/new_main/event_btn_hover.png);
  background-size: contain;
}

.event_banner p {
  color: #fff;
  font-size: 32px;
  line-height: 40px;
  font-weight: 500;
  letter-spacing: -3px;
  margin-right: 33px;
}

.ev_btn {
  opacity: 0;
  width: 321px;height: 177px;
}
.ev_btn a{
  position: absolute;
  background-color:rgba(0,0,0,0.8);
  top: 0;
  transition: 0.3s;
  width: 321px;height: 177px;
  display: block;z-index:999;
}

.ev_btn p{
  color: #fff;
  text-align: center;
  font-size: 22px;
  border-radius: 20px;
  border: 1px solid #fff;
  width: 150px;
  line-height: 30px;
  position: absolute;
  top: 40%;
  left: 80px;
}

.ev_btn:hover{
  opacity: 1;
}

/* content 11 */
.content11_header {
  padding-top: 19vh;
  text-align: center;
}

.content11_header h5 {
  font-family: 'Roboto', sans-serif;
  font-size: 65px;
  font-weight: 700;
}

.content11_header p {
  font-size: 22px;
  color: #757575;
  display: inline-block;
  margin-top: 45px;
}

.content11_artwrap {
  max-width: 1600px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  /* width: calc(100% / 6 - 20px);
  background-color: #666; */
}

.content11_artwrap div.article {}

/* content 8 */
.content8_Wrap {
}

.content8_header {
  color: #fff;
  text-align: left;
}

.content8_header h5 {
}

.content8_header .line2 {
  margin-top: 30px;
  width: 0.5px;
  height: 72px;
  margin-left: 3px;
  background-color: #fff;
  margin-top: 20px;
  margin-bottom: 30px;
}

.content8_header p {
  font-size: 30px;
  font-weight: 300;
}

.content8_artwrap .artground div.article {
  position: relative;
}

.content8_artwrap .artground div.article img {
  background-size: cover;
}

.hotel {
  background-color: rgba(0, 0, 0, 0.8);
  text-align: center;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  transform: translate(0);
  opacity: 0;
  transition: 0.3s;
  letter-spacing: 2px;
}

.hotel .textline {
  background-color: #bc9268;
  height: 2px;
  width: 22px;
  display: inline-block;
}

.hotel p {
  color: #fff;
  margin-top: 20px;
  /* border-top: 2px solid #bc9268; */
}

.hotel:hover {
  opacity: 1;
}

.join_btn {
  background-color: #bb9368 !important;
  color: #fff;
  height: 56px;
  text-align: center;
  border: none;
}

.btnground img {
  border: none;
  font-size: 18px;
  cursor: pointer;
  background-color: transparent;
}

.btnground button {
  width: 56px;
  height: 56px;
  border: none;
  z-index: 9999;
  cursor: pointer;
}

.btnground .btn_prev {
  background-color: #061729;
  z-index: 9998;
}

.btnground .btn_next {
  background-color: #b61211;
  z-index: 9998;
}

.sec3_sc {
  position: relative;
}

.sec3_content2 {}

.sec3_content2_article {
}

.sec3_content2_article article {
}

.sec3_content2_article article:hover {
  background-color: #933233;
  width: 100%;
  transition: all 0.5s;
}

.sec3_content2_article article h3 {
  font-size: 34px;
  font-family: 'Noto Serif', serif;
  line-height: 34px;
  font-weight: 300;
}

.sec3_content2_article article h3 span {
  font-size: 18px;
}

.sec3_content2_article article p {
  font-size: 17px;
  opacity: 0.5;
  line-height: 24px;
  margin-top: 50px;
  font-weight: 300;
}

.sec3_content2_article article button {
  font-size: 18px;
  margin-top: 88px;
  background-color: transparent;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border-bottom: 2px solid #fff;
}

/* content 6  */

.content6_header {
}

.content6_header h5 {
}

.content6_header h3 {
}

.content6_header .line {
}

.content6_header p {
}

.content6_artwrap {
}


.content6_i1 {
}

.content6_i2 {
}

.content6_artwrap article {
}
.content6_artwrap article img {
  position: absolute;
  left: 11%;
  margin-top: -30px;
}
.content6_artwrap article:first-child{
}
.content6_artwrap .sub_tit {
}

.content6_artwrap .sub_tit h3 {
  cursor: pointer;
  line-height: 100px;
  z-index: 9999;
  opacity: 0.6;
  width: 117px;
  height: 117px;
  margin: 0 auto;
  border: 1px solid rgba(255, 255, 255, 0.3);
  font-size: 21px;
}

.content6_artwrap .sub_tit .on {
  background-color: #b61213;
  opacity: 1.0;
  width: 117px;
  height: 117px;
  margin: 0 auto;
}

.content6_sele {
  display: flex;
  justify-content: space-evenly;
  /* margin: 0 auto; */
  text-align: center;
  z-index: 99;
}

.content6_artwrap h5 {
  color: #fff;
  text-align: center;
  margin-top: 100px;
  display: inline-block;
}

/* contnet 14 */
.full14 {}

.full14 h3 {
}

.full14 p {
}

.content14_artwrap {
  transform: scale(0.8);
  margin-top: -20px;
}

.content14_artwrap .artground {}

.content14_artwrap .artground article {
  /* border: 1px solid #f1f1f1 */
}

/* content 15 */

.content15_header {
  padding-top: 17vh;
  text-align: center;
}

.content15_header h3 {
  font-size: 48px;
  letter-spacing: -4px;
}

.content15_header p {
  color: #757575;
  font-size: 21px;
  margin-top: 44px;
}

.content15_artwrap {
  padding-top: 5vh;
  display: flex;
  justify-content: flex-end;
}

.content15_section {
  display: flex;
  justify-content: center;
  margin: 0 auto;
}

.content15_section section {
  width: 40%;
}

.content15_section .map {
  background-color: #999;
  height: 600px;
}

/* */
.jisa_btn {
  width: 133px;
  height: 54px;
  background-color: #505050;
  /* border-radius: 10px 10px 0 0; */
  text-align: center;
  line-height: 54px;
  color: #fff;
  border: none;
  text-decoration: none;
  float: right;
  display: inline-block;
  font-size: 16px;
  letter-spacing: 0px;
  word-spacing: -3px;
  border-right: 1px solid #7d7d7d;
  cursor: pointer;
}

.content15_artwrap .on {
  background-color: #bc9367;
  height: 59px;
  margin-top: -5px;
}

/* start */
.left_div {
  display: flex;
  justify-content: center;
  align-items: flex-start;
}

/* left, right 50:50 */
.left_div {
  width: 100%;
  height: 100%;
  /* box-sizing: border-box;
  padding-top: 180px; */
  /* background: white; */
}

.right_div {
  width: 90%;
  height: 100%;
  box-sizing: border-box;
}

.right_div1 {
  /* width: 100%;
  height: 530px; */
  float: right;
  box-sizing: border-box;
}

.right_div2 {
  /* width: 766px;
  height: 515px; */
  float: right;
  box-sizing: border-box;
  /* margin-top: -60px; */
}

/* header css end */

/* slide */
.outer {
  width: 73.5%;
  height: 460px;
  margin: 0 auto;
  overflow-x: hidden;
  padding-top: 5vh;
}

.inner-list {
  display: flex;
  transition: 1s ease-out;
  height: 460px;
}

.inner {
  margin-left: 30px;
}

.button-list {
  /* text-align: center; */
  /* margin: 10%; */
  display: flex;
  justify-content: space-between;
  margin-top: -342px;
  z-index: 11;

}

.swiperWrap {
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 55vh;
  width: 80vw;
}

.swiper-container {
  position: relative;
  width: 80vw;
  height: 600px;
  overflow: hidden;
  margin: 0 auto;
}

.swiper-container>.swiper-slide__content {
  position: absolute;
  top: 0;
}

.swiper-slide p {
  text-align: center;
  font-weight: 400;
  color: #000;
  font-size: 16px;
  line-height: 40px;
  opacity: 0;
}

.swiper-slide {
  display: flex;
  /* background: #eee; */
  align-items: center;
  justify-content: center;
  transition: all 200ms linear;
  /* transform: scale(0.9); */
}

.swiper-slide img {
}

.swiper-slide-active {
  transition: all 200ms linear;
  transform: scale(1.7);
  font-size: 26px;
}

.swiper-slide-active img {
  box-shadow: 8px 11px 22px -1px rgb(0, 0, 0, 0.13);
}

.swiper-slide-active p {
  opacity: 1;
}

    /* aside bar start */
    aside {
      z-index: 100;
    }

    .aside_wrap {}

    .aside_btn {
      display: flex;
      justify-content: center;
      margin: 0 auto;
      text-align: center;
    }

    .aside_btn li {
      font-size: 16px;
      color: #000;
      /* border: 2px solid #eee; */
      border-radius: 50px;
      /* width: 200px; */
      padding: 10px 35px 10px 35px;
      margin-left: 10px;
      margin-right: 10px;
      background-color: #fff;
      box-shadow: 10px 7px 5px rgb(0 0 0 / 10%);
    }

    .aside_btn li:hover {
      transition: all 0.3s;
      background-color: #b61213;
      color: #fff;
    }

</style>

<!--   <link rel="stylesheet" href="./new_index.css" /> -->


    
    <script src="/js/tailwindcss.js"></script>
    <script>
      tailwind.config = {
        mode: 'jit',
        prefix: 't-',
        theme: {
          extend: {
            colors: {
              'c1': '#00142c',
              'c2': '#b51212',
              'c3': '#a64041',
              'cg': '#bc9268',
              'red': '#b61211',
              clifford: '#da373d',
            },
            width: {
              wrap: '1536px'
            },
            lineHeight: {
              '45': '4.5rem'
            },
            margin: {
              '53': '53px'
            }
          }
        }
      }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
  />
  <style>

    #page-1 {
      height: 90vh;
    }
    #page-2 {
      height: 650px;
    }
    #page-3 {
      height: 647px;
    }
    #page-4 {
      height: 470px;
    }
    #page-5 {
      height: 750px;
    }
    #page-6 {
      height: 625px;
    }
    #page-7 {
      height: 585px;
    }
    #page-8 {
      height: 585px;
    }
    #page-9 {
      padding: 65px 0 0 0;
    }
    #page-10 {
      height: 685px;
    }
    #page-11 {
      height: 500px;
    }
    #page-12 {
      height: 500px;
    }
    #page-13 {
      height: 750px;
    }
    #page-14 {
      height: 600px;
    }
    #page-15 {
      height: 625px;
    }

    .mySwiper {
      width: 100%;
      height: 100%;
      padding: 40px 5px;
    }

    .mySwiper .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      border-radius: 5px;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

    }

    .mySwiper .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      border-radius: 0;
    }
    .mySwiper .swiper-slide-active img {
      box-shadow: initial;
      border: 0;
    }

    .mySwiper .swiper-pagination-bullet {
      width: 14px;
      height: 14px;
    }
    .mySwiper .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: #bc9268;
      /* ffadb3 */
    }
    /* .mySwiper .swiper-slide {
      width: 100%;
    } */

    .mySwiper2 {
      width: 100%;
      height: 100%;
      padding: 0 !important;
    }

    .mySwiper2 .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      border-radius: 5px;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

    }

    .mySwiper2 .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      border-radius: 0;
    }
    .mySwiper2 .swiper-slide-active img {
      box-shadow: initial;
    }

    .mySwiper2 .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
    }
    .mySwiper2 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: #bc9268;
      /* ffadb3 */
    }
    /* .mySwiper2 .swiper-slide {
      width: 100%;
    } */


    .mySwiper3 {
      width: 100%;
      height: 100%;
      padding: 40px 5px;
    }

    .mySwiper3 .swiper-slide {
      text-align: center;
      font-size: 18px;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

    }

    .mySwiper3 .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      border-radius: 0;
    }
    .mySwiper3 .swiper-slide-active img {
      box-shadow: initial;
    }

    .mySwiper3 .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
    }
    .mySwiper3 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: #ffadb3;
      /* ffadb3 */
    }

    /* .mySwiper3 .swiper-slide {
      width: 33.33%;
    } */

    .mySwiper4 {
      width: 100%;
      height: 100%;
      padding: 40px 5px;
    }

    .mySwiper4 .swiper-slide {
      text-align: center;
      font-size: 18px;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

    }

    .mySwiper4 .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      border-radius: 100%;
    }
    .mySwiper4 .swiper-slide-active img {
      box-shadow: initial;
    }

    .mySwiper4 .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
    }
    .mySwiper4 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: #ffadb3;
    }

    .mySwiper5 {
      width: 100%;
      height: 100%;
      padding: 0 !important;
    }

    .mySwiper5 .swiper-slide {
      text-align: center;
      font-size: 18px;



      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

    }

    .mySwiper5 .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
    }
    .mySwiper5 .swiper-slide-active img {
      box-shadow: initial;
    }

    .mySwiper5 .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
      background: #fff;
    }
    .mySwiper5 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: red;
    }

    .mySwiper6 {
      width: 100%;
      height: 100%;
      padding: 40px 5px;
    }

    .mySwiper6 .swiper-slide {
      text-align: center;
      font-size: 18px;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

    }

    .mySwiper6 .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
    }
    .mySwiper6 .swiper-slide-active img {
      box-shadow: initial;
      border: 0;
    }

    .mySwiper6 .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
    }
    .mySwiper6 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: #bc9268;
    }


    .mySwiper7 {
      width: 100%;
      height: 100%;
      padding: 40px 5px;
    }

    .mySwiper7 .swiper-slide {
      text-align: center;
      font-size: 18px;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

    }

    .mySwiper7 .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
    }
    .mySwiper7 .swiper-slide-active img {
      box-shadow: initial;
    }

    .mySwiper7 .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
    }
    .mySwiper7 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: #bc9268;
    }
    .mySwiper7 .swiper-slide-active img {
      border: 0;
    }

    .swiper {
      padding: 0 0 28px 0px !important
    }

    .swiper-slide {
      background: transparent !important;
    }
    /* .mySwiper4 .swiper-slide {
        width: 33.33%;
      } */
    .swiper-slide-active {
      z-index: 300;
      transform: scale(1) !important;
    }

    .swiper-slide-active img {
/*       border: 1px solid #bc9268; */
      border-radius: 5px;
    }

    .mySwiper2 .swiper-slide-active,
    .mySwiper3 .swiper-slide-active,
    .mySwiper5 .swiper-slide-active {
      transform: initial;
    }
    .mySwiper2 .swiper-slide-active img{
      border: initial;
    }
    
    .mySwiper4 .swiper-slide-active img {
      transform: scale(1) !important;
    }
    .mySwiper4 .swiper-slide img {
      transform: scale(0.53);
    }
    /* .mySwiper6 .swiper-slide,
    .mySwiper4 .swiper-slide {
      transform: scale(0.65);
    } */
    /* .mySwiper4 .swiper-slide-active,
    .mySwiper6 .swiper-slide-active {
      transform: scale(1);
    } */
  

    /* @media (max-width: 640px) {
      .mySwiper6 .swiper-slide-active img{
        border: initial;
      }
      .mySwiper6 .swiper-slide-active {
        transform: scale(1);
      }
    }

    @media (max-width: 1280px) {
      .mySwiper6 .swiper-slide-active {
        transform: scale(1);
      }

      .mySwiper6 .swiper-slide,
      .mySwiper4 .swiper-slide {
        transform: scale(1);
      }
      .mySwiper4 .swiper-slide-active,
      .mySwiper6 .swiper-slide-active {
        transform: scale(1);
      }
    } */

    .drop{
      width: 0;
      height: 0;
      margin-bottom: 20px;
    }
    .drag{
      width: 0;
      height: 0;
    }

    .sideSwiper {
      width: 100%;
      padding: 40px 5px;
      overflow: hidden;
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee;
    }
    .sideSwiper .swiper-slide {
      width: 60%;
    }
    .sideSwiper .swiper-slide-active img {
      border: initial;
    }
    .sideSwiper .swiper-slide:nth-child(2n) {
      width: 60%;
    }

    .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction {
      bottom: 0;
    }
    .swiper-pagination-bullet {
      width: 12px !important;
      height: 12px !important;
    }
  </style>
</head>

<body class="t-relative t-pb-18">
  <style>
    .sidebar_menu_bg {
      position: fixed;
      background-color: #000;
      opacity: 0.73;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vh;
      transition: 0.5s ease-out;
      z-index: 100;
      display:none;
    }
    .sidebar_menu_bg.toggle {
      left: 0;
      box-shadow: 1px 0 15px 2px rgba(0, 0, 0, 0.4);
      display: block;
    }
    .sidebar_menu {
      position: fixed;
      background-color: #fff;
      top: 0;
      right: -20rem;
      height: 100vh;
      width: 95vw;
      transition: 0.5s ease-out;
      z-index: 101;
      display:none;
    }
    .menu_wrap {
      width: 100%;
    }
    .menu_wrap li {
      height: 50px;
      line-height: 50px;
      padding-left: 19px;
      font-size: 13px;
    }
    .menu_wrap2 {
      width: 100%;
      list-style: none;
      padding: 0 20px 0 20px;
    }
    .menu_wrap2 p {
    }
    .menu_wrap2 li {
      height: 50px;
      font-size: 15px;
      line-height: 50px;
    }

    .sidebar_menu.toggle {
      right: 0;
      box-shadow: 1px 0 15px 2px rgba(0, 0, 0, 0.4);
      display: block;
    }

    .hamburger {
      font: inherit;
      overflow: visible;
      margin: 0;
      padding: 0;
      cursor: pointer;
      transition-timing-function: linear;
      transition-duration: .15s;
      transition-property: opacity,filter;
      text-transform: none;
      color: inherit;
      border: 0;
      position: fixed;
      right: 10px;
      top: 11px;
      z-index: 99999999;
    }
  .hamburger.is-active:hover, .hamburger:hover {
    opacity: .7;
  }
  .hamburger--elastic.is-active .hamburger-inner {
      transition-delay: 75ms;
      transform: translate3d(0,10px,0) rotate(135deg);
  }
  .hamburger.is-active .hamburger-inner, .hamburger.is-active .hamburger-inner:after, .hamburger.is-active .hamburger-inner:before {
      background-color: #000;
  }
  .hamburger--elastic.is-active .hamburger-inner:before {
      transition-delay: 0s;
      opacity: 0;
  }
  .hamburger.is-active .hamburger-inner, .hamburger.is-active .hamburger-inner:after, .hamburger.is-active .hamburger-inner:before {
      background-color: #000;
  }
  .hamburger--elastic.is-active .hamburger-inner:after {
      transition-delay: 75ms;
      transform: translate3d(0,-20px,0) rotate(-270deg);
  }
  .hamburger.is-active .hamburger-inner, .hamburger.is-active .hamburger-inner:after, .hamburger.is-active .hamburger-inner:before {
      background-color: #000;
  }
  
  .hamburger-box {
    position: relative;
    display: inline-block;
    width: 40px;
    height: 24px;
  }
  .hamburger--elastic .hamburger-inner {
    top: 2px;
    transition-timing-function: cubic-bezier(.68,-.55,.265,1.55);
    transition-duration: .275s;
  }

  .hamburger-inner, .hamburger-inner:after, .hamburger-inner:before {
    position: absolute;
    width: 40px;
    height: 4px;
    transition-timing-function: ease;
    transition-duration: .15s;
    transition-property: transform;
    border-radius: 4px;
    background-color: #fff;
  }
  .hamburger-inner {
    top: 50%;
    display: block;
    margin-top: -2px;
  }
  .hamburger--elastic .hamburger-inner:before {
      top: 10px;
      transition: opacity .125s ease .275s;
  }
  .hamburger-inner:before {
      top: -10px;
  }
  .hamburger-inner:after, .hamburger-inner:before {
      display: block;
      content: "";
  }
  .hamburger-inner, .hamburger-inner:after, .hamburger-inner:before {
      position: absolute;
      width: 40px;
      height: 4px;
      transition-timing-function: ease;
      transition-duration: .15s;
      transition-property: transform;
      border-radius: 4px;
      background-color: #fff;
  }
  .hamburger--elastic .hamburger-inner:after {
      top: 20px;
      transition: transform .275s cubic-bezier(.68,-.55,.265,1.55);
  }
  .hamburger-inner:after {
      bottom: -10px;
  }
  .hamburger-inner:after, .hamburger-inner:before {
      display: block;
      content: "";
  }
  .hamburger-inner, .hamburger-inner:after, .hamburger-inner:before {
      position: absolute;
      width: 40px;
      height: 4px;
      transition-timing-function: ease;
      transition-duration: .15s;
      transition-property: transform;
      border-radius: 4px;
      background-color: #fff;
  }


  #fp-nav ul li .fp-tooltip.right {
    top: 4px !important;
    right: 14px !important;
    opacity: 1;
    transition: all 300ms ease-in;
    width: auto;
    color: #fff;
    font-size: 15px;
    font-weight: 800;
  }
  
  #fp-nav ul li:hover .fp-tooltip, #fp-nav.fp-show-active a.active + .fp-tooltip,
  #fp-nav ul li .fp-tooltip.right.active {
    color: #f00 !important;
    opacity: 1;
  }

  #fp-nav ul li, .fp-slidesNav ul li {
    width: 4px !important;
    height: 26px !important;
  }

  #fp-nav ul li a span, .fp-slidesNav ul li a span {
    width: 4px !important;f
    height: 26px !important;
    margin: 0 !important;
    left: 0 !important;
    top: 0 !important;
    border-radius: 0 !important;
    background: #fff !important;
  }
  #fp-nav ul li:hover a span, .fp-slidesNav ul li:hover a span,
  #fp-nav ul li a.active span, .fp-slidesNav ul li a.active span {
    background: #f00 !important;
    transition: all 300ms ease-in;
  }

  #confettiCanvas {
    z-index: 0 !important;
  }
  </style>

<div id="body" style="opacity: 0; transition: all 500ms ease-in;">
  <aside class="t-flex t-fixed t-w-full t-bottom-0 t-left-0 sm:t-mb-10 t-hidden sm:t-block">
    <ul class="t-flex t-justify-between t-items-center t-w-full sm:t-w-[1008px] t-text-xs md:t-text-[22px] md:t-leading-[23px] sm:t-mx-auto t-text-cg t-font-bold sm:t-gap-5">
      <a href="#" onclick="speed0();" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-white hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-3 t-px-2 sm:t-px-6 sm:t-rounded-[50px] t-duration-300">
        <li>자주하는질문</li>
      </a>
      <a href="#" onclick="speed1();" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-white hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-3 t-px-2 sm:t-px-6 sm:t-rounded-[50px] t-duration-300">
        <li>방문예약</li>
      </a>
      <a href="#" onclick="speed2();" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-white hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-3 t-px-2 sm:t-px-6 sm:t-rounded-[50px] t-duration-300">
        <li>무료상담</li>
      </a>
      <a href="#" onclick="speed3();" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-white hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-3 t-px-2 sm:t-px-6 sm:t-rounded-[50px] t-duration-300">
        <li>가입비안내</li>
      </a>
      <a href="#" onclick="speed4();" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-white hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-3 t-px-2 sm:t-px-6 sm:t-rounded-[50px] t-duration-300">
        <li>안내자료</li>
      </a>
    </ul>
  </aside>

  <aside class="t-flex t-fixed t-w-full t-bottom-0 t-left-0 sm:t-mb-6 t-block sm:t-hidden ">
    <ul class="t-flex t-justify-between t-items-center t-w-full sm:t-w-[640px] t-text-xs md:t-text-base sm:t-mx-auto t-text-white t-font-bold md:t-gap-3">
      <a href="/nm/html/service/qna.php"  class="t-text-center t-flex-1 sm:t-flex-0 t-bg-[#134276] hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-4 t-px-2 sm:t-px-4 sm:t-rounded-[50px]">
        <li>자주하는 질문</li>
      </a>
      <a href="/nm/common/Counseling.php?counselgbn=34642" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-[#c7af97] hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-4 t-px-2 sm:t-px-4 sm:t-rounded-[50px]">
        <li>1:1 문의</li>
      </a>
      <a href="tel:025404000" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-[#b61211] hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-4 t-px-2 sm:t-px-4 sm:t-rounded-[50px]">
	<li>
		<div class="t-flex t-justify-center t-items-center">
			<img src="/nm/image/icon_tell.png">
			전화상담
		</div>
	</li>
      </a>
      <a href="/nm/common/brochure.php?counselGbn=34643" class="t-text-center t-flex-1 sm:t-flex-0 t-bg-[#bb9368] hover:t-text-white hover:t-bg-red sm:t-drop-shadow-md t-py-4 t-px-2 sm:t-px-4 sm:t-rounded-[50px]">
        <li>브로셔신청</li>
      </a>
    </ul>
  </aside>

  <!-- toggle -->
  <div class="sidebar_menu_bg"></div>
  <div class="sidebar_menu">
    <div class="t-flex t-text-sm t-py-4 t-px-3 t-gap-4 t-justify-start t-items-center t-relative">
      <span><a href="/nm/html/login/login.php" class="btn-login">로그인</a></span>
      <span><a href="https://www.isoohyun.co.kr/nm/html/app/login.php" class="btn-app">앱</a></span>
      <span><a href="https://www.isoohyun.co.kr/nm/html/cont/login.php" class="btn-paper">표준계약서</a></span>
      
    </div>

    <!-- Swiper -->
    <div class="sideSwiper sideSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="https://m.isoohyun.co.kr/nm/html/lovetest/joinCarge.php?counselGbn=24953">
            <img src="https://m.isoohyun.co.kr/nm/static/images/main/header/banner01.png" width="95%">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://m.isoohyun.co.kr/nm/html/remarriage/main.php?counselGbn=24954">
            <img src="https://m.isoohyun.co.kr/nm/static/images/main/header/banner04.png" width="95%">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://m.isoohyun.co.kr/nm/recruit/index.php">
            <img src="https://m.isoohyun.co.kr/nm/static/images/main/header/banner03.png" width="95%">
          </a>
        </div>
      </div>
    </div>

    <script>
      var swiper = new Swiper('.sideSwiper', {
        slidesPerView: 1.2,
        spaceBetween: 0,
        loop: true,
        loopedSlides: 50,
        speed: 300,
      });

	$(document).ready(function(event) {
	    $(".main").click(function() {
		    var main_id = $(this).attr('id');
		    var main_num = '#sub' + main_id.substr(5);
		    $('.menu_wrap2').css("display", "none");
		    $(main_num).css("display", "block");
		    $('.main').css({'background' : '#fff',  'color' : 'black'});
		    $("#" + main_id).css({'background' : '#1aa69d',  'color' : '#fff'});
	    });
	});
    
    </script>

    <div class="t-flex t-justify-between t-w-full t-h-full t-items-start side-menu">
      <div class="t-flex t-w-[100px] t-h-full t-border-r t-border-gray-200">
        <ul class="menu_wrap">
          <li id="mains0" class="main" style="background:#1aa69d; color:#ffffff;">수현소개</li>
          <li id="mains1" class="main">WHY수현</li>
          <li id="mains2" class="main">회원&amp;성혼</li>
          <li id="mains3" class="main">가입문의</li>
          <li id="mains4" class="main">러브테스트</li>
          <li id="mains5" class="main">파티/이벤트</li>
          <li id="mains6" class="main">미팅가이드</li>
          <li id="mains7" class="main">고객센터</li>
          <li id="mains8" class="main">지사</li>
          <a href="https://www.isoohyun.co.kr/nm/recruit/index.php" target="_blank" class="main">
            <li>채용공고</li>
          </a>
        </ul>
      </div>
      <div class="active_menu t-flex-1">
        <ul id="sub0" class="menu_wrap2">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">수현소개</p>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/ceo.php">· CEO 인사말</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/history.php">· 회사연혁</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/gallery.php">· 노블레스 수현 갤러리</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=192">· 수상내역</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/news-list.php">· 언론 속 수현 뉴스</a></li>
          <li>
            <a href="https://www.isoohyun.co.kr/nm/html/introduce/youtube.php">· 수현 유튜브 채널</a>
            <div style="z-index: 999999; width: 40px; height: 25px; background: #f90006; color: #ffffff; border-radius: 10px; position: relative; text-align: center; top: -38px; left: 130px; zoom:0.9;">
		<span style="position: relative; top:-18px;">new</span>
	    </div>
          </li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/soohyun_inside.php">· 수현 인사이드</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/about01.php">· 오시는길</a></li>
          <br>
        </ul>
        <ul id="sub1" class="menu_wrap2" style="display:none;">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">WHY수현</p>
          <li><a href="https://www.isoohyun.co.kr/nm/html/benefit/who-soohyun.php">· 왜 노블레스 수현인가?</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=191">· 2021성과평가 REPORT</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=194">· NCS 평가지수</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/benefit/mem_service.php">· 멥버쉽 서비스</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/benefit/com_service.php">· 법인, 단체 고객사 서비스</a></li>
          <li id="active01_01"><a href="https://www.isoohyun.co.kr/nm/common/brochure.php">· 온라인 브로슈어</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/benefit/medical_service.php">· 회원 의료 혜택 Service</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=94">· 고객안심서비스</a></li>
        </ul>
        <ul id="sub2" class="menu_wrap2" style="display:none;">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">회원&amp;성혼</p>
          <li><a href="https://www.isoohyun.co.kr/nm/html/benefit/m_info.php">· 실시간 회원현황</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=193">· 회원성비&amp;교제율현황</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/benefit/difflevel.php">· 수준이 다른 성혼율</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/matchingreview/about01.php">· 매칭후기</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/lovetest/hope_ideal_test.php">· 희망 프로필 추천</a></li>
        </ul>
        <ul id="sub3" class="menu_wrap2" style="display:none;">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">가입문의</p>
          <li id="active03_01"><a href="https://www.isoohyun.co.kr/nm/html/benefit/join-info01.php">· 정회원 가입안내</a></li>
          <li id="active03_02"><a href="https://www.isoohyun.co.kr/nm/html/service/class-black-label.php">· 가입비 안내</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/service/black_service2.php">· 블랙서비스</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/service/service-option01.php">· 정재계 명문가 서비스</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/service/service-option02.php">· 전문직 엘리트 서비스</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/service/service-option03.php">· 크리스천 서비스</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/service/service-option04.php">· 해외파 유학파 서비스</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/service/service09.php">· 자녀결혼 컨설팅</a></li>
          <li id="active03_9"><a href="https://www.isoohyun.co.kr/nm/html/benefit/virtual_service.php">· 서비스가상체험</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/remarriage/main.php" style="color: #785813;">· 재혼전용 프로그램 안내</a></li>
        </ul>
        <ul id="sub4" class="menu_wrap2" style="display:none;">
          <p class="t-flex t-justify-between t-text-xl t-text-[#31859c] t-py-[12px]">
            러브테스트
            <img style="cursor: pointer; float:right; width:24px; height:24px;" src="https://www.isoohyun.co.kr/nm/image/more.png" onclick="javascript:location.href='/nm/html/lovetest/lovetest_main.php';">
          </p>
              
          <li id="active04_1"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/ideal_find_test.php">· 이상형 찾기</a></li>
          <li id="active04_12"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/ideal_worldcup.php">· 이상형 월드컵</a></li>
          <li id="active04_2"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/love_test2.php">· 연애력 테스트</a></li>
          <li id="active04_3"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/marryTime.php">· 결혼시기 TEST</a></li>
          <li id="active04_4"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/constitution.php">· 결혼체질도 TEST</a></li>
          <li id="active04_5"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/remarriage.php">· 재혼가능성 TEST</a></li>
          <li id="active04_6"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/joinCarge.php">· 노블레스가입비 TEST</a></li>
          <li id="active04_7"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/penthouse.php">· 펜트하우스 TEST</a></li>
          <li id="active04_8"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/marry_partner.php">· 내게 맞는 커플매니저</a></li>
          <li id="active04_9"><a href="/under/adpop18.php">· 이상형 추천 TEST</a></li>
          <li id="active04_10"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/mbti_test.php">· MBTI 이상형 TEST</a></li>
          <li id="active04_11"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/first_face_test.php">· 첫인상 TEST</a></li>
        </ul>
        <ul id="sub5" class="menu_wrap2" style="display:none;">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">파티/이벤트</p>
          <li id="active05_01"><a href="https://www.isoohyun.co.kr/nm/html/meet/premium-culture.php">· 프리미엄 모임</a></li>
          <li id="active05_02"><a href="https://www.isoohyun.co.kr/nm/html/meet/special-menu.php">· 스페셜이벤트</a></li>
          <li id="active05_03"><a href="https://www.isoohyun.co.kr/nm/html/meet/private-party.php">· 프라이빗 파티</a></li>
          <li id="active05_04"><a href="https://www.isoohyun.co.kr/nm/html/meet/private-gallery.php">· 파티 갤러리</a></li>
        </ul>
        <ul id="sub6" class="menu_wrap2" style="display:none;">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">미팅가이드</p>
          <li id="active06_01"><a href="https://www.isoohyun.co.kr/nm/html/customer/love_success.php">· 미팅성공전략</a></li>
          <li id="active06_02"><a href="https://www.isoohyun.co.kr/nm/html/service/service10.php">· 결혼칼럼</a></li>
          <li id="active06_03"><a href="https://www.isoohyun.co.kr/nm/html/lovetest/webtoonlist.php">· 홍보웹툰</a></li>
          <li id="active06_04"><a href="https://www.isoohyun.co.kr/nm/html/customer/upperclass.php">· 상류층 연애&amp;결혼 TREND</a></li>
        </ul>
        <ul id="sub7" class="menu_wrap2" style="display:none;">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">고객센터</p>
          <li id="active07_01"><a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-list.php">· 공지사항</a></li>
          <li><a href="https://m.isoohyun.co.kr/nm/html/service/qna.php?mctkey=307">· 자주하는 질문</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/benefit/phone-guide.php">· 전화문의 가이드</a></li>
          <li id="active07_04"><a href="https://www.isoohyun.co.kr/nm/html/customer/advice-phone.php">· 무료상담신청</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/recruit/index.php" target="_blank">· 채용공고</a></li>
        </ul>
        <ul id="sub8" class="menu_wrap2" style="display:none;">
          <p class="t-text-xl t-text-[#31859c] t-py-[12px]">지사</p>
          <li><a href="https://www.isoohyun.co.kr/nm/html/busan/intro.php">· 부산지사</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/daegu/intro.php">· 대구지사</a></li>
          <li><a href="https://www.isoohyun.co.kr/nm/html/daejeon/intro.php">· 대전지사</a></li>
        </ul>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function() {

  });
  </script>

  <!-- is-active -->
  <div class="hamburger hamburger--elastic js-hamburger xl:t-hidden">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>

  <header>
    <div id="mheader_section" class="t-flex xl:t-hidden t-flex t-items-center t-h-full " style="background-color:rgba(0, 0, 0, 0.21);">
      <a href="https://www.isoohyun.co.kr/"><img src="https://www.isoohyun.co.kr/new/image/top_logo.png" class="t-w-[140px]" alt=""></a>


    </div>
    
    <script>
      $('.hamburger').click(function() {
        if($(this).hasClass("is-active") === true) {
          $('body').css({'overflow' : '', 'height':''});
        } else {
          $('body').css({'overflow' : 'hidden', 'height':'100%'});
        }
	      $(this).toggleClass('is-active');
        $('.sidebar_menu').toggleClass('toggle');
        $('.sidebar_menu_bg').toggleClass('toggle');


        var sH = $(window).height() - $('.sideSwiper').innerHeight() -100;
        if(sH > 0) {
          $('.side-menu').css('overflow-y', 'auto');
          $('.side-menu').css('max-height', sH + 'px');
        }
      });
    </script>

<!--     <div id="header_section" class="xl:t-flex t-hidden">
      <div class="t-flex t-h-full">
        <a href="https://www.isoohyun.co.kr/"><img src="https://www.isoohyun.co.kr/new/image/top_logo.png" class="t-w-[200px] t-mt-[16px]" alt=""></a>
      </div>
      <ul class="clearfix t-grid t-grid-cols-8 t-gap-2 t--ml-[200px]">
    
      <li><div class="menu">수현 소개</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/about/about01.php">CEO인사말</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about02.php">회사연혁</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about06.php">수현 갤러리</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=192">수상내역</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about03.php">언론 속 수현</a></li>
            <li><a style="color:#785813;" href="https://www.isoohyun.co.kr/new/about/youtube.php">Youtube</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about11.php">수현 인사이드</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about12.php">오시는 길</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/busan/about01.php">전국 지사</a></li>
          </ul>
        </li>
        <li style=""><div class="menu">WHY수현</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit02.php">WHY수현</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=191">성과 RERORT</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=194">NCS 평가지수</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit11.php">멤버쉽 서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit08.php">제휴서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit09.php">온라인 브로슈어</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/benefit/service.php">회원 의료 혜택</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=94">고객안심서비스</a></li>
          </ul>
        </li>
        <li style=""><div class="menu">회원&성혼</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/about/about10.php">실시간 회원근황</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=193">회원성비&교제율</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit15.php">수준이 다른 성혼율</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/about/about15.php">매칭후기</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit14.php">서비스 가상체험</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/lovetest/hope_ideal_test.php">희망 프로필</a></li>
          </ul>
        </li>
        <li style=""><div class="menu">가입문의</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit04.php">정회원 가입안내</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/service01.php">CLASS별 서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/new_black_service.php">블랙서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/service04.php">명문가 서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/service05.php">전문직 서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/service06.php">크리스천 서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/service07.php">유학파 서비스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/service09.php">자녀결혼 컨설팅</a></li>
            <li><a style="color:#785813;" href="https://www.isoohyun.co.kr/new/remarriage/main.php" target="_blank">재혼전용 프로그램</a></li>
          </ul>
        </li>
        <li style=""><div class="menu">러브테스트</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/lovetest/ideal_find_test.php">이상형 찾기</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/lovetest/ideal_worldcup.php">이상형 월드컵</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/lovetest/mbti_test.php">MBTI이상형</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/fate/fate08.php">결혼시기</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/lovetest/first_face_test.php">첫인상</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/fate/fate21.php">재혼가능성</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/lovetest/join_test.php">노블레스 가입비</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/fate/fate26.php">펜트하우스</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/fate/fate18.php">커플매니저</a></li>
          </ul>
        </li>
        <li style=""><div class="menu">파티/이벤트</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/meet/meet01.php">프리미엄 모임</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/meet/meet07.php">스페셜이벤트</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/meet/meet04.php">프라이빗 파티</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/meet/meet11.php">파티 갤러리</a></li>
          </ul>
        </li>
        <li style=""><div class="menu">미팅가이드</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/customer/love_success.php">미팅성공전략</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/service10.php">결혼칼럼</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/fate/fate25.php">홍보웹툰</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/service/upperclass.php">상류층 TREND</a></li>
          </ul>
        </li>
        <li style=""><div class="menu">고객센터</div>
          <ul class="sub_menu">
            <li><a href="https://www.isoohyun.co.kr/new/about/about07.php">공지사항</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/customer/customer02.php">자주하는 질문</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/benefit/benefit03.php">전화문의 가이드</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/customer/customer03.php">무료상담신청</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/customer/customer08.php">고객의견</a></li>
            <li><a href="https://www.isoohyun.co.kr/new/recruit/index.php" target="_blank">채용공고</a></li>
          </ul>
        </li>
      </ul>
      <div class="text t-text-white t-relative">
        <div class="t-absolute t-top-0 t-left-0 t-w-[315px] t--ml-[315px] t-mt-[18px]">
          <p class="num"><a class="a_color" href="https://www.isoohyun.co.kr/new/customer/customer03.php?counselGbn=27340">✆ 02.540.4000</a></p>
          <div class="login">
              <p><a class="a_color" href="https://www.isoohyun.co.kr/new/com/com01.php">로그인</a></p>
              <p class="a_color">|</p>
              <p><a class="a_color" href="https://www.isoohyun.co.kr/new/com/com09.php">서류제출</a></p>
          </div>
        </div>
      </div>
    </div> -->
    
    <div class="menu_Wrap">
      <a href="https://www.isoohyun.co.kr/new/com/com08.php" class="menu_bar">
        <span class="top"></span>
        <span class="center"></span>
        <span class="bottom"></span>
      </a>
    </div>
  </header>


  <!-- 사이드 바 -->
  <!-- <div class='quick'>
    <ul style="color:white;">
      <li onClick="Page__run(0)" class="on">수현</li>
      <li onClick="Page__run(1)">회원수</li>
      <li onClick="Page__run(2)">서비스</li>
      <li onClick="Page__run(3)">매칭후기</li>
      <li onClick="Page__run(4)">성혼율</li>
      <li onClick="Page__run(5)">회원현황</li>
      <li onClick="Page__run(6)">매니저</li>
      <li onClick="Page__run(7)">맞선장소</li>
      <li onClick="Page__run(8)">안심서비스</li>
      <li onClick="Page__run(9)">파티&이벤트</li>
      <li onClick="Page__run(10)">러브테스트</li>
      <li onClick="Page__run(11)">유튜브</li>
      <li onClick="Page__run(12)">수상경력</li>
      <li onClick="Page__run(13)">제휴사</li>
      <li onClick="Page__run(14)">지사</li>
      <li onClick="Page__run(15)" style="display: none;">꼬릿말</li>
    </ul>
  </div> -->

  <!-- 흑백 배경 팝업 -->
  <div id="maskz2" style="width: 100%; height: 4170px; left: 0px; top:0px; opacity: 0.8; display: block; display:none;"></div>
  <!-- 흑백 배경 팝업 -->

  <!-- 자주하는질문 -->
  <div id="speed0" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
    <div id="speedclose0" onclick="speedclose0()" style="position:absolute;top:300px;left:1480px;"><img src="https://www.isoohyun.co.kr/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
    <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar0.php" scrolling="no" style="width:2000px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
  </div>

  <!-- 방문예약 -->
  <div id="speed" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
    <div id="speedclose2" onclick="speedclose1()" style="position:absolute;top:300px;left:1030px;"><img src="https://www.isoohyun.co.kr/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
    <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar1.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
  </div>

  <!-- 무료상담 -->
  <div id="speed2" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
    <div id="speedclose2" onclick="speedclose2()" style="position:absolute;top:300px;left:1030px;"><img src="https://www.isoohyun.co.kr/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
    <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar3.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
  </div>

  <!-- 가입비안내 -->
  <div id="speed3" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
    <div id="speedclose3" onclick="speedclose3()" style="position:absolute;top:300px;left:1030px;"><img src="https://www.isoohyun.co.kr/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
    <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar2.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
  </div>

  <!-- 안내자료 -->
  <div id="speed4" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
    <div id="speedclose4" onclick="speedclose4()" style="position:absolute;top:300px;left:1030px;"><img src="https://www.isoohyun.co.kr/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
    <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar4.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
  </div>

  <a href="#"><img id="top_off" src="https://www.isoohyun.co.kr/new/image/main/new/btn_up_off.png" style="position: absolute; top:-55px;right: 10px;" /></a>
  <a href="#"><img id="top_on" src="https://www.isoohyun.co.kr/new/image/main/new/btn_up_on.png" style="position: absolute; top:-55px;right: 10px; display:none;" /></a>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@600;700;900&display=swap" rel="stylesheet">



  <div id="fullpage">
    <!-- 1.수현 -->
    <div class="section full1 t-flex t-overflow-hidden" id="page-1" data-font-color="#fff">
      <div class="video" style="background-image: url(https://www.isoohyun.co.kr/nm/html/main/image/main_mobile_img_1.jpg)"></div>
      <div class="video" style="background-image: url(https://www.isoohyun.co.kr/nm/html/main/image/main_mobile_img_2.jpg)"></div>
      <div class="video" style="background-image: url(https://www.isoohyun.co.kr/nm/html/main/image/main_mobile_img_3.jpg)"></div>
      <div class="video" style="background-image: url(https://www.isoohyun.co.kr/nm/html/main/image/main_mobile_img_4.jpg)"></div>
      <div class="main-text-wrap">
        내가 선택하는<br/>유일한 가족
      </div>
      <style>
      .section .video {
        width: 100vw;
        height: 90vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-size: 200%;
        opacity: 0;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 0;
        transition: 1s ease-out;
      }
      .section .video.on {
        background-size: 125% !important;
        opacity: 1 !important;
      }
      .main-text-wrap {
        width: 90%;
        left: 50%;
        transform: translateX(-50%);
        position: absolute;
        top: 25%;
        margin-top: 80px;
        font-family: 'Noto Serif KR';
        font-size: 30pt;
        z-index: 10;
        letter-spacing: -2px;
        text-shadow: 1px 1px 10px rgb(47 35 18 / 45%), 1px 1px 10px rgb(47 35 18 / 45%);
        color: #fff;
        line-height: 34pt;
        font-weight: 600;
        text-align: center;
        transition: 1s ease-out;
      }
      .main-text-wrap span {
        font-family: 'Noto Serif KR';
        font-weight: 900;
      }


      .mainSwiper {
        width: 100%;
        max-height: 160px;
        position: absolute;
        left:50%;
        transform:translateX(-50%);
        top: 60%;
        margin-top: -20px;
        z-index: 1;
        pointer-events:none;
      }
      .mainSwiper .swiper-slide {
        font-size: 20pt;
        color: #fff;
        font-family: "Noto Sans KR", "Roboto", "sans-serif";
        word-wrap: break-word;
        letter-spacing: -2px;
        line-height: 32pt;
      }
      .count-wrap {
        width: 90%;
        left:50%;
        transform:translateX(-50%);
        position: absolute;
        top: 60%;
        margin-top: 80px;
        font-family: "Noto Sans KR", "Roboto", "sans-serif";
        font-size: 14pt;
        z-index: 10;
        text-shadow: 1px 1px 10px rgb(47 35 18 / 45%), 1px 1px 10px rgb(47 35 18 / 45%);
        letter-spacing: -1px;
      }
      </style>
      <div class="swiper mainSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <span class="t-bg-[#74000d] t-px-3 t-rounded-lg">
              <strong>노블 유일</strong> 회원수,성혼수 공개
            </span>
          </div>
          <div class="swiper-slide">
            <span class="t-bg-[#74000d] t-px-3 t-rounded-lg">
              <strong>전문직 성혼율 84.4%</strong>
            </span>
          </div>
          <div class="swiper-slide">
            <span class="t-bg-[#74000d] t-px-3 t-rounded-lg">
              <strong>업계 유일 5성급 호텔 미팅</strong>
            </span>
          </div>
          <div class="swiper-slide">
            <span class="t-bg-[#74000d] t-px-3 t-rounded-lg">
              <strong>노블레스 수현 이용만족도 98.2%</strong>
            </span>
          </div>
        </div>
      </div>

      <div class="count-wrap t-flex t-flex-col">
          <div class="t-flex t-justify-between">
            <p class="t-flex t-text-white t-text-[14pt] t-text-[#fff]">교제성혼수 <strong class="number_font">4,911</strong>명</p>
            <p class="t-flex t-text-white t-text-[14pt] t-text-[#fff]">회원수 <strong class="number_font">13,168</strong>명</p>
          </div>
          <p class="t-text-white t-text-sm t-text-end t-text-[11pt] t-text-[#fff]">
            <span class="number_font">2022년 9월</span> 기준
          </p>
      </div>


      <script>
      var swiperTexts = Array('내가 선택하는<br/>유일한 가족', '인생을 함께<br/>걸어 갈 동반자', '두 사람의 시작', '가족을 만드는 기업<br/><span>노블레스 수현</span>')
      var swiperCnt = 0;
      var swiper = new Swiper(".mainSwiper", {
        slidesPerView: 1,
        direction: "vertical",
        autoplay: true,
        loop: true,
        loopedSlides: 50,
        speed: 500,
        delay: 3000,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        on: {
          slideChange: function () {
            $('.video').removeClass('on');
            $('.video').eq(swiperCnt%4).addClass('on');
            $('.main-text-wrap').html(swiperTexts[swiperCnt%4]);
            swiperCnt++;
          }
        }
      });
      </script>
    </div>
    <!-- 2.회원수 -->
    <div class="section full2" id="page-2" data-font-color="#fff">
      <div class="t-flex t-flex-col t-h-full t-justify-center t-items-center f-main t-pb-[26px] sm:t-pb-[85px]">
        <div class="t-flex t-flex-col t-text-xl xl:t-text-4xl t-items-center t-justify-center t-gap-4 t-w-full t-h-80 xl:t-h-fit">
          <div class="xl:t-leading-[3rem] -t-tracking-[1px] t-text-white">
            노블레스 수현은<br/>
            안정적인 회원수와, 균형있는 성비로 <br/>
            <span class="t-font-bold">폭넓은 만남을 제공</span>합니다.
          </div>
          <a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=193" class="t-flex t-justify-center t-items-center t-bg-red t-rounded-lg t-py-2 t-px-3 t-w-80 t-text-base xl:t-text-xl" target="_blank"><span class="t-text-white">노블 유일 회원수, 성혼수 공개 ></span></a>
        </div>
        
        <section class="content2_artbox t-border-t t-border-b t-border-gray-500 t-pb-8 t-w-full t-mt-10">
          <div class="t-grid t-grid-cols-3">

            <div class="t-flex t-flex-col t-justify-center t-items-center t-gap-4">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/sec2_emoji5.png" alt="">
              <h5 class="t-text-base xl:t-text-xl t-text-white">회원수</h5>
              <h4 class="t-text-2xl xl:t-text-6xl t-font-bold t-text-cg page-2-1">13,168</h4>
              <p class="t-text-xs xl:t-text-sm t-text-white">2022.09.30 기준</p>
            </div>

            <div class="t-flex t-flex-col t-justify-center t-items-center t-gap-4">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/sec2_emoji6.png" alt="">
              <h5 class="t-text-base xl:t-text-xl t-text-white">남녀 회원 성비</h5>
              <h4 class="t-text-2xl xl:t-text-6xl t-font-bold t-text-cg"><span class="page-2-2-1">52</span>:<span class="page-2-2-2">48</span></h4>
              <p class="t-text-xs xl:t-text-sm t-text-white">2022.09.30 기준</p>
            </div>

            <div class="t-flex t-flex-col t-justify-center t-items-center t-gap-4">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/sec2_emoji3.png" alt="">
              <h5 class="t-text-base xl:t-text-xl t-text-white">교제 성혼수</h5>
              <h4 class="t-text-2xl xl:t-text-6xl t-font-bold t-text-cg page-2-3">4,911</h4>
              <p class="t-text-xs xl:t-text-sm t-text-white">2022.09.30 기준</p>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- 4.매칭후기 -->
    <div class="section full3" id="page-3" data-font-color="black">
      <div class="t-flex t-flex-col t-justify-center t-relativet-py-6 t-h-full">

        <div class="t-flex t-flex-col t-w-full t-relative t-h-full">
          <div class="t-flex t-flex-col t-items-center t-w-full t-h-full">
            <div class="t-relative t-flex t-flex-col xl:t-flex-row t-w-full t-text-black t-h-full t-items-center t-justify-start">


	    <div class="t-flex t-flex-col t-justify-center t-items-center t-w-full t-relative t-bg-[#f3f3f3] t-p-6 t-h-80">

                <h2 class="t-flex t-flex-col t-justify-start t-text-xl t-font-bold t-gap-2">
                  <span class="">나에게 맞는</span>
                  <span class="t-pb-2 sm:t-pb-6">노블레스 수현 <span>서비스</span></span>
                  
                  <span class="t-text-base sm:t-text-xl t-font-normal">직업,학력,소득 수준등의 경제적 조건과 함께 성향,가치관,취향 등을 종합적으로 고려한 맞춤 상대를 소개합니다.</span>
                  <a href="/nm/html/lovetest/joinCarge.php?counselGbn=34606" target="_blank" class="t-text-xl t-text-black t-underline t-underline-offset-8 t-mt-4 sm:t-mt-10">나의 가입비 확인하기 &gt;</a>
                </h2>
              </div>

              <div class="t-flex t-flex-col t-items-start t-justify-start t-w-full t-mt-[5px] t-text-white">
                <div class="t-flex t-flex-col t-gap-2 t-w-full page-3-tabs">
                  
                  <div class="page-3-tab t-cursor-pointer t-w-full t-flex t-justify-between t-items-center t-px-2 t-py-3 t-bg-c1">
                    <div class="t-flex t-flex-col t-justify-start t-items-start t-text-base t-font-bold t-border-r t-border-white t-pr-[10px] t-w-[90px] t-text-[18px]">
                      <span>노블레스</span>
                      <div>초혼</div>
                    </div>
                    <div class="t-flex-1 t-px-[10px] t-text-[16px]">미혼남녀를 위한 서비스</div>
                    <a href="https://www.isoohyun.co.kr/new/benefit/benefit04.php" target="_blank" class="t-animate-bounce t-mt-1 md:t-mt-10 t-bg-white t-p-2 t-w-10 t-h-10 t-ring-1 t-ring-slate-900/5 t-shadow-lg t-rounded-full t-flex t-items-center t-justify-center">
                      <svg class="t-w-6 t-h-6 t-text-[#a64041]" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                      </svg>
                    </a>
                  </div>

                  <div class="page-3-tab t-cursor-pointer t-w-full t-flex t-justify-between t-items-center t-px-2 t-py-3 t-bg-[#26163f]">
                    <div class="t-flex t-flex-col t-justify-start t-items-start t-text-base t-font-bold t-border-r t-border-white t-pr-[10px] t-w-[90px] t-text-[18px]">
                      <span>노블레스</span>
                      <div>재혼</div>
                    </div>
                    <div class="t-flex-1 t-px-[10px] t-text-[16px]">차별화된 재혼 서비스</div>
                    <a href="/nm/html/remarriage/main.php?counselGbn=24954" target="_blank" class="t-animate-bounce t-mt-1 md:t-mt-10 t-bg-white t-p-2 t-w-10 t-h-10 t-ring-1 t-ring-slate-900/5 t-shadow-lg t-rounded-full t-flex t-items-center t-justify-center">
                      <svg class="t-w-6 t-h-6 t-text-[#a64041]" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                      </svg>
                    </a>
                  </div>

                  <div class="page-3-tab t-cursor-pointer t-w-full t-flex t-justify-between t-items-center t-px-2 t-py-3 t-bg-[#541313]">
                    <div class="t-flex t-flex-col t-justify-start t-items-start t-text-base t-font-bold t-border-r t-border-white t-pr-[10px] t-w-[90px] t-text-[18px]">
                      <span>블랙</span>
                      <div>서비스</div>
                    </div>
                    <div class="t-flex-1 t-px-[10px] t-text-[16px]">대한민국 상위 1% 혼맥서비스</div>
                    <a href="/nm/html/service/black_service2.php?counselGbn=34649" target="_blank" class="t-animate-bounce t-mt-1 md:t-mt-10 t-bg-white t-p-2 t-w-10 t-h-10 t-ring-1 t-ring-slate-900/5 t-shadow-lg t-rounded-full t-flex t-items-center t-justify-center">
                      <svg class="t-w-6 t-h-6 t-text-[#a64041]" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                      </svg>
                    </a>
                  </div>

                  <div class="page-3-tab t-cursor-pointer t-w-full t-flex t-justify-between t-items-center t-px-2 t-py-3 t-bg-[#8a633a]">
                    <div class="t-flex t-flex-col t-justify-start t-items-start t-text-base t-font-bold t-border-r t-border-white t-pr-[10px] t-w-[90px] t-text-[18px]">
                      <span>노블레스</span>
                      <div>자녀결혼</div>
                    </div>
                    <div class="t-flex-1 t-px-[10px] t-text-[16px]">자녀결혼 전문컨설팅</div>
                    <a href="/nm/html/service/service09.php?counselGbn=34653" target="_blank" class="t-animate-bounce t-mt-1 md:t-mt-10 t-bg-white t-p-2 t-w-10 t-h-10 t-ring-1 t-ring-slate-900/5 t-shadow-lg t-rounded-full t-flex t-items-center t-justify-center">
                      <svg class="t-w-6 t-h-6 t-text-[#a64041]" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <script>
            $(document).ready(function() {
              $('.page-3-tab').click(function() {
                var idx = $('.page-3-tab').index(this);
                $('.page-3-tab').removeClass('on');
                $('.page-3-tab').removeClass('on-side');

                if(idx === 0) {
                  $('.page-3-tab').eq(0).addClass('on');
                  $('.page-3-tab').eq(1).addClass('on-side');
                } else if(idx === 1) {
                  $('.page-3-tab').eq(1).addClass('on');
                  $('.page-3-tab').eq(0).addClass('on-side');
                } else if(idx === 2) {
                  $('.page-3-tab').eq(2).addClass('on');
                  $('.page-3-tab').eq(3).addClass('on-side');
                } else if(idx === 3) {
                  $('.page-3-tab').eq(3).addClass('on');
                  $('.page-3-tab').eq(2).addClass('on-side');
                }
              });


              $('.page-3-tab').mouseenter(function () {
                var idx = $('.page-3-tab').index(this);
                $('.page-3-tab').removeClass('on');
                $('.page-3-tab').removeClass('on-side');

                if(idx === 0) {
                  $('.page-3-tab').eq(0).addClass('on');
                  $('.page-3-tab').eq(1).addClass('on-side');
                } else if(idx === 1) {
                  $('.page-3-tab').eq(1).addClass('on');
                  $('.page-3-tab').eq(0).addClass('on-side');
                } else if(idx === 2) {
                  $('.page-3-tab').eq(2).addClass('on');
                  $('.page-3-tab').eq(3).addClass('on-side');
                } else if(idx === 3) {
                  $('.page-3-tab').eq(3).addClass('on');
                  $('.page-3-tab').eq(2).addClass('on-side');
                }
              })
              .mouseleave(function () {
                $('.page-3-tab').removeClass('on');
                $('.page-3-tab').removeClass('on-side');
              });
            });
            </script>
            
          </div>
        </div>
      </div>
    </div>

    <!-- 5.성혼율 -->
    <div class="section full4 t-flex t-flex-col t-justify-center t-items-center" id="page-4"" data-font-color="#fff">
      <div class="t-flex t-flex-col t-justify-center t-items-center t-gap-10 f-main t-pb-[26px] t-px-2">
        <h5 class="t-text-base t-font-bold t-text-black t-bg-white t-rounded-lg t-py-3 t-px-6">
          <span class="t-text-red">수준이 다른 성혼율</span>을 확인하세요</div>
        </h5>
        <div class="t-flex t-flex-col t-justify-center">
          <h3 class="t-flex t-flex-col t-items-center t-text-4xl t-font-bold t-text-white">
            전문직 회원 성혼율 <span class="t-text-center t-text-cg page-4-1">84.4%</span>
          </h3>
        </div>
        <h4 class="t-text-white t-text-sm t-font-bold t-mt-5">전문직 기준 : 의사,판검사,변호사 외 11개 직종</h4>
        <a href="https://www.isoohyun.co.kr/nm/html/benefit/difflevel.php" target="_blank" class="t-text-white t-underline t-underline-offset-8 t-mt-10">자세히 보기 ></a>
      </div>
    </div>
    

    <!-- 5.결혼</span>할 수 있을까요? -->
    <div class="section full5" id="page-5" data-font-color="black">
      <div class="t-flex t-flex-col t-items-center t-justify-center t-relative t-w-full t-h-full">
        <div class="t-relative t-flex t-flex-col xl:t-flex-row t-w-full t-h-full t-text-white t-h-full">
          <div class="t-flex t-flex-col t-justify-center t-items-center t-w-full xl:t-w-4/12 t-relative t-bg-c3 t-h-80 xl:t-h-full">
            <h2 class="t-flex t-flex-col t-justify-start t-font-bold">
              <span class="t-pb-6 t-text-[25px]"><span class="t-text-cg">결혼</span>할 수 있을까요?</span>
              <span class="t-text-xl">노블레스 수현은 대답합니다.</span>
              <span class="t-text-[1.25rem] t-text-cg">"저 오늘도 청접장 받았어요."</span>
              <a href="/nm/html/matchingreview/about01.php" class="t-font-light t-text-sm t-underline t-underline-offset-8 t-mt-4 sm:t-mt-10">매칭후기 더보기 &gt;</a>
            </h2>
          </div>


          <div class="t-flex t-flex-col t-items-start sm:t-items-center t-justify-center xl:t-w-8/12 t-flex-1 f-main">
            <div class="t-w-full">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img1.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img2.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img3.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img4.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img5.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img6.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img7.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img8.png" alt=""></div>
                  <div class="swiper-slide"><img src="https://www.isoohyun.co.kr/new/image/main/content4_img9.png" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- 6.회원현황 -->
    <div class="section full6 t-flex t-flex-col" id="page-6" data-font-color="black">
      <div class="t-h-full t-flex t-flex-col t-justify-center t-items-center f-main t-pb-[26px] sm:t-pb-[85px]">
        <div class="t-flex t-flex-col t-justify-center t-items-center t-gap-4 t-w-full">
          <div class="t-text-black t-text-2xl">노블레스 수현 <span class="t-text-red t-font-black">회원 현황</span></div>
          <div class="t-text-center t-text-base t-text-white t-bg-c1 t-rounded-lg t-py-3 t-px-6">노블레스 결.정.사의 가치는<br/><span class="t-font-black">회원수준</span>으로 증명됩니다.</div>
          <div class="t-h-10 t-border t-border-c1 t-hidden md:t-block"></div>
          <p class="t-text-3xl">회원수 <span class="t-text-red t-font-black">13,168</span>명</p>
        </div>

        <div class="t-flex t-items-start t-justify-start t-text-white xl:t-px-20 t-mt-20">

          <div class="t-flex t-flex-col">
            <div class="t-flex t-items-end t-justify-center t-w-full page-6-tabs">
              <div class="t-flex t-flex-1 t-justify-center t-items-center t-text-base t-font-bold t-py-2 page-6-tab t-cursor-pointer" data-text="의사/약사|공무원/공기업" data-img="job01.jpg|job02.jpg">직업 비율</div>
              <div class="t-flex t-flex-1 t-justify-center t-items-center t-text-base t-font-bold t-py-2 page-6-tab t-cursor-pointer on" data-text="대학(4년제)졸업|대학(4년제)졸업" data-img="school01.jpg|school02.jpg">학력 비율</div>
              <div class="t-flex t-flex-1 t-justify-center t-items-center t-text-base t-font-bold t-py-2 page-6-tab t-cursor-pointer" data-text="34세~39세|27세~33세" data-img="age01.jpg|age02.jpg">나이 비율</div>
            </div>

            <div class="t-flex t-items-center t-justify-between t-w-full t-p-2 t-gap-2 t-border-b t-border-gray-600 t-bg-[#505050]">
              <div class="t-w-5/12 t-flex t-flex-col t-justify-center t-items-center t-flex-1 t-relative">
		<img src="/new/image/new_main/man.png" class="t-h-8 t-mb-1.5">
                <img src="https://www.isoohyun.co.kr/new/image/new_main/school01.jpg" class="page-6-tabs-img-1" />

                <div class="t-absolute t-bottom-0 t-w-full t-flex t-justify-center t-items-end t-gap-2 t-py-2 t-bg-[#00000096]">
                  <div class="t-text-[1rem] t-font-bold t-text-white page-6-tabs-content-1">대학(4년제)졸업</div>
                </div>
              </div>

              <div class="t-w-2/12 t-flex t-items-center t-justify-center">
                <div class="t-text-2xl t-text-white t-font-black"><span class="t-text-3xl t-text-cg">1</span>위</div>
              </div>

              <div class="t-w-5/12 t-flex t-flex-col t-justify-center t-items-center t-flex-1 t-relative">
		<img src="/new/image/new_main/woman.png" class="t-h-8 t-mb-1.5">
                <img src="https://www.isoohyun.co.kr/new/image/new_main/school02.jpg" class="page-6-tabs-img-2" />

                <div class="t-absolute t-bottom-0 t-w-full t-flex t-justify-center t-items-end t-gap-2 t-py-2 t-bg-[#00000096]">
                  <div class="t-text-[1rem] t-font-bold t-text-white page-6-tabs-content-2">대학(4년제)졸업</div>
                </div>
              </div>
              <style>
                .page-6-tab {
                  background-color: #505050;
                  height: 50px;
                }
                .page-6-tab.on {
                  background-color: #bc9367;
                  height: 55px;
                }
              </style>
              <script>
                $(document).ready(function() {
                  $('.page-6-tab').click(function() {
                    $('.page-6-tab').removeClass('on');
                    var idx = $('.page-6-tab').index(this) % 3;
                    
                    $('.page-6-tab').eq(idx).addClass('on');

                    var tab_texts = $(this).data('text').split('|');
                    var tab_imgs = $(this).data('img').split('|');
                    
                    $('.page-6-tabs-content-1').text(tab_texts[0]);
                    $('.page-6-tabs-content-2').text(tab_texts[1]);

                    $('.page-6-tabs-img-1').attr('src','https://www.isoohyun.co.kr/new/image/new_main/' + tab_imgs[0]);
                    $('.page-6-tabs-img-2').attr('src','https://www.isoohyun.co.kr/new/image/new_main/' + tab_imgs[1]);
                  });

                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 7.매니저 -->
    <div class="section full7" id="page-7" data-font-color="black">
      <div class="t-flex t-flex-col t-items-center t-justify-center f-main t-h-full">
        <div class="t-flex t-flex-col t-justify-center t-items-center t-gap-10">
          <h5 class="t-text-xl xl:t-text-6xl t-text-black">결혼 전문가에게 <span class="t-font-bold">결혼컨설팅</span> 받아보세요</h5>
          <a href="/nm/html/lovetest/marry_partner.php?counselGbn=34605" class="t-flex t-justify-center t-items-center t-bg-red t-rounded-lg t-py-2 t-px-6 t-w-fit t-text-base xl:t-text-xl t-text-white" target="_blank">
            내게 맞는 커플매니저 찾기 >
          </a>
        </div>

        <div class="t-w-9/12 t-mt-10 xl:t-mt-20">
          <div class="swiper mySwiper2" style="padding: 0 !important;">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="https://www.isoohyun.co.kr/new/image/main/manager01.png" alt=""/>
              </div>
              <div class="swiper-slide">
                <img src="https://www.isoohyun.co.kr/new/image/main/manager02.png" alt=""/>
              </div>
              <div class="swiper-slide">
                <img src="https://www.isoohyun.co.kr/new/image/main/manager03.png" alt=""/>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 8.맞선장소 -->
    <div class="section full8" id="page-8" data-font-color="#fff">
      <div class="t-flex t-flex-col t-justify-center t-items-center t-relative t-h-full">
        <div class="content8_header t-w-full xl:t-w-3/12 t-text-3xl t-flex t-flex-col t-items-center t-justify-center">
          <img src="https://www.isoohyun.co.kr/new/image/new_main/sec8_emoji2.png" alt="" class="t-w-[80px] xl:t-w-[119px]">
          <h5>
            업계유일
          </h5>
          <div class="t-flex t-flex-col t-items-center">
            <h5 class="t-text-2xl t-font-bold">5성급 호텔 맞선</h5>
            <a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=191" target="_blank" class="t-text-base t-text-white t-underline t-underline-offset-8 t-mt-10">노블레스 성혼 서비스 &gt;</a>
          </div>
        </div>
        <div class="t-w-full t-mt-10">
          <div class="artground t-grid t-grid-cols-3 t-gap-1 xl:t-gap-5">
            <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel01.png" class="t-w-full" alt="">
              <p class="t-text-xs t-text-white">노보텔 앰배서더 강남</p>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel02.png" class="t-w-full" alt="">
                <p class="t-text-xs t-text-white">포포인츠 쉐라톤 강남</p>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel03.png" class="t-w-full" alt="">
                <p class="t-text-xs t-text-white">여의도 메리어트</p>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel04.png" class="t-w-full" alt="">
                <p class="t-text-xs t-text-white">더 플라자 호텔</p>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel05.png" class="t-w-full">
                <a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=191" target="_blank"></a>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel06.png" class="t-w-full">
                <p class="t-text-xs t-text-white">대구 메리어트</p>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel07.png" class="t-w-full">
                <p class="t-text-xs t-text-white">오크우드 코엑스</p>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel08.png" class="t-w-full">
                <p class="t-text-xs t-text-white">동대문 JW메리어트</p>
            </div>
	    <div class="article t-object-cover t-flex t-flex-col t-justify-center t-items-center">
              <img src="https://www.isoohyun.co.kr/new/image/new_main/hotel09.png" class="t-w-full">
                <p class="t-text-xs t-text-white">부산 롯데호텔</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 9.안심서비스 -->
    <div class="section full9" id="page-9" data-font-color="black">
      <div class="t-flex t-flex-col t-justify-center t-items-center t-h-full f-main">
        <div class="t-flex t-flex-col t-justify-center t-items-center t-gap-10">
          <h5 class="t-text-3xl t-text-black"><span class="t-font-bold">믿을 수 있는</span> 결혼정보회사</h5>
          <a href="/nm/html/introduce/notice-view.php?idx=94" class="t-flex t-justify-center t-items-center t-bg-red t-rounded-lg t-py-2 t-px-3 t-w-fit t-text-base xl:t-text-xl t-text-white" target="_blank">
            <img src="https://www.isoohyun.co.kr/new/image/new_main/sec9_emoji2.png" class="t-w-[40px]" alt="">
            한번 더 확인하세요! 고객 안심 서비스
          </a>
        </div>
          
        <div class="content2_artbox t-mt-5 t-border-t t-border-b t-border-gray-300 t-w-full">
          <div class="t-flex t-flex-col t-w-full t-justify-between t-items-center t-my-14" style="height:740px";>
            
            <div class="t-flex t-flex-col t-items-center">
              <img class="t-w-auto" src="/new/image/new_main/safe_01.png">
              <div class="t-text-xl t-text-black t-py-2">공정거래<br>표준약관 적용</div>
              <div class="t-text-slate-800 t-text-base">소비자 권익보호를 위해<br>표준약관 100% 준수</div>
            </div>

            <div class="t-flex t-flex-col t-items-center">
              <img class="t-w-auto" src="/new/image/new_main/safe_02.png">
              <div class="t-text-xl t-text-black t-py-4">철저한 신원인증<br>신원정보 비밀보장</div>
              <div class="t-text-slate-800 t-text-base">제 3자 위탁없이 100% 본사<br>신원인증팀이 인증 진행</div>
            </div>

            <div class="t-flex t-flex-col t-items-center">
              <img class="t-w-auto" src="/new/image/new_main/safe_03.png">
              <div class="t-text-xl t-text-black t-py-4">커플매칭, 전문직배상<br>책임보험 가입</div>
              <div class="t-text-slate-800 t-text-base">신원인증 프로세스 강화<br>피해보상 안전시스템 구축</div>
            </div>

          </div>
        </div>
      </div>
    </div>

<!-- 10. 이벤트 -->

    <div class="section full10 confetti" id="page-10" data-font-color="black">
  
      <div class="t-flex t-flex-col t-items-center t-justify-center t-relative t-h-full f-main t-pb-[26px] sm:t-pb-[85px]">

        <div class="t-flex t-flex-col t-justify-center t-items-center t-w-full t-relative">
          <div class="t-flex t-flex-col t-items-center t-justify-between t-w-full">
            <div class="t-relative t-flex t-flex-col t-items-center t-justify-center t-text-black">
              <h2 class="sm:t-text-3xl t-text-xl t-py-4 t-font-bold">매월 달라지는 노블레스 <span class="t-text-cg">수현</span>의</h2>
              <img src="https://www.isoohyun.co.kr/new/image/new_main/sub_title.png" alt="" class="t-w-8/12 sm:t-w-[488px]">
            </div>

            <div class="t-w-full t-flex t-flex-col t-justify-between t-gap-10 t-mt-10">

              <div style="position:relative;z-index:99;display:none;">
                <button id="startConfetti">Start</button>
                <button id="stopConfetti">Stop</button>
                <button id="restartConfetti">Restart</button>
              </div>
            
              <div class="swiper mySwiper3">
                <div class="swiper-wrapper">
                                    <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2098'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220930113247.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">[여성 이벤트] 수현에 물들다</div>
                          <div class="t-text-sm">2022-11-30까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2106'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20221011132634.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">11월 문화이벤트 초대 : 영...</div>
                          <div class="t-text-sm">2022-11-16까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2109'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20221014104043.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">11월 쿠키데이 이벤트</div>
                          <div class="t-text-sm">2022-11-14까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2110'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20221014115207.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">빼빼로데이 이벤트</div>
                          <div class="t-text-sm">2022-11-11까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2102'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220930175333.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">10월 정회원 이벤트</div>
                          <div class="t-text-sm">2022-10-31까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2100'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220930131939.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">10월 가입비 이벤트</div>
                          <div class="t-text-sm">2022-10-31까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2082'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220901114248.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">[부산지사] 상담신청 이벤트</div>
                          <div class="t-text-sm">2022-10-31까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2081'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220901112051.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">[대구지사] 신규 상담 이벤트</div>
                          <div class="t-text-sm">2022-10-31까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2078'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220830165446.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">[대전지사]September with ...</div>
                          <div class="t-text-sm">2022-10-31까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=1379'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220930111149.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">2022년 10월 스페셜 소개팅...</div>
                          <div class="t-text-sm">2022-10-31까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=1292'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220920100150.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">스페셜 재혼 맞선 이벤트</div>
                          <div class="t-text-sm">2022-10-24까지 </div>
                        </div>
                      </div>
                    </div>
                                      <div class="swiper-slide" onclick="location.href='/new/meet/meet08.php?searchKey=&idx=2093'">
                      <div class="t-w-full t-h-full t-flex t-flex-col t-rounded">
                        <img src="/uploads/contents_image/20220920140641.jpg" class="t-rounded-t" />
                        <div class="t-w-full t-flex t-flex-col t-justify-center t-items-center t-py-4 t-bg-[#ffadb3] t-text-white t-gap-2">
                          <div class="t-text-sm t-font-bold">[사진 공모전] 우리들의 행...</div>
                          <div class="t-text-sm">2022-10-20까지 </div>
                        </div>
                      </div>
                    </div>
                                    
                </div>
                <div class="swiper-pagination"></div>
              </div>
              
              <div class="t-flex md:t-flex-row t-flex-col t-w-full t-justify-center t-gap-2 t-z-[1]">
                <div class="t-flex t-items-center t-justify-center t-bg-[#ffadb3] t-gap-2 t-px-4 t-pb-4">
                    <a href="https://www.isoohyun.co.kr/new/meet/meet04.php" target="_blank" class="t--mt-[20px]">
                      <img src="https://www.isoohyun.co.kr/nm/static/images/new_main/section10_img01.png">
                    </a>
                    <a href="/nm/html/meet/private-gallery.php" target="_blank" class="t--mt-[20px]">
                      <img src="https://www.isoohyun.co.kr/nm/static/images/new_main/section10_img02.png">
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- 11.러브테스트 -->
    <div class="section full11" id="page-11" data-font-color="black">
      <canvas id="page-11-hart" style="position: absolute;width: auto;height: auto;"></canvas>
      <div class="t-flex t-flex-col t-justify-center t-items-center t-relative t-h-full">

        <div class="t-flex t-flex-col t-w-full t-relative">
          <div class="t-flex t-flex-col t-items-center t-w-full">
            <div class="t-relative t-flex t-flex-col t-w-full t-text-black">
              <div class="t-flex t-flex-col t-justify-center t-items-center">
                <h2 class="t-text-3xl t-font-black t-text-black">LOVE TEST</h2>
                <h3 class="t-flex t-justify-center t-items-center t-text-sm t-text-gray-500 t-px-10">
                  <img src="https://www.isoohyun.co.kr/new/image/new_main/sec11_emoji.png" class="t-inline-block t-align-middle t-w-8 t-h-8">
                  <div class="t-align-middle t-text-center t-ml-2">
                    간단한 테스트를 통해 나의 이상형을 찾고<br/><span class="t-font-bold">추천프로필</span>을 받아보세요!
                  </div>
                </h3>
                <a href="/nm/html/lovetest/lovetest_main.php" target="_blank" class="t-text-gray-500 t-underline t-underline-offset-8 t-mt-2">더보기 &gt;</a>
              </div>
              <div class="t-flex t-flex-col t-items-center t-justify-center t-mt-20 md:t-px-[100px]">
                <div class="swiper mySwiper4">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a href="/nm/html/lovetest/ideal_find_test.php?counselGbn=34624">
                        <img class="img mo_none" src="https://www.isoohyun.co.kr/new/image/new_main/img_sect_collect1.png" alt="">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="/nm/html/lovetest/first_face_test.php?counselGbn=34625">
                        <img class="img mo_none" src="https://www.isoohyun.co.kr/new/image/new_main/img_sect_collect2.png" alt="">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="/nm/html/lovetest/love_test2.php?counselGbn=34626">
                        <img class="img mo_none" src="https://www.isoohyun.co.kr/new/image/new_main/img_sect_collect3.png" alt="">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="/nm/html/lovetest/knowledge.php?counselGbn=34627">
                        <img class="img mo_none" src="https://www.isoohyun.co.kr/new/image/new_main/img_sect_collect4.png" alt="">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="/nm/html/lovetest/marry_step.php?counselGbn=34628">
                        <img class="img mo_none" src="https://www.isoohyun.co.kr/new/image/new_main/img_sect_collect5.png" alt="">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="/nm/html/lovetest/marry_possibility.php?counselGbn=34629">
                        <img class="img mo_none" src="https://www.isoohyun.co.kr/new/image/new_main/img_sect_collect6.png" alt="">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="/nm/html/lovetest/hope_ideal_test.php?counselGbn=34630">
                        <img class="img mo_none" src="https://www.isoohyun.co.kr/new/image/new_main/img_sect_collect7.png" alt="">
                      </a>
                    </div>

                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    <script>
    var canvas = document.getElementById("page-11-hart");
    var ctx = canvas.getContext("2d");

    var ww = $(window).innerWidth();
    var wh = $(window).innerHeight();

    var hearts = [];
    function init(){
      requestAnimationFrame(render);
      
      canvas.width = ww;
      canvas.height = wh;
      
      for(var i=0;i<100;i++){
        hearts.push(new Heart());
      }
    }

    function Heart(){
      this.x = Math.random()*ww;
      this.y = Math.random()*wh;
      this.opacity = (Math.random()*0.2)+0.5;
      this.vel = {
        x:(Math.random()-0.2)*4,
        y:(Math.random()-0.2)*4
      };
      this.targetScale = (Math.random()*0.15)+0.02;
      this.scale = this.targetScale * Math.random();
    }
    Heart.prototype.update = function(){
      this.x += this.vel.x;
      this.y += this.vel.y;
      
      this.scale += (this.targetScale -this.scale)*0.01;
      if(this.x - this.width > ww || this.x+this.width < 0){
        this.scale = 0;
        this.x = Math.random()*ww;
      }
      if(this.y - this.height > wh || this.y+this.height < 0){
        this.scale = 0;
        this.y = Math.random()*wh;
      }
      this.width  = 473.8*this.scale;
      this.height  = 408.6*this.scale;
    }
    Heart.prototype.draw = function(){
      ctx.globalAlpha = this.opacity;
      ctx.drawImage(heartImage, this.x-this.width*0.5, this.y-this.height*0.5, this.width, this.height);
    }

    function render(){
      ctx.clearRect(0,0,ww, wh);
      // ctx.globalAlpha = 1;
      // ctx.fillStyle = "rgba(255,255,255,0.3)";
      // ctx.fillRect(0,0,ww, wh);
      for(var i=0;i<15;i++){
        hearts[i].update();
        hearts[i].draw();
      }
      requestAnimationFrame(render);
    }

    var heartImage = new Image();
    heartImage.onload = init;
    heartImage.src = "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NzMuOHB4IiBoZWlnaHQ9IjQwOC42cHgiIHZpZXdCb3g9IjAgMCA0NzMuOCA0MDguNiI+PHBhdGggZmlsbD0iI2ZiOWZiNCIgZD0iTTQwNC42LDE2LjZDMzg1LjQsNi4xLDM2My41LDAsMzQwLDBjLTQxLjUsMC03OC41LDE4LjktMTAzLDQ4LjVDMjEyLjMsMTguOSwxNzUuMywwLDEzMy44LDAgYy0yMy4zLDAtNDUuMyw2LjEtNjQuNSwxNi42QzI3LjksMzkuNSwwLDgzLjQsMCwxMzMuOWMwLDE0LjQsMi40LDI4LjMsNi42LDQxLjJDMjkuNiwyNzguNCwyMzcsNDA4LjYsMjM3LDQwOC42IHMyMDcuMi0xMzAuMiwyMzAuMi0yMzMuNWM0LjMtMTIuOSw2LjYtMjYuOCw2LjYtNDEuMkM0NzMuOCw4My40LDQ0NS45LDM5LjYsNDA0LjYsMTYuNnoiLz48L3N2Zz4=";

    window.addEventListener("resize", function(){
      ww =  $(window).innerWidth();
      wh =  $(window).innerHeight();
    })
    </script>
    </div>

    <!-- 유튜브 -->
    <div class="section full12 t-relative" id="page-12" data-font-color="#fff">
      <style>
      video {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 0;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }
      </style>
      <video id="page-12-video" poster="" loop autoplay muted data-keepplaying playsinline name="media">
        <source src="https://www.isoohyun.co.kr/new/image/new_main/bg_2.mp4" type="video/mp4"><source/>
      </video>

      <script>
        const video2 = document.getElementById('page-12-video');
        video2.addEventListener('suspend', () => {
          // We're in low-power mode, show fallback UI
          // 저전력 모드일때 진입했을때 가이드 UI를 보여줍니다. 
        });
        video2.addEventListener('play', () => {
          // Remove fallback UI if user plays video manually
          // 유저가 수동으로 비디오를 Play할때는 가이드 UI를 제거해줍니다.
        });
      </script>

      <div class="t-absolute t-w-screen t-h-full text-base t-top-0 t-bg-black t-opacity-60"></div>
      <div class="t-absolute t-w-screen md:t-h-full text-base t-bottom-0 t-pb-[30px] f-main">
        <div class="t-w-full t-h-full t-text-white t-flex t-flex-col t-justify-between t-opacity-80">
          <div class="t-flex t-flex-col t-px-1 t-py-1 t-text-white">
            <h5 class="t-text-xl md:t-text-4xl t-font-black">노블레스 수현<br></h5>
            <h5 class="t-text-3xl md:t-text-6xl t-font-black t-text-[#ed2024]">YOUTUBE</h5>
            <div class="t-text-base t-font-bold t-mt-6">수현의 다양하고 재미있는 영상컨텐츠를 즐겨주세요</div>
            <div class="t-grid t-grid-cols-2 t-gap-2 t-mt-4">
              <a href="https://www.isoohyun.co.kr/new/about/youtube.php" class="t-flex t-justify-center t-items-center t-w-full t-bg-black t-text-white" target="_blank">
                더보기<img src="https://www.isoohyun.co.kr/new/image/new_main/youtube_plus2.png" alt="" />
              </a>
              <a href="https://www.youtube.com/channel/UCvK-WgMVoDdQY9ea2pO4L5w" class="t-flex t-justify-center t-items-center t-bg-[#ed2024] t-w-full t-text-white" target="_blank">
                구독하기<img style="vertical-align: middle;" src="https://www.isoohyun.co.kr/new/image/new_main/youtube_bell2.png" alt="" />
              </a>
            </div>
          </div>

          <div class="t-mt-2">
            <div class="swiper mySwiper5">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LEPFXbQ6Fso?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
                <div class="swiper-slide">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7zZnHXAE73Y?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
                <div class="swiper-slide">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qeBmJiqmOZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
                <div class="swiper-slide">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XpnQal1u8gs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
              </div>
              
		<div class="swiper-pagination"></div>
            </div>

	    
          </div>
	</div>
      </div>
    </div>
    <!-- 13.수상경력 -->
    <div class="section full13" id="page-13" data-font-color="black">
      <div class="t-flex t-flex-col t-items-center t-justify-center t-relative t-w-full t-h-full">
        <div class="t-relative t-flex t-flex-col xl:t-flex-row t-w-full t-h-full t-text-white t-h-full">
          <div class="t-flex t-flex-col t-justify-center t-items-center t-w-full xl:t-w-4/12 t-relative t-bg-c1 t-h-80 xl:t-h-full">
            <h2 class="t-flex t-flex-col t-justify-start sm:t-text-5xl t-text-xl t-font-bold">
              <span class="t-pb-6 t-text-[25px]"><span class="t-text-cg">수상경력</span></span>
              <span class="t-text-xl">노블레스 수현은 국가와 신뢰</span>
              <span class="t-text-xl">받는 주요 평가 매체에서<br/>인정 받고 있습니다.</span>
              <a href="/nm/html/introduce/notice-view.php?idx=192" class="t-font-light t-text-sm t-underline t-underline-offset-8 t-mt-4 sm:t-mt-10">수상경력더보기 ></a>
            </h2>
          </div>

          <div class="t-flex t-flex-col t-items-start sm:t-items-center t-justify-center xl:t-w-8/12 t-flex-1 f-main">
            <div class="t-w-full">
              <div class="swiper mySwiper6">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=154"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards1.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=168"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards2.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=180"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards3.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=195"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards4.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=175"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards5.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=164"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards6.png" /></a></div>
                  <div class="swiper-slide"><a href="nm/html/introduce/notice-view.php?idx=179"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards7.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=177"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards8.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=169"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards9.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=180"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards10.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=190"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards11.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/news-view.php?idx=362"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards12.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=104"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards13.png" /></a></div>
                  <div class="swiper-slide"><a href="/nm/html/introduce/notice-view.php?idx=195"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/awards14.png" /></a></div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- 14.제휴사 -->
    <div class="section full14" id="page-14" data-font-color="black">
      <div class="t-flex t-flex-col t-justify-center t-items-center t-relative t-h-full f-main">
        <div class="t-flex t-flex-col t-justify-center t-items-center">
          <h2 class="sm:t-text-6xl t-text-xl t-pb-4 t-font-bold">수현 제휴 네트워크</h2>
          <h3 class="sm:t-text-xl t-text-sm t-text-gray-500 t-px-10">
            <span class="t-align-middle t-ml-2">
              제휴사 수 2,970개사 ㅣ 제휴 회원수 175만명
            </span>
          </h3>
        </div>


        <div class="t-flex t-flex-col t-items-center t-justify-center t-w-10/12 xl:t-w-9/12 t-mt-10">
          <div class="t-w-full">
            <div class="swiper mySwiper7" style="padding: 0 !important">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="/nm/html/benefit/com_service.php"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/identification01.png" /></a></div>
                <div class="swiper-slide"><a href="/nm/html/benefit/com_service.php"><img style="" src="https://www.isoohyun.co.kr/new/image/new_main/identification02.png" /></a></div>
              </div>
            </div>
          </div>
          <img style="" src="https://www.isoohyun.co.kr/new/image/new_main/identification03.png" class="t-mt-5" />

          <div class="t-text-center t-mt-4 t-leading-[1.15rem] t-text-base t-font-[400]">
            <div>
              정부부처, 공공기관과 국내주요<br/>대기업 및 중견기업에 결혼정보서비스를<br/>
              제공하고 있습니다.
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- 15.지사 -->
    <div class="section full15" id="page-15" data-font-color="black">
      <div class="t-flex t-flex-col t-justify-center t-items-center t-h-full f-main">
        <div class="t-flex t-flex-col t-justify-center t-items-center t-w-full t-relative">
          <h5 class="t-text-xl t-py-4 t-font-bold">노블레스 수현 지사</h5>
          <a href="https://www.isoohyun.co.kr/new/fate/fate18.php" class="t-text-center t-text-base t-text-white t-bg-red t-rounded-lg t-py-3 t-px-6" target="_blank">
            상담은 가까운 곳에서<br/>만남은 전국 회원 대상으로 진행됩니다!
          </a>
        </div>
          
        <div class="t-w-full t-h-[405px] t-mt-10">
          <div class="t-flex t-flex-col t-w-full t-h-full">
            <div class="t-flext t-flex-col t-justify-center t-items-center t-w-full t-h-[50px]">
              <div class="t-flex t-flex-col t-items-start t-justify-between t-w-full t-h-full">
                <div class="t-w-full t-flex t-items-end t-justify-between">
                  <div class="t-flex t-flex-1 t-justify-center t-items-center t-text-sm t-py-2 t-text-white t-cursor-pointer page-15-tab on" data-img="seoul_building" data-map="https://www.isoohyun.co.kr/new/about/map3.php">서울본사</div>
                  <div class="t-flex t-flex-1 t-justify-center t-items-center t-text-sm t-border-l t-border-gray-600 t-py-22 t-text-white t-cursor-pointer page-15-tab" data-img="busan_building" data-map="https://www.isoohyun.co.kr/new/about/map8.php">부산지사</div>
                  <div class="t-flex t-flex-1 t-justify-center t-items-center t-text-sm t-border-l t-border-gray-600 t-py-22 t-text-white t-cursor-pointer page-15-tab" data-img="daegu_building" data-map="https://www.isoohyun.co.kr/new/about/map9.php">대구지사</div>
                  <div class="t-flex t-flex-1 t-justify-center t-items-center t-text-sm t-border-l t-border-gray-600 t-py-22 t-text-white t-cursor-pointer page-15-tab" data-img="daejeon_building" data-map="https://www.isoohyun.co.kr/new/about/map10.php">대전지사</div>
                </div>
              </div>
            </div>

            <div class="t-flex-1 t-grow t-flex t-flex-col t-relative t-justify-center t-items-center t-border-2 t-border-gray-300 t-h-[370px]">
              <iframe id="jisa_map" width="100%" height="100%" src="https://www.isoohyun.co.kr/new/about/map3.php" border="0" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
        </div>
      </div>
      <style>
        .page-15-tab {
          background-color: #505050;
          height: 50px;
        }
        .page-15-tab.on {
          background-color: #bc9367;
          height: 55px;
        }
      </style>
      <script>
        $(document).ready(function() {
          $('#jisa_map').attr('src', 'https://www.isoohyun.co.kr/new/about/map3.php');
          $('.page-15-tab').click(function() {
            $('.page-15-tab').removeClass('on');

            $(this).addClass('on');
            
            var tab_img = $(this).data('img');
            $('.page-15-img').attr('src','/new/image/new_main/' + tab_img + ".jpg");

            var tap_map = $(this).data('map');
            $('#jisa_map').attr('src', tap_map);
          });
        });
      </script>
    </div>
    <!-- 16.footer -->
    <div class="section full16" id="page-16" style="background-color:#232323;" data-font-color="#fff">
      <div class="t-flex t-flex-col t-items-center t-justify-center f-main t-w-full sm:t-w-11/12">

        <div class="t-flex t-flex-col md:t-flex-row t-items-center t-justify-between t-w-full">


          <div class="t-flex t-w-full t-justify-between">
            <a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=192" class="t-flex t-flex-1"><img src="https://www.isoohyun.co.kr/nm/static/images/common/footer/img-footer01.gif" alt=""></a>
            <a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=192" class="t-flex t-flex-1"><img src="https://www.isoohyun.co.kr/nm/static/images/common/footer/img-footer02.gif" alt=""></a>
            <a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=192" class="t-flex t-flex-1"><img src="https://www.isoohyun.co.kr/nm/static/images/common/footer/img-footer03.gif" alt=""></a>
            <a href="https://www.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=192" class="t-flex t-flex-1"><img src="https://www.isoohyun.co.kr/nm/static/images/common/footer/img-footer04.gif" alt=""></a>
          </div>

          <div class="t-flex t-py-10 t-justify-center t-items-center">
            <img src="https://www.isoohyun.co.kr/new/image/footer/logo_gray.png" class="t-w-[100px]" />
          </div>

          <div class="t-flex t-flex-col items-center t-text-white t-text-xs sm:t-text-sm t-py-4 t-gap-4">
            <div class="t-flex t-items-center t-justify-center t-gap-2 sm:t-gap-2">
              <a href="https://www.isoohyun.co.kr/new/com/com07.php" class="none">이용약관</a>
              <a href="https://www.isoohyun.co.kr/new/com/com06.php" style="color:#fddd54;">개인정보취급방침</a>
              <a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=106">손해배상청구절차</a>
              <a href="https://www.isoohyun.co.kr/new/about/about12.php">찾아오시는길</a>
              <a href="https://www.isoohyun.co.kr/new/com/com08.php">사이트맵</a>
            </div>
            <div class="t-flex t-items-center t-justify-center t-gap-2">
              <a href="https://blog.naver.com/isoohyun4000" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns01.jpg" /></a>
              <a href="https://www.facebook.com/isoohyun4000" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns02.jpg" /></a>
              <a href="http://goto.kakao.com/dm9ljrcu" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns03.jpg" /></a>
              <a href="https://www.youtube.com/channel/UCvK-WgMVoDdQY9ea2pO4L5w" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns04.jpg" /></a>
              <a href="https://www.instagram.com/noblesse_soohyun/" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns05.png" /></a>
              <a href="https://post.naver.com/my.nhn?memberNo=2032633" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns07.png" /></a>
              <a href="https://twitter.com/isoohyun1" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns08.png" /></a>
              <a href="https://tv.naver.com/soohyun" target="_blank" class="sns"><img src="https://www.isoohyun.co.kr/new/image/sns09.png" /></a>
              <img src="https://www.isoohyun.co.kr/new/image/comodo.png" />
            </div>
          </div>
        </div>



        
        <div class="t-flex t-flex-col t-items-center t-justify-center t-w-full t-border-t t-border-[#434343]">
          <div class="t-grid t-grid-cols-2 md:t-flex md:t-justify-between t-items-center t-w-full t-text-gray-500 t-text-base xl:t-text-2xl t-font-bold t-py-2 sm:t-py-10 t-text-center">
            <div class="t-py-2 sm:t-px-2">
              <span>서울본사</span>
              <span class="t-text-[#fddd54]">02-540-4000</span>
            </div>
            <div class="t-py-2 sm:t-px-2">
              <span>부산본부</span>
              <span class="t-text-[#fddd54]">051-711-9110</span>
            </div>
            <div class="t-py-2 sm:t-px-2">
              <span>대구본부</span>
              <span class="t-text-[#fddd54]">053-719-0460</span>
              </div>
            <div class="t-py-2 sm:t-px-2">
              <span>대전본부</span>
              <span class="t-text-[#fddd54]">042-710-3950</span>
            </div>
          </div>

          <div class="t-flex t-items-center t-justify-center t-w-11/12 sm:t-w-full">
              <div class="t-flex t-row">
                    <a href="/nm/html/introduce/notice-view.php?idx=177"><img src="/nm/image/footer01.png"></a>
                    <a href="/nm/html/introduce/notice-view.php?idx=186"><img src="/nm/image/footer02.png"></a>
                    <a href="/nm/html/introduce/notice-view.php?idx=149"><img src="/nm/image/footer03.png"></a>
                    <a href="/nm/html/introduce/notice-view.php?idx=94"><img src="/nm/image/footer04.png"></a>
                    <a href="/nm/html/introduce/notice-view.php?idx=189"><img src="/nm/image/footer05.png"></a>
              </div>
          </div>


          <div class="t-flex xl:t-flex-row t-flex-col t-justify-center t-items-center t-w-full t-px-2 t-mt-10">
            <div class="t-text-[#a8a8a8] t-text-xs t-text-sm">수현(주) 대표자 : 경증수 | 결혼중개업 : 강남090028 사업자등록번호 : 211-88-34578 | 대표번호 : <b>02-540-4000</b> FAX : 559-2099 | 개인정보 관리 책임자 : 경광현</div>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>

</body>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.css" />
<script src="https://cdn.jsdelivr.net/npm/fullpage.js@2.9.7/dist/jquery.fullpage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.extensions.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/scrolloverflow.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>

<!-- <script src="./js/jquery.confetti.js"></script> -->

    
<!-- Initialize Swiper -->
<script>
  var swiper1 = new Swiper(".mySwiper", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    loopedSlides: 50,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      640: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      // 화면의 넓이가 640px 이상일 때
      1280: {
        slidesPerView: 3,
        spaceBetween: 10
      }
    },
    // centeredSlides: true,
    loop: true,
    autoplay: true,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper3 = new Swiper(".mySwiper3", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    loopedSlides: 50,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper4 = new Swiper(".mySwiper4", {
    slidesPerView: 2,
    breakpoints: {
      640: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      // 화면의 넓이가 640px 이상일 때
      1280: {
        slidesPerView: 5,
        spaceBetween: 10
      }
    },
    centeredSlides: true,
    loop: true,
    loopedSlides: 50,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var mySwiper5 = new Swiper(".mySwiper5", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    loopedSlides: 50,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper6 = new Swiper(".mySwiper6", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    loopedSlides: 50,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var mySwiper7 = new Swiper(".mySwiper7", {
    slidesPerView: 1,
    spaceBetween: 0,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 0
      }
    },
    loop: true,
    loopedSlides: 50,
    autoplay: true,
    speed: 300,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>

<script>
  $(function () {
    var $firstMenu = $('header '),
      $header = $('header'),
      $nav = $('#header_section'),
      $menu = $('ul.clearfix div.menu, ul.clearfix span.menu2'),
      $sub_menu = $('ul.sub_menu li, ul.sub_menu2 li');

    $firstMenu.mouseenter(function () {
      $nav.addClass('active');
      // $nav.css('height', '560px');
    })
    .mouseleave(function () {
      $nav.removeClass('active');
      // $nav.css('height', '90px');
    });
    
    $sub_menu.hover(function(){
      $(this).parent().parent().find('.menu').toggleClass('on')
      $(this).parent().parent().find('.sub_menu').toggleClass('on')
      $(this).parent().parent().find('.sub_menu2').toggleClass('on')
    });

    $menu.hover(function(){
      $(this).parent().find('.sub_menu').toggleClass('on')
      $(this).parent().find('.sub_menu2').toggleClass('on')
    });

  });

  $(document).ready(function() {
    jQuery(document).ready(function() {

      $('#body').css('opacity', 1);

    });
    
        //methods
  });
</script>




</html>