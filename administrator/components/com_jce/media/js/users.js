/* jce - 2.6.0 | 2016-11-25 | http://www.joomlacontenteditor.net | Copyright (C) 2006 - 2016 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
!function($,Wf){function check(s,v){return $.each(s.childNodes,function(i,n){var input=n.firstChild;if(input.value===v)return!0}),!1}function close(){var win=window.parent;"undefined"!=typeof win.SqueezeBox&&win.SqueezeBox.close()}function select(){var v,h,u=[],s=window.parent.document.getElementById("users");$("input:checkbox:checked").each(function(){if(v=$(this).val(),u=document.getElementById("username_"+v)){if(h=$.trim(u.innerHTML),check(s,v))return;var li=document.createElement("li");li.innerHTML="<span>"+h+'</span><button class="btn btn-link users-list-delete"><i class="icon-trash"></i></button><input type="hidden" name="users[]" value="'+v+'" />',s.appendChild(li)}}),close()}$(document).ready(function(){$("#cancel").click(function(e){close(),e.preventDefault()}),$("#select").click(function(e){select(),e.preventDefault()})})}(jQuery,Wf);