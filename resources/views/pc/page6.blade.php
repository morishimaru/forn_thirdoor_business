@extends('layouts.pc')

@section('content')
    <div class="home">
        @include('pc.includes.navbars')
        <div class="right-column">
            <div class="searchbars">
                <div class="d-flex align-items-center">
                    <div class="back"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="title">キャンペーン編集</div>
                </div>
                <div class="buttons">
                    <div class="btn">下書き保存</div>
                    <div class="btn btn-blue">保存する ( 再審査が必要です )</div>
                </div>
            </div>
            <div class="content">
                <div class="content-row">
                    <div class="content-left">
                        <div class="content-box">
                            <div class="edit-gallery">
                                <div class="d-flex justify-content-between">
                                    <img class="item" src="{{ asset('img/box/box3.png') }}" alt="3rdoor" />
                                    <img class="item" src="{{ asset('img/box/box3.png') }}" alt="3rdoor" />
                                    <div class="item empty">
                                        <div class="text-center">
                                            <i class="fa-sharp fa-solid fa-plus"></i>
                                            <div>写真を追加する</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-note">
                                <input type="text" class="form-control" value="神泉駅5分 アフタヌーンティのPRをお願いします 当店はグルテンフリー専門のカフェです"/>
                            </div>
                            <div class="tags tags-box">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <input type="text" class="form-control" value="アフタヌーンティ"/>
                                    </div>
                                    <div class="me-3">
                                        <input type="text" class="form-control" value="カフェ"/>
                                    </div>
                                    <div class="me-3">
                                        <input type="text" class="form-control" placeholder="入力してください"/>
                                    </div>
                                    <div class="sub">タグは最大で3つまで指定可能です<br/>設定する事でより最適なインフルエンサーの応募を促せます</div>
                                </div>
                            </div>
                            <div class="table-information table-information-bottom">
                                <div class="item">
                                    <div class="item-left">PR 方法</div>
                                    <div class="item-right">
                                        <select class="form-select"><option>自宅 ( 提供品 )</option></select>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">サービスのジャンル</div>
                                    <div class="item-right">
                                        <select class="form-select"><option>グルメ / 子カテゴリ</option></select>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">関連リンク</div>
                                    <div class="item-right">
                                        <input type="text" class="form-control" value="https://avan-sweets.com/"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">価格</div>
                                    <div class="item-right">
                                        <input type="text" class="form-control" value="3,500 円"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">ターゲット</div>
                                    <div class="item-right">
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select"><option>20代前半</option></select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select"><option>女性</option></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">発売日 ( 予定日 )</div>
                                    <div class="item-right">
                                        <select class="form-select"><option>すでに発売中</option></select>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">PR 実施目的</div>
                                    <div class="item-right">
                                        <select class="form-select"><option>認知度向上</option></select>
                                    </div>
                                </div>
                            </div>
                            <div class="table-information table-information-bottom">
                                <div class="item">
                                    <div class="item-left">商材説明</div>
                                    <div class="item-right">
                                        <textarea class="form-control" rows="5">期間限定で行うアフタヌーンティーの宣伝をお願いします。 実際はノンアルコールの飲み放題とアルコールの飲み放題がありますが、今回は ノンアルコールの飲み放題でお願いいたします。 2名様分まで提供いたしますので事前に来店される人数を教えてください。 ターゲットは女性の若い世代ですので、出来るだけ映え感を出してもらいたいです。</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="table-information table-information-bottom">
                                <div class="item">
                                    <div class="item-left">商材の特徴</div>
                                    <div class="item-right">
                                        <textarea class="form-control" rows="5">すべてグルテンフリーのメニューとなっております。 当店はチュロスが自慢で、チュロスのアレンジ料理を提供いたします。</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="table-information">
                                <div class="item">
                                    <div class="item-left">担当者のメールアドレス</div>
                                    <div class="item-right">
                                        <input type="text" class="form-control" value="moncson@gmail.com"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="shot-info">
                            <div class="icon">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="table-information">
                                <div class="item">
                                    <div class="item-left">PR 方法の指定</div>
                                    <div class="item-right">
                                        <select class="form-select">
                                            <option>動画1</option>
                                            <option>動画2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">
                                        <div>投稿に含める内容の指定</div>
                                        <div class="sub">最大で5つまで指定可能です</div>
                                    </div>
                                    <div class="item-right">
                                        <input type="text" class="form-control" value="#avan" />
                                        <input type="text" class="form-control" value="#グルテンフリーカフェ" />
                                        <input type="text" class="form-control" value="#アフタヌーンティ" />
                                        <input type="text" class="form-control" value="#渋谷" />
                                        <input type="text" class="form-control" placeholder="入力してください" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">PR指定アカウント</div>
                                    <div class="item-right">
                                        <input type="text" class="form-control" value="@avan_sweets" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">PR指定URL </div>
                                    <div class="item-right">
                                        <input type="text" class="form-control" value="http://www.avan-sweets.com/" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">希望するインフルエンサーの性別</div>
                                    <div class="item-right">
                                        <select class="form-select">
                                            <option>不問</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">最低フォロワー数</div>
                                    <div class="item-right">
                                        <select class="form-select">
                                            <option>10,000 フォロワー以上</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">SNS投稿までの手順</div>
                                    <div class="item-right">
                                        <input type="text" class="form-control" value="01.来店 02.撮影 03.試食 04.投稿" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-left">PRに関する注意事項</div>
                                    <div class="item-right">
                                        <textarea class="form-control" rows="5">特記事項なし</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
