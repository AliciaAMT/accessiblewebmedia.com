@component('mail::message')
# New Quote Request!

You have a contact request.

Name: {{ $data['name']}}

Email: {{ $data['email']}}

Phone: {{ $data['phone']}}

Message: {{ $data['message']}}

Add this contact to Google Contacts and Paypal Address Book

@component('mail::button', ['url' => 'https://paypal.com'])
PayPal
@endcomponent

@component('mail::button', ['url' => 'https://contacts.google.com/'])
Google Contacts
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
