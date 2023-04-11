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
                <div class="modal fade modal-xl payment" id="modal-full-page" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="payment-header">お支払い選択</div>
                                <div class="payment-tag">
                                    <button type="button" class="btn btn-primary"> 円</button>
                                    <button type="button" class="btn btn-secondary"> ドル</button>
                                    <button type="button" class="btn btn-secondary"> ステーブルコイン</button>
                                    <button type="button" class="btn btn-secondary"> クレジットカード</button>
                                </div>
                                <div class="payment-header-sub">商品選択</div>
                                <div class="row payment-type">
                                    <div class="col-4">
                                        <div class="payment-type-1">
                                            <div><img src="{{ asset('img/ticket2.png') }}" alt="3rdoor" /></div>
                                            <div class="text-1">スカウトチケット</div>
                                            <div  class="text-2">50枚</div>
                                            <div  class="text-3">10,000円/JYP</div>
                                            <div> <button type="button" class="btn btn-primary"> 購入</button></div>
                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="payment-type-2">
                                        <div><img src="{{ asset('img/Scout.png') }}" alt="3rdoor" /></div>
                                        <div  class="text-1">キャンペーンチケット</div>
                                        <div  class="text-2">1案件</div>
                                        <div  class="text-3">10,000円/JYP</div>
                                        <div> <button type="button" class="btn btn-primary">購入</button></div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="payment-type-3">
                                        <div>Gabee townオプション</div>
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
