<?php

return array(
    'ad'				        => 'الدليل النشط',
    'ad_domain'				    => 'مجال الدليل النشط',
    'ad_domain_help'			=> 'هذا هو أحيانا نفس نطاق البريد الإلكتروني الخاص بك، ولكن ليس دائما.',
    'admin_cc_email'            => 'نسخة اضافية للبريد الإكتروني',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'هذا هو ملقم أكتيف ديركتوري',
	'alert_email'				=> 'إرسال تنبيهات إلى',
	'alerts_enabled'			=> 'التنبيهان ممكنه',
	'alert_interval'			=> 'انتهاء فترة التنبيهات (بالأيام)',
	'alert_inv_threshold'		=> 'عتبة تنبيه المخزون',
	'asset_ids'					=> 'ارقام تعريف الاصول',
	'audit_interval'            => 'مدة التدقيق',
    'audit_interval_help'       => 'إذا كان مطلوبا منك مراجعة أصولك الفعلية بشكل دوري، قم بإدخال المدة بالأشهر.',
	'audit_warning_days'        => 'عتبة تحذير التدقيق',
    'audit_warning_days_help'   => 'كم يوما مقدما يجب أن نحذركم عندما تكون الأصول مستحقة للتدقيق؟',
	'auto_increment_assets'		=> 'إنشاء ارقام تعريف الاصول مع التزايد التلقائي',
	'auto_increment_prefix'		=> 'البادئة (اختياري)',
	'auto_incrementing_help'    => 'أولا قم بتفعيل ارقام تعريف الاصول مع التزايد التلقائي لكي تستطيع تعيين هذا',
	'backups'					=> 'النسخ الإحتياطية',
	'barcode_settings'			=> 'إعدادات الباركود',
    'confirm_purge'			    => 'تأكيد التطهير',
    'confirm_purge_help'		=> 'أدخل النص "ديليت" في المربع أدناه لتطهير السجلات المحذوفة. لا يمكن التراجع عن هذا الإجراء.',
	'custom_css'				=> 'CSS مخصص',
	'custom_css_help'			=> 'أدخل أي تخصيصات CSS ترغب في استخدامها. لا تقم باضافة &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'رابط مخصص لاعادة تعيين كلمة المرور',
    'custom_forgot_pass_url_help'	=> 'يحل هذا محل الرابط الخاص باعادة تعيين كلمة المرور على شاشة تسجيل الدخول، وهو مفيد لتوجيه الأشخاص إلى وظيفة إعادة تعيين كلمة مرور من خلال LDAP الداخلي أو المستضاف. وهذا سوف يعطل وظيفة إعادة تعيين كلمة مرور المحلية.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'العملة الافتراضية',
	'default_eula_text'			=> 'اتفاقية ترخيص المستخدم النهائي الافتراضية',
  'default_language'			=> 'اللغة الافتراضية',
	'default_eula_help_text'	=> 'يمكنك أيضا ربط (اتفاقية ترخيص المستخدم) لاصناف محددة من الاصول.',
    'display_asset_name'        => 'عرض اسم مادة العرض',
    'display_checkout_date'     => 'عرض تاريخ الخروج',
    'display_eol'               => 'عرض نهاية العمر على شكل جدول',
    'display_qr'                => 'عرض رموز مربع',
	'display_alt_barcode'		=> 'عرض 1D الباركود',
	'barcode_type'				=> '2D نوع الباركود',
	'alt_barcode_type'			=> '1D نوع الباركود',
    'eula_settings'				=> 'إعدادات اتفاقية ترخيص المستخدم النهائي',
    'eula_markdown'				=> 'تسمح اتفاقية ترخيص المستخدم هذه <a href="https://help.github.com/articles/github-flavored-markdown/">بتطبيق نمط الكتابة من Github</a>.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'الاعدادات العامة',
	'generate_backup'			=> 'إنشاء النسخ الاحتياطي',
    'header_color'              => 'رأس اللون',
    'info'                      => 'تتيح لك هذه الإعدادات تخصيص بعض جوانب التثبيت.',
    'laravel'                   => 'نسخة لارافيل',
    'ldap_enabled'              => 'تم تمكين لداب',
    'ldap_integration'          => 'دمج لداب',
    'ldap_settings'             => 'إعدادات لداب',
    'ldap_login_test_help'      => 'أدخل اسم مستخدم وكلمة مرور LDAP من الاسم المميز الأساسي DN الذي حددته أعلاه لاختبار ما إذا كان قد تمت تهيئة معلومات تسجيل الدخول إلى LDAP بشكل صحيح أم لا. يجب حفظ تحديث LDAP الخاص بك أولا.',
    'ldap_login_sync_help'      => 'هذا يختبر فقط أن LDAP يستطيع المزامنة بشكل صحيح. إذا كان استعلام التوثيق الى LDAP الخاص بك غير صحيح، قد لا يزال المستخدمون غير قادرين على تسجيل الدخول. يجب عليك اولا حفظ اي تغييرات في إعدادات LDAP.',
    'ldap_server'               => 'خادم لداب',
    'ldap_server_help'          => 'ينبغي أن يبدأ هذا مع //:ldap (للاتصال غير المشفر او TLS) او //:ldaps (لاتصال SSL)',
	'ldap_server_cert'			=> 'التحقق من صحة شهادة سل لداب',
	'ldap_server_cert_ignore'	=> 'السماح بشهادة سل غير صالحة',
	'ldap_server_cert_help'		=> 'حدد مربع الاختيار هذا إذا كنت تستخدم شهادة سل موقعة ذاتيا وترغب في قبول شهادة سل غير صالحة.',
    'ldap_tls'                  => 'استخدام تلس',
    'ldap_tls_help'             => 'يجب التحقق من ذلك فقط في حالة تشغيل ستارتلز على خادم لداب.',
    'ldap_uname'                => 'لداب ربط اسم المستخدم',
    'ldap_pword'                => 'لداب ربط كلمة المرور',
    'ldap_basedn'               => 'قاعدة ربط دن',
    'ldap_filter'               => 'فلتر لداب',
    'ldap_pw_sync'              => 'مزامنة كلمة مرور لداب',
    'ldap_pw_sync_help'         => 'ألغ تحديد هذا المربع إذا كنت لا ترغب في الاحتفاظ بكلمات مرور لداب التي تمت مزامنتها مع كلمات المرور المحلية. ويعني تعطيل هذا أن المستخدمين قد لا يتمكنون من تسجيل الدخول إذا تعذر الوصول إلى خادم لداب لسبب ما.',
    'ldap_username_field'       => 'حقل اسم المستخدم',
    'ldap_lname_field'          => 'الكنية',
    'ldap_fname_field'          => 'لداب الاسم الأول',
    'ldap_auth_filter_query'    => 'استعلام مصادقة لداب',
    'ldap_version'              => 'إصدار لداب',
    'ldap_active_flag'          => 'لداب العلم النشط',
    'ldap_emp_num'              => 'رقم موظف لداب',
    'ldap_email'                => 'بريد لداب',
    'license'                  => 'Software License',
    'load_remote_text'          => 'المخطوطات عن بعد',
    'load_remote_help_text'		=> 'هذا قنص إيت تثبيت يمكن تحميل البرامج النصية من العالم الخارجي.',
    'login_note'                => 'تسجيل الدخول ملاحظة',
    'login_note_help'           => 'اختيارياً تضمين بعض الجمل على شاشة تسجيل الدخول الخاصة بك، على سبيل المثال لمساعدة الناس الذين وجدوا أحد الأجهزة المفقودة أو المسروقة. يقبل هذا الحقل <a href="https://help.github.com/articles/github-flavored-markdown/">بتطبيق نمط الكتابة من Github</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If filled users will get redirected to this URL after the Session of SnipeIT is closed (Logout). This is useful to close the user sessions of your Authentication provider correctly.',
    'logo'                    	=> 'شعار',
    'full_multiple_companies_support_help_text' => 'تقييد المستخدمين (بما في ذلك المشرفون) المعينون للشركات إلى أصول شركاتهم.',
    'full_multiple_companies_support_text' => 'كامل دعم الشركات المتعددة',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'اختياري',
    'per_page'                  => 'النتائج لكل صفحة',
    'php'                       => 'نسخة فب',
    'php_gd_info'               => 'يجب تثبيت فب-غ لعرض رموز قر، راجع تعليمات التثبيت.',
    'php_gd_warning'            => 'لم يتم تثبيت فب معالجة الصور و غ المساعد.',
    'pwd_secure_complexity'     => 'تعقيد كلمة المرور',
    'pwd_secure_complexity_help' => 'حدد أي قواعد تعقيد كلمة المرور التي ترغب في فرضها.',
    'pwd_secure_min'            => 'كلمة المرور الحد الأدنى من الأحرف',
    'pwd_secure_min_help'       => 'الحد الأدنى المسموح به هو 5',
    'pwd_secure_uncommon'       => 'منع كلمات المرور الشائعة',
    'pwd_secure_uncommon_help'  => 'سيؤدي ذلك إلى منع المستخدمين من استخدام كلمات المرور الشائعة من أعلى 10000 كلمة مرور يتم الإبلاغ عنها في حالات خرق.',
    'qr_help'                   => 'تمكين رموز قر أولا لتعيين هذا',
    'qr_text'                   => 'نص رمز الاستجابة السريعة',
    'setting'                   => 'ضبط',
    'settings'                  => 'إعدادات',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'اسم الموقع',
    'slack_botname'             => 'سلاك بوتنام',
    'slack_channel'             => 'قناة سلاك',
    'slack_endpoint'            => 'نقطة نهاية سلاك',
    'slack_integration'         => 'إعدادات سلاك',
    'slack_integration_help'    => 'الربط مع Slack اختياري، ولكن نقطة النهاية endpoint والقناة channel مطلوبان إذا كنت ترغب في استخدامه. لاعداد الربط مع Slack، يجب أولا <a href=":slack_link" target="_new">رابط ويب الكتروني قادم webhook</a> على حساب Slack الخاص بك.',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'قنص-إيت الإصدار',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual.',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'معلومات النظام',
    'update'                    => 'إعدادات التحديث',
    'value'                     => 'القيمة',
    'brand'                     => 'العلامات التجارية',
    'about_settings_title'      => 'حول الإعدادات',
    'about_settings_text'       => 'تتيح لك هذه الإعدادات تخصيص بعض جوانب التثبيت.',
    'labels_per_page'           => 'عدد التسميات لكل صفحة',
    'label_dimensions'          => 'أبعاد التسمية (بوصة)',
    'next_auto_tag_base'        => 'الزيادة التلقائية التالية',
    'page_padding'              => 'هوامش الصفحة (بوصة)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'تطهير السجلات المحذوفة',
    'labels_display_bgutter'    => 'الجزء السفلي للتسمية',
    'labels_display_sgutter'    => 'الجزء الجانبي للتسمية',
    'labels_fontsize'           => 'حجم خط التسمية',
    'labels_pagewidth'          => 'عرض ورقة التسميات',
    'labels_pageheight'         => 'ارتفاع ورقة التسميات',
    'label_gutters'        => 'تباعد التسميات (بوصة)',
    'page_dimensions'        => 'أبعاد الصفحة (بوصة)',
    'label_fields'          => 'الحقول المرئية للتسميات',
    'inches'        => 'بوصة',
    'width_w'        => 'ث',
    'height_h'        => 'ح',
    'show_url_in_emails'                => 'الرابط إلى Snipe-IT في رسائل البريد الإلكتروني',
    'show_url_in_emails_help_text'      => 'قم بإلغاء اختيار هذا المربع إذا كنت لا ترغب في الربط مرة أخرى إلى Snipe-IT في تذييل البريد الإلكتروني الخاص بك. تعد مفيدة إذا كان معظم المستخدمين لا يقومون بتسجيل الدخول. ',
    'text_pt'        => 'حزب العمال',
    'thumbnail_max_h'   => 'ماكس ارتفاع الصورة المصغرة',
    'thumbnail_max_h_help'   => 'الحد الأقصى للارتفاع بالبكسل الذي قد تعرضه الصور المصغرة في طريقة عرض بطاقة البيانات. الحد الأدنى 25، 500 كحد أقصى.',
    'two_factor'        => 'توثيق ذو عاملين',
    'two_factor_secret'        => 'رمز عاملين',
    'two_factor_enrollment'        => 'اثنان عامل التسجيل',
    'two_factor_enabled_text'        => 'تمكين عاملين',
    'two_factor_reset'        => 'إعادة تعيين سر عاملين',
    'two_factor_reset_help'        => 'سيؤدي هذا إلى إجبار المستخدم على تسجيل أجهزته باستخدام أداة مصادقة غوغل مرة أخرى. ويمكن أن يكون ذلك مفيدا إذا فقدت أو سرقت الجهاز المسجل حاليا.',
    'two_factor_reset_success'          => 'جهاز عاملين إعادة تعيين بنجاح',
    'two_factor_reset_error'          => 'أخفق إعادة تعيين عامل عامل اثنين',
    'two_factor_enabled_warning'        => 'سيؤدي تمكين عاملين إذا لم يتم تمكينه حاليا إلى إجبارك فورا على المصادقة باستخدام جهاز مسجل في غوغل أوث. سيكون لديك القدرة على تسجيل جهازك إذا كان أحد غير مسجل حاليا.',
    'two_factor_enabled_help'        => 'سيؤدي هذا إلى تشغيل المصادقة الثنائية باستخدام غوغل أوثنتيكاتور.',
    'two_factor_optional'        => 'انتقائي (يمكن للمستخدمين تمكين أو تعطيل إذا كان مسموحا به)',
    'two_factor_required'        => 'اجباري لجميع المستخدمين',
    'two_factor_disabled'        => 'معاق',
    'two_factor_enter_code'	=> 'أدخل رمز عاملين',
    'two_factor_config_complete'	=> 'إرسال الرمز',
    'two_factor_enabled_edit_not_allowed' => 'لا يسمح لك المشرف بتعديل هذا الإعداد.',
    'two_factor_enrollment_text'	=> "التوثيق ذو العاملين 2FA اجباري، ولكن لم يتم تسجيل جهازك بعد. افتح تطبيق غوغل للتوثيق Google Authenticator وافحص رمز الاستجابة السريعة QR أدناه لتسجيل جهازك. بعد تسجيل جهازك، أدخل الرمز أدناه",
    'require_accept_signature'      => 'يتطلب التوقيع',
    'require_accept_signature_help_text'      => 'سيتطلب تمكين هذه الميزة من المستخدمين تسجيل الدخول فعليا عند قبول مادة العرض.',
    'left'        => 'اليسار',
    'right'        => 'حق',
    'top'        => 'أعلى',
    'bottom'        => 'الأسفل',
    'vertical'        => 'عمودي',
    'horizontal'        => 'أفقي',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'طول ترميز الأصل، بما في ذلك تعبئة الاصفار',
);
