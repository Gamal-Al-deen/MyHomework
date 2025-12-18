<?php
/******************************************************
 *        الاتصال بقاعدة البيانات باستخدام MySQLi
 *   هذا الملف يحتوي على الطريقتين مع شرح عملي داخل الكود
 ******************************************************/

/******************************************************
 * 1) الاتصال بطريقة Object-Oriented (الأفضل)
 ******************************************************/

// بيانات الاتصال
$host = "localhost";
$user = "root";
$pass = "";
$db   = "test_db";

// إنشاء الاتصال
$conn_obj = new mysqli($host, $user, $pass, $db);

/*
    فحص الاتصال:
    connect_error ترجع نص الخطأ إذا فشل الاتصال
*/
if ($conn_obj->connect_error) {
    die("فشل الاتصال (OOP): " . $conn_obj->connect_error);
}

echo "تم الاتصال بنجاح (Object-Oriented)<br>";


// تنفيذ استعلام SELECT
$sql = "SELECT * FROM users";
$result = $conn_obj->query($sql);

/*
    fetch_assoc:
    ترجع الصف كـ Array مفاتيحها أسماء الأعمدة
*/
if ($result->num_rows > 0) {
    echo "<h3>نتائج SELECT (OOP):</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "الاسم: " . $row["name"] . "<br>";
    }
}


// مثال على INSERT باستخدام Prepared Statements (أفضل ممارسة)
$stmt = $conn_obj->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

$name  = "Jamal";
$email = "jamal@example.com";

$stmt->execute();
$stmt->close();

echo "<br>تم تنفيذ INSERT بنجاح (OOP)<br>";



/******************************************************
 * 2) الاتصال بطريقة Procedural
 ******************************************************/

$conn_proc = mysqli_connect($host, $user, $pass, $db);

/*
    mysqli_connect_error:
    ترجع سبب الخطأ إذا فشل الاتصال
*/
if (!$conn_proc) {
    die("فشل الاتصال (Procedural): " . mysqli_connect_error());
}

echo "<br>تم الاتصال بنجاح (Procedural)<br>";


// تنفيذ SELECT
$sql2 = "SELECT * FROM users";
$result2 = mysqli_query($conn_proc, $sql2);

echo "<h3>نتائج SELECT (Procedural):</h3>";
while ($row = mysqli_fetch_assoc($result2)) {
    echo "الاسم: " . $row["name"] . "<br>";
}


// إغلاق الاتصالات
$conn_obj->close();
mysqli_close($conn_proc);

?>
