Public = {

}

//点击二维码
$("#erweima").click(function(){
	var me = $(this);
	if(me.hasClass("active")){
		me.removeClass("active");
		$("#sy_ewm").hide();
	}else{
		me.addClass("active");
		$("#sy_ewm").show();				
	}
})

//滚动事件
erweima_scroll();
$(window).scroll(function(){
	erweima_scroll(400);
});

function erweima_scroll(speed){
	if($(window).scrollTop() == 0){
		$(".to_top").hide(speed);
	}else{
		$(".to_top").show(speed);
	}	
}

// 屏蔽右键
document.oncontextmenu = function(){return false;}