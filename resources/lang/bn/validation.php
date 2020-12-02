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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
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
    'confirmed' => 'এই :attribute পুনরাবৃত্তি মিলছে না।',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute অবশ্যই একটি বৈধ ইমেল ঠিকানা হতে হবে',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'প্রদত্ত :attribute টি অগ্রহণযোগ্য।',
    'file' => 'The :attribute must be a file.',
    'filled' => 'এই :attribute টি অবশ্যই মান থাকতে হবে।',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'প্রদত্ত :attribute টি অগ্রহণযোগ্য।',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'এই :attribute টি অবশ্যই একটি পূর্ণ সংখ্যা হতে হবে।',
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
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'এই :attribute টি সর্বোচ্চ :max হতে পারবে।',
        'file' => 'এই :attribute টি সর্বোচ্চ :max কিলোবাইট হতে পারবে।',
        'string' => 'এই :attribute টি সর্বোচ্চ :max সংখ্যার হতে পারবে।',
        'array' => 'এই :attribute টি সর্বোচ্চ :max গুলো হতে পারবে।',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'এই :attribute টি কমপক্ষে :min হতে হবে।',
        'file' => 'এই :attribute টি কমপক্ষে :min কিলোবাইট হতে হবে।',
        'string' => 'এই :attribute টি কমপক্ষে :min সংখ্যার হতে হবে।',
        'array' => 'এই :attribute টি কমপক্ষে :min গুলো হতে হবে।',
    ],
    'not_in' => 'প্রদত্ত :attribute টি অগ্রহণযোগ্য।',
    'not_regex' => 'প্রদত্ত :attribute টি অগ্রহণযোগ্য।',
    'numeric' => 'প্রদত্ত :attribute টি একটি নম্বর হতে হবে।',
    'password' => 'প্রদত্ত পাসওয়ার্ডটি ভূল।',
    'present' => 'এই :attribute তথ্যটি অবশ্যই দিতে হবে।',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'এই :attribute তথ্যটি আবশ্যক।',
    'required_if' => 'এই :attribute তথ্যটি আবশ্যক যখন :other হলো :value।',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'এই :attribute এবং এই :other একই হতে হবে।',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'এই :attribute টি অবশ্যই একটি স্ট্রিং হতে হবে।',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'এই :attribute টি ইতিমধ্যে নেওয়া হয়েছে।',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'এই :attribute টি অগ্রহণযোগ্য।',
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

    'attributes' => [],

];
