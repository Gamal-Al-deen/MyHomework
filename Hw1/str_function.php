
## strlen()
ترجع طول النص
strlen("Hello"); // 5

--------------------------------

## strpos()
تجد موقع أول ظهور للنص داخل نص آخر
strpos("Hello World","World"); // 6

--------------------------------

## strrpos()
تجد موقع آخر ظهور للنص داخل نص آخر.
strrpos("Hello Hello","Hello"); // 6

--------------------------------

## substr()
تستخرج جزء من النص.
substr("Hello World",0,5); // "Hello"


## str_replace()
استبدال نص داخل نص.
str_replace("World","PHP","Hello World"); // "Hello PHP"


## str_ireplace()
استبدال نص بدون مراعاة حالة الأحرف.
str_ireplace("world","PHP","Hello WORLD"); // "Hello PHP"


## strtolower()
تحويل كل الأحرف إلى صغيرة.
strtolower("HELLO"); // "hello"



## strtoupper()
تحويل كل الأحرف إلى كبيرة.
strtoupper("hello"); // "HELLO"



## ucfirst()
تحويل الحرف الأول إلى كبير.
ucfirst("hello"); // "Hello"



## lcfirst()
تحويل الحرف الأول إلى صغير.
lcfirst("Hello"); // "hello"



## ucwords()
تحويل أول حرف لكل كلمة إلى كبير.
ucwords("hello world"); // "Hello World"



## trim()
إزالة الفراغات من بداية ونهاية النص.
trim("  hello  "); // "hello"



## ltrim()
إزالة الفراغات من البداية فقط.
ltrim("  hello  "); // "hello  "



## rtrim()
إزالة الفراغات من النهاية فقط.
rtrim("  hello  "); // "  hello"



## str_repeat()
تكرار النص عدد مرات معين.
str_repeat("ha",3); // "hahaha"



## str_split()
تحويل النص إلى مصفوفة من الحروف.
str_split("Hello"); // ['H','e','l','l','o']



## explode()
تحويل النص إلى مصفوفة بناءً على فاصل.
explode(" ","Hello World"); // ['Hello','World']



## implode()
تحويل مصفوفة إلى نص.
implode("-',['Hello','World']); // "Hello-World"



## strcmp()
مقارنة نصين (حساس للحروف).
strcmp("abc","ABC"); // >0



## strcasecmp()
مقارنة نصين بدون حساسية للحروف.
strcasecmp("abc","ABC"); // 0



## strrev()
عكس النص.
strrev("Hello"); // "olleH"



## substr_count()
عد عدد مرات ظهور نص معين.
substr_count("Hello Hello","Hello"); // 2
