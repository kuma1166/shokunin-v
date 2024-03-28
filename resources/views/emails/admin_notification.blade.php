<x-mail::message>
# 新しい予約が入りました

以下の内容で予約がありました。

確認して下さい

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
