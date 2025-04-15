<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب الموافقة على :attribute .',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ' :attribute يجب ان يكون بريدإلكترونى.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ' :attribute يجب ان تكون صورة.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ':attribute يجب أن يكون رقمًا.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => ' :attribute يجب ألا يتعدى :max حروف.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => ' :attribute يجب ان يكون من النوع type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ' :attribute يجب ألا يقل عن :min أرقام.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => ' :attribute يجب ألا يقل :min حروف.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ' :attribute مطلوب',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => ' :attribute موجود من قبل.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',
   
   
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        //------------
        'name'=>[
            'required'=>"من فضلك,قم بإدخال الاسم",
            'unique'=>"هذا الأسم موجود بالفعل.",
        ], 'email'=>[
            'required'=>"من فضلك,قم بإدخال البريد الإلكترونى",
            'unique'=>"هذا البريد الإلكترونى موجود بالفعل.",
        ],
        'phone'=>[
            'required'=>"من فضلك,قم بإدخال رقم الجوال",
            'unique'=>"هذا رقم الجوال موجود بالفعل.",
        ],
        'password'=>[
            'required'=>"من فضلك,قم بإدخال كلمة المرور",
            'confirmed'=>'يجب ان يتطابق كلمة المرور.',
        ],
        'message'=>[
            'required'=>"من فضلك,قم بإدخال الرسالة",
        ],
        'description'=>[
            'required'=>"من فضلك,قم بإدخال التفاصيل",
        ],
        'type_id'=>[
            'required'=>"من فضلك,قم بإختيار السبب",
        ],
        'national_identity'=>[
            'required'=>'من فضلك,قم بإدخال رقم الهوية',
        ],
        'agree'=>[
            'accepted'=>'يجب الموافقة على الشروط والأحكام',
        ]
        
    ],
     /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

   
    'attributes' => [
        'title_ar' => 'العنوان باللغة العربية',
        'description_ar'=>'الوصف باللغة العربية',
        'title_en' => 'العنوان باللغة الإنجليزية',
        'description_en'=>'الوصف باللغة الإنجليزية',
        'price'=>'السعر',
        'duration'=>'المدة',
        'name'=>'الإسم',
        'email'=>'البريد الإلكترونى',
        'password'=>'كلمة المرور',
        'message'=>'الرسالة',
        'name_ar'=>'الإسم باللغة العربية',
        'name_en'=>'الإسم باللغة الإنجليزية',
        'phone'=>'رقم الجوال',
        'address_ar'=>'العنوان باللغة العربية',
        'address_en'=>'العنوان باللغة الإنجليزية',
        'message_ar'=>'رسالتنا باللغة العربية',
        'message_en'=>'رسالتنا باللغة الإنجليزية',
        'objective_ar'=>'أهدافنا باللغة العربية',
        'objective_en'=>'أهدافنا باللغة الإنجليزية',
        'vision_ar'=>'رؤيتنا باللغة العربية',
        'vision_en'=>'رؤيتنا باللغة الإنجليزية',
        'short_description_ar'=>'نبذة عنا باللغة العربية',
        'short_description_en'=>'نبذة عنا باللغة الإنجليزية',
        'hint1_ar'=>'ملحوظة1 للموقع باللغة العربية',
        'hint1_en'=>'ملحوظة1 للموقع باللغة الإنجليزية',
        'hint2_ar'=>'ملحوظة2 للموقع باللغة العربية',
        'hint2_en'=>'ملحوظة2 للموقع باللغة الإنجليزية',
        'national_identity'=>'رقم الهوية',
        'license_number'=>'رقم الترخيص',
        'hint_register_ar'=>'ملحوظة صفحة إنشاء حساب باللغة العربية',
        'hint_register_en'=>'ملحوظة صفحة إنشاء حساب باللغة الإنجليزية',
        'package_id'=>'من فضلك ,إختر باقة',
        'images'=>'الصور',
        'hint_package_en'=>'ملحوظة صفحة الباقات باللغة الإنجليزية',
        'hint_package_ar'=>'ملحوظهة صفحة الباقات باللغة العربية',
        'details_ar'=>'التفاصيل باللغة العربية',
        'details_en'=>'التفاصيل باللغة الإنجليزية',
        'details'=>'التفاصيل',
        'link'=>'لينك',
        'count'=>'عدد الخدمات المتاحة',
        'image_vision'=>'صورة رؤيتنا',
        'image_message'=>'صورة رسالتنا',
        'image_description'=>'صورة نبذة عنا',
        'hint_images_ar'=>'ملحوظة شركاؤنا باللغة العربية',
        'hint_images_en'=>'ملحوظة شركاؤنا باللغة الإنجليزية',
        'hint_contact_ar'=>'ملحوظة تواصل معنا باللغة العربية',
        'hint_contact_en'=>'ملحوظة تواصل معنا باللغة الإنجليزية',
        'hint_posts_ar'=>'ملحوظة أراء الشقق باللغة العربية',
        'hint_posts_en'=>'ملحوظة أراء الشقق باللغة الإنجليزية',
        'hint_tax_ar'=>'ملحوظة الضريبة باللغة العربية',
        'hint_tax_en'=>'ملحوظة الضريبة باللغة الإنجليزية',
        'hint_offers_ar'=>'ملحوظة العروض باللغة العربية',
        'hint_offers_en'=>'ملحوظة العروض باللغة الإنجليزية',
        'reason_id'=>'سبب',
        'branch_id'=>'الفرع',
        'passport_number'=>'رقم جواز السفر',
        'passport_expire_date'=>'تاريخ إنتهاء جواز السفر',
        'birth_date'=>'تاريخ الميلاد',
        'country'=>'الدولة',
        'city'=>'المدينة',
        'terms'=>'الشروط والأحكام',
        'star'=>'التقييم',
        'question_ar'=>'السؤال باللغة العربية',
        'question_en'=>'السؤال باللغة الإنجليزية',
        'answer_ar'=>'الإجابة باللغة العربية',
        'answer_en'=>'الإجابة باللغة الإنجليزية',
        'instalation'=>'تركيب',
        'maintainance_team'=>'فريق صيانه',
        'customer'=>'عميل',
        'team_instalation'=>'فريق تركيب',
        'safety_ar'=>'السلامة أولا ,الجودة دائما باللغة العربية',
        'safety_en'=>'السلامة أولا ,الجودة دائما باللغة الإنجليزية',
        'team_ar'=>'فريق من الخبراء باللغة العربية',
        'team_en'=>'فريق من الخبراء باللغة الإنجليزية',
        'hint_service_title_ar'=>'عنوان خدماتنا باللغة العربية',
'hint_service_title_en'=>'عنوان خدماتنا باللغة الإنجليزية',
'hint_post_title_ar'=>'عنوان منتجاتنا باللغة العربية',
'hint_post_title_en'=>'عنوان منتجاتنا باللغة الإنجليزية',
        ],

];
