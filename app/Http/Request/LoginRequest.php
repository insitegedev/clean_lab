<?php
/**
 *  app/Http/Request/LoginRequest.php
 *
 * User: 
 * Date-Time: 22.02.21
 * Time: 10:26
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ];
    }
}
