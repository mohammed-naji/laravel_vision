<form method="POST" action="{{ route('formSubmit') }}">
    @csrf
    <input type="text" name="user" placeholder="Username" />
    <input type="password" name="pass" placeholder="Password" />
    <button>Login</button>
</form>
