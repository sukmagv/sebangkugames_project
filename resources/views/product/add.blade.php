<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/build/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="public/assets/build/assets/img/favicon.png" />
    <title>MakeUp Shop</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('/assets/build/assets/css/nucleo-icons.css" rel="stylesheet')}}" />
    <link href="{{asset('/assets/build/assets/css/nucleo-svg.css" rel="stylesheet')}}" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{asset('/assets/build/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5')}}" rel="stylesheet" />    
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    @include('layouts.sidebar')

    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      {{-- @include('layouts.navbar') --}}

      <!-- end Navbar -->
      <div>
        <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
          <h3 class="text-2xl font-bold mb-8">Add Product</h3>
          <form action="{{url('/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <div class="relative z-0 w-full mb-5 mt-6">
                <label for="name">Name : </label>
                <input type="text" class="form-control border border-gray-300" required="required" name="name">
                <br>
              </div>
              <div class="relative z-0 w-full mb-5 mt-6">
              <label for="price">Price : </label>
              <input type="text" class="form-control border border-gray-300" required="required" name="price">
              <br>
              </div>
              <div class="relative z-0 w-full mb-5 mt-6">
              <label for="image">Image : </label>
              <input type="file" class="form-control border border-gray-300" required="required" id="image" name="image">
              <br>
              </div>
              <div class="relative z-0 w-full mb-5 mt-6">
              <label for="status">Status : </label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status1" value="1" >
                <label class="form-check-label" for="status1">
                  Aktif
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status0" value="0" >
                <label class="form-check-label" for="status0">
                  Tidak Aktif
                </label>
              </div>
              <br>
              </div>
              <div class="relative z-0 w-full mb-5">
              <button type="submit" name="submit" class="bg-gradient-to-tl from-purple-700 to-pink-500 text-white px-4 py-2 rounded" value="upload" style="width: 100px">Add</button>
              </div>
            </div>
          </form>
        </div>

      
        @include('layouts.footer')
      </div>
      <!-- end cards -->
    </main>
  </body>
</html>