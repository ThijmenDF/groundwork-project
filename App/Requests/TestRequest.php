<?php

namespace App\Requests;

use Groundwork\Validator\Validator;

class TestRequest extends Validator
{
    public array $rules = [
        'text' => [
            'nullable',
            'string',
            'length:2'
        ],
        'options' => [
            'in:a:b:d'
        ]
    ];

    public bool $returnOnFailure = true;
}