@extends('layouts.pc')

@section('content')
    <div class="modal position-static d-block" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">次回メンテナンスのお知らせ</h5>
                    <div class="modal-time">2023/02/01</div>
                </div>
                <div class="modal-body">
                    <p>
                        2023年05月26日にユーザビリティ向上及び関連サービスとの連携に伴う大型アップデートを実施いたします。<br/>
                        今回のアップデートにより、以下の機能が実装されます。
                    </p>
                    <p>&nbsp;</p>
                    <p>1. キャンペーン詳細にて期間毎の分析データの参照 </p>
                    <p>2. インフルエンサーとのマッチングアルゴリズムの向上 </p>
                    <p>3. PR バナー枠の有料販売 </p>
                    <p>4. 新規プラン 「 Stikey plan 」 の実装 ※ 詳細は特設サイトをご覧ください </p>
                    <p>5. アップデートに伴う特別ディスカウントの実施 </p>
                    <p>6. UI/UX の一部変更 </p>
                    <p>&nbsp;</p>
                    <p>
                        アップデートは12時間を予定していますが、状況によっては前後する場合がございます為、予めご了承ください。 <br/>
                        また、本アップデートにより一部機能に不具合が生じる場合がございます。<br/>
                        不具合を発見した場合、お問い合わせよりご連絡いただけますと幸いです。
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">閉じる</button>
                </div>
            </div>
        </div>
    </div>
@endsection
