<x-mail::message>
# Hello!

Thanks for being our customer. This is a test email.


<x-mail::button :url="''">
Visit Site
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
