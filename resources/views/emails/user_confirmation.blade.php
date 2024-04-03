<x-mail::message>
# Thank you for your tentative reservation for SHOKUNIN
Hello,

Thank you for using our service.
Your reservation for the package has been provisionally completed.

Below are the details:

Package Name:{{ $data['packageName'] }}<br>
Date:{{ $data['date'] }}<br>
Number of Participants:{{ $data['number'] }}<br>
Request:{{ $data['body'] }}<br>


Within 24 hours, our SHOKUNIN concierge will propose a unique WOW experience plan for you.

If you have any questions or concerns, please feel free to contact us.

Thank you for your reservation.

Sincerely,
SHOKUNIN, Inc.
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
