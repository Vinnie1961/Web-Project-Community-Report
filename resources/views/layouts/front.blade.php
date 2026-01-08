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

            {{-- @if (session()->has('user_id')) --}}
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/reports" class="nav-link">Reports</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/reportMaker" class="nav-link">Submit a Report</a>
                    </li>
                </ul>
            </div>
            {{-- <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn">Logout</button>
            </form> --}}

            {{-- @else --}}
            {{-- <span class="navbar-text">
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                </ul>
            </div> --}}


            {{-- @endif --}}
    </span>

    {{-- <span class="navbar-text"> --}}
            {{-- @if (session()->has('user_id'))  IF USER IS ADMIN --}}
            {{-- <a href="/reportManager" class="nav-link">Manage Reports</a> --}}
            
            {{-- @endif --}}
    {{-- </span> --}}
    
            
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    

    
    <script src = "{{ asset('js/bootstrap.bundle.min.js')}}">

</body>
</html>