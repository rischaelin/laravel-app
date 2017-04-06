<?php
/**
 * Created by PhpStorm.
 * User: richardschalin
 * Date: 06.04.17
 * Time: 20:33
 */

namespace App\Http\Request\Todo;






use Illuminate\Http\Request;

class TodoStoreRequest extends Request
{
    public function rules() {
        return [
            'title' => 'required|min:3'
        ];
    }

    public function  authorize()
    {
        return true;
    }
}