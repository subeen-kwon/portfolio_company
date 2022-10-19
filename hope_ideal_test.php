<!DOCTYPE html>
<html lang="ko">

<head>
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
<meta property="og:image" content="http://www.isoohyun.co.kr/new/image/main_image20211231.png">

<link href="/images/64.ico" rel="shortcut icon" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="/new/css/common.css" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="/new/selectbox/jquery.selectBox.css"/>
<!-- Dable 스크립트 시작 / 문의 support@dable.io -->
<script>
(function(d,a,b,l,e,_) {
d[b]=d[b]||function(){(d[b].q=d[b].q||[]).push(arguments)};e=a.createElement(l);
e.async=1;e.charset='utf-8';e.src='//static.dable.io/dist/plugin.min.js';
_=a.getElementsByTagName(l)[0];_.parentNode.insertBefore(e,_);

})(window,document,'dable','script');
dable('setService', 'isoohyun.co.kr');
dable('sendLog');
</script>
<!-- Dable 스크립트 종료 / 문의 support@dable.io -->

<!--애드제노 구글 스크립트 2018.04.12 도미나 팀장 요청건 -->
<!-- 구글검색 2021.05.25 AW-385481390 kara추가  -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117437978-1"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-385481390"></script> 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117437978-1');
  gtag('config', 'AW-385481390');
</script>
<!--애드제노 구글 스크립트 2018.04.12 도미나 팀장 요청건 끝 -->

<script type="text/javascript" src="/new/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/new/js/jquery-ui.js"></script>
<script type="text/javascript" src="/new/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/new/js/jquery.selectBox.min.js"></script>
<script type="text/javascript"  src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript"  src="/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript" src="/new/js/jquery.extends.js"></script>
<script type="text/javascript" src="/new/js/front.js"></script>
<script type="text/javascript" src="/new/js/frontPaging.js"></script>
  <!-- 모바일에서 웹화면 들어올 때 모바일 페이지로 리다이렉트 -->
  <script>
    if ($(window).width() < 780) {
      $.getScript('js/nbw-parallax.js');
    }
    if (window.innerWidth < 780) {
      //Your Code
      window.location.href = 'https://www.isoohyun.co.kr/nm/html/lovetest/hope_ideal_test.php?counselGbn=29812&mctkey=';
    }
  </script>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" type="text/css" href="/new/css/sidemenu.css">
  <!-- <link rel="stylesheet" href="lovetest_common.css?"> -->

  <!-- loading font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">

  <!-- // progressbar animate bootstrap 20220304 -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- // progressbar animate bootstrap 20220304 -->
  <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
  <script>
    Kakao.init('16b3c92425889edb797d2dc78b3d1428'); // 발급받은 키 중 javascript키를 사용해준다.
    //카카오 정보 가져오기
    function kakaoGetData() {
      Kakao.Auth.login({
        success: function(response) {
          console.log(response);
          Kakao.API.request({
            url: '/v2/user/me',
            success: function(response) {
              var user_id = "k_" + response.id; // 아이디
              var birthyear = response.kakao_account.birthyear; // 생일
              var email = response.kakao_account.email; // 이메일
              var gender = response.kakao_account.gender; // 성별
              if (gender == 'male') { // DB에 맞는 성별처리
                gender = '1';
              } else {
                gender = '2';
              }
              var phone_number = response.kakao_account.phone_number; // 핸드폰번호
              var phone_number = phone_number.replace('+82 ', '0'); // 핸드폰 앞자리 치환
              var nickname = response.properties.nickname; // 카카오톡 닉네임

              $('#user_id').val(user_id);
              $('#birthday').val(birthyear);
              $('#email').val(email);
              $('#gender').val(gender);
              $('#phone').val(phone_number);
              $('#name').val(nickname);

            },
            fail: function(error) {
              console.log(error)
            },
          })
          Kakao.API.request({
            url: '/v1/user/shipping_address',
            success: function(response) { // 우선 첫번째 등록한 주소를 불러오도록...
              var base_address = response.shipping_addresses[0].base_address;
              var detail_address = response.shipping_addresses[0].detail_address;
              var zone_number = response.shipping_addresses[0].zone_number;
              $('#area').val(base_address);
              $('input[name="area_post_number"]').val(zone_number); // 우편번호
              //$('#detail_address').val(detail_address);
              //$('#zone_number').val(zone_number);
            },
            fail: function(error) {
              console.log(error)
            },
          })
          // 카카오 정보 및 form 정보 넘기는 부분
          setTimeout(function() {
            $('#frm').validate({
              success: function() {
                var content = '';
                content += ' [희망연령] : ' + sage;
                content += ' [희망신장] : ' + scm;
                content += ' [희망학력] : ' + sschool;
                content += ' [희망직업] : ' + sjob;
                content += ' [희망연봉] : ' + sincome;
                $(this).value('content', content);

                // 추천이상형 프로필 등록할때 들어가는 데이터
                document.getElementById("Idealtype_age").value = sage;
                document.getElementById("Idealtype_height").value = scm;
                document.getElementById("Idealtype_school").value = sschool;
                document.getElementById("Idealtype_job").value = sjob;
                // document.getElementById("Idealtype_income").value = sincome;

                this.target = "counselResult";
                this.action = "/new/common/counselProck.php";
                this.submit();

                var new_phone = $('#phone').val();
                var new_name = $('#name').val();

                $.ajax({ // kakao 추천 프로필 확인하기
                  url: "/new/profile/kakao_send3.php",
                  data: {
                    "phone": new_phone,
                    "name": new_name
                  },
                  success: function(data) {
                    console.log(data);
                  },
                  error: function(data) {
                    return;
                  }
                });

                document.getElementById("kakao_success").style.display = "none";
                alert("신청되었습니다.");
                show(11);
              }
            })
          }, 1000);
        },
        fail: function(error) {
          console.log(error)
        },
      })
    }

    // ideal type
    var sage = '';
    var scm = '';
    var sschool = '';
    var sjob = '';
    var sincome = '';

    //페이지 열릴 때 show(0)으로 이동
    $(document).ready(function() {
      show(0);
    });

    // show()함수
    function show(idx, txt) {
      if (idx == 2) {
        if ($('#school').val() == "") {
          alert("학력을 선택해주세요");
          return false;
        } else if ($('select[name=new_birthday]').val() == "") {
          alert('출생년도를 선택해주세요.');
          $('select[name=new_birthday]').focus();
          return;
        }
        $(".progress-bar").animate({ //희망 부분
          width: "10%",
        }, 500);
        $(".progress-bar2").animate({
          paddingLeft: '85px',
        }, 500);
      } else if (idx == 3) { // 희망 결혼시기
        $(".progress-bar").animate({
          width: "25%",
        }, 500);
        $(".progress-bar2").animate({
          paddingLeft: '180px',
        }, 500);
      } else if (idx == 4) { // 희망 상대 나이
        $(".progress-bar").animate({
          width: "40%",
        }, 500);
        $(".progress-bar2").animate({
          paddingLeft: '240px',
        }, 500);
      } else if (idx == 5) { // 희망 상대 신장
        sage = txt;
        console.log(sage);
        $(".progress-bar").animate({
          width: "60%",
        }, 500);
        $(".progress-bar2").animate({
          paddingLeft: '300px',
        }, 500);
      } else if (idx == 6) { // 희망 상대 학력
        scm = txt;
        console.log(scm);
        $(".progress-bar").animate({
          width: "75%",
        }, 500);
        $(".progress-bar2").animate({
          paddingLeft: '350px',
        }, 500);
      } else if (idx == 7) { // 희망 상대 외모
        sschool = txt;
        console.log(sschool);
        $(".progress-bar").animate({
          width: "85%",
        }, 500);
        $(".progress-bar2").animate({
          paddingLeft: '400px',
        }, 500);
      } else if (idx == 8) { // 희망 상대 외모
        sjob = txt;
        console.log(sjob);
        $(".progress-bar").animate({
          width: "100%",
        }, 500);
        $(".progress-bar2").animate({
          paddingLeft: '450px',
        }, 500);
      } else if (idx == 9) {
        sincome = txt;
        console.log(sincome);
        content = (' [희망연령] : ' + sage + ' [희망신장] : ' + scm + ' [희망학력] : ' + sschool + ' [희망직업] : ' + sjob + ' [희망연봉] : ' + sincome);
        console.log(content);
        setTimeout(function() {
          show(10);
        }, 2000);
      }

      $('section').hide();
      $('section:eq(' + idx + ')').show();


    }

    //함수 한번만 실행 변수
    var is_action = false;

    function success() {
      if (is_action === true) {
        return false;
      }
      is_action = true;
      kakaoGetData();
    }

    // select시 색 변경
    function changecolor1() {
      $(".new_birthday").css("background-color", "#cbb09e ");
      $(".new_birthday").css("border", "3px solid   #bea392");
      $(".new_birthday").css("color", "white");
      console.log("change1");
    }

    function changecolor2() {
      $(".school").css("background-color", "#cbb09e ");
      $(".school").css("border", "3px solid   #bea392");
      $(".school").css("color", "white");
      console.log("change2");
    }

    // progressbar animate bootstrap 20220304
    var delay = 500;
    $(".progress-bar").each(function(i) {
      $(this).delay(delay * i).animate({
        width: $(this).attr('aria-valuenow') + '%'
      }, delay);

      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: delay,
        // easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now) + '%');
        }
      });
    });

    // setTimeout(function() {
    //   $('.loading_page').appendTo('.result_page')
    // }, 2000);
  </script>
  <!-- p text -->
  <style>
    .aside_btn a {
      text-decoration-line: none;
    }

    .aside_btn li {
      line-height: 15px;
      height: 40px;
    }

    /* // progressbar animate bootstrap 20220304 */
    .progress {
      margin-bottom: 20px;
      /* margin-left: -20px; */
    }

    .progress-bar {
      width: 0;
    }

    .bg-purple {
      background-color: #cfc !important;
    }

    .progress .progress-bar {
      transition: unset;
    }


    /* // progressbar animate bootstrap 20220304 */

    .p_text {
      padding-top: 10px;
      padding-bottom: 10px;
      text-align: center;
      font-size: 25px;
      color: #7a5942;
    }

    .textbox {
      padding-top: 300px;
      text-align: center;
      color: #7a5942;
    }

    .textbox .top {
      margin-top: 40px;
      font-size: 30px;
      text-align: center;
    }

    .textbox .bottom {
      font-size: 19px;
      color: #fff;
      margin-top: -20px;
    }

    .list_box {
      display: block;
      width: 230px;
      height: 80px;
      line-height: 70px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      cursor: pointer;
      color: black;
      background-color: whitesmoke;
      opacity: 0.5;
    }

    .list_box:hover {
      display: block;
      width: 230px;
      height: 80px;
      line-height: 70px;
      border: 3px solid #bea392;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #cbb09e;
      opacity: 0.7;
    }

    /* main background-color  */
    /* .join-charge {} */


    input[id="gender1"]+label {
      width: 200px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    input[id="gender1"]:checked+label {
      width: 200px;
      border: 3px solid #bea392;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #cbb09e;
      opacity: 0.7;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    input[id="gender2"]+label {
      width: 200px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    input[id="gender2"]:checked+label {
      width: 200px;
      border: 3px solid #bea392;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #cbb09e;
      opacity: 0.7;
      margin-bottom: 30px;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    input[id="marry1"]+label {
      width: 200px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    input[id="marry1"]:checked+label {
      width: 200px;
      border: 3px solid #bea392;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #cbb09e;
      opacity: 0.7;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    input[id="marry2"]+label {
      width: 200px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    input[id="marry2"]:checked+label {
      width: 200px;
      border: 3px solid #bea392;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #cbb09e;
      opacity: 0.7;
      margin-bottom: 10px;
      height: 80px;
      line-height: 80px;
    }

    .new_birthday {
      width: 420px;
      height: 55px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
    }


    .school {
      width: 420px;
      height: 55px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 30px;
    }

    .radio-box {
      display: flex;
      width: 500px;
      text-align: center;
      margin-left: 27px;
    }

    .list_one {
      width: 472px;
    }

    .list_one:hover {
      width: 472px;
    }

    .container {
      margin-left: 740px;

    }

    .lds-spinner {
      color: official;
      display: block;
      position: relative;
      width: 80px;
      height: 80px;
      margin: 0 auto;
    }

    .lds-spinner div {
      transform-origin: 40px 40px;
      animation: lds-spinner 1.2s linear infinite;
    }

    .lds-spinner div:after {
      content: " ";
      display: block;
      position: absolute;
      top: 100px;
      left: 50px;
      width: 10px;
      height: 36px;
      border-radius: 20%;
      background: #666;
    }

    .lds-spinner div:nth-child(1) {
      transform: rotate(0deg);
      animation-delay: -1.1s;
    }

    .lds-spinner div:nth-child(2) {
      transform: rotate(30deg);
      animation-delay: -1s;
    }

    .lds-spinner div:nth-child(3) {
      transform: rotate(60deg);
      animation-delay: -0.9s;
    }

    .lds-spinner div:nth-child(4) {
      transform: rotate(90deg);
      animation-delay: -0.8s;
    }

    .lds-spinner div:nth-child(5) {
      transform: rotate(120deg);
      animation-delay: -0.7s;
    }

    .lds-spinner div:nth-child(6) {
      transform: rotate(150deg);
      animation-delay: -0.6s;
    }

    .lds-spinner div:nth-child(7) {
      transform: rotate(180deg);
      animation-delay: -0.5s;
    }

    .lds-spinner div:nth-child(8) {
      transform: rotate(210deg);
      animation-delay: -0.4s;
    }

    .lds-spinner div:nth-child(9) {
      transform: rotate(240deg);
      animation-delay: -0.3s;
    }

    .lds-spinner div:nth-child(10) {
      transform: rotate(270deg);
      animation-delay: -0.2s;
    }

    .lds-spinner div:nth-child(11) {
      transform: rotate(300deg);
      animation-delay: -0.1s;
    }

    .lds-spinner div:nth-child(12) {
      transform: rotate(330deg);
      animation-delay: 0s;
    }

    @keyframes lds-spinner {
      0% {
        opacity: 1;
      }

      100% {
        opacity: 0;
      }
    }
  </style>
</head>

<body>
  <style>
  .top {
    position: relative;
    width: 1600px;
    margin: auto;
    text-align: left;
    margin-bottom: 110px;
  }

  .topMenu {
    position: absolute;
    width: 1600px;
    margin: auto;
    text-align: left;
    margin-top: 40px;
    margin-left: 100px;
    z-index: 10001;
  }

  .topMenu:after {
    content: "";
    display: block;
    clear: both;
  }

  .menu01>li {
    float: left;
    width: 10%;
    line-height: 43px;
    font-size: 15px;
    font-weight: bold;
  }

  .menu01 span {
    font-size: 18px;
    font-weight: bold;
  }

  #title {
    font-size: 16px;
  }

  #title a:hover {
    color: #8f1514;
    font-weight: bold;
  }

  .menu01 li a:hover {
    color: #8f1514;
    font-weight: bold;
  }

  .dept01 {
    display: none;
    padding: 10px 0;
    position: absolute;
    z-index: 10001;
  }
</style>

<script>
  var value = "off";
  var value1 = "off";
  $(document).ready(function() {
    $('.open').on('click', function() {
      sessionStorage.setItem("val", "on"); // 저장
      value = sessionStorage.getItem("val");
      setTimeout(function() {
        $('.topMenu').css({
          "height": "500px"
        });
      }, 500);
      $('.dept01').slideDown(700);
      $('#bar').slideDown(700);
      $('.open').hide();
      $('.close').show();
    });

    $('.close').on('click', function() {
      sessionStorage.setItem("val", "off"); // 저장
      value = sessionStorage.getItem("val");
      $('.topMenu').css({
        "height": "0px"
      });
      $('.dept01').slideUp(700);
      $('#bar').slideUp(700);
      $('.close').hide();
      $('.open').show();
    });

    var timer;
    $('.topMenu').on({
      'mouseover': function() {
        timer = setTimeout(function() {
          if (value == "off" && value1 == "off") {
            $('.dept01').slideDown(800);
            $('#bar').slideDown(800);
            value1 = "on";
            $('.topMenu').css({
              "height": "500px"
            });
          }
        }, 100);
      },
      'mouseout': function() {
        clearTimeout(timer);
      }
    });

    $('.topMenu').mouseleave(function() {
      if (value == "off") {
        $('.topMenu').css({
          "height": "0px"
        });
        $('.dept01').slideUp(800);
        $('#bar').slideUp(800);
        value1 = "off";
      }
    });
  });

  /*
    $(document).on('click', '.m109', function() {
      if ($('.dept02').is(":visible")) {
        $('.dept02').slideUp(800);
      } else {
        $('.dept02').slideDown(800);
      }
    });

    $(document).on('click', '.m112', function() {
      if ($('.dept03').is(":visible")) {
        $('.dept03').slideUp(800);
      } else {
        $('.dept03').slideDown(800);
      }
    });

    $(document).on('click', '.m304', function() {
      if ($('.dept04').is(":visible")) {
        $('.dept04').slideUp(800);
      } else {
        $('.dept04').slideDown(800);
      }
    });

    $(document).on('click', '.m501', function() {
      if ($('.dept05').is(":visible")) {
        $('.dept05').slideUp(800);
      } else {
        $('.dept05').slideDown(800);
      }
    });

    $(document).on('click', '.m701', function() {
      if ($('.dept06').is(":visible")) {
        $('.dept06').slideUp(800);
      } else {
        $('.dept06').slideDown(800);
      }
    });

    $(document).on('click', '.m702', function() {
      if ($('.dept07').is(":visible")) {
        $('.dept07').slideUp(800);
      } else {
        $('.dept07').slideDown(800);
      }
    });

    $(document).on('click', '.m703', function() {
      if ($('.dept08').is(":visible")) {
        $('.dept08').slideUp(800);
      } else {
        $('.dept08').slideDown(800);
      }
    });

    $(document).on('click', '.m901', function() {
      if ($('.dept09').is(":visible")) {
        $('.dept09').slideUp(800);
      } else {
        $('.dept09').slideDown(800);
      }
    });

    $(document).on('click', '.m904', function() {
      if ($('.dept10').is(":visible")) {
        $('.dept10').slideUp(800);
      } else {
        $('.dept10').slideDown(800);
      }
    });

    $(document).on('click', '.m905', function() {
      if ($('.dept11').is(":visible")) {
        $('.dept11').slideUp(800);
      } else {
        $('.dept11').slideDown(800);
      }
    });
  */

  $(document).on('mouseover', '.title0', function() {
    $('.title0').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title0', function() {
    $('.title0').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title1', function() {
    $('.title1').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle1').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title1', function() {
    $('.title1').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle1').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title2', function() {
    $('.title2').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle2').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title2', function() {
    $('.title2').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle2').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title3', function() {
    $('.title3').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle3').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title3', function() {
    $('.title3').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle3').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title4', function() {
    $('.title4').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle4').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title4', function() {
    $('.title4').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle4').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title5', function() {
    $('.title5').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle5').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title5', function() {
    $('.title5').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle5').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title6', function() {
    $('.title6').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle6').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title6', function() {
    $('.title6').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle6').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title7', function() {
    $('.title7').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle7').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title7', function() {
    $('.title7').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle7').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.title8', function() {
    $('.title8').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle8').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.title8', function() {
    $('.title8').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle8').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn1', function() {
    $('.title0').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn1', function() {
    $('.title0').css({
      "border-bottom": "0px solid #8f1515"
    });

    $('.atitle').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn2', function() {
    $('.title1').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle1').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn2', function() {
    $('.title1').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle1').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn3', function() {
    $('.title2').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle2').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn3', function() {
    $('.title2').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle2').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn4', function() {
    $('.title3').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle3').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn4', function() {
    $('.title3').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle3').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn5', function() {
    $('.title4').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle4').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn5', function() {
    $('.title4').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle4').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn6', function() {
    $('.title5').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle5').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn6', function() {
    $('.title5').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle5').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn7', function() {
    $('.title6').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle6').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn7', function() {
    $('.title6').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle6').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn8', function() {
    $('.title7').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle7').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn8', function() {
    $('.title7').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle7').css({
      "color": "#404040"
    });
  });

  $(document).on('mouseover', '.btn9', function() {
    $('.title8').css({
      "border-bottom": "3px solid #8f1515"
    });
    $('.atitle8').css({
      "color": "#8f1514"
    });
  });

  $(document).on('mouseleave', '.btn9', function() {
    $('.title8').css({
      "border-bottom": "0px solid #8f1515"
    });
    $('.atitle8').css({
      "color": "#404040"
    });
  });
</script>

<!--div id="" style="border-top: 1px solid #ccc; background-color: #ffffff; width:100%; z-index:10001; position: absolute; top: 234px;"></div-->
<div id="bar" style="display:none; border-top: 1px solid #ccc; background-color: #ffffff; width:100%; z-index:10001; position: absolute; top: 234px;">
  <table style="width:100%; margin-top:400px;">
    <tr>
      <td style="height:50px; background-color: #c3c3c3; font-size:18px; color:#000000; font-weight: bold; text-align: center; vertical-align: middle;">
        홈페이지 회원가입을 하시면 더 많은 정보를 확인할 수 있습니다.
      </td>
    </tr>
  </table>
</div>

<div style="position: relative; width: 1600px; margin:auto; text-align: left;">
  <table id="title" style="width:1600px; margin:auto; margin-left:95px;">
    <tr height="150px">
      <td width="90px;"><br />
        <p style="margin-top:22px; font-size:19px; letter-spacing: 2px;">대표전화</p>
        <p style="margin-top:19px; font-size:19px; letter-spacing: 1px;">VVIP전용</p>
      </td>
      <td width="130px;"><br />
        <a href="https://www.isoohyun.co.kr/new/customer/customer03.php?counselGbn=27340">
          <p style="margin-top:22px; font-size:19px;">02-540-4000</p>
        </a>
        <a href="https://www.isoohyun.co.kr/new/customer/customer03.php?counselGbn=27341">
          <p style="margin-top:19px; font-size:19px;">02-559-2000</p>
        </a>
      </td>
      <td><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=94"><img src="/new/image/pc_banner_fair.png" /></a></td>
      <td style="width:663.83px; vertical-align:bottom;"><a href="https://www.isoohyun.co.kr/"><img src="/new/image/top_logo.png" style="margin-left: 105px;" /></a></td>
      <td style="width:528.69px;">
        <br />
                  <a href="https://www.isoohyun.co.kr/new/com/com01.php">로그인</a> &nbsp;|&nbsp;
          <a href="https://www.isoohyun.co.kr/new/join/join01.php">회원가입</a> &nbsp;|&nbsp;
          <a href="https://www.isoohyun.co.kr/new/com/com09.php">서류제출</a> &nbsp;|&nbsp;
          <a href="https://www.isoohyun.co.kr/new/com/com08.php">사이트맵</a>
                      <!-- <a href="https://grip.show/live/8dejr14ppj31vgn4?sf=1&rfr_uid=le2n8z1l"  target="_blank"><img style="margin-left:-30px;margin-top:2px" src="/new/image/0801_banner.png" alt=""></a> -->
      </td>
    </tr>
  </table>
</div>
<div class="top">
  <div class="topMenu">
    <ul class="menu01">
      <li style="width:70px;">
        <span>
          <div class="open" style="height:40px;">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjQgNmgtMjR2LTRoMjR2NHptMCA0aC0yNHY0aDI0di00em0wIDhoLTI0djRoMjR2LTR6Ii8+PC9zdmc+" style="margin-top:10px;">
          </div>

          <div class="close" style="height:40px; display:none;">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjMuOTU0IDIxLjAzbC05LjE4NC05LjA5NSA5LjA5Mi05LjE3NC0yLjgzMi0yLjgwNy05LjA5IDkuMTc5LTkuMTc2LTkuMDg4LTIuODEgMi44MSA5LjE4NiA5LjEwNS05LjA5NSA5LjE4NCAyLjgxIDIuODEgOS4xMTItOS4xOTIgOS4xOCA5LjF6Ii8+PC9zdmc+" style="margin-top:10px;">
          </div>
        </span>
      </li>
      <li>
        <span>
          <div class="title0" style="width: 80px;"><a class="atitle" href="#" onclick="return false;">수현 소개</a></div>
        </span>
        <ul class="dept01">
          <ul>
                                          <li class="btn1"><a href="https://www.isoohyun.co.kr/new/about/about01.php" data-menuid="m105">CEO인사말</a></li>
                                                          <li class="btn1"><a href="https://www.isoohyun.co.kr/new/about/about02.php" data-menuid="m106">회사연혁</a></li>
                                                          <li class="btn1"><a href="https://www.isoohyun.co.kr/new/about/about06.php" data-menuid="m107">수현 갤러리</a></li>
                                                          <li class="btn1"><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=192" data-menuid="m108">수상내역</a></li>
                                                          <li class="btn1 m109">
                  <!--a href="#" onclick="return false;">언론 속 수현</a-->
                  <a href="https://www.isoohyun.co.kr/new/about/about03.php" data-menuid="m109">언론 속 수현</a>
                  <ul class="dept02" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/about/about03.php">언론기사</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/about/about05.php">TV방송</a></li>
                  </ul>
                </li>
                                                          <li class="btn1"><a href="https://www.isoohyun.co.kr/new/about/youtube.php" data-menuid="m110">Youtube</a></li>
                                                          <li class="btn1"><a href="https://www.isoohyun.co.kr/new/about/about11.php" data-menuid="m111">수현 인사이드</a></li>
                                                          <li class="btn1 m112">
                  <!--a href="#" onclick="return false;">오시는길</a-->
                  <a href="https://www.isoohyun.co.kr/new/about/about12.php" data-menuid="m112">오시는길</a>
                  <ul class="dept03" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/about/about12.php">서울</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/about/about13.php">부산</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/about/about14.php">대구</a></li>
                  </ul>
                </li>
                                      </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title1" style="width: 76px;"><a class="atitle1" href="#" onclick="return false;">WHY수현</a></div>
        </span>
        <ul class="dept01">
          <ul>
                                          <li class="btn2"><a href="https://www.isoohyun.co.kr/new/benefit/benefit02.php" data-menuid="m301">WHY수현</a></li>
                                                          <li class="btn2"><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=191" data-menuid="m302">성과 REPORT</a></li>
                                                          <li class="btn2"><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=194" data-menuid="m303">NCS 평가지수</a></li>
                                                          <li class="btn2 m304">
                  <!--a href="#" onclick="return false;">멤버쉽 서비스</a-->
                  <a href="https://www.isoohyun.co.kr/new/benefit/benefit11.php" data-menuid="m304">멤버쉽 서비스</a>
                  <ul class="dept04" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/benefit/benefit11.php">웨딩</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/benefit/benefit11.php?searchCat=2">미용·뷰티·포토</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/benefit/benefit11.php?searchCat=3">생활·문화</a></li>
                  </ul>
                </li>
                                                          <li class="btn2"><a href="https://www.isoohyun.co.kr/new/benefit/benefit08.php" data-menuid="m305">제휴 서비스</a></li>
                                                          <li class="btn2"><a href="https://www.isoohyun.co.kr/new/benefit/benefit09.php" data-menuid="m306">온라인 브로슈어</a></li>
                                                          <li class="btn2"><a href="https://www.isoohyun.co.kr/new/benefit/service.php" data-menuid="m307">회원 의료 혜택</a></li>
                                                          <li class="btn2"><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=94" data-menuid="m308">고객안심서비스</a></li>
                                      </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title2" style="width: 85px;"><a class="atitle2" href="#" onclick="return false;">회원&성혼</a></div>
        </span>
        <ul class="dept01">
          <ul>
                          <li class="btn3"><a href="https://www.isoohyun.co.kr/new/about/about10.php" data-menuid="m401">실시간 회원현황</a></li>
                            <li class="btn3"><a href="https://www.isoohyun.co.kr/new/about/about08.php?idx=193" data-menuid="m402">회원성비&교제율현황</a></li>
                            <li class="btn3"><a href="https://www.isoohyun.co.kr/new/benefit/benefit15.php" data-menuid="m403">수준이 다른 성혼율</a></li>
                            <li class="btn3"><a href="https://www.isoohyun.co.kr/new/about/about15.php" data-menuid="m404">매칭후기</a></li>
                            <li class="btn3"><a href="https://www.isoohyun.co.kr/new/benefit/benefit14.php" data-menuid="m405">서비스가상체험</a></li>
                            <li class="btn3"><a href="https://www.isoohyun.co.kr/new/lovetest/hope_ideal_test.php" data-menuid="m406">희망 프로필 추천</a></li>
                        </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title3" style="width: 70px;"><a class="atitle3" href="#" onclick="return false;">가입문의</a></div>
        </span>
        <ul class="dept01">
          <ul>
                                          <li class="btn4 m501">
                  <!--a href="#" onclick="return false;">정회원 가입안내</a-->
                  <a href="https://www.isoohyun.co.kr/new/benefit/benefit04.php" data-menuid="m501">정회원 가입안내</a>
                  <ul class="dept05" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/benefit/benefit04.php">초혼</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/benefit/benefit05.php">재혼</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/benefit/benefit06.php">무료상담신청</a></li>
                  </ul>
                </li>
                                                          <li class="btn4"><a href="https://www.isoohyun.co.kr/new/service/service01.php" data-menuid="m502">CLASS별 서비스</a></li>
                                                          <li class="btn4"><a href="https://www.isoohyun.co.kr/new/service/new_black_service.php" data-menuid="m513">블랙서비스</a></li>
                                                          <li class="btn4"><a href="https://www.isoohyun.co.kr/new/service/service04.php" data-menuid="m503">명문가 서비스</a></li>
                                                          <li class="btn4"><a href="https://www.isoohyun.co.kr/new/service/service05.php" data-menuid="m504">전문직 서비스</a></li>
                                                          <li class="btn4"><a href="https://www.isoohyun.co.kr/new/service/service06.php" data-menuid="m505">크리스천 서비스</a></li>
                                                          <li class="btn4"><a href="https://www.isoohyun.co.kr/new/service/service07.php" data-menuid="m506">유학파 서비스</a></li>
                                                          <li class="btn4"><a href="https://www.isoohyun.co.kr/new/service/service09.php" data-menuid="m507">자녀결혼 컨설팅</a></li>
                                                          <li class="btn4"><a style="color:#785813;" href="https://www.isoohyun.co.kr/new/remarriage/main.php" data-menuid="m509" target="_blank">재혼전용 프로그램</a></li>
                                      </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title4" style="width: 88px;"><a class="atitle4" href="#" onclick="return false;">러브테스트</a></div>
        </span>
        <ul class="dept01">
          <ul>
                          <li class="btn5"><a href="https://www.isoohyun.co.kr/new/lovetest/ideal_find_test.php" data-menuid="m601">이상형 찾기</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/lovetest/ideal_worldcup.php" data-menuid="m628">이상형 월드컵</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/lovetest/mbti_test.php" data-menuid="m602">MBTI 이상형</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/fate/fate08.php" data-menuid="m603">결혼시기</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/lovetest/first_face_test.php" data-menuid="m604">첫인상</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/fate/fate21.php" data-menuid="m605">재혼가능성</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/lovetest/join_test.php" data-menuid="m606">노블레스가입비</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/fate/fate26.php" data-menuid="m607">펜트하우스</a></li>
                            <li class="btn5"><a href="https://www.isoohyun.co.kr/new/fate/fate18.php" data-menuid="m608">커플매니저</a></li>
                        </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title5" style="width: 100px;"><a class="atitle5" href="#" onclick="return false;">파티/이벤트</a></div>
        </span>
        <ul class="dept01">
          <ul>
                                          <li class="btn6 m701">
                  <!--a href="#" onclick="return false;">프리미엄 모임</a-->
                  <a href="https://www.isoohyun.co.kr/new/meet/meet01.php" data-menuid="m701">프리미엄 모임</a>
                  <ul class="dept06" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/meet/meet01.php">문화·예술 게더링</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/meet/meet02.php">크리스찬 게더링</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/meet/meet03.php">골프 게더링</a></li>
                  </ul>
                </li>
                                                          <li class="btn6 m702">
                  <!--a href="#" onclick="return false;">스페셜이벤트</a-->
                  <a href="https://www.isoohyun.co.kr/new/meet/meet07.php" data-menuid="m702">스페셜이벤트</a>
                  <ul class="dept07" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/meet/meet07.php?searchKey=1">스페셜맞선</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/meet/meet07.php?searchKey=2">데이이벤트</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/meet/meet07.php?searchKey=4">문화공연이벤트</a></li>
                  </ul>
                </li>
                                                          <li class="btn6 m703">
                  <!--a href="#" onclick="return false;">프라이빗 파티</a-->
                  <a href="https://www.isoohyun.co.kr/new/meet/meet04.php" data-menuid="m703">프라이빗 파티</a>
                  <ul class="dept08" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/meet/meet04.php">파티 참여신청</a></li>
                  </ul>
                </li>
                                                          <li class="btn6"><a href="https://www.isoohyun.co.kr/new/meet/meet11.php" data-menuid="m704">파티 갤러리</a></li>
                                      </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title6" style="width: 90px;"><a class="atitle6" href="#" onclick="return false;">미팅가이드</a></div>
        </span>
        <ul class="dept01">
          <ul>
                          <li class="btn7"><a href="https://www.isoohyun.co.kr/new/customer/love_success.php" data-menuid="m801">미팅성공전략</a></li>
                            <li class="btn7"><a href="https://www.isoohyun.co.kr/new/service/service10.php" data-menuid="m802">결혼칼럼</a></li>
                            <li class="btn7"><a href="https://www.isoohyun.co.kr/new/fate/fate25.php" data-menuid="m803">홍보웹툰</a></li>
                            <li class="btn7"><a href="https://www.isoohyun.co.kr/new/service/upperclass.php" data-menuid="m804">상류층 TREND</a></li>
                        </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title7" style="width: 70px;"><a class="atitle7" href="#" onclick="return false;">고객센터</a></div>
        </span>
        <ul class="dept01">
          <ul>
                                          <li class="btn8 m901">
                  <!--a href="#" onclick="return false;">공지사항</a-->
                  <a href="https://www.isoohyun.co.kr/new/about/about07.php" data-menuid="m901">공지사항</a>
                  <ul class="dept09" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer02.php">전체</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer02.php?searchCat=1">초혼</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer02.php?searchCat=2">재혼</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer02.php?searchCat=3">미팅파티</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer02.php?searchCat=4">홈페이지</a></li>
                  </ul>
                </li>
                                                          <li class="btn8"><a href="https://www.isoohyun.co.kr/new/customer/customer02.php" data-menuid="m902">자주하는 질문</a></li>
                                                          <li class="btn8"><a href="https://www.isoohyun.co.kr/new/benefit/benefit03.php" data-menuid="m903">전화문의 가이드</a></li>
                                                          <li class="btn8 m904">
                  <!--a href="#" onclick="return false;">무료상담신청</a-->
                  <a href="https://www.isoohyun.co.kr/new/customer/customer03.php" data-menuid="m904">무료상담신청</a>
                  <ul class="dept10" style="line-height: 30px; font-size: 13px; display:none;">
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer08.php">칭찬접수</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer11.php">제안접수</a></li>
                    <li>- <a style="color:#8f8f8f;" href="/new/customer/customer14.php">불편접수</a></li>
                  </ul>
                </li>
                                                          <li class="btn8 m905">
                  <!--a href="#" onclick="return false;">고객의견</a-->
                  <a href="https://www.isoohyun.co.kr/new/customer/customer08.php" data-menuid="m905">고객의견</a>
                  <ul class="dept11" style="line-height: 30px; font-size: 13px; display:none;">
                    <!--li>- <a href="#">수현人</a></li-->
                    <li>- <a style="color:#8f8f8f;" href="/new/about/about08.php?idx=188">커플매니저</a></li>
                  </ul>
                </li>
                                                          <li class="btn8"><a href="https://www.isoohyun.co.kr/new/recruit/index.php" data-menuid="m906" target="_blank">채용공고</a></li>
                                      </ul>
        </ul>
      </li>
      <li>
        <span>
          <div class="title8" style="width: 40px;"><a class="atitle8" href="#" onclick="return false;">지사</a></div>
        </span>
        <ul class="dept01">
          <ul>
                          <li class="btn9"><a href="https://www.isoohyun.co.kr/new/busan/about01.php" data-menuid="m1001">부산지사</a></li>
                            <li class="btn9"><a href="https://www.isoohyun.co.kr/new/daegu/about01.php" data-menuid="m1002">대구지사</a></li>
                            <li class="btn9"><a href="https://www.isoohyun.co.kr/new/daejeon/daejeon.php" data-menuid="m1003">대전지사</a></li>
                        </ul>
        </ul>
      </li>
    </ul>
  </div>
</div>

<!-- Channel Plugin Scripts -->
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
<!-- End Channel Plugin -->    <!DOCTYPE html>
  <html lang="ko">

  <head>
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
    <script src="/new/js/jquery.placeholder.js" type="text/javascript"></script>

    <script>
      $(document).ready(function() {
        var map = document.getElementById("maskz2")
        var winHeight = 0;

        function setMapSize() {
          let scrollHeight = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
          );
          map.style.height = scrollHeight + "px";
        }
        setMapSize();
        $(window).resize(setMapSize);
      });

      Kakao.init('16b3c92425889edb797d2dc78b3d1428');

      function kakaoGetData_sky(FormName) {

        var FormName = '#' + FormName;

        if (FormName == '#speedFrm') { //방문예약
          if ($('#name1').val() == "") {
            alert("이름을 입력하세요.");
            return false;
          } else if ($('#school1 option:selected').val() == "") {
            alert("학력을 선택하세요.");
            return false;
          }
          var content = '';
          content += '<br><br>';
          content += ' [상담 지사] : ' + $('input[name="area1"]:checked').val() + '<br>';
          content += ' [희망 상담 일정] : ' + $('#month').val() + $('#day').val() + $('#times').val();
          $('input[name="content"]').val(content);
        } else if (FormName == '#speedFrm2') { //무료상담
          if ($('#name2').val() == "") {
            alert("이름을 입력하세요.");
            return false;
          } else if ($('#school3 option:selected').val() == "") {
            alert("학력을 선택하세요.");
            return false;
          }
          var content = '';
          content += '<br><br>';
          content += ' [상담 지사] : ' + $('input[name="area2"]:checked').val() + '<br>';
          content += ' [문의사항] : ' + $('#memo').val();
          $('input[name="content"]').val(content);
        } else if (FormName == '#speedFrm3') {
          if ($('#name3').val() == "") {
            alert("이름을 입력하세요.");
            return false;
          } else if ($('#school6 option:selected').val() == "") {
            alert("학력을 선택하세요.");
            return false;
          } else if ($('#job3 option:selected').val() == "") {
            alert("직업을 선택하세요.");
            return false;
          } else if ($('#age option:selected').val() == "") {
            alert("이상형 연령대를 선택하세요.");
            return false;
          } else if ($('#school03 option:selected').val() == "") {
            alert("이상형 학력을 선택하세요.");
            return false;
          } else if ($('#job4 option:selected').val() == "") {
            alert("이상혁 직업을 선택하세요.");
            return false;
          }

          var content = '';
          content += '<br><br>';
          content += ' [상담 지사] : ' + $('input[name="area3"]:checked').val() + '<br>';
          content += ' [이상형 연령대] : ' + $('#age').val() + '<br>';
          content += ' [이상형 학력] : ' + $('#school03').val() + '<br>';
          content += ' [이상형 직업] : ' + $('#job4').val();
          $('input[name="content"]').val(content);

        } else if (FormName == '#speedFrm4') {
          if ($('#name4').val() == "") {
            alert("이름을 입력하세요.");
            return false;
          } else if ($('#school4 option:selected').val() == "") {
            alert("학력을 선택하세요.");
            return false;
          }
          var content = '';
          content += '<br><br>';
          content += ' [상담 지사] : ' + $('input[name="area4"]:checked').val() + '<br>';
          content += ' [문의사항] : ' + $('#memo2').val();
          $('input[name="content"]').val(content);
        }

        Kakao.Auth.login({
          success: function(response) {
            //console.log(response);
            Kakao.API.request({
              url: '/v2/user/me',
              success: function(response) {
                var user_id = "k_" + response.id; // 아이디
                var birthyear = response.kakao_account.birthyear; // 생일
                var email = response.kakao_account.email; // 이메일
                var gender = response.kakao_account.gender; // 성별
                if (gender == 'male') { // DB에 맞는 성별처리
                  gender = '1';
                } else {
                  gender = '2';
                }
                var phone_number = response.kakao_account.phone_number; // 핸드폰번호
                if (phone_number != "") {
                  var phone_number = phone_number.replace('+82 ', '0'); // 핸드폰 앞자리 치환
                }
                var nickname = response.properties.nickname; // 닉네임(카카오톡 닉네임을 가져오기 때문에 정확한 이름이 아닐수있음)
                $('input[name="new_user_id"]').val(user_id);
                $('input[name="birthday"]').val(birthyear);
                $('input[name="email"]').val(email);
                $('input[name="gender"]').val(gender);
                $('input[name="phone"]').val(phone_number);
              },
              fail: function(error) {
                console.log(error)
              },
            })
            Kakao.API.request({
              url: '/v1/user/shipping_address',
              success: function(response) { // 우선 첫번째 등록한 주소를 불러오도록...
                var base_address = response.shipping_addresses[0].base_address;
                var detail_address = response.shipping_addresses[0].detail_address;
                var zone_number = response.shipping_addresses[0].zone_number;
                $('input[name="area"]').val(base_address);
                $('input[name="area_post_number"]').val(zone_number); // frm 4가지

                setTimeout(function() { // 정보 넘기는 시간이 필요해 지연 후 로그인 처리 페이지로 넘김
                  $(FormName).validate({
                    success: function() {
                      this.target = "counselResult";
                      this.action = "/new/common/counselProck.php";
                      this.submit();
                      $('#speed').hide();
                      $('#speed2').hide();
                      $('#speed3').hide();
                      $('#speed4').hide();
                      $('#speed5').show();
                    }
                  })
                }, 500);
              },
              fail: function(error) {
                console.log(error);
                alert("fail");
              },
            })
          },
          fail: function(error) {
            console.log(error);
            alert("fail");
          },
        })
      }

      $(function() {
        $('select').selectBox();

        //ie placeholder 적용안되서 추가...
        $('#name').placeholder();
        $('#name2').placeholder();
        $('#name3').placeholder();
        $('#name4').placeholder();
        $('#memo').placeholder();
        $('#memo2').placeholder();
      });

      function speed0() {
        $('#maskz2').fadeTo('slow', 0.8);
        $('#maskz2').show();
        $('#speed0').show();
        $('#option').val("1");
      }

      function speed1() {
        $('#maskz2').fadeTo('slow', 0.8);
        $('#maskz2').show();
        $('#speed').show();
        $('#option').val("1");
      }


      function speed2() {
        $('#maskz2').fadeTo('slow', 0.8);
        $('#maskz2').show();
        $('#speed2').show();
        $('#option2').val("1");
      }

      function speed3() {
        $('#maskz2').fadeTo('slow', 0.8);
        $('#maskz2').show();
        $('#speed3').show();
        $('#option3').val("1");
      }

      function speed4() {
        $('#maskz2').fadeTo('slow', 0.8);
        $('#maskz2').show();
        $('#speed4').show();
        $('#option4').val("1");
      }

      function speedclose0() {
        $('#maskz2').hide();
        $('#speed0').hide();
        $('#option').val("0");
      }

      function speedclose1() {
        $('#maskz2').hide();
        $('#speed').hide();
        $('#option').val("0");
      }

      function speedclose2() {
        $('#maskz2').hide();
        $('#speed2').hide();
        $('#option2').val("0");
      }

      function speedclose3() {
        $('#maskz2').hide();
        $('#speed3').hide();
        $('#option3').val("0");
      }

      function speedclose4() {
        $('#maskz2').hide();
        $('#speed4').hide();
        $('#option4').val("0");
      }

      function speedclose5() {
        $('#maskz2').hide();
        $('#speed5').hide();
        $('#option5').val("0");
      }
    </script>
    <style>
      /* aside bar start */
      aside {
        position: fixed;
        bottom: 0.7rem;
        width: 64rem;
        z-index: 100;
        left: 50%;
        transform: translateX(-50%);
      }

      .aside_wrap {}

      .aside_btn {
        display: flex;
        justify-content: center;
        margin: 0 auto;
        text-align: center;

      }

      .aside_btn li:hover {
        background-color: white;
        color: black;
        border: 2px solid white;
      }

      .aside_btn li {
        font-size: 18px;
        color: white;
        border: 2px solid #232323;
        border-radius: 50px;
        width: 200px;
        padding: 10px 0 10px 0;
        margin-left: 10px;
        margin-right: 10px;
        background-color: #232323;
        box-shadow: 10px 7px 5px rgba(0, 0, 0, 0.1);
      }

      .top_button {
        position: fixed;
        left: 82%;
        bottom: 10%;
        display: none;
      }

      .top_button:hover {
        content: url('/new/image/sky/btn_up_off.png');
      }
    </style>
  </head>

  <body>
    <!-- 흑백 배경 팝업 -->
    <div id="maskz2" style="width: 100%; height: 4170px; left: 0px; top:0px; opacity: 0.8; display: block; display:none;"></div>
    <!-- 흑백 배경 팝업 -->

    <!-- 자주하는질문 -->
    <div id="speed0" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
      <div id="speedclose0" onclick="speedclose0()" style="position:absolute;top:300px;left:1480px;"><img src="/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
      <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar0.php" scrolling="no" style="width:2000px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
    </div>

    <!-- 방문예약 -->
    <div id="speed" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
      <div id="speedclose2" onclick="speedclose1()" style="position:absolute;top:300px;left:1030px;"><img src="/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
      <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar1.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
    </div>

    <!-- 무료상담 -->
    <div id="speed2" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
      <div id="speedclose2" onclick="speedclose2()" style="position:absolute;top:300px;left:1030px;"><img src="/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
      <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar3.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
    </div>

    <!-- 가입비안내 -->
    <div id="speed3" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
      <div id="speedclose3" onclick="speedclose3()" style="position:absolute;top:300px;left:1030px;"><img src="/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
      <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar2.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
    </div>

    <!-- 안내자료 -->
    <div id="speed4" style="display:none; z-index:10003; position: fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
      <div id="speedclose4" onclick="speedclose4()" style="position:absolute;top:300px;left:1030px;"><img src="/new/image/sky/phone_img_close.png" alt="" style="cursor:pointer;"></div>
      <iframe src="https://www.isoohyun.co.kr/new/common/aside_bar4.php" scrolling="no" style="width:1100px; height:730px;" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
    </div>

    <a href="#"><img id="top_off" src="/new/image/main/new/btn_up_off.png" style="position: absolute; top:-55px;right: 10px;" /></a>
    <a href="#"><img id="top_on" src="/new/image/main/new/btn_up_on.png" style="position: absolute; top:-55px;right: 10px; display:none;" /></a>

    <div class="sky-scraper4" style="background-image: URL(/new/image/sky/scraper4/bottombar_bg2.png); height:80px; max-height:80px">
      <aside class="aside_wrap" style="padding-top: 50px;">
        <ul class="aside_btn">
          <a href="#" onclick="speed0();">
            <li>자주하는질문</li>
          </a>
          <a href="#" onclick="speed1();">
            <li>방문예약</li>
          </a>
          <a href="#" onclick="speed2();">
            <li>무료상담</li>
          </a>
          <a href="#" onclick="speed3();">
            <li>가입비안내</li>
          </a>
          <a href="#" onclick="speed4();">
            <li>안내자료</li>
          </a>
        </ul>
      </aside>
      <a href="#">
        <img class="top_button" id="top_button" src="/new/image/sky/btn_up_on.png">
      </a>
      <script>
        $(document).ready(function() {
          $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
              $('.top_button').fadeIn();
            } else {
              $('.top_button').fadeOut();
            }
          });
          $('.top_button').click(function() {
            $('html, body').animate({
              scrollTop: 0
            }, 400);
            return false;
          });
        });
      </script>
    </div>
    <!-- <iframe id="counselResult" name="counselResult" src="" width="0" height="0" style="display:none;"></iframe> -->
    </body>

  </html>  <!-- side menu start -->
  <div id="floating_open">
    <h2 class="lnb-tit">회원&성혼</h2><br>
    <ul class="main_menu_list">
      <li><a href="/new/about/about10.php">실시간 회원현황</a></li>
      <li><a href="/new/about/about08.php?idx=193">회원성비&교제율현황</a></li>
      <li><a href="/new/benefit/benefit15.php">수준이 다른 성혼율</a></li>
      <li><a href="/new/about/about15.php">매칭후기</a></li>
      <li><a href="/new/benefit/benefit14.php">서비스가상체험</a></li>
      <li class="on"><a href="/new/lovetest/hope_ideal_test.php">희망 프로필 추천</a></li>
    </ul>
  </div>
  <!-- side menu end -->

  <div class="content" style="background-color:#fff;">
    <div class="bannerwrap">
      <div class="wrap" style="max-width:1920px; margin:auto;">
        <!-- 시작부분 show(0) -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/main_bg.jpg'); height:600px; background-repeat: no-repeat;
             background-position:center;position: relative;">
              <a href="javascript:show(1);"><img style="position: absolute;top:470px;left:50%;transform: translate(-50%, -50%);" src="/new/image/hope_ideal_pc/index_btn.png" alt="" /></a>
                          </div>
          </div>
        </section>

        <section id=" lovetest">
          <form id="frm" name="frm" method="post">
            <input type="hidden" name="counselGbn" value="29812" />
            <input type="hidden" name="counselGbn2" value="희망상대 프로필 추천_pc" />
            <input type="hidden" name="content" value="" />
            <!-- <input type="hidden" name="sage" value="" message="연령을 선택해주세요." />
            <input type="hidden" name="scm" value="" message="신장을 선택해주세요." />
            <input type="hidden" name="sschool" value="" message="학력을 선택해주세요." />
            <input type="hidden" name="sjob" value="" message="직업을 선택해주세요." /> -->
            <input type="hidden" id="name" name="name">
            <input type="hidden" id="gender" name="gender">
            <input type="hidden" id="birthday" name="birthday">
            <input type="hidden" id="area" name="area">
            <input type="hidden" id="phone" name="phone">
            <input type="hidden" id="email" name="email">
            <input type="hidden" id="marriage" name="marriage" value="10501">
            <input type="hidden" id="user_id" name="user_id">
            <input type="hidden" id="area_post_number" name="area_post_number">
            <!-- 이상형 저장 데이터-->
            <input type="hidden" id="code" name="code" value="1">
            <input type="hidden" id="Idealtype_age" name="Idealtype_age">
            <input type="hidden" id="Idealtype_height" name="Idealtype_height">
            <input type="hidden" id="Idealtype_school" name="Idealtype_school">
            <input type="hidden" id="Idealtype_job" name="Idealtype_job">
            <!-- <input type="hidden" id="Idealtype_income" name="Idealtype_income"> -->
            <!-- 이상형 저장 데이터-->


            <!-- show(1) -->
            <div class="join-charge">
              <div style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
                <div class="input-box">
                  <p class="p_text" style="padding-top: 70px;">이상형 매칭을 위해<br>당신의 몇 가지 정보를 입력해주세요</p>
                  <div style="text-align: center; margin:0 auto;">
                    <div style="width: 100%; ">
                      <input id="gender1" type="radio" name="gender" value="1" style="display: none;" /> <label for="gender1" style="cursor: pointer;">남성</label>&nbsp;&nbsp;
                      <input id="gender2" type="radio" name="gender" value="2" style="display: none;" /><label for="gender2" style="cursor: pointer;">여성</label>
                    </div>
                    <div style="width: 100%;  ">
                      <input id="marry1" type="radio" name="marriage" value="10501" style="display: none;" /><label for="marry1" style="cursor: pointer;"> 초혼</label>&nbsp;&nbsp;
                      <input id="marry2" type="radio" name="marriage" value="10502" style="display: none;" /> <label for="marry2" style="cursor: pointer;">재혼</label>
                    </div>
                    <div style="width: 100%;  ">
                      <select onchange="changecolor1();" id="new_birthday" name="new_birthday" class="new_birthday">
                        <option value="">출생년도</option>
                                                  <option value="1950">1950년</option>
                                                  <option value="1951">1951년</option>
                                                  <option value="1952">1952년</option>
                                                  <option value="1953">1953년</option>
                                                  <option value="1954">1954년</option>
                                                  <option value="1955">1955년</option>
                                                  <option value="1956">1956년</option>
                                                  <option value="1957">1957년</option>
                                                  <option value="1958">1958년</option>
                                                  <option value="1959">1959년</option>
                                                  <option value="1960">1960년</option>
                                                  <option value="1961">1961년</option>
                                                  <option value="1962">1962년</option>
                                                  <option value="1963">1963년</option>
                                                  <option value="1964">1964년</option>
                                                  <option value="1965">1965년</option>
                                                  <option value="1966">1966년</option>
                                                  <option value="1967">1967년</option>
                                                  <option value="1968">1968년</option>
                                                  <option value="1969">1969년</option>
                                                  <option value="1970">1970년</option>
                                                  <option value="1971">1971년</option>
                                                  <option value="1972">1972년</option>
                                                  <option value="1973">1973년</option>
                                                  <option value="1974">1974년</option>
                                                  <option value="1975">1975년</option>
                                                  <option value="1976">1976년</option>
                                                  <option value="1977">1977년</option>
                                                  <option value="1978">1978년</option>
                                                  <option value="1979">1979년</option>
                                                  <option value="1980">1980년</option>
                                                  <option value="1981">1981년</option>
                                                  <option value="1982">1982년</option>
                                                  <option value="1983">1983년</option>
                                                  <option value="1984">1984년</option>
                                                  <option value="1985">1985년</option>
                                                  <option value="1986">1986년</option>
                                                  <option value="1987">1987년</option>
                                                  <option value="1988">1988년</option>
                                                  <option value="1989">1989년</option>
                                                  <option value="1990">1990년</option>
                                                  <option value="1991">1991년</option>
                                                  <option value="1992">1992년</option>
                                                  <option value="1993">1993년</option>
                                                  <option value="1994">1994년</option>
                                                  <option value="1995">1995년</option>
                                                  <option value="1996">1996년</option>
                                                  <option value="1997">1997년</option>
                                                  <option value="1998">1998년</option>
                                                  <option value="1999">1999년</option>
                                                  <option value="2000">2000년</option>
                                                  <option value="2001">2001년</option>
                                                  <option value="2002">2002년</option>
                                                  <option value="2003">2003년</option>
                                                  <option value="2004">2004년</option>
                                                  <option value="2005">2005년</option>
                                                  <option value="2006">2006년</option>
                                                  <option value="2007">2007년</option>
                                                  <option value="2008">2008년</option>
                                                  <option value="2009">2009년</option>
                                                  <option value="2010">2010년</option>
                                                  <option value="2011">2011년</option>
                                                  <option value="2012">2012년</option>
                                                  <option value="2013">2013년</option>
                                                  <option value="2014">2014년</option>
                                                  <option value="2015">2015년</option>
                                                  <option value="2016">2016년</option>
                                                  <option value="2017">2017년</option>
                                                  <option value="2018">2018년</option>
                                                  <option value="2019">2019년</option>
                                                  <option value="2020">2020년</option>
                                                  <option value="2021">2021년</option>
                                              </select>
                    </div>
                    <div style="width: 100%;  ">
                      <select onchange="changecolor2();" id="school" name="school" class="school" message="학력을 선택해주세요.">
                        <option value="">학력</option>
                        <option value="대학(2, 3년제) 재학">대학(2, 3년제) 재학</option>
                        <option value="대학(2, 3년제) 졸업">대학(2, 3년제) 졸업</option>
                        <option value="대학(4년제) 재학">대학(4년제) 재학</option>
                        <option value="대학(4년제) 졸업">대학(4년제) 졸업</option>
                        <option value="대학원(석사) 재학">대학원(석사) 재학</option>
                        <option value="대학원(석사) 졸업">대학원(석사) 졸업</option>
                        <option value="대학원(박사) 재학">대학원(박사) 재학</option>
                        <option value="대학원(박사) 졸업">대학원(박사) 졸업</option>
                        <option value="고등학교 졸업">고등학교 졸업</option>
                        <option value="기타">기타</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- 이전페이지, 다음페이지 -->
                <div style="">
                  <img style="cursor: pointer;margin-left:280px;margin-top:-927px; cursor:pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(0);return false;" />
                </div>
                <!-- 이전페이지, 다음페이지 -->
                <!-- 이전페이지, 다음페이지 -->
                <center>
                  <!-- <button style="font-size:20px; margin-top:-30px; width: 405px; height:55px; border:none; cursor:pointer; background-color:#bf9b55; color:white;" type="button" onclick="show(2);return false;">다음페이지→</button> -->
                  <img type="button" style="cursor: pointer; width:420px;  " onclick="show(2);return false;" src="/new/image/hope_ideal_pc/btn_next.png" alt="">
                </center>
                <!-- <div style="margin-left:670px; display:block; margin-top:-550px; cursor:pointer;">
                  <img src="/new/image/ideal_find_test/btn_prev.png" alt="" onclick="javascript:location.href='/new/lovetest/ideal_find_test.php';" />
                </div> -->
                <!-- 이전페이지, 다음페이지 -->
              </div>
            </div>
          </form>
          <iframe src="" id="counselResult" name="counselResult" width="0" height="0" style="display:none;" frameborder="0"></iframe>
        </section>

        <!-- show(2) sjob -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
              <div class="container" style="width: 400px; padding-top:70px;">
                <span style="color:#7a5942;">1/7</span>
                <!-- <img class="progress-bar2" src=""></img> -->
                <div class="progress border">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#7a5942" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <p class="p_text">이성을 볼 때 가장 중요하게 생각하는 부분은?</p>
              <center style="">
                <ul class="radio-box">
                  <li class="list_box" onclick="show(3,'성격');">성격</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(3,'경제력');">경제력</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(3,'외모');">외모</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(3,'가치관');">가치관</li>
                </ul>

                </ul>
              </center>
              <!-- 이전페이지, 다음페이지 -->
              <div style="margin-left:280px; display:block; margin-top:-358px;">
                <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(1);return false;" />
              </div>
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
        </section>

        <!-- show(3) sjob -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
              <div class="container" style="width: 400px; padding-top:70px;">
                <span style="color:#7a5942;">2/7</span>
                <!-- <img class="progress-bar2" src=""></img> -->
                <div class="progress border">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#7a5942" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <p class="p_text">당신이 희망하는 결혼시기는?</p>
              <center>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(4,'최대한 빨리');">최대한 빨리</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(4,'몇년안에');">몇년안에</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(4,'아직은 생각이 없다');">아직은 생각이 없다</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(4,'모르겠다');">모르겠다</li>
                </ul>
              </center>
              <!-- 이전페이지, 다음페이지 -->
              <div style="margin-left:280px; display:block; margin-top:-358px;">
                <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(2);return false;" />
              </div>
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
        </section>

        <!-- show(4) sage -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
              <div class="container" style="width: 400px; padding-top:70px;">
                <span style="color:#7a5942;">3/7</span>
                <img class="progress-bar2" src=""></img>
                <div class="progress border">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#7a5942" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <p class="p_text">희망하는 상대의 나이를 선택해주세요</p>
              <center>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(5,'24세이하');">24세이하</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(5,'25세~29세');">25세~29세</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(5,'30세~34세');">30세~34세</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(5,'35세~39세');">35세~39세</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(5,'40세~44세');">40세~44세</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(5,'45세~49세');">45세~49세</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(5,'50세~55세');">50세~55세</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(5,'56세이상');">56세이상</li>
                </ul>
              </center>
              <!-- 이전페이지, 다음페이지 -->
              <div style="margin-left:280px; display:block; margin-top:-550px;">
                <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(3);return false;" />
              </div>
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
        </section>

        <!-- show(5) scm -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
              <div class="container" style="width: 400px; padding-top:70px;">
                <span style="color:#7a5942;">4/7</span>
                <div class="progress border">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#7a5942" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <p class="p_text">희망하는 상대의 신장을 선택해주세요</p>
              <center>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(6,'157cm이하');">157cm 이하</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(6,'158~162cm');">158~162cm</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(6,'163~167cm');">163~167cm</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(6,'168~172cm');">168~172cm</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(6,'173~177cm');">173~177cm</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(6,'178~182cm');">178~182cm</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box list_one" onclick="show(6,'183cm이상');">183cm 이상</li>
                </ul>
              </center>
              <!-- 이전페이지, 다음페이지 -->
              <div style="margin-left:280px; display:block; margin-top:-550px;">
                <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(4);return false;" />
              </div>
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
        </section>

        <!-- show(6) scm -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
              <div class="container" style="width: 400px; padding-top:70px;">
                <span style="color:#7a5942;">5/7</span>
                <div class="progress border">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#7a5942" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <p class="p_text">희망하는 상대의 학력을 선택해주세요</p>
              <center>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(7,'고졸이상');">고졸이상</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(7,'대학교(2,3년제)이상');">대학교(2,3년제)졸업</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(7,'대졸이상');">대졸이상</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(7,'대학원이상');">대학원이상</li>
                </ul>
              </center>
              <!-- 이전페이지, 다음페이지 -->
              <div style="margin-left:280px; display:block; margin-top:-358px;">
                <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(5);return false;" />
              </div>
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
        </section>

        <!-- show(7) sjob -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
              <div class="container" style="width: 400px; padding-top:70px;">
                <span style="color:#7a5942;">6/7</span>
                <!-- <img class="progress-bar2" src=""></img> -->
                <div class="progress border">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#7a5942" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <p class="p_text">희망하는 상대의 직업을 선택해주세요</p>
              <center>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(8,'무관');">무관</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(8,'사무,금융직');">사무,금융직</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(8,'기술,의료,언론');">기술,의료,언론</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(8,'교사,강사,공무원');">교사,강사,공무원</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(8,'자영업,사업,특수직');">자영업,사업,특수직</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(8,'예능계,프리랜서,서비스');">예능계,프리랜서,서비스</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(8,'유학생,석박사');">유학생,석박사</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(8,'전문직기타');">전문직기타</li>
                </ul>
              </center>
              <!-- 이전페이지, 다음페이지 -->
              <div style="margin-left:280px; display:block; margin-top:-550px;">
                <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(6);return false;" />
              </div>
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
        </section>

        <!-- show(8) sschool -->
        <section id="lovetest">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/section_bg.jpg'); height:600px;background-position:center;">
              <div class="container" style="width: 400px; padding-top:70px;">
                <span style="color:#7a5942;">7/7</span>
                <div class="progress border">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#7a5942" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <p class="p_text">희망하는 상대의 연봉을 선택해주세요</p>
              <center>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(9,'무관');">무관</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(9,'3000~');">3000~</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box" onclick="show(9,'4000~');">4000~</li>&nbsp;&nbsp;
                  <li class="list_box" onclick="show(9,'5000~');">5000~</li>
                </ul>
                <ul class="radio-box">
                  <li class="list_box list_one" onclick="show(9,'1억이상');">1억이상</li>&nbsp;&nbsp;
                </ul>
              </center>
              <!-- 이전페이지, 다음페이지 -->
              <div style="margin-left:280px; display:block; margin-top:-447px;">
                <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(7);return false;" />
              </div>
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
        </section>

        <!-- show(10) loading section -->
        <section id="lovetest" class="loading_page">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/b_bg.jpg'); height:600px;background-position:center;">

              <div>
                <center>
                  <span style="height:150px;display:block"></span>
                  <!-- <img style="width:50%; ; cursor:pointer; height:150px;" src="/new/image/hope_ideal_pc/loading_gif.gif" alt=""  /> -->
                  <div class="lds-spinner" onclick="show(10);return false;">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <p class="" style="padding-top:25px; font-size:24px;color:#666;font-family: 'Do Hyeon', sans-serif;"></p>
                  </div>
                  <p class="" style="font-size:36px;color:#666;padding-top:100px;font-family: 'Do Hyeon', sans-serif;">결과를 확인 중입니다.</p>
                </center>
              </div>
              <!-- 이전페이지, 다음페이지 -->
              <!-- <div style="margin-left:280px; display:block; margin-top:-500px;">
                <img  style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_re.png" alt="" onclick="show(0);return false;" />
              </div> -->
              <!-- 이전페이지, 다음페이지 -->
            </div>
          </div>
          <iframe src="" id="counselResult" name="counselResult" width="0" height="0" style="display:none;" frameborder="0"></iframe>
        </section>

        <!-- show(9) result section -->
        <div id="lastpage">
          <section id="lovetest" class="result_page">
            <div class="join-charge">
              <div class="" style="background-image: url('/new/image/hope_ideal_pc/success_bg.jpg'); height:600px;background-position:center;">
                <div class="textbox">
                  <p class="top" style="margin-top:-100px;margin-left:160px">
                    <span id="names">당신의 희망조건에 맞는 <br>
                      <b>프로필 추천이 완료</b>되었습니다.
                  </p>
                  <p class="bottom" style="margin-top:-70px">
                  </p>
                </div>
                <div style="display:block; margin-left:280px; margin-top:-360px; cursor:pointer;">
                  <img style="cursor: pointer;" src="/new/image/hope_ideal_pc/btn_prev.png" alt="" onclick="show(8);return false;" />
                </div>
                <img id="kakao_success" style=" height:80px; margin-top:250px; cursor:pointer; margin-left:765px;" src="/new/image/hope_ideal_pc/btn_kakao.png" alt="" onclick="javascript:success();" />
              </div>
            </div>
          </section>
        </div>


        <!-- show(11) kakao section -->
        <section id="lovetest" class="">
          <div class="join-charge">
            <div class="" style="background-image: url('/new/image/hope_ideal_pc/lastpage.png'); height:600px;background-position:center;">
              <center>
                <img style="cursor: pointer; margin-top:360px;border:1px solid #7a5942;padding:20px;" src="/new/image/hope_ideal_pc/btn_re.png" alt="" onclick="window.location.reload();" />
              </center>
            </div>
        </section>

      </div>
    </div>
  </div>

  <!--  li 갯수 -->
  <!-- *세로 정렬 li 2개* -->
  <!-- <ul class="radio-box number num2">
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
            </ul> -->

  <!-- *세로 정렬 li 3개* -->
  <!-- <ul class="radio-box number num3" >
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
            </ul> -->

  <!-- *세로 정렬 li 4개* -->
  <!-- <ul class="radio-box number num4">
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
            </ul> -->

  <!-- *가로 정렬 li 4개* -->
  <!-- <ul class="radio-box number h_num4">
                <div class="high">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
                <div class="low">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
            </ul> -->

  <!-- *가로 정렬 li 6개* -->
  <!-- <ul class="radio-box number num6">
                <div class="one">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
                <div class="two">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
                <div class="three">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
            </ul> -->

  <!-- *가로 정렬 li 8개* -->
  <!-- <ul class="radio-box number num8">
            <div class="one">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
                <div class="two">
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
                <div class="three">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
                <div class="four">
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                    <li class="list_box" onclick="show(0,'lorem');">lorem</li>
                </div>
            </ul> -->

  <!-- footer start -->
  <div class="footer">
    <script>
<!--
var microad_blade_gl = microad_blade_gl || { 'params' : new Array(), 'complete_map' : new Object() };
(function() {
var param = {'co_account_id' : '11895', 'group_id' : '', 'country_id' : '11', 'ver' : '2.1.0'};
microad_blade_gl.params.push(param);
var src = (location.protocol == 'https:') ? 'https://d-cache.microadinc.com/js/blade_track_gl.js' : 'http://d-cache.microadinc.com/js/blade_track_gl.js';
var bs = document.createElement('script');
bs.type = 'text/javascript'; bs.async = true;
bs.charset = 'utf-8'; bs.src = src;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(bs, s);
})();
-->
</script>
<!-- Withpang Tracker v2.0 start -->
<script type="text/javascript">
<!--
	(function (w, d, i) {
		w[i]={
			sc : (encodeURIComponent("")),
			form : (encodeURIComponent(d.referrer)),
			url : (encodeURIComponent(w.location.href))
		};

		if(w[i]) {
			var _ar = _ar || [];
			var _s = "log.dreamsearch.or.kr/servlet/rf";
			for(x in w[i]) _ar.push(x + "=" + w[i][x]);
			(new Image).src = d.location.protocol +"//"+ _s +"?"+ _ar.join("&");
		}
	})(window, document, "wp_rf");
//-->
</script>
<!-- Withpang Tracker v2.0 end -->

    <!-- RealClick 리얼타겟팅 Checking Script V.20130115 Start-->
    <script type='text/javascript'>
    function loadrtgJS(b,c){var d=document.getElementsByTagName("head")[0],a=document.createElement("script");a.type="text/javascript";null!=c&&(a.charset="euc-kr");a.src=b;d.appendChild(a)}function load_rtg(b){loadrtgJS(("https:"==document.location.protocol?" https://":" http://")+b,"euc-kr")}load_rtg("event.realclick.co.kr/rtarget/rtget.js?rtcode=noblesh");
    </script>
    <!-- RealClick 리얼타겟팅 Checking Script V.20130115 End -->
   
   
     <!-- LOGGER(TM) TRACKING SCRIPT V.40 FOR logger.co.kr / 100188 : COMBINE TYPE / DO NOT ALTER THIS SCRIPT. -->
      <script type="text/javascript">var _TRK_LID = "100188";var _L_TD = "ncptrk.logger.co.kr";var _TRK_CDMN = ".isoohyun.co.kr";</script>
      <script type="text/javascript">var _CDN_DOMAIN = location.protocol == "https:" ? "https://fs.bizspring.net" : "http://fs.bizspring.net"; 
      (function (b, s) { var f = b.getElementsByTagName(s)[0], j = b.createElement(s); j.async = true; j.src = '//fs.bizspring.net/fsn/bstrk.1.js'; f.parentNode.insertBefore(j, f); })(document, 'script');
      </script>
      <noscript><img alt="Logger Script" width="1" height="1" src="http://ncptrk.logger.co.kr/tracker.1.tsp?u=100188&amp;js=N"/></noscript>
      <!-- END OF LOGGER TRACKING SCRIPT -->

    
    

    <!-- Google Start-->
    <!-- Google Code for 14_12_10 &#47532;&#53440;&#44191;_PC -->
    <!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 977053292;
    var google_conversion_label = "nm3nCKGOmFgQ7Mzy0QM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/977053292/?value=1.00&amp;currency_code=KRW&amp;label=nm3nCKGOmFgQ7Mzy0QM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <!-- Google End-->

        
    <!-- DDN Start-->
    <script type="text/javascript">
    var roosevelt_params = {
        retargeting_id:'xsKY8Kv6X5uQ4kI--dDaIA00',
        tag_label:'WmYFSuP9QfWApFXhA3Kvlw'
    };
    </script>
    <script type="text/javascript" src="//adimg.daumcdn.net/rt/roosevelt.js"></script>
    <!-- DDN End-->
        
         <script type="text/javascript" src="//wcs.naver.net/wcslog.js"> </script> 
    <script type="text/javascript"> 
    if (!wcs_add) var wcs_add={};
    wcs_add["wa"] = "s_38836e68f8c3";
    if (!_nasa) var _nasa={};
    wcs.inflow();
    wcs_do(_nasa);
    </script>
    <!-- NAVER End-->	     	

    <!-- AceCounter Log Gathering Script V.7.5.2017020801 20180705 수정됨-->
    <script language='javascript'>
    	var _AceGID=(function(){var Inf=['gtp16.acecounter.com','8080','BH2A42485273555','AW','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;var _T=new Image(0,0);if(_CI.join('.').indexOf(Inf[3])<0){ _T.src =( location.protocol=="https:"?"https://"+Inf[0]:"http://"+Inf[0]+":"+Inf[1]) +'/?cookie'; _CI.push(Inf);  _N=_CI.length; } return {o: _N,val:_CI}; })();
    	var _AceCounter=(function(){var G=_AceGID;var _sc=document.createElement('script');var _sm=document.getElementsByTagName('script')[0];if(G.o!=0){var _A=G.val[G.o-1];var _G=(_A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];var _U=(_A[5]).replace(/\,/g,'_');_sc.src=(location.protocol.indexOf('http')==0?location.protocol:'http:')+'//cr.acecounter.com/Web/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&gd='+_G+'&gp='+_A[1]+'&up='+_U+'&rd='+(new Date().getTime());_sm.parentNode.insertBefore(_sc,_sm);return _sc.src;}})();
    </script>
    <noscript><img src='http://gtp16.acecounter.com:8080/?uid=BH2A42485273555&je=n&' border='0' width='0' height='0' alt=''></noscript>	
    <!-- AceCounter Log Gathering Script End -->


    <!-- NSM Log Gathering Script V.70.2012031601 -->
    <script language='javascript'>
    if( typeof HL_GUL == 'undefined' ){

    var HL_GUL = 'ngc6.nsm-corp.com';var HL_GPT='80'; var _AIMG = new Image(); var _bn=navigator.appName; var _PR = location.protocol=="https:"?"https://"+HL_GUL:"http://"+HL_GUL+":"+HL_GPT;if( _bn.indexOf("Netscape") > -1 || _bn=="Mozilla"){ setTimeout("_AIMG.src = _PR+'/?cookie';",1); } else{ _AIMG.src = _PR+'/?cookie'; };
    var _JV="AMZ2014031401";//script Version
    var HL_GCD = 'CN3B37543312625'; // gcode
    var _UD='undefined';var _UN='unknown';
    function _IX(s,t){return s.indexOf(t)}
    function _GV(b,a,c,d){ var f = b.split(c);for(var i=0;i<f.length; i++){ if( _IX(f[i],(a+d))==0) return f[i].substring(_IX(f[i],(a+d))+(a.length+d.length),f[i].length); }	return ''; }
    function _XV(b,a,c,d,e){ var f = b.split(c);var g='';for(var i=0;i<f.length; i++){ if( _IX(f[i],(a+d))==0){ try{eval(e+"=f[i].substring(_IX(f[i],(a+d))+(a.length+d.length),f[i].length);");}catch(_e){}; continue;}else{ if(g) g+= '&'; g+= f[i];}; } return g;};
    function _NOB(a){return (a!=_UD&&a>0)?new Object(a):new Object()}
    function _NIM(){return new Image()}
    function _IL(a){return a!=_UD?a.length:0}
    function _ILF(a){ var b = 0; try{eval("b = a.length");}catch(_e){b=0;}; return b; }
    function _VF(a,b){return a!=_UD&&(typeof a==b)?1:0}
    function _LST(a,b){if(_IX(a,b)>0){ a=a.substring(0,_IX(a,b));}; return a;}
    function _CST(a,b){if(_IX(a,b)>0) a=a.substring(_IX(a,b)+_IL(b),_IL(a));return a}
    function _UL(a){a=_LST(a,'#');a=_CST(a,'://');return a}
    function _AA(a){return new Array(a?a:0)}
    function _IDV(a){return (typeof a!=_UD)?1:0}
    if(!_IDV(HL_GUL)) var HL_GUL ='ngc6.nsm-corp.com'; 
    if(!_IDV(HL_GPT)) var HL_GPT ='80';
    _DC = document.cookie ;
    function _AGC(nm) { var cn = nm + "="; var nl = cn.length; var cl = _DC.length; var i = 0; while ( i < cl ) { var j = i + nl; if ( _DC.substring( i, j ) == cn ){ var val = _DC.indexOf(";", j ); if ( val == -1 ) val = _DC.length; return unescape(_DC.substring(j, val)); }; i = _DC.indexOf(" ", i ) + 1; if ( i == 0 ) break; } return ''; }
    function _ASC( nm, val, exp ){var expd = new Date(); if ( exp ){ expd.setTime( expd.getTime() + ( exp * 1000 )); document.cookie = nm+"="+ escape(val) + "; expires="+ expd.toGMTString() +"; path="; }else{ document.cookie = nm + "=" + escape(val);};}
    function SetUID() {     var newid = ''; var d = new Date(); var t = Math.floor(d.getTime()/1000); newid = 'UID-' + t.toString(16).toUpperCase(); for ( var i = 0; i < 16; i++ ){ var n = Math.floor(Math.random() * 16).toString(16).toUpperCase(); newid += n; }       return newid; }
    var _FCV = _AGC("ACEFCID"); if ( !_FCV ) { _FCV = SetUID(); _ASC( "ACEFCID", _FCV , 86400 * 30 * 12 ); _FCV=_AGC("ACEFCID");}
    var _AIO = _NIM(); var _AIU = _NIM();  var _AIW = _NIM();  var _AIX = _NIM();  var _AIB = _NIM();  var __hdki_xit = _NIM();
    var _gX='/?xuid='+HL_GCD+'&sv='+_JV,_gF='/?fuid='+HL_GCD+'&sv='+_JV,_gU='/?uid='+HL_GCD+'&sv='+_JV+"&FCV="+_FCV,_gE='/?euid='+HL_GCD+'&sv='+_JV,_gW='/?wuid='+HL_GCD+'&sv='+_JV,_gO='/?ouid='+HL_GCD+'&sv='+_JV,_gB='/?buid='+HL_GCD+'&sv='+_JV;

    var _d=_rf=_end=_fwd=_arg=_xrg=_av=_bv=_rl=_ak=_xrl=_cd=_cu=_bz='',_sv=11,_tz=20,_ja=_sc=_ul=_ua=_UA=_os=_vs=_UN,_je='n',_bR='blockedReferrer';
    if(!_IDV(_CODE)) var _CODE = '' ;
    _tz = Math.floor((new Date()).getTimezoneOffset()/60) + 29 ;if( _tz > 24 ) _tz = _tz - 24 ;
    // Javascript Variables
    if(!_IDV(_amt)) var _amt=0 ;if(!_IDV(_pk)) var _pk='' ;if(!_IDV(_pd)) var _pd='';if(!_IDV(_ct)) var _ct='';
    if(!_IDV(_ll)) var _ll='';if(!_IDV(_ag)) var _ag=0;	if(!_IDV(_id)) var _id='' ;if(!_IDV(_mr)) var _mr = _UN;
    if(!_IDV(_gd)) var _gd=_UN;if(!_IDV(_jn)) var _jn='';if(!_IDV(_jid)) var _jid='';if(!_IDV(_skey)) var _skey='';
    if(!_IDV(_ud1)) var _ud1='';if(!_IDV(_ud2)) var _ud2='';if(!_IDV(_ud3)) var _ud3='';
    if( !_ag ){ _ag = 0 ; }else{ _ag = parseInt(_ag); }
    if( _ag < 0 || _ag > 150 ){ _ag = 0; }
    if( _gd != 'man' && _gd != 'woman' ){ _gd =_UN;};if( _mr != 'married' && _mr != 'single' ){ _mr =_UN;};if( _jn != 'join' && _jn != 'withdraw' ){ _jn ='';};
    if( _ag > 0 || _gd == 'man' || _gd == 'woman'){ _id = 'undefined_member';}
    if( _jid != '' ){ _jid = 'undefined_member'; }
    _je = (navigator.javaEnabled()==true)?'1':'0';_bn=navigator.appName;
    if(_bn.substring(0,9)=="Microsoft") _bn="MSIE";
    _bN=(_bn=="Netscape"),_bI=(_bn=="MSIE"),_bO=(_IX(navigator.userAgent,"Opera")>-1);if(_bO)_bI='';
    _bz=navigator.appName; _pf=navigator.platform; _av=navigator.appVersion; _bv=parseFloat(_av) ;
    if(_bI){_cu=navigator.cpuClass;}else{_cu=navigator.oscpu;};
    if((_bn=="MSIE")&&(parseInt(_bv)==2)) _bv=3.01;_rf=document.referrer;var _prl='';var _frm=false;
    function _WO(a,b,c){window.open(a,b,c)}
    function ACEF_Tracking(a,b,c,d,e,f){ if(!_IDV(b)){var b = 'FLASH';}; if(!_IDV(e)){ var e = '0';};if(!_IDV(c)){ var c = '';};if(!_IDV(d)){ var d = '';}; var a_org=a; b = b.toUpperCase(); var b_org=b;	if(b_org=='FLASH_S'){ b='FLASH'; }; if( typeof CU_rl == 'undefined' ) var CU_rl = _PT(); if(_IDV(HL_GCD)){ var _AF_rl = document.URL; if(a.indexOf('://') < 0  && b_org != 'FLASH_S' ){ var _AT_rl  = ''; if( _AF_rl.indexOf('?') > 0 ){ _AF_rl = _AF_rl.substring(0,_AF_rl.indexOf('?'));}; var spurl = _AF_rl.split('/') ;	for(var ti=0;ti < spurl.length ; ti ++ ){ if( ti == spurl.length-1 ){ break ;}; if( _AT_rl  == '' ){ _AT_rl  = spurl[ti]; }else{ _AT_rl  += '/'+spurl[ti];}; }; var _AU_arg = ''; if( a.indexOf('?') > 0 ){ _AU_arg = a.substring(a.indexOf('?'),a.length); a = a.substring(0,a.indexOf('?')); }; var spurlt = a.split('/') ; if( spurlt.length > 0 ){ a = spurlt[spurlt.length-1];}; a = _AT_rl +'/'+a+_AU_arg;	_AF_rl=document.URL;}; _AF_rl = _AF_rl.substring(_AF_rl.indexOf('//')+2,_AF_rl.length); if( typeof f == 'undefined' ){ var f = a }else{f='http://'+_AF_rl.substring(0,_AF_rl.indexOf('/')+1)+f}; var _AS_rl = CU_rl+'/?xuid='+HL_GCD+'&url='+escape(_AF_rl)+'&xlnk='+escape(f)+'&fdv='+b+'&idx='+e+'&'; var _AF_img = new Image(); _AF_img.src = _AS_rl; if( b_org == 'FLASH' && a_org != '' ){ if(c==''){ window.location.href = a_org; }else{ if(d==''){ window.open(a_org,c);}else{ window.open(a_org,c,d); };};	};} ; }
    function _PT(){return location.protocol=="https:"?"https://"+HL_GUL:"http://"+HL_GUL+":"+HL_GPT}
    function _EL(a,b,c){if(a.addEventListener){a.addEventListener(b,c,false)}else if(a.attachEvent){a.attachEvent("on"+b,c)} }
    function _NA(a){return new Array(a?a:0)}
    function HL_ER(a,b,c,d){_xrg=_PT()+_gW+"&url="+escape(_UL(document.URL))+"&err="+((typeof a=="string")?a:"Unknown")+"&ern="+c+"&bz="+_bz+"&bv="+_vs+"&RID="+Math.random()+"&";
    if(_IX(_bn,"Netscape") > -1 || _bn == "Mozilla"){ setTimeout("_AIW.src=_xrg;",1); } else{ _AIW.src=_xrg; } }
    function HL_PL(a){if(!_IL(a))a=_UL(document.URL);
    _arg = _PT()+_gU;
    if( typeof HL_ERR !=_UD && HL_ERR == 'err'){ _arg = _PT()+_gE;};
    if( _ll.length > 0 ) _arg += "&md=b";
    _AIU.src = _arg+"&url="+escape(a)+"&ref="+escape(_rf)+"&cpu="+_cu+"&bz="+_bz+"&bv="+_vs+"&os="+_os+"&dim="+_d+"&cd="+_cd+"&je="+_je+"&jv="+_sv+"&tz="+_tz+"&ul="+_ul+"&ad_key="+escape(_ak)+"&skey="+escape(_skey)+"&age="+_ag+"&gender="+_gd+"&marry="+_mr+"&join="+_jn+"&member_key="+_id+"&jid="+_jid+"&udf1="+_ud1+"&udf2="+_ud2+"&udf3="+_ud3+"&amt="+_amt+"&frwd="+_fwd+"&pd="+escape(_pd)+"&ct="+escape(_ct)+"&ll="+escape(_ll)+"&RID="+Math.random()+"&";
    setTimeout("",300);
    }
    _EL(window,"error",HL_ER); //window Error
    if( typeof window.screen == 'object'){_sv=12;_d=screen.width+'*'+screen.height;_sc=_bI?screen.colorDepth:screen.pixelDepth;if(_sc==_UD)_sc=_UN;}
    _ro=_NA();if(_ro.toSource||(_bI&&_ro.shift))_sv=13;
    if( top && typeof top == 'object' &&_ILF(top.frames)){eval("try{_rl=top.document.URL;}catch(_e){_rl='';};"); if( _rl != document.URL ) _frm = true;};
    if(_frm){ eval("try{_prl = top.document.URL;}catch(_e){_prl=_bR;};"); if(_prl == '') eval("try{_prl=parent.document.URL;}catch(_e){_prl='';};"); 
    if( _IX(_prl,'#') > 0 ) _prl=_prl.substring(0,_IX(_prl,'#')); 
    _prl=_LST(_prl,'#');
    if( _IX(_rf,'#') > 0 ) _rf=_rf.substring(0,_IX(_rf,'#')); 
    if( _IX(_prl,'/') > 0 && _prl.substring(_prl.length-1,1) == '/' ) _prl =_prl.substring(0,_prl.length-1);
    if( _IX(_rf,'/') > 0 && _rf.substring(_rf.length-1,1) == '/' ) _rf =_rf.substring(0,_rf.length-1);
    if( _rf == '' ) eval("try{_rf=parent.document.URL;}catch(_e){_rf=_bR;}"); 
    if(_rf==_bR||_prl==_bR){ _rf='',_prl='';}; if( _rf == _prl ){ eval("try{_rf=top.document.referrer;}catch(_e){_rf='';}"); 
    if( _rf == ''){ _rf = 'bookmark';};if( _IX(document.cookie,'ACEN_CK='+escape(_rf)) > -1 ){ _rf = _prl;} 
    else{ 
    if(_IX(_prl,'?') > 0){ _ak = _prl.substring(_IX(_prl,'?')+1,_prl.length); _prl = _ak; }
    if( _IX(_prl.toUpperCase(),'OVRAW=') >= 0 ){ _ak = 'src=overture&kw='+_GV(_prl.toUpperCase(),'OVRAW','&','=')+'&OVRAW='+_GV(_prl.toUpperCase(),'OVRAW','&','=')+'&OVKEY='+_GV(_prl.toUpperCase(),'OVKEY','&','=')+'&OVMTC='+_GV(_prl.toUpperCase(),'OVMTC','&','=').toLowerCase() }; 
    if(_IX(_prl,'gclid=') >= 0 ){ _ak='src=adwords'; }; if(_IX(_prl,'DWIT=') >= 0 ){_ak='src=dnet_cb';}; 
    if( _IX(_prl,"rcsite=") >= 0 &&  _IX(_prl,"rctype=") >= 0){ _prl += '&'; _ak = _prl.substring(_IX(_prl,'rcsite='),_prl.indexOf('&',_IX(_prl,'rcsite=')+7))+'-'+_prl.substring(_IX(_prl,'rctype=')+7,_prl.indexOf('&',_IX(_prl,'rctype=')+7))+'&'; };
    if( _GV(_prl,'src','&','=') ) _ak += '&src='+_GV(_prl,'src','&','='); if( _GV(_prl,'kw','&','=') ) _ak += '&kw='+_GV(_prl,'kw','&','='); 
    if( _IX(_prl, 'FWDRL')> 0 ){ _prl = _XV(_prl,'FWDRL','&','=','_rf'); _rf = unescape(_rf); }; if( _IX(_ak,'FWDRL') > 0 ){_ak = _XV(_ak,'FWDRL','&','=','_prl');}; if( typeof FD_ref=='string' && FD_ref != '' ) _rf = FD_ref; _fwd = _GV(_prl,'FWDIDX','&','=');
    document.cookie='ACEN_CK='+escape(_rf)+';path=/;'; 
    }; 
    if(document.URL.indexOf('?')>0 && ( _IX(_ak,'rcsite=') < 0 && _IX(_ak,'NVAR=') < 0 && _IX(_ak,'src=') < 0 && _IX(_ak,'source=') < 0 && _IX(_ak,'DMCOL=') < 0 ) ) _ak =document.URL.substring(document.URL.indexOf('?')+1,document.URL.length); }; 
    }
    else{ 
    _rf=_LST(_rf,'#');_ak=_CST(document.URL,'?');
    if( _IX(_ak,"rcsite=") > 0 &&  _IX(_ak,"rctype=") > 0){
        _ak += '&';
        _ak = _ak.substring(_IX(_ak,'rcsite='),_ak.indexOf('&',_IX(_ak,'rcsite=')+7))+'-'+_ak.substring(_IX(_ak,'rctype=')+7,_ak.indexOf('&',_IX(_ak,'rctype=')+7))+'&';
    }
    }
    _rl=document.URL;
    var _trl = _rl.split('?'); if(_trl.length>1){ if( _IX(_trl[1],'FWDRL') > 0 ){ _trl[1] = _XV(_trl[1],'FWDRL','&','=','_rf'); _rf = unescape(_rf); _fwd = _GV(_trl[1],'FWDIDX','&','='); _rl=_trl.join('?'); };  if( _IX(_ak,'FWDRL') > 0 ){ _ak = _XV(_ak,'FWDRL','&','=','_prl');}; }; if( typeof FD_ref=='string' && FD_ref != '' ) _rf = FD_ref;
    if( _rf.indexOf('googlesyndication.com') > 0 ){ 
    var _rf_idx = _rf.indexOf('&url=');  if( _rf_idx > 0 ){ var _rf_t = unescape(_rf.substring(_rf_idx+5,_rf.indexOf('&',_rf_idx+5)));  if( _rf_t.length > 0 ){ _rf = _rf_t ;};  };  };
    _rl = _UL(_rl); _rf = _UL(_rf);

    if( typeof _rf_t != 'undefined' && _rf_t != '' ) _rf = _rf_t ;
    if( typeof _ak_t != 'undefined' && _ak_t != '' ) _ak = _ak_t ;

    if( typeof _rf==_UD||( _rf == '' )) _rf = 'bookmark' ;_cd=(_bI)?screen.colorDepth:screen.pixelDepth;
    _UA = navigator.userAgent;_ua = navigator.userAgent.toLowerCase();
    if (navigator.language){  _ul = navigator.language.toLowerCase();}else if(navigator.userLanguage){  _ul = navigator.userLanguage.toLowerCase();};

    _st = _IX(_UA,'(') + 1;_end = _IX(_UA,')');_str = _UA.substring(_st, _end);_if = _str.split('; ');_cmp = _UN ;

    if(_bI){ _cmp = navigator.appName; _str = _if[1].substring(5, _if[1].length); _vs = (parseFloat(_str)).toString();} 
    else if ( (_st = _IX(_ua,"opera")) > 0){ _cmp = "Opera" ;_vs = _ua.substring(_st+6, _ua.indexOf('.',_st+6)); } 
    else if ((_st = _IX(_ua,"firefox")) > 0){_cmp = "Firefox"; _vs = _ua.substring(_st+8, _ua.indexOf('.',_st+8)); } 
    else if ((_st = _IX(_ua,"netscape6")) > 0){ _cmp = "Netscape"; _vs = _ua.substring(_st+10, _ua.length);  
    if ((_st = _IX(_vs,"b")) > 0 ) { _str = _vs.substring(0,_IX(_vs,"b")); _vs = _str ;  };}
    else if ((_st = _IX(_ua,"netscape/7")) > 0){  _cmp = "Netscape";  _vs = _ua.substring(_st+9, _ua.length);  if ((_st = _IX(_vs,"b")) > 0 ){ _str = _vs.substring(0,_IX(_vs,"b")); _vs = _str;};
    }
    else{
    if (_IX(_ua,"gecko") > 0){ if(_IX(_ua,"safari")>0){ _cmp = "Safari";_ut = _ua.split('/');for( var ii=0;ii<_ut.length;ii++) if(_IX(_ut[ii],'safari')>0){ _vst = _ut[ii].split(' '); _vs = _vst[0];} }else{ _cmp = navigator.vendor;  } } else if (_IX(_ua,"nav") > 0){ _cmp = "Netscape Navigator";}else{ _cmp = navigator.appName;}; _av = _UA ; 
    }
    if (_IX(_vs,'.')<0){  _vs = _vs + '.0'}
    _bz = _cmp; 


    var nhn_ssn={uid:HL_GCD,g:HL_GUL,p:HL_GPT,s:_JV,rl:_rl,m:[],run:nhn_ssn?nhn_ssn.uid:this.uid};
    function CN3B37543312625(){var f={e:function(s,t){return s.indexOf(t);},d:function(s){var r=String(s); return r.toUpperCase();},f:function(o){var a;a=o;if(f.d(a.tagName)=='A' || f.d(a.tagName)=='AREA'){return a;}else if(f.d(a.tagName)=='BODY'){return 0;}else{return f.f(a.parentNode);} },n:function(s){var str=s+"";var ret="";for(i = 0; i < str.length; i++){	var at = str.charCodeAt(i);var ch=String. fromCharCode(at);	if(at==10 || at==32){ret+=''+ch.replace(ch,'');}else if (at==34||at==39|at==35){ret+=''+ch.replace(ch,' ');	}else{ret+=''+ch;}  } return ret;},ea:function(c,f){var wd;if(c=='click'){wd=window.document;}else{wd=window;}if(wd.addEventListener){wd.addEventListener(c,f,false)}else if(wd.attachEvent){wd.attachEvent("on"+c,f)} } };
    var p={h:location.host,p:(location.protocol=='https:')?"https://"+nhn_ssn.g:"http://"+nhn_ssn.g+":"+nhn_ssn.p,s:'/?xuid='+nhn_ssn.uid+'&sv='+nhn_ssn.s,u:function(){var r='';r=String(nhn_ssn.rl);var sh=r.indexOf('#'); if(sh!=-1){r=r.substring(0,sh);}return r+'';},ol:new Image(0,0),xL:function(x){if(typeof(Amz_T_e)==s.u){ p.ol.src=p.p+p.s+'&url='+escape(p.u())+'&xlnk='+escape(x)+'&xidx=0'+'&crn='+Math.random()+'&';nhn_ssn.m.push(p.ol);} } };
    var s={Lp:'a.tagName=="B" || a.tagName=="I" || a.tagName== "U" || a.tagName== "FONT" || a.tagName=="I" || a.tagName=="STRONG"'  ,f:'function',	j:'javascript:',u:'undefined'};var c={Run:function(){f.ea('click',this.ec);},ec:function(e){var ok='';var m = document.all ? event.srcElement : e.target;var a=m;var o=m.tagName;if(o=="A" || o=="AREA" || o=="IMG" || eval(s.Lp)){ok=c.lc(m);if(ok.length != 0){p.xL(unescape(ok));};	};},lc:function(o){ try{var ar='';var obj;obj=f.f(o);if(typeof obj==s.u){return '';};if(typeof(obj.href)==s.u){return '';};ar = String(obj.href);if(ar.length == 0){return '';};ar=f.n(ar);if(f.e(ar,'void(') == -1 && f.e(ar,'void0') == -1){	return ar;}else{return s.j + 'void(0)';};return '';}catch(er){return '';} } };
    if(p.u().charAt(1) != ':'){if(nhn_ssn.uid!=nhn_ssn.run){c.Run(); } };
    };eval(nhn_ssn.uid + '();');


    if( _IX(_pf,_UD) >= 0 || _pf ==  '' ){ _os = _UN ;}else{ _os = _pf ; };
    if( _IX(_os,'Win32') >= 0 ){if( _IX(_av,'98')>=0){ _os = 'Windows 98';}else if( _IX(_av,'95')>=0 ){ _os = 'Windows 95';}else if( _IX(_av,'Me')>=0 ){ _os = 'Windows Me';}else if( _IX(_av,'NT')>=0 ){ _os = 'Windows NT';}else{ _os = 'Windows';};if( _IX(_ua,'nt 5.0')>=0){ _os = 'Windows 2000';};if( _IX(_ua,'nt 5.1')>=0){_os = 'Windows XP';if( _IX(_ua,'sv1') > 0 ){_os = 'Windows XP SP2';};};if( _IX(_ua,'nt 5.2')>=0){_os ='Windows Server 2003';};if( _IX(_ua,'nt 6.0')>=0){_os ='Windows Vista';};if( _IX(_ua,'nt 6.1')>=0){_os ='Windows 7';};};
    _pf_s = _pf.substring(0,4);if( _pf_s == 'Wind'){if( _pf_s == 'Win1'){_os = 'Windows 3.1';}else if( _pf_s == 'Mac6' ){ _os = 'Mac';}else if( _pf_s == 'MacO' ){ _os ='Mac';}else if( _pf_s == 'MacP' ){_os='Mac';}else if(_pf_s == 'Linu'){_os='Linux';}else if( _pf_s == 'WebT' ){ _os='WebTV';}else if(  _pf_s =='OSF1' ){ _os ='Compaq Open VMS';}else if(_pf_s == 'HP-U' ){ _os='HP Unix';}else if(  _pf_s == 'OS/2' ){ _os = 'OS/2' ;}else if( _pf_s == 'AIX4' ){ _os = 'AIX';}else if( _pf_s == 'Free' ){ _os = 'FreeBSD';}else if( _pf_s == 'SunO' ){ _os = 'SunO';}else if( _pf_s == 'Drea' ){ _os = 'Drea'; }else if( _pf_s == 'Plan' ){ _os = 'Plan'; }else{ _os = _UN; };};
    if( _cu == 'x86' ){ _cu = 'Intel x86';}else if( _cu == 'PPC' ){ _cu = 'Power PC';}else if( _cu == '68k' ){ _cu = 'Motorola 680x';}else if( _cu == 'Alpha' ){ _cu = 'Compaq Alpa';}else if( _cu == 'Arm' ){ _cu = 'ARM';}else{ _cu = _UN;};if( _d == '' || typeof _d==_UD ){ _d = '0*0';}

    HL_PL(_rl); // Site Logging
    }
    </script>
    <!-- NSM Log Gathering Script End -->


    



    <!-- adinsight 공통스크립트 start -->
    <script type="text/javascript">
    var TRS_AIDX = 9194;
    var TRS_PROTOCOL = document.location.protocol;
    document.writeln();
    var TRS_URL = TRS_PROTOCOL + '//' + ((TRS_PROTOCOL=='https:')?'analysis.adinsight.co.kr':'adlog.adinsight.co.kr') +  '/emnet/trs_esc.js';
    document.writeln("<scr"+"ipt language='javascript' src='" + TRS_URL + "'></scr"+"ipt>");
    </script>
    <!-- adinsight 공통스크립트 end -->



	
	<!--TOAST eXchange-->
<script type="text/javascript" src="//static.tagmanager.toast.com/tag/view/581"></script>
<script type="text/javascript">
window.ne_tgm_q = window.ne_tgm_q || [];
window.ne_tgm_q.push(
{
    tagType: 'visit',
    device:'web'/*web, mobile, tablet*/,
    pageEncoding:'utf-8'
});
</script>
<!--TOAST eXchange end-->



<!-- Facebook Pixel Code 수현 기본161123-->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1169076679841684', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1169076679841684&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<!-- Mobon Tracker v3.1 [공용] start 20181031-->
<script type="text/javascript">
<!--
	function mobRf(){
  		var rf = new EN();
		rf.setSSL(true);
  		rf.sendRf();
	}
//-->
</script>
<!-- Mobon Tracker v3.1 [공용] end -->



<!--20190508 이다희 대리요청 -->
<!-- ADN Tracker[공통] start -->
<script type="text/javascript">
var adn_param = adn_param || [];
adn_param.push([{ 	
 ui:'101027',
 ut:'Home'
}]);
</script>
<script type="text/javascript" async src="//fin.rainbownine.net/js/adn_tags_1.0.0.js"></script>
<!-- ADN Tracker[공통] end -->



<!-- ADN 크로징 설치 PC  start -->
<script type="text/javascript">
var adn_panel_param = adn_panel_param || [];
adn_panel_param.push([{
ui:'101027',	
ci:'1010270002',
gi:'10160'
}]);
</script>
<script type="text/javascript" async src="//fin.rainbownine.net/js/adn_closingad_1.0.9.js"></script>
<!-- ADN 크로징 설치 PC end -->
<!-- 2021.01.19 KARA ADN 크로징 설치(반응)  start -->
<script type="text/javascript">
var adn_mobile_panel_param = adn_mobile_panel_param || [];
adn_mobile_panel_param.push([{
 ui:'101027',  
 ci:'1010270004',
 gi:'10427'
}]);
</script>
<script type="text/javascript" async src="//fin.rainbownine.net/js/adn_mobile_closingad_1.1.2.js"></script>
<!-- ADN 크로징 설치 end -->

    <!-- 2021.01.11 KARA 카울리/크로스타겟 스크립트 start -->

<script type='text/javascript'>
    !function (w,d,s,u,t,ss,fs) {
        if(w.ex2cts)return;t=w.ex2cts={};if(!window.t) window.t = t;
        t.push = function() {t.callFunc?t.callFunc.apply(t,arguments) : t.cmd.push(arguments);};
        t.cmd=[];ss = document.createElement(s);ss.async=!0;ss.src=u;
        fs=d.getElementsByTagName(s)[0];fs.parentNode.insertBefore(ss,fs);
    }(window,document,'script','//st2.exelbid.com/js/cts2.js');
    ex2cts.push('init', '5ff7c102f1c49a01628b4567' ,'.isoohyun.co.kr');

</script>
 
    <!-- 2021.01.11 KARA 카울리/크로스타겟 스크립트 end   -->  


<!-- Enliple Tracker Start -->
<script type="text/javascript">
(function(a,g,e,n,t){a.enp=a.enp||function(){(a.enp.q=a.enp.q||[]).push(arguments)};n=g.createElement(e);n.async=!0;n.defer=!0;n.src="https://cdn.megadata.co.kr/dist/prod/enp_tracker_self_hosted.min.js";t=g.getElementsByTagName(e)[0];t.parentNode.insertBefore(n,t)})(window,document,"script");
enp('create', 'common', 'isoohyun', { device: 'W' });  // W:웹, M: 모바일, B: 반응형
enp('send', 'common', 'isoohyun');
</script>
<!-- Enliple Tracker End -->

<!-- Criteo 로더 파일 -->
<script type="text/javascript" src="//dynamic.criteo.com/js/ld/ld.js?a=89174" async="true"></script>
<!-- END Criteo 로더 파일 -->


<!-- Criteo 홈페이지 태그 -->
<script type="text/javascript">
window.criteo_q = window.criteo_q || [];
var deviceType = /iPad/.test(navigator.userAgent) ? "t" : /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : "d";
window.criteo_q.push(
 { event: "setAccount", account: 89174},

 // To Do 1. 현재 유저의 이메일 주소(공백 제거 및 소문자로 변환 후). 유저의 이메일을 알수 없는 상황이면 빈 문자열로 전달
 { event: "setEmail", email: "" },

 // To Do 2. 현재 유저의 저장된 배송지 우편번호. 유저의 배송지 우편번호를 알수 없는 상황이면 빈 문자열로 전달
 { event: "setZipcode", zipcode: "" },

 { event: "setSiteType", type: deviceType},
 { event: "viewHome"});
</script> 
<!-- END Criteo 홈페이지 태그 -->
<div class="footer-wrap" style="height:390px;">
  <center style="background:#2f2f2f;">
    <div class="util" style="display: flex; justify-content:space-between; width:1020px; background:#2f2f2f;">
      <div>
        <a href="https://www.isoohyun.co.kr/new/com/com07.php" class="none">이용약관</a>
        <a href="https://www.isoohyun.co.kr/new/com/com06.php" style="color:#fddd54;">개인정보취급방침</a>
        <a href="/new/about/about08.php?idx=106">손해배상청구절차</a>
        <a href="https://www.isoohyun.co.kr/new/about/about12.php">찾아오시는길</a>
        <a href="https://www.isoohyun.co.kr/new/com/com08.php">사이트맵</a>
      </div>
      <div>
        <a href="https://blog.naver.com/isoohyun4000" target="_blank" class="sns" style="margin-left:25px;"><img src="/new/image/sns01.jpg" alt="노블레스수현 공식블로그" /></a>
        <a href="https://www.facebook.com/isoohyun4000" target="_blank" class="sns"><img src="/new/image/sns02.jpg" alt="노블레스수현 공식페이스북" /></a>
        <a href="http://goto.kakao.com/dm9ljrcu" target="_blank" class="sns"><img src="/new/image/sns03.jpg" alt="노블레스수현 카카오톡 채널" /></a>
        <a href="https://www.youtube.com/channel/UCvK-WgMVoDdQY9ea2pO4L5w" target="_blank" class="sns"><img src="/new/image/sns04.jpg" alt="노블레스수현 유튜브채널" /></a>
        <a href="https://www.instagram.com/noblesse_soohyun/" target="_blank" class="sns"><img src="/new/image/sns05.png" alt="노블레스수현 공식인스타그램" /></a>
        <a href="https://post.naver.com/my.nhn?memberNo=2032633" target="_blank" class="sns"><img src="/new/image/sns07.png" alt="노블레스수현 포스트채널" /></a>
        <a href="https://twitter.com/isoohyun1" target="_blank" class="sns"><img src="/new/image/sns08.png" alt="노블레스수현 공식트위터" /></a>
        <a href="https://tv.naver.com/soohyun" target="_blank" class="sns"><img src="/new/image/sns09.png" alt="노블레스수현 네이버TV채널" /></a>
        <img src="/new/image/comodo.png" style="position:relative;top:5px;" />
      </div>

      
    </div>
  </center>
  <div style="height: 380px; background-color:#222222">
    <center>
      <div style="margin-top:50px; height: 70px; width:1020px;">
        <span style="color:#a8a8a8; font-size:15px; vertical-align: middle; font-weight: bold;">서울본사</span>&nbsp;
        <span style="color:#ffd215; font-size:28px; vertical-align: middle;">02-540-4000</span>
        <span style="color:#a8a8a8; font-size:15px; padding-left:20px; vertical-align: middle; font-weight: bold;">부산본부</span>&nbsp;
        <span style="color:#ffd215; font-size:28px; vertical-align: middle;">051-711-9110</span>
        <span style="color:#a8a8a8; font-size:15px; padding-left:20px; vertical-align: middle; font-weight: bold;">대구본부</span>&nbsp;
        <span style="color:#ffd215; font-size:28px; vertical-align: middle;">053-719-0460</span>
        <span style="color:#a8a8a8; font-size:15px; padding-left:20px; vertical-align: middle; font-weight: bold;">대전본부</span>&nbsp;
        <span style="color:#ffd215; font-size:28px; vertical-align: middle;">042-710-3950</span>
      </div>
      <hr style="border: 1px solid #434343;">
      <table style="margin-top:50px;">
        <tr>
          <td>
            <img src="/new/image/footer/copyright_logo.png" />
            <p style="color:#a8a8a8; margin-top:25px; line-height: 25px;"><b>수현(주)&nbsp;&nbsp;&nbsp;&nbsp;대표자 : 경증수 <br />
                결혼중개업 : 강남090028 사업자등록번호 : 211-88-34578 <br />
                대표번호 : <span>02-540-4000</span> FAX : 559-2099 <br />
                개인정보 관리 책임자 : 경광현 <br />
              </b>
            </p>
          </td>
          <td style="padding-left: 30px;">
            <img src="/new/image/footer/20220107_copy.png" style="margin-top:5px; margin-left:70px;" usemap="#imgmap202192102736" />
          </td>
        </tr>
      </table>
    </center>
    <map id="imgmap202192102736" name="imgmap202192102736">
      <area shape="rect" alt="" title="" coords="2,1,109,123" href="https://www.isoohyun.co.kr/new/about/about08.php?idx=179" target="" />
      <area shape="rect" alt="" title="" coords="120,1,226,126" href="https://www.isoohyun.co.kr/new/about/about08.php?idx=186&REFURL=/new/about/about07.php?" target="" />
      <area shape="rect" alt="" title="" coords="231,2,340,126" href="http://www.isoohyun.co.kr/new/about/about08.php?idx=149" target="" />
      <area shape="rect" alt="" title="" coords="351,3,452,128" href="http://www.isoohyun.co.kr/new/about/about08.php?idx=94" target="" />
      <area shape="rect" alt="" title="" coords="462,1,561,129" href="https://www.isoohyun.co.kr/new/about/about08.php?idx=189" target="" />
    </map>
  </div>
</div>
<script src="http://data.neoebiz.co.kr/cdata.php?reData=53707"></script>    <div style="padding-bottom: 50px; background-color:#222222"></div>
  </div>
    <!-- footer end -->

  <!-- 20220223 script -->
  <!-- ADPNUT SCRIPT -->
  <iframe src=”https://tag.adpnut.com/prd/view?shopid=ishish” width=”0” height="0" frameborder="0"></iframe>
</body>

</html>