@component('mail::message')
# Anda telah mendapatkan persetujuan dari admin


Email : {{ $user->email }}
<br> 
Password : 1234567

@component('mail::button', ['url' => ''])
Change Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
