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
                </div>

                <div id="sidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-chevron-right"></i></a>
                    <div class="nav-info">
                        <div class="row">
                            <div class="col-2 nav-info-left">
                                <img src="{{ asset('img/box/avatar1.png') }}" class="nav-info-img" alt="3rdoor" />
                            </div>
                            <div class="col-10 nav-info-right">
                                <h3>coco/大食いモデル</h3>
                                <p><span>性別：女性</span><span>最終ログイン：1 時間前</span></p>
                                <p>165㎝45㎏　ファッションモデル　いつも笑顔＆ポジティブ！フォロワーさんは大切な支え♡いつも感謝！ 興味＆関心→食べるの大好き/イメージモデル/アンバサダー/グルメ/おしゃれ/ゲーム/ペット/かわいい/インリア/ダイエット/美容/北海道出身→東京在住/モデル以外のお仕事→歌/音楽制作/デザイン/イラスト制作ができます！</p>
                            </div>
                        </div>
                        <div class="arrow-up"></div>
                        <div class="introduce">
                            フォロワーの質、コメント数には自信があります。
                        </div>
                    </div>
                    <div class="nav-body">
                        <div class="header">
                            フォロワーデータ
                        </div>
                        <div class="progress">
                            <div class="progress-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                            <div class="progress-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                        </div>
                        <div class="list-progress-detail">
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 70%">16 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 80%">18 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 90%">22 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 95%">23 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 40%">11 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 10%">3 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 9%">2 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                            <div class="row progress-item">
                                <div class="col-2 progress-info"><span class="progress-number" style="opacity: 8%">1 %</span> <span class="progress-label">18-20歳</span></div>
                                <div class="col-10 progress-detail">
                                    <div class="progress-detail-left-bar" style="width: 25%">25<span class="percent"> %</span></div>
                                    <div class="progress-detail-right-bar" style="width: 75%">75<span class="percent"> %</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="statistic">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tiktok-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        <span>  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.867 33.867" id="tiktok"><path style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill="#ff005d" d="m23.293 2.08-5.119.002v21.132a4.465 4.465 0 0 1-2.767 4.138 4.463 4.463 0 0 1-4.88-.971 4.466 4.466 0 0 1-.972-4.883 4.463 4.463 0 0 1 4.138-2.764h1.656v-5.12h-1.656a9.614 9.614 0 0 0-8.867 5.927A9.613 9.613 0 0 0 6.906 30a9.614 9.614 0 0 0 10.461 2.081 9.613 9.613 0 0 0 5.926-8.868V11.497c1.393.83 3.04 1.44 5.064 1.44h2.559V7.815h-2.559c-2.878 0-3.659-1.171-4.342-2.657-.683-1.485-.722-3.078-.722-3.078Z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="fill markers stroke"></path><path style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill="#00e0ff" d="m22.269 1.057-5.119.001V22.19a4.465 4.465 0 0 1-2.767 4.138 4.463 4.463 0 0 1-4.88-.971c-1.287-1.286-2.18-3.202-1.484-4.883.696-1.68 2.86-3.384 4.65-3.062l1.656.298v-5.12h-1.656a9.614 9.614 0 0 0-8.867 5.927 9.613 9.613 0 0 0 2.08 10.46c2.74 2.74 6.367 2.956 9.947 1.473 3.58-1.483 5.422-4.763 5.598-8.634l.561-12.372c1.394.83 3.322 1.85 5.329 2.121l2.575.347-.81-2.536.81-.997V6.792h-2.559c-2.878 0-3.659-1.171-4.342-2.657-.683-1.484-.722-3.078-.722-3.078Z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="fill markers stroke"></path><path style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" fill="#59586e" d="M85.023 9.996 70.82 10v79.87c0 6.875-4.104 13.009-10.457 15.64a16.868 16.868 0 0 1-18.447-3.672 17.018 17.018 0 0 1-2.613-3.385 17.02 17.02 0 0 1-3.387-2.615 16.88 16.88 0 0 1-3.672-18.455 16.868 16.868 0 0 1 15.64-10.447h6.257V53.588h-.256c-14.647 0-27.91 8.867-33.516 22.398-5.057 12.21-3.017 26.14 5.037 36.354 10.215 8.059 24.151 10.103 36.364 5.045 13.531-5.605 22.396-18.87 22.396-33.516V39.582c5.267 3.138 11.488 5.441 19.14 5.441h9.67V31.67h-3.67c-9.288 0-12.793-3.23-15.228-7.668-3.79-1.786-5.56-4.844-7.183-8.373-.884-1.92-1.467-3.874-1.872-5.633z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="fill markers stroke" transform="scale(.26458)"></path></svg></span><br>
                                        <span class="nouse">NO USED</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instagram-tab" data-bs-toggle="tab" data-bs-target="#instagram" type="button" role="tab" aria-controls="instagram" aria-selected="false">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 102 102" id="instagram"><defs><radialGradient id="a" cx="6.601" cy="99.766" r="129.502" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#fa8f21"></stop><stop offset=".78" stop-color="#d82d7e"></stop></radialGradient><radialGradient id="b" cx="70.652" cy="96.49" r="113.963" gradientUnits="userSpaceOnUse"><stop offset=".64" stop-color="#8c3aaa" stop-opacity="0"></stop><stop offset="1" stop-color="#8c3aaa"></stop></radialGradient></defs><path fill="url(#a)" d="M25.865,101.639A34.341,34.341,0,0,1,14.312,99.5a19.329,19.329,0,0,1-7.154-4.653A19.181,19.181,0,0,1,2.5,87.694,34.341,34.341,0,0,1,.364,76.142C.061,69.584,0,67.617,0,51s.067-18.577.361-25.14A34.534,34.534,0,0,1,2.5,14.312,19.4,19.4,0,0,1,7.154,7.154,19.206,19.206,0,0,1,14.309,2.5,34.341,34.341,0,0,1,25.862.361C32.422.061,34.392,0,51,0s18.577.067,25.14.361A34.534,34.534,0,0,1,87.691,2.5a19.254,19.254,0,0,1,7.154,4.653A19.267,19.267,0,0,1,99.5,14.309a34.341,34.341,0,0,1,2.14,11.553c.3,6.563.361,8.528.361,25.14s-.061,18.577-.361,25.14A34.5,34.5,0,0,1,99.5,87.694,20.6,20.6,0,0,1,87.691,99.5a34.342,34.342,0,0,1-11.553,2.14c-6.557.3-8.528.361-25.14.361s-18.577-.058-25.134-.361" data-name="Path 16"></path><path fill="url(#b)" d="M25.865,101.639A34.341,34.341,0,0,1,14.312,99.5a19.329,19.329,0,0,1-7.154-4.653A19.181,19.181,0,0,1,2.5,87.694,34.341,34.341,0,0,1,.364,76.142C.061,69.584,0,67.617,0,51s.067-18.577.361-25.14A34.534,34.534,0,0,1,2.5,14.312,19.4,19.4,0,0,1,7.154,7.154,19.206,19.206,0,0,1,14.309,2.5,34.341,34.341,0,0,1,25.862.361C32.422.061,34.392,0,51,0s18.577.067,25.14.361A34.534,34.534,0,0,1,87.691,2.5a19.254,19.254,0,0,1,7.154,4.653A19.267,19.267,0,0,1,99.5,14.309a34.341,34.341,0,0,1,2.14,11.553c.3,6.563.361,8.528.361,25.14s-.061,18.577-.361,25.14A34.5,34.5,0,0,1,99.5,87.694,20.6,20.6,0,0,1,87.691,99.5a34.342,34.342,0,0,1-11.553,2.14c-6.557.3-8.528.361-25.14.361s-18.577-.058-25.134-.361" data-name="Path 17"></path><path fill="#fff" d="M461.114,477.413a12.631,12.631,0,1,1,12.629,12.632,12.631,12.631,0,0,1-12.629-12.632m-6.829,0a19.458,19.458,0,1,0,19.458-19.458,19.457,19.457,0,0,0-19.458,19.458m35.139-20.229a4.547,4.547,0,1,0,4.549-4.545h0a4.549,4.549,0,0,0-4.547,4.545m-30.99,51.074a20.943,20.943,0,0,1-7.037-1.3,12.547,12.547,0,0,1-7.193-7.19,20.923,20.923,0,0,1-1.3-7.037c-.184-3.994-.22-5.194-.22-15.313s.04-11.316.22-15.314a21.082,21.082,0,0,1,1.3-7.037,12.54,12.54,0,0,1,7.193-7.193,20.924,20.924,0,0,1,7.037-1.3c3.994-.184,5.194-.22,15.309-.22s11.316.039,15.314.221a21.082,21.082,0,0,1,7.037,1.3,12.541,12.541,0,0,1,7.193,7.193,20.926,20.926,0,0,1,1.3,7.037c.184,4,.22,5.194.22,15.314s-.037,11.316-.22,15.314a21.023,21.023,0,0,1-1.3,7.037,12.547,12.547,0,0,1-7.193,7.19,20.925,20.925,0,0,1-7.037,1.3c-3.994.184-5.194.22-15.314.22s-11.316-.037-15.309-.22m-.314-68.509a27.786,27.786,0,0,0-9.2,1.76,19.373,19.373,0,0,0-11.083,11.083,27.794,27.794,0,0,0-1.76,9.2c-.187,4.04-.229,5.332-.229,15.623s.043,11.582.229,15.623a27.793,27.793,0,0,0,1.76,9.2,19.374,19.374,0,0,0,11.083,11.083,27.813,27.813,0,0,0,9.2,1.76c4.042.184,5.332.229,15.623.229s11.582-.043,15.623-.229a27.8,27.8,0,0,0,9.2-1.76,19.374,19.374,0,0,0,11.083-11.083,27.716,27.716,0,0,0,1.76-9.2c.184-4.043.226-5.332.226-15.623s-.043-11.582-.226-15.623a27.786,27.786,0,0,0-1.76-9.2,19.379,19.379,0,0,0-11.08-11.083,27.748,27.748,0,0,0-9.2-1.76c-4.041-.185-5.332-.229-15.621-.229s-11.583.043-15.626.229" data-name="Path 18" transform="translate(-422.637 -426.196)"></path></svg></span><br>
                                        <div class="total">2,247</div>
                                        <div class="money">80,000 円</div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="youtube-tab" data-bs-toggle="tab" data-bs-target="#youtube" type="button" role="tab" aria-controls="youtube" aria-selected="false">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="5.368 13.434 53.9 37.855" id="youtube"><path fill="#FFF" d="M41.272 31.81c-4.942-2.641-9.674-5.069-14.511-7.604v15.165c5.09-2.767 10.455-5.301 14.532-7.561h-.021z"></path><path fill="#E8E0E0" d="M41.272 31.81c-4.942-2.641-14.511-7.604-14.511-7.604l12.758 8.575c.001 0-2.324 1.289 1.753-.971z"></path><path fill="#CD201F" d="M27.691 51.242c-10.265-.189-13.771-.359-15.926-.803-1.458-.295-2.725-.95-3.654-1.9-.718-.719-1.289-1.816-1.732-3.338-.38-1.268-.528-2.323-.739-4.9-.323-5.816-.4-10.571 0-15.884.33-2.934.49-6.417 2.682-8.449 1.035-.951 2.239-1.563 3.591-1.816 2.112-.401 11.11-.718 20.425-.718 9.294 0 18.312.317 20.426.718 1.689.317 3.273 1.267 4.203 2.492 2 3.146 2.035 7.058 2.238 10.118.084 1.458.084 9.737 0 11.195-.316 4.836-.57 6.547-1.288 8.321-.444 1.12-.823 1.711-1.479 2.366a7.085 7.085 0 0 1-3.76 1.922c-8.883.668-16.426.813-24.987.676zM41.294 31.81c-4.942-2.641-9.674-5.09-14.511-7.625v15.166c5.09-2.767 10.456-5.302 14.532-7.562l-.021.021z"></path></svg></span><br>
                                        <div class="total">2,247</div>
                                        <div class="money">80,000 円</div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="twitter-tab" data-bs-toggle="tab" data-bs-target="#youtube" type="button" role="tab" aria-controls="youtube" aria-selected="false">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="twitter"><path fill="#03A9F4" d="M16 3.539a6.839 6.839 0 0 1-1.89.518 3.262 3.262 0 0 0 1.443-1.813 6.555 6.555 0 0 1-2.08.794 3.28 3.28 0 0 0-5.674 2.243c0 .26.022.51.076.748a9.284 9.284 0 0 1-6.761-3.431 3.285 3.285 0 0 0 1.008 4.384A3.24 3.24 0 0 1 .64 6.578v.036a3.295 3.295 0 0 0 2.628 3.223 3.274 3.274 0 0 1-.86.108 2.9 2.9 0 0 1-.621-.056 3.311 3.311 0 0 0 3.065 2.285 6.59 6.59 0 0 1-4.067 1.399c-.269 0-.527-.012-.785-.045A9.234 9.234 0 0 0 5.032 15c6.036 0 9.336-5 9.336-9.334 0-.145-.005-.285-.012-.424A6.544 6.544 0 0 0 16 3.539z"></path></svg></span><br>
                                        <div class="total">2,247</div>
                                        <div class="money">80,000 円</div>
                                        <div class="triangle"></div>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">

                                </div>
                                <div class="tab-pane fade" id="instagram" role="tabpanel" aria-labelledby="profile-tab">

                                </div>
                                <div class="tab-pane fade" id="youtube" role="tabpanel" aria-labelledby="contact-tab">

                                </div>
                                <div class="tab-pane fade show active" id="twitter" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="list-box">
                                        <div class="box">
                                            <div class="text-label">プロフィール閲覧数</div>
                                            <div class="text-number">10,637</div>
                                            <div class="text-des">昨日のデータを参照</div>
                                        </div>
                                        <div class="box">
                                            <div class="text-label">プロフィール閲覧数</div>
                                            <div class="text-number">10,637</div>
                                            <div class="text-des">昨日のデータを参照</div>
                                        </div>
                                        <div class="box">
                                            <div class="text-label">プロフィール閲覧数</div>
                                            <div class="text-number">10,637</div>
                                            <div class="text-des">昨日のデータを参照</div>
                                        </div>
                                    </div>
                                    <div class="list-box">
                                        <div class="box">
                                            <div class="text-label">プロフィール閲覧数</div>
                                            <div class="text-number">10,637</div>
                                            <div class="text-des">昨日のデータを参照</div>
                                        </div>
                                        <div class="box">
                                            <div class="text-label">プロフィール閲覧数</div>
                                            <div class="text-number">10,637</div>
                                            <div class="text-des">昨日のデータを参照</div>
                                        </div>
                                        <div class="box">
                                            <div class="text-label">プロフィール閲覧数</div>
                                            <div class="text-number">10,637</div>
                                            <div class="text-des">昨日のデータを参照</div>
                                        </div>
                                    </div>
                                    <div class="list-box">
                                        <div class="box">
                                            <div class="text-label">プロフィール閲覧数</div>
                                            <div class="text-number">10,637</div>
                                            <div class="text-des">昨日のデータを参照</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="marks">
                        <i class="fa-sharp fa-solid fa-thumbtack"></i>
                    </div>

                </div>
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
            </div>
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "915px";
        }
        document.getElementById("sidenav").style.width = "915px";
        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
        }
    </script>
@endsection
