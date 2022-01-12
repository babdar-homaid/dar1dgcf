<?PHP require_once ('login.php');

@$page = $_GET['page'];
$s=0;
echo "

<br/>
	<div align='center' class='container' >
	 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">بحث عن تقييم شعبة بين تاريخين <i class=\"fa fa-folder-open-o	Try it

\"></i>

</a></li>

  </ul>";
  ?>
  <div class="well well-lg">


	<form class="navbar-form pull-right" action="search.php" method="post">
			<div class="input-prepend">
 <button class="btn btn-default" type="submit">
      <i class="fa fa-search" aria-hidden="true"></i>
</span>
      </button>
</span>

  <input type="text" class="span3 " name="Thread" placeholder="بداية التاريخ" size="10">
   <input type="text" class="span3 " name="Thread1" placeholder="نهاية التاريخ" size="10"></form>
                   <BR/>
<div id ='lo' ></div>  </div>