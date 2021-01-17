<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function quiz()
    {
        return $this->hasMany('App\Models\Quiz');
    }

    public function keyword()
    {
        return $this->hasMany('App\Models\Keyword');
    }

    /**
     *
     * カテゴリーセレクトボックス取得メソッド
     * 管理画面用にarray([id]=> [name])の配列を返却する
     * @return array
     */
    public function findCategorySelectBoxInAdmin(): array
    {
        $categories = Category::select('id', 'name')->get();

        $categoryArray = [];

        foreach ($categories as $category) {
            $categoryArray[$category->id] = $category->name;
        }
        return $categoryArray;
    }
}
