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
        <div class="flex flex-wrap mt-6">
          <!-- card1 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal text-sm">Number of Products</p>
                      <h5 class="mb-0 font-bold">
                        {{$jumlahProduk}}
                        <span class="leading-normal text-sm font-weight-bolder text-lime-500">products</span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card2 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal text-sm">Number of Active Products</p>
                      <h5 class="mb-0 font-bold">
                        {{$jumlahProdukAktif}}
                        <span class="leading-normal text-sm font-weight-bolder text-lime-500">products</span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card3 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal text-sm">Number of <br>Users</p>
                      <h5 class="mb-0 font-bold">
                        {{$jumlahUser}}
                        <span class="leading-normal text-sm font-weight-bolder text-lime-500">users</span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card4 -->
          <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal text-sm">Number of Active Users</p>
                      <h5 class="mb-0 font-bold">
                        {{$jumlahUserAktif}}
                        <span class="leading-normal text-sm font-weight-bolder text-lime-500">users</span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full bg-white p-4 mt-6">
          <h5>10 Newest Products</h5>
          <table class="table-auto w-full border-collapse border border-gray-300 hover:table-striped">
              <thead>
                  <tr>
                      <th class="px-4 py-2">No.</th>
                      <th class="px-4 py-2">Name</th>
                      <th class="px-4 py-2">Price</th>
                      <th class="px-4 py-2">Image</th>
                      <th class="px-4 py-2">Status</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($produkTerbaru as $produkTerbaru => $item)
                      <tr>
                          <td class="border px-4 py-2">{{ ++$produkTerbaru }}</td>
                          <td class="border px-4 py-2">{{ $item->name }}</td>
                          <td class="border px-4 py-2">{{ $item->price }}</td>
                          <td class="border px-4 py-2"><img src="{{asset('storage/'.$item->image)}}" class="w-12"></td>
                          <td class="border px-4 py-2">
                            @if($item->status == 1)
                              Aktif
                            @else
                              Tidak Aktif
                            @endif
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
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
