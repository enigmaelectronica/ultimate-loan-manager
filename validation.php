<?php

return [

 /*
 |--------------------------------------------------------------------------
 * Created by Enya Hernandez.
 * User: EnigmaTeam Telegram @enigmahernandez
 * Date: 20/11/2021
 * Time: 08:08 AM
 | Validation Language Lines
 |--------------------------------------------------------------------------
 |
 | The following language lines contain the default error messages used by
 | the validator class. Some of these rules have multiple versions such
 | as the size rules. Feel free to tweak each of these messages here.
 |
 */

    'accepted'             => 'El :attribute Debe ser aceptado.',
    'active_url'           => 'El :attribute no esu na dirección válida.',
    'after'                => 'El :attribute debe ser una fecha despues de :date.',
    'alpha'                => 'El :attribute debe contener letras.',
    'alpha_dash'           => 'El :attribute solo puede contener letras, números y guiones .',
    'alpha_num'            => 'El :attribute solo puede contener letras y números.',
    'array'                => 'El :attribute debe ser una matriz.',
    'before'               => 'El :attribute debe ser una fecha anterior a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe estar entre :min y :max characters.',
        'array'   => 'El :attribute debe estar entre :min y :max items.',
    ],
    'boolean'              => 'El :attribute Debe ser verdadero o falso.',
    'confirmed'            => 'El :attribute la confirmación no coincide.',
    'date'                 => 'El :attribute no es una fecha válida.',
    'date_format'          => 'El :attribute no concuerda con el formato :format.',
    'different'            => 'El :attribute y :other deben ser diferentes.',
    'digits'               => 'El :attribute debe ser :digits digitos.',
    'digits_between'       => 'El :attribute debe estar entre :min y :max digitos.',
    'dimensions'           => 'El :attribute tiene dimensiones de imagen no válidas .',
    'distinct'             => 'El :attribute el campo tiene un valor duplicado .',
    'email'                => 'El :attribute Debe ser una dirección de correo electrónico válida.',
    'exists'               => 'El :attribute seleccionado es válido.',
    'file'                 => 'El :attribute debe ser una archivo.',
    'filled'               => 'El campo :attribute es requerido.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es válido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El :attribute debe s er un entero.',
    'ip'                   => 'El :attribute debe ser una dirección´IP válida.',
    'json'                 => 'El :attribute debe ser una cadena JSON válida .',
    'max'                  => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file'    => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string'  => 'El :attribute no puede ser mayor que :max characters.',
        'array'   => 'El :attribute no puede tener mas que :max items.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file'    => 'El :attribute debe ser como mínimo :min kilobytes.',
        'string'  => 'El :attribute debe ser como mínimo :min characters.',
        'array'   => 'El :attribute debe ser como mínimo :min items.',
    ],
    'not_in'               => 'El :attribute seleccionado es válido.',
    'numeric'              => 'El :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato :attribute es válido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es obligatorio a menos que :other este en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values este presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values este presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no este presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values esten presentes.',
    'same'                 => 'El campo :attribute y :other deben concordar.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe ser :size characters.',
        'array'   => 'El :attribute debe contener :size items.',
    ],
    'string'               => 'El :attribute debe ser una cadena.',
    'timezone'             => 'El :attribute debe ser zona válida.',
    'unique'               => 'El :attribute ya fue tomado.',
    'url'                  => 'El :attribute format es inválido.',

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
