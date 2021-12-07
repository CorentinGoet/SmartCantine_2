<!DOCTYPE html>
<!-- structure of project files -->
<head>
    <title>SmartCantine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="header">
        <h2>
            SmartCantine
        </h2>
        <ul><!--c'est unorderd list -->
            <li> <a href="test 1.html" target="_blank" title="go to test">Home</a> </li>
            <li> <a href="About.html" target="_blank" title="go to About">About</a> </li>
            <li><a href="Services.html" target="_blank" title="go to About">Services</a> </li>
            <li> <a href="Contact Us.html" target="_blank" title="go to About">Contact Us</a> </li>
        </ul>
    </div>
    <div>
        @yield('smart_content')
    </div>
    <footer>
        This is the footer !
    </footer>
</body>

