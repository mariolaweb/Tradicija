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

    'accepted' => ':Attribute mora biti prihvaćen.',
    'accepted_if' => ':Attribute mora biti prihvaćen kada je :other :value.',
    'active_url' => ':Attribute nije validan URL.',
    'after' => ':Attribute mora biti datum nakon :date.',
    'after_or_equal' => ':Attribute mora biti datum nakon ili jednak :date.',
    'alpha' => ':Attribute može sadržavati samo slova.',
    'alpha_dash' => ':Attribute može sadržavati samo slova, brojeve, crtice i donje crtice.',
    'alpha_num' => ':Attribute može sadržavati samo slova i brojeve.',
    'array' => ':Attribute mora biti niz.',
    'ascii' => ':Attribute može sadržavati samo jednobajtne alfanumeričke znakove i simbole.',
    'before' => ':Attribute mora biti datum prije :date.',
    'before_or_equal' => ':Attribute mora biti datum prije ili jednak :date.',
    'between' => [
        'array' => ':Attribute mora imati između :min i :max stavki.',
        'file' => ':Attribute mora biti između :min i :max kilobajta.',
        'numeric' => ':Attribute mora biti između :min i :max.',
        'string' => ':Attribute mora biti između :min i :max karaktera.',
    ],
    'boolean' => 'Polje :attribute mora biti tačno ili netačno.',
    'confirmed' => 'Potvrda polja :attribute se ne poklapa.',
    'current_password' => 'Pogrešna lozinka.',
    'date' => ':Attribute nije validan datum.',
    'date_equals' => ':Attribute mora biti datum jednak :date.',
    'date_format' => ':Attribute se ne podudara sa formatom :format.',
    'decimal' => ':Attribute mora imati :decimal decimalna mjesta.',
    'declined' => ':Attribute mora biti odbijen.',
    'declined_if' => ':Attribute mora biti odbijen kada je :other :value.',
    'different' => ':Attribute i :other se moraju razlikovati.',
    'digits' => ':Attribute mora imati :digits cifara.',
    'digits_between' => ':Attribute mora biti između :min i :max cifara.',
    'dimensions' => ':Attribute ima neispravne dimenzije slike.',
    'distinct' => ':Attribute ima dupliranu vrijednost.',
    'doesnt_end_with' => ':Attribute ne smije završavati sa nijednim od sljedećeg: :values.',
    'doesnt_start_with' => ':Attribute ne smije počinjati sa nijednim od sljedećeg: :values.',
    'email' => ':Attribute mora biti validna email adresa.',
    'ends_with' => ':Attribute mora završavati sa jednim od sljedećeg: :values.',
    'enum' => 'Odabrano polje :attribute je neispravno.',
    'exists' => 'Odabrano polje :attribute nije validno.',
    'file' => ':Attribute mora biti fajl.',
    'filled' => 'Polje :attribute mora imati vrijednost.',
    'gt' => [
        'array' => ':Attribute mora imati više od :value stavki.',
        'file' => ':Attribute mora biti veći od :value kilobajta.',
        'numeric' => ':Attribute mora biti veći od :value.',
        'string' => ':Attribute mora biti duži od :value karaktera.',
    ],
    'gte' => [
        'array' => ':Attribute mora imati :value ili više stavki.',
        'file' => ':Attribute mora biti veći ili jednak :value kilobajta.',
        'numeric' => ':Attribute mora biti veći ili jednak :value.',
        'string' => ':Attribute mora biti duži ili jednak :value karaktera.',
    ],
    'image' => ':Attribute mora biti slika.',
    'in' => 'Odabrano polje :attribute je neispravno.',
    'in_array' => ':Attribute polje ne postoji u :other.',
    'integer' => ':Attribute mora biti cijeli broj.',
    'ip' => ':Attribute mora biti validna IP adresa.',
    'ipv4' => ':Attribute mora biti validna IPv4 adresa.',
    'ipv6' => ':Attribute mora biti validna IPv6 adresa.',
    'json' => ':Attribute mora biti validan JSON string.',
    'lowercase' => ':Attribute mora biti malim slovima.',
    'lt' => [
        'array' => ':Attribute mora imati manje od :value stavki.',
        'file' => ':Attribute mora biti manji od :value kilobajta.',
        'numeric' => ':Attribute mora biti manji od :value.',
        'string' => ':Attribute mora biti kraći od :value karaktera.',
    ],
    'lte' => [
        'array' => ':Attribute ne smije imati više od :value stavki.',
        'file' => ':Attribute mora biti manji ili jednak :value kilobajta.',
        'numeric' => ':Attribute mora biti manji ili jednak :value.',
        'string' => ':Attribute mora biti kraći ili jednak :value karaktera.',
    ],
    'mac_address' => ':Attribute mora biti validna MAC adresa.',
    'max' => [
        'array' => ':Attribute ne smije imati više od :max stavki.',
        'file' => ':Attribute ne smije biti veći od :max kilobajta.',
        'numeric' => ':Attribute ne smije biti veći od :max.',
        'string' => ':Attribute ne smije biti duži od :max karaktera.',
    ],
    'max_digits' => ':Attribute ne smije imati više od :max cifara.',
    'mimes' => ':Attribute mora biti fajl tipa: :values.',
    'mimetypes' => ':Attribute mora biti fajl tipa: :values.',
    'min' => [
        'array' => ':Attribute mora imati najmanje :min stavki.',
        'file' => ':Attribute mora biti najmanje :min kilobajta.',
        'numeric' => ':Attribute mora biti najmanje :min.',
        'string' => ':Attribute mora biti najmanje :min karaktera.',
    ],
    'min_digits' => ':Attribute mora imati najmanje :min cifara.',
    'missing' => ':Attribute polje mora biti prazno.',
    'missing_if' => ':Attribute polje mora biti prazno kada je :other :value.',
    'missing_unless' => ':Attribute polje mora biti prazno osim ako je :other :value.',
    'missing_with' => ':Attribute polje mora biti prazno kada je :values prisutno.',
    'missing_with_all' => ':Attribute polje mora biti prazno kada su :values prisutne.',
    'multiple_of' => ':Attribute mora biti višekratnik od :value.',
    'not_in' => 'Odabrano polje :attribute je neispravno.',
    'not_regex' => 'Format polja :attribute nije ispravan.',
    'numeric' => ':Attribute mora biti broj.',
    'password' => [
        'letters' => ':Attribute mora sadržavati najmanje jedno slovo.',
        'mixed' => ':Attribute mora sadržavati najmanje jedno veliko i jedno malo slovo.',
        'numbers' => ':Attribute mora sadržavati najmanje jedan broj.',
        'symbols' => ':Attribute mora sadržavati najmanje jedan simbol.',
        'uncompromised' => 'Uneseni :attribute se pojavljuje u kompromitovanim podacima. Molimo odaberite drugo :attribute.',
    ],
    'present' => ':Attribute polje mora biti prisutno.',
    'prohibited' => ':Attribute polje je zabranjeno.',
    'prohibited_if' => ':Attribute polje je zabranjeno kada je :other :value.',
    'prohibited_unless' => ':Attribute polje je zabranjeno osim ako je :other u :values.',
    'prohibits' => ':Attribute polje zabranjuje prisutnost :other polja.',
    'regex' => 'Format polja :attribute nije ispravan.',
    'required' => ':Attribute polje je obavezno.',
    'required_array_keys' => ':Attribute polje mora sadržavati unose za: :values.',
    'required_if' => ':Attribute polje je obavezno kada je :other :value.',
    'required_if_accepted' => ':Attribute polje je obavezno kada je :other prihvaćen.',
    'required_unless' => ':Attribute polje je obavezno osim ako je :other u :values.',
    'required_with' => ':Attribute polje je obavezno kada je :values prisutno.',
    'required_with_all' => ':Attribute polje je obavezno kada su :values prisutni.',
    'required_without' => ':Attribute polje je obavezno kada :values nije prisutno.',
    'required_without_all' => ':Attribute polje je obavezno kada ni jedan od :values nije prisutan.',
    'same' => ':Attribute i :other se moraju poklapati.',
    'size' => [
        'array' => ':Attribute mora sadržavati :size stavki.',
        'file' => ':Attribute mora biti :size kilobajta.',
        'numeric' => ':Attribute mora biti :size.',
        'string' => ':Attribute mora biti :size karaktera.',
    ],
    'starts_with' => ':Attribute mora počinjati sa jednim od sljedećeg: :values.',
    'string' => ':Attribute mora biti tekst.',
    'timezone' => ':Attribute mora biti validna vremenska zona.',
    'unique' => ':Attribute već postoji.',
    'uploaded' => 'Neuspješno slanje :attribute.',
    'url' => 'Format polja :attribute nije ispravan.',
    'uppercase' => ':Attribute mora biti velikim slovima.',
    'uuid' => ':Attribute mora biti validan UUID.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
