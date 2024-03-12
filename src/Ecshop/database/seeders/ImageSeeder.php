<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table = DB::table('image');
        // シーダー実行前にproductテーブルの中身を空にする
        $table->truncate();

        // 現在の日時を取得
        $now = Carbon::now();

        $data = [
            [
                'product_id' => 1,
                'image' => 'caffe.png',
                'created_at' => $now ,
            ],
            [
                'product_id' => 2,
                'image' => 'can.png',
                'created_at' => $now ,
            ],
            [
                'product_id' => 3,
                'image' => 'table.png',
                'created_at' => $now ,
            ],
            [
                'product_id' => 4,
                'image' => 'taipo.png',
                'created_at' => $now ,
            ],
            [
                'product_id' => 5,
                'image' => 'tabela.png',
                'created_at' => $now ,
            ],
            [
                'product_id' => 6,
                'image' => 'cap.png',
                'created_at' => $now ,
            ],
            [
                'product_id' => 7,
                'image' => 'koma.png',
                'created_at' => $now ,
            ],
            [
                'product_id' => 8,
                'image' => 'daice.png',
                'created_at' => $now ,
            ],
        ];
        $table->insert($data);
    }
}
