<?php

/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '0');
ini_set('display_startup_errors', '1');

if (!is_dir('data')) {
    mkdir('data');
}
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

if (!file_exists('data/time.txt')) {
    file_put_contents('data/time.txt', 'off');
}
$ez        = ["😀", "😃", "😄", "😁", "😆", "😅", "😂", "🤣", "😭", "😗", "😙", "😚", "😘", "🥰", "😍", "🤩", "🥳", "🤗", "🙃", "🙂", "☺️", "😊", "😏", "😌", "😉", "🤭", "😶", "🤔", "🤪", "😜", "😝", "😛", "😋", "😔", "😑", "😐", "🤨", "🧐", "🙄", "😒", "😤", "😠", "😡", "🤬", "☹️", "😰", "🤫", "🤐", "😬", "😳", "🥺", "😟", "😕", "🙁", "😨", "😧", "😦", "😮", "😯", "😲", "😱", "🤯", "😢", "😥", "😓", "😞", "😣", "😖", "😩", "😫", "🤤", "🥱", "🤮", "😇", "😵", "🤥", "🤓", "😎", "🤑", "🤠"];
$fz        = ["کیرم تو خارت", "بصیک بچه کونی", "بای بده ننه پولی", "کیرم تو ننت اوبی", "نگامت کص ننه ", "کص ننه پرده ارتجاعیت", "ننتو شبی چند میدی؟", "خارتو با روغن جامد گاییدم", "کص آبجیت ", "زنا زادع ", "ننه خیابونی", "گی ننه", "آبم لا کص ننت چجوری میشه", "بالا باش ننه کیر دزد", "ننت مجلسی میزنه؟کصصصص ننت جووووون", "ننه جریده", "گی پدر زنا زادع ", "ننتو کرایه میدی؟", "شل ننه بالا باش", "خارکصده به ننت بگو رو کیرم خوش میگذره؟", "ننه توله کص ننتو جر میدم", "بیا ننتو ببر زخمش کردم", "کص ننتو بزارم یکم بخندیم", "به ننت بگو بیاد واسم پر توف بزنه خرجتونو بدم یتیم", "فلج تیز باش ننتو بیار", "ننت پر توف میزنی بابات شم؟", "اوب کونی بزن به چاک تا ننتو جلوت حامله نکردمننه کون طلا بیا بالا😂", "یتیم بیا بغلم ", "ننت گنگ بنگ دوس داره؟", "بیا بگامت شاد شی خار کصده", "کیرم تو کص ننت بگو باشه😂", "داداش دوس داری یا آبجی ننه پولی", "۵۰ میدم ننتو بدهکیرم کص آبجی کص طلاااات", "ننه پولی چند سانت دوس داری؟", "دست و پا نزن ننه کص گشاد", "ننه ساکر هویت میخوای؟", "کیر سگا تو کص آبجیت ", "از ننت بپرس آب کیر پرتقالی دوس داره؟", "پستون ننت چنده", "تخخخخ بیا بالا ادبی", "مادرت دستو پا میزنه زیرم", "ننه سکسی بیا یه ساک بزن بخندیم", "خمینی اومد جاده دهاتتونو آسفالت کرد اومدید شهر و گرنه ننت کجا کص میداد؟", "گص کش", "کس ننه", "کص ننت", "کس خواهر", "کس خوار", "کس خارت", "کس ابجیت", "کص لیس", "ساک بزن", "ساک مجلسی", "ننه الکسیس", "نن الکسیس", "ناموستو گاییدم", "ننه زنا", "کس خل", "کس مخ", "کس مغز", "کس مغذ", "خوارکس", "خوار کس", "خواهرکس", "خواهر کس", "حروم زاده", "حرومزاده", "خار کس", "تخم سگ", "پدر سگ", "پدرسگ", "پدر صگ", "پدرصگ", "ننه سگ", "نن سگ", "نن صگ", "ننه صگ", "ننه خراب", "تخخخخخخخخخ", "نن خراب", "مادر سگ", "مادر خراب", "مادرتو گاییدم", "تخم جن", "تخم سگ", "مادرتو گاییدم", "ننه حمومی", "نن حمومی", "نن گشاد", "ننه گشاد", "نن خایه خور", "تخخخخخخخخخ", "نن ممه", "کس عمت", "کس کش", "کس بیبیت", "کص عمت", "کص خالت", "کس بابا", "کس خر", "کس کون", "کس مامیت", "کس مادرن", "مادر کسده", "خوار کسده", "تخخخخخخخخخ", "ننه کس", "بیناموس", "بی ناموس", "شل ناموس", "سگ ناموس", "ننه جندتو گاییدم باو ", "چچچچ نگاییدم سیک کن پلیز D:", "ننه حمومی", "چچچچچچچ", "لز ننع", "ننه الکسیس", "کص ننت", "بالا باش", "ننت رو میگام", "کیرم از پهنا تو کص ننت", "مادر کیر دزد", "ننع حرومی", "تونل تو کص ننت", "کیر تک تک بکس تلع گلد تو کص ننت", "کص خوار بدخواه", "خوار کصده", "ننع باطل", "حروم لقمع", "ننه سگ ناموس", "منو ننت شما همه چچچچ", "ننه کیر قاپ زن", "ننع اوبی", "ننه کیر دزد", "ننه کیونی", "ننه کصپاره", "زنا زادع", "کیر سگ تو کص نتت پخخخ", "ولد زنا", "ننه خیابونی", "هیس بع کس حساسیت دارم", "کص نگو ننه سگ که میکنمتتاااا", "کص نن جندت", "ننه سگ", "ننه کونی", "ننه زیرابی", "بکن ننتم", "ننع فاسد", "ننه ساکر", "کس ننع بدخواه", "نگاییدم", "مادر سگ", "ننع شرطی", "گی ننع", "بابات شاشیدتت چچچچچچ", "ننه ماهر", "حرومزاده", "ننه کص", "کص ننت باو", "پدر سگ", "سیک کن کص ننت نبینمت", "کونده", "ننه ولو", "ننه سگ", "مادر جنده", "کص کپک زدع", "ننع لنگی", "ننه خیراتی", "سجده کن سگ ننع", "ننه خیابونی", "ننه کارتونی", "تکرار میکنم کص ننت", "تلگرام تو کس ننت", "کص خوارت", "خوار کیونی", "پا بزن چچچچچ", "مادرتو گاییدم", "گوز ننع", "کیرم تو دهن ننت", "ننع همگانی", "کیرم تو کص زیدت", "کیر تو ممهای ابجیت", "ابجی سگ", "کس دست ریدی با تایپ کردنت چچچ", "ابجی جنده", "ننع سگ سیبیل", "بده بکنیم چچچچ", "کص ناموس", "شل ناموس", "ریدم پس کلت چچچچچ", "ننه شل", "ننع قسطی", "ننه ول", "دست و پا نزن کس ننع", "ننه ولو", "خوارتو گاییدم", "محوی!؟", "ننت خوبع!؟", "کس زنت", "شاش ننع", "ننه حیاطی \\\\\/:", "نن غسلی", "کیرم تو کس ننت بگو مرسی چچچچ", "ابم تو کص ننت :\\\\\/", "فاک یور مادر خوار سگ پخخخ", "کیر سگ تو کص ننت", "کص زن", "ننه فراری", "بکن ننتم من باو جمع کن ننه جنده \\\\\/:::", "ننه جنده بیا واسم ساک بزن", "حرف نزن که نکنمت هااا :|", "کیر تو کص ننت😐", "کص کص کص ننت😂", "کصصصص ننت جووون", "سگ ننع", "کص خوارت", "کیری فیس", "کلع کیری", "تیز باش سیک کن نبینمت", "فلج تیز باش چچچ", "بیا ننتو ببر", "بکن ننتم باو ", "کیرم تو بدخواه", "چچچچچچچ", "ننه جنده", "ننه کص طلا", "ننه کون طلا", "کس ننت بزارم بخندیم!؟", "کیرم دهنت", "مادر خراب", "ننه کونی", "هر چی گفتی تو کص ننت خخخخخخخ", "کص ناموست بای", "کص ننت بای :\\\\\/\\\\\/", "کص ناموست باعی تخخخخخ", "کون گلابی!", "ریدی آب قطع", "کص کن ننتم کع", "نن کونی", "نن خوشمزه", "ننه لوس", " نن یه چشم ", "ننه چاقال", "ننه جینده", "ننه حرصی ", "نن لشی", "ننه ساکر", "نن تخمی", "ننه بی هویت", "نن کس", "نن سکسی", "نن فراری", "لش ننه", "سگ ننه", "شل ننه", "ننه تخمی", "ننه تونلی", "ننه کوون", "نن خشگل", "نن جنده", "نن ول ", "نن سکسی", "نن لش", "کس نن ", "نن کون", "نن رایگان", "نن خاردار", "ننه کیر سوار", "نن پفیوز", "نن محوی", "ننه بگایی", "ننه بمبی", "ننه الکسیس", "نن خیابونی", "نن عنی", "نن ساپورتی", "نن لاشخور", "ننه طلا", "ننه عمومی", "ننه هر جایی", "نن دیوث", "تخخخخخخخخخ", "نن ریدنی", "نن بی وجود", "ننه سیکی", "ننه کییر", "نن گشاد", "نن پولی", "نن ول", "نن هرزه", "ننه لاشی کیری", "ننه ویندوزی", "نن تایپی", "نن برقی", "نن شاشی", "ننه درازی", "شل ننع", "یکن ننتم که", "کس خوار بدخواه", "آب چاقال", "ننه جریده", "ننه سگ سفید", "آب کون", "ننه 85", "ننه سوپری", "بخورش", "کس ن", "خوارتو گاییدم", "خارکسده", "گی پدر", "آب چاقال", "زنا زاده", "زن جنده", "سگ پدر", "مادر جنده", "ننع کیر خور", "چچچچچ", "تیز بالا", "ننه سگو با کسشر در میره", "کیر سگ تو کص ننت", "kos kesh", "kir", "kiri", "nane lashi", "kos", "kharet", "blis kirmo", "اوبی کونی هرزه", "کیرم لا کص خارت", "کیری", "ننه لاشی", "ممه", "کص", "کیر", "بی خایه", "ننه لش", "بی پدرمادر", "خارکصده", "مادر جنده", "کصکش", "کیرم کون مادرت😂😂😂😂", "بالا باش کیرم کص مادرت😂😂😂", "مادرتو میگام نوچه جون بالا😂😂??", "اب خارکصته تند تند تایپ کن ببینم", "مادرتو میگام بخای فرار کنی", "لال شو", "کیرم تو خارت", "بصیک بچه کونی", "بای بده ننه پولی", "کیرم تو ننت اوبی", "نگامت کص ننه ", "کص ننه پرده ارتجاعیت", "ننتو شبی چند میدی؟", "خارتو با روغن جامد گاییدم", "کص آبجیت ", "زنا زادع ", "ننه خیابونی", "گی ننه", "آبم لا کص ننت چجوری میشه", "بالا باش ننه کیر دزد", "ننت مجلسی میزنه؟", "کصصصص ننت جووووون", "ننه جریده", "گی پدر زنا زادع ", "ننتو کرایه میدی؟", "شل ننه بالا باش", "خارکصده به ننت بگو رو کیرم خوش میگذره؟", "ننه توله کص ننتو جر میدم", "بیا ننتو ببر زخمش کردم", "کص ننتو بزارم یکم بخندیم", "به ننت بگو بیاد واسم پر توف بزنه خرجتونو بدم یتیم", "ننه کون طلا بیا بالا😂", "یتیم بیا بغلم ", "ننت گنگ بنگ دوس داره؟", "بیا بگامت شاد شی خار کصده", "کیرم تو کص ننت بگو باشه😂", "داداش دوس داری یا آبجی ننه پولی", "۵۰ میدم ننتو بده", "فلج تیز باش ننتو بیار", "کیرم کص آبجی کص طلاااات", "ننه پولی چند سانت دوس داری؟", "دست و پا نزن ننه کص گشاد", "ننه ساکر هویت میخوای؟", "کیر سگا تو کص آبجیت ", "از ننت بپرس آب کیر پرتقالی دوس داره؟", "پستون ننت چنده", "تخخخخ بیا بالا ادبی", "مادرت دستو پا میزنه زیرم", "ننه سکسی بیا یه ساک بزن بخندیم", "خمینی اومد جاده دهاتتونو آسفالت کرد اومدید شهر و گرنه ننت کجا کص میداد؟", "کیرم تا ته و از پهنا تو کص مادرت", "کص ناموس مادرت", "مادر کص پاپیونی ", "مادر جنده حروم تخمی", "اوبی زاده حقیر", "بابات زیر کیرم بزرگ شد", "اسمم رو کون مادرت تتو شده", "خیخیخیخیخی", "چچچچچچچچ", "زجه بزن ناموس گلابی", "مادرت کیرمه ", "بابات منم ", "تخم سگ حروم زاده ", "کص ناموست ", "خواهرتو گاییدم", "ریدم بهت بیشعور", " بی شرف", " ریدم تو مغزت", " بی ارزش", " کصکش", " ریدم توی ناموست", " بی ناموس", " مادرجنده", " خواهر کصکش", " ریدم توی کل طایفت", " بی ناموس برو", " خوشم ازت نمیاد کصکش", " تو کصکشی", " برو خواهر جنده", "برو مادرجنده", " برو برادر کونی", " کونکش", "عوض بی ناموس", "ریدم تو قبر مادرت", "ریدم تو قبر پدرت", " ریدم تو قبرت", " ریدم تو زاتت", " ریدم تو خواهر جنده", " خواهر جندت خوبه", " مادر جندت خوبه", " پدر کونکشت خوبه", "برادر کونیت خوب", " پدرسگ", " مادر سگ", " برادر سگ", " خواهر سگ", " خواهر جندت چی", " مادر جندت چی", " پدر کونیت چی", " برادر کونیت چی", " اره جنده ها", " تو جنده ای", " تو کونی ای", " توی کصکشی", " خوشم از جنده ها نمیاد", " خواهرت جنده شده", " مادرت جنده شده", " جنده برو خودت رو جمع کن", " مامانت امشب روی کی هستش", " خواهرت پیش کیه", " برادرت داره کجا کون میده", " بابای قرمساقت کو", " خواهرت امشب روی کی هستش", " مادرت امشب روی کی خوابیده", "ننت پر توف میزنی بابات شم؟", "اوب کونی بزن به چاک تا ننتو جلوت حامله نکردم", " ریدم بهت", " بیشعور", " بی شرف", " ریدم تو مغزت", " بی ارزش", " کصکش", " ریدم توی ناموست", " بی ناموس", " مادرجنده", " خواهر کصکش", " ریدم توی کل طایفت", " بی ناموس برو", " خوشم ازت نمیاد کصکش", " تو کصکشی", " برو خواهر جنده", " برو مادرجنده", " برو برادر کونی", " کونکش", " عوض بی ناموس", " ریدم تو قبر مادرت", " ریدم تو قبر پدرت", " ریدم تو قبرت", " ریدم تو زاتت", " ریدم تو خواهر جنده", " خواهر جندت خوبه", " مادر جندت خوبه", " پدر کونکشت خوبه", " برادر کونیت خوب", " پدرسگ", " مادر سگ", " برادر سگ", " خواهر سگ", " خواهر جندت چی", " مادر جندت چی", " پدر کونیت چی", " برادر کونیت چی", " اره جنده ها", " تو جنده ای", " تو کونی ای", " توی کصکشی", " خوشم از جنده ها نمیاد", " خواهرت جنده شده", " مادرت جنده شده", " جنده برو خودت رو جمع کن", " مامانت امشب روی کی هستش", " خواهرت پیش کیه", " برادرت داره کجا کون میده", " بابای قرمساقت کو", " خواهرت امشب روی کی هستش", " مادرت امشب روی کی خوابیده", "کیرم کون مادرت😂😂😂😂", "بالا باش کیرم کص مادرت😂😂😂", "مادرتو میگام نوچه جون بالا😂😂😂", "اب خارکصته تند تند تایپ کن ببینم", "مادرتو میگام بخای فرار کنی", "لال شو دیگه نوچه", "مادرتو میگام اف بشی", "کیرم کون مادرت", "کیرم کص مص مادرت بالا", "کیرم تو چشو چال مادرت", "کون مادرتو میگام بالا", "بیناموس  خسته شدی؟", "نبینم خسته بشی بیناموس", "ننتو میکنم", "کیرم کون مادرت 😂😂😂😂😂😂😂", "صلف تو کصننت بالا", "بیناموس بالا باش بهت میگم", "کیر تو مادرت", "کص مص مادرتو بلیسم؟", "کص مادرتو چنگ بزنم؟", "به خدا کصننت بالا ", "مادرتو میگام ", "کیرم کون مادرت بیناموس", "مادرجنده بالا باش", "بیناموس تا کی میخای سطحت گح باشه", "اپدیت شو بیناموس خز بود", "کیرم از پهنا تو ننت", "و اما تو بیناموس چموش", "تو یکیو مادرتو میکنم", "کیرم تو ناموصت ", "کیر تو ننت", "ریش روحانی تو ننت", "کیر تو مادرت😂😂😂", "کص مادرتو مجر بدم", "صلف تو ننت", "بات تو ننت ", "مامانتو میکنم بالا", "کیر ترکا به ناموست", "سطحشو نگا", "تایپ کن بیناموس", "خشاب؟", "کیرم کون مادرت بالا", "بیناموس نبینم خسته بشی", "مادرتو بگام؟", "گح تو سطحت شرفت رف", "بیناموس شرفتو نابود کردم یه کاری کن", "وای کیرم تو سطحت", "بیناموس روانی شدی", "روانیت کردما", "مادرتو کردم کاری کن", "تایپ تو ننت", "بیپدر بالا باش", "و اما تو لر خر", "ننتو میکنم بالا باش", "کیرم لب مادرت بالا😂😂😂", "چطوره بزنم نصلتو گح کنم", "داری تظاهر میکنی ارومی ولی مادرتو کوص کردم", "مادرتو کردم بیغیرت", "هرزه", "وای خدای من اینو نگا", "کیر تو کصننت", "ننتو بلیسم", "منو نگا بیناموس", "کیر تو ننت بسه دیگه", "خسته شدی؟", "ننتو میکنم خسته بشی", "وای دلم کون مادرت بگام", "اف شو احمق", "بیشرف اف شو بهت میگم", "مامان جنده اف شو", "کص مامانت اف شو", "کص لش وا ول کن اینجوری بگو؟", "ای بیناموس چموش", "خارکوصته ای ها", "مامانتو میکنم اف نشی", "گح تو ننت", "سطح یه گح صفتو", "گح کردم تو نصلتا", "چه رویی داری بیناموس", "ناموستو کردم", "رو کص مادرت کیر کنم؟😂😂😂", "نوچه بالا", "کیرم تو ناموصتاا😂😂", "یا مادرتو میگام یا اف میشی", "لالشو دیگه", "بیناموس", "مادرکصته", "ناموص کصده", "وای بدو ببینم میرسی", "کیرم کون مادرت چیکار میکنی اخه", "خارکصته بالا دیگه عه", "کیرم کصمادرت😂😂😂", "کیرم کون ناموصد😂😂😂", "بیناموس من خودم خسته شدم توچی؟", "ای شرف ندار", "مامانتو کردم بیغیرت", "و اما مادر جندت", "تو یکی زیر باش", "اف شو", "خارتو کوص میکنم", "کوصناموصد", "ناموص کونی", "خارکصته ی بۍ غیرت", "شرم کن بیناموس", "مامانتو کرد ", "ای مادرجنده", "بیغیرت", "کیرتو ناموصت", "بیناموس نمیخای اف بشی؟", "ای خارکوصته", "لالشو دیگه", "همه کس کونی", "حرامزاده", "مادرتو میکنم", "بیناموس", "کصشر", "اف شو مادرکوصته", "خارکصته کجایی", "ننتو کردم کاری نمیکنی؟", "کیرتو مادرت لال", "کیرتو ننت بسه", "کیرتو شرفت", "مادرتو میگام بالا", "کیر تو مادرت", "کونی ننه ی حقیر زاده", "وقتی تو کص ننت تلمبه های سرعتی میزدم تو کمرم بودی بعد الان برا بکنه ننت شاخ میشی هعی   ", "تو یه کص ننه ای ک ننتو به من هدیه کردی تا خایه مالیمو کنی مگ نه خخخخ", "انگشت فاکم تو کونه ناموست", "تخته سیاهه مدرسه با معادلات ریاضیه روش تو کص ننت اصلا خخخخخخخ ", "کیرم تا ته خشک خشک با کمی فلفل روش تو کص خارت ", "کص ننت به صورت ضربدری ", "کص خارت به صورت مستطیلی", "رشته کوه آلپ به صورت زنجیره ای تو کص نسلت خخخخ ", "10 دقیقه بیشتر ابم میریخت تو کس ننت این نمیشدی", "فکر کردی ننت یه بار بهمـ داده دیگه شاخی", "اگر ننتو خوب کرده بودم حالا تو اینجوری نمیشدی"];

$DB_A = "DB.json";
if (!file_exists($DB_A)) {
    $Base = [
        'online'         => 'on',
        'mutepv'         => 'off',
        'markread'       => 'off',
        'FirstComment'   => [
            'status'     => "off",
            'text'       => "First :)"
        ],
        'TimeMode'       => 'off',
        "Mutes"          => [0 => 1],
        "enemies"        => [0 => 1],
        "Fosh"           => $fz,
        "Emoji"          => $ez

    ];
    file_put_contents($DB_A, json_encode($Base, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}
include 'madeline.php';
date_default_timezone_set('Asia/Tehran');


use \danog\MadelineProto\API;
use \danog\Loop\Generic\GenericLoop;
use \danog\MadelineProto\EventHandler;

function DB($INP = null)
{
    if ($INP == null) {
        return json_decode(file_get_contents('DB.json'), true);
    } else {
        file_put_contents('DB.json', json_encode($INP, 128 | 256));
        return "Success !";
    }
}
function fix($str)
{
    return strtolower(str_replace([',', '.', '[', ']', '-', '^', '$', '(', ')', '*', '|', '{', '}', '\\', '#', '&', '!', '~', '/', ' ', '\'', '"', ':', ';'], '', $str));
}
function is_english($str)
{
    if (strlen($str) != strlen(utf8_decode($str))) {
        return false;
    } else {
        return true;
    }
}
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
function mediaTimeDeFormater($seconds)
{
    if (!is_numeric($seconds))
        throw new Exception("Invalid Parameter Type!");
    $ret = "";
    $hours = (string)floor($seconds / 3600);
    $secs = (string)$seconds % 60;
    $mins = (string)floor(($seconds - ($hours * 3600)) / 60);
    if (strlen($hours) == 1)
        $hours = "0" . $hours;
    if (strlen($secs) == 1)
        $secs = "0" . $secs;
    if (strlen($mins) == 1)
        $mins = "0" . $mins;
    if ($hours == 0)
        $ret = "$mins m:$secs s";
    else
        $ret = "$hours h:$mins m:$secs s";
    return $ret;
}
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
function mt($str, $needle)
{
    preg_match_all('/./', fix($needle), $mt);
    $pattern = '';
    foreach ($mt[0] as $let) {
        $pattern .= "$let.{0,3}";
    }
    $pattern = "/$pattern/";
    if (preg_match($pattern, strtolower($str))) {
        echo "Y";
        return true;
    } else {
        echo "N";
        return false;
    }
}
function align(array $args, string $sep = ': ', string $prefix = '', string $suffix = '', bool $mb = false): string
{
    [$result, $maxLength, $method] = ['', 0, $mb ? 'mb_strlen' : 'strlen'];
    foreach ($args as $key => $val) {
        if ($method($key) > $maxLength) {
            $maxLength = $method($key);
        }
    }
    foreach ($args as $key => $val) {
        $result .= $prefix . $key . str_repeat(' ', $maxLength - $method($key)) . $sep . $val . $suffix . PHP_EOL;
    }
    return $result;
}
function bytesShortener($bytes, int $round = 0): string
{
    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    $index = 0;
    while ($bytes > 1024) {
        $bytes /= 1024;
        if (++$index === 8)
            break;
    }
    if ($round !== 0) {
        $bytes = round($bytes, $round);
    }
    return "$bytes {$units[$index]}";
}
function getCpuCores(): int
{
    return (int) (PHP_OS_FAMILY === 'Windows'
        ? getenv('NUMBER_OF_PROCESSORS')
        : substr_count(file_get_contents('/proc/cpuinfo'), 'processor'));
}


function datefont($str)
{
    $fonts = [
        ["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿 "],
        ["𝟘", "𝟙", "𝟚", "𝟛", "𝟜", "𝟝", " 𝟞", "𝟟", "𝟠", "𝟡"],
        ["❬0❭", "❬1❭", "❬2❭", "❬3❭", "❬4❭", "❬5❭", "❬6❭", "❬7❭", "❬8❭", "❬9❭"],
        ["⓪", "①", "②", "③", "④", "⑤", "⑥", "⑦", "⑧", "⑨"],
        ["𝟬", "𝟭", "𝟮", "𝟯", "𝟰", "𝟱", "𝟲", "𝟳", "𝟴", "𝟵"],
        ["《𝟬》", "《𝟭》", "《𝟮》", "《𝟯》", "《𝟰》", "《𝟱》", "《𝟲》", "《𝟳》", "《𝟴》", "《𝟵》"],
        ["𝟬", "𝟭", "𝟮", "𝟯", "𝟰", "𝟱", "𝟲", "𝟳", "𝟴", "𝟵"],
        ["0⃣", "1⃣", "2⃣", "3⃣", "4⃣", "5⃣", "6⃣", "7⃣", "8⃣", "9⃣"],
        ["𝟎", "𝟏", "𝟐", "𝟑", "𝟒", "𝟓", "𝟔", "𝟕", "𝟖", "𝟗"],
        ["⁰", "¹", "²", "³", "⁴", "⁵", "⁶", "⁷", "⁸", "⁹"],
        ["⊘", "҉1", "҉2", "҉3", "҉4", "҉5", "҉6", "҉7", "҉8", "9҉"],
        ["⊘", "⇂", "ϩ", "Ӡ", "५", "Ƽ", "Ϭ", "７", "𝟖", "९"],
        ["⊘", "𝟏", "ᄅ", "Ɛ", "ㄣ", "𝟝", "６", "ㄥ", "８", "𝟗"]
    ];
    $date = str_replace(range(0, count($fonts)), $fonts[array_rand($fonts)], $str);
    return $date;
}

class XHandler extends EventHandler
{
    const Admins = [0 => 1390918103];
    const Report = 1390918103;

    public function getReportPeers()
    {
        return [self::Report];
    }
    public function genLoop()
    {
        $DB = DB();
        if ($DB['online'] == 'on') {
            yield $this->account->updateStatus([
                'offline' => false
            ]);
        }
        if ($DB['TimeMode'] == 'on') {
            $date  = datefont(date('H:i',time()+33));
            $bi    = file_get_contents('data/bio.txt');
            $bio   = $bi . "\n " . $date;
            yield $this->account->updateProfile(
                [
                    'last_name' => $date,
                    'about'     => $bio
                ]
            );
        }
        return 60000;
    }
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
    public function onStart()
    {
        $this->timen = time();
        $genLoop = new GenericLoop([$this, 'genLoop'], 'update Status');
        $genLoop->start();
        $this->start_time = time();
    }


    public function onUpdateNewChannelMessage($update)
    {
        yield $this->onUpdateNewMessage($update);
    }

    public function hasMedia(array $message = [], bool $allowWebPage = false): bool
    {
        $mediaType = $message['media']['_'] ?? null;
        if ($mediaType === null) {
            return false;
        }
        if ($mediaType === 'messageMediaWebPage' && ($allowWebPage === false || empty($message['media']['webpage']['photo']))) {
            return false;
        }
        return true;
    }

    public function onUpdateNewMessage($update)
    {
        if (time() - $update['message']['date'] > 2) {
            return;
        }
        try {
            $msg                 = isset($update['message']) ? $update['message'] : null;
            $txt                 = isset($update['message']['message']) ? $update['message']['message'] : null;
            $msg_id              = isset($update['message']['id']) ? $update['message']['id'] : null;
            $reply_to_msg_id     = isset($update['message']['reply_to']['reply_to_msg_id']) ? $update['message']['reply_to']['reply_to_msg_id'] : null;
            $user_id             = isset($update['message']['from_id']['user_id']) ? $update['message']['from_id']['user_id'] : null;
            $com                 = isset($update['message']['fwd_from']['saved_from_peer']) ? true : false;
            $me                  = yield $this->getSelf();
            $peer                = yield $this->getInfo($update);
            $chID                = yield $this->getID($update);
            $chat_id             = $peer['bot_api_id'];
            $type                = $peer['type'];
            @$DB                 =  DB();
            $me_id               = $me['id'];


            #=============Profile Backup================
            $inf          = yield $this->getFullInfo($me_id);
            if (!is_dir('data')) {
                mkdir('data');
            }
            $inff         = $inf['full']['full_user'];
            $me_name      = $inf['User']['first_name'];
            $me_bio       = isset($inff['about']) ? $inff['about'] : 'V:1.0.0';
            if (!file_exists('data/name.txt')) {
                file_put_contents('data/name.txt', $me_name);
            }
            if (!file_exists('data/bio.txt')) {
                file_put_contents('data/bio.txt', $me_bio);
            }
            if (!file_exists('data/backup.jpg')) {
                $pics = yield $this->photos->getUserPhotos(['user_id' => $me_id, 'offset' => 0, 'max_id' => 0, 'limit' => 1])['photos'];
                $pics = isset($pics) ? $pics : 'kos';
                if ($pics != 'kos') {
                    foreach ($pics as $key => $value) {
                        yield $this->downloadToFile($value, 'data/backup.jpg');
                    }
                }
            }
            #MEDIA ANSWERS
            if (isset($DB['MediaAnswers'])) {
                foreach ($DB['MediaAnswers'] as $key => $value) {
                    $result = mt($txt, $value['text']);
                    if ($result == true) {
                        $media = $value['media'];
                        yield $this->messages->sendMedia([
                            'peer'            => $chat_id,
                            'media'           => $media,
                            'reply_to_msg_id' => $msg_id,
                        ]);
                    }
                }
            }
            #Answers 
            if (isset($DB['answers'][$txt]) && $user_id != $me_id) {
                yield $this->messages->sendMessage([
                    'peer'            => $chat_id,
                    'message'         => $DB['answers'][$txt]['answer'],
                    'reply_to_msg_id' => $msg_id,
                    'parse_mode'      => "html"
                ]);
            }

            #MUTE PV
            if (isset($DB['mutepv']) && @$DB['mutepv'] == 'on') {
                if ($user_id != $me_id) {
                    if (isset($msg) && $type == 'user') {
                        yield $this->messages->deleteMessages(['revoke' => true, 'id' => [$msg_id]]);
                    }
                }
            }
            #MARK READ MODE
            if (isset($DB['markread'])) {
                if ($DB['markread'] == 'on') {
                    if ($type == 'user') {
                        yield $this->messages->readHistory(['peer' => $chat_id, 'max_id' => $msg_id]);
                    }
                }
            }
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
            #First Comment
            if ($com && $DB['FirstComment']['status'] == 'on') {
                if (isset($DB['FirstComment']['text'])) {
                    yield $this->messages->sendMessage([
                        'peer'            => $chat_id,
                        'message'         => $DB['FirstComment']['text'],
                        'parse_mode'      => 'Markdown',
                        'reply_to_msg_id' => $msg_id
                    ]);
                } elseif (isset($DB['FirstComment']['media'])) {
                    yield $this->messages->sendMedia([
                        'peer'            => $chat_id,
                        'media'           => $DB['FirstComment']['media'],
                        'parse_mode'      => 'Markdown',
                        'reply_to_msg_id' => $msg_id
                    ]);
                }
            }
            #Enemies
            if (in_array($user_id, $DB['enemies'])) {
                $e        = $DB['Emoji'];
                $f        = $DB['Fosh'];
                $fosh     = $f[array_rand($f)];
                $emoji    = $e[array_rand($e)];
                yield $this->messages->sendMessage([
                    'peer'            => $chat_id,
                    'message'         => $fosh . ' ' . $emoji,
                    'parse_mode'      => "markdown",
                    'reply_to_msg_id' => $msg_id
                ]);
                if ($type != 'channel' || $type != 'supergroup') {
                    yield $this->messages->deleteMessages([
                        'revoke' => true,
                        'id'     => [$msg_id]
                    ]);
                }
            }
            if (in_array($user_id, $DB['Mutes'])) {
                yield $this->channels->deleteMessages([
                    'channel' => $chat_id,
                    'id'     => [$msg_id]
                ]);
            }

            #ADMIN Commands
            if (in_array($user_id, self::Admins) || $user_id == $me_id) {

                if (preg_match('/[\/\!]?(dl) (.*)/ius', $txt, $match)) {
                    $peer = $chat_id;
                    $sent = yield $this->messages->sendMessage([
                        'peer'    => $peer,
                        'message' => 'Preparing...'
                    ]);
                    $id   = $sent['id'] ?? $sent['updates'][0]['id'];
                    $name = \basename($match[2]) ?? 'Unkowon';
                    $url  = new \danog\MadelineProto\FileCallback(
                        $match[2],
                        function ($progress, $speed, $time) use ($peer, $id) {
                            static $prev = 0;
                            $now = \time();
                            if ($now - $prev < 10 && $progress < 100) {
                                return;
                            }
                            $prev = $now;
                            $progress = round($progress);
                            try {
                                yield $this->messages->editMessage([
                                    'peer'    => $peer,
                                    'id'      => $id,
                                    'message' => "Upload progress: $progress%\nSpeed: $speed mbps\nTime elapsed since start: $time"
                                ]);
                            } catch (\Throwable $e) {
                            }
                        }
                    );
                    yield $this->messages->sendMedia([
                        'peer' => $peer,
                        'media' => [
                            '_' => 'inputMediaUploadedDocument',
                            'file' => $url,
                            'attributes' => [
                                ['_' => 'documentAttributeFilename', 'file_name' => $name]
                            ]
                        ],
                        'message' => 'By @MadelineProto !'
                    ]);
                }
                if (preg_match('/[\/\.\#\!\.]?(run)\s?(.*)$/usi', $txt, $match)) {
                    $result   = null;
                    $errors   = null;
                    $match[2] = "return (function () use 
                        (&\$update,&\$chat_id,&\$msg_id,&\$reply_to_msg_id,&\$user_id,&\$type){
                            {$match[2]}
                        }
                    )();";
                    ob_start();
                    try {
                        (yield eval($match[2]));
                        $result .= ob_get_contents() . "\n";
                    } catch (\Throwable $e) {
                        $errors .= $e->getMessage() . "\n";
                    }

                    ob_end_clean();
                    if (empty($result)) {
                        yield $this->messages->sendMessage([
                            'peer'    => $chat_id,
                            'message' => $errors
                        ]);
                        return;
                    }
                    $errors = !empty($errors) ? "\nErrors :\n$errors" : null;
                    $answer = "Results : \n" . $result . $errors;
                    yield $this->messages->sendMessage([
                        'peer'    => $chat_id,
                        'message' => $answer
                    ]);
                }


                if (preg_match("/^[\/\#\!\.]?ts$/si", $txt)) {
                    if (isset($reply_to_msg_id)) {
                        if ($type == 'supergroup' || $type == 'chat') {
                            $messag = yield $this->channels->getMessages([
                                'channel'         => $chat_id,
                                'id'              => [$reply_to_msg_id]
                            ]);
                        } else {
                            $messag = yield $this->messages->getMessages([
                                'id'              => [$reply_to_msg_id]
                            ]);
                        }
                        if (isset($messag['messages'][0]['media']['photo'])) {
                            $media = $messag['messages'][0]['media'];
                            yield $this->downloadToFile($media, "data/photos.png");
                            $photoName = "data/photos.png";
                            $stickerName = "data/sticker.webp";
                            $img = imagecreatefromjpeg($photoName);
                            imagewebp($img, $stickerName);
                            imagedestroy($img);
                            yield $this->messages->sendMedia([
                                'peer'            => $chat_id,
                                'media'           => [
                                    '_'               => 'inputMediaUploadedDocument',
                                    'file'            => $stickerName,
                                    'attributes'      => [[
                                        '_'               => 'documentAttributeSticker',
                                        'mask'            => false,
                                        'alt'             => '',
                                        'stickerset'      => [
                                            '_'               => 'inputStickerSetEmpty'
                                        ],
                                    ]]
                                ]
                            ]);
                            unlink("data/photos.png");
                            unlink("data/sticker.webp");
                        } else {
                            yield $this->messages->editMessage([
                                'peer'            => $chat_id,
                                'id'              => $msg_id,
                                'message'         => "<b>Please Reply To a Photo</b>",
                                'parse_mode'      => 'html'
                            ]);
                        }
                    } else {
                        yield $this->messages->editMessage([
                            'peer'            => $chat_id,
                            'id'              => $msg_id,
                            'message'         => "<b>Please Reply To Message</b>",
                            'parse_mode'      => 'html'
                        ]);
                    }
                }
                /******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                if (preg_match("/^[\/\#\!\.]?tp$/si", $txt)) {
                    if (isset($reply_to_msg_id)) {
                        if ($type == 'channel' || $type == 'supergroup') {
                            $I = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]]);
                        } else {
                            $I = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]]);
                        }
                        $Document = $I['messages'][0]['media']['document'];
                        yield $this->downloadToFile($Document, "data/picc.png");
                        $inputMediaUploadedPhoto = ['_' => 'inputMediaUploadedPhoto', 'file' => 'data/picc.png'];
                        yield $this->messages->sendMedia([
                            'peer' => $chat_id,
                            'media' => $inputMediaUploadedPhoto,
                            'message' => "test",
                            'reply_to_msg_id' => $msg_id,
                            'parse_mode' => 'MarkDown'
                        ]);
                    }
                    unlink('data/picc.png');
                }
                #Clone 
                if (preg_match('/^[\/\#\!\.]?clone$/i', $txt)) {
                    try {
                        if (file_exists('data/clone.jpg')) {
                            unlink('data/clone.jpg');
                        }
                        
                        if (isset($reply_to_msg_id)) {
                            if ($type == 'channel' || $type == 'supergroup') {
                                $ID = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0]['id'];
                            } else {
                                $ID = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0]['id'];
                            }
                            $full    = yield $this->getFullInfo($ID);
                            $fname   = $full['User']['first_name'];
                            $fulll   = $full['full']['full_user'];
                            $about   = isset($fulll['about']) ? $fulll['about'] : null;
                            $bio     = (mb_strlen($about) >= 70) ? mb_substr($about, 0, 68) : $about;
                            $type    = $full['type'];

                            $profile = isset($fulll['profile_photo']) ? $fulll['profile_photo'] : 'havent';

                            $notfication = "<b>Clone was Successfull. \nIam</b><a href='mention:$ID'>[$fname]</a><b> from now.</b>";

                            if ($user_id == $me_id) {
                                yield $this->messages->editMessage(
                                    [
                                        'peer'       => $chat_id,
                                        'message'    => $notfication,
                                        'id'         => $msg_id,
                                        'parse_mode' => "html"
                                    ]
                                );
                            } else {
                                yield $this->messages->sendMessage(
                                    [
                                        'peer'            => $chat_id,
                                        'message'         => $notfication,
                                        'reply_to_msg_id' => $msg_id,
                                        'parse_mode'      => 'html'
                                    ]
                                );
                            }
                            yield $this->account->updateProfile(
                                [
                                    'first_name' => $fname
                                ]
                            );
                            if ($profile == 'havent') {
                                $pic  = yield $this->photos->getUserPhotos(
                                    [
                                        'user_id' => $me_id,
                                        'offset'  => 0,
                                        'max_id'  => 0,
                                        'limit'   => 1
                                    ]
                                )['photos'];
                                yield $this->photos->deletePhotos(
                                    [
                                        'id' => $pic
                                    ]
                                );
                            }
                            if (!is_null($about)) {
                                yield $this->account->updateProfile(
                                    [
                                        'about' => $bio
                                    ]
                                );
                            }
                            $p = yield $this->getPropicInfo($ID);
                            yield $this->downloadToFile($p, './data/clone.jpg');

                            $pic  = yield $this->photos->getUserPhotos(
                                [
                                    'user_id' => $me_id,
                                    'offset'  => 0,
                                    'max_id'  => 0,
                                    'limit'   => 1
                                ]
                            )['photos'];
                            yield $this->photos->deletePhotos(
                                [
                                    'id' => $pic
                                ]
                            );
                            yield $this->photos->uploadProfilePhoto(
                                [
                                    'file' => './data/clone.jpg'
                                ]
                            );
                        } else {
                            yield $this->messages->sendMessage(
                                [
                                    'peer'            => $chat_id,
                                    'message'         => "Reply To User",
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => 'Markdown'
                                ]
                            );
                        }
                    } catch (\Throwable $e) {
                        yield $this->messages->sendMessage(
                            [
                                'peer'            => $chat_id,
                                'message'         => $e->getMessage(),
                                'parse_mode'      => 'Markdown'
                            ]
                        );
                    }
                }
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                if (preg_match('/^[\/\!\#\.]?sanswer (.*)/si', $txt, $acc)) {
                    if (isset($reply_to_msg_id)) {
                        if ($type == 'channel' || $type == 'supergroup') {
                            $reply = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]]);
                        } else {
                            $reply = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]]);
                        }
                        $document_sticker = $reply['messages'][0]['media']['document'];
                        if ($document_sticker) {
                            $ds_id = $document_sticker['id'];
                            $ds_ah = $document_sticker['access_hash'];
                            $ds_fr = $document_sticker['file_reference'];
                            $is    = ['_' => 'inputDocument', 'id' => $ds_id, 'access_hash' => $ds_ah, 'file_reference' => $ds_fr];
                            $imuds = ['_' => 'inputMediaDocument', 'id' => $is];
                            @$DB['MediaAnswers'][0] = ['text' => "%test%", 'media' => 'kos'];
                            $push = ['text' => $acc[1], 'media' => $imuds];
                            array_push($DB['MediaAnswers'], $push);
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => "<pre>MediaAnswer Successfully Saved.</pre>",
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "html"
                            ]);
                            DB($DB);
                        }
                    }
                } elseif (preg_match('/^[\/\!\#\.]?sans (.*) (.*)/si', $txt, $xza)) {
                    $h = "<b>Text : $xza[1] \n Answer : $xza[2] \n was set.</b>";
                    yield $this->messages->sendMessage([
                        'peer'            => $chat_id,
                        'message'         => $h,
                        'reply_to_msg_id' => $msg_id,
                        'parse_mode'      => "HTML"
                    ]);
                    @$DB['answers'][$xza[1]] = ['text' => $xza[1], 'answer' => $xza[2]];
                    DB($DB);
                } elseif (preg_match('/^[\/\!\#\.]?danswer (.*)/si', $txt, $accc)) {
                    if (isset($DB['answers'][$accc[1]])) {
                        $h = "<b>Answer : " . @$DB['answers'][$accc[1]]['answer'] . "\n\nText : " . @$DB['answers'][$accc[1]]['text'] . " \n\nSuccessfuly Deleted.</b>";
                        yield $this->messages->sendMessage([
                            'peer'            => $chat_id,
                            'message'         => $h,
                            'reply_to_msg_id' => $msg_id,
                            'parse_mode'      => "HTML"
                        ]);
                        unset($DB['answers'][$accc[1]]);
                        DB($DB);
                    } else {
                        for ($i = 0; $i <= count($DB['MediaAnswers']); $i++) {
                            if ($DB['MediaAnswers'][$i]['text'] == $accc[1]) {
                                unset($DB['MediaAnswers'][$i]);
                                yield $this->messages->sendMessage([
                                    'peer'            => $chat_id,
                                    'message'         => "<pre>MediaAnsewr Successfully Deleted.</pre>",
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => "html"
                                ]);
                                DB($DB);
                            }
                        }
                    }
                }
                if (preg_match('/^[\/\!\#\.]?time (.*)/si', $txt, $xqq)) {
                    $date  = datefont(date('H:i',time()+30));
                    $bi    = file_get_contents('data/bio.txt');
                    $bio   = $bi . "\n " . $date;
                    switch ($xqq[1]) {
                        case 'on':
                            yield $this->messages->sendMessage([
                                'peer'       => $chat_id,
                                'message'    => "Time Mode Now Is $xqq[1]",
                                'parse_mode' => "markdown"
                            ]);
                            yield $this->account->updateProfile(
                                [
                                    'last_name' => $date,
                                    'about'     => $bio
                                ]
                            );
                            $DB['TimeMode'] = 'on';
                            DB($DB);
                            break;

                        case 'off':
                            yield $this->messages->sendMessage([
                                'peer'       => $chat_id,
                                'message'    => "Time Mode Now Is $xqq[1]",
                                'parse_mode' => "markdown"
                            ]);
                            yield $this->account->updateProfile(
                                [
                                    'first_name' => file_get_contents('data/name.txt'),
                                    'about'      => file_get_contents('data/bio.txt'),
                                    'last_name'  => '',
                                ]
                            );
                            $DB['TimeMode'] = 'off';
                            DB($DB);
                            break;
                    }
                }
                if ($txt == 'help' || $txt == '/help' || $txt == '.help') {
                    $help =  "**Self Help V:1.0.0** \n\n"
                        . align(
                            [
                                '.'                    => "ping",
                                'Memory Usage'            => 'memory',
                                'Restart'                 => 'restart',
                                'Banall'                  => 'banall',
                                'MarkRead'                => 'mread on|off',
                                'MutePV'                  => 'mutepv on|off',
                                'FirstComment'            => 'fc on|off',
                                'OnlineMode'              => 'ol on|off',
                                'Spam[Reply]'             => 'sm 5',
                                'GetUserInfo[Reply]'      => 'inf',
                                'DelMessage'              => 'del 5',
                                'SetEnemy[Reply]'         => 'se',
                                'SetEnemy'                => 'se @exapmle | 1000000',
                                'DeleteEnemy[Reply]'      => 'de',
                                'DeleteEnemy'             => 'de @exapmle | 1000000',
                                'SetFirstComment[Reply]'  => 'sfc',
                                'SetFirstComment'         => 'sfc text',
                                'TimeMode'                => 'time on|off',
                                'Mute[Reply]'             => 'mute',
                                'Mute'                    => 'mute @example | 1000000',
                                'UnMute[Reply]'           => 'unmute',
                                'UnMute'                  => 'unmute @example | 1000000',
                                'DeleteMessages'          => 'delall',
                                'GetGroupInfo'            => 'inf @this',
                                'SetAnswer[Reply]'        => 'sanswer text',
                                'SetAnswer'               => 'sans hi hello',
                                'DelAnswer'               => 'danswer text',
                                'Mute2'                   => 'mute2',
                                'CleanMute2List'          => 'cmute2',
                                'TagMute2List'            => 'mutes2'
                            ],
                            '` ↬ (`',
                            '├ ✨ `',
                            '`)'
                        );

                    if ($user_id != $me_id) {
                        yield $this->messages->sendMessage([
                            'peer'            => $chat_id,
                            'message'         => "$help",
                            'reply_to_msg_id' => $msg_id,
                            'parse_mode'      => "markdown"
                        ]);
                    } else {
                        yield $this->messages->editMessage([
                            'peer'       => $chat_id,
                            'message'    => "$help",
                            'id'         => $msg_id,
                            'parse_mode' => "markdown"
                        ]);
                    }
                }
                /******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                #PING & UPTIME
                if ($txt == '.') {
                    $load         = sys_getloadavg()[0];
                    $uptime       = mediaTimeDeFormater(time() - $this->timen);
                    if ($user_id != $me_id) {
                        yield $this->messages->sendMessage([
                            'peer'            => $chat_id,
                            'message'         => "<b>Server Ping Load</b> : (<code>$load</code>) <br /><b>Script Uptime</b> : (<code>$uptime</code>)",
                            'reply_to_msg_id' => $msg_id,
                            'parse_mode'      => "html"
                        ]);
                    } else {
                        yield $this->messages->editMessage([
                            'peer'       => $chat_id,
                            'message'    => "<b>Server Ping Load</b> : (<code>$load</code>) <br /><b>Script Uptime</b> : (<code>$uptime</code>)",
                            'id'         => $msg_id,
                            'parse_mode' => "html"
                        ]);
                    }
                }
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                #RESTART
                if ($txt == 'restart') {
                    if ($user_id != $me_id) {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => "Done.", 'reply_to_msg_id' => $msg_id]);
                    } else {
                        yield $this->messages->editMessage(['peer' => $chat_id, 'message' => "Done.", 'id' => $msg_id]);
                    }
                    yield $this->restart();
                }

                #GET MEMORY USAGE 
                if ($txt == 'memory') {
                    $mem_usage = round((memory_get_usage() / 1024) / 1024, 1) . 'MB';
                    $ms = "*RAM : $mem_usage*";
                    if ($user_id == $me_id) {
                        yield $this->messages->editMessage(['peer' => $chat_id, 'message' => $ms, 'id' => $msg_id, 'parse_mode' => 'Markdown']);
                    } else {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $ms, 'reply_to_msg_id' => $msg_id, 'parse_mode' => 'Markdown']);
                    }
                }

                #MUTE PV
                if (preg_match('/^[\.]?mutepv (.*)$/i', $txt, $zaza)) {
                    $h = "<b>AntiPV Now Is $zaza[1]</b>";
                    yield $this->messages->sendMessage([
                        'peer'            => $chat_id,
                        'message'         => $h,
                        'reply_to_msg_id' => $msg_id,
                        'parse_mode'      => "HTML"
                    ]);
                    @$DB['mutepv'] = $zaza[1];
                    DB($DB);
                }

                #FirstComment
                if (preg_match('/^[\/\!\#]?fc (\w*)$/i', $txt, $r)) {
                    $DB['FirstComment']['status'] = $r[1];
                    $rr = "*FirstComment Now Is $r[1]*";
                    if ($user_id == $me_id) {
                        yield $this->messages->editMessage(['peer' => $chat_id, 'message' => $rr, 'id' => $msg_id, 'parse_mode' => 'Markdown']);
                    } else {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $rr, 'reply_to_msg_id' => $msg_id, 'parse_mode' => 'Markdown']);
                    }
                    DB($DB);
                }
                #SET FIRST COMMENT TEXT
                if (preg_match('/^[\.]?sfc (.*)$/i', $txt, $rrr)) {
                    if (!isset($reply_to_msg_id)) {
                        if (isset($DB['FirstComment']['media'])) {
                            unset($DB['FirstComment']['media']);
                        }
                        $DB['FirstComment']['text'] = $rrr[1];
                        $rr = "*Successfully Done.*";
                        if ($user_id == $me_id) {
                            yield $this->messages->editMessage(['peer' => $chat_id, 'message' => $rr, 'id' => $msg_id, 'parse_mode' => 'Markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $rr, 'reply_to_msg_id' => $msg_id, 'parse_mode' => 'Markdown']);
                        }
                        DB($DB);
                    }
                } elseif (preg_match('/^[\.]?sfc$/i', $txt)) {
                    if (isset($reply_to_msg_id)) {
                        if ($type == 'channel' || $type == 'supergroup') {
                            $reply = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]]);
                        } else {
                            $reply = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]]);
                        }
                        $document_sticker = $reply['messages'][0]['media']['document'];
                        if ($document_sticker) {
                            $ds_id = $document_sticker['id'];
                            $ds_ah = $document_sticker['access_hash'];
                            $ds_fr = $document_sticker['file_reference'];
                            $is    = ['_' => 'inputDocument', 'id' => $ds_id, 'access_hash' => $ds_ah, 'file_reference' => $ds_fr];
                            $imuds = ['_' => 'inputMediaDocument', 'id' => $is];
                            unset($DB['FirstComment']['text']);
                            $DB['FirstComment']['media'] = $imuds;
                            $rr = "*This Media Successfully Saved For FirstComment.*";
                            yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $rr, 'reply_to_msg_id' => $reply_to_msg_id, 'parse_mode' => 'Markdown']);
                            DB($DB);
                        }
                    }
                }
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                #SPAM MESSAGE OR MEDIA
                if (preg_match('/^[\.]?sm (\d+?)$/si', $txt, $match)) {
                    $method = ($type == 'supergroup') ? 'channels' : 'messages';
                    $response = yield $this->$method->getMessages([
                        'channel' => $chat_id,
                        'id'      => [$reply_to_msg_id],
                    ]);
                    $message = $response['messages'][0];
                    $messageData = [
                        'message'  => $message['message'] ?? '',
                        'peer'     => $chat_id,
                        'entities' => $message['entities'] ?? [],
                    ];
                    for ($i = 1; $i <= $match[1]; $i++) {
                        if ($this->hasMedia($message, false)) {
                            $messageData['media'] = $message;
                            yield $this->messages->sendMedia($messageData);
                        } else {
                            yield $this->messages->sendMessage($messageData);
                        }
                    }
                }

                #OnlineMode 
                if (preg_match('/^[\.]?ol (\w*)$/si', $txt, $ml)) {
                    $DB['online'] = $ml[1];
                    $rr = "*OnlineMode Now Is $ml[1].*";
                    if ($user_id == $me_id) {
                        yield $this->messages->editMessage(['peer' => $chat_id, 'message' => $rr, 'id' => $msg_id, 'parse_mode' => 'Markdown']);
                    } else {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $rr, 'reply_to_msg_id' => $msg_id, 'parse_mode' => 'Markdown']);
                    }
                    DB($DB);
                }
                #MarkRead 
                if (preg_match('/^[\.]?mread (\w*)$/si', $txt, $l)) {
                    $DB['markread'] = $l[1];
                    $rr = "*MarkRead Mode Now Is $l[1].*";
                    if ($user_id == $me_id) {
                        yield $this->messages->editMessage(['peer' => $chat_id, 'message' => $rr, 'id' => $msg_id, 'parse_mode' => 'Markdown']);
                    } else {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $rr, 'reply_to_msg_id' => $msg_id, 'parse_mode' => 'Markdown']);
                    }
                    DB($DB);
                }

                if (preg_match('/^[\#\!\.\/]?(mute2)$/i', $txt)) {
                    if ($type != 'user' && $type != 'bot') {
                        if (isset($reply_to_msg_id)) {
                            if ($type == 'channel' || $type == 'supergroup') {
                                $rpf = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            } else {
                                $rpf = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            }
                            $rpfi = $rpf['id'];
                            $rpfn = $rpf['first_name'];
                            $alert = "<b>This User </b><a href='mention:$rpfi'>$rpfn</a><b> Successfully Muted V:2.0.0</b>";
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => $alert,
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "HTML"
                            ]);
                            array_push($DB['Mutes'], $rpfi);
                            DB($DB);
                        } else {
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => '<b>Please Reply.</b>',
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "HTML"
                            ]);
                        }
                    }
                } elseif (preg_match('/^[\#\!\.\/]?(umute2)$/i', $txt)) {
                    if ($type != 'user' && $type != 'bot') {
                        if (isset($reply_to_msg_id)) {
                            if ($type == 'channel' || $type == 'supergroup') {
                                $rpf = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            } else {
                                $rpf = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            }
                            $rpfi = $rpf['id'];
                            $rpfn = $rpf['first_name'];
                            $s = array_search($rpfi, $DB['Mutes']);
                            $s = ($s == false) ? 'no' : $s;
                            if ($s != 'no') {
                                $alert = "<b>This User </b><a href='mention:$rpfi'>$rpfn</a><b> Successfully UnMuted V:2.0.0</b>";
                                yield $this->messages->sendMessage([
                                    'peer'            => $chat_id,
                                    'message'         => $alert,
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => "HTML"
                                ]);
                                unset($DB['Mutes'][$s]);
                                DB($DB);
                            } else {
                                yield $this->messages->sendMessage([
                                    'peer'            => $chat_id,
                                    'message'         => '<b>Can\'t find this user ...</b>',
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => "HTML"
                                ]);
                            }
                        } else {
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => '<b>Please Reply.</b>',
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "HTML"
                            ]);
                        }
                    }
                } elseif (preg_match('/^[\#\!\.\/]?(cmute2)$/i', $txt)) {
                    $count = count($DB['Mutes']) - 1;
                    if ($count != 0) {
                        yield $this->messages->editMessage([
                            'peer'            => $chat_id,
                            'message'         => "<b> All $count Mutes Successfully Cleaned.</b>",
                            'id'              => $msg_id,
                            'parse_mode'      => "markdown"
                        ]);
                        $DB['Mutes'] = [0 => 1];
                        DB($DB);
                    } else {
                        yield $this->messages->editMessage([
                            'peer'            => $chat_id,
                            'message'         => "<b>MuteList Is Empty :/</b>",
                            'id'              => $msg_id,
                            'parse_mode'      => "markdown"
                        ]);
                    }
                } elseif (preg_match('/^[\#\!\.\/]?(mutes2)$/i', $txt)) {
                    $kos = "**MUTE2 LIST ** \n\n";
                    unset($DB['Mutes'][0]);
                    foreach ($DB['Mutes'] as $new) {
                        @$kos .= "[$new](mention:$new)" . PHP_EOL;
                    }
                    yield $this->messages->editMessage([
                        'peer'            => $chat_id,
                        'message'         => "$kos",
                        'id'              => $msg_id,
                        'parse_mode'      => "markdown"
                    ]);
                }
                #MUTE USER IN GROUP WITH REPLY
                if (preg_match('/^[\#\!\.\/]?(mute|لال)$/i', $txt)) {
                    if ($type != 'user' && $type != 'bot') {
                        if (isset($reply_to_msg_id)) {
                            if ($type == 'channel' || $type == 'supergroup') {
                                $rpf = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            } else {
                                $rpf = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            }
                            $rpfi = $rpf['id'];
                            $rpfn = $rpf['first_name'];
                            $mute = ['_' => 'chatBannedRights', 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                            yield $this->channels->editBanned(['channel' => $chat_id, 'participant' => $rpfi, 'banned_rights' => $mute]);
                            $alert = "<b>This User </b><a href='mention:$rpfi'>$rpfn</a><b> Successfully Muted in This Group.</b>";
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => $alert,
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "HTML"
                            ]);
                        } else {
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => '<b>Please Reply.</b>',
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "HTML"
                            ]);
                        }
                    }
                    #MUTE MEMBER WITH USERID & USERNAME
                } elseif (preg_match('/^[\#\!\.\/]?(mute|لال) (\@.*|\d*)$/i', $txt, $geet)) {
                    if ($type != 'user' && $type != 'bot') {
                        $g = yield $this->getInfo($geet[2]);
                        $i = $g['User']['id'];
                        $n = $g['User']['first_name'];
                        $mute = ['_' => 'chatBannedRights', 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                        yield $this->channels->editBanned(['channel' => $chat_id, 'participant' => $i, 'banned_rights' => $mute]);
                        $alert = "<b>This User </b><a href='mention:$i'>$n</a><b> Successfully Muted in This Group.</b>";
                        yield $this->messages->sendMessage([
                            'peer'            => $chat_id,
                            'message'         => $alert,
                            'reply_to_msg_id' => $msg_id,
                            'parse_mode'      => "HTML"
                        ]);
                    }
                }
                /******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                #UNMUTE USER WITH REPLY 
                elseif (preg_match('/^[\#\!\.\/]?(unmute|حذف سکوت)$/i', $txt)) {
                    if ($type != 'user' && $type != 'bot') {
                        if (isset($reply_to_msg_id)) {
                            if ($type == 'channel' || $type == 'supergroup') {
                                $rpf = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            } else {
                                $rpf = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                            }
                            $rpfi = $rpf['id'];
                            $rpfn = $rpf['first_name'];
                            $unmute = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => false, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 99999];
                            yield $this->channels->editBanned(['channel' => $chat_id, 'participant' => $rpfi, 'banned_rights' => $unmute]);
                            $alert = "<b>This User </b><a href='mention:$rpfi'>$rpfn</a><b> Successfully UnMuted in This Group.</b>";
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => $alert,
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "HTML"
                            ]);
                        } else {
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => '<b>Please Reply.</b>',
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "HTML"
                            ]);
                        }
                    }
                }
                #UNMUTE MEMBER WITH USERID OR USERNAME
                elseif (preg_match('/^[\#\!\.\/]?(unmute|حذف سکوت) (\@.*|\d*)$/i', $txt, $eet)) {
                    if ($type != 'user' && $type != 'bot') {
                        $g = yield $this->getInfo($eet[2]);
                        $i = $g['User']['id'];
                        $n = $g['User']['first_name'];
                        $unmute = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => false, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 99999];
                        yield $this->channels->editBanned(['channel' => $chat_id, 'participant' => $i, 'banned_rights' => $unmute]);
                        $alert = "<b>This User </b><a href='mention:$i'>$n</a><b> Successfully UnMuted in This Group.</b>";
                        yield $this->messages->sendMessage([
                            'peer'            => $chat_id,
                            'message'         => $alert,
                            'reply_to_msg_id' => $msg_id,
                            'parse_mode'      => "HTML"
                        ]);
                    }
                }



                #SETENEMY 
                if (preg_match('/^[\.]?se$/i', $txt)) {
                    if (isset($reply_to_msg_id)) {
                        if ($type == 'channel' || $type == 'supergroup') {
                            $reply = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                        } else {
                            $reply = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                        }
                        $ID   = $reply['id'];
                        $name = $reply['first_name'];
                        //yield $this->contacts->block(['id' => $ID]);
                        $h = "<b>Successfull. \n This User </b><a href='mention:$ID'>[$name]</a>\n<b> from now Is your Enemy.</b>";
                        if (!in_array($ID, $DB['enemies'])) {
                            yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $h, 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                            array_push($DB['enemies'], $ID);
                            DB($DB);
                        } else {
                            $h .= "<b>\n Note : This User Already was your Enemy.</b>";
                            yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $h, 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                        }
                    }
                } elseif (preg_match('/^[\.]?se (\@.*|\d*)$/si', $txt, $m)) {
                    $GETFULLINFO = yield $this->getFullInfo($m[1]);
                    $FULL              = $GETFULLINFO['full'];
                    $n                 = $FULL['user']['first_name'];
                    $i                 = $FULL['user']['id'];
                    //yield $this->contacts->block(['id' => $m[1]]);
                    $h = "<b>Successfull. \n This User </b><a href='mention:$i'>[$n]</a>\n<b> from now Is your Enemy.</b>";
                    if (!in_array($i, $DB['enemies'])) {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $h, 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                        array_push($DB['enemies'], $i);
                        DB($DB);
                    } else {
                        $h .= "<b>\n Note : This User Already was your Enemy.</b>";
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $h, 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                    }
                }
                if (preg_match('/^[\.]?de$/i', $txt)) {
                    if (isset($reply_to_msg_id)) {
                        if ($type == 'channel' || $type == 'supergroup') {
                            $reply = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                        } else {
                            $reply = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0];
                        }
                        $ID   = $reply['id'];
                        $name = $reply['first_name'];
                        //yield $this->contacts->unblock(['id' => $ID]);
                        $h = "<b>Successfull. \n This User </b><a href='mention:$ID'>[$name]</a>\n<b> from now Isn't your Enemy.</b>";
                        if (!in_array($ID, $DB['enemies'])) {
                            yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => "<b>This user has not been your enemy.</b>", 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $h, 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                            $search = array_search($ID, $DB['enemies']);
                            unset($DB['enemies'][$search]);
                            DB($DB);
                        }
                    }
                } elseif (preg_match('/^[\.]?de (\@.*|\d*)$/si', $txt, $z)) {
                    $GETFULLINFO = yield $this->getFullInfo($z[1]);
                    $FULL              = $GETFULLINFO['full'];
                    $n                 = $FULL['user']['first_name'];
                    $i                 = $FULL['user']['id'];
                    //yield $this->contacts->unblock(['id' => $z[1]]);
                    $h = "<b>Successfull. \n This User </b><a href='mention:$i'>[$n]</a>\n<b> from now Isn't your Enemy.</b>";
                    if (!in_array($i, $DB['enemies'])) {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => "<b>This user has not been your enemy.</b>", 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                    } else {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => $h, 'reply_to_msg_id' => $msg_id, 'parse_mode' => "HTML"]);
                        $search = array_search($i, $DB['enemies']);
                        unset($DB['enemies'][$search]);
                        DB($DB);
                    }
                }

                if (preg_match('/^[\#\!\.\/]?inf$/si', $txt)) {
                    if (isset($reply_to_msg_id)) {
                        if ($type == 'channel' || $type == 'supergroup') {
                            $uID = yield $this->channels->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0]['id'];
                        } else {
                            $uID = yield $this->messages->getMessages(['channel' => $chat_id, 'id' => [$reply_to_msg_id]])['users'][0]['id'];
                        }
                        $GETFULLINFO       = yield $this->getFullInfo($uID);
                        $USER              = $GETFULLINFO['User'];
                        $PHONE             = isset($USER['phone'])         ? $USER['phone']     : '--';
                        $LASTNAME          = isset($USER['last_name'])     ? $USER['last_name'] : '--';
                        $CONTACT           = ($USER['contact']  == false)  ? 'no'               : 'yes';
                        $IS_BOT            = ($USER['bot']      == false)  ? 'no'               : 'yes';
                        $SCAM              = ($USER['scam']     == false)  ? 'no'               : 'yes';
                        $VERIFIED          = ($USER['verified'] == false)  ? 'no'               : 'yes';
                        $SUPPORT           = ($USER['support']  == false)  ? 'no'               : 'yes';
                        $FULL              = $GETFULLINFO['full']['full_user'];
                        $n                 = $USER['first_name'];
                        $iD                = $FULL['id'];
                        $bio               = isset($FULL['about'])                                        ? $FULL['about']                                              : "Haven't";
                        $un                = isset($FULL['username'])                                     ? $FULL['username']                                           : "Haven't";
                        $profile           = isset($FULL['profile_photo'])                                ? $FULL['profile_photo']                                      : 'havent';
                        $status            = isset($GETFULLINFO['full']['users'][0]['status']['_'])       ? substr($GETFULLINFO['full']['users'][0]['status']['_'], 10) : '--';
                        $last_seen         = isset($GETFULLINFO['full']['users'][0]['status']['expires']) ? $GETFULLINFO['full']['users'][0]['status']['expires']       : '--';
                        if ($last_seen != '--') {
                            $last_seen = date('H:i:s', $last_seen);
                        }
                        $common_chats      = isset($FULL['common_chats_count'])  ? $FULL['common_chats_count']  : '--';
                        $IS_BLOCKED        = ($FULL['blocked'] == false) ? 'no' : 'yes';
                        $ALLOW_CALLS       = ($FULL['phone_calls_available'] == false) ? 'no' : 'yes';
                        $ALLOW_VID_CALLS   = ($FULL['video_calls_available'] == false) ? 'no' : 'yes';
                        $photos            = yield $this->photos->getUserPhotos(['user_id' => $iD, 'offset' => 0, 'max_id' => 0, 'limit' => 0]);
                        $pic_counts        = isset($photos['photos']) ? count($photos['photos']) : '0';
                        $inforamtion =
                            "**Information Of **[$n](mention:$iD)\n\n"
                            . align(
                                [
                                    'Name'                      => $n,
                                    'LastName'                  => $LASTNAME,
                                    'UserID'                    => $iD,
                                    'Phone'                     => $PHONE,
                                    'Your Contact'              => $CONTACT,
                                    'Is Bot'                    => $IS_BOT,
                                    'Scam'                      => $SCAM,
                                    'Verified'                  => $VERIFIED,
                                    'Support'                   => $SUPPORT,
                                    'Blocked'                   => $IS_BLOCKED,
                                    'Allow Calls'               => $ALLOW_CALLS,
                                    'Allow Video Calls'         => $ALLOW_VID_CALLS,
                                    'Username'                  => $un,
                                    'Bio'                       => $bio,
                                    'Status'                    => $status,
                                    'LastSeen'                  => $last_seen,
                                    'Profile Picture'           => $pic_counts,
                                    'Common Groups'             => $common_chats,
                                    'Current ChatID'            => $chat_id
                                ],
                                '` ↬ (`',
                                '├ • `',
                                '`)'
                            );
                        if ($profile == 'havent') {
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => $inforamtion,
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => 'markdown'
                            ]);
                        } else {
                            $profile_ID        = $profile['id'];
                            $profile_hash      = $profile['access_hash'];
                            $profile_reference = $profile['file_reference'];
                            $input_photo       = ['_' => "inputPhoto", 'id' => $profile_ID, 'access_hash' => $profile_hash, 'file_reference' => $profile_reference];
                            $input_media_photo = ['_' => "inputMediaPhoto", 'id' => $input_photo];
                            yield $this->messages->sendMedia([
                                'peer'            => $chat_id,
                                'media'           => $input_media_photo,
                                'message'         => $inforamtion,
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => "markdown"
                            ]);
                        }
                    } else {
                        yield $this->messages->sendMessage(['peer' => $chat_id, 'message' => "*Reply To Message or put UserID or Username.*", 'reply_to_msg_id' => $msg_id, 'parse_mode' => 'Markdown']);
                    }
                } elseif (preg_match('/^[\.]?inf (\@.*|\d*)$/si', $txt, $ar)) {
                    if ($ar[1] == '@this') {
                        //if ($type == 'supergroup' || $type == 'channel') {
                        if ($type != 'user') {
                            $inf  = yield $this->getFullInfo($chat_id);
                            $chat = $inf['Chat'];
                            $is_super_group       = ($chat['megagroup'] == false)      ? 'no'                  : 'yes';
                            $verified             = ($chat['verified']  == false)      ? 'no'                  : 'yes';
                            $scam                 = ($chat['scam']      == false)      ? 'no'                  : 'yes';
                            $title                = $chat['title'];
                            $username             = isset($chat['username'])           ? $chat['username']     : '--';
                            $full                 = $inf['full'];
                            $pic                  = isset($full['chat_photo'])         ? $full['chat_photo']   : '--';
                            $about                = isset($full['about'])              ? $full['about']        : '--';
                            $members_count        = $full['participants_count'];
                            $online_count         = $full['online_count'];
                            $unread_count         = $full['unread_count'];

                            $sticker_set          = isset($full['stickerset'])          ? $full['stickerset']   : '--';
                            $sticker_set_name     = isset($sticker_set['title'])        ? $sticker_set['title'] : '--';
                            $sticker_set_link     = isset($sticker_set['short_name'])   ? "tg://addsticker?set={$sticker_set['short_name']}" : '--';
                            $sticker_set_count    = isset($sticker_set['count'])        ? $sticker_set['count'] : '--';
                            $sticker_set_archived = ($sticker_set['archived'] == false) ? 'no' : 'yes';
                            $sticker_set_official = ($sticker_set['official'] == false) ? 'no' : 'yes';
                            $sticker_set_animated = ($sticker_set['animated'] == false) ? 'no' : 'yes';
                            $sticker_set_masks    = ($sticker_set['masks']    == false) ? 'no' : 'yes';

                            $send =
                                "**Information Of **[$title]\n\n"
                                . align(
                                    [
                                        'Name'          => $title,
                                        'Username'      => $username,
                                        'Scam'          => $scam,
                                        'About'         => $about,
                                        'Members Count' => $members_count,
                                        'Online Count'  => $online_count,
                                        'Unread Count'  => $unread_count,
                                        'Verified'      => $verified
                                    ],
                                    ' ↬ (`',
                                    '├ • ',
                                    '`)'
                                );
                            if ($sticker_set != '--') {
                                $send .= "\n**StickerSetInfo **\n\n"
                                    . align(
                                        [
                                            'StickerName'   => $sticker_set_name,
                                            'Link'          => $sticker_set_link,
                                            'Sticker Count' => $sticker_set_count,
                                            'Animated'      => $sticker_set_animated,
                                            'Archived'      => $sticker_set_archived,
                                            'Official'      => $sticker_set_official,
                                            'Masks'         => $sticker_set_masks,

                                        ],
                                        ' ↬ (`',
                                        '├ • ',
                                        '`)'
                                    );
                            }
                            if ($pic == '--') {
                                yield $this->messages->sendMessage([
                                    'peer'            => $chat_id,
                                    'message'         => "$send",
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => 'markdown'
                                ]);
                            } else {
                                $pic_id            = $pic['id'];
                                $pic_hash          = $pic['access_hash'];
                                $pic_reference     = $pic['file_reference'];
                                $input_photo       = ['_' => "inputPhoto", 'id' => $pic_id, 'access_hash' => $pic_hash, 'file_reference' => $pic_reference];
                                $input_media_photo = ['_' => "inputMediaPhoto", 'id' => $input_photo];
                                yield $this->messages->sendMedia([
                                    'peer'            => $chat_id,
                                    'media'           => $input_media_photo,
                                    'message'         => $send,
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => "markdown"
                                ]);
                            }
                        } else {
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => "<b>Use This Method On Supergroups.</b>",
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => 'HTML'
                            ]);
                        }
                        /******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                    } else {
                        try {
                            $GETFULLINFO       = yield $this->getFullInfo($ar[1]);
                            $USER              = $GETFULLINFO['User'];
                            $PHONE             = isset($USER['phone'])         ? $USER['phone']     : '--';
                            $LASTNAME          = isset($USER['last_name'])     ? $USER['last_name'] : '--';
                            $CONTACT           = ($USER['contact']  == false)  ? 'no'               : 'yes';
                            $IS_BOT            = ($USER['bot']      == false)  ? 'no'               : 'yes';
                            $SCAM              = ($USER['scam']     == false)  ? 'no'               : 'yes';
                            $VERIFIED          = ($USER['verified'] == false)  ? 'no'               : 'yes';
                            $SUPPORT           = ($USER['support']  == false)  ? 'no'               : 'yes';
                            $FULL              = $GETFULLINFO['full']['full_user'];
                            $n                 = $USER['first_name'];
                            $iD                = $FULL['id'];
                            $bio               = isset($FULL['about'])                                        ? $FULL['about']                                              : "Haven't";
                            $un                = isset($FULL['username'])                                     ? $FULL['username']                                           : "Haven't";
                            $profile           = isset($FULL['profile_photo'])                                ? $FULL['profile_photo']                                      : 'havent';
                            $status            = isset($GETFULLINFO['full']['users'][0]['status']['_'])       ? substr($GETFULLINFO['full']['users'][0]['status']['_'], 10) : '--';
                            $last_seen         = isset($GETFULLINFO['full']['users'][0]['status']['expires']) ? $GETFULLINFO['full']['users'][0]['status']['expires']       : '--';
                            if ($last_seen != '--') {
                                $last_seen = date('H:i:s', $last_seen);
                            }
                            $common_chats      = isset($FULL['common_chats_count'])  ? $FULL['common_chats_count']  : '--';
                            $IS_BLOCKED        = ($FULL['blocked'] == false) ? 'no' : 'yes';
                            $ALLOW_CALLS       = ($FULL['phone_calls_available'] == false) ? 'no' : 'yes';
                            $ALLOW_VID_CALLS   = ($FULL['video_calls_available'] == false) ? 'no' : 'yes';
                            $photos            = yield $this->photos->getUserPhotos(['user_id' => $iD, 'offset' => 0, 'max_id' => 0, 'limit' => 0]);
                            $pic_counts        = isset($photos['photos']) ? count($photos['photos']) : '0';
                            $inforamtion =
                                "**Information Of **[$n](mention:$iD)\n\n"
                                . align(
                                    [
                                        'Name'                      => $n,
                                        'LastName'                  => $LASTNAME,
                                        'UserID'                    => $iD,
                                        'Phone'                     => $PHONE,
                                        'Your Contact'              => $CONTACT,
                                        'Is Bot'                    => $IS_BOT,
                                        'Scam'                      => $SCAM,
                                        'Verified'                  => $VERIFIED,
                                        'Support'                   => $SUPPORT,
                                        'Blocked'                   => $IS_BLOCKED,
                                        'Allow Calls'               => $ALLOW_CALLS,
                                        'Allow Video Calls'         => $ALLOW_VID_CALLS,
                                        'Username'                  => $un,
                                        'Bio'                       => $bio,
                                        'Status'                    => $status,
                                        'LastSeen'                  => $last_seen,
                                        'Profile Picture'           => $pic_counts,
                                        'Common Groups'             => $common_chats,
                                        'Current ChatID'            => $chat_id
                                    ],
                                    '` ↬ (`',
                                    '├ • `',
                                    '`)'
                                );
                            if ($profile == 'havent') {
                                yield $this->messages->sendMessage([
                                    'peer'            => $chat_id,
                                    'message'         => $inforamtion,
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => 'markdown'
                                ]);
                            } else {
                                $profile_ID        = $profile['id'];
                                $profile_hash      = $profile['access_hash'];
                                $profile_reference = $profile['file_reference'];
                                $input_photo       = ['_' => "inputPhoto", 'id' => $profile_ID, 'access_hash' => $profile_hash, 'file_reference' => $profile_reference];
                                $input_media_photo = ['_' => "inputMediaPhoto", 'id' => $input_photo];
                                yield $this->messages->sendMedia([
                                    'peer'            => $chat_id,
                                    'media'           => $input_media_photo,
                                    'message'         => $inforamtion,
                                    'reply_to_msg_id' => $msg_id,
                                    'parse_mode'      => "markdown"
                                ]);
                            }
                        } catch (\Throwable $e) {
                            yield $this->messages->sendMessage([
                                'peer'            => $chat_id,
                                'message'         => $e->getMessage(),
                                'reply_to_msg_id' => $msg_id,
                                'parse_mode'      => 'markdown'
                            ]);
                        }
                    }
                }
                #End Part of User Inforamtion
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
                #DELETE Message 
                if (preg_match('/^[\/\!\.\#]?del (\d+)/i', $txt, $r)) {
                    $sent = yield $this->messages->sendMessage([
                        'peer'            => $chat_id,
                        'message'         => '<i>Please Wait...</i>',
                        'parse_mode'      => "html"
                    ]);
                    foreach (array_chunk(range($msg_id, $msg_id - $r[1]), $r[1]) as $n) {
                        if ($type == 'supergroup' or $type == 'channel') {
                            yield $this->channels->deleteMessages([
                                'channel' => $chat_id,
                                'id'      => $n
                            ]);
                        } else {
                            yield $this->messages->deleteMessages([
                                'rovoke' => true,
                                'id'     => $n
                            ]);
                        }
                    }
                    $sent_id = ($type == 'supergroup' || $type == 'channel') ? $sent['updates'][2]['message']['id'] : $sent['updates'][1]['message']['id'];
                    yield $this->messages->editMessage([
                        'peer'            => $chat_id,
                        'message'         => "<i>$r[1] Messages Successfully Deleted.</i>",
                        'id'              => $sent_id,
                        'parse_mode'      => "html"
                    ]);
                } elseif (preg_match('/^[\/\!\.\#]?delall/i', $txt)) {
                    $array = range($msg_id, 1);
                    $chunk = array_chunk($array, 100);
                    foreach ($chunk as $v) {
                        sleep(0.05);
                        yield $this->channels->deleteMessages(['channel' => $chat_id, 'id' => $v]);
                    }
                }
                #BAN ALl
                if (preg_match('/^[\#\/\!\.]?(banall)$/', $txt)) {
                    $channelParticipantsRecent = ['_' => 'channelParticipantsRecent'];
                    $getresult                 = yield $this->channels->getParticipants([
                        'channel' => $chat_id,
                        'filter'  => $channelParticipantsRecent,
                        'offset'  => 0,
                        'limit'   => 100
                    ]);
                    $users                     = $getresult['users'];
                    $ChatBannedRights          = ['_' => 'chatBannedRights', 'view_messages' => true, 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => -1];
                    foreach ($users as $new) {
                        $id = $new['id'];
                        try {
                            yield $this->channels->editBanned([
                                'channel'       => $chat_id,
                                'participant'   => $id,
                                'banned_rights' => $ChatBannedRights,
                            ]);
                        } catch (\Throwable $e) {
                            echo $e->getMessage();
                        }
                    }
                }
            }
        } catch (\Throwable $e) {
            $this->report("Surfaced: $e");
        }
    }
}

$settings = [
    'serialization' => [
        'cleanup_before_serialization' => true,
    ],
    'logger' => [
        'max_size' => 1 * 1024 * 1024,
    ],
    'peer' => [
        'full_fetch' => false,
        'cache_all_peers_on_startup' => false,
    ],

];

$bot = new \danog\MadelineProto\API('X.session', $settings);
$bot->startAndLoop(XHandler::class);
/******** @San_trich********
 * The Best*
 * God*
 * source Bot*
 * python - Php - Laravel*
 * Owner*
  ********* @Ziazl**********
*/
?>
