<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv= "X-UA-Compatible" content="ie=edge">   ?  -->
    <title>Community Report</title>
    <link href = "{{ asset('css/bootstrap.min.css')}}" rel="stylesheet"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3cc132;"> 
        <div class="container">
            <a class="navbar-brand" href="/"> CommunityReport</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="narbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-tonggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    {{-- <li class="navbar-item">
                        <a href="/about" class="nav-link">About us</a>
                    </li> --}}
                    <li class="navbar-item">
                        <a href="/reports" class="nav-link">Reports</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/reportMaker" class="nav-link">Submit a Report</a>
                    </li>

                    
                    
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <span class="navbar-text">
            @if (session()->has('user_id'))
            <form action="{{route('demo.logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn">Logout</button>
            </form>

            <li class="navbar-item">
                <a href="/demo/profile" class="nav-link">Profile</a>
            </li>
            <li class="navbar-item">
                <a href="/demo/dashboard" class="nav-link">Dashboard</a>
            </li>
            
            @endif
    </span>
    
    <script src = "{{ asset('js/bootstrap.bundle.min.js')}}">

</body>
</html>