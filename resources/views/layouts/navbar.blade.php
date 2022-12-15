<nav class="navbar navbar-expand-lg">
    <div class="container-fluid col-lg-11 d-flex justify-content-between">

        <!-- left side -->
        <div class="col-lg-5">
            <div class="my-navbar-brand d-inline-block" data-text="HORIZONS">HORIZONS</div>
        </div>

        <!-- collapsed nav button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- right side -->
        <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
            <ul class="navbar-nav col-lg-6 d-flex justify-content-around">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">ABOUT</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="/news">NEWS</a>
                </li> --}}

            </ul>

            
            <ul class="navbar-nav d-flex justify-content-around col-lg-4">

                @auth
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            WISHLIST
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="font-size: 1.2rem;">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}">Profile</a></li>
                            <li>
                                <a href="/logout" class="dropdown-item "><i class="bi bi-box-arrow-right"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/register" class="nav-link">
                            REGISTER
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">
                            LOGIN
                        </a>
                    </li>
                @endauth

            </ul>

        </div>

    </div>
</nav>