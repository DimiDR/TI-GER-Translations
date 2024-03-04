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
    'accepted' => 'Das :attribute muss akzeptiert werden.',
    'active_url' => 'Das :attribute ist keine gültige URL.',
    'after' => 'Das :attribute muss ein Datum nach :date sein.',
    'after_or_equal' => 'Das :attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => 'Das :attribute darf nur aus Buchstaben enthalten.',
    'alpha_dash' => 'Das :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Das :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das :attribute muss ein Feld sein.',
    'before' => 'Das :attribute muss ein Datum vor dem :date sein.',
    'before_or_equal' => 'Das Attribut muss ein Datum vor oder gleich: date sein.',
    'between' => [
        'numeric' => 'Das :attribute muss zwischen :min und :max liegen.',
        'file' => 'Das :attribute muss zwischen :min und :max kilobytes sein.',
        'string' => 'Das :attribute muss zwischen :min und :max Zeichen sein.',
        'array' => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean' => ':attribute Feld muss richtig oder falsch sein.',
    'confirmed' => 'Die :attribute Bestätigung stimmt nicht überein.',
    'date' => 'Das :attribute ist kein gültiges Datum.',
    'date_equals' => 'Das :attribute muss ein Datum sein, welches :date entspricht.',
    'date_format' => ':attribute entspricht nicht dem gültigen Format für :format.',
    'different' => ':attribute und :other müssen unterschiedlich sein.',
    'digits' => ':attribute muss :digits Stellen haben.',
    'digits_between' => ':attribute soll mindestens :min und darf maximal :max Stellen haben.',
    'dimensions' => ':attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das :attribute Feld hat einen doppelten Wert.',
    'email' => ':attribute muss eine gültige Emailadresse sein.',
    'ends_with' => 'Das :attribute muss mit einem der folgenden Werte enden: :values',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => 'Das :attribute Feld muss einen Wert haben.',
    'gt' => [
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'file' => 'Das :attribute muss größer als :value kilobytes sein.',
        'string' => 'Das :attribute muss größer sein als :value Zeichen.',
        'array' => 'Das :attribute muss mehr als :value Elemente haben.',
    ],
    'gte' => [
        'numeric' => 'Das :attribute muss größer-gleich :value sein.',
        'file' => 'Das :attribute muss größer oder gleich :value Kilobytes sein.',
        'string' => 'Das :attribute muss größer-gleich als :value Zeichen.',
        'array' => 'Das :attribute muss :value oder mehr items haben.',
    ],
    'image' => ':attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => ':attribute existiert nicht in :other.',
    'integer' => ':attribute muss eine ganze Zahl sein.',
    'ip' => ':attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => ':attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => ':attribute muss eine gültige IPv6 Adresse sein.',
    'json' => ':attribute muss eine gültige JSON-Zeichenfolge sein.',
    'lt' => [
        'numeric' => 'Das :attribute muss kleiner als :value sein.',
        'file' => 'Das :attribute muss kleiner als :value Kilobytes sein.',
        'string' => 'Das :attribute muss kleiner als :value Zeichen sein.',
        'array' => 'Das :attribute muss weniger als :value Elemente haben.',
    ],
    'lte' => [
        'numeric' => 'Das :attribute muss kleiner oder gleich :value sein.',
        'file' => 'Das :attribute muss kleiner oder gleich :value Kilobytes sein.',
        'string' => 'Das :attribute muss kleiner oder gleich :value Zeichen sein.',
        'array' => 'Das :attribute darf nicht mehr als :value Elemente haben.',
    ],
    'max' => [
        'numeric' => ':attribute darf nicht größer als :max sein.',
        'file' => ':attribute darf maximal :max Kilobytes groß sein.',
        'string' => ':attribute darf maximal :max Zeichen haben.',
        'array' => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute muss den Dateityp :values haben.',
    'mimetypes' => ':attribute muss den Dateityp :values haben.',
    'min' => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file' => ':attribute muss mindestens :min Kilobytes sein.',
        'string' => ':attribute muss mindestens :min Zeichen haben.',
        'array' => ':attribute muss mindestens :min Elemente enthalten.',
    ],
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'not_regex' => 'Das :attribute Format ist ungültig.',
    'numeric' => ':attribute muss eine Zahl sein.',
    'password' => 'Das Passwort ist falsch.',
    'present' => ':attribute muss ausgefüllt sein.',
    'regex' => ':attribute Format ist ungültig.',
    'required' => ':attribute Feld muss ausgefüllt sein.',
    'required_if' => ':attribute muss ausgefüllt sein wenn :other :value ist.',
    'required_unless' => ':attribute Feld ist notwendig, außer :other ist in :values enthalten.',
    'required_with' => ':attribute muss angegeben werden wenn :values ausgefüllt wurde.',
    'required_with_all' => 'Das :attribute Feld ist erforderlich wenn :values vorhanden sind.',
    'required_without' => ':attribute muss angegeben werden wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => ':attribute ist erforderlich, wenn keiner von :values vorhanden sind.',
    'same' => ':attribute und :other müssen übereinstimmen.',
    'size' => [
        'numeric' => ':attribute muss :size groß sein.',
        'file' => ':attribute muss :size Kilobyte groß sein.',
        'string' => ':attribute muss :size Zeichen haben.',
        'array' => ':attribute muss genau :size Elemente haben.',
    ],
    'starts_with' => 'Das :attribute muss mit einer der folgenden anfangen: :values',
    'string' => ':attribute muss eine Zeichenfolge sein.',
    'timezone' => ':attribute muss in einem gültigen Bereich liegen.',
    'unique' => ':attribute ist schon vergeben.',
    'uploaded' => ':attribute konnte nicht hochgeladen werden.',
    'url' => ':attribute Format ist ungültig.',
    'uuid' => ':attribute muss eine gültige UUID sein.',
    'valid_time' => ':attribute muss ein gültiges 24-Stunden-Zeitformat enthalten.',
    'valid_date' => ':attribute Feld muss ein gültiges Datumsformat enthalten.',

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
            'rule-name' => 'individuelle Nachricht',
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
