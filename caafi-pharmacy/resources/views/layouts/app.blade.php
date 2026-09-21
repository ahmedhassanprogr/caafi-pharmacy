<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Caafi Pharmacy')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>

<body>

    <header>
        <div class="container">
            
            <nav>
                <ul class="nav">
                
                    <li class="nav-item"><a class="nav-link" href="{{ route('medicines.index') }}">Medicines</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('medicines.create') }}">Add Medicine</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('auth.showLoginForm') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('auth.showRegisterForm') }}">Register</a></li>

                    

                </ul>
                @guest
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                @endguest
            </nav>
        </div>
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Caafi Pharmacy</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>