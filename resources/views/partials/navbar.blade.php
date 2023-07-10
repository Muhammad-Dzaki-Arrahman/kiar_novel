<nav class="navbar navbar-expand-lg" style="background-color: darkslategray">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: #c9d39d">
        <img src="image/ml.png" alt="Kiar Blog Logo" width="30">
        Kiar Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ml-4 mr-4"> 
          <a class="nav-link {{ ($title == "Home" ? 'active' : '') }}" aria-current="page" style="color:#c9d39d" href="/home">Home</a>
            {{-- bcc985 bagus --}}
        </li>
          <li class="nav-item ml-4 mr-4">
            <a class="nav-link {{ ($title == "About" ? 'active' : '') }}" style="color:#c9d39d" href="/about">About Us</a>
          </li>
          <li class="nav-item ml-4 mr-4">
            <a class="nav-link {{ ($title == "Gallery" ? 'active' : '') }}" style="color:#c9d39d" href="/gallery">Gallery</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search Novels Here" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" style="color: #c9d39d">Search</button>
        </form>
      </div>
    </div>
  </nav>