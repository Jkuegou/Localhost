{{-- <nav class="-mx-3 flex flex-1 justify-center"> --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-warning text-light sticky-top ">
    <div class="container navbar-dark ">
     <div class="collapse navbar-collapse" id="navbarNav">
      {{-- <p class="text-light">My portfolio</p> --}}
      <img src="{{ asset('images/logo.jpg') }}" alt="Image" style="height: 80px;">
                  {{-- <button class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarNav"
                  aria-controls="#navbarNav"
                  aria-expanded="false"
                  aria-label="toggle navigation"
                  ><span class="navbar-toggler-icon"></span>
              </button> --}}
             
                <ul class="navbar-nav ms-auto text-white">
  
                <li class="nav-item">
      @auth
          <a
              href="{{ url('/dashboard') }}"
              class="nav-link"
              {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
          >
              Dashboard
          </a> </li>
          <li class="nav-item">
      @else
          <a
              href="{{ route('login') }}"
              class="nav-link text-light"
              {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
          >
              Login
          </a> </li>
  <li class="nav-item">
          @if (Route::has('register'))
              <a
                  href="{{ route('register') }}"
                  class="nav-link"
                  {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
              >
                  Register
              </a> </li>
          @endif
      @endauth
  {{-- </nav> --}}
  
         
              <!-- <div class="navbar-brand"> -->
               
    
                
                      <li class="nav-item">
                          <a href="#" class="nav-link">About</a>
                      </li>
                      <li class="nav-item">
                          <a href="#projects" class="nav-link">Project</a>
                      </li>
                      <li class="nav-item">
                          <a href="#contact" class="nav-link">Contact</a>
                      </li>
  
                  </ul>
              </div>
              </div>
          </div>
  
      </nav>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}