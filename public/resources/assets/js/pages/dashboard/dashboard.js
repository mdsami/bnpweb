(function($){'use strict';$(function(){
$('.js-toggle-left-sidebar').on('click',function(){setTimeout(initFlotChart,500);});window.onresize=function(e){initFlotChart();};$("span.pie").peity("pie",{fill:['#009688','#ddd']});$('.js-exportable').DataTable({responsive:true,dom:'<"html5buttons"B>lTfgtip',buttons:['copy','csv','excel','pdf','print']});$('.todo-list').on('click','li',function(e){if($(e.target).closest('.controls, .move-handle').length===0){$(this).find('input').iCheck('toggle');}});$('.todo-list').sortable({handle:'.move-handle'});$('.todo-list').on('click','.js-delete-todo',function(){$(this).parents('li').fadeOut(500,function(){$(this).remove();});});var $switchButtons=Array.prototype.slice.call(document.querySelectorAll('.js-switch'));$switchButtons.forEach(function(e){var size=$(e).data('size');var options={};options['color']='#009688';if(size!==undefined)options['size']=size;var switchery=new Switchery(e,options);});$('.js-btn-add-item').on('click',addToItem);$('.js-input').on('keyup',function(event){var key=event.keyCode||event.which;if(key===13)addToItem();});setICheckbox();function setICheckbox(){$('input:not(.js-switch)').iCheck({checkboxClass:'icheckbox_flat-green',radioClass:'iradio_flat-green'});$('input:not(.js-switch)').on('ifToggled',function(e){$(this).parents('li').toggleClass('closed');});}
function addToItem(){var $input=$('.js-input');var $toDoList=$('.todo-list');var item=$input.val();if(item!==''){var newItemHtml='<li>'+
'   <a href="javascript:void(0);" title="Move"><i class="fa fa-arrows move-handle"></i></a>'+
'   <input type="checkbox" />'+
'   <span>'+item+'</span>'+
'   <span class="controls pull-right">'+
'       <a href="javascript:void(0);" title="Edit"><i class="fa fa-pencil"></i></a>'+
'       <a href="javascript:void(0);" title="Delete"><i class="fa fa-trash js-delete-todo"></i></a>'+
'   </span>'+
'</li>';$toDoList.append(newItemHtml);$input.val('');}
$input.focus();setICheckbox();}});}(jQuery));