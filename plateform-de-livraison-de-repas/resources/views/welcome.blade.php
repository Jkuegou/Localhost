<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Styles -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('images') }}">
  <style>
    .btn-custom {
        position: relative;
        overflow: hidden;
        transition: background-color 0.4s ease-in-out, color 0.4s ease-in-out;
    }

    .btn-custom:hover {
        background-color: #ff4d4d; /* Rouge */
        color: white;
    }

    .btn-custom.green:hover {
        background-color: #28a745; /* Vert */
    }
</style>
</head>

<body style="padding: 10px;">

  {{-- <div class=" bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
      src="https://laravel.com/assets/img/welcome/background.svg" />
    <div
      class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
      --}}
      {{-- <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl"> --}}
        {{-- <header class="grid grid-cols-2 items-justify-conten gap-2 py-10 lg:grid-cols-3"> --}}

          @if (Route::has('login'))
        <livewire:welcome.navigation />
      @endif
          {{--
        </header> --}}
        <div class="container text-center">
          <section class="Accueil" >
            <div class="flex-container">
                <div><center>
                    <!-- Salut, bienvenue -->
                    <!-- Sur mon -->
                    <!-- Portfolio -->
                    <h1><div class="c1">Bienvenue sur votre site  </div></h1>
                    <h1><div class="c2" >De livraison de repas</div></h1>
                    <h1><div class="c3"  >Que Souhaitez-vous deguster aujourd'hui ? <br><a href="" style="color: rgb(232, 3, 3);"><center>clic</center></a></div></h1>
              
        </center>
            </div>
        <section>
          <section id="aboout" class="py-5">
            <div class="container text-center">
            <main>
              {{-- <main class="Accueil" >
                <div class="flex-container">
                    <div><center>
                        <!-- Salut, bienvenue -->
                        <!-- Sur mon -->
                        <!-- Portfolio -->
                        <h1><div class="c1">Tous vos travaux</div></h1>
                        <h1><div class="c2" >de developpement Web</div></h1>
                        <h1><div class="c3"  >et Mobile en un <br><a href="" style="color: rgb(232, 3, 3);"><center>clic</center></a></div></h1>
                  
            </center>
                </div> --}}
            </main>
          </section>
        
        <!-- Menu -->

        <section id="projects" class="py-5 bg-light">
          <header>  
          <strong>MENU</strong>
           
            <hr>
          </header>
          <div class="container mt-5">
            <div class="row">

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card">
                  <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" class="card-img-top"
                      alt="Card Image 1"></a>


                  {{-- <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card Image 1" /> --}}
                  <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">
                      This is a short description of the first card.
                    </p>
                    <center>
                      <a href="#" class="btn btn-primary" onclick="openForm()">Add</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="form-popup fs-10" id="myForm">
                <a href=""><img src="{{ asset('images/logo.jpg') }}" alt="Image" 
                    style="height: 400px;"></a>
                  
                  <aside class="containerQ">
                    <p>nom</p>
                    <p>price</p>
                    <div class="container mt-5">
                      <h2>Sélectionner la quantité</h2>
                  
                      <div class="d-flex align-items-center">
                        <button class="btn btn-custom btn-danger me-2 fs-3" onclick="decreaseQuantity()">-</button>
                          <input type="text" id="quantity" class="form-control text-center" value="1" readonly style="width: 50px;">
                          <button class="btn btn-custom btn-success ms-2 fs-3 green" onclick="increaseQuantity()">+</button>
                      </div>
                  
                  </div>
                  </aside>
              </div>

              
            </div>
          </div>
        </section>

        <!-- contact -->
        {{-- <section id="contact" class="py-5">
          <p class="text-center">--------------contact-------------</p>
        </section>

        <section> --}}

{{-- 
          <footer class="py-16 text-center text-sm text-black dark:text-white/70"> --}}
            <footer class="text-center py-4">
            <section id="contact" class="py-5">
              <p class="text-center" style="font-size: 200%;" >--------------Contactez-Nous------------- </p><br>
                  <a href="https://wa.me/1234567890" target="_blank" >
                      <i class="fa-brands fa-whatsapp" style="font-size: 50%;">-(+237)671316540</i>
                  </a><br>
                   <a href="https://wa.me/1234567890" style="font-size: 50%;">
                      <i class="fas fa-phone"  >-(+237)696151224</i >
                      </a>
                  <a href="https://www.facebook.com" target="_blank"  ><br>
                      <i class="fa-brands fa-facebook"  style="font-size: 50%;" >-facebook</i><br>
                      
                  </a>
                  <a href="https://www.instagram.com" target="_blank" >
                      <i class="fa-brands fa-instagram" style="font-size: 50%;" >-instagram</i><br>
                  </a>
                  <a href="https://twitter.com" target="_blank" >
                      <i class="fa-brands fa-twitter" style="font-size: 50%;"  >-twitter</i><br>
                  </a>
              </p>
          
          
              
                  <div class="container">
                      <p>
                          &copy; 2024, portfolio at LH , ALL right reserved. |
                          <a href="#">Privacy Policy</a>
                      </p>
                  </div>
                </section>
            {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
          </footer>
      </div>
    </div>
  </div>

  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    function increaseQuantity() {
        let quantityInput = document.getElementById("quantity");
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    }

    function decreaseQuantity() {
        let quantityInput = document.getElementById("quantity");
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>