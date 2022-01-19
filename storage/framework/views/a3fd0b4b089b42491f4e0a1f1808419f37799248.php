<?php $__env->startSection('content'); ?>
<?php echo $__env->make('banar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
  .cardHover {
    transition: 0.3s;
  }
  .cardHover:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
</style>

<div class="container">
<div class="card-header">
<h4 class="my-0 font-weight-normal"><!-- Image and text -->
<nav class="navbar navbar-light bg-white">

<img src="/image/news.jpg" width="600" height="80" class="img-thumbnail d-block w-100" alt="">

</nav></h4>
</div>
<br>
<div class="row">


<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sum=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-md-4 ">
<div class="card-deck mb-3 text-center">
<div class="card mb-4 box-shadow">

<div class="card-body">


<div class="alert alert-info cardHover">
<a href="show_news/<?php echo e($item->id); ?>"> <i class='far fa-bookmark ' ></i> <?php echo e(str_limit($item->title , 20)); ?> </a><p>
<?php echo e($item->created_at); ?> <i class='far fa-clock'></i>
</div>
</div></div>
</div>
</div>





<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

<?php echo e($value->links()); ?>


</p>



<!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-md-4 offset-md-1 mx-3 my-3">

<!-- Featured image -->
<div class="view overlay">

<div id="carouselExampleControls " class="carousel slide" data-ride="carousel">

<div class="carousel-inner ard-body cardHover">
  <?php if($exams->Scales==1): ?>
<div class="carousel-item active">
  <a href="https://th-28.com/dar/search.php " target="_blank">
<img class="d-block w-100 img-thumbnail" src="image/Nataej.gif" alt="First slide">
  </a>
</div>
<?php endif; ?>
<?php if($exams->Scales==2): ?>
<div class="carousel-item active ard-body cardHover">
  <a href="Scales">
<img class="d-block w-100 img-thumbnail" src="image/Jadawel.gif" alt="First slide">
  </a>
</div>
<?php endif; ?>
<?php if($exams->Scales==3): ?>
<div class="carousel-item active ard-body cardHover">

<img class="d-block w-100 img-thumbnail" src="image/nw.GIF" alt="First slide">

</div>
<?php endif; ?>


</div>

</div>





<a>
<div class="mask rgba-white-slight"></div>
</a>
</div>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-7 text-md-left ml-3 mt-3">

<!-- Excerpt -->


<a style="text-decoration: none" class="text-muted" href="/Biography">  <button type="button" class="btn btn-lg btn-block btn-outline-success">نبذة عن الدار</button></a>
<br/>
<a style="text-decoration: none" class="text-muted" href="/Admission">  <button type="button" class="btn btn-lg btn-block btn-outline-success">تسجيل الطلاب الجدد </button></a>
<br/>
<a style="text-decoration: none" class="text-muted" href="/Conditions">  <button type="button" class="btn btn-lg btn-block btn-outline-success">شروط القبول بدار الحديث </button></a>
<br/>
<a style="text-decoration: none" class="text-muted" href="/pdf"><button type="button" class="btn btn-lg btn-block btn-outline-success">لجنة البحوث العلمية </button></a>


</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

</div>


  <div class="text-center ">

    <a href="/zoom"><img src="/Telegram/بنر 6 نسخ.jpg" class="img-fluid" alt="Responsive image"></a>
</div>
<br>


<div class="container">
<div class="card-deck mb-3 text-center">
<div class="card mb-4 box-shadow">
<div class="card-header">
<h4 class="my-0 font-weight-normal"> </h4>
</div>
<div class="card-body cardHover">
<ul class="list-unstyled mt-3 mb-4">
<img src="/image/al.gif" width="100" height="200" >

</ul>
<a href="index_book/العالي"><button type="button" class="btn btn-lg btn-block btn-outline-success">عرض</button></a>
</div>
</div>
<div class="card mb-4 box-shadow">
<div class="card-header">
</div>
<div class="card-body cardHover">
<ul class="list-unstyled mt-3 mb-4">
<img src="/image/th.gif" width="100" height="200" >
</ul>
<a href="index_book/الثانوي"><button type="button" class="btn btn-lg btn-block btn-outline-success">عرض</button></a>
</div>
</div>
<div class="card mb-4 box-shadow cardHover">
<div class="card-header">
<h4 class="my-0 font-weight-normal"></h4>
</div>
<div class="card-body">
<ul class="list-unstyled mt-3 mb-4">
<img src="/image/mt.gif" width="100" height="200" >

</ul>
<a href="index_book/المتوسط"><button type="button" class="btn btn-lg btn-block btn-outline-success">عرض</button></a>
</div>
</div>
</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/index.blade.php ENDPATH**/ ?>