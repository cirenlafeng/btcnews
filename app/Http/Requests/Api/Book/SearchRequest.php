<?php
namespace App\Http\Requests\Api\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Book;

class SearchRequest extends FormRequest
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
        return [
            'keyword'   => 'string|min:0',
            'offset'    => 'integer|min:0',
            'limit'     => 'integer|min:0',
        ];
    }

    public function response(array $errors)
    {
        return new JsonResponse($errors, 422);   
    }

}