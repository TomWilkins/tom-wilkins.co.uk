var tomwilkins=function(){var i,t;return i=function(){$(document).ready(function(){t()})},t=function(){$("nav > a").click(function(i){i.preventDefault();var t=this.href,a=t.substring(t.indexOf("#"));$("html, body").animate({scrollTop:$(a).offset().top},1e3,"easeOutExpo",function(){window.location.hash=a}),$(".active").removeClass("active"),$("[href="+a+"]").addClass("active")}),""===window.location.hash?$('[href="#about"]').click().addClass("active"):$('[href="'+window.location.hash+'"]').addClass("active")},{init:i}}();tomwilkins.init();