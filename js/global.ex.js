//ajax
var ajaxbtn = {
	init : function(){
		if($('._ajax-btn').length > 0){
			this.action();
		}
	},
	action : function(){
		var spd = 500;

		$(document).on('click','._ajax-btn',function(){
			var href = $(this).attr('href');
			var idx = $(this).data('idx');
			var type = $(this).data('type');

			if(type == undefined){
				type = 'GET';
			}

			$.ajax({
				type: type,
				url: href,
				data : idx,
				success : function(data) {
					$('body').find('._pop-ajax').remove().end().append(data).find('._pop-ajax').fadeIn(spd);
				}
			});
			return false;
		});

		$(document).on('click','._pop-ajax ._bg, ._pop-ajax ._close',function(){
			$('._pop-ajax').fadeOut(spd,function(){$(this).remove()});
			return false;
		});

	}
}

$(document).ready(function(){
	ajaxbtn.init();
});

//bookmark
var bookmark = {
	init : function(){
		this.action();
	},
	action : function(){
		var set = {
			btn : $('.favorite')
		};

		var isIE = /*@cc_on!@*/false || !!document.documentMode;//익스플로러
		var mainUrl = document.location.href.match(/(http[s]*:\/\/[a-zA-Z0-9\-\.]*)/)[1];
		var title = document.title;

		set.btn.on({
			'click' : function(){
				if(isIE){
					window.external.AddFavorite(mainUrl, title);
				}else{
					alert('확인을 클릭하신 후 주소창에서 <Ctrl-D>를 누르시면 즐겨찾기에 등록됩니다.');
				}
				return false;
			}
		});
	}
};

//gotop
$(function(){
	$('._gotop').on({
		'click' : function(e){
			e.preventDefault();
			$("html, body").animate({scrollTop:0}, "fast(1000)"); 
			easing: 'easeInOutExpo'
			return false;
		}
	});
});

//tab plugin
$(function(){
	$('.tabWrap').tab_plugin({
		'tab' : $('.tab'),
		'article' : $('.tabCont'),
		'class' : 'active',
		'mode' : 'fade'
	});
});

//tab
$(function(){
	var tab = $('._tab');
	tab.removeClass('jsOff');
	function onSelectTab(){
		var $this = $(this);

		//add Class active 
		$(this).parents('ul').find('li').removeClass('active');
		$(this).parent('li').addClass('active');

		var myclass = [];
		$this.parentsUntil('._tab:first').filter('li').each(function(){
			myclass.push( $(this).attr('class') );
		});

		myclass = myclass.join(' ');

		if (!tab.hasClass(myclass)){
			 tab.attr('class','_tab').addClass(myclass);
		}
	}
	tab.find('li>a').click(onSelectTab).focus(onSelectTab);
})

//nav
$(function(){
	$('#gnb>ul>li').on({
		'mouseenter' : function(){
			$(this).find('ul').stop().slideDown();	
		},
		'mouseleave' : function(){
			$(this).find('ul').stop().slideUp();		
		}
	});
});

//visual
function visual(){
	$('.visual ._roll').bxSlider({
		mode : 'fade',
		auto: true,
		useCSS: false,
		pager: false,
		controls: false,
		pause: 5000,
		speed: 500,
		touchEnabled: false,
		stopAutoOnClick: true,
		easing: 'easeInOutExpo'
	});
}

/*sub*/
//뷰페이지 
var viewImg = {
	init : function(){
		this.action();
	},
	action : function(){
		var set = {
			big : $('.item_view .big'),
			broll : $('.item_view .big .roll'),
			sroll : $('.item_view .tmb .roll'),
			thm : $('.item_view .tmb .roll li')
		};
		
		var galNum = 0
		var page = 0;

		//큰 이미지
		var roll_01 = set.broll.bxSlider({
			auto: false,
			pager: false,
			controls : true,
			speed: 500,
			easing: 'easeInOutExpo',
			onSlideBefore: function(){
				galNum = roll_01.getCurrentSlide();
				page = Math.floor(galNum/4);
				roll_02.goToSlide(page);
				naming();
			}
		});

		$('.item_view .tmb .roll li').eq(0).addClass('active').siblings().removeClass('active');

		function naming(){
			$('.item_view .tmb .roll li').eq(galNum).addClass('active').siblings().removeClass('active');
		}

		//작은 이미지
		var roll_02 = set.sroll.bxSlider({
			auto: false,
			pager: false,
			controls : false,
			useCSS: false,
			infiniteLoop: false,
			minSlides : 4,
			maxSlides :4,
			moveSlides : 4,
			slideWidth : 85,
			slideMargin :16,
			speed: 500,
			easing: 'easeInOutExpo'
		});
		
		$('.item_view .tmb .roll li').click(function(e){
			e.preventDefault();
			galNum = $(this).index();
			roll_01.goToSlide(galNum);
			naming();
		});
	
		//roll_01.goToSlide(idx);
	}
}