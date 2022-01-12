// JavaScript Document
    $(document).ready(function() {
$(".jawal").click(function() {
	
	
	var nm = $(this).attr('nm_jawal');
	var x=$(".text_jawal").val().length;
	
	nm= ','+nm
	$(".text_jawal").append(nm);
		            return false;

});

    function ajax (but,form,url,div) {
        $(but).click(function(){
			$("#lo").show();

            var data_n=$(form).serialize();
            $.ajax({url:url
            ,type:'POST'
            ,data:data_n
            ,beforeSend: function(){
            $("#lo").html('<img  src="lo.gif" height="60" width="60">');
            $("#lo1").html('<img  src="lo.gif" height="60" width="60">');
                }
            ,success: function(data){
        $(div).html(data);
            $(".lo").html('<A href="javascript:window.location.reload()" target="_self"><img  src="go-back-icon.png" height="60" width="60"></A>');
                  $(".lo").hide();
                  $(".lo").fadeIn(4000);
            	$('.out').fadeOut();
                $("#lo").hide();
                  $("#lo1").hide();
                          }
                });
            return true
            });
             }

ajax ("#buttonjawal","#myformjawal","jawal1.php","#divv");
$('.OPEN_Students').click(function() {
	$(".Students").fadeIn(2000);
    
});
$('.CLOS_Students').click(function() {
	$(".Students").fadeOut(2000);
    
});
var x=$(this).width();

if(x<900){
		$("#ss").removeAttr('href');
						$("#ss").attr('href','ss.css');

		}
		else{
		$("#ss").attr('href','s.css');

			}
$(window).on('resize',function(){
	
var x=$(this).width();
var x1=x-20;
	$("#v").attr("value" ,'px'+ x);
		$("#te").attr("width" ,x1 +'px');

	if(x<500){
		$("#ss").removeAttr('href');
				$("#ss").attr('href','ss.css');

		}
		else{
		$("#ss").attr('href','s.css');

			}
}

);

});