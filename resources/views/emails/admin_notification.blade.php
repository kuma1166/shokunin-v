<x-mail::message>
新しい仮予約が入りました。<br><br>
注文者には仮予約完了のメールが送信されています。<br><br>
24時間以内に注文者へ連絡して下さい。<br><br>
以下に予約の詳細をお知らせします。<br>

=================================================<br><br>
パッケージ名：{{ $data['packageName']  }}<br><br>
大人料金：{{ $data['adultPrice'] }} JPY<br><br>
子供料金：{{ $data['childPrice'] }} JPY<br><br>
説明：<br>{{ $data['description'] }}<br><br>
プラン：<br>{!! nl2br(e($data['plan'])) !!}<br><br>
寿司職人：{{ $data['sushiArtisanName'] }}<br><br>
日付：{{ $data['date'] }}<br><br>
参加人数：{{ $data['number'] }}<br><br>
会社：{{ $data['company'] ?? 'N/A' }}<br><br>
お名前：{{ $data['FirstName'] }} {{ $data['LastName'] }}<br><br>
電話番号：{{ $data['phone'] ?? 'N/A' }}<br><br>
電子メールアドレス：{{ $data['email'] }}<br><br>
アレルギー：{{ $data['allergy'] ?? 'N/A' }}<br><br>
要望など：{{ $data['body'] ?? 'N/A' }}<br><br>
=================================================<br>

イベントに関する詳細や必要な対応事項があれば、適切に対応をお願いします。<br><br>
ご確認の程、よろしくお願いいたします。<br>


</x-mail::message>
