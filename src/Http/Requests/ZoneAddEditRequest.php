<?php

namespace AccessManager\Zones\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ZoneAddEditRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'  =>  ['required',],
        ];
    }
}