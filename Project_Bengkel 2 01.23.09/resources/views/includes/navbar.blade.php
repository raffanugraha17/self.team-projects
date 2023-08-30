<nav>
    <ul>
        <div class="logo">
            <li><a href="/"><img width="130%"src="image/logo2.png" alt="lgo"></a></li>
        </div>
        <div class="menu">
            <li><a href="/">Home</a></li>
            @if (Route::has('login'))
                <div class="login-nav">
                    <li>
                    @auth
                        <a href="{{ url('/product') }}">Product</a>
                    </li> 
                    @else
                    <li>
                        <button onclick="myalert()"><a href="{{ url('/login') }}">Product</a></button>
                        <script>
                            function myalert(){
                                alert("Anda Harus Log In terlebih dahulu")
                            }
                        </script>
                        
                    </li>
                    @endauth
                </div>
            @endif
            
        </div>
        @if (Route::has('login'))
                <div class="login">
                    <li>
                    @auth
                        <a href="{{ url('/dashboard') }}">Profile</a>
                    </li> 
                    @else
                    <li>
                        <a href="{{ route('login') }}">Log in</a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                    </li>
                        @endif
                    @endauth
                </div>
            @endif
    </ul>
</nav>