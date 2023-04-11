@extends('layouts.pc')

@section('content')
    <div class="home">
        @include('pc.includes.navbars')
        <div class="right-column">
            <div class="searchbars">
                <div class="d-flex align-items-center">
                    <div class="back"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="title">メッセージ</div>
                </div>
            </div>
            <div class="content">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-full-page">
                    Launch static backdrop modal
                </button>
                <!-- Modal -->
                <div class="modal fade modal-xl company-info" id="modal-full-page" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="left">
                                            <div><img src="{{ asset('img/LOGO1.png') }}" alt="3rdoor"/></div>
                                            <div class="left-content">
                                                <div class="title">現在のプラン</div>
                                                <div class="row">
                                                    <div class="col-7">ご契約内容</div>
                                                    <div class="col-5">無料プラン</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7">ご利用開始日</div>
                                                    <div class="col-5">2020/12/25</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7">契約状況</div>
                                                    <div class="col-5">契約中</div>
                                                </div>
                                                <div class="row btn">
                                                    <button type="button" class="btn btn-primary">プランを変更する</button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7">スカウトチケット枚数</div>
                                                    <div class="col-5">残：30枚</div>
                                                </div>
                                                <div class="row btn">
                                                    <button type="button" class="btn btn-primary">スカウトチケットを購入する</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="right-content-1">
                                            <div class="row">
                                                <div class="col-4 title">
                                                    お客様基本情報
                                                </div>
                                                <div class="col-4">
                                                    お名前
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-4">
                                                    お名前（フリガナ）
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    お客様ID
                                                </div>
                                                <div class="col-4">
                                                    0000000000
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    メールアドレス
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    電話番号
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="right-content-2">
                                            <div class="row">
                                                <div class="col-4 title">
                                                    会社情報
                                                </div>
                                                <div class="col-4">
                                                    会社名
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    会社名（フリガナ）
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    会社URL
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    代表者名
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    住所
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    カテゴリ
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-4">

                                                </div>
                                                <div class="col-4">
                                                    支払方法
                                                </div>
                                                <div class="col-4">

                                                </div>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary">更新</button>
                                            </div>
                                        </div>

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
