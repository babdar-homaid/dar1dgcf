// JavaScript Document
    $(document).ready(function() {
  

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


ajax ("#button14","#myform14","admin1.php","#divv");

});