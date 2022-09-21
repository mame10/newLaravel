<!-- component -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <div id="wrapper" class="flex h-screen bg-grey-lightest sm:flex-col md:flex-row font-light w-full">
        <div id="sidebar" class="bg-sidebar md:w-64 overflow-y-scroll sm:w-screen">
            <header class="flex justify-between items-center border-b border-orange-darkest pt-8 pb-8 pl-6 pr-6">
                <div id="logo">
                    <a href="#" class="no-underline text-white md:text-2xl sm:text-4xl font-bold">
                        <img src="#" width="120" alt="">
                        Dashboard
                    </a>
                </div>
               
                    <i class="fa fa-bars" aria-hidden="true"></i>

            </header>
            
            <ul id="menu" class="flex flex-col list-reset sm:hidden md:block">
                <li class="block">
                    <a href="#" class="no-underline text-white block h-full w-full border-b border-orange-darkest px-8 py-4 hover:text-orange">
                        <i class="fa fa-tachometer mr-2" aria-hidden="true"></i>
                        Dashboard
                    </a>
                </li>
                <li class="flex justify-between block">
                    <a href="#" class="no-underline text-white block h-full w-full border-b border-orange-darkest px-8 py-4 hover:text-orange">
                        <i class="fa fa-user mr-2" aria-hidden="true"></i>
                        Account
                        <i class="fa fa-angle-right float-right" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="block">
                    <a href="#" class="no-underline text-white block h-full w-full border-b border-orange-darkest px-8 py-4 hover:text-orange">
                        <i class="fa fa-envelope mr-2" aria-hidden="true"></i>
                        MailBox
                        <i class="fa fa-angle-down float-right" aria-hidden="true"></i>
                    </a>
                    <ul class="flex flex-col list-reset bg-orange-darkest block">
                        <li class="flex block border-b border-orange-darker">
                            <a href="#" class="no-underline text-white block h-full w-full ml-4 hover:text-orange px-8 py-4">
                                <i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>
                                Inbox
                            </a>
                        </li>
                        <li class="flex block border-b border-orange-darker">
                            <a href="#" class="no-underline text-white block h-full w-full ml-4 hover:text-orange px-8 py-4">
                                <i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>
                                Categories
                                <i class="fa fa-angle-down float-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <ul class="flex flex-col list-reset bg-orange-darkest block">
                            <li class="flex block border-b border-orange-darker">
                                <a href="#" class="no-underline text-white block h-full w-full ml-8 hover:text-orange px-8 py-4">
                                    <i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>
                                    Social
                                </a>
                            </li>
                            <li class="flex block border-b border-orange-darker">
                                <a href="#" class="no-underline text-white block h-full w-full ml-8 hover:text-orange px-8 py-4">
                                    <i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>
                                    Notifications
                                </a>
                            </li>
                        </ul>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="content" class="px-8 bg-white flex-grow flex-shrink flex-auto overflow-y-scroll">
            <div id="info" class="border-b border-grey-light h-24 bg-white">
                <div class="flex justify-between flex-grow items-center border-b h-24">
                    <div class="flex">
                       
                    </div>
                    <div class="flex">
                        <ul class="flex list-reset text-black">
                           <a href="{{ route('logout') }}">
                                <li class="border-l px-4">
                                    <span class="text-sm">
                                        Log Out
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </span>
                                </li>
                           </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div >
                @yield('content')
            </div> 
        </div>
    
        
    </div>



