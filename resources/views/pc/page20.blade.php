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
                <div class="modal fade modal-xl plan" id="modal-full-page" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-4 plan-1">
                                        <div><img src="{{ asset('img/Plan1.png') }}" alt="3rdoor" /></div>
                                        <div class="text-1">無料プラン</div>
                                        <div class="text-2">0円</div>
                                        <div class="text-3">キャンペーン登録：1案件まで</div>
                                        <div class="text-4">スカウト機能：×</div>
                                        <div class="text-5">応募数：3名まで</div>
                                        <div class="text-6">キャスティング依頼：×</div>
                                        <div class="text-7">レポート：×</div>
                                        <div> <button type="button" class="btn btn-primary btn-1"><i class="fa-solid fa-check"></i> 現在のプラン</button></div>
                                    </div>
                                    <div class="col-4 plan-2">
                                        <div><img src="{{ asset('img/Plan2.png') }}" alt="3rdoor" /></div>
                                        <div class="text-1">スタンダードプラン</div>
                                        <div class="text-2">50,000円/月</div>
                                        <div class="text-3">キャンペーン登録：3案件まで</div>
                                        <div class="text-4">スカウト機能：150枚/月</div>
                                        <div class="text-5">応募数：無制限</div>
                                        <div class="text-6">キャスティング依頼：〇</div>
                                        <div class="text-7">レポート：〇</div>
                                        <div> <button type="button" class="btn btn-primary btn-2"><i class="fa-solid fa-check"></i> 現在のプラン</button></div>
                                    </div>
                                    <div class="col-4 plan-3">
                                        <div><img src="{{ asset('img/Plan3.png') }}" alt="3rdoor" /></div>
                                        <div class="text-1">プレミアムプラン</div>
                                        <div class="text-2">80,000円/月</div>
                                        <div class="text-3">キャンペーン登録：6案件まで</div>
                                        <div class="text-4">スカウト機能：300枚/月</div>
                                        <div class="text-5">応募数：無制限</div>
                                        <div class="text-6">キャスティング依頼：〇</div>
                                        <div class="text-7">レポート：〇</div>
                                        <div> <button type="button" class="btn btn-primary btn-3"><i class="fa-solid fa-check"></i> 現在のプラン</button></div>
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
