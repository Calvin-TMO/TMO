<p>You recently requested a new password for your account on Calvin Tutoring Management System.</p>
To reset your password, click on the link: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
<p>Thanks for using Calvin's Tutoring Management System!</p>
