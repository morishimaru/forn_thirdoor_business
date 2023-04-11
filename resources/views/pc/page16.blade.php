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
                <div class="modal fade modal-lg" id="modal-standard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">スカウトするキャンペーンを選択してください</h5>
                            </div>
                            <div class="modal-body">
                                <div class="post-categories">
                                    <div class="post-cat-item">
                                        <div class="post-cat-item-body">
                                            <img src="{{ asset('img/box/box3.png') }}" class="post-cat-item-image" alt="3rdoor" />
                                            <div class="post-cat-item-title">神泉駅5分 アフタヌーン…</div>
                                            <span class="post-cat-item-date">2023/02/01 - 2023/03/01</span>
                                        </div>
                                    </div>
                                    <div class="post-cat-item">
                                        <div class="post-cat-item-body post-cat-item-active">
                                            <img src="{{ asset('img/box/box3.png') }}" class="post-cat-item-image" alt="3rdoor" />
                                            <div class="post-cat-item-title">神泉駅5分 アフタヌーン…</div>
                                            <span class="post-cat-item-date">2023/02/01 - 2023/03/01</span>
                                        </div>
                                    </div>
                                    <div class="post-cat-item">
                                        <div class="post-cat-item-body">
                                            <img src="{{ asset('img/box/box3.png') }}" class="post-cat-item-image" alt="3rdoor" />
                                            <div class="post-cat-item-title">神泉駅5分 アフタヌーン…</div>
                                            <span class="post-cat-item-date">2023/02/01 - 2023/03/01</span>
                                        </div>
                                    </div>
                                    <div class="post-cat-item">
                                        <div class="post-cat-item-body">
                                            <img src="{{ asset('img/box/box3.png') }}" class="post-cat-item-image" alt="3rdoor" />
                                            <div class="post-cat-item-title">神泉駅5分 アフタヌーン…</div>
                                            <span class="post-cat-item-date">2023/02/01 - 2023/03/01</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-1">
                                    このインフルエンサーにキャンペーンをPRしてもらいますか？<br/> スカウトの上限数変更はから行えます
                                </div>
                                <div class="text-2">
                                    <span>残りスカウト可能数 </span><span class="text-number">  2</span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">戻る</button>
                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-check"></i> スカウトする</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
