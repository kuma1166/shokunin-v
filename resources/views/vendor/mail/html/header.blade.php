@props(['url'])
<tr>
<td class="header">
{{-- <a href="{{ route('top') }}" style="display: inline-block;"> --}}
@if (trim($slot) === 'Laravel')
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
{{-- <img src="{{ url('/storage/newlogo.png') }}" class="logo" alt="Logo"> --}}
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
