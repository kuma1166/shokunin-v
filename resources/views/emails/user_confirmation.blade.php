<x-mail::message>
# ご予約ありがとうございます

以下の内容で仮予約を受け付けました。
最終的な出張内容や価格はコンシェルジェからご提案させていただきます。
{{--
- パッケージ名: {{ $data['packageName'] }}
- 大人の価格: {{ $data['adultPrice'] }} JPY
- 子供の価格: {{ $data['childPrice'] }} JPY
- 日付: {{ $data['date'] }}
- 人数: {{ $data['number'] }} --}}

{{-- - パッケージ名: {{ $packageName }}
- 大人の価格: {{ $adultPrice }} JPY
- 子供の価格: {{ $childPrice }} JPY
- 日付: {{ $date }}
- 人数: {{ $number }} --}}

{{-- <x-mail::button :url="">
予約詳細を見る
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
