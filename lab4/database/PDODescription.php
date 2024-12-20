<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مرجع دوال PDO</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/doc.css">
    <style>
        body {
            text-align: right;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">مرجع دوال PDO في PHP</h1>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>الدالة</th>
                    <th>الوصف</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Define an array of PDO functions with Arabic descriptions
                $pdoFunctions = [
                    '__construct' => 'إنشاء كائن PDO جديد لتمثيل اتصال بقاعدة البيانات.',
                    'beginTransaction' => 'بدء معاملة (Transaction).',
                    'commit' => 'إتمام المعاملة الحالية.',
                    'rollBack' => 'التراجع عن المعاملة الحالية.',
                    'exec' => 'تنفيذ استعلام SQL وإرجاع عدد الصفوف المتأثرة.',
                    'query' => 'تنفيذ استعلام SQL وإرجاع كائن PDOStatement.',
                    'prepare' => 'تحضير استعلام SQL للتنفيذ.',
                    'execute' => 'تنفيذ استعلام SQL تم تحضيره مسبقاً.',
                    'fetch' => 'جلب الصف التالي من مجموعة النتائج.',
                    'fetchAll' => 'جلب كل الصفوف من مجموعة النتائج.',
                    'fetchColumn' => 'إرجاع عمود واحد من الصف التالي في مجموعة النتائج.',
                    'lastInsertId' => 'إرجاع رقم التعريف (ID) للصف الأخير الذي تم إدراجه.',
                    'errorInfo' => 'إرجاع معلومات مفصلة عن الخطأ الأخير.',
                    'errorCode' => 'إرجاع رمز SQLSTATE المرتبط بالعملية الأخيرة.',
                    'setAttribute' => 'تعيين خاصية معينة لاتصال قاعدة البيانات.',
                    'getAttribute' => 'الحصول على خاصية معينة من اتصال قاعدة البيانات.',
                    'closeCursor' => 'إغلاق المؤشر (Cursor) للسماح بتنفيذ الاستعلام مرة أخرى.',
                    'bindParam' => 'ربط متغير بمعامل (Parameter) بشكل مرجعي.',
                    'bindValue' => 'ربط قيمة بمعامل (Parameter).',
                    'rowCount' => 'إرجاع عدد الصفوف المتأثرة بالاستعلام الأخير.',
                ];

                // Dynamically generate table rows for each function
                foreach ($pdoFunctions as $function => $description) {
                    echo "<tr>
                            <td><code>$function</code></td>
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
