<?php

use Illuminate\Database\Seeder;

class IzinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('izins')->insert([
            [
              'izin_name' => 'ソクラテス',
              'gender' => '男',
              'izin_photo' => '../images/socrates.jpg',
              'detail' => '（希：Σωκράτης、ラテン語：Socrates、紀元前469年頃 - 紀元前399年4月27日[要検証 – ノート]）は、古代ギリシアの哲学者である。長母音を発音するならソークラテース。妻は、悪妻として知られる、クサンティッペ。ソクラテス自身は著述を行っていないので、その思想は弟子の哲学者プラトンやクセノポンなどの著作を通じ知られている。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'マハトマ・ガンディー',
              'gender' => '男',
              'izin_photo' => '../images/gandhi.jpg',
              'detail' => 'モーハンダース・カラムチャンド・ガーンディーは、インドのグジャラート出身の弁護士、宗教家、政治指導者である。 マハトマ・ガンディーとして知られるインド独立の父。「マハートマー」とは「偉大なる魂」という意味で、インドの詩聖タゴールから贈られたとされるガンディーの尊称である。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'ココ・シャネル',
              'gender' => '女',
              'izin_photo' => '../images/chanel.jpg',
              'detail' => 'ココ・シャネルはフランスのファッションデザイナー、企業家。彼女が創設したシャネルブランドは世界有数のファッションブランドとして現在も営業している。 20世紀初頭からファッションデザイナーとして活躍し、一時的な活動停止を経て、その死に至るまで世界の代表的なファッションデザイナーであり続けた。(from Wikipedia)',
            ],
        ]);
    }
}
