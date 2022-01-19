<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
- الطلاب الجدد
<?php $__env->stopSection(); ?>



<style>
  #btn {
    display: none;
  }

</style>








<div class="card">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <div class="container">

        <form method="POST" action="/edit">
            <?php echo e(csrf_field()); ?>

            <input type='hidden' class="form-control" value="<?php echo e($form->id); ?>" name="id" placeholder="الحقل مطلوب"
                id="text" required autocomplete="name" required autocomplete="name">


            <div class="row">
                <div class="col-sm-12 col-md-6 offset-sm-12">
                    <div class="form-group">
                        <label for="sel1">المرحلة المتقدم لها :</label>
                        <select class="form-control" name="Requestـstatus" id="sel1">

                            <option value="المتوسطة" <?php if($form->Requestـstatus=="المتوسطة"): ?> selected <?php endif; ?>>المتوسطة
                            </option>
                            <option value="الثانوية" <?php if($form->Requestـstatus=="الثانوية"): ?> selected <?php endif; ?>>الثانوية
                            </option>
                            <option value="العالية" <?php if($form->Requestـstatus=="العالية"): ?> selected <?php endif; ?>>العالية
                            </option>

                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 offset-sm-12">
                    <div class="form-group">
                        <label for="sel1">حالة الدراسة :</label>
                        <select class="form-control" name="Stage" id="sel1">
                            <option value="منتظم" <?php if($form->Stage=="منتظم"): ?> selected <?php endif; ?>>منتظم </option>
                            <option value="منتسب" <?php if($form->Stage=="منتسب"): ?> selected <?php endif; ?>>منتسب </option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">اسم المتقدم:</label>
                        <input type="text" value="<?php echo e($form->name); ?>" name="name" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name" required
                            autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">الجنسية:</label>
                        <select name="Nationality" class="custom-select">
                            <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($values->Nationalty_Id); ?>" <?php if($values->Nationalty_Id=="$form->Nationality"): ?>
                                selected <?php endif; ?>><?php echo e($values->Nationalty_Name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>



                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">مكان الميلاد:</label>
                        <input type="text" value="<?php echo e($form->placeـofـbirth); ?>" name="placeـofـbirth" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> اليوم [تاريخ الميلاد]:</label>
                        <select name="BirthDay_Day" class="custom-select">
                            <option value="1" <?php if($form->BirthDay_Day=="1"): ?> selected <?php endif; ?>>1</option>
                            <option value="2" <?php if($form->BirthDay_Day=="2"): ?> selected <?php endif; ?>>2</option>
                            <option value="3" <?php if($form->BirthDay_Day=="3"): ?> selected <?php endif; ?>>3</option>
                            <option value="4" <?php if($form->BirthDay_Day=="4"): ?> selected <?php endif; ?>>4</option>
                            <option value="5" <?php if($form->BirthDay_Day=="5"): ?> selected <?php endif; ?>>5</option>
                            <option value="6" <?php if($form->BirthDay_Day=="6"): ?> selected <?php endif; ?>>6</option>
                            <option value="7" <?php if($form->BirthDay_Day=="7"): ?> selected <?php endif; ?>>7</option>
                            <option value="8" <?php if($form->BirthDay_Day=="8"): ?> selected <?php endif; ?>>8</option>
                            <option value="9" <?php if($form->BirthDay_Day=="9"): ?> selected <?php endif; ?>>9</option>
                            <option value="10" <?php if($form->BirthDay_Day=="10"): ?> selected <?php endif; ?>>10</option>
                            <option value="11" <?php if($form->BirthDay_Day=="11"): ?> selected <?php endif; ?>>11</option>
                            <option value="12" <?php if($form->BirthDay_Day=="12"): ?> selected <?php endif; ?>>12</option>
                            <option value="13" <?php if($form->BirthDay_Day=="13"): ?> selected <?php endif; ?>>13</option>
                            <option value="14" <?php if($form->BirthDay_Day=="14"): ?> selected <?php endif; ?>>14</option>
                            <option value="15" <?php if($form->BirthDay_Day=="15"): ?> selected <?php endif; ?>>15</option>
                            <option value="16" <?php if($form->BirthDay_Day=="16"): ?> selected <?php endif; ?>>16</option>
                            <option value="17" <?php if($form->BirthDay_Day=="17"): ?> selected <?php endif; ?>>17</option>
                            <option value="18" <?php if($form->BirthDay_Day=="18"): ?> selected <?php endif; ?>>18</option>
                            <option value="19" <?php if($form->BirthDay_Day=="19"): ?> selected <?php endif; ?>>19</option>
                            <option value="20" <?php if($form->BirthDay_Day=="20"): ?> selected <?php endif; ?>>20</option>
                            <option value="21" <?php if($form->BirthDay_Day=="21"): ?> selected <?php endif; ?>>21</option>
                            <option value="22" <?php if($form->BirthDay_Day=="22"): ?> selected <?php endif; ?>>22</option>
                            <option value="21" <?php if($form->BirthDay_Day=="23"): ?> selected <?php endif; ?>>23</option>
                            <option value="24" <?php if($form->BirthDay_Day=="24"): ?> selected <?php endif; ?>>24</option>
                            <option value="25" <?php if($form->BirthDay_Day=="25"): ?> selected <?php endif; ?>>25</option>
                            <option value="26" <?php if($form->BirthDay_Day=="26"): ?> selected <?php endif; ?>>26</option>
                            <option value="27" <?php if($form->BirthDay_Day=="27"): ?> selected <?php endif; ?>>27</option>
                            <option value="28" <?php if($form->BirthDay_Day=="28"): ?> selected <?php endif; ?>>28</option>
                            <option value="30" <?php if($form->BirthDay_Day=="29"): ?> selected <?php endif; ?>>29</option>
                            <option value="30" <?php if($form->BirthDay_Day=="30"): ?> selected <?php endif; ?>>30</option>

                        </select>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> الشهر [تاريخ الميلاد]:</label>
                        <select name="BirthDay_Month" class="custom-select">
                            <option value="1" <?php if($form->BirthDay_Month=="1"): ?> selected <?php endif; ?>>1</option>
                            <option value="2" <?php if($form->BirthDay_Month=="2"): ?> selected <?php endif; ?>>2</option>
                            <option value="3" <?php if($form->BirthDay_Month=="3"): ?> selected <?php endif; ?>>3</option>
                            <option value="4" <?php if($form->BirthDay_Month=="4"): ?> selected <?php endif; ?>>4</option>
                            <option value="5" <?php if($form->BirthDay_Month=="5"): ?> selected <?php endif; ?>>5</option>
                            <option value="6" <?php if($form->BirthDay_Month=="6"): ?> selected <?php endif; ?>>6</option>
                            7 <option value="8" <?php if($form->BirthDay_Month=="8"): ?> selected <?php endif; ?>>8</option>
                            <option value="9" <?php if($form->BirthDay_Month=="9"): ?> selected <?php endif; ?>>9</option>
                            <option value="10" <?php if($form->BirthDay_Month=="10"): ?> selected <?php endif; ?>>10</option>
                            <option value="11" <?php if($form->BirthDay_Month=="11"): ?> selected <?php endif; ?>>11</option>
                            <option value="12" <?php if($form->BirthDay_Month=="12"): ?> selected <?php endif; ?>>12</option>
                        </select> </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">السنة [تاريخ الميلاد]:</label>
                        <select name="BirthDay_Year" class="custom-select">
                            <option value="1390" <?php if($form->BirthDay_Year=="1390"): ?> selected <?php endif; ?>>1390</option>
                            <option value="1391" <?php if($form->BirthDay_Year=="1391"): ?> selected <?php endif; ?>>1391</option>
                            <option value="1392" <?php if($form->BirthDay_Year=="1392"): ?> selected <?php endif; ?>>1392</option>
                            <option value="1393" <?php if($form->BirthDay_Year=="1393"): ?> selected <?php endif; ?>>1393</option>
                            <option value="1394" <?php if($form->BirthDay_Year=="1394"): ?> selected <?php endif; ?>>1394</option>
                            <option value="1395" <?php if($form->BirthDay_Year=="1395"): ?> selected <?php endif; ?>>1395</option>
                            <option value="1396" <?php if($form->BirthDay_Year=="1396"): ?> selected <?php endif; ?>>1396</option>
                            <option value="1397" <?php if($form->BirthDay_Year=="1397"): ?> selected <?php endif; ?>>1397</option>
                            <option value="1398" <?php if($form->BirthDay_Year=="1398"): ?> selected <?php endif; ?>>1398</option>
                            <option value="1399" <?php if($form->BirthDay_Year=="1399"): ?> selected <?php endif; ?>>1399</option>
                            <option value="1400" <?php if($form->BirthDay_Year=="1400"): ?> selected <?php endif; ?>>1400</option>
                            <option value="1401" <?php if($form->BirthDay_Year=="1401"): ?> selected <?php endif; ?>>1401</option>
                            <option value="1402" <?php if($form->BirthDay_Year=="1402"): ?> selected <?php endif; ?>>1402</option>
                            <option value="1403" <?php if($form->BirthDay_Year=="1403"): ?> selected <?php endif; ?>>1403</option>
                            <option value="1404" <?php if($form->BirthDay_Year=="1404"): ?> selected <?php endif; ?>>1404</option>
                            <option value="1405" <?php if($form->BirthDay_Year=="1405"): ?> selected <?php endif; ?>>1405</option>
                            <option value="1406" <?php if($form->BirthDay_Year=="1406"): ?> selected <?php endif; ?>>1406</option>
                            <option value="1407" <?php if($form->BirthDay_Year=="1407"): ?> selected <?php endif; ?>>1407</option>
                            <option value="1408" <?php if($form->BirthDay_Year=="1408"): ?> selected <?php endif; ?>>1408</option>
                            <option value="1409" <?php if($form->BirthDay_Year=="1409"): ?> selected <?php endif; ?>>1409</option>
                            <option value="1410" <?php if($form->BirthDay_Year=="1410"): ?> selected <?php endif; ?>>1410</option>
                            <option value="1411" <?php if($form->BirthDay_Year=="1411"): ?> selected <?php endif; ?>>1411</option>
                            <option value="1451" <?php if($form->BirthDay_Year=="1412"): ?> selected <?php endif; ?>>1412</option>
                            <option value="1412" <?php if($form->BirthDay_Year=="1413"): ?> selected <?php endif; ?>>1407</option>
                            <option value="1414" <?php if($form->BirthDay_Year=="1414"): ?> selected <?php endif; ?>>1414</option>
                            <option value="1415" <?php if($form->BirthDay_Year=="1415"): ?> selected <?php endif; ?>>1415</option>
                            <option value="1416" <?php if($form->BirthDay_Year=="1416"): ?> selected <?php endif; ?>>1416</option>
                            <option value="1417" <?php if($form->BirthDay_Year=="1417"): ?> selected <?php endif; ?>>1417</option>
                            <option value="1418" <?php if($form->BirthDay_Year=="1418"): ?> selected <?php endif; ?>>1418</option>
                            <option value="1419" <?php if($form->BirthDay_Year=="1419"): ?> selected <?php endif; ?>>1419</option>
                            <option value="1420" <?php if($form->BirthDay_Year=="1420"): ?> selected <?php endif; ?>>1420</option>
                            <option value="1421" <?php if($form->BirthDay_Year=="1421"): ?> selected <?php endif; ?>>1421</option>
                            <option value="1422" <?php if($form->BirthDay_Year=="1422"): ?> selected <?php endif; ?>>1422</option>
                            <option value="1423" <?php if($form->BirthDay_Year=="1423"): ?> selected <?php endif; ?>>1423</option>
                            <option value="1424" <?php if($form->BirthDay_Year=="1424"): ?> selected <?php endif; ?>>1424</option>
                            <option value="1425" <?php if($form->BirthDay_Year=="1425"): ?> selected <?php endif; ?>>1425</option>
                            <option value="1426" <?php if($form->BirthDay_Year=="1426"): ?> selected <?php endif; ?>>1426</option>
                            <option value="1427" <?php if($form->BirthDay_Year=="1427"): ?> selected <?php endif; ?>>1427</option>
                            <option value="1428" <?php if($form->BirthDay_Year=="1428"): ?> selected <?php endif; ?>>1428</option>
                            <option value="1429" <?php if($form->BirthDay_Year=="1429"): ?> selected <?php endif; ?>>1429</option>




                        </select> </div>
                </div>
            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label for="text">رقم الهوية:</label>
                        <input type="text" value="<?php echo e($form->IdentificationـNumber); ?>" name="IdentificationـNumber"
                            class="form-control" placeholder="الحقل مطلوب  (السجل المدني)" id="text" required
                            autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label for="text">نوعها :</label>
                        <select class="form-control" name="Itsـhistory" id="sel1">
                            <option value="هوية وطنية" <?php if($form->Itsـhistory=="هوية وطنية"): ?> selected <?php endif; ?>>هوية وطنية
                            </option>
                            <option value="إقامة" <?php if($form->Itsـhistory=="إقامة"): ?> selected <?php endif; ?>>إقامة</option>
                        </select>
                    </div>
                </div>



                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label for="text">المهنة في الهوية :</label>
                        <input type="text" value="<?php echo e($form->Occupation); ?>" name="Occupation" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> اليوم [تاريخ الانتهاء]:</label>
                        <select name="Personality_End_Day" class="custom-select">
                            <option value="1" <?php if($form->Personality_End_Day=="1"): ?> selected <?php endif; ?>>1</option>
                            <option value="2" <?php if($form->Personality_End_Day=="2"): ?> selected <?php endif; ?>>2</option>
                            <option value="3" <?php if($form->Personality_End_Day=="3"): ?> selected <?php endif; ?>>3</option>
                            <option value="4" <?php if($form->Personality_End_Day=="4"): ?> selected <?php endif; ?>>4</option>
                            <option value="5" <?php if($form->Personality_End_Day=="5"): ?> selected <?php endif; ?>>5</option>
                            <option value="6" <?php if($form->Personality_End_Day=="6"): ?> selected <?php endif; ?>>6</option>
                            <option value="7" <?php if($form->Personality_End_Day=="7"): ?> selected <?php endif; ?>>7</option>
                            <option value="8" <?php if($form->Personality_End_Day=="8"): ?> selected <?php endif; ?>>8</option>
                            <option value="9" <?php if($form->Personality_End_Day=="9"): ?> selected <?php endif; ?>>9</option>
                            <option value="10" <?php if($form->Personality_End_Day=="10"): ?> selected <?php endif; ?>>10</option>
                            <option value="11" <?php if($form->Personality_End_Day=="11"): ?> selected <?php endif; ?>>11</option>
                            <option value="12" <?php if($form->Personality_End_Day=="12"): ?> selected <?php endif; ?>>12</option>
                            <option value="13" <?php if($form->Personality_End_Day=="13"): ?> selected <?php endif; ?>>13</option>
                            <option value="14" <?php if($form->Personality_End_Day=="14"): ?> selected <?php endif; ?>>14</option>
                            <option value="15" <?php if($form->Personality_End_Day=="15"): ?> selected <?php endif; ?>>15</option>
                            <option value="16" <?php if($form->Personality_End_Day=="16"): ?> selected <?php endif; ?>>16</option>
                            <option value="17" <?php if($form->Personality_End_Day=="17"): ?> selected <?php endif; ?>>17</option>
                            <option value="18" <?php if($form->Personality_End_Day=="18"): ?> selected <?php endif; ?>>18</option>
                            <option value="19" <?php if($form->Personality_End_Day=="19"): ?> selected <?php endif; ?>>19</option>
                            <option value="20" <?php if($form->Personality_End_Day=="20"): ?> selected <?php endif; ?>>20</option>
                            <option value="21" <?php if($form->Personality_End_Day=="21"): ?> selected <?php endif; ?>>21</option>
                            <option value="22" <?php if($form->Personality_End_Day=="22"): ?> selected <?php endif; ?>>22</option>
                            <option value="21" <?php if($form->Personality_End_Day=="23"): ?> selected <?php endif; ?>>23</option>
                            <option value="24" <?php if($form->Personality_End_Day=="24"): ?> selected <?php endif; ?>>24</option>
                            <option value="25" <?php if($form->Personality_End_Day=="25"): ?> selected <?php endif; ?>>25</option>
                            <option value="26" <?php if($form->Personality_End_Day=="26"): ?> selected <?php endif; ?>>26</option>
                            <option value="27" <?php if($form->Personality_End_Day=="27"): ?> selected <?php endif; ?>>27</option>
                            <option value="28" <?php if($form->Personality_End_Day=="28"): ?> selected <?php endif; ?>>28</option>
                            <option value="30" <?php if($form->Personality_End_Day=="29"): ?> selected <?php endif; ?>>29</option>
                            <option value="30" <?php if($form->Personality_End_Day=="30"): ?> selected <?php endif; ?>>30</option>

                        </select>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> الشهر [تاريخ الانتهاء]:</label>
                        <select name="Personality_End_Month" class="custom-select">
                            <option value="1" <?php if($form->Personality_End_Month=="1"): ?> selected <?php endif; ?>>1</option>
                            <option value="2" <?php if($form->Personality_End_Month=="2"): ?> selected <?php endif; ?>>2</option>
                            <option value="3" <?php if($form->Personality_End_Month=="3"): ?> selected <?php endif; ?>>3</option>
                            <option value="4" <?php if($form->Personality_End_Month=="4"): ?> selected <?php endif; ?>>4</option>
                            <option value="5" <?php if($form->Personality_End_Month=="5"): ?> selected <?php endif; ?>>5</option>
                            <option value="6" <?php if($form->Personality_End_Month=="6"): ?> selected <?php endif; ?>>6</option>
                            7 <option value="8" <?php if($form->Personality_End_Month=="8"): ?> selected <?php endif; ?>>8</option>
                            <option value="9" <?php if($form->Personality_End_Month=="9"): ?> selected <?php endif; ?>>9</option>
                            <option value="10" <?php if($form->Personality_End_Month=="10"): ?> selected <?php endif; ?>>10</option>
                            <option value="11" <?php if($form->Personality_End_Month=="11"): ?> selected <?php endif; ?>>11</option>
                            <option value="12" <?php if($form->Personality_End_Month=="12"): ?> selected <?php endif; ?>>12</option>
                        </select> </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">السنة [تاريخ الانتهاء]:</label>
                        <select name="Personality_End_Year" class="custom-select">
                            <option value="1441" <?php if($form->Personality_End_Year=="1441"): ?> selected <?php endif; ?>>1441</option>
                            <option value="1442" <?php if($form->Personality_End_Year=="1442"): ?> selected <?php endif; ?>>1442</option>
                            <option value="1443" <?php if($form->Personality_End_Year=="1442"): ?> selected <?php endif; ?>>1443</option>
                            <option value="1444" <?php if($form->Personality_End_Year=="1443"): ?> selected <?php endif; ?>>1444</option>
                            <option value="1445" <?php if($form->Personality_End_Year=="1445"): ?> selected <?php endif; ?>>1445</option>
                            <option value="1446" <?php if($form->Personality_End_Year=="1446"): ?> selected <?php endif; ?>>1446</option>
                            <option value="1447" <?php if($form->Personality_End_Year=="1447"): ?> selected <?php endif; ?>>1447</option>
                            <option value="1448" <?php if($form->Personality_End_Year=="1448"): ?> selected <?php endif; ?>>1448</option>
                            <option value="1449" <?php if($form->Personality_End_Year=="1449"): ?> selected <?php endif; ?>>1449</option>
                            <option value="1450" <?php if($form->Personality_End_Year=="1450"): ?> selected <?php endif; ?>>1450</option>
                            <option value="1451" <?php if($form->Personality_End_Year=="1451"): ?> selected <?php endif; ?>>1451</option>

                        </select> </div>
                </div>
            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">الشهادة الحاصل عليها :</label>
                        <input type="text" value="<?php echo e($form->Certificate); ?>" name="Certificate" class="form-control"
                            placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">الجهة المانحة :</label>
                        <input type="text" value="<?php echo e($form->Donor); ?>" name="Donor" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">تاريخها :</label>
                        <input type="text" value="<?php echo e($form->Dateـofـtheـcertificate); ?>" name="Dateـofـtheـcertificate"
                            class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">التقدير :</label>
                        <input type="text" value="<?php echo e($form->Appreciation); ?>" name="Appreciation" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">رقم جوال الطالب :</label>
                        <input type="text" value="<?php echo e($form->Mobile_number); ?>" name="Mobile_number" class="form-control"
                            placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> اسم ولي أمر الطالب :</label>
                        <input type="text" value="<?php echo e($form->Guardian); ?>" name="Guardian" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">جوالي ولي الأمر :</label>
                        <input type="text" value="<?php echo e($form->Guardian_Mobile); ?>" name="Guardian_Mobile"
                            class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">العنوان :</label>
                        <input type="text" value="<?php echo e($form->Guardian_Mobile); ?>" name="Student_address"
                            class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> اسم المزكي(1) :</label>
                        <input type="text" value="<?php echo e($form->mzki1); ?>" name="mzki1" class="form-control"
                            placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> جهة عمله :</label>
                        <input type="text" value="<?php echo e($form->Currency1); ?>" name="Currency1" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> اسم المزكي(2) :</label>
                        <input type="text" value="<?php echo e($form->mzki2); ?>" name="mzki2" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">جهة عمله :</label>
                        <input type="text" value="<?php echo e($form->Currency2); ?>" name="Currency2" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 offset-sm-12">
                    <button type="submit" class="btn btn-success">تعديل</button>
                </div>

        </form>


        <form method="POST" action="/dlFile">
            <?php echo e(csrf_field()); ?>

            <input type='hidden' class="form-control" value="<?php echo e($form->user_id); ?>" name="id" placeholder="الحقل مطلوب"
                id="text" required autocomplete="name" required autocomplete="name">
            <div class="col-sm-12 col-md-3 offset-sm-12">
                <button type="submit" class="btn btn-danger">حذف ملف الوثائق</button>
            </div>
            <input type="hidden" value="<?php echo e($form->Mobile_number); ?>" name="Mobile_number" class="form-control"
                placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
            <input type="hidden" value="<?php echo e($form->name); ?>" name="name" class="form-control" placeholder="الحقل مطلوب"
                id="text" required autocomplete="name" required autocomplete="name">
                <br>

        </form>
    </div>
    <form method="POST" action="/studentـregistrationadmin" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


</div>
<hr>
<div class="d-flex justify-content-center">

    <h3>لرفع ملف</h3>

<div class="col-sm-12 col-md-3 offset-sm-12">

    <input type='hidden' class="form-control" value="<?php echo e($form->user_id); ?>" name="user_id" placeholder="الحقل مطلوب"
        id="text" required autocomplete="name" required autocomplete="name">
    <input type='hidden' class="form-control" value="<?php echo e($form->id); ?>" name="id" placeholder="الحقل مطلوب" id="text"
        required autocomplete="name" required autocomplete="name">
        <input type="file" id="btn"  name="upload"/>
        <label for="btn" id="lable" class="btn btn-danger">

            اختر الملف

          <img
            src="https://cdn4.iconfinder.com/data/icons/default-social-line/24/upload-512.png"
            alt=""
            srcset=""
            width="20"
            style="padding: 2px;"
          />
        </label>
        <br>
        <span id="file-name"></span>
        <br>
    <button type="submit" class="btn btn-danger"> رفع الملف </button>
</div>
</form>
</div>
</div>
</div>
</div>
<script>
    let btn = document.getElementById("btn");
    let lable = document.getElementById("file-name");
    btn.addEventListener("change", function (event) {
      let up = event.target.files[0].name;
      console.log(up)
      lable.textContent = up;
    });
  </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/register_form_ed.blade.php ENDPATH**/ ?>