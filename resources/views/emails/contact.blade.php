<x-mail::message>
# تم الإتصال من{{ $name}}

{{ $mobile}}

{{ $title}}

{{ $content }}

<x-mail::button :url="'http://localhost:81/contact'">
اتصل بنا 
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
