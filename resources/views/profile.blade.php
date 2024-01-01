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
    <div>

    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      {{-- @include('layouts.navbar') --}}

      <!-- end Navbar -->

<div class="w-full bg-white p-4">
  <table class="table-auto w-full border-collapse border border-gray-300 hover:table-striped">
      <thead>
          <tr>
              <th class="px-4 py-2">No.</th>
              <th class="px-4 py-2">Name</th>
              <th class="px-4 py-2">No HP</th>
              <th class="px-4 py-2">Email</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($users as $index => $u)
              <tr>
                  <td class="border px-4 py-2">{{ ++$index }}</td>
                  <td class="border px-4 py-2">{{ $u->name }}</td>
                  <td class="border px-4 py-2">{{ $u->no }}</td>
                  <td class="border px-4 py-2">{{ $u->email }}</td>
                  <td class="border px-4 py-2">
                    @if ($u->status == 1)
                        Aktif
                    @else
                        Tidak Aktif
                    @endif
                  </td>
                  <td class="border px-4 py-2">
                    @if ($u->status != 1)
                      <form method="POST" action="{{ route('approve', $u) }}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bg-gradient-to-tl from-purple-700 to-pink-500">Approve</button>
                      </form>
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
</html>