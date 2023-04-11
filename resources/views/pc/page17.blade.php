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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-standard">
                    Launch static backdrop modal
                </button>
                <!-- Modal -->
                <div class="modal fade modal-fullscreen-lg-down" id="modal-standard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">このインフルエンサーを採用しますか？</h5>
                            </div>
                            <div class="modal-body">
                                <div class="avatar">
                                    <img src="{{ asset('img/box/avatar1.png') }}" alt="3rdoor" />
                                </div>

                                <div class="text-name">
                                    coco/大食いモデル
                                </div>
                                <div class="text-age">
                                    最終ログイン：1 時間前
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">戻る</button>
                                <button type="button" class="btn btn-primary">スカウトする</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
