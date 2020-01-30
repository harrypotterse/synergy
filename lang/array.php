<?php

QUERY_STRING();
if ($_SESSION['lang'] == "ar") {
    $array_lang['index']['CONTACT ']['Name'] = "اسمك";
    $array_lang['index']['CONTACT ']['phone'] = "الهاتف";
    $array_lang['index']['CONTACT ']['Email'] = "البريد الالكتروني";
    $array_lang['index']['CONTACT ']['Message'] = "رسالتك";
    $array_lang['index']['CONTACT ']['send'] = "إرسال رسالة";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['index']['CONTACT ']['Name'] = "Your Name";
    $array_lang['index']['CONTACT ']['phone'] = "Your phone";
    $array_lang['index']['CONTACT ']['Email'] = "Your Email";
    $array_lang['index']['CONTACT ']['Message'] = "Your Message";
    $array_lang['index']['CONTACT ']['send'] = "Send message";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['index']['CONTACT ']['Name'] = "اسمك";
    $array_lang['index']['CONTACT ']['phone'] = "الهاتف";
    $array_lang['index']['CONTACT ']['Email'] = "البريد الالكتروني";
    $array_lang['index']['CONTACT ']['Message'] = "رسالتك";
    $array_lang['index']['CONTACT ']['send'] = "إرسال رسالة";
}
//========================JOIN===================
if ($_SESSION['lang'] == "ar") {
    $array_lang['index']['JOIN']['TEAM'] = "300";
    $array_lang['index']['JOIN']['PEOPLE TEAM'] = "الفريق";
    $array_lang['index']['JOIN']['CLIENT_'] = "385";
    $array_lang['index']['JOIN']['CLIENT'] = "عميل";
    $array_lang['index']['JOIN']['EVENT'] = "287";
    $array_lang['index']['JOIN']['EVENT BUILT'] = "بناء الأحداث";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['index']['JOIN']['TEAM'] = "300";
    $array_lang['index']['JOIN']['PEOPLE TEAM'] = "PEOPLE TEAM";
    $array_lang['index']['JOIN']['CLIENT_'] = "385";
    $array_lang['index']['JOIN']['CLIENT'] = "CLIENT";
    $array_lang['index']['JOIN']['EVENT'] = "287";
    $array_lang['index']['JOIN']['EVENT BUILT'] = "EVENT BUILT";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['index']['JOIN']['TEAM'] = "300";
    $array_lang['index']['JOIN']['PEOPLE TEAM'] = "الفريق";
    $array_lang['index']['JOIN']['CLIENT_'] = "385";
    $array_lang['index']['JOIN']['CLIENT'] = "عميل";
    $array_lang['index']['JOIN']['EVENT'] = "287";
    $array_lang['index']['JOIN']['EVENT BUILT'] = "بناء الأحداث";
}
//========================nav===================
if ($_SESSION['lang'] == "ar") {
    $array_lang['index']['nav']['HOME'] = "الصفحة الرئيسية";
    $array_lang['index']['nav']['ORDER'] = "كيفية الطلب";
    $array_lang['index']['nav']['SERVICES'] = "خدمات";
    $array_lang['index']['nav']['PROJECTS'] = "المشاريع";
    $array_lang['index']['nav']['PROFILE'] = "الملف الشخصي";
    $array_lang['index']['nav']['QUOTES'] = "طلب عرض سعر";
    $array_lang['index']['nav']['CONTACT'] = "اتصل بنا";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['index']['nav']['HOME'] = "HOME";
    $array_lang['index']['nav']['ORDER'] = "HOW TO ORDER";
    $array_lang['index']['nav']['SERVICES'] = "SERVICES";
    $array_lang['index']['nav']['PROJECTS'] = "PROJECTS";
    $array_lang['index']['nav']['PROFILE'] = "PROFILE";
    $array_lang['index']['nav']['QUOTES'] = "QET A QUOTES";
    $array_lang['index']['nav']['CONTACT'] = "CONTACT US";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['index']['nav']['HOME'] = "الصفحة الرئيسية";
    $array_lang['index']['nav']['ORDER'] = "كيفية الطلب";
    $array_lang['index']['nav']['SERVICES'] = "خدمات";
    $array_lang['index']['nav']['PROJECTS'] = "المشاريع";
    $array_lang['index']['nav']['PROFILE'] = "الملف الشخصي";
    $array_lang['index']['nav']['QUOTES'] = "طلب عرض سعر";
    $array_lang['index']['nav']['CONTACT'] = "اتصل بنا";
}
//==================footer===========================
if ($_SESSION['lang'] == "ar") {
    $array_lang['index']['footer']['Services'] = "خدمات";
    $array_lang['index']['footer']['TEL'] = "هاتف";
    $array_lang['index']['footer']['Fax'] = "فاكس";
    $array_lang['index']['footer']['Address'] = "عنوان";
    $array_lang['index']['footer']['Email'] = "البريد الإلكتروني";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['index']['footer']['Services'] = "Services";
    $array_lang['index']['footer']['TEL'] = "TEL";
    $array_lang['index']['footer']['Fax'] = "Fax";
    $array_lang['index']['footer']['Address'] = "Address";
    $array_lang['index']['footer']['Email'] = "Email";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['index']['footer']['Services'] = "خدمات";
    $array_lang['index']['footer']['TEL'] = "هاتف";
    $array_lang['index']['footer']['Fax'] = "فاكس";
    $array_lang['index']['footer']['Address'] = "عنوان";
    $array_lang['index']['footer']['Email'] = "البريد الإلكتروني";
}
//=======================form=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['form']['NAME'] = "اسمك ";
    $array_lang['form']['PHONE'] = "هاتفك";
    $array_lang['form']['EMAIL'] = "البريد الإلكتروني";
    $array_lang['form']['ADDRESS'] = "عنوان";
    $array_lang['form']['SERVICE'] = "نوع الخدمة";
    $array_lang['form']['select'] = "اختر خدمتك";
    $array_lang['form']['MESSAGE'] = "رسالة";
    $array_lang['form']['FIELDS'] = "*يرجى ملء جميع الحقول بشكل صحيح";
    $array_lang['form']['Submit'] = "إرسال";
    $array_lang['form']['back'] = "سنقوم بالرد عليك في غضون 48 ساعة.";
    $array_lang['form']['QUOTES'] = "طلب عرض السعر";
    $array_lang['form']['HOME'] = "الرئيسية";
    $array_lang['form']['STEP '] = "خطوة ";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['form']['NAME'] = "YOUR NAME ";
    $array_lang['form']['PHONE'] = "YOUR PHONE";
    $array_lang['form']['EMAIL'] = "EMAIL";
    $array_lang['form']['ADDRESS'] = "ADDRESS";
    $array_lang['form']['SERVICE'] = "SERVICE' TYPE";
    $array_lang['form']['select'] = "select your service";
    $array_lang['form']['MESSAGE'] = "MESSAGE";
    $array_lang['form']['FIELDS'] = "*PLEASE COMPLETE ALL FIELDS CORRECTLY";
    $array_lang['form']['Submit'] = "Submit";
    $array_lang['form']['back'] = "We'll get back to you within 48 hours.";
    $array_lang['form']['QUOTES'] = "GET A QUOTES";
    $array_lang['form']['HOME'] = "HOME";
    $array_lang['form']['STEP '] = "STEP ";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['form']['NAME'] = "اسمك ";
    $array_lang['form']['PHONE'] = "هاتفك";
    $array_lang['form']['EMAIL'] = "البريد الإلكتروني";
    $array_lang['form']['ADDRESS'] = "عنوان";
    $array_lang['form']['SERVICE'] = "نوع الخدمة";
    $array_lang['form']['select'] = "اختر خدمتك";
    $array_lang['form']['MESSAGE'] = "رسالة";
    $array_lang['form']['FIELDS'] = "*يرجى ملء جميع الحقول بشكل صحيح";
    $array_lang['form']['Submit'] = "إرسال";
    $array_lang['form']['back'] = "سنقوم بالرد عليك في غضون 48 ساعة.";
    $array_lang['form']['QUOTES'] = "طلب عرض السعر";
    $array_lang['form']['HOME'] = "الرئيسية";
    $array_lang['form']['STEP '] = "خطوة ";
}
//=======================gallery=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['gallery']['PROJECTS'] = "مشاريعنا";
    $array_lang['gallery']['Lorem'] = "أبجد هوز هو مجرد دمية النص من الطباعة.";
    $array_lang['gallery']['ALL'] = "الكل";
    $array_lang['gallery']['LOVE'] = "كنا نحب أن نسمع عن مشروعك";
    $array_lang['gallery']['Start'] = "ابدأ الآن";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['gallery']['PROJECTS'] = "OUR PROJECTS";
    $array_lang['gallery']['Lorem'] = "Lorem Ipsum is simply dummy text of the printing.";
    $array_lang['gallery']['ALL'] = "ALL";
    $array_lang['gallery']['LOVE'] = "WE'D LOVE TO HEAR ABOUT YOUR PROJECT";
    $array_lang['gallery']['Start'] = "Start Now";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['gallery']['PROJECTS'] = "مشاريعنا";
    $array_lang['gallery']['Lorem'] = "أبجد هوز هو مجرد دمية النص من الطباعة.";
    $array_lang['gallery']['ALL'] = "الكل";
    $array_lang['gallery']['LOVE'] = "كنا نحب أن نسمع عن مشروعك";
    $array_lang['gallery']['Start'] = "ابدأ الآن";
}
//=======================about=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['about']['ABOUT_US'] = "كيفية الطلب";
    $array_lang['about']['SYNERGY_EVENTS'] = "SYNERGY الاحداث";
    $array_lang['about']['HOME'] = "الرئيسية";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['about']['ABOUT_US'] = "ABOUT US";
    $array_lang['about']['SYNERGY_EVENTS'] = "SYNERGY EVENTS";
    $array_lang['about']['HOME'] = "ABOUT US";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['about']['ABOUT_US'] = "كيفية الطلب";
    $array_lang['about']['SYNERGY_EVENTS'] = "SYNERGY الاحداث";
    $array_lang['about']['HOME'] = "الرئيسية";
}
//=======================cart=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['cart']['Items'] = "العناصر";
    $array_lang['cart']['View_Cart'] = "عرض العربة";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['cart']['Items'] = "Items";
    $array_lang['cart']['View_Cart'] = "View Cart";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['cart']['Items'] = "العناصر";
    $array_lang['cart']['View_Cart'] = "عرض العربة";
}
//=======================cart=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['contact']['HOME'] = "الرئيسية";
    $array_lang['contact']['contact_us'] = "اتصل بنا";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['contact']['HOME'] = "HOME";
    $array_lang['contact']['contact_us'] = "CONTACT US";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['contact']['HOME'] = "الرئيسية";
    $array_lang['contact']['contact_us'] = "اتصل بنا";
}
//=======================shop=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['shop']['SHOPPING_CART'] = "عربة التسوق";
    $array_lang['shop']['HOME'] = "الرئيسية";
    $array_lang['shop']['QUOTE'] = "طلب عرض السعر";
    $array_lang['shop']['First'] = "* الاسم الاول:";
    $array_lang['shop']['Last'] = "* الاسم الاخير: ";
    $array_lang['shop']['Company'] = "اسم الشركة: ";
    $array_lang['shop']['Address'] = "* العنوان: ";
    $array_lang['shop']['City'] = "* المدينة / القرية: ";
    $array_lang['shop']['Postcode'] = "* الرمز البريد: ";
    $array_lang['shop']['Country'] = "* الدولة:";
    $array_lang['shop']['Email'] = "* البريد الالكتروني: ";
    $array_lang['shop']['Phone'] = "* الموبيل: ";
    $array_lang['shop']['service'] = "* الخدمة: ";
    $array_lang['shop']['Order'] = "ترتيب ملاحظات:";
    $array_lang['shop']['NOTES'] = "ملاحظات";
    $array_lang['shop']['Place_Order'] = "مكان الامر";
    $array_lang['shop']['the_first_step'] = "الخطوة الأولى";
    $array_lang['shop']['the_second_step'] = "الخطوة الثانية";
    $array_lang['shop']['the_third_step'] = "الخطوة الثالثة";
    $array_lang['shop']['PRODUCT'] = "المنتج";
    $array_lang['shop']['QUANTITY'] = "كمية";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['shop']['SHOPPING_CART'] = "SHOPPING CART";
    $array_lang['shop']['HOME'] = "HOME";
    $array_lang['shop']['QUOTE'] = "QET A QUOTE";
    $array_lang['shop']['First'] = "* First Name:";
    $array_lang['shop']['Last'] = "* Last Name: ";
    $array_lang['shop']['Company'] = "Company Name: ";
    $array_lang['shop']['Address'] = "* Address: ";
    $array_lang['shop']['City'] = "* City / Town: ";
    $array_lang['shop']['Postcode'] = "* Postcode: ";
    $array_lang['shop']['Country'] = "* Country:";
    $array_lang['shop']['Email'] = "* Email Address: ";
    $array_lang['shop']['Phone'] = "* Phone: ";
    $array_lang['shop']['service'] = "* service type: ";
    $array_lang['shop']['Order'] = "Order Notes:";
    $array_lang['shop']['NOTES'] = "NOTES";
    $array_lang['shop']['Place_Order'] = "Place Order";
    $array_lang['shop']['the_first_step'] = "the first step";
    $array_lang['shop']['the_second_step'] = "the second step";
    $array_lang['shop']['the_third_step'] = "thw third step";
    $array_lang['shop']['PRODUCT'] = "PRODUCT";
    $array_lang['shop']['QUANTITY'] = "QUANTITY";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['shop']['SHOPPING_CART'] = "عربة التسوق";
    $array_lang['shop']['HOME'] = "الرئيسية";
    $array_lang['shop']['QUOTE'] = "طلب عرض السعر";
    $array_lang['shop']['First'] = "* الاسم الاول:";
    $array_lang['shop']['Last'] = "* الاسم الاخير: ";
    $array_lang['shop']['Company'] = "اسم الشركة: ";
    $array_lang['shop']['Address'] = "* العنوان: ";
    $array_lang['shop']['City'] = "* المدينة / القرية: ";
    $array_lang['shop']['Postcode'] = "* الرمز البريد: ";
    $array_lang['shop']['Country'] = "* الدولة:";
    $array_lang['shop']['Email'] = "* البريد الالكتروني: ";
    $array_lang['shop']['Phone'] = "* الموبيل: ";
    $array_lang['shop']['service'] = "* الخدمة: ";
    $array_lang['shop']['Order'] = "ترتيب ملاحظات:";
    $array_lang['shop']['NOTES'] = "ملاحظات";
    $array_lang['shop']['Place_Order'] = "مكان الامر";
    $array_lang['shop']['the_first_step'] = "الخطوة الأولى";
    $array_lang['shop']['the_second_step'] = "الخطوة الثانية";
    $array_lang['shop']['the_third_step'] = "الخطوة الثالثة";
    $array_lang['shop']['PRODUCT'] = "المنتج";
    $array_lang['shop']['QUANTITY'] = "كمية";
}
//=======================cart=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['sub_cat']['EVENTS'] = "SYNERGY احداث";
    $array_lang['sub_cat']['CATEGORIES'] = "الاقسام";
    $array_lang['sub_cat']['HOME'] = "الرئسية";
    $array_lang['sub_cat']['View all products'] = "عرض جميع المنتجات";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['sub_cat']['EVENTS'] = "SYNERGY EVENTS";
    $array_lang['sub_cat']['CATEGORIES'] = "CATEGORIES";
    $array_lang['sub_cat']['HOME'] = "HOME";
    $array_lang['sub_cat']['View all products'] = "View all products";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['sub_cat']['EVENTS'] = "SYNERGY احداث";
    $array_lang['sub_cat']['CATEGORIES'] = "الاقسام";
    $array_lang['sub_cat']['HOME'] = "الرئسية";
    $array_lang['sub_cat']['View all products'] = "عرض جميع المنتجات";
}
//=======================shop=======================
if ($_SESSION['lang'] == "ar") {
    $array_lang['contact']['HOME'] = "الرئيسية";
    $array_lang['contact']['contact_us'] = "اتصل بنا";
} if ($_SESSION['lang'] == "eng") {
    $array_lang['contact']['HOME'] = "HOME";
    $array_lang['contact']['contact_'] = "CONTACT US";
} elseif (!isset($_SESSION['lang'])) {
    $array_lang['contact']['HOME'] = "الرئيسية";
    $array_lang['contact']['contact_us'] = "اتصل بنا";
}