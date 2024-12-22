<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO setAttribute - القيم والوظائف</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            text-align: right;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">PDO setAttribute - القيم والوظائف</h1>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>القيمة</th>
                    <th>الوصف</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Define an array of PDO setAttribute values with Arabic descriptions
                $setAttributeValues = [
                    'PDO::ATTR_AUTOCOMMIT' => 'تحديد ما إذا كانت العمليات تُنفذ تلقائيًا داخل معاملة أم لا.',
                    'PDO::ATTR_ERRMODE' => 'تحديد وضع الإبلاغ عن الأخطاء (مثل الاستثناءات أو الإشعارات).',
                    'PDO::ERRMODE_SILENT' => 'وضع الصمت - لا يتم إبلاغ الأخطاء، ويجب التحقق يدويًا.',
                    'PDO::ERRMODE_WARNING' => 'وضع التحذير - الأخطاء تُنتج تحذيرات PHP.',
                    'PDO::ERRMODE_EXCEPTION' => 'وضع الاستثناء - الأخطاء تُلقى كاستثناءات.',
                    'PDO::ATTR_CASE' => 'تحديد كيفية التعامل مع حالة أسماء الأعمدة.',
                    'PDO::CASE_LOWER' => 'تحويل أسماء الأعمدة إلى حروف صغيرة.',
                    'PDO::CASE_UPPER' => 'تحويل أسماء الأعمدة إلى حروف كبيرة.',
                    'PDO::CASE_NATURAL' => 'الحفاظ على الحالة الأصلية لأسماء الأعمدة.',
                    'PDO::ATTR_ORACLE_NULLS' => 'التحكم في تحويل القيم الفارغة (NULL) إلى سلاسل فارغة (empty strings).',
                    'PDO::NULL_NATURAL' => 'الحفاظ على القيم NULL كما هي.',
                    'PDO::NULL_EMPTY_STRING' => 'تحويل القيم NULL إلى سلاسل فارغة.',
                    'PDO::ATTR_PERSISTENT' => 'تفعيل أو تعطيل الاتصال المستمر (persistent connection).',
                    'PDO::ATTR_DEFAULT_FETCH_MODE' => 'تحديد الوضع الافتراضي لجلب البيانات.',
                    'PDO::FETCH_ASSOC' => 'جلب الصفوف كمصفوفة تحتوي على أسماء الأعمدة كمفاتيح.',
                    'PDO::FETCH_NUM' => 'جلب الصفوف كمصفوفة تحتوي على أرقام الأعمدة كمفاتيح.',
                    'PDO::FETCH_BOTH' => 'جلب الصفوف كمصفوفة تحتوي على أسماء وأرقام الأعمدة كمفاتيح.',
                    'PDO::FETCH_OBJ' => 'جلب الصفوف ككائن يحتوي على خصائص بأسماء الأعمدة.',
                    'PDO::FETCH_LAZY' => 'جلب البيانات عند الطلب لتوفير الأداء.',
                    'PDO::ATTR_TIMEOUT' => 'تحديد وقت الانتظار (بالثواني) لعمليات الاتصال.',
                    'PDO::ATTR_EMULATE_PREPARES' => 'تفعيل أو تعطيل محاكاة الاستعلامات المحضرة.',
                ];

                // Dynamically generate table rows for each setAttribute value
                foreach ($setAttributeValues as $attribute => $description) {
                    echo "<tr>
                            <td><code>$attribute</code></td>
                            <td>$description</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer class="text-center mt-5">
        <p>تم الإنشاء  باستخدام PHP و Bootstrap</p>
    </footer>
</body>
</html>
