<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <div class="row justify-content-between w-100">
            <div class="logo-container d-flex align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo/light/Asset%201.png') }}" alt="Time Now Logo" width="50">
                </a>
                <a href="{{ route('home') }}" class="logo-text-link">
                    <div class="logo-text mr-3">
                        <p class="m-0 arabic-text">الوقت الآن</p>
                        <p class="m-0 english-text">Time Now</p>
                    </div>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="search-container">
                    <form class="form-inline d-flex justify-content-center align-items-center w-100 search-form">
                        <input class="mr-sm-2" type="search" name="search" id="search" placeholder="Search for country or city"
                               aria-label="Search">
                        <button class="search-button p-2" type="submit">
                            <img src="{{ asset('images/icons/search.png') }}" alt="Search Icons">
                        </button>
                        <div class="search-results mr-sm-2" style="display: none">
                            <ul class="results-list">

                            </ul>
                        </div>
                    </form>
                </div>
                <div class="options-container">
                    <ul class="navbar-nav mr-auto options">
                        <li class="nav-item mr-2">
                            <div class="toggle-container d-flex">
                                <p class="option-text mr-3 mb-0" id="theme-text">Light Mode</p>
                                <input type="checkbox" id="switch" name="theme"/>
                                <label for="switch">Toggle</label>
                            </div>
                        </li>
                        <li class="nav-item dropdown toggle-container">
                            <a class="p-0 option-text d-flex align-items-center justify-content-center" href="#"
                               id="language" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                                <img src="{{ asset('images/icons/light_arrow.png') }}" alt="arrow" class="arrow">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languages">
                                <a class="dropdown-item arabic-text" href="#">العربية</a>
                                <a class="dropdown-item english-text" href="#">English</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
