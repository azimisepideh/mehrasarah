function s5_lazyload_all(){if("all"==s5_lazyload){if(document.getElementById("s5_top_row1_area_inner"))for(var e=document.getElementById("s5_top_row1_area_inner").getElementsByTagName("IMG"),a=0;a<e.length;a++)e[a].className=""==e[a].className?"s5_lazyload":e[a].className+" s5_lazyload";if(document.getElementById("s5_top_row2_area_inner"))for(var e=document.getElementById("s5_top_row2_area_inner").getElementsByTagName("IMG"),a=0;a<e.length;a++)e[a].className=""==e[a].className?"s5_lazyload":e[a].className+" s5_lazyload";if(document.getElementById("s5_top_row3_area_inner"))for(var e=document.getElementById("s5_top_row3_area_inner").getElementsByTagName("IMG"),a=0;a<e.length;a++)e[a].className=""==e[a].className?"s5_lazyload":e[a].className+" s5_lazyload";if(document.getElementById("s5_center_area_inner"))for(var e=document.getElementById("s5_center_area_inner").getElementsByTagName("IMG"),a=0;a<e.length;a++)e[a].className=""==e[a].className?"s5_lazyload":e[a].className+" s5_lazyload";if(document.getElementById("s5_bottom_row1_area_inner"))for(var e=document.getElementById("s5_bottom_row1_area_inner").getElementsByTagName("IMG"),a=0;a<e.length;a++)e[a].className=""==e[a].className?"s5_lazyload":e[a].className+" s5_lazyload";if(document.getElementById("s5_bottom_row2_area_inner"))for(var e=document.getElementById("s5_bottom_row2_area_inner").getElementsByTagName("IMG"),a=0;a<e.length;a++)e[a].className=""==e[a].className?"s5_lazyload":e[a].className+" s5_lazyload";if(document.getElementById("s5_bottom_row3_area_inner"))for(var e=document.getElementById("s5_bottom_row3_area_inner").getElementsByTagName("IMG"),a=0;a<e.length;a++)e[a].className=""==e[a].className?"s5_lazyload":e[a].className+" s5_lazyload"}}!function(e){window.JqLazyLoader=function(){this.options={container:e(window),items:".s5_lazyload"},this.loaded=[]},JqLazyLoader.prototype.initialize=function(a){if(this.options=e.extend(this.options,a),!this.options.items)throw"no pictures to lazyload";this.images=e(this.options.items),this.containerHeight=this.options.container.height(),this.images.each(e.proxy(function(a,t){e(t).css("opacity",0)},this)),this.options.container.bind("scroll",e.proxy(function(){this.display(this.images,this.options.container.scrollTop())},this)),this.options.container.trigger("scroll")},JqLazyLoader.prototype.display=function(a,t){bottom=t+this.containerHeight,a.each(e.proxy(function(a,o){this.loaded.indexOf(a)>-1||e(o).offset().top<bottom&&e(o).offset().top>t&&(this.loaded.push(a),e(o).attr("src",e(o).attr("src")),setTimeout(function(){e(o).animate({opacity:1},400,"easeOutExpo")},150))},this))}}(jQuery),jQuery(document).ready(function(){s5_lazyload_all();var e=new JqLazyLoader;e.initialize({items:".s5_lazyload"})});