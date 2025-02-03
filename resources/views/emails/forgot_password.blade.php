@component('mail::message')
# Hello, {{ $user->name }}

Click the button below to reset your password.

@component('mail::button', ['url' => url('reset/' . $user->remember_token)])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
