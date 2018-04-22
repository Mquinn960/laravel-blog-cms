<div id="login-status">
@if (Auth::check())
    <p>Logged in: {{ Auth::user()->name }}. <a href="/admin/posts">Home</a> <a href="/logout">Logout</a></p>
@endif
</div>