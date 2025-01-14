<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<div class="min-h-full">
  {{ $photo }}
  <nav class="bg-gray-800 sticky top-0 z-40 shadow-xl">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="flex h-20 items-center justify-between">
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0">
            <a href="/"><img class="h-14 w-auto" src="https://beanandbrew.com.au/wp-content/uploads/2021/01/Bean-Brew-LogoA-1.png" alt="F1"></a>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class=" {{ request()->is('/')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium" aria-current="page">Home</a>
              <a href="/items" class="{{ request()->is('items')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">Menu</a>
              <a href="/bookings" class="{{ request()->is('bookings')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">Book</a>
              <a href="/basket" class="{{ request()->is('basket')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">Basket</a>
              <a href="/about" class="{{ request()->is('about')? 'bg-black text-white': 'text-white hover:bg-gray-700 hover:text-gray-200'}} rounded-md px-3 py-2 my-2 text-sm font-medium">About</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
    @auth
        <span class="block text-white px-3 py-2 text-base font-medium">Logged in as {{ Auth::user()->firstname }}</span>
        
        <!-- Logout Form -->
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Logout
            </button>
        </form>
    @else
        <a href="/login" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
    @endauth
  </div>
      </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="/items" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Menu</a>
        <a href="/bookings" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Book</a>
        <a href="/basket" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Basket</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
        <a href="/basket" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
      </div>
    </div>
  </nav>
  {{ $slot }}
</div>  
</body>
<footer class="bg-black text-white py-4">
  <div class="container mx-auto text-center">
    <p class="text-xs">&copy; 2024 B&B. All rights reserved.</p>
    <div class="flex justify-center mt-2">
      <a href="/" class="hover:text-gray-400 text-white mx-2">Home</a>
      <a href="/items" class="hover:text-gray-400 text-white mx-2">Menu</a>
      <a href="/bookings" class="hover:text-gray-400 text-white mx-2">Book</a>
      <a href="/basket" class="hover:text-gray-400 text-white mx-2">Basket</a>
      <a href="/about" class="hover:text-gray-400 text-white mx-2">About</a>
    </div>
    <div class="mt-3 flex flex-align justify-center">
      <a href="https://www.facebook.com/Formula1/?locale=en_GB">
        <svg class="h-6 w-6 text-white hover:text-blue-600 mx-3 mt-[2px]"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z"/>
          <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
        </svg>
      </a>
      <a href="https://x.com/F1?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
        <svg class="h-6 w-6 text-white hover:text-gray-300 mx-3 mt-[2px]"  width="24" height="24" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round" >
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
          <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
        </svg> 
      </a>
      <a href="https://www.instagram.com/f1/">
        <svg class="h-7 w-7 transition-colors duration-300 mx-3" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <defs>
            <linearGradient id="instagramGradient" x1="0%" y1="100%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#FEDA77; stop-opacity:1" /> <!-- Yellow -->
              <stop offset="100%" style="stop-color:#D62976; stop-opacity:1" /> <!-- Purple -->
            </linearGradient>
          </defs>
          <path stroke="none" d="M0 0h24v24H0z" />
          <rect class="base" x="4" y="4" width="16" height="16" rx="4" stroke="white" fill="none" />
          <circle class="base" cx="12" cy="12" r="3" stroke="white" fill="none" />
          <line class="base" x1="16.5" y1="7.5" x2="16.5" y2="7.501" stroke="white" />
        </svg>

        <style>
          .base {
            transition: stroke 0.3s ease; /* Smooth transition for the stroke */
          }
          svg:hover .base {
            stroke: url(#instagramGradient); /* Change stroke to gradient on hover */
          }
        </style>
      </a>
    </div>
  </div>
</footer>