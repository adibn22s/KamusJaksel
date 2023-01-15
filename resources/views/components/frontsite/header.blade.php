<!-- Header -->
    <img src="{{ ('/assets/frontsite/images/navbar.png') }}"  class="absolute" alt="" />
    <header class="navkiri absolute top-1 left-0 w-full items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between ">
          <div class="px-12">
            <a href="" class=" ml-28"><img src="{{ asset('/assets/frontsite/images/logo.png') }}" class="logo mr-3" alt="" /> ></a>
          </div>
          <div class="nav-text flex items-center mr-2">
            <nav class="py-5 max-w-full top-full block static">
              <ul class="flex">
                  <a href="/" class="py-2 ml-[2px] mr-[36px] flex">Home</a>
                  <a href="/#program" class="py-2 mr-[28px] flex">Program</a>
                  <a href="/faq" class="py-2 mr-[20px] flex">Faq</a>
                @guest
                  <a href="{{ route('login') }}" class="py-2 mx-8 flex border tombol-masuk rounded-full bg-white text-center">
                    <pre class="border-text2 ml-4">Masuk / daftar</pre>
                  </a>
                @endguest

                @auth
                

                      <div x-data="{ profileDekstopOpen: false }">
                        <button type="button"
                        class="mx-10   flex  border tombol-masuk rounded-full bg-white text-center focus:outline-none "
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                        @click="profileDekstopOpen = ! profileDekstopOpen">
                        <!-- focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 -->
                        <span class="sr-only">Open user menu</span>
                        <div class="text-right mr-5 mt-2">
                            <div class="border-text ml-7">
                                <span><svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 512 512" class="after-login -ml-5 "><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z"/></svg></span>
                                <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').
                                submit();"
                                    class="block px-4 -py-2 text-dark rounded-lg hover:bg-white/20  font-family:'Poppins' mx-1 text-[16px]"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2">Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf 
                                    </form>
                                </a>
                            </div>
                            
                        </div>
                        
                    </button>
                      </div>
                      <div class="navkanan">
                        @can('dashboard_access')
                          <a  href="{{ route('backsite.dashboard.index') }}"
                          class="mt-2 mr-[32px] flex text-sm text-white" 
                          >
                          Admin </a>
                           @endcan 
                    
                </div>
                  @endauth
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
  <!-- end header --> 