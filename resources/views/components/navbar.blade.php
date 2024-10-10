<!-- <nav class="navbar navbar-expand-lg navbar-light py-0" style="background-color: #f5f5f7;">
    <div class="container">
        <a class="navbar-brand mb-2 me-auto" href="#">Ordering System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- <nav class="navbar navbar-expand-lg navbar-light py-2" style="background-color: #f5f5f7;"> -->
    <!-- <div class="container">
        <a class="navbar-brand mb-2 me-auto" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Your Logo" width="30" height="30" class="d-inline-block align-text-top">
            <span class="brand-name ms-2 fw-bold">CANTEEN</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link ms-4 fw-bold text-uppercase" href="#">Ordering System</a>
                </li>
            </ul>

            <!-- Search Bar -->
            <!-- <form class="d-flex me-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search menu..." aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div> -->
<!-- </nav> --> 

    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <!-- Brand with Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Your Logo" width="30" height="30">
                <span class="brand-name ms-2">CANTEEN</span>
            </a>

            <!-- Search Form -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                
                <!-- Search Button with Icon -->
                <button class="btn btn-outline-success d-flex align-items-center" type="submit">
                    <i class="bi bi-search"></i> <!-- Bootstrap search icon -->
                    <span class="ms-1">Search</span>
                </button>
                
                <!-- Microphone Icon -->
                <a class="mic-icon ms-3" href="#">
                    <img src="{{ asset('img/mic.png') }}" alt="Mic Icon" width="50" height="50">
                </a>
            </form>
        </div>
    </nav>
