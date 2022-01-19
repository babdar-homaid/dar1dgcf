
    <meta charset="utf-8">
    <title><?php echo e($name); ?></title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 40px;
        line-height: 24px;
        font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: right;
        font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;

    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 100px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-size: 25px;

    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media  only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
    }

    .rtl table {
        text-align: rtl;
    }

    .rtl table tr td:nth-child(2) {
        text-align: rtl;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                        <td>
                                المملكة العربية السعودية<br>
                                دار الحديث الخيرية<br>
                            منهج كتاب <?php echo e($name); ?>

                            </td>
                            <td class="title">
                                <img src="image/dar.jpeg" style="width:90%; max-width:150px;">
                            </td>


                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">

                </td>
            </tr>

            <tr class="heading">
                <td>
  <?php $__currentLoopData = $note; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <br>
<?php echo e($item->note); ?>

<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>


        </table>
    </div>

<?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/book/pdf.blade.php ENDPATH**/ ?>