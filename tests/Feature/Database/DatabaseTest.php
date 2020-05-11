<?php

namespace Tests\Feature\Database;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Book;
use App\User;
use App\Post;
use App\Comment;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;


    public function testExample()
    {
        $book = [
            'title' => 'hoge',
            'author' => 'tarou'
        ];
        factory(Book::class)->create($book);

        $this->assertDatabaseHas('books', $book);
    }

    //userクラスのデータはRefreshDatabaseしないとダブってエラーになる！

    /**
     * @test
     */
    public function test_usersテーブルにサンプルレコードを挿入()
    {
        $user = [
            'name' => 'hhoge',
            'email' => 'tadddrou@dfsf.jp',
            'email_verified_at' => '2020-05-10 23:05:50',
            'password' => '$2y$10$92IXUhpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => 'BOuuBGIfCt',
        ];
        factory(User::class)->create($user);

        $this->assertDatabaseHas('users', $user);
    }

    /**
     * @test
     */
    public function test_postsテーブルにサンプルレコードを挿入()
    {
        $post = [
            'user_id' => '1',
            'title' => '【現金給付】 １世帯２０〜３０万円検討・・・日本の世帯数５３００万、給付対象１千万世帯に',
            'body' => '政府は２５日、新型コロナウイルスの感染拡大を受けた緊急経済対策で、所得が減った世帯に対し現金を給付する方向で検討に入った。
            条件に当てはまれば、１世帯当たり２０万〜３０万円程度を給付する案が浮上している。
            
            緊急経済対策の事業規模は、リーマン・ショック後の平成２１年に実施した５６兆８千億円を上回り、
            名目国内総生産（ＧＤＰ）の約１割に相当する見通しだ。
            
            現金給付は、対象となる所得減の幅や所得制限をかけるかが焦点で、給付の方法も今後の検討課題となる。
            日本の世帯数約５３００万のうち、一定の所得水準を設けるなどして給付対象を約１千万世帯に絞り込むことも検討する。
            
            与党内からは、全国民を対象にした現金給付を求める声も出ている。
            
            現金給付は貯蓄に回り、消費拡大につながらないとの懸念もあるが、政府は感染拡大防止のため国民にイベント自粛などの協力を求めており
            「対象を絞り込んだ現金給付は国民の反発を招きかねない」（党幹部）との見方もある。
            
            西村康稔経済再生担当相は２３日、テレビ東京の番組で、現金給付の場合の時期について「早くても５月末になる」と述べていた。',
        ];
        factory(Post::class)->create($post);

        $this->assertDatabaseHas('posts', $post);
    }

    /**
     * @test
     */
    public function test_commentsテーブルにサンプルレコードを挿入()
    {
        $comment = [
            'post_id' => '1',
            'user_id' => '1',
            'body' => 'Hello World!',
        ];
        factory(Comment::class)->create($comment);

        $this->assertDatabaseHas('comments', $comment);
    }
}
