<?php

namespace App\Requests;

use Groundwork\Validator\Validator;

class TestRequest extends Validator
{
    public array $rules = [
        'text' => [
            'nullable',
            'string',
            'min:2'
        ],
        'file' => [
            'required',
            'file',
            'image'
        ]
    ];

    public bool $returnOnFailure = true;
}