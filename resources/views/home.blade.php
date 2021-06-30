<h1>Home page</h1>

<a href="{{ url('/') }}">Back to Welcome Page</a>

{{-- <a href="{{ url('/home') }}">Home</a> --}}
<a href="{{ route('homepageurl') }}">Home</a>
<a href="{{ route('aboutpageurl') }}">About</a>
<a href="{{ route('contactpageurl') }}">Contact</a>
<a href="{{ route('servicespageurl') }}">Services</a>
<a href="{{ route('teampageurl') }}">Team</a>
