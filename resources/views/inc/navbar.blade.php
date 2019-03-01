<nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-dark">
    <div class='container'>
        <a class="navbar-brand" href="/">Bakery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/location">Hours and Location</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/menus">Menus</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/shop">Shop</a>
                </li>


                {{-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> --}}

                <li>
                    
                </li>

            </ul>

            <ul class ='nav navbar-nav navbar-right'>
                <li class='nav-item'><a class='nav-link' href='/admin'>Admin Pannel</a></li>
                {{-- <li class='nav-item'><a  class='nav-link' href='/signup'>Signup</a></li> --}}
            </ul>

            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form> --}}

        </div>
    </div>
</nav>
