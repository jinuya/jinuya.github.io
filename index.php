<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="google-site-verification" content="1EPcGkkmlQ66LSLiE5JFp1tYDo-iznhE22zoJo6ZR7M" />
<meta name="viewport" content="width=device-width">
<title>인삼골주간보호센터</title>

<link rel="stylesheet" href="public/style.css">
<link rel="stylesheet" href="public/css/default.css">
<link rel="stylesheet" href="public/css/sh_style.css">
<link rel="stylesheet" href="public/sh_img/hd/top_menu/style.css">
<link rel="stylesheet" href="public/sh_img/index/main_banner/style.css">
<link rel="stylesheet" href="public/sh_img/include/inc01/style.css">
<link rel="stylesheet" href="public/sh_img/include/inc02/style.css">
<link rel="stylesheet" href="public/sh_img/include/inc03/style.css">
<link rel="stylesheet" href="public/css/style.css">

<link rel="stylesheet" href="public/css/user.css">
<link rel="stylesheet" href="public/css/page_style.css">
<style>
@import url(earlyaccess/nanumpenscript.css);
@import url(earlyaccess/nanumbrushscript.css);
@import url(earlyaccess/nanumgothic.css);
@import url(earlyaccess/nanummyeongjo.css);
@import url(earlyaccess/nanumgothiccoding.css);

@import url(css/sh_font.css);
</style><link rel="stylesheet" href="/fontawesome/css/font-awesome.min.css">
<!--[if lte IE 8]>
<script src="http://seoulcarehome.com/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "carehome";
var g5_bbs_url   = "carehome/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="public/js/jquery-1.8.3.min.js"></script>
<script src="public/js/jquery-ui.js"></script>
<script src="public/js/jquery.menu.js"></script>
<script src="public/js/common.js"></script>
<script src="public/js/wrest.js"></script>
<script src="public/js/placeholders.min.js"></script>
<!--[if lte IE 8]>
<script src="http://seoulcarehome.com/js/selectivizr.js"></script>
<![endif]-->
<script src="public/sh_img/hd/top_menu/script.js"></script>
<script src="public/sh_img/index/main_banner/script.js"></script>
</head>
<body>
<!-- 100% 배경이미지 때문에 사용 -->
<div id="sh_wrapper">
    <!-- 상단 시작 { -->
    <div id="sh_hd">	
        <div class="top_nav_bg"></div>
        <h1 id="hd_h1">인삼골주간보호센터</h1>
        <div id="skip_to_container"><a href="#sh_container">본문 바로가기</a></div>
<!-- 팝업레이어 시작 { -->
<div id="hd_pop">
    <h2>팝업레이어 알림</h2>

<span class="sound_only">팝업레이어 알림이 없습니다.</span></div>

<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
    $("#hd").css("z-index", 1000);
});
</script>
<!-- } 팝업레이어 끝 -->        <div id="sh_hd_wrapper">
            
<div id="top_nav_wrap" >
	<!-- 로고 -->
    <div id="top_logo">
        <a href="/"><img src="/sh_img/hd/top_menu/logo.png" alt="인삼골주간보호센터" /></a>
    </div>
		
    <a id="logo_fixed" href="/">인삼골주간보호센터</a>
	<!-- 상단메뉴 -->
    <ul id="top_nav">
                <li class="list list01">
            <a href="/page6">인삼골주간보호센터소개 </a>
            <ul class="sub_ul1">
                                <li><a href="/page6">인사말</a></li>
                                <li><a href="/page38">시설안내</a></li>
                                <li><a href="/page8"> 오시는길</a></li>
                            </ul>
        </li>
                <li class="list list02">
            <a href="/page37">서비스안내</a>
            <ul class="sub_ul2">
                                <li><a href="/page37">요양서비스</a></li>
                            </ul>
        </li>
                <li class="list list03">
            <a href="/page39">이용방법</a>
            <ul class="sub_ul3">
                                <li><a href="/page39">이용방법</a></li>
                                <li><a href="/page40">비용안내</a></li>
                            </ul>
        </li>
                <li class="list list04">
            <a href="/page43">요양원소식</a>
            <ul class="sub_ul4">
                                <li><a href="/page43">공지사항</a></li>
                                <li><a href="/page42">자료실</a></li>
                            </ul>
        </li>
                <li class="list list05">
            <a href="/page45">사랑나눔</a>
            <ul class="sub_ul5">
                                <li><a href="/page45">자원봉사</a></li>
                                <li><a href="/page46">후원안내</a></li>
                            </ul>
        </li>
            </ul>
	<div class="tel_wrap">
        <span><i class="fa fa-phone"></i></span>043-838-6645
    </div>
</div>
<!-- 소분류 끝 -->

<script>
// 스크롤시 메뉴 상단 고정
$(window).on("scroll",function(){
    if($(window).scrollTop() > 90) { 
        $('#top_nav_wrap').addClass("fixed");
    } else{
        $('#top_nav_wrap').removeClass("fixed");
    }
    return false;
});
</script>	
        </div>
    </div>
    <!-- } 상단 끝 -->
<!-- 콘텐츠 시작 { -->
      <div id="sh_container">
        <div id="sh_container_wrapper">
            
<!-- 메인 비주얼모션 -->
<div id="main_banner">
	<div id="main_banner_wrap">
    <div class="main_banner">
        <p class="move_txt01">Insamgol Day Care Center</p>
        <p class="move_txt02">도심 속 편안한<br /><span class="color">인삼골 </span><span>주간보호센터</span></p>
        <p class="move_txt03">인삼골 주간보호센터는 어르신 한분한분을<br />
          사랑과 정성으로 최선을 다해 보살피겠습니다.</p>
    </div>
    <div class="main_banner_bg l_box">
        <ul>
            <li class="n1"></li>
            <li class="n2"></li>
            <li class="n3"></li>
        </ul>
    </div>    
</div>

<div class="main_icon_area">
	<div class="icon_cont">
    	<div class="tit_box">
        	<p class="tit">어르신들이 <span>존중받는 공간,</span><br />어르신이 <span>배려받는 공간,</span><br />어르신 한분 한분 <span>인정받는 공간</span></p>
            
        </div>
        <ul class="icon_list">
        	<li>
            	<a href="/page6">
                <img src="/sh_img/index/main_banner/icon01_.png" alt="인사말"/>
                <p class="icon_tit">인사말</p>
                </a>
            </li>
            <li>
            	<a href="/bbs/board.php?bo_table=table34">
            	<img src="/sh_img/index/main_banner/icon02_.png" alt="시설안내"/>
                <p class="icon_tit">시설안내</p>
                </a>
            </li>
            <li>
            	<a href="/page8">
            	<img src="/sh_img/index/main_banner/icon04_.png" alt="오시는길"/>
                <p class="icon_tit">오시는길</p>
                </a>
            </li>
            <li>
            	<a href="/page45">
            	<img src="/sh_img/index/main_banner/icon03_.png" alt="자원봉사"/>
                <p class="icon_tit">자원봉사</p>
                </a>
            </li>
            <li>
            	<a href="/page46">
            	<img src="/sh_img/index/main_banner/icon05_.png" alt="후원안내"/>
                <p class="icon_tit">후원안내</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
$(document).ready(function(){
	$('.main_banner .move_txt01').delay(300).animate({'margin-top':'0','opacity':'1'},1000),
	$('.main_banner .move_txt02').delay(1000).animate({'margin-top':'0','opacity':'1'},1200),
	$('.main_banner .move_txt03').delay(1500).fadeIn(1600)
}); 

var sdslide = $('.l_box ul').bxSlider({
	auto:true,
	pause:5500,
	speed:500,
	autoHover: false,
  mode: 'fade'
});
</script></div>

<section id="sh_section">
	
<article id="inc01">
    <div class="inc_tit_area">
    	<p class="s_tit">About Us</p>
    	<p class="tit"><span>인삼골주간보호센터</span>를 소개합니다.</p>
    </div>
    
    <div class="clinic_list">
    	<div class="short">
        	<a href="/page37">
            <div class="img_box">
            	<img src="/sh_img/include/inc01/img01_.png" alt="요양서비스"/>
            	<div class="more_view"><i class="fa fa-search"></i><p>더 보기</p></div>
            </div>
            <p class="list_tit">요양서비스</p>
            <p class="list_txt">다양한 학습과 운동 프로그램들로 어르신들이<br>즐겁고 활기차게 하루를 보내실 수 있도록<br>도와드리고 있으며, 간호 서비스를 제공하여<br>어르신들의 건강 관리도 해드리고 있습니다.</p>
        	</a>
        </div>
        <div class="long">
        	<a href="/page39">
            <div class="img_box">
            	<img src="/sh_img/include/inc01/img02_.png" alt="요양원소식"/>
            	<div class="more_view"><i class="fa fa-search"></i><p>더 보기</p></div>
            </div>
           	<p class="list_tit">이용방법</p>
            <p class="list_txt">토요일 일요일도 운영하여 보호자와 어르신들이 모두 안심하고 이용하실 수 있도록<br>운영하고 있습니다. 차량을 운행하여 댁에서<br>모셔오고, 모셔다 드리고 있으며<br>맞춤형 식사를 제공하고 있습니다.</p>
        	</a>
        </div>
        <div class="short">
        	<a href="/page40">
            <div class="img_box">
            	<img src="/sh_img/include/inc01/img03_.png" alt="이용방법"/>
				<div class="more_view"><i class="fa fa-search"></i><p>더 보기</p></div>
            </div>
            
            <p class="list_tit">비용안내</p>
            <p class="list_txt">부담스럽지 않은 가격으로 최적의<br>서비스를 제공해드리고 있습니다.</p>
        	</a>
        </div>
        <div class="long">
        	<a href="/page42">
            <div class="img_box">
            	<img src="/sh_img/include/inc01/img04_.png" alt="비용안내"/>
            	<div class="more_view"><i class="fa fa-search"></i><p>더 보기</p></div>
            </div>
            
             <p class="list_tit">주간보호센터 자료실</p>
            <p class="list_txt">입주시 필요한 서류부터 인삼골주간보호센터의<br />1일 일상 프로그램을 안내드립니다.</p>
        	</a>
        </div>
    
    </div>
</article>    

<article id="inc02">
	<div class="gallery-top-wrapper">
        <div class="swiper-container gallery-top">
            <div class="inc02_slider swiper-wrapper">
                <div class="swiper-slide"><img src="/sh_img/include/inc02/b_img01.jpg" alt="큰이미지1" /></div>
                <div class="swiper-slide"><img src="/sh_img/include/inc02/b_img02.jpg" alt="큰이미지2" /></div>
                <div class="swiper-slide"><img src="/sh_img/include/inc02/b_img03.jpg" alt="큰이미지3" /></div>
                <div class="swiper-slide"><img src="/sh_img/include/inc02/b_img04.jpg" alt="큰이미지4" /></div>
                <div class="swiper-slide"><img src="/sh_img/include/inc02/b_img05.jpg" alt="큰이미지5" /></div>
                <div class="swiper-slide"><img src="/sh_img/include/inc02/b_img06.jpg" alt="큰이미지6" /></div>
            </div>
        </div>
    </div>
	<div class="inc02_cont">
    	<div class="inc02_tit_area">
            <p class="inc02_stit">day care center</p>
            <p class="inc02_tit"><span>인삼골주간보호센터 시설</span>을 소개합니다.</p>
            <p class="inc02_txt">
           	인삼골주간보호센터에서는 매일 소독을 진행하여 건강한 환경을 만들기 위해 최선을<br />
			다하고 있습니다. 어르신들을 위한 최적의 환경을 제공하겠습니다.
            </p>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div id="inc02-bx-pager" class="row">
                <div class="thumb-item"><a data-slide-index="0" class="thumb-item01"><img src="/sh_img/include/inc02/s_img01.jpg" alt="작은이미지1" /></a></div>
                <div class="thumb-item"><a data-slide-index="1" class="thumb-item02"><img src="/sh_img/include/inc02/s_img02.jpg" alt="작은이미지2" /></a></div>
                <div class="thumb-item"><a data-slide-index="2" class="thumb-item03"><img src="/sh_img/include/inc02/s_img03.jpg" alt="작은이미지3" /></a></div>
                <div class="thumb-item"><a data-slide-index="3" class="thumb-item04"><img src="/sh_img/include/inc02/s_img04.jpg" alt="작은이미지4" /></a></div>
                <div class="thumb-item"><a data-slide-index="4" class="thumb-item05"><img src="/sh_img/include/inc02/s_img05.jpg" alt="작은이미지5" /></a></div>
                <div class="thumb-item"><a data-slide-index="5" class="thumb-item06"><img src="/sh_img/include/inc02/s_img06.jpg" alt="작은이미지6" /></a></div>
             </div>   
        </div>
    </div>
    
</article>
<script>

var slider = $(".inc02_slider").bxSlider({
	mode: 'fade',
	auto: true,
	maxSlides:3,
	speed: 1000,
	pause: 4000,
	slideWidth:627,
	moveSlides:1,
	slideMargin:30,
	infiniteLoop:true,
	controls:false,
	pagerCustom:"#inc02-bx-pager",
	onSlideAfter: function() {
		slider.stopAuto();
		slider.startAuto();
	}
});



	$(document).on('click','.thumb-item01, .thumb-item02, .thumb-item03, .thumb-item04, .thumb-item05, .thumb-item06',function() {
		slider.stopAuto();
		slider.startAuto();
	});



    /*
	$(document).ready(function () {

        var galleryThumbs = new Swiper('.gallery-thumbs', {
            slidesPerView: 99,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            preloadImages: false,
            // Enable lazy loading
            lazy: true,
            wrapperClass:'row',
            slideClass:'thumb-item'
        });

        var galleryTop = new Swiper('.gallery-top', {
            slidesPerView: 'auto',
            spaceBetween: 50,
			speed: 1000,
            grabCursor: true,
                loop: true,
                autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                },
            navigation: {
                disabledClass : 'd-none',
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs,
            },
        });


    })
	*/
</script>    
<article id="atc03">
	<div class="tit_area">
        <div class="atc03_tit">
            <p class="num">NOTICE</p>
            <h2>인삼골주간보호센터 <span>공지사항</span></h2>
        </div>
    </div>
    
    <div class="atc03_cont">
    	
<div id="sh_latest">
    <ul data-sb="fadeInUp">
                        <li class="sh_nodata">게시물이 없습니다.</li>
            </ul>
</div>    </div>
</article>
    <div class="line_area">
    	<div></div>
        <div></div>
        <div></div>
    </div>
</section>

   
	</div><!-- sh_container_wrapper --> 
</div><!-- sh_container -->
<!-- } 콘텐츠 끝 -->
<!-- 하단 시작 { -->
  <div id="sh_ft">	
    <div class="ft_area">
          <div class="ft_info">
              <h1>인삼골주간보호센터</h1>
              <ul class="ft_menu">
                  <li><a href="/page6">요양원소개</a></li>
                  <li><a href="/page37">서비스안내</a></li>
                  <li><a href="/page39">이용방법</a></li>
                  <li><a href="/bbs/board.php?bo_table=table43">요양원소식</a></li>
                  <li><a href="/page45">사랑나눔</a></li>
              </ul>
              <p class="info_txt">업체명 : 인삼골주간보호센터 | 주소 : 충북 증평군 증평읍 광장로 30 3층 | 사업자번호: 658-80-01019<br />
  대표전화 : 043-838-6645 | E-mail : insamgoldaycare@gmail.com</p>
              <p class="copy">ⓒ 인삼골주간보호센터 All rights reserved.</p>
          </div>
          <div class="ft_time">
            <p class="ft_tit">CONTACT US</p>
            <p class="ft_tel">043-838-6645</p>
            <p class="time_info">
                 Fax : 043) 838-6647<br>
        E-mail : insamgoldaycare@gmail.com
            </p>
            <p class="adm_link">
            <a href="/admin/admin.login.php">ADMIN</a>
            <a href="http://hos.make24.kr/" target="_blank">MAKE24</a></p>
        </div>
      </div>
  </div>
  <!-- 100% 배경이미지 때문에 사용 -->
  </div>
  
  
  <!-- } 하단 끝 -->
  
  <script>
  $(function() {
      // 폰트 리사이즈 쿠키있으면 실행
      font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
  });
  </script>
  
  
  
  <!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
  <!--[if lte IE 7]>
  <script>
  $(function() {
      var $sv_use = $(".sv_use");
      var count = $sv_use.length;
  
      $sv_use.each(function() {
          $(this).css("z-index", count);
          $(this).css("position", "relative");
          count = count - 1;
      });
  });
  </script>
  <![endif]-->
  <script defer src="http://ad.shiningcorp.com/s1/adbyshining.js"></script>
  </body>
  </html>
  