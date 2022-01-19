<?php $__env->startSection('title'); ?>
 - التسجيل الخطوة الثانية
<?php $__env->stopSection(); ?>
<div class="card  bg-warning mb-3" >
  <div class="card-header"> <i class='fas fa-bullhorn' style='font-size:24px'></i>
      تنبيهات مهمة جدًا </div>
  <div class="card-body">
    <h5 class="card-title"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
      أولاً : يجب كتابة البيانات صحيحة ومطابقة للوثائق الرسمية ومراجعتها قبل إرسالها .  </h5>
    <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
      ثانيًا : يجب مراعاة اختيار المرحلة المطلوبة للدراسة (متوسطة - ثانوية - عالية) وكذلك مراعاة حالة الدراسة المطلوبة (منتظم - منتسب) والتأكد من الاختيار الصحيح قبل إرسال البيانات .  </p>
    <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
      ثالثًا : يجب كتابة أرقام الجوال صحيحة لتصلكم رسائل  (SMS) تفيدكم بحالة الطلب .</p>

  </div>
</div>
<?php if(session('msg')): ?>
<div class="alert alert-danger">
<p>
<?php echo e(session('msg')); ?>

</div>
<?php endif; ?>
<form method="POST" action="studentـregistration_2">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" class="form-control" value="<?php echo e(Auth::user()->id); ?>" name="user_id" placeholder="الحقل مطلوب" id="text" required autocomplete="name" required autocomplete="name" >


    <div class="row">

</div>
<hr>

<div class="row">

    <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="text">اسم المتقدم:</label>
        <input type="text"  name="name" value="" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name" required autocomplete="name" >
      </div></div>

    <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="text">الجنسية:</label>
        <select name="Nationality" class="custom-select">
        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($values->Nationalty_Id); ?>"><?php echo e($values->Nationalty_Name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      </div></div>

      <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="sel1">المرحلة المتقدم لها :</label>
        <select class="form-control" name="Requestـstatus" id="sel1">

            <option value="المتوسطة">المتوسطة </option>
            <option value="الثانوية">الثانوية </option>
            <option value="العالية">العالية </option>

        </select>
    </div></div>
    <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="sel1">حالة الدراسة :</label>
        <select class="form-control" name="Stage" id="sel1">
            <option value="منتظم">منتظم </option>
            <option value="منتسب">منتسب </option>
        </select>
    </div></div>


  </div>
  <hr>

  <div class="row">

    <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="text"> يوم الميلاد:</label>
        <select name="BirthDay_Day" class="custom-select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="21">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>

         </select>
      </div></div>


    <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="text"> شهر الميلاد:</label>
        <select name="BirthDay_Month" class="custom-select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>      </div></div>

      <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
            <label for="text">سنة الميلاد:</label>
            <select name="BirthDay_Year" class="custom-select">
              <option value="1390">1390</option>
              <option value="1391">1391</option>
              <option value="1392">1392</option>
              <option value="1393">1393</option>
              <option value="1394">1394</option>
              <option value="1395">1395</option>
              <option value="1396">1396</option>
              <option value="1397">1397</option>
              <option value="1398">1398</option>
              <option value="1399">1399</option>
              <option value="1400">1400</option>
              <option value="1401">1401</option>
              <option value="1402">1402</option>
              <option value="1403">1403</option>
              <option value="1404">1404</option>
              <option value="1405">1405</option>
              <option value="1406">1406</option>
              <option value="1407">1407</option>
              <option value="1408">1408</option>
              <option value="1409">1449</option>
              <option value="1410">1410</option>
              <option value="1411">1411</option>
              <option value="1412">1412</option>
              <option value="1413">1413</option>
              <option value="1414">1414</option>
              <option value="1415">1415</option>
              <option value="1416">1416</option>
              <option value="1417">1417</option>
              <option value="1418">1418</option>
              <option value="1419">1419</option>
              <option value="1420">1420</option>
              <option value="1421">1421</option>
              <option value="1422">1422</option>
              <option value="1423">1423</option>
              <option value="1424">1424</option>
              <option value="1425">1425</option>
              <option value="1426">1426</option>
              <option value="1427">1427</option>
              <option value="1428">1428</option>
              <option value="1429">1429</option>


            </select>          </div></div>
            <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
              <label for="text">مكان الميلاد:</label>
              <input type="text"  name="placeـofـbirth" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
            </div></div>
  </div>
  <hr>
  <div class="row">


      <div class="col-sm-12 col-md-3"><div class="form-group">
          <label for="text">رقم الهوية:</label>
          <input type="text" name="IdentificationـNumber" class="form-control" placeholder="الحقل مطلوب  (السجل المدني)" id="text" required autocomplete="name">
        </div></div>

      <div class="col-sm-12 col-md-3"><div class="form-group">
          <label for="text">نوعها :</label>
          <select class="form-control" name="Itsـhistory" id="sel1">
            <option value="هوية وطنية" >هوية وطنية</option>
            <option value="إقامة" >إقامة</option>
        </select>
        </div></div>

        <div class="col-sm-12 col-md-3"><div class="form-group">
                <label for="text"> مصدرها :</label>
                <input type="text"  name="Source" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
              </div></div>


                  <div class="col-sm-12 col-md-3"><div class="form-group">
          <label for="text">المهنة في الهوية :</label>
          <input type="text"  name="Occupation"class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
        </div></div>


    </div>



  <div class="row">

    <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="text"> اليوم [تاريخ الانتهاء]:</label>
        <select name="Personality_End_Day" class="custom-select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="21">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>

         </select>
      </div></div>


    <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
        <label for="text"> الشهر [تاريخ الانتهاء]:</label>
        <select name="Personality_End_Month" class="custom-select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>      </div></div>

      <div class="col-sm-12 col-md-3 offset-sm-12"><div class="form-group">
            <label for="text">السنة [تاريخ الانتهاء]:</label>
            <select name="Personality_End_Year" class="custom-select">
              <option value="1441">1441</option>
              <option value="1442">1442</option>
              <option value="1443">1443</option>
              <option value="1444">1444</option>
              <option value="1445">1445</option>
              <option value="1446">1446</option>
              <option value="1447">1447</option>
              <option value="1448">1448</option>
              <option value="1449">1449</option>
              <option value="1450">1450</option>
              <option value="1451">1451</option>

            </select>          </div></div>

  </div>
  <hr>
    <div class="row">


        <div class="col-sm-12 col-md-3"><div class="form-group">
            <label for="text">الشهادة الحاصل عليها :</label>
            <input type="text"  name="Certificate" class="form-control" placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
          </div></div>

        <div class="col-sm-12 col-md-3"><div class="form-group">
            <label for="text">الجهة المانحة :</label>
            <input type="text"  name="Donor" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
          </div></div>

          <div class="col-sm-12 col-md-3"><div class="form-group">
                  <label for="text">تاريخها :</label>
                  <input type="text"  name="Dateـofـtheـcertificate" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                </div></div>


                    <div class="col-sm-12 col-md-3"><div class="form-group">
            <label for="text">التقدير :</label>
            <input type="text"  name="Appreciation" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
          </div></div>


      </div>

      <hr>
      <div class="row">


          <div class="col-sm-12 col-md-3"><div class="form-group">
              <label for="text">رقم جوال الطالب :</label>
              <input type="text"  name="Mobile_number" class="form-control" placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
            </div></div>

          <div class="col-sm-12 col-md-3"><div class="form-group">
              <label for="text"> اسم ولي أمر الطالب :</label>
              <input type="text" name="Guardian" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
            </div></div>

            <div class="col-sm-12 col-md-3"><div class="form-group">
                    <label for="text">جوالي ولي الأمر :</label>
                    <input type="text" name="Guardian_Mobile" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                  </div></div>


                      <div class="col-sm-12 col-md-3"><div class="form-group">
              <label for="text">العنوان :</label>
              <input type="text"  name="Student_address" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
            </div></div>


        </div>

        <hr>
      <div class="row">


          <div class="col-sm-12 col-md-3"><div class="form-group">
              <label for="text">  اسم المزكي(1) :</label>
              <input type="text"  name="mzki1" class="form-control" placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
            </div></div>

          <div class="col-sm-12 col-md-3"><div class="form-group">
              <label for="text"> جهة عمله :</label>
              <input type="text" name="Currency1" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
            </div></div>

            <div class="col-sm-12 col-md-3"><div class="form-group">
                    <label for="text"> اسم المزكي(2) :</label>
                    <input type="text"  name="mzki2" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                  </div></div>


                      <div class="col-sm-12 col-md-3"><div class="form-group">
              <label for="text">جهة عمله :</label>
              <input type="text"  name="Currency2" class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
            </div></div>


        </div>


      <button type="submit" class="btn btn-primary">الخطوة الثانية إرسال البيانات</button>

</form>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/register_form.blade.php ENDPATH**/ ?>