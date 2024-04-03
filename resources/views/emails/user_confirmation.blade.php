<x-mail::message>
Hello,<br>
Thank you for using our service. Your reservation for the package has been provisionally completed.<br>
Below are the details:<br>

=================================================<br>
Package Name：{{ $data['packageName']  }}<br>
Adult Price：{{ $data['adultPrice'] }}<br>
Child Price：{{ $data['childPrice'] }}<br>
Description：{{ $data['description'] }}<br>
Plan：{!! nl2br(e($data['plan'])) !!}<br>
Sushi Chef：{{ $data['sushiArtisanName'] }}<br>
Date：{{ $data['date'] }}<br>
Number of participants：{{ $data['number'] }}<br>
Company：{{ $data['company'] ?? 'N/A'  }}<<br>
Your name：{{ $data['FirstName'] }} {{ $data['LastName'] }}<br>
Phone number：{{ $data['phone'] ?? 'N/A' }}<br>
E-mail address：{{ $data['email'] }}<br>
Allergy：{{ $data['allergy'] ?? 'N/A' }}<br>
Requests, etc.：{{ $data['body'] ?? 'N/A'  }}<br>
=================================================<br>

Within 24 hours, our SHOKUNIN concierge will propose a unique WOW experience plan for you.<br>
If you have any questions or concerns, please feel free to contact us.<br>
Thank you for your reservation.<br>
Sincerely, SHOKUNIN, Inc.<br>


{{--<x-mail::button :url="">
予約詳細を見る
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} --}}
</x-mail::message>
