@component('mail::message')

{!!$campaign['body']!!}

@component('mail::button', ['url' => $campaign['page']])
{{$campaign['btn_text']}}
@endcomponent

<br>
<p style="font-weight: 600; font-size: 18px;">PS: If you need any help or facing any issue, please create support ticket at support@mobinft.co.</p>
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
