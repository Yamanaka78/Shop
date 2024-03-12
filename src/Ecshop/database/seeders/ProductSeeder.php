<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table = DB::table('product');
        // シーダー実行前にproductテーブルの中身を空にする
        $table->truncate();

        // 現在の日時を取得
        $now = Carbon::now();

        $data = [
            [
                'name' => 'コーヒカップ',
                'description' => '北欧風のコーヒカップになります',
                'price' => 1000,
                'stock' => 10,
                'color' => '白',
                'created_at' => $now ,
            ],
            [
                'name' => 'カメラレンズ',
                'description' => 'カメラレンズになります',
                'price' => 10000,
                'stock' => 10,
                'color' => '黒',
                'created_at' => $now ,
            ],
            [
                'name' => '机',
                'description' => '北欧風の机になります。勉強机におすすめです',
                'price' => 30000,
                'stock' => 10,
                'color' => '白',
                'created_at' => $now ,
            ],
            [
                'name' => 'タイプライター',
                'description' => 'タイプライターになります。レトロな雰囲気を味わってみてください',
                'price' => 1000,
                'stock' => 11,
                'color' => '黒',
                'created_at' => $now ,
            ],
            [
                'name' => 'タンブラー',
                'description' => 'タンブラー最高です',
                'price' => 1000,
                'stock' => 10,
                'color' => '銀',
                'created_at' => $now ,
            ],
            [
                'name' => 'コーヒカップ',
                'description' => '北欧風のコーヒカップになります',
                'price' => 1000,
                'stock' => 10,
                'color' => '白',
                'created_at' => $now ,
            ],
            [
                'name' => 'こま',
                'description' => '回るかわかりません。',
                'price' => 1000,
                'stock' => 10,
                'color' => '緑',
                'created_at' => $now ,
            ],
            [
                'name' => 'サイコロ',
                'description' => 'サイコロです。',
                'price' => 500,
                'stock' => 10,
                'color' => '赤',
                'created_at' => $now ,
            ],
        ];

        //productテーブルにインサート
        $table->insert($data);
    }
}
