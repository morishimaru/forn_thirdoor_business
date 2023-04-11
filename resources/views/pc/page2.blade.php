@extends('layouts.pc')

@section('content')
    <div class="home">
        @include('pc.includes.navbars')

        <div class="content">
            <div id="carouselExampleIndicators" class="carousel slide mb30">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/box/banner1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/box/banner1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/box/banner1.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

            <div class="mb30 d-flex justify-content-between">
                <div style="width: 820px">
                    <div class="box">
                        <div class="head">
                            <div class="text"><i class="fa-solid fa-list-check"></i> 対応待ちのやり取り</div>
                            <div class="info">対応待ち無しを確認</div>
                        </div>
                        <div class="body">
                            <div class="block">
                                <div class="top">
                                    <div class="top-img">
                                        <img src="{{ asset('img/box/box1.png') }}" alt="3rdoor" />
                                    </div>
                                    <div class="top-body">
                                        <div class="title">
                                            <a href="#">神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門</a>
                                        </div>
                                        <div class="time">2023/02/01 - 2023/03/01</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tag tag-yellow">チャットの未返信</div>
                                    <div class="time">2023/02/01 13:32</div>
                                    <div class="title">
                                        <a href="#"><strong>coco/大食いモデル：</strong>わかりました！お願いします！</a>
                                    </div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <div class="item">
                                    <div class="tag tag-purple">応募者の確認待ち</div>
                                    <div class="time">2023/02/01 13:32</div>
                                    <div class="title">
                                        <a href="#"><strong>岸田マン：</strong>すごく魅力的な商品なので是非、プロモーションをしたいと考えておりますが</a>
                                    </div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <div class="item">
                                    <div class="tag tag-green">投稿の承認待ち</div>
                                    <div class="time">2023/02/01 13:32</div>
                                    <div class="title">
                                        <a href="#"><strong>しゅもんぬ：</strong>インスタとYoutubeで投稿しました。確認お願いします。</a>
                                    </div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="block">
                                <div class="top">
                                    <div class="top-img">
                                        <img src="{{ asset('img/box/box2.png') }}" alt="3rdoor" />
                                    </div>
                                    <div class="top-body">
                                        <div class="title">
                                            <a href="#">神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門</a>
                                        </div>
                                        <div class="time">2023/02/01 - 2023/03/01</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tag tag-yellow">チャットの未返信</div>
                                    <div class="time">2023/02/01 13:32</div>
                                    <div class="title">
                                        <a href="#"><strong>coco/大食いモデル：</strong>わかりました！お願いします！</a>
                                    </div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <div class="item">
                                    <div class="tag tag-purple">応募者の確認待ち</div>
                                    <div class="time">2023/02/01 13:32</div>
                                    <div class="title">
                                        <a href="#"><strong>岸田マン：</strong>すごく魅力的な商品なので是非、プロモーションをしたいと考えておりますが</a>
                                    </div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <div class="item">
                                    <div class="tag tag-green">投稿の承認待ち</div>
                                    <div class="time">2023/02/01 13:32</div>
                                    <div class="title">
                                        <a href="#"><strong>しゅもんぬ：</strong>インスタとYoutubeで投稿しました。確認お願いします。</a>
                                    </div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="block">
                                <div class="top">
                                    <div class="top-img">
                                        <img src="{{ asset('img/box/box1.png') }}" alt="3rdoor" />
                                    </div>
                                    <div class="top-body">
                                        <div class="title">
                                            <a href="#">神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門</a>
                                        </div>
                                        <div class="time">2023/02/01 - 2023/03/01</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tag tag-purple">応募者の確認待ち</div>
                                    <div class="time">2023/02/01 13:32</div>
                                    <div class="title">
                                        <a href="#"><strong>岸田マン：</strong>すごく魅力的な商品なので是非、プロモーションをしたいと考えておりますが</a>
                                    </div>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-left: 30px">
                    <div class="mb30">
                        <img class="img-fluid" src="{{ asset('img/youtube.png') }}" alt="3rdoor" />
                    </div>

                    <div class="box">
                        <div class="head">
                            <div class="text"><i class="fa-solid fa-circle-exclamation"></i> お知らせ</div>
                        </div>
                        <div class="body body-content">
                            <div class="item2">
                                <div class="time">2023/02/01</div>
                                <div class="tag">重要</div>
                                <div class="title">
                                    <a href="#">次回メンテナンスの知らせ</a>
                                </div>
                            </div>
                            <div class="item2">
                                <div class="time">2023/02/01</div>
                                <div class="tag">重要</div>
                                <div class="title">
                                    <a href="#">大型アップデート ver3.1.0 について</a>
                                </div>
                            </div>
                            <div class="item2">
                                <div class="time">2023/02/01</div>
                                <div class="title">
                                    <a href="#">3rdoor スペシャルイベント開催のお知らせ</a>
                                </div>
                            </div>
                            <div class="item2">
                                <div class="time">2023/02/01</div>
                                <div class="title">
                                    <a href="#">外部サービス Stickey との提携について</a>
                                </div>
                            </div>
                            <div class="item2">
                                <div class="time">2023/02/01</div>
                                <div class="tag">重要</div>
                                <div class="title">
                                    <a href="#">仮想通貨 ( ステーブルコイン ) での報酬受け取りについて</a>
                                </div>
                            </div>
                            <div class="item2">
                                <div class="time">2023/02/01</div>
                                <div class="tag">重要</div>
                                <div class="title">
                                    <a href="#">仮想通貨 ( ステーブルコイン ) での報酬受け取りについて</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="head">
                    <div class="text"><i class="fa-solid fa-flask"></i> 掲載中のキャンペーン</div>
                    <div class="info">キャンペーン無しを確認</div>
                </div>
                <div class="body body-content body-scroll">
                    <div class="cards">
                        <div class="card">
                            <img src="{{ asset('img/box/box3.png') }}" class="card-img-top" alt="3rdoor" />
                            <div class="card-body">
                                <h5 class="card-title">神泉駅5分 アフタヌーンティのPRをお願いします 当</h5>
                                <p class="card-text">2023/02/01 - 2023/03/01</p>
                                <div class="tags">
                                    <div class="tag">アフタヌーンティ</div>
                                    <div class="tag">カフェ</div>
                                    <div class="tag">渋谷</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/box/box3.png') }}" class="card-img-top" alt="3rdoor" />
                            <div class="card-body">
                                <h5 class="card-title">神泉駅5分 アフタヌーンティのPRをお願いします 当</h5>
                                <p class="card-text">2023/02/01 - 2023/03/01</p>
                                <div class="tags">
                                    <div class="tag">アフタヌーンティ</div>
                                    <div class="tag">カフェ</div>
                                    <div class="tag">渋谷</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/box/box3.png') }}" class="card-img-top" alt="3rdoor" />
                            <div class="card-body">
                                <h5 class="card-title">神泉駅5分 アフタヌーンティのPRをお願いします 当</h5>
                                <p class="card-text">2023/02/01 - 2023/03/01</p>
                                <div class="tags">
                                    <div class="tag">アフタヌーンティ</div>
                                    <div class="tag">カフェ</div>
                                    <div class="tag">渋谷</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/box/box3.png') }}" class="card-img-top" alt="3rdoor" />
                            <div class="card-body">
                                <h5 class="card-title">神泉駅5分 アフタヌーンティのPRをお願いします 当</h5>
                                <p class="card-text">2023/02/01 - 2023/03/01</p>
                                <div class="tags">
                                    <div class="tag">アフタヌーンティ</div>
                                    <div class="tag">カフェ</div>
                                    <div class="tag">渋谷</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
