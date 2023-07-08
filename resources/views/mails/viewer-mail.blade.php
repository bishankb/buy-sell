@component('mail::message')
# Dear Manager,

<h4>You got new message from <strong>{{ $viewerData['name'] }}</strong> at {{ $viewerData['email'] }}</h4>


@component('mail::panel')
<p><strong>Name:</strong> {{ $viewerData['name'] }}</p>
<p><strong>Email:</strong> {{ $viewerData['email'] }}</p>
<p><strong>Phone Number:</strong> {{ $viewerData['phone'] }}</p>
<p><strong>Subject:</strong> {{ $viewerData['subject'] }}</p>
<p><strong>Message:</strong> {{ $viewerData['message'] }}</p>
@endcomponent

<strong>Please review the mail and reply at </strong>{{ $viewerData['email'] }}

@endcomponent
