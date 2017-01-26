<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmbedRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'src'=>'min: 3|required',
                    'title'=>'min: 3|unique:embed|required',
                    'description'=>'min: 3|required',
                    'category_id'=>'required',
                    'img'=>'required',
                ];
            }
            case 'PUT':
            {
                return [
                    'src'=>'min: 3',
            ];
            }
            case 'PATCH':
            {
                return [
                    'src'=>'min: 3',
                ];
            }
            default:break;
        }
    }
}
