<?php

use App\Models\Answer;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('quizzes')->insert(
            [
                [
                    'title' => 'パソコン(PC)は何の略か。',
                    'answers_id' => Answer::find(1)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => 'アプリケーションをコンピュータで使用可能にするための作業のことを何と言うか。',
                    'answers_id' => Answer::find(2)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '中央処理装置とも訳されるコンピュータの情報処理の性能に影響する部分の略称は。Intel社製が多い。',
                    'answers_id' => Answer::find(3)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => '2017-10-04 21:00:00',
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '情報を記録し読み出す代表的な記憶装置の一つ。PCに内蔵されている円盤状の磁気ディスク。',
                    'answers_id' => Answer::find(4)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => 'アメリカのマーク・ザッカーバーグらによって開設された国際的なSNSは？',
                    'answers_id' => Answer::find(5)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => 'インターネット上で自分の名前の代わりに表示するニックネーム。',
                    'answers_id' => Answer::find(6)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => 'マイクロソフト社製のWEBブラウザは？',
                    'answers_id' => Answer::find(7)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => 'アップルの創業者は。',
                    'answers_id' => Answer::find(8)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '検索エンジンで上位表示を狙うための対策のことをアルファベット3文字で何対策というか？',
                    'answers_id' => Answer::find(9)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => 'Windowsのショートカットキー「Ctrl＋C」は何をするか?',
                    'answers_id' => Answer::find(10)->id,
                    'categories_id' => Category::find(5)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '発がん性や催奇形性を有し、人類が作った最悪と呼ばれる毒物は？',
                    'answers_id' => Answer::find(11)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '10億分の1mの物質世界で、新たな機能を創出する技術の総称を何と呼ぶか。',
                    'answers_id' => Answer::find(12)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '日本の工学実験探査機「はやぶさ」が、初めて着陸した小惑星の名称は。',
                    'answers_id' => Answer::find(13)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '人類初の月面着陸やハッブル宇宙望遠鏡によるデータ収集活動などアメリカの宇宙開発を行っている組織名は？',
                    'answers_id' => Answer::find(14)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '不景気で消費が減少、商品の供給超過となって物価が下落する経済現象を何と呼ぶ。',
                    'answers_id' => Answer::find(15)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => 'GDPは何の略称か？',
                    'answers_id' => Answer::find(16)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '企業が成長するために他のの企業の吸収や合併を行うことを何と呼ぶか。',
                    'answers_id' => Answer::find(17)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '株価に重大な影響を及ぼす会社内の未公開情報を利用した株式の取引は禁止されている。その取引名は何か？',
                    'answers_id' => Answer::find(18)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '自国の産業が海外からの安い製品の輸入で損害を受けることを避けるため、貿易制限を行う考え方を何と呼ぶか。',
                    'answers_id' => Answer::find(1)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '企業は寄付やボランティア活動への資金援助などの公益活動を行っている。これを何と呼ぶか。',
                    'answers_id' => Answer::find(20)->id,
                    'categories_id' => Category::find(2)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ],
                [
                    'title' => '次のお茶出しについての説明で、間違っているものを１つ選択せよ。',
                    'answers_id' => Answer::find(21)->id,
                    'categories_id' => Category::find(1)->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'image_src' => NULL,
                ]
            ]
        );
    }
}
