
    Hello {{$name}}, your mail {{$email}} and your role is {{$role}} and password : password please reset it.
    <a href="{!! url('/profile/complete', ['token'=>$token]) !!}">
    Thanks,<br>

