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

      <!-- cards -->
      
        <!-- cards row 1 -->
        
        <div class="flex flex-wrap mt-6 -mx-3">
          @foreach ($makeup as $item)
          <div class="w-full mb-6 lg:mb-0 lg:w-4/12 lg:flex-none p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-3/6 lg:flex-none">
                    <div class="flex flex-col h-full">
                      <h3 class="font-bold mt-6">{{ $item->name }}</h3>
                      <h5 class="mb-6">{{ $item->price }}</h5>
                      <p> Status: 
                        @if($item->status == 1)
                          Aktif
                        @else
                          Tidak Aktif
                        @endif
                      </p>
                    </div>
                  </div>
                  <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-3/12 lg:flex-none">
                    <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                      <img src="{{asset('/assets/build/assets/img/shapes/waves-white.svg')}}" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                      <div class="relative flex items-center justify-center h-full">
                        <img class="relative z-20 w-full pt-6" src="{{asset('storage/'.$item->image)}}" alt="rocket" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        

        @include('layouts.footer')
      </div>
      <!-- end cards -->
    </main>
  </body>
  {{-- <!-- plugin for charts  -->
  <script src="assets/build/assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="assets/build/assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js'"></script>
  <!-- main script file  -->
  <script src="assets/build/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script> --}}
</html>
