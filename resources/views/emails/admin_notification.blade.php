<x-mail::message>
新しい仮予約が入りました。<br>
注文者には仮予約完了のメールが送信されています。<br>
24時間以内に注文者へ連絡して下さい。<br>
以下に予約の詳細をお知らせします。<br>

=================================================<br>
パッケージ名：{{ $data['packageName']  }}<br>
大人料金：{{ $data['adultPrice'] }}<br>
子供料金：{{ $data['childPrice'] }}<br>
説明：{{ $data['description'] }}<br>
プラン：{!! nl2br(e($data['plan'])) !!}<br>
寿司職人：{{ $data['sushiArtisanName'] }}<br>
日付：{{ $data['date'] }}<br>
参加人数：{{ $data['number'] }}<br>
会社：{{ $data['company'] ?? 'N/A' }}<br>
お名前：{{ $data['FirstName'] }} {{ $data['LastName'] }}<br>
電話番号：{{ $data['phone'] ?? 'N/A' }}<br>
電子メールアドレス：{{ $data['email'] }}<br>
アレルギー：{{ $data['allergy'] ?? 'N/A' }}<br>
要望など：{{ $data['body'] ?? 'N/A' }}<br>
=================================================<br>

イベントに関する詳細や必要な対応事項があれば、適切に対応をお願いします。<br>
ご確認の程、よろしくお願いいたします。<br>


{{-- - パッケージ名: {{ $packageName }}
- 大人の価格: {{ $adultPrice }} JPY
- 子供の価格: {{ $childPrice }} JPY
- 日付: {{ $date }}
- 人数: {{ $number }}
- お名前: {{ $data['FirstName'] }} {{ $data['LastName'] }}
- 電話番号: {{ $data['phone'] ?? 'N/A' }}
- メールアドレス: {{ $data['email'] }}
- アレルギー情報: {{ $data['allergy'] ?? 'N/A' }}
- その他要望: {{ $data['body'] ?? 'N/A' }} --}}


{{--
- パッケージ名: {{ $data['packageName'] }}
- 大人の価格: {{ $data['adultPrice'] }} JPY
- 子供の価格: {{ $data['childPrice'] }} JPY
- 日付: {{ $data['date'] }}
- 人数: {{ $data['number'] }}
- お名前: {{ $data['FirstName'] }} {{ $data['LastName'] }}
- 電話番号: {{ $data['phone'] ?? 'N/A' }}
- メールアドレス: {{ $data['email'] }}
- アレルギー情報: {{ $data['allergy'] ?? 'N/A' }}
- その他要望: {{ $data['body'] ?? 'N/A' }} --}}

</x-mail::message>


{{-- @endcomponent --}}

{{-- <x-mail::message>
# ご予約ありがとうございます

以下の内容でご予約を受け付けました。

- パッケージ名: {{ $data['packageName'] }}
- 大人の価格: {{ $data['adultPrice'] }} JPY
- 子供の価格: {{ $data['childPrice'] }} JPY
- 日付: {{ $data['date'] }}
- 人数: {{ $data['number'] }}

<x-mail::button :url="https://lab16-12-kuri.sakura.ne.jp/shokunin/top">
予約詳細を見る
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
