@extends('layouts.pc')

@section('content')
    <div class="home">
        @include('pc.includes.navbars')
        <div class="right-column">
            <div class="searchbars">
                <div class="d-flex align-items-center">
                    <div class="back"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="title">キャンペーン一覧</div>
                </div>
                <div class="checkboxs">
                    <div class="total">全 5 件表示：</div>
                    <div class="item"><input type="checkbox"/>掲載中</div>
                    <div class="item"><input type="checkbox"/>停止中</div>
                    <div class="item"><input type="checkbox"/>下書き</div>
                    <div class="item"><input type="checkbox"/>審査中</div>
                    <div class="item"><input type="checkbox"/>終了</div>
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input class="form-control" type="search" placeholder="アフタヌーンティ" />
                    </div>
                </div>
            </div>
            <div class="content">
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
                    <div class="marks">
                        <div class="triangle-wrap"><div class="triangle"></div></div>
                        <div class="info">
                            <div class="total">+99</div>
                            <div class="label">掲載中</div>
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
                    <div class="marks">
                        <div class="triangle-wrap"><div class="triangle triangle-yellow"></div></div>
                        <div class="info">
                            <div class="total">12</div>
                            <div class="label">停止中</div>
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
                    <div class="marks">
                        <div class="triangle-wrap"><div class="triangle triangle-red"></div></div>
                        <div class="info">
                            <div class="total">0</div>
                            <div class="label">下書き</div>
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
                    <div class="marks">
                        <div class="triangle-wrap"><div class="triangle triangle-green"></div></div>
                        <div class="info">
                            <div class="total">0</div>
                            <div class="label">審査中</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-hide">
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
                    <div class="marks">
                        <div class="triangle-wrap"><div class="triangle triangle-black"></div></div>
                        <div class="info">
                            <div class="total">0</div>
                            <div class="label">終了</div>
                        </div>
                    </div>
                </div>
                <div class="card card-empty">
                    <div>
                        現在適用中のプランだと残り6キャンペーンの作成が可能です<br/>
                        キャンペーンの上限数変更は から行えます
                    </div>
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa-sharp fa-solid fa-plus"></i>キャンペーン登録</a>
                </div>
            </div>
        </div>
    </div>
@endsection
