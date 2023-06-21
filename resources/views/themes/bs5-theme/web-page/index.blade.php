<div class="container">
    <header class="py-3 row">
        <div class="col-9"><h1><img src="{{asset('admin-assets/img/icon.png')}}" alt=""> SB Pedia</h1></div>
        <div class="col-3 text-center pt-4">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-3 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="pull-right btn btn-sm btn-primary">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="pull-right btn btn-sm btn-primary">Registration</a>
                        @endif
                    @endauth
                </div>
            @endif        
        </div>
    </header>
    <div class="content" style="min-height:60vh">
        <div class="col-8 mx-auto card text-center text-success py-5 my-4 display-4">
            Social Business Pedia
        </div>
    </div>
    <div class="footer">
        <p>Copyright &copy; 2023</p>
    </div>
</div>