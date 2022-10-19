<!DOCTYPE html>
<html class="no-js" lang="ko">

<head>
  
  <title>노블레스 수현</title>
<meta charset="utf-8" />
<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=20.0,user-scalable=yes" name="viewport">
<meta name="naver-site-verification" content="a82bd00b2bfa7122650f2bf688b37452e6208db3" />
<meta property="og:title" content="한국 대표 상류층결혼정보회사 노블레스 수현">
<meta name="description" content="국내 상류층 결혼을 책임지고 있는 한국 대표 상류층결혼정보회사, 고객만족도 1위 / 상류층 업계 1위 / 성혼율 1위 / 회원수 1위" />
<meta property="og:description" content="국내 상류층 결혼을 책임지고 있는 한국 대표 상류층결혼정보회사, 고객만족도 1위 / 상류층 업계 1위 / 성혼율 1위 / 회원수 1위">
<link rel="stylesheet" href="/nm/static/css/normalize.css" />
<link rel="stylesheet" href="/nm/static/css/style.css" />
<script src="/nm/static/js/lib/modernizr-2.6.2.min.js"></script>
<script src="/nm/static/js/lib/jquery-1.8.2.min.js"></script>
<script src="/nm/static/js/lib/jquery.swiper.js"></script>
<script src="/nm/static/js/ui.js"></script>
<script src="/nm/static/js/mobile_k.js"></script>
<script type="text/javascript" src="/new/js/jquery.extends.js"></script>
<link href="/images/64.ico" rel="shortcut icon" type="image/x-icon" />
<meta property="og:image" content="https://m.isoohyun.co.kr/new/image/main_image20211231.png">
<!-- Dable 스크립트 시작 / 문의 support@dable.io -->
<script>
  (function(d, a, b, l, e, _) {
    d[b] = d[b] || function() {
      (d[b].q = d[b].q || []).push(arguments)
    };
    e = a.createElement(l);
    e.async = 1;
    e.charset = 'utf-8';
    e.src = '//static.dable.io/dist/plugin.min.js';
    _ = a.getElementsByTagName(l)[0];
    _.parentNode.insertBefore(e, _);

  })(window, document, 'dable', 'script');
  dable('setService', 'isoohyun.co.kr');
  dable('sendLog');
</script>
<!-- Dable 스크립트 종료 / 문의 support@dable.io -->

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
<!-- End Channel Plugin -->  <!-- 웹으로 모바일 페이지 보면 리다이렉트 -->
  <script>
    if ($(window).width() > 780) {
      $.getScript('js/nbw-parallax.js');
    }
    if (window.innerWidth > 780) {
      window.location.href = 'https://www.isoohyun.co.kr/new/lovetest/join_test.php?counselGbn=28863&mctkey=';
    }
  </script>
  <!-- // progressbar animate bootstrap 20220304 -->
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
              $('#area_post_number').val(zone_number); //신주소 우편번호
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
                content += ' [희망학력] : ' + sschool;
                content += ' [희망직업] : ' + sjob;
                content += ' [희망연봉] : ' + spay;
                content += ' [희망외모] : ' + sface;
                $(this).value('content', content);

                // 추천이상형 프로필 등록할때 들어가는 데이터
                // $('#Idealtype_age').val($('input[name=sage]').val().substring(1));
                // $('#Idealtype_height').val($('input[name=scm]').val().substring(1));
                // $('#Idealtype_school').val($('input[name=sschool]').val().substring(1));
                // $('#Idealtype_job').val($('input[name=sjob]').val().substring(1));
                document.getElementById("Idealtype_age").value = sage;
                document.getElementById("Idealtype_height").value = scm;
                document.getElementById("Idealtype_school").value = sschool;
                document.getElementById("Idealtype_job").value = sjob;
                // document.getElementById("Idealtype_income").value = spay;
                // document.getElementById("Idealtype_face").value = sface;

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

                alert("신청되었습니다.");
              }
            })
          }, 1000);
        },
        fail: function(error) {
          console.log(error)
        },
      })
    }

    // 이상형 전역변수
    // var qgender = '';
    // var qage = '';
    // var qschool = '';
    // var qpay = '';
    // var qjob = '';
    // var qlook = '';

    // ideal type
    var sage = '';
    var scm = '';
    var sschool = '';
    var sjob = '';
    var spay = '';
    var sface = '';

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
        $(".progress-bar").animate({ //희망 상대 연령
          width: "20%",
        }, 1000);
        $(".progress-bar2").animate({
          paddingLeft: '65px',
        }, 1000);
      } else if (idx == 3) { // 희망 상대 연령
        sage = txt;
        console.log(sage);
        $(".progress-bar").animate({
          width: "40%",
        }, 1000);
        $(".progress-bar2").animate({
          paddingLeft: '130px',
        }, 1000);
      } else if (idx == 4) { // 희망 상대 학력
        sschool = txt;
        console.log(sschool);
        $(".progress-bar").animate({
          width: "60%",
        }, 1000);
        $(".progress-bar2").animate({
          paddingLeft: '195px',
        }, 1000);
      } else if (idx == 5) { // 희망 상대 연봉
        spay = txt;
        console.log(spay);
        $(".progress-bar").animate({
          width: "80%",
        }, 1000);
        $(".progress-bar2").animate({
          paddingLeft: '255px',
        }, 1000);
      } else if (idx == 6) { // 희망 상대 직종
        sjob = txt;
        console.log(sjob);
        $(".progress-bar").animate({
          width: "100%",
        }, 1000);
        $(".progress-bar2").animate({
          paddingLeft: '300px',
        }, 1000);

      } else if (idx == 7) { //희망 상대 외모
        sface = txt;
        console.log(sface);
        // content = (' [희망연령] : ' + sage + ' [희망신장] : ' + scm + ' [희망학력] : ' + sschool + ' [희망직업] : ' + sjob);
        // console.log(content);
      }

      $('section').hide();
      $('section:eq(' + idx + ')').show();


    }

    function success() {
      $('#frm').get(0).reset();
      show(8);
    }

    // select시 색 변경
    function changecolor1() {
      $("#new_birthday").css("background-color", " #bc9950 ");
      $("#new_birthday").css("border", "1px solid white");
      $("#new_birthday").css("color", "white");
      console.log("change1");
    }

    function changecolor2() {
      $("#school").css("background-color", " #bc9950 ");
      $("#school").css("border", "1px solid white");
      $("#school").css("color", "white");
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
  </script>
  <!-- p text -->
  <style>
    /* // progressbar animate bootstrap 20220304 */
    .progress {
      margin-bottom: 20px;
    }

    .progress-bar {
      width: 0;
    }

    .bg-purple {
      background-color: #825CD6 !important;
    }

    .progress .progress-bar {
      transition: unset;
    }

    h2 {
      margin-bottom: 0;

    }

    /* // progressbar animate bootstrap 20220304 */
    .p_text {
      text-align: center;
      font-size: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #d8bf8d;
    }

    .list_box {
      display: block;
      width: 140px;
      height: 80px;
      border: 3px solid white;
      text-align: center;
      font-size: 15px;
      line-height: 60px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.5;
    }

    .list_box:hover {
      display: block;
      width: 140px;
      height: 80px;
      line-height: 60px;
      border: 3px solid #ccae70;
      text-align: center;
      font-size: 15px;
      color: white;
      background-color: #bc9950;
      opacity: 0.7;
    }

    .radio-box {
      display: flex;
      width: 300px;
      text-align: center;
    }

    .join-charge {
      background-color: #fff;
    }

    input[id="gender1"]+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    input[id="gender1"]:checked+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid #ccae70;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #bc9950;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    input[id="gender2"]+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    input[id="gender2"]:checked+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid #ccae70;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #bc9950;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    input[id="marry1"]+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    input[id="marry1"]:checked+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid #ccae70;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #bc9950;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    input[id="marry2"]+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid white;
      text-align: center;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    input[id="marry2"]:checked+label {
      width: 150px;
      height: 80px;
      line-height: 80px;
      border: 3px solid #ccae70;
      text-align: center;
      font-size: 20px;
      color: white;
      background-color: #bc9950;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    #new_birthday {
      width: 310px;
      border: 3px solid white;
      text-align: center;
      padding: 10%;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.8;
      margin-bottom: 30px;
    }


    #school {
      width: 310px;
      border: 3px solid white;
      text-align: center;
      padding: 10%;
      font-size: 20px;
      color: black;
      background-color: whitesmoke;
      opacity: 0.8;
      margin-bottom: 30px;
    }

    select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      text-indent: 15px;
    }

    .list_one {
      width: 290px;
    }

    .list_one:hover {
      width: 290px;
    }
  </style>
</head>

<body style="min-width:375px; max-width:500px; margin:auto;">
  <div class="wrap">
    <!-- Link Swiper's CSS -->
<link rel="stylesheet" href="/new/css/swiper.min.css">
<style>
  .menu_btn {
    text-align: right;
    padding: 10px 30px 10px 10px;
  }

  .menu_bg {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 0;
    display: none;
  }

  .sidebar_menu {
    display: none;
    width: 97%;
    height: 100%;
    max-width: 800px;
    background: #ffffff;
    position: fixed;
    top: 0px;
    overflow-x: none;
    overflow-y: auto;


      }

  .close_btn {

    text-align: right;
    height: 70px;
    width: 100%;
    position: fixed;
    z-index: 999999;
    background-color: #ffffff;
    max-width: 800px;
  }

  .close_btn>a {
    display: block;
    width: 100%;
    height: 100%;
    max-width: 800px;
  }

  .menu_wrap {
    width: 100%;
    list-style: none;
    padding: 0px 20px 20px 0px;
  }

  .menu_wrap li {
    height: 50px;
    line-height: 50px;
    padding-left: 19px;
    font-size: 13px;
  }

  .menu_wrap li a {
    color: #000000;
    text-decoration: none;
  }

  .menu_wrap2 {
    width: 100%;
    list-style: none;
    padding: 20px 20px 20px 20px;
  }

  .menu_wrap2 li {
    height: 50px;
    font-size: 15px;
    line-height: 50px;
  }

  .menu_wrap2 li a {
    color: #000000;
    text-decoration: none;
  }

  .swiper-containers {
    width: 340px;
    margin-top: 95px;
    /*overflow: hidden;*/
    margin-left: 10px;
  }

  /* 바디에 스크롤 막는 방법 */
  .not_scroll {
    position: fixed;
    overflow: hidden;
    width: 100%;
    height: 100%
  }
</style>

<style>
  .active {
    background-color: #1EAAAA;
    width: 70%;
    line-height: 50px;
  }

  .example1 {
    height: 20px;
    overflow: hidden;
    position: relative;
    color: #0040ff;
  }

  .example1 p {
    position: absolute;
    width: 260px;
    height: 100%;
    margin: 0;

    text-align: center;
    /* Starting position */
    -moz-transform: translateX(100%);
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    /* Apply animation to this element */
    -moz-animation: example1 20s linear infinite;
    -webkit-animation: example1 20s linear infinite;
    animation: example1 20s linear infinite;
  }

  /* Move it (define the animation) */
  @-moz-keyframes example1 {
    0% {
      -moz-transform: translateX(100%);
    }

    100% {
      -moz-transform: translateX(-100%);
    }
  }

  @-webkit-keyframes example1 {
    0% {
      -webkit-transform: translateX(100%);
    }

    100% {
      -webkit-transform: translateX(-100%);
    }
  }

  @keyframes example1 {
    0% {
      -moz-transform: translateX(100%);
      /* Firefox bug fix */
      -webkit-transform: translateX(100%);
      /* Firefox bug fix */
      transform: translateX(100%);
    }

    100% {
      -moz-transform: translateX(-100%);
      /* Firefox bug fix */
      -webkit-transform: translateX(-100%);
      /* Firefox bug fix */
      transform: translateX(-100%);
    }
  }

  .example1 p:hover {
    -moz-animation-play-state: paused;
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
  }
</style>

<script>
  $(document).ready(function() {
    $('.main').click(function() {
      $('.sidebar_menu').animate({
        scrollTop: 203.609375
      }, 400);
    });

    var giMenuDuration = 500;
    var posY;
    $('.menu_btn>a').on('click', function() {
      $('.menu_bg').show();
      $('.sidebar_menu').show();
      // 현재 보고있는 페이지 자동으로 클릭(2022.02.08) start
      if (window.location.href.indexOf("notice-view.php?idx=192") != -1) {
        $('#mains0').click();
      } else if (window.location.href.indexOf("notice-view.php?idx=191") != -1) {
        $('#mains1').click();
      } else if (window.location.href.indexOf("notice-view.php?idx=194") != -1) {
        $('#mains1').click();
      } else if (window.location.href.indexOf("notice-view.php?idx=94") != -1) {
        $('#mains1').click();
      } else if (window.location.href.indexOf("common/brochure.php") != -1) {
        $('#mains1').click();
        $('#active01_01').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("m_info.php") != -1) {
        $('#mains2').click();
      } else if (window.location.href.indexOf("notice-view.php?idx=193") != -1) {
        $('#mains2').click();
      } else if (window.location.href.indexOf("difflevel.php") != -1) {
        $('#mains2').click();
      } else if (window.location.href.indexOf("matchingreview/about01.php") != -1) {
        $('#mains2').click();
      } else if (window.location.href.indexOf("benefit/join-info01.php") != -1) {
        $('#mains3').click();
      } else if (window.location.href.indexOf("benefit/join-info02.php") != -1) {
        $('#mains3').click();
        $('#active03_01').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("benefit/join-info02.php") != -1) {
        $('#mains3').click();
        $('#active03_01').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("service/class-noblesse-label.php") != -1) {
        $('#mains3').click();
        $('#active03_02').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("benefit/virtual_service.php") != -1) {
        $('#mains3').click();
        $('#active03_9').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/ideal_find_test.php") != -1) {
        $('#mains4').click();
        $('#active04_1').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/love_test2.php") != -1) {
        $('#mains4').click();
        $('#active04_2').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/marryTime.php") != -1) {
        $('#mains4').click();
        $('#active04_3').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/constitution.php") != -1) {
        $('#mains4').click();
        $('#active04_4').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/remarriage.php") != -1) {
        $('#mains4').click();
        $('#active04_5').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/joinCarge.php") != -1) {
        $('#mains4').click();
        $('#active04_6').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/penthouse.php") != -1) {
        $('#mains4').click();
        $('#active04_7').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/marry_partner.php") != -1) {
        $('#mains4').click();
        $('#active04_8').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/mbti_test.php") != -1) {
        $('#mains4').click();
        $('#active04_10').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/first_face_test.php") != -1) {
        $('#mains4').click();
        $('#active04_11').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/ideal_worldcup.php") != -1) {
        $('#mains4').click();
        $('#active04_12').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/ideal_worldcup1.php") != -1) {
        $('#mains4').click();
        $('#active04_12').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("lovetest/ideal_worldcup2.php") != -1) {
        $('#mains4').click();
        $('#active04_12').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("premium-christian.php") != -1) {
        $('#mains5').click();
        $('#active05_01').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("premium-golf.php") != -1) {
        $('#mains5').click();
        $('#active05_01').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("special-menu-view.php") != -1) {
        $('#mains5').click();
        $('#active05_02').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("private-party-view.php") != -1) {
        $('#mains5').click();
        $('#active05_03').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("party_movie.php") != -1) {
        $('#mains5').click();
        $('#active05_04').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("customer/love_success.php") != -1) {
        $('#mains6').click();
      } else if (window.location.href.indexOf("service/service10.php") != -1) {
        $('#mains6').click();
      } else if (window.location.href.indexOf("lovetest/webtoonlist.php") != -1) {
        $('#mains6').click();
      } else if (window.location.href.indexOf("customer/upperclass.php") != -1) {
        $('#mains6').click();
        $('#active06_04').css('backgroundColor', '#1EAAAA').width('80%');
      } else if (window.location.href.indexOf("common/Counseling.php") != -1) {
        $('#mains7').click();
        $('#active07_04').css('backgroundColor', '#1EAAAA').width('80%');
      } else if (window.location.href.indexOf("introduce/notice-list.php") != -1) {
        $('#mains7').click();
      } else if (window.location.href.indexOf("service/qna.php") != -1) {
        $('#mains7').click();
      } else if (window.location.href.indexOf("benefit/phone-guide.php") != -1) {
        $('#mains7').click();
      } else if (window.location.href.indexOf("customer/advice-phone.php") != -1) {
        $('#mains7').click();
      } else if (window.location.href.indexOf("busan/intro.php") != -1) {
        $('#mains8').click();
      } else if (window.location.href.indexOf("daegu/intro.php") != -1) {
        $('#mains8').click();
      } else if (window.location.href.indexOf("daejeon/intro.php") != -1) {
        $('#mains8').click();
      } else if (window.location.href.indexOf("notice-view.php") != -1) {
        $('#mains7').click();
        $('#active07_01').css('backgroundColor', '#1EAAAA').width('70%');
      } else if (window.location.href.indexOf("introduce") != -1) {
        $('#mains0').click();
      } else if (window.location.href.indexOf("benefit") != -1) {
        $('#mains1').click();
      } else if (window.location.href.indexOf("service") != -1) {
        $('#mains3').click();
      } else if (window.location.href.indexOf("lovetest") != -1) {
        $('#mains4').click();
      } else if (window.location.href.indexOf("meet") != -1) {
        $('#mains5').click();
      }
      // 현재 보고있는 페이지 자동으로 클릭(2022.02.08) end
      //부모창 스크롤 막기
      posY = $(window).scrollTop();
      $("html, body").addClass("not_scroll");
      $(".menu_bg").css("display", "block");
      $(".sidebar_menu").css("top", -posY);

          });

    $('.close').on('click', function() {
      $('.menu_bg').hide();
      $("html, body").removeClass("not_scroll");
              $('.sidebar_menu').hide();
          });

    $('.main').on('click', function() {
      var index = $(this).index();
      var subMenu = "#sub" + index;
      var mainMenu = "#mains" + index;
      $('.menu_wrap2').hide();
      $('.main').css({
        "color": "#000",
        "background": "#f2f2f2"
      });
      $(subMenu).show();
      $(mainMenu).css({
        "color": "#ffffff",
        "background": "#1aa69d"
      });
    });

    // 현재 주소 판단해서 addclass 활성화 메뉴에 표시
    var url = window.location.href;
    var activePage = url;
    $('.active_menu a').each(function() {
      var linkPage = this.href;

      if (activePage == linkPage) {
        $(this).closest("li").addClass("active");
      }
    });
    // $('.active_menu').find('a[href="' + document.location.pathname + '"]').parents('li').addClass('active');
  });
</script>

<!-- 공통 영역 -->
<div id="topbanner">

</div>


<!-- 공휴일경우 보이는 태그 주석 & 주석 해제하여 지정 -->
<!-- <a href="tel:02-540-4000">
  <div class="example1">
    <p style="line-height: 22px;">일요일 및 공휴일 전화상담 02-540-4000</p>
  </div>
</a> -->

<!-- 배너 -->
<!-- <a href="https://m.isoohyun.co.kr/nm/html/daejeon/intro.php?counselGbn=26608">
  <img src="/nm/static/images/daejun_logo.jpg" width="100%">
</a> -->
<!-- <a href="https://grip.show/live/8dejr14ppj31vgn4?sf=1&rfr_uid=le2n8z1l"  target="_blank">
  <img src="/nm/static/images/banner7.jpg" width="100%">
</a> -->
<!-- <a href="https://youtu.be/XpnQal1u8gs">
  <img src="/nm/static/images/banner.jpg" width="100%">
</a> -->
<a href="/nm/html/introduce/notice-view.php?idx=191">
  <img src="/nm/static/images/m_210223_pusan.jpg" width="100%">




<header id="header" style="height: 70px; text-align:center;">
  <table style="height: 70px; width:100%;">
    <tr>
      <td>
        <a href="/nm/html/main/index.php"><img src="/nm/static/images/main/header/btn_home.png" style="width:17px; margin-left:20px;"></a>
      </td>
      <td style="width:200px;">
        <span style="padding-left:0px;"><a href="/nm/html/main/index.php"><img src="/nm/static/images/main/header/logo1.png" style="margin-left:20px; width:150px;"></a><span>
      </td>
      <td class="menu_btn">
        <a href="#">
          <img src="/nm/static/images/main/header/btn_menu.png" width="17px;">
        </a>
      </td>
    </tr>
  </table>

  <div id="type1" class="menu_bg" style="z-index:9998;"></div>
  <div class="sidebar_menu" style="z-index:9999;">
    <div class="close_btn" style="border-bottom: 1px solid #e4e4e4;">
      <table style="height:70px; font-size:15px; margin-left: -15px;">
        <tr style="">
          <!-- 비회원 -->
                      <td style="width:100%; text-align:left;">
              <span style="padding-left:33px; padding-right:20px;"><a href="/nm/html/login/login.php" class="btn-login">로그인</a></span>
              <span style="padding-right:20px;">|</span>
              <span style="padding-right:20px;"><a href="/nm/html/app/login.php" class="btn-app">App</a></span>
              <span style="padding-right:20px;">|</span>
              <span><a href="/nm/html/cont/login.php" class="btn-paper">표준계약서</a></span>
            </td>
                    <td style="text-align:center; width:13%;">
            <a class="close" href="#">
              <img src="/nm/static/images/main/header/btn_close.png" width="17px;">
            </a>
          </td>
        </tr>
      </table>
    </div>

    <!-- Swiper -->
    <div style="width:99%; overflow: hidden;">
      <div class="swiper-containers">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="https://m.isoohyun.co.kr/nm/html/lovetest/joinCarge.php?counselGbn=24953">
              <img src="/nm/static/images/main/header/banner01.png" width="95%">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://m.isoohyun.co.kr/nm/html/remarriage/main.php?counselGbn=24954">
              <img src="/nm/static/images/main/header/banner04.png" width="95%">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://m.isoohyun.co.kr/nm/recruit/index.php">
              <img src="/nm/static/images/main/header/banner03.png" width="95%">
            </a>
          </div>
        </div>
        <!--div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div-->
      </div>
    </div>

    <script>
      var swiper = new Swiper('.swiper-containers', {
        spaceBetween: 30,
        centeredSlides: true,
      });
    </script>

    <div style="float: left; height:100%; width:30%; background:#f2f2f2; text-align:left; margin-top:30px;">
      <ul class="menu_wrap">
        <li id="mains0" class="main" style="background:#1aa69d; color:#ffffff;">수현소개</li>
        <li id="mains1" class="main">WHY수현</li>
        <li id="mains2" class="main">회원&성혼</li>
        <li id="mains3" class="main">가입문의</li>
        <li id="mains4" class="main">러브테스트</li>
        <li id="mains5" class="main">파티/이벤트</li>
        <li id="mains6" class="main">미팅가이드</li>
        <li id="mains7" class="main">고객센터</li>
        <li id="mains8" class="main">지사</li>
        <a href="/nm/recruit/index.php" target="_blank">
          <li>채용공고</li>
        </a>
      </ul>
    </div>
    <div class="active_menu" style="float: left; width:60%; text-align:left; margin-top:10px;">
      <ul id="sub0" class="menu_wrap2">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">수현소개</p>
        <li><a href="/nm/html/introduce/ceo.php">· CEO 인사말</a></li>
        <li><a href="/nm/html/introduce/history.php">· 회사연혁</a></li>
        <li><a href="/nm/html/introduce/gallery.php">· 노블레스 수현 갤러리</a></li>
        <li><a href="/nm/html/introduce/notice-view.php?idx=192">· 수상내역</a></li>
        <li><a href="/nm/html/introduce/news-list.php">· 언론 속 수현 뉴스</a></li>
        <li>
          <a href="/nm/html/introduce/youtube.php">· 수현 유튜브 채널</a>
          <div style="z-index: 999999; width: 40px; height: 25px; background: #f90006; color: #ffffff; border-radius: 10px; position: relative; text-align: center; top: -38px; left: 130px; zoom:0.9;">new</div>
        </li>
        <li><a href="/nm/html/introduce/soohyun_inside.php">· 수현 인사이드</a></li>
        <li><a href="/nm/html/introduce/about01.php">· 오시는길</a></li>
        <br>
        <!-- 메뉴 안에 있는 배너 -->
        <!-- <a href="/nm/html/introduce/youtube.php"><img src="/nm/image/menu_img.jpg"></a> -->
      </ul>
      <ul id="sub1" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">WHY수현</p>
        <li><a href="/nm/html/benefit/who-soohyun.php">· 왜 노블레스 수현인가?</a></li>
        <li><a href="/nm/html/introduce/notice-view.php?idx=191">· 2021성과평가 REPORT</a></li>
        <li><a href="/nm/html/introduce/notice-view.php?idx=194">· NCS 평가지수</a></li>
        <li><a href="/nm/html/benefit/mem_service.php">· 멥버쉽 서비스</a></li>
        <li><a href="/nm/html/benefit/com_service.php">· 법인, 단체 고객사 서비스</a></li>
        <li id="active01_01"><a href="/nm/common/brochure.php">· 온라인 브로슈어</a></li>
        <li><a href="/nm/html/benefit/medical_service.php">· 회원 의료 혜택 Service</a></li>
        <li><a href="/nm/html/introduce/notice-view.php?idx=94">· 고객안심서비스</a></li>
      </ul>
      <ul id="sub2" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">회원&성혼</p>
        <li><a href="/nm/html/benefit/m_info.php">· 실시간 회원현황</a></li>
        <li><a href="/nm/html/introduce/notice-view.php?idx=193">· 회원성비&교제율현황</a></li>
        <li><a href="/nm/html/benefit/difflevel.php">· 수준이 다른 성혼율</a></li>
        <li><a href="/nm/html/matchingreview/about01.php">· 매칭후기</a></li>
        <li><a href="/nm/html/lovetest/hope_ideal_test.php">· 희망 프로필 추천</a></li>
      </ul>
      <ul id="sub3" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">가입문의</p>
        <li id="active03_01"><a href="/nm/html/benefit/join-info01.php">· 정회원 가입안내</a></li>
        <li id="active03_02"><a href="/nm/html/service/class-black-label.php">· 가입비 안내</a></li>
        <li><a href="/nm/html/service/black_service2.php">· 블랙서비스</a></li>
        <li><a href="/nm/html/service/service-option01.php">· 정재계 명문가 서비스</a></li>
        <li><a href="/nm/html/service/service-option02.php">· 전문직 엘리트 서비스</a></li>
        <li><a href="/nm/html/service/service-option03.php">· 크리스천 서비스</a></li>
        <li><a href="/nm/html/service/service-option04.php">· 해외파 유학파 서비스</a></li>
        <li><a href="/nm/html/service/service09.php">· 자녀결혼 컨설팅</a></li>
        <li id="active03_9"><a href="/nm/html/benefit/virtual_service.php">· 서비스가상체험</a></li>
        <li><a href="/nm/html/remarriage/main.php" style="color: #785813;">· 재혼전용 프로그램 안내</a></li>
      </ul>
      <ul id="sub4" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:95%; margin-bottom:10px; margin-top:13px;">러브테스트<img style="cursor: pointer; float:right; width:30px; height:30px; margin-top:6px; margin-right:5px;" src="/nm/image/more.png" onclick="javascript:location.href='/nm/html/lovetest/lovetest_main.php';"></p>
        <!-- <img src="nm/image/more.png"> -->
        <!-- <a style="font-size:10px;" href="http://m.isoohyun.co.kr/nm/html/lovetest/lovetest_main.php">전체보기 →</a> -->
        <li id="active04_1"><a href="/nm/html/lovetest/ideal_find_test.php">· 이상형 찾기</a></li>
        <li id="active04_12"><a href="/nm/html/lovetest/ideal_worldcup.php">· 이상형 월드컵</a></li>
        <li id="active04_2"><a href="/nm/html/lovetest/love_test2.php">· 연애력 테스트</a></li>
        <li id="active04_3"><a href="/nm/html/lovetest/marryTime.php">· 결혼시기 TEST</a></li>
        <li id="active04_4"><a href="/nm/html/lovetest/constitution.php">· 결혼체질도 TEST</a></li>
        <li id="active04_5"><a href="/nm/html/lovetest/remarriage.php">· 재혼가능성 TEST</a></li>
        <li id="active04_6"><a href="/nm/html/lovetest/joinCarge.php">· 노블레스가입비 TEST</a></li>
        <li id="active04_7"><a href="/nm/html/lovetest/penthouse.php">· 펜트하우스 TEST</a></li>
        <li id="active04_8"><a href="/nm/html/lovetest/marry_partner.php">· 내게 맞는 커플매니저</a></li>
        <li id="active04_9"><a href="/under/adpop19.php?counselGbn=26821">· 이상형 추천 TEST</a></li>
        <li id="active04_10"><a href="/nm/html/lovetest/mbti_test.php">· MBTI 이상형 TEST</a></li>
        <li id="active04_11"><a href="/nm/html/lovetest/first_face_test.php">· 첫인상 TEST</a></li>
      </ul>
      <ul id="sub5" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">파티/이벤트</p>
        <li id="active05_01"><a href="/nm/html/meet/premium-culture.php">· 프리미엄 모임</a></li>
        <li id="active05_02"><a href="/nm/html/meet/special-menu.php">· 스페셜이벤트</a></li>
        <li id="active05_03"><a href="/nm/html/meet/private-party.php">· 프라이빗 파티</a></li>
        <li id="active05_04"><a href="/nm/html/meet/private-gallery.php">· 파티 갤러리</a></li>
      </ul>
      <ul id="sub6" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">미팅가이드</p>
        <li id="active06_01"><a href="/nm/html/customer/love_success.php">· 미팅성공전략</a></li>
        <li id="active06_02"><a href="/nm/html/service/service10.php">· 결혼칼럼</a></li>
        <li id="active06_03"><a href="/nm/html/lovetest/webtoonlist.php">· 홍보웹툰</a></li>
        <li id="active06_04"><a href="/nm/html/customer/upperclass.php">· 상류층 연애&결혼 TREND</a></li>
      </ul>
      <ul id="sub7" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">고객센터</p>
        <li id="active07_01"><a href="/nm/html/introduce/notice-list.php">· 공지사항</a></li>
        <li><a href="https://m.isoohyun.co.kr/nm/html/service/qna.php?mctkey=307">· 자주하는 질문</a></li>
        <li><a href="/nm/html/benefit/phone-guide.php">· 전화문의 가이드</a></li>
        <li id="active07_04"><a href="/nm/html/customer/advice-phone.php">· 무료상담신청</a></li>
        <li><a href="/nm/recruit/index.php" target="_blank">· 채용공고</a></li>
      </ul>
      <ul id="sub8" class="menu_wrap2" style="display:none;">
        <p style="font-size:30px; color:#31859c; border-bottom: solid  1px #eaeaea; width:70%; margin-bottom:10px; margin-top:13px;">지사</p>
        <li><a href="/nm/html/busan/intro.php">· 부산지사</a></li>
        <li><a href="/nm/html/daegu/intro.php">· 대구지사</a></li>
        <li><a href="/nm/html/daejeon/intro.php">· 대전지사</a></li>
      </ul>
    </div>
  </div>

</header>
<!-- //공통 영역 -->    <div id="container">
      
<!-- 러브테스트만 더보기 추가 함 2022.02.11 -->
  <a href="javascript:history.back();" class="btn-prev" style="margin-left: 13px;"></a>
  <img style="float: right; cursor:pointer; margin-right:23px; width:30px; height:22px;margin-top:7px;" src="/nm/image/more3.png" onclick="javascript:location.href='/nm/html/lovetest/lovetest_main.php';">
  <h2 class="title" style="padding-left: 50px;">
              러브테스트      </h2>
    </div>
    <div id="layer_fixeds" class="phone-links">
      <a class="" href="/nm/common/Counseling.php"><i class=""></i>1:1문의</a>
      <a class="" href="/nm/common/brochure.php"><i class=""></i>브로셔신청</a>
      <a href="tel:025404000"><i class="ico-phone"></i>전화상담</a>
    </div>
    <!-- 시작부분 show(0) -->
    <section id="lovetest">
      <div class="join-charge">
        <div class="" style="background-image: url('../../static/images/lovetest/subscription_fee/m_start2.png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <p class="btn" style="height: 26px;"><a href="javascript:show(1);"><img style="width: 83%;" src="../../static/images/lovetest/subscription_fee/m_start_btn.png" alt="" /></a></p>
        </div>
      </div>
    </section>

    <section id="lovetest">
      <form id="frm" name="frm" method="post">
        <input type="hidden" name="counselGbn" value="28863" />
        <input type="hidden" name="counselGbn2" value="가입비 테스트" />
        <input type="hidden" name="marriage" value="10501" />
        <input type="hidden" id="name" name="name">
        <input type="hidden" id="gender" name="gender">
        <input type="hidden" id="birthday" name="birthday">
        <input type="hidden" id="area" name="area">
        <input type="hidden" id="phone" name="phone">
        <input type="hidden" id="email" name="email">
        <input type="hidden" name="content" />
        <input type="hidden" name="user_id" id="user_id" />
        <input type="hidden" id="area_post_number" name="area_post_number">
        <!-- 이상형 저장 데이터-->
        <input type="hidden" id="code" name="code" value="1">
        <input type="hidden" id="Idealtype_age" name="Idealtype_age">
        <input type="hidden" id="Idealtype_height" name="Idealtype_height">
        <input type="hidden" id="Idealtype_school" name="Idealtype_school">
        <input type="hidden" id="Idealtype_job" name="Idealtype_job">
        <input type="hidden" id="Idealtype_income" name="Idealtype_income">
        <input type="hidden" id="Idealtype_face" name="Idealtype_face">
        <!-- 이상형 저장 데이터-->


        <!-- show(1) -->
        <div class="join-charge">
          <div style="background-image: url('../../static/images/lovetest/subscription_fee/mobile_bg01.png'); position: relative; height:600px; background-repeat: no-repeat; background-position:center;">
            <div class="input-box">

              <div style="margin-left:80px; padding-top:26px;">
                <img style="cursor: pointer;" src="../../static/images/lovetest/subscription_fee/m_btn_prev.png" alt="" onclick="show(0);return false;" />
              </div>

              <p class="p_text" style="padding-top: 30px;">이상형 매칭을 위해<br>당신의 몇 가지 정보를 입력해주세요</p>
              <div style="text-align: center;  margin:0 auto;">
                <div style="width: 100%;">
                  <input id="gender1" type="radio" name="gender" value="1" style="display: none;" /> <label for="gender1">남성</label>&nbsp;
                  <input id="gender2" type="radio" name="gender" value="2" style="display: none;" /><label for="gender2">여성</label>
                </div>
                <div style="width: 100%;">
                  <input id="marry1" type="radio" name="marriage" value="10501" style="display: none;" /><label for="marry1"> 초혼</label>&nbsp;
                  <input id="marry2" type="radio" name="marriage" value="10502" style="display: none;" /> <label for="marry2">재혼</label>
                </div>
                <div style="width: 100%; padding-bottom:10px;">
                  <select onchange="changecolor1();" id="new_birthday" name="new_birthday" style="height: 50px;">
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
                <div style="width: 100%;">
                  <select onchange="changecolor2();" id="school" name="school" message="학력을 선택해주세요." style="height: 50px;">
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
              <center>
                <img style="cursor: pointer;width: 310px;margin-top:20px; padding-top:25px;" src="../../static/images/lovetest/subscription_fee/m_btn_next.png" alt="" style="width: 82%; text-align:center; margin-top:10px;" onclick="show(2);return false;" />
              </center>
            </div>
          </div>
        </div>

      </form>
      <iframe src="" id="counselResult" name="counselResult" width="0" height="0" style="display:none;" frameborder="0"></iframe>

    </section>

    <!-- show(2) -->
    <section id="lovetest">
      <div class="join-charge">
        <div style="background-image: url('../../static/images/lovetest/subscription_fee/mobile_bg01.png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <div style="margin-left:80px; padding-top:25px;">
            <img style="cursor: pointer;" src="../../static/images/lovetest/subscription_fee/m_btn_prev.png" alt="" onclick="show(1);return false;" />
          </div>
          <div class="container" style="width: 300px; padding-top:10px;">
            <span style="color:#fff;">1/5</span>
            <img class="progress-bar2" src=""></img>
            <div class="progress border">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#ccae70" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class="p_text">당신의 희망상대 연령은?</p>
          <div style="margin-top: 10px;"></div>
          <center>
            <ul class="radio-box">
              <li class="list_box" onclick="show(3,'24세이하');">24세이하</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(3,'25세~29세');">25세~29세</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(3,'30세~34세');">30세~34세</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(3,'35세~39세');">35세~39세</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(3,'40세~44세');">40세~44세</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(3,'45세~49세');">45세~49세</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(3,'50세~55세');">50세~55세</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(3,'56세이상');">56세이상</li>
            </ul>
          </center>
        </div>
      </div>
    </section>

    <!-- show(3) -->
    <section id="lovetest">
      <div class="join-charge">
        <div style="background-image: url('../../static/images/lovetest/subscription_fee/mobile_bg01.png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <div style="margin-left:80px; padding-top:25px;">
            <img style="cursor: pointer;" src="../../static/images/lovetest/subscription_fee/m_btn_prev.png" alt="" onclick="show(2);return false;" />
          </div>
          <div class="container" style="width: 300px; padding-top:10px;">
            <span style="color:#fff;">2/5</span>
            <img class="progress-bar2" src=""></img>
            <div class="progress border">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#ccae70" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class="p_text">당신의 희망상대 학력은?</p>
          <center>
            <ul class="radio-box">
              <li class="list_box" onclick="show(4,'고졸');">고졸</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(4,'전문대졸업');">전문대 졸업</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(4,'대학교(4년제)졸업');">대학교(4년제)졸업</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(4,'대학원이상');">대학원이상</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box list_one" onclick="show(4,'유학생');">유학생</li>&nbsp;&nbsp;
            </ul>
          </center>
        </div>
      </div>
    </section>

    <!-- show(4) -->
    <section id="lovetest">
      <div class="join-charge">
        <div style="background-image: url('../../static/images/lovetest/subscription_fee/mobile_bg01.png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <div style="margin-left:80px; padding-top:25px;">
            <img style="cursor: pointer;" src="../../static/images/lovetest/subscription_fee/m_btn_prev.png" alt="" onclick="show(3);return false;" />
          </div>
          <div class="container" style="width: 300px; padding-top:10px;">
            <span style="color:#fff;">3/5</span>
            <img class="progress-bar2" src=""></img>
            <div class="progress border">
              <div class="progress-bar progress-bar-striped progress-bar-animated " style="background-color:#ccae70" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <p class="p_text">당신의 희망상대 연봉은?</p>
          <center>
            <ul class="radio-box">
              <li class="list_box" onclick="show(5,'무관');">무관</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(5,'3000~');">3000~</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(5,'4000~');">4000~</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(5,'5000~');">5000~</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box list_one" onclick="show(5,'1억이상');">1억 이상~</li>
            </ul>
          </center>
        </div>
      </div>
    </section>

    <!-- show(5) -->
    <section id="lovetest">
      <div class="join-charge">
        <div style="background-image: url('../../static/images/lovetest/subscription_fee/mobile_bg01.png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <div style="margin-left:80px; padding-top:25px;">
            <img style="cursor: pointer;" src="../../static/images/lovetest/subscription_fee/m_btn_prev.png" alt="" onclick="show(4);return false;" />
          </div>
          <div class="container" style="width: 300px; padding-top:10px;">
            <span style="color:#fff;margin-bottom:-20px;">4/5</span>
            <!-- <img class="progress-bar2" src=""></img> -->
            <div class="progress border">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:#ccae70" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <p class="p_text">당신의 희망상대 직종은?</p>
          <center>
            <ul class="radio-box">
              <li class="list_box" onclick="show(6,'무관');">무관</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(6,'사무,금융직');">사무,금융직</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(6,'기술,의료,언론');">기술,의료,언론</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(6,'교사,강사,공무원');">교사,강사,공무원</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(6,'자영업,사업,특수직');">자영업,사업,특수직</li>&nbsp;&nbsp;
              <li class="list_box" style="line-height: 40px;" onclick="show(6,'예능계,프리랜서,서비스');">예능계,프리랜서,서비스</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(6,'유학생,석박사');">유학생,석박사</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(6,'전문직기타');">전문직기타</li>
            </ul>
          </center>
        </div>
      </div>
    </section>

    <!-- show(6) -->
    <section id="lovetest">
      <div class="join-charge">
        <div style="background-image: url('../../static/images/lovetest/subscription_fee/mobile_bg01.png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <div style="margin-left:80px; padding-top:25px;">
            <img style="cursor: pointer;" src="../../static/images/lovetest/subscription_fee/m_btn_prev.png" alt="" onclick="show(5);return false;" />
          </div>
          <div class="container" style="width: 300px; padding-top:10px;">
            <span style="color:#fff;">5/5</span>
            <!-- <img class="progress-bar2" src=""></img> -->
            <div class="progress border">
              <div class="progress-bar progress-bar-striped progress-bar-animated " style="background-color:#ccae70" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <p class="p_text">당신의 희망상대 외모는?</p>
          <center>
            <ul class="radio-box">
              <li class="list_box" onclick="show(7,'귀여움');">귀여움</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(7,'지적임');">지적임</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box" onclick="show(7,'샤프함');">샤프함</li>&nbsp;&nbsp;
              <li class="list_box" onclick="show(7,'푸근함');">푸근함</li>
            </ul>
            <ul class="radio-box">
              <li class="list_box list_one" onclick="show(7,'평범함');">평범함</li>
            </ul>
          </center>
        </div>
      </div>
    </section>

    <!-- show(7) 카카오로 결과 확인하기 -->
    <section id="lovetest">
      <div class="join-charge">
        <div style="background-image: url('../../static/images/lovetest/subscription_fee/mobile_bg02(2).png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <div style="margin-left:80px; padding-top:25px;">
            <img style="cursor: pointer;" src="../../static/images/lovetest/subscription_fee/m_btn_prev.png" alt="" onclick="show(6);return false;" />
          </div>
          <center>
            <div style="margin-top:450px;">
              <img style="cursor: pointer;" style="width: 300px;" src="../../static/images/lovetest/subscription_fee/btn_kakao.png" alt="" onclick="javascript:kakaoGetData();" />
            </div>
          </center>
        </div>
      </div>
    </section>

    <!-- show(8) result section -->
    <section id="lovetest">
      <div class="join-charge">
        <div style="background-image: url('../../static/images/lovetest/subscription_fee/m_result.png'); height:600px; background-repeat: no-repeat; background-position:center;">
          <div style="margin-left:80px; padding-top:25px;">
            <img src="../../static/images/lovetest/subscription_fee/m_btn_re.png" alt="" onclick="window.location.reload();" />
          </div>
        </div>
      </div>
    </section>


  </div>
  <!-- //컨텐츠 영역 -->
  <!-- 하단 공통 영역 -->
<script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
<script>

	$(".link").on("click",function(event){
		event.preventDefault();
	});

	Kakao.init('16b3c92425889edb797d2dc78b3d1428'); // 발급받은 키 중 javascript키를 사용해준다.
	//카카오 정보 가져오기
	function kakaoGetData2(counselGbn) {
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
						if(phone_number != "") {
							var phone_number = phone_number.replace('+82 ', '0'); // 핸드폰 앞자리 치환
						}
						var nickname = response.properties.nickname; // 닉네임(카카오톡 닉네임을 가져오기 때문에 정확한 이름이 아닐수있음)

						$('#user_id').val(user_id);
						$('#birthday1').val(birthyear);
						$('#email1').val(email);
						$('#gender1').val(gender);
						$('#phone1').val(phone_number);
						$('#name1').val(nickname);
						$('#counselGbn1').val(counselGbn);

	
						
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
						$('#area1').val(base_address);
						//$('#detail_address').val(detail_address);
						//$('#zone_number').val(zone_number);
						setTimeout(function() { // 정보 넘기는 시간이 필요해 지연 후 로그인 처리 페이지로 넘김
							$('#frm3').validate({
								success : function(){
									var f = this;
									f.target="_self";
									f.action="../../../new/common/footerKakaoProc.php";
									f.submit();
								}
							})
						}, 500);
					},
					fail: function(error) {
						console.log(error)
					},
				})
			},
			fail: function(error) {
				console.log(error)
			},
		})
	}

</script>
	<form id="frm3" name="frm3" method="post">
		<input type="hidden" id="counselGbn1" name="counselGbn1" value=""/>
		<input type="hidden" id="marriage1" name="marriage1" value="10501"/>
		<input type="hidden" id="name1" name="name1">
		<input type="hidden" id="gender1" name="gender1">
		<input type="hidden" id="birthday1"name="birthday1">
		<input type="hidden" id="area1" name="area1">
		<input type="hidden" id="phone1" name="phone1">
		<input type="hidden" id="email1" name="email1">
	</form>

	<center>
<footer id="footer" style="max-width:800px;">
<div id="layer_fixeds" class="phone-links">
	<!--
		<a class="link" href="#" onclick="kakaoGetData2('10047')";><i class=""></i>1:1문의</a>
		<a class="link" href="#" onclick="kakaoGetData2('10048')";><i class=""></i>브로셔신청</a>
	-->
		<a class="link" href="/nm/common/Counseling.php"><i class=""></i>1:1문의</a>
		<a class="link" href="/nm/common/brochure.php"><i class=""></i>브로셔신청</a>
		<a href="tel:025404000"><i class="ico-phone"></i>전화상담</a>
</div>

		<table style="text-align:center; margin-bottom:5px;">
		<tr style="text-align:center;">
		<td style="width:71.4%; text-align:center;">
			<a href="https://m.isoohyun.co.kr/nm/html/introduce/notice-view.php?idx=94"><img src="/nm/static/images/common/footer/mobile_banner_fair01.png" alt="공정거래위원회" /></a>
		</td>
		<td style="text-align:right;">
			<a href="/nm/html/introduce/about01.php"><img src="/nm/static/images/common/footer/mobile_banner_fair02.png" alt="오시는길" /></a>
		</td>
		</tr>
		</table>
		
		<!--
  		<div style="width:100%;margin:0;overflow:hidden;">
				<div style="float:left;width:14.28%;">	<a href="http://www.facebook.com/isoohyun" target="_blank" ><img src="/nm/static/images/common/footer/btn-sns-f.jpg" alt="페이스북" width="100%"/></a></div>
			 <div style="float:left;width:14.28%;"> <a href="http://blog.naver.com/isoohyun4000" target="_blank" ><img src="/nm/static/images/common/footer/btn-sns-b.jpg" alt="블로그" width="100%"/></a></div>
			 <div style="float:left;width:14.28%;"><a href="https://pf.kakao.com/_iaqRE" target="_blank" ><img src="/nm/static/images/common/footer/btn-sns-k.jpg" alt="카카오톡" width="100%"/></a></div>
			<div style="float:left;width:14.28%;"><a href="https://www.instagram.com/noblesse_soohyun/" target="_blank" ><img src="/nm/static/images/common/footer/btn-sns-in.jpg" alt="인스타그램" width="100%"/></a></div>
			<div style="float:left;width:14.28%;">	<a href="https://story.kakao.com/ch/isoohyun4000/" target="_blank" ><img src="/nm/static/images/common/footer/btn-sns-ks.jpg" alt="카카오스토리" width="100%"/></a></div>
			<div style="float:left;width:14.28%;">	<a href="https://m.post.naver.com/isoohyun4000?isHome=1" target="_blank" ><img src="/nm/static/images/common/footer/btn-sns-np.jpg" alt="네이버포스트" width="100%"/></a></div>
			<div style="float:left;width:14.28%;"><a href="https://twitter.com/isoohyun1" target="_blank" ><img src="/nm/static/images/common/footer/btn-sns-tw.jpg" alt="트위터" width="100%"/></a></div>
			</div>
	-->
    <ul class="awarded">
        <li><img src="/nm/static/images/common/footer/img-footer01.gif" alt="" /></li>
        <li><img src="/nm/static/images/common/footer/img-footer02.gif" alt="" /></li>
        <li><img src="/nm/static/images/common/footer/img-footer03.gif" alt="" /></li>
        <li><img src="/nm/static/images/common/footer/img-footer04.gif" alt="" /></li>
    </ul>
    <div class="footer">
		<div style="margin-top:20px; margin-bottom:20px; border-bottom: 1px solid #696969;">
			<center>
			<img src="/nm/static/images/common/footer/sns/foot_sns_title.png" width="200px;" alt="" />
			<br>
			<br>
			<a href="http://www.facebook.com/isoohyun" target="_blank" >
			<img src="/nm/static/images/common/footer/sns/foot_sns01.png" width="40px;" alt="" />&nbsp;
			</a>
			<a href="http://blog.naver.com/isoohyun4000" target="_blank" >
			<img src="/nm/static/images/common/footer/sns/foot_sns02.png" width="40px;" alt="" />&nbsp;
			</a>
			<a href="https://pf.kakao.com/_iaqRE" target="_blank" >
			<img src="/nm/static/images/common/footer/sns/foot_sns03.png" width="40px;" alt="" />&nbsp;
			</a>
			<a href="https://www.instagram.com/noblesse_soohyun/" target="_blank" >
			<img src="/nm/static/images/common/footer/sns/foot_sns04.png" width="40px;" alt="" />&nbsp;
			</a>
			<a href="https://story.kakao.com/ch/isoohyun4000/" target="_blank" >
			<img src="/nm/static/images/common/footer/sns/foot_sns05.png" width="40px;" alt="" />&nbsp;
			</a>
			<a href="https://m.post.naver.com/my.nhn?memberNo=2032633" target="_blank" >
			<img src="/nm/static/images/common/footer/sns/foot_sns06.png" width="40px;" alt="" />&nbsp;
			</a>
			<a href="https://twitter.com/isoohyun1" target="_blank" >
			<img src="/nm/static/images/common/footer/sns/foot_sns07.png" width="40px;" alt="" />
			</a>
			<a href="https://www.youtube.com/channel/UCvK-WgMVoDdQY9ea2pO4L5w" target="_blank" >
				&nbsp;<img src="/nm/static/images/common/footer/sns/foot_sns08.png" width="40px;" alt="" />
			</a>
			<br>
			<br>
			</center>
		</div>
			<div class="event-box" style="height: 38px;">
				<p class=""><img src="/nm/static/images/common/footer/logo_utube.png" alt="" style="width:140px;     position: absolute; top: 5px; left: 10px;"/></p>
			
				<a href="/nm/html/introduce/youtube.php" style="display: block; position: absolute;top: 5px; right: 6px; margin: 0px; padding: 0px 4px;"><div style="float: right; z-index: 999999; width: 50px; font-size:13px; height: 30px; color: #ffffff; text-align: center; line-height: 30px; background: #cc0000;">more</div></a>
			</div>


				<center>
				<div class="movie">
				<br>
				<iframe width="96%" height="375px" src="https://www.youtube-nocookie.com/embed/80j5IYFp0V8?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				</center>

				<br>

        <p class="btn-link" style="margin-top:-15px;">
            			<a href="/nm/html/login/login.php">로그인</a>
						<a href="/nm/html/login/join01.php">회원가입</a>
			
			<a href="http://www.isoohyun.co.kr/new/main.php?gubun=p">PC버전</a>
        </p>
        <p class="footer-link">
            <a href="/nm/html/login/agreement.php">이용약관</a> | 
			<a href="/nm/html/login/personal.php" class="txtY">개인정보취급방침</a> | 
			<a href="tel:025404000">대표번호 : <span class="txtY">02-540-4000</span></a>
        </p>
				<address>
					수현(주) |  대표자 : 경증수 | 결혼중개업 : 강남 090028 | 사업자 등록번호 : 211-88-34578<br />
					개인정보 관리 책임자 : 경광현<br /><br />
					<b>서울본사</b> | 서울시 강남구 강남대로 606 (논현동 1번지 삼주빌딩 5층)<br />
					<b>부산지사</b> | 부산시 해운대구 우동 1510 센텀드림월드빌딩 9층 (부산시 해운대구 셈텀2로 25)<br />
					TEL : <a href="tel:0517119110"><span class="txtY">051-711-9110</span></a> | FAX:051-711-9120<br />
					<b>대구지사</b> | 대구광역시 중구 달구벌대로 2105, 5층 (덕상동, 덕산빌딩)<br />
					TEL : <a href="tel:0537190460"><span class="txtY">053-719-0460</span></a> | FAX:053-719-0469<br />
                    <b>대전지사</b> | 대전광역시 서구 대덕대로 199, 7층노블레스 수현(둔산동, 우남빌딩)<br />
					TEL : <a href="tel:0427103950"><span class="txtY">042-710-3950</span></a> | FAX:042-710-3959
				<br /><br />
				</address>
        <p class="copy">copyright(c)soohyun  all rights reserved</p>
    </div>
</footer>
</center>
<!-- //하단 공통 영역  -->
<!--<script src="http://data.neoebiz.co.kr/cdata.php?reData=53707"></script>--><script>
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
</body>

</html>