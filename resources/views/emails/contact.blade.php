<x-mail::message>

<h3> الأسم: {{$name}} </h3>

<h4> {{$email}} الإيميل: </h4>

<h5>  رقم الهاتف: {{$mobile}} </h5>

<h5> الموضوع: {{$title}} </h5>

<p> {{$content}} </p>



{{-- <x-mail::button :url="''">
اتصل بنا 
</x-mail::button> --}}

وشكراً,<br>
{{-- {{ config('app.name') }} --}}
</x-mail::message>
