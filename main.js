$(document).ready(function(){

/***************** Hide and show column ***************************/
	$("#leftcolumn").click(function(){
		$(".art--article__leftcolumn").css("display", "block");
		$("#leftcolumn").css("display", "none");
	});

	$("#leftcolumnhide").click(function(){
		$(".art--article__leftcolumn").css("display", "none");
		$("#leftcolumn").css("display", "block");
	});

	$("#middlecolumn").click(function(){
		$(".art--article__middlecolumn").css("display", "block");
		$("#middlecolumn").css("display", "none");
	});

	$("#middlecolumnhide").click(function(){
		$(".art--article__middlecolumn").css("display", "none");
		$("#middlecolumn").css("display", "block");
	});

	$("#rightcolumn").click(function(){
		$(".art--article__rightcolumn").css("display", "block");
		$("#rightcolumn").css("display", "none");
	});

	$("#rightcolumnhide").click(function(){
		$(".art--article__rightcolumn").css("display", "none");
		$("#rightcolumn").css("display", "block");
	});

/***********Smooth scroll********************/
	$(function() {
		$('.btn--back').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top
		}, 1000); 
		return false;
		}
		}
		});
	});
/***********************************************/
});
