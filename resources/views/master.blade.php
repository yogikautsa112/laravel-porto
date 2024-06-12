<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogi Kautsar A</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="website icon" href="images/Goy.__5_-removebg-preview.png" type="png">
</head>
<body>
    <script src="/js/index.js"></script>
<!-- Header NAV -->
    <div id="header">
        <div class="container">
            <nav>
                <div class="logo"> 
                    <h1><span>G</span>oy.</h1>
                </div>
                    <ul id="sideNav" >
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/portofolio">Portofolio</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
            </nav>
            <div>
                @yield('header')
            </div>
        </div>
    </div>

<!-- About -->
@yield('about')
<!-- end of About -->

<!-- portofolio -->
@yield('portofolio')
<!-- end of portofolio -->

@yield('contact')

<!-- Footer -->
    <div class="copyright">
        <p>Copyright &copy Goy. </p>
    </div>
<!-- End of Footer -->
</body>
</html>
