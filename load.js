// JavaScript Document
    $(document).ready(function() {
function load_ (url,looad){
		$(looad).on('click',function(){
		       $(looad).html('<img  src="lo.gif" height="60" width="60">');

			var  id =$(this).attr('id');
			var  Students =$(this).attr('Students');
			
			if(id){
		       $(looad).html('<img  src="lo.gif" height="60" width="60">');

			$.ajax({url:url
            ,type:'POST'
            ,data:{id:id,Students:Students}
            ,beforeSend: function(){
           
		       $(looad).html('<img  src="lo.gif" height="60" width="60">');

                }
            ,success: function(data){
			   					$(looad).hide();
        $(".s").append(data);
    
                          }
                });
			}
			else{
					$(looad).hide();

				}
		            return false;

		
			});
}
 load_('showـteacher1.php','.load');
  load_('showـstudents_all1.php','.load_s');
  load_('showـstudents1_save.php','.load_v');
    load_('father4.php','.load_f');


});