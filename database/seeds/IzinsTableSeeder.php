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
              'izin_photo' => '/images/socrates.jpg',
              'detail' => '（希：Σωκράτης、ラテン語：Socrates、紀元前469年頃 - 紀元前399年4月27日[要検証 – ノート]）は、古代ギリシアの哲学者である。長母音を発音するならソークラテース。妻は、悪妻として知られる、クサンティッペ。ソクラテス自身は著述を行っていないので、その思想は弟子の哲学者プラトンやクセノポンなどの著作を通じ知られている。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'マハトマ・ガンディー',
              'gender' => '男',
              'izin_photo' => '/images/gandhi.jpg',
              'detail' => 'モーハンダース・カラムチャンド・ガーンディーは、インドのグジャラート出身の弁護士、宗教家、政治指導者である。 マハトマ・ガンディーとして知られるインド独立の父。「マハートマー」とは「偉大なる魂」という意味で、インドの詩聖タゴールから贈られたとされるガンディーの尊称である。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'ココ・シャネル',
              'gender' => '女',
              'izin_photo' => '/images/chanel.jpg',
              'detail' => 'ココ・シャネルはフランスのファッションデザイナー、企業家。彼女が創設したシャネルブランドは世界有数のファッションブランドとして現在も営業している。 20世紀初頭からファッションデザイナーとして活躍し、一時的な活動停止を経て、その死に至るまで世界の代表的なファッションデザイナーであり続けた。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'ラ・ブリュイエール',
              'gender' => '男',
              'izin_photo' => '/images/jean.jpg',
              'detail' => 'ジャン・ド・ラ・ブリュイエール（仏: Jean de La Bruyère, 1645年8月16日/17日 - 1696年5月10日/11日）は、フランスのモラリストであり作家である。17世紀のフランスの宮廷人たちを描き、人生を深く洞察した著書『カラクテール』(フランス語: Les Caractères ou les Mœurs de ce siècle)（和訳: 『人さまざま』）（1688年）によって知られる。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'ウィルマ・ルドルフ',
              'gender' => '女',
              'izin_photo' => '/images/wilma.jpg',
              'detail' => 'ウィルマ・グロディーン・ルドルフ（Wilma Glodean Rudolph、1940年6月23日 - 1994年11月12日）は、アメリカ・テネシー州出身の黒人女子陸上競技選手。ニックネームは「黒い真珠」。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'ジョージ・エリオット',
              'gender' => '女',
              'izin_photo' => '/images/eliot.jpg',
              'detail' => 'ジョージ・エリオット（George Eliot、1819年11月22日 - 1880年12月22日）は、イギリスの作家。本名はメアリー・アン・エヴァンズ（Mary Anne Evans、マリアン Marian ないしメアリ・アン Mary Annとも）。『アダム・ビード』『サイラス・マーナー』『ミドルマーチ』などの作品で知られている。。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'ゾラ・ニール・ハーストン',
              'gender' => '女',
              'izin_photo' => '/images/zora.jpg',
              'detail' => 'ゾラ・ニール・ハーストン（Zora Neale Hurston; 1891年1月7日 - 1960年1月28日）はアメリカ合衆国の作家、民俗学者。アフリカ系アメリカ人作家として1920年代から40年代にかけて活躍したが、その後約30年間、著書が絶版になっていた。(from Wikipedia)',
            ],
            
            [
              'izin_name' => 'ウォルト・ディズニー',
              'gender' => '男',
              'izin_photo' => '/images/disney.jpg',
              'detail' => 'ウォルト・ディズニー（Walt Disney, 1901年12月5日 - 1966年12月15日）は、アメリカ合衆国・イリノイ州シカゴに生まれたアニメーター、プロデューサー、映画監督、脚本家、漫画家、声優、実業家、エンターテイナー。世界的に有名なアニメーションキャラクター「ミッキーマウス」をはじめとするキャラクターの生みの親で、『ディズニーリゾート』の創立者。(from Wikipedia)',
            ],
        ]);
    }
}
