<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'NIS')
<img src="{{asset('frontend/assets/images/zaman/pass.jpg')}}" class="logo" alt="NIS">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
