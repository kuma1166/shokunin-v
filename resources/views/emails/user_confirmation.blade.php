<x-mail::message>
Hello,<br><br>
Thank you for using our service. Your reservation for the package has been provisionally completed.<br><br>
Below are the details:

=================================================<br><br>
Package Name：{{ $data['packageName']  }}<br><br>
Adult Price：{{ $data['adultPrice'] }} JPY<br><br>
Child Price：{{ $data['childPrice'] }} JPY<br><br>
Description：<br>{{ $data['description'] }}<br><br>
Plan：<br>{!! nl2br(e($data['plan'])) !!}<br><br>
Sushi Chef：{{ $data['sushiArtisanName'] }}<br><br>
Date：{{ $data['date'] }}<br><br>
Number of participants：{{ $data['number'] }}<br><br>
Company：{{ $data['company'] ?? 'N/A'  }}<br><br>
Your name：{{ $data['FirstName'] }} {{ $data['LastName'] }}<br><br>
Phone number：{{ $data['phone'] ?? 'N/A' }}<br><br>
E-mail address：{{ $data['email'] }}<br><br>
Allergy：{{ $data['allergy'] ?? 'N/A' }}<br><br>
Requests, etc.：{{ $data['body'] ?? 'N/A'  }}<br><br>
=================================================<br>

Within 24 hours, our SHOKUNIN concierge will propose a unique WOW experience plan for you.<br><br>
If you have any questions or concerns, please feel free to contact us.<br><br>
Thank you for your reservation.<br><br>
Sincerely, SHOKUNIN, Inc.<br>


{{--<x-mail::button :url="">
予約詳細を見る
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} --}}
</x-mail::message>
