@component('mail::message')

Dear Student,

Welcome to CS Research website. Your account has been created successfully. For your reference, your account can be accessed with the following credentials:

Website URL: http://localhost:3000/login

@component('mail::panel')
<strong>Username: {{$userid}}</strong><br>
<strong>Password: {{$password}}</strong>
@endcomponent

@component('mail::button', ['url' => 'http://localhost:3000/login'])
Login
@endcomponent

The password is auto-generated. We suggest you should change it at your first login. If you have any query or need further assistance, please send an email to research@cs.xxxx.edu and we will be happy to assist.

Thank you for joining CS Research website.

Warm Regards,
<br>
CS Research Management Team

http://localhost:3000/login
@endcomponent
