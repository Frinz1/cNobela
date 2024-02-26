<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public static function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'genre' => 'nullable|string|max:255',
        ];
    }

}