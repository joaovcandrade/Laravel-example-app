<html>
<head>
    <title>Blog</title>
</head>
<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <h1>Blog do João</h1>
    <div>
        @yield('content')
    </div>
</body>
</html>


