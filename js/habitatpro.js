// JavaScript Document
$(document).ready(function(){
	
	"use strict";
	
	$(".hideP").hide();
	$(".showMore").click(function() {
		$(".showMore").hide();
		$(".hideP").show();
		
    });
	$(".showLess").click(function() {
		$(".hideP").hide();
		$(".showMore").show();
    });
	
	
	
	toggle();
window.onresize = function() {
    toggle();
};

function toggle() {
    if (window.innerWidth < 1025) {
        
        document.getElementById('hideNews').style.display = 'block';        
    }
    else {
        document.getElementById('hideNews').style.display = 'block';
                      
    }    
}
	
	
	
$(".window").css("height", $(window).height());
		$(".window").css("width", $(window).width());
	
    var homeView=$(window).height()-$('header').height()-$('footer').height();
	 var view=$(window).height()-$('header').height()-$('footer').height();
	
	//$("#stories, #heroArea").ccs("height", view);
	
	 
});

