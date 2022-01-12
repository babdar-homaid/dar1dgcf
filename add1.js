// JavaScript Document
    $(document).ready(function() {
function Disappearanceـbutton(button,span,name,good){
	    	$(good).html('<img  src="ah.png" height="50" width="50">');

$(button).attr('disabled', 'disabled');
$('input[type=text]').keyup(function(){

var maxxـname= 4;
var sizـname = $(name).val().length;

$(span).html(sizـname);

/// ==========================	

if( sizـname<maxxـname  )
{
$(button).attr('disabled', 'disabled');
$(span).css('color','#F00');
$(good).html('<img  src="ah.png" height="50" width="50">');

} 
//===============
			
			if(sizـname>=maxxـname){ 
			$(span).css('color','#0C3');
			$(good).html('<img  src="ak.png" height="50" width="50">');
			$(button).removeAttr('disabled');
					

			}
		});
	//======================
}
Disappearanceـbutton("#button1111","#span_name","#name","#divv");
Disappearanceـbutton("#button11","#span_name","#name","#divv");
Disappearanceـbutton("#button12","#span_name","#name","#divv");
Disappearanceـbutton("#button13","#span_name","#name","#divv");
Disappearanceـbutton("#button19","#span_name","#name","#divv");
Disappearanceـbutton("#button2","#span_name","#name","#divv");
Disappearanceـbutton("#button6","#span_name","#name","#divv");



});