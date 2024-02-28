@component('mail::message')
# Good day

{{$contact['message']}}

Thanks,<br>
{{$contact['name']}}<br/>
{{$contact['phone']}}
@endcomponent
