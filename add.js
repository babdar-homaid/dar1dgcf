// JavaScript Document
    $(document).ready(function() {


/// ==========================	
$("#button").attr('disabled', 'disabled');
$("#button1").attr('disabled', 'disabled');
$("#button26").attr('disabled', 'disabled');

$('input[type=text]').keyup(function(){

/// ==========================		
var maxxـjawal= $("#jawal").attr("maxlength");
var sizـjawal = $("#jawal").val().trim().length;
/// ==========================	
var maxxـname= $("#name").attr("axlength");
var sizـname = $("#name").val().trim().length;
/// ==========================	
var maxxـcard= $("#card").attr("axlength");
var sizـcard = $("#card").val().trim().length;
/// ==========================	
$("#span_jawal").html(sizـjawal);
$("#span_name").html(sizـname);
$("#span_card").html(sizـcard);
/// ==========================	

if(sizـjawal<maxxـjawal || sizـname<maxxـname || sizـcard<maxxـcard )
{
$("#button26").attr('disabled', 'disabled');
$("#button1").attr('disabled', 'disabled');
$("#button").attr('disabled', 'disabled');
$("#span_jawal").css('color','#F00');
$("#span_name").css('color','#F00');
$("#span_card").css('color','#F00');
}
//===============
			if(sizـcard>=maxxـcard ){
			$("#span_card").css('color','#0C3');
			}
			//=================
			if(sizـjawal>=maxxـjawal ){
			$("#span_jawal").css('color','#0C3');
			}
			//=================
			
			if(sizـname>=maxxـname){ 
			$("#span_name").css('color','#0C3');
			}
			//==================
			if(sizـjawal>=maxxـjawal && sizـname>=maxxـname &&  sizـcard>=maxxـcard )
			{
		$("#button").removeAttr('disabled');
			$("#button26").removeAttr('disabled');
			$("#button1").removeAttr('disabled');
			}
		});
	//======================
	///==============

});