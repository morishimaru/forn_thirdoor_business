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
                                <h5 class="modal-title" id="staticBackdropLabel">インフルエンサーが完了報告を提出しました。<br/> 内容を確認の上、承認作業を行ってください</h5>
                            </div>
                            <div class="modal-body">
                                <div class="text-3">
                                    2023/03/09 20:45 にインフルエンサーが完了報告を提出しました <br/>23/03/23（木）20:45まで対応がない場合、完了報告は自動承認となります
                                </div>
                                <div class="images">
                                    <img src="{{ asset('img/box/gallery1.png') }}" alt="3rdoor" />
                                    <img src="{{ asset('img/box/gallery1.png') }}" alt="3rdoor" />
                                    <img src="{{ asset('img/box/gallery1.png') }}" alt="3rdoor" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">戻る</button>
                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-check"></i> スカウトする</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-notify">
                    Page23
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modal-notify" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="text-4">承認が完了しました</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
