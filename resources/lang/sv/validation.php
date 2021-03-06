<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted'             => ':attribute måste accepteras.',
    'active_url'           => ':attribute är inte en giltig webbadress.',
    'after'                => ':attribute måste vara ett datum efter :date.',
    'alpha'                => ':attribute får endast innehålla bokstäver.',
    'alpha_dash'           => ':attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'            => ':attribute får endast innehålla bokstäver och siffror.',
    'array'                => ':attribute måste vara en array.',
    'before'               => ':attribute måste vara ett datum innan :date.',
    'between'              => [
        'numeric' => ':attribute måste vara en siffra mellan :min och :max.',
        'file'    => ':attribute måste vara mellan :min till :max kilobyte stor.',
        'string'  => ':attribute måste innehålla :min till :max tecken.',
        'array'   => ':attribute måste innehålla mellan :min - :max objekt.',
    ],
    'boolean'              => ':attribute måste vara sant eller falskt.',
    'confirmed'            => ':attribute bekräftelsen matchar inte.',
    'date'                 => ':attribute är inte ett giltigt datum.',
    'time'                 => ':attribute är inte ett giltigt klockslag.',
    'date_format'          => ':attribute matchar inte formatet :format.',
    'different'            => ':attribute och :other får inte vara lika.',
    'digits'               => ':attribute måste vara :digits tecken.',
    'digits_between'       => ':attribute måste vara mellan :min och :max tecken.',
    'dimensions'           => ':attribute har felaktiga bilddimensioner.',
    'distinct'             => ':attribute innehåller fler än en repetition av samma element.',
    'email'                => ':attribute måste innehålla en korrekt e-postadress.',
    'exists'               => ':attribute är ogiltigt.',
    'file'                 => ':attribute måste vara en fil.',
    'filled'               => ':attribute är obligatoriskt.',
    'image'                => ':attribute måste vara en bild.',
    'in'                   => ':attribute är ogiltigt.',
    'in_array'             => ':attribute finns inte i :other.',
    'integer'              => ':attribute måste vara en siffra.',
    'ip'                   => ':attribute måste vara en giltig IP-adress.',
    'json'                 => ':attribute måste vara en giltig JSON-sträng.',
    'max'                  => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file'    => ':attribute får max vara :max kilobyte stor.',
        'string'  => ':attribute får max innehålla :max tecken.',
        'array'   => ':attribute får inte innehålla mer än :max objekt.',
    ],
    'mimes'                => ':attribute måste vara en fil av typen: :values.',
    'mimetypes'            => ':attribute måste vara en fil av typen: :values.',
    'min'                  => [
        'numeric' => ':attribute måste vara större än :min.',
        'file'    => ':attribute måste vara minst :min kilobyte stor.',
        'string'  => ':attribute måste innehålla minst :min tecken.',
        'array'   => ':attribute måste innehålla minst :min objekt.',
    ],
    'not_in'               => ':attribute är ogiltigt.',
    'numeric'              => ':attribute måste vara en siffra.',
    'present'              => ':attribute måste finnas med.',
    'regex'                => ':attribute har ogiltigt format.',
    'required'             => ':attribute är obligatoriskt.',
    'required_if'          => ':attribute är obligatoriskt när :other är :value.',
    'required_unless'      => ':attribute är obligatoriskt när inte :other finns bland :values.',
    'required_with'        => ':attribute är obligatoriskt när :values är ifyllt.',
    'required_with_all'    => ':attribute är obligatoriskt när :values är ifyllt.',
    'required_without'     => ':attribute är obligatoriskt när :values ej är ifyllt.',
    'required_without_all' => ':attribute är obligatoriskt när ingen av :values är ifyllt.',
    'same'                 => ':attribute och :other måste vara lika.',
    'size'                 => [
        'numeric' => ':attribute måste vara :size.',
        'file'    => ':attribute får endast vara :size kilobyte stor.',
        'string'  => ':attribute måste innehålla :size tecken.',
        'array'   => ':attribute måste innehålla :size objekt.',
    ],
    'string'               => ':attribute måste vara en sträng.',
    'timezone'             => ':attribute måste vara en giltig tidszon.',
    'unique'               => ':attribute används redan.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => ':attribute har ett ogiltigt format.',
    'min_count'            => ':attribute: Du måste välja minst :min_count.',
    'kth_email'            => ':attribute måste vara en adress på formatet [anvnamn]@kth.se.',
    'not_blacklisted'      => 'Kunde inte nominera personen.',
    'is_blacklisted'       => 'Kunde inte nominera personen.',
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
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes'           => [
        'booker' => 'fältet för vem som är bokningsansvarig',
        'reason' => 'att ange en anledning till bokningen',
        'start' => 'startdatum',
        'end' => 'slutdatum',
        'startdate' => 'startdatum',
        'enddate' => 'slutdatum',
        'starttime' => 'starttid',
        'alcohol' => 'alkoholfrågan'
    ],
];