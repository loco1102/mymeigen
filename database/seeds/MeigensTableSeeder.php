<?php

use Illuminate\Database\Seeder;

class MeigensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meigens')->insert([
            [
              'izin_id' => 1,
              'genre_id' => 1,
              'meigen' => 'いかなる財宝と比べようとしても良友に勝るものはないのではないか。',
            ],
            [
              'izin_id' => 1,
              'genre_id' => 2,
              'meigen' => '愛が熱ければ熱いだけ、冷たい最後がある。',
            ],
            [
              'izin_id' => 1,
              'genre_id' => 3,
              'meigen' => '一番大切なことは、単に生きることではなく善く生きることである。',
            ],
            
            
            [
              'izin_id' => 2,
              'genre_id' => 1,
              'meigen' => '友の幸福の為にどれだけ尽くそうとしているか、そこに人間の偉大さを測る物差しがある。',
            ],
            [
              'izin_id' => 2,
              'genre_id' => 2,
              'meigen' => '博愛を実践するには最大の勇気が必要である。',
            ],
            [
              'izin_id' => 2,
              'genre_id' => 3,
              'meigen' => '速度を上げるばかりが人生ではない。',
            ],
            
            
            [
              'izin_id' => 3,
              'genre_id' => 1,
              'meigen' => '全てをなくし、一人ぼっちになった時、いつでも相談できる友人を一人持つことね。あとは仕事。',
            ],
            [
              'izin_id' => 3,
              'genre_id' => 2,
              'meigen' => '口紅は落ちる過程にこそ、ドラマがある。',
            ],
            [
              'izin_id' => 3,
              'genre_id' => 3,
              'meigen' => '私は流れに逆らって泳ぐことで強くなったの。',
            ],
            
            
            [
              'izin_id' => 4,
              'genre_id' => 4,
              'meigen' => '時間の使い方の最も下手なものが、まずその短さについて苦情を言う。',
            ],
            
            
            [
              'izin_id' => 5,
              'genre_id' => 5,
              'meigen' => 'ほんとうの競争相手？それは自分自身。',
            ],
            
            
            [
              'izin_id' => 6,
              'genre_id' => 6,
              'meigen' => '自分の仕事が最高と思えたら、成功です。',
            ],
            
            
            [
              'izin_id' => 7,
              'genre_id' => 7,
              'meigen' => '道に迷ったら、心の中でささやく声に耳を傾けて。あとは突き進むだけよ。',
            ],
            
            
            [
              'izin_id' => 8,
              'genre_id' => 8,
              'meigen' => '好奇心はいつだって、新しい道を教えてくれる。',
            ],
        ]);
    }
}
