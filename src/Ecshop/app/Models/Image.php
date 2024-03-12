<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

     /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'image';

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'image',
        'created_at',
        'updated_at',
    ];
    /**
     * Productモデルとリレーション
     */
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
