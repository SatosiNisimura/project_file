<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
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
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
        $param = [
            'user_id' => '2',
            'title' => '【小池都知事】「感染爆発 重大局面」 ★2',
            'body' => '【新型コロナ】小池都知事の会見①

            ・今まさに「感染爆発 重大局面」
            ・きょう25日に新たに感染が確認されたのは計41名
            ・オーバーシュートを防ぐため都民の協力が必要
            ・平日 仕事は自宅で
            ・夜間の外出、週末の不要不急の外出を控えてほしい
            ・帰国者 帰国から14日の外出自粛を厳守',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '3',
            'title' => '【東京都】89人検査して41人が感染　25日',
            'body' => '会見より

            【コロナ速報】東京都で新たに４０人以上の感染者★16',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '1',
            'title' => '【東京都会見】20％は重症　5％は集中治療室に入らないと助からない　重症化するスピードが速い　数時間で変わる',
            'body' => '【LIVE】小池都知事、記者会見　午後8時から ★5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '2',
            'title' => '【悲報】パニック買い始まる ☆2',
            'body' => 'アカンスーパーがすごいことになってる
            ※前スレ
            【悲報】パニック買い始まる',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '1',
            'title' => '日本政府「新型コロナウィルス対策で一世帯当たり20万円の現金を給付する。足りなければ上乗せする」',
            'body' => '　新型コロナウイルスの感染拡大を受けて政府・与党が4月にまとめる緊急経済対策の一環で、一部の世帯に限り
            1世帯当たり20万円程度の現金を給付する案が検討されていることが分かった。
            対策の事業規模は、平成以降で最大だった2009年4月の56・8兆円（うち国費15・4兆円）を目安に調整が続いている。
            　安倍晋三首相が20年度当初予算が成立する27日以降に、経済対策の取りまとめを正式に指示する見通し。
            給付額は調整中だが、官邸幹部は「20万円でとどまればいいが」と話し、上積みの可能性も示唆する。
            給付方式は自己申告制とし、対象を生活困窮世帯とすることも検討されている。
            　自民党は27日の政調幹部の会議で対策案を集約し、30日にも政府への提言をまとめる。
            補正予算案を5月の大型連休前に成立させ、すみやかに実施する方向だ。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '3',
            'title' => '【速報】小池都知事、また自粛要請 20時から緊急記者会見★5【責任逃れ】',
            'body' => '※前スレ
            【速報】小池都知事、外出禁止令を発令 20時から緊急記者会見★3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '1',
            'title' => '【速報】東京のスーパーが大変です！激しく混んでます！',
            'body' => 'ソース私の近所

            みんな自粛に備えて買いだめしてるっぽいんだが',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '2',
            'title' => '【LIVE】小池都知事、記者会見　午後8時から ★4',
            'body' => '東京都内での新型コロナウイルス感染者の急増を受け、小池百合子知事は午後8時から都庁で記者会見する。市民に強く警戒を呼び掛ける方針。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '2',
            'title' => '【速報】英チャールズ皇太子、新型肺炎陽性　25日 ★3',
            'body' => '
            イギリス チャールズ皇太子 新型コロナの陽性反応
            2020年3月25日 19時53分新型コロナウイルス
            
            イギリスの公共放送ＢＢＣは、イギリスのチャールズ皇太子が新型コロナウイルスの検査の結果陽性反応が出たと伝えました。症状は軽いということです。The Prince of Wales has tested positive for coronavirus, Clarence House has confirmed.
            Prince Charles, 71, is displaying mild symptoms "but otherwise remains in good health", a spokesman said.
            
            The Duchess of Cornwall, 72, has also been tested but does not have the virus.
            Clarence House said Charles and Camilla were now self-isolating at Balmoral, adding that the prince has been working at home over the last few days.
            
            An official statement read: "In accordance with government and medical advice, the prince and the duchess are now self-isolating at home in Scotland.
            "The tests were carried out by the NHS in Aberdeenshire, where they met the criteria required for testing.
            
            "It is not possible to ascertain from whom the prince caught the virus owing to the high number of engagements he carried out in his public role during recent weeks."',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '2',
            'title' => '【志村けん】新型コロナ陽性　重度の肺炎で入院　人工心肺装置のある病院へ転院 ★19',
            'body' => '■志村けんさん陽性 一時気管挿管の重症、感染経路不明 都の感染者は１７２人に上る

            タレントの志村けんさんが新型コロナウイルスに感染し、東京都内の病院に入院していることが分かりました。東京都の感染者は志村さんを含めて１７２人で、全国最多となっています。
            
            関係者によりますと、タレントの志村けんさん（７０）は発熱やせきなどの症状を訴え、都内の病院に入院中で、検査の結果、２３日、新型コロナウイルスの陽性反応が出たということです。志村さんは、一時、気管挿管などを行う重症だったということです。
            
            「志村けんさんだけでなく、誰でもなり得る病気なんだなと今回実感しました」（街の人）
            
            志村さんは複数のレギュラー番組などを抱えているほか、今年１２月公開予定の映画「キネマの神様」では、主演を務めることになっています。映画の配給会社によりますと、今のところ代役は検討しておらず、今後の撮影については協議していくということです。
            
            志村さんを含めて東京都の感染者数は１７２人に上り、北海道を上回って、全国最多となっています。東京都では感染経路が分からないケースが相次いでいて、志村さんもこの１人とみられます。
            
            志村けんさんの事務所が報道各社にＦＡＸを送り、「ご心配をおかけしてしまっていることをおわび申し上げると共に本人も病状の回復に全力で努めておりますので、どうか静かに見守っていただけますと幸いです」とコメントしています。
            
            また関係者によりますと、志村さんは２４日午後、当初、入院していた東京・港区の病院から人工心肺装置をつけるために東京・新宿区の別の病院に転院したということです。現在、意識はあるということです。（25日11:51）',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '1',
            'title' => '
            【速報】東京、外出禁止 3',
            'body' => 'はい',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => '1',
            'title' => '【速報】 今週末は不要不急の外出自粛を要請へ 東京都・小池知事がこの後の緊急会見で 25日★2',
            'body' => '
            東京都 小池知事 今週末は不要不急の外出自粛要請へ
            2020年3月25日 19時22分新型コロナウイルス
            
            東京都の関係者によりますと新たに40人以上が新型コロナウイルスに感染していることが確認されたということです。都が１日に発表する感染者の数としては最も多く、小池知事は午後８時から記者会見を開き、今週末は不要不急の外出を控えるよう呼びかけることにしています。
            
            東京都では、新型コロナウイルスに感染する人が相次いでいますが、都の関係者によりますと、25日は新たに40人以上の感染が確認されたということです。
            
            都が、１日に発表する感染者の数としては、これまでで最も多くなりますが、このうち10人程度は、24日、看護師と患者の感染が確認された台東区にある永寿総合病院の関係者だということです。
            
            東京都が今週に入って発表した感染者は、23日が16人で、それまで最も多くなりましたが、24日はさらに１人多い17人でした。
            
            都は、感染者が急増していることをうけて、25日夜、小池知事が緊急で記者会見を開き、今週末は不要不急の外出を控えることなど、感染拡大の防止を強く呼びかけることにしています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
    }
}
