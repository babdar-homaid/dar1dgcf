<!doctype html>
<html dir="rtl">

<head>


    <meta charset="utf-8">

    <style>
        body {
            font-size: 30px;

            font-family: 'KFGQPC Uthman Taha Naskh', sans-serif;
        }

        table {
            font-family: 'KFGQPC Uthman Taha Naskh', sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 25px;
        }

        th,
        td {
            text-align: right;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

    </style>
<img src="image/dar.jpeg" style="width:50%; max-width:170px;">
<br>
<br>
<title>بيان باعداد الطلاب المتقدمين </title>

<br>
   <div>المرحلة المتوسطة</div>
    <table>
        <tr>
            <thead>
                <th> عدد المنتظمين </th>
                <th> عدد المنتسبين</th>
                <th>الإجمالي</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo e(\Arabic\Arabic::num($mt2)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($mt1)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($mt2+$mt1)); ?></th>
            </tr>
            </tr>
        </tbody>
    </table>
    <hr>
    <div>المرحلة الثانوية</div>

    <table>
        <tr>
            <thead>
                <th> عدد المنتظمين </th>
                <th> عدد المنتسبين</th>
                <th>الإجمالي</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo e(\Arabic\Arabic::num($ta2)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($ta1)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($ta2+$ta1)); ?></th>
            </tr>
            </tr>
        </tbody>
    </table>
    <hr>
    <div>المرحلة العالية</div>

    <table>
        <tr>
            <thead>
                <th> عدد المنتظمين </th>
                <th> عدد المنتسبين</th>
                <th>الإجمالي</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo e(\Arabic\Arabic::num($al2)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($al1)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($al2+$al1)); ?></th>
            </tr>
            </tr>
        </tbody>
    </table>
    <hr>
    <div>الإجمالي </div>
    <table>
        <tr>
            <thead>
                <th> إجمالي المنتظمين </th>
                <th> إجمالي المنتسبين</th>
                <th>الإجمالي</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo e(\Arabic\Arabic::num($ta2+$mt2+$al2)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($ta1+$mt1+$al1)); ?></th>
                <th><?php echo e(\Arabic\Arabic::num($ta2+$ta1+$mt2+$mt1+$al2+$al1)); ?></th>
            </tr>
            </tr>
        </tbody>
    </table>
    </body>

</html>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/proportions.blade.php ENDPATH**/ ?>