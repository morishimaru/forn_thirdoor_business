@extends('layouts.pc')

@section('content')
    <div class="home">
        @include('pc.includes.navbars')
        <div class="right-column">
            <div class="searchbars">
                <div class="d-flex align-items-center">
                    <div class="back"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="title">キャンペーンダッシュボード</div>
                </div>
                <div class="menu">
                    <div class="item item-active">キャンペーンダッシュボード</div>
                    <div class="item">応募者一覧<span>187</span></div>
                    <div class="item">進行中のインフルエンサー<span>1</span></div>
                    <div class="item">投稿完了のインフルエンサー</div>
                </div>
            </div>
            <div class="content">
                <div class="content-row">
                    <div class="content-left">
                        <div class="content-box mb15">
                            <div class="gallery">
                                <div class="top">
                                    <img src="{{ asset('img/box/box3.png') }}" alt="3rdoor" />
                                </div>
                                <div class="d-flex justify-content-between">
                                    <img class="item" src="{{ asset('img/box/box3.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/box3.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/box3.png') }}" alt="3rdoor" />
                                </div>
                            </div>
                            <div class="edit-note">
                                <div class="title">神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門のカフェです</div>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                            <div class="tags tags-box">
                                <div class="tag">アフタヌーンティ</div>
                                <div class="tag">カフェ</div>
                                <div class="tag">渋谷</div>
                            </div>
                            <div class="table-information table-information-bottom">
                                <div class="item">
                                    <div class="item-left">PR 方法</div>
                                    <div class="item-right">自宅 ( 提供品 )</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">サービスのジャンル</div>
                                    <div class="item-right">グルメ / 子カテゴリ</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">関連リンク</div>
                                    <div class="item-right">https://avan-sweets.com/</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">価格</div>
                                    <div class="item-right">3,500 円</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">ターゲット</div>
                                    <div class="item-right">20代前半 / 女性</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">発売日 ( 予定日 )</div>
                                    <div class="item-right">すでに発売中</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">PR 実施目的</div>
                                    <div class="item-right">認知度向上</div>
                                </div>
                            </div>
                            <div class="table-information table-information-bottom">
                                <div class="item">
                                    <div class="item-left">商材説明</div>
                                    <div class="item-right">期間限定で行うアフタヌーンティーの宣伝をお願いします。 実際はノンアルコールの飲み放題とアルコールの飲み放題がありますが、今回は ノンアルコールの飲み放題でお願いいたします。 2名様分まで提供いたしますので事前に来店される人数を教えてください。 ターゲットは女性の若い世代ですので、出来るだけ映え感を出してもらいたいです。</div>
                                </div>
                            </div>
                            <div class="table-information table-information-bottom">
                                <div class="item">
                                    <div class="item-left">商材の特徴</div>
                                    <div class="item-right">すべてグルテンフリーのメニューとなっております。 当店はチュロスが自慢で、チュロスのアレンジ料理を提供いたします。</div>
                                </div>
                            </div>
                            <div class="table-information">
                                <div class="item">
                                    <div class="item-left">担当者のメールアドレス</div>
                                    <div class="item-right">moncson@gmail.com</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">作成日時</div>
                                    <div class="item-right">2023/01/15</div>
                                </div>
                            </div>
                        </div>
                        <div class="shot-info">
                            <div class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="table-information">
                                <div class="item">
                                    <div class="item-left">PR 方法の指定</div>
                                    <div class="item-right">動画</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">投稿に含める内容の指定</div>
                                    <div class="item-right">#avan #グルテンフリーカフェ #アフタヌーンティ #渋谷 </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">PR指定アカウント・URL </div>
                                    <div class="item-right">@avan_sweets http://www.avan-sweets.com/</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">希望するインフルエンサーの性別</div>
                                    <div class="item-right">不問</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">最低フォロワー数</div>
                                    <div class="item-right">10,000 フォロワー以上</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">SNS投稿までの手順</div>
                                    <div class="item-right">01.来店 02.撮影 03.試食 04.投稿</div>
                                </div>
                                <div class="item">
                                    <div class="item-left">PRに関する注意事項</div>
                                    <div class="item-right">特記事項なし</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="summary mb30">
                            <div class="item">
                                <div class="title">応募者数</div>
                                <div class="total">187</div>
                            </div>
                            <div class="item">
                                <div class="title">進行中</div>
                                <div class="total">11</div>
                            </div>
                            <div class="item">
                                <div class="title">完了数</div>
                                <div class="total">2</div>
                            </div>
                        </div>
                        <div class="posted mb30">
                            <div class="posted-left">
                                <div class="title">このキャンペーンの掲載を一時停止する</div>
                                <div class="time"><span>募集期間</span>2023/02/01 - 2023/03/01</div>
                            </div>
                            <div class="posted-right">
                                <i class="fa-solid fa-flask"></i>掲載中
                            </div>
                        </div>
                        <div class="notice mb15">
                            <div class="notice-left">
                                <div class="tag">チャットの未返信</div>
                                <div class="time">2023/02/01 13:32</div>
                                <div class="title"><strong>coco/大食いモデル：</strong>わかりました！お願いします！</div>
                            </div>
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <div class="notice notice-green mb30">
                            <div class="notice-left">
                                <div class="tag">投稿の承認待ち</div>
                                <div class="time">2023/01/30 19:27</div>
                                <div class="title"><strong>しゅもんぬ：</strong>インスタとYoutubeで投稿しました。確認お願いします。</div>
                            </div>
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <div class="box mb15">
                            <div class="head">
                                <div class="text">応募者一覧<div class="sub">187 名</div></div>
                                <a href="#" class="btn btn-primary btn-lg">もっと見る</a>
                            </div>
                            <div class="body body-content">
                                <div class="avatars">
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <div class="item empty">+99</div>
                                </div>
                            </div>
                        </div>
                        <div class="box mb15">
                            <div class="head">
                                <div class="text">進行中のインフルエンサー<div class="sub">11 名</div></div>
                            </div>
                            <div class="body body-content">
                                <div class="avatars">
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="head">
                                <div class="text">投稿完了のインフルエンサー<div class="sub">2 名</div></div>
                            </div>
                            <div class="body body-content">
                                <div class="avatars">
                                    <img class="item" src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/avatar2.png') }}" alt="3rdoor" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
