<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'color',
        'created_at',
        'updated_at',
    ];
     /**
      *  Imageモデルとリレーション
      */

       public function images()
       {
            return $this->hasMany(image::class);
       }

    /**
     * プロダクトを全て取得
     *
     * @return App\Model\Product  $result プロダクトモデル
     */
    public function getProductList()
    {
        $result = $this->with('images:product_id,image')->get();
        return $result;
    }

}
