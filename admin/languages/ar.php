<?php?>


<!DOCTYPE html>
<html lang="ar">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> <?php echo $pagetitle; ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo $css;?>bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $css;?>animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $css;?>font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $css;?>front_design.css">
     
     
</head>

<body>
<?php
	$lang = array(
		"title" => "My Amazing Website",
        // START INDEX PAGE 
        // START NAVBAR
		"home" => "الرئيسية",
		"about" => "من نحن",
		"elevetor" => "المصاعد",
		"panoramic_elev" => "المصاعد البانورمية",
        "food_elev" => "مصاعد الطعام",
		"abyar" => "الابيار",
		"door_cabins" => " الابواب والكبائن",
		"automatic_door" => "الابواب الاتوماتيكية",
        "interior_door" => "الابواب الداخلية",
		"manual_door" => "الابواب اليدوية",
		"cabins" => "الكبائن",
		"celling" => "الاسقف",
        "floor" => "الارضيات",
		"services" => "خدماتنا",
        "gool"=>"هدفنا سلامتك أولاً",
        // START HEAD 
        "head"=>"شركة وابل للمقاولات",
        "type_1"=>"قطعة منفصلة",
        "type_2"=>"دعم و الصيانة",
        "type_3"=>"موزع معتمد",
        // START PROUD SECTION 
        
        "ph_head"=>"شركة وابل للمقاولات",
        "p_desc"=>"تم اعتماد الشركة ومهندسيها من قبل المديرية العامة للدفاع المدني وهي المرجع لجميع شركات المصاعد في المملكة العربية السعودية التي تمنح التراخيص لهذا المجال. تم التركيز على توفير متطلبات الأمن والسلامة في مصاعدنا والعمل معها ، وما زلنا نعمل بجهد ومثابرة للحفاظ على تميزنا.",
        "p_read"=>"اقرا المزيد",
        // START ABOUT US
        "as_head"=>"اتحاد المصاعد",
        "as_desc"=>"شركة وابل للمقاولات (المتحدة للمصاعد) هي شركة رائدة في مجال تركيب المصاعد الكهربائية منذ عام 1431 هـ وبأسعار منافسة. نسعى للتميز في مجالنا بما يتماشى مع رؤية 2030 من خلال تقديم خدمات عالية الجودة. التميز في مصاعدنا بحداثتها وصناعتها الإيطالية. تشمل خدماتنا التوريد والتركيب ، ولدينا أيضًا ترخيص من الدفاع المدني للقيام بأعمال الصيانة ، مما يضمن للعميل الحفاظ على سلامته ، لذلك شعارنا السلامة أولاً",
        // START COMPANY
        // START SERVICES 
        "s_head1"=>"ماذا نقدم لك؟",
        "s_head2"=>"الآلات وقطع الغيار",
        "s_head3"=>"خيارات واسعة ومتنوعة",
        "s_head4"=>"الآلات وقطع الغيار",
        "s_head5"=>"مصاعد عالمية معتمدة",
        "s_head6"=>"تغير السعر",
        "s_head7"=>"دراسة حلول متعددة",
        "s_desc1"=>"جميع قطع غيار المصاعد بجودة عالية وأسعار مناسبة",
        "s_desc2"=>"أبواب وكبائن من اختيارك للألوان والأرضيات والأسقف والاكسسوارات",
        "s_desc3"=>"توفير جميع قطع الغيار عالية الجودة وبأفضل الأسعار وبسرعة عند الطلب",
        "s_desc4"=>"مصاعد وسلالم متحركة للشركات العالمية المعتمدة لجميع استخدامات الركاب أو البضائع",
        "s_desc5"=>"تمشيا مع الملاءة المالية للأفراد والشركات ولضمان أعلى مستويات الجودة",
        "s_desc6"=>"لجميع المشاريع السكنية التجارية أو الخاصة ، واهتمامنا بذوي الحالات الخاصة",
        
        // START SERVICES REPORT 
        "r_head1"=>"خدمات",
        "r_head2"=>"الابواب",
        "r_head3"=>"المصاعد",
        "r_head4"=>"الكبائن",
        "r_head5"=>"الاسقف",
        "r_head6"=>"ازار التحكم",
        "r_head7"=>"الارضيات",
        "r_view"=>"مشاهدة المزيد",
        //START OUR PARTENERS
        "pr_head"=>"شركاؤنا",
        
        // START FOOTER LINKED
        "f_head1"=>"البريد الإلكتروني الرسمي",
        "f_head2"=>"أرقام الهواتف",
        "f_head3"=>"فروعنا",
        "f_head4"=>"مواعيد العمل الرسمية",
        "f_head1_email1"=>"للإستفسارات والشكاوى : info@wabel.ltd",
        "f_head1_email2"=>"للدعم الفني : support@wabel.ltd",
        "f_head1_email3"=>"للمبيعات : sales@wabel.ltd",
        "f_head2_phone1"=>" 531600018 966+",
        "f_head2_phone2"=>" 0126526333 966+",
        "f_head2_phone3"=>" 533329947 966+",
        "f_head3_branch"=>"المملكة العربية السعودية – جدة 11612 ص.ب 85791",
        "f_head4_work1"=>"من يوم السبت ٧ صباحا الى ٥ مساءا",
        "f_head4_work2"=>"الى يوم الخميس ٧ صباحا الى ١ مساءا",
        "f_head4_work3"=>"ويوم الجمعه هو يوم عطلة رسمية للشركة",
        "f_contact"=>"تواصل معنا",
        
		
        // START ABOUT US PAGE
        
        "about_h1"=>"من نحن",
        "about_h2"=>"البداية",
        "about_h3"=>"رؤيتنا",
        "about_h4"=>"رسالة وابل ",
        "about_desc1"=>"البداية ⋅ الروية ⋅ التحديثات",
        "about_desc2"=>"شركة وابل للمقاولات (المتحدة للمصاعد) هي شركة رائدة في مجال تركيب المصاعد الكهربائية منذ عام 1431 هـ وبأسعار منافسة .. نسعى للتميز في مجالنا بما يتماشى مع رؤية 2030 من خلال تقديم خدمات عالية الجودة. التميز في مصاعدنا بحداثتها وصناعتها الإيطالية. تشمل خدماتنا التوريد والتركيب ، ولدينا أيضًا ترخيص من الدفاع المدني للقيام بأعمال الصيانة ، مما يضمن للعميل الحفاظ على سلامته. شعارنا السلامة أولا ... هدفنا أن نصبح من أوائل الشركات في مجال تركيب وتوريد المصاعد في المملكة العربية السعودية وأن نتميز بجودتنا وأسعارنا وتصميماتنا لننال دائما ثقة ورضا عملائنا عملاء↯",
        "about_desc3"=>"تقديم أفضل المنتجات وإيجاد حلول متعددة. كمؤسسة رائدة في السوق المحلي للمصاعد",
        "about_desc4"=>"هدفنا أن نصبح من أوائل الشركات في مجال تركيب وتوريد المصاعد في المملكة العربية السعودية
وأن نتميز بجودتنا وأسعارنا وتصميماتنا لنكسب دائمًا ثقة عملائنا ورضاهم",
     
        
            // START SERVICES PAGE
        
        "serv_head1"=>"خدماتنا",
        "serv_head2"=>"مصاعد منزلية",
        "serv_head3"=>"مصاعد المستشفيات",
        "serv_head4"=>"مصاعد مطاعم",
        "serv_head5"=>"المصاعد الهيدروليكية",
        "serv_head6"=>"مصاعد بدون غرفة آلة",

        "serv_head7"=>"مصاعد بانورامية",
        "serv_head8"=>"قطعة منفصلة",
        "serv_head9"=>"نحن نقدم جميع آلات وقطع غيار المصاعد المختلفة الأصلية وعالية الجودة وبأفضل الأسعار وبسرعة عند الطلب",
        "serv_head10"=>"الآلات",
        "serv_head11"=>"قطعة منفصلة",
        "serv_head12"=>"تحكم",
        
        "serv_head13"=>"العرض والازرار",
        "serv_head14"=>"الآلات",
        "serv_head15"=>"قطعة منفصلة",
        "serv_head16"=>"العرض والازرار ",
        "serv_desc1"=>"تتميز الشركة بتقديم الاستشارات المجانية للعملاء عن طريق الهاتف أو الزيارة الميدانية للموقع حتى نتمكن من تحديد نوع المصعد المناسب حسب القياسات الداخلية للبئر. ثم نقوم برسم مخطط المصعد سواء كان مصعد داخلي أو خارجي ثم نقدم عرض سعر تنافسي للعملاء بالإضافة إلى تجميع وتركيب وصيانة جميع أنواع المصاعد الإيطالية والتركية والعديد من المصاعد الأخرى ذات الجودة العالية والتكامل لضمان السلامة الكاملة للعميل والمستخدم",
         "serv_desc2"=>"المصاعد الداخلية هي مصاعد يتم تركيبها داخل المبنى وتتطلب حفرة أو منشأة (غرفة مصعد) مصممة خصيصًا لتناسب المنازل والفيلات السكنية وتستخدم لنقل الأفراد ولها منطقة محددة",
         "serv_desc3"=>"مصاعد المستشفيات هي مصاعد يتم تركيبها داخل المراكز الطبية وتتميز بمساحتها الكبيرة لضمان احتوائها على سرير متحرك وأجهزة طبية وتحتوي على أنظمة الطوارئ اللازمة ، بالإضافة إلى أنها تتميز بعدم الاهتزاز وسرعة عالية ، مع مراعاة ظروف المرضى.",
         "serv_desc4"=>"مصاعد الطعام هي مصاعد يتم تركيبها في المطاعم والفنادق والفيلات لإحضار الطعام من المطبخ إلى مكان تناول الطعام داخل المطاعم أو استخدامها لنقل الطعام من مطبخ المطعم إلى باقي الطوابق لتقديمه و يتميز بصغر حجمه",
        "serv_desc5"=>"يُفضل هذا النوع من المصاعد في الأماكن التي لا يوجد بها مكان للمحرك وأيضًا في الأماكن التي يكون فيها عدد من يرتدون هذا المكان قليلًا مثل المصانع ومراكز التسوق الصغيرة أو حتى في الفيلات",
        "serv_desc6"=>"المصاعد بدون حفر (المصعد السويدي) هي المصاعد التي لا تحتاج الى تشققات في الارض حيث تقوم الشركة بتركيب هذا النوع من المصاعد مباشرة على الارض وتتميز هذه المصاعد بغياب غرفة الماكينة ولا تحتاج المراد إنشاؤها وسهلة التركيب والنقل. يتم تركيب هذا النوع من المصاعد بهيكلها الخارجي من المصنع حيث لا يحتاج إلى بناء خرساني أو بئر معدني",
        "serv_desc7"=>"مصعد البانوراما هو المصعد الذي يتم تركيبه في الأماكن التجارية والفنادق الكبيرة ويتميز بأشكاله وأنواعه. تتميز المقصورة بكشف المشهد الخارجي بوضوح من داخل الكابينة وبإتاحة رؤية المنظر الخارجي من داخل السيارة ، حيث واجهتها زجاجية شفافة بالإضافة إلى تميزها من حيث المظهر الجذاب.",
        "serv_desc8"=>"قطع غيار وأنظمة تحكم مختلفة",
        "serv_req"=>"اطلب الان",
        
         // START AUTOMATIC DOOR
        "auto_h1"=>"ابواب اتوماتيكية",
        "auto_h2"=>"موديلات الأبواب الأوتوماتيكية",
        "auto_h3"=>" لديك استفسار؟",
        "auto_desc1"=>"سهولة الاستعمال",
        "auto_desc2"=>"سهل الاستخدام من قبل الصغار وكبار السن وذوي الاحتياجات الخاصة.",
        "auto_desc3"=>" تمنع الخلية الكهروضوئية من الإغلاق أثناء عبور الركاب لجميع الأطوال. ",
        "auto_desc4"=>" إمكانية تركيب أكثر من مصعد في نفس الحفرة (حسب).",
        "auto_desc5"=>"إمكانية تشغيل نظام دوبلكس وثلاثي.",
        "auto_desc6"=>"خيارات متعددة للاختيار: لون وشكل الفولاذ المقاوم للصدأ للأبواب الخارجية والداخلية",
        "auto_desc7"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "auto_contact"=>"تواصل معنا الان",
        
        
        // START interior DOOR
        "inter_h1"=>"الابواب الداخلية",
        "inter_h2"=>" موديلات الابواب الداخلية",
        "inter_h3"=>" لديك استفسار?",
        "inter_desc1"=>"سهولة الاستعمال ",
        "inter_desc2"=>" سهل الاستخدام من قبل الصغار وكبار السن وذوي الاحتياجات الخاصة.",
        "inter_desc3"=>" تمنع الخلية الكهروضوئية من الإغلاق أثناء عبور الركاب لجميع الأطوال.",
        "inter_desc4"=>" إمكانية تركيب أكثر من مصعد في نفس الحفرة (حسب).",
        "inter_desc5"=>" إمكانية تشغيل نظام دوبلكس وثلاثي.",
        "inter_desc6"=>" خيارات متعددة للاختيار: لون وشكل الفولاذ المقاوم للصدأ للأبواب الخارجية والداخلية",
        "inter_desc7"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "inter_contact"=>"تواصل معنا الان",

        // START MANUAL DOOR
        "man_h1"=>"الابواب اليدوية",
        "man_h2"=>" موديلات الابواب اليدوية",
        "inter_h3"=>" لديك استفسار?",
        "inter_desc1"=>"سهولة الاستعمال ",
        "inter_desc2"=>" سهل الاستخدام من قبل الصغار وكبار السن وذوي الاحتياجات الخاصة.",
        "inter_desc3"=>" تمنع الخلية الكهروضوئية من الإغلاق أثناء عبور الركاب لجميع الأطوال.",
        "inter_desc4"=>" إمكانية تركيب أكثر من مصعد في نفس الحفرة (حسب).",
        "inter_desc5"=>" إمكانية تشغيل نظام دوبلكس وثلاثي.",
        "inter_desc6"=>" خيارات متعددة للاختيار: لون وشكل الفولاذ المقاوم للصدأ للأبواب الخارجية والداخلية",
        "inter_desc7"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "inter_contact"=>"تواصل معنا الان",

        // START CABINS PAGE
        "cab_h1"=>"كبائن المصاعد",
        "cab_h2"=>"نماذج الكبائن",
        "cab_h3"=>" لديك استفسار؟",
        "cab_desc1"=>"تصميم المقصورة حسب اختيارك",
        "cab_desc2"=>"مصنوع من الصاج المجلفن ، مبطن من الداخل بمسطح خشبي ومغطى بالفولاذ المقاوم للصدأ أو الألمنيوم أو الفورميكا حسب اختيارك",
        "cab_desc3"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "cab_desc4"=>"تصميم المقصورة حسب اختيارك",
        "cab_contact"=>"تواصل معنا الان",

        // START FLOOR PAGE
        
        "floor_h1"=>"ارضيات المصاعد",
        "floor_h2"=>"نماذج الارضيات",
        "floor_h3"=>" لديك استفسار?",
        "floor_desc1"=>"بدائل مختلفة",
        "floor_desc2"=>"العديد من البدائل المختلفة ، مثل أرضيات الرخام والجرانيت والمطاط وأغطية الأرضيات البلاستيكية أو الأرضيات المعدنية.",
        "floor_desc3"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "floor_contact"=>"تواصل معنا الان",
             // START CELLING
        
        "cell_h1"=>"أسقف المصاعد",
        "cell_h2"=>"نماذج الاسقف",
        "cell_h3"=>" لديك استفسار?",
        "cell_desc1"=>" أنواع وتصاميم متعددة ",
        "cell_desc2"=>"أنواع وتصاميم نماذج الأسقف المختلفة لاختيار التصميم المناسب",
        "cell_desc3"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "cell_contact"=>"تواصل معنا الان",

        
            
        // START ELEVETOR TYPE PAGE
        
        "elev_h1"=>"مصاعد بانورامية",
        "elev_h2"=>" لديك استفسار?",
        "elev_desc1"=>"مصاعد حديثة",
        "elev_desc2"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "elev_contact"=>"تواصل معنا الان",
        
    
          //START FOOD ELEVETOR
        
        "food_h1"=>"مصاعد طعام",
        "food_h2"=>" لديك استفسار?",
        "food_desc1"=>"مصاعد حديثة",
        "food_desc2"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "food_contact"=>"تواصل معنا الان",
        
        // START ABYAR PAGE
        
        "abay_h1"=>"الابيار",
        "abay_h2"=>" موديلات أبيار",
        "abay_h3"=>" لديك استفسار?",
        "abay_desc1"=>"سهولة الاستعمال",
        "abay_desc2"=>"وهو الحل الأمثل لمشكلة الأبنية التي لا تحتوي على بئر حيث يتم تشييدها.",
        "abay_desc3"=>"يمكن البناء داخل العقار أو خارجه حسب المواصفات الفنية.",
        "abay_desc4"=>"يمكن تشييدها بالخرسانة والمباني لتتناسب مع المظهر الخارجي للمبنى.",
        "abay_desc5"=>"يمكن أيضًا صنعه بالحديد",
        "abay_desc6"=>"في المباني القديمة غير المجهزة لتركيب مصعد",
        "abay_desc7"=>"خيارات متعددة للاختيار: لون وشكل الفولاذ المقاوم للصدأ للأبواب الخارجية والداخلية",
        "abay_desc8"=>"تحدث إلينا عبر الرقم العالمي ، أو دعنا نحدد موعد مكالمتك",
        "food_contact"=>"تواصل معنا الان",
        
        
        
        
    
        
        

        
		
        
        
        
        
        
        
        
        
        
        
        
        
        
        
		"lang_en" => "الانجليزية",
		"lang_ar" => "العربية"
	);
?>