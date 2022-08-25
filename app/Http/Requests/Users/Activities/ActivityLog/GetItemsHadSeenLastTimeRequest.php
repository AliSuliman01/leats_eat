<?php

namespace App\Http\Requests\Users\Activities\ActivityLog;

use App\Http\Requests\ApiFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class GetItemsHadSeenLastTimeRequest extends ApiFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'period'=>'string|in:5,10,half an hour,hour,day,week,month,year',

        ];
    }
}
