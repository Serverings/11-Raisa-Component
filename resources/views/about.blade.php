<navbar class="bg-gray-800 text-white">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="text-xl font-bold">My Website</a>
            </div>
            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-gray-300">Home</a></li>
                    <li><a href="/about" class="hover:text-gray-300">About</a></li>
                    <li><a href="/contact" class="hover:text-gray-300">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
      <header className="relative border-b border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-950">
         <nav id="nav-simple" aria-label="Main" onKeyDown={onKeyDown}>
            <div className="mx-auto flex h-16 max-w-7xl items-center gap-2 px-4 md:px-8">
               <a href="#" className="mr-6 flex shrink-0 items-center gap-2 rounded-md focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:focus-visible:outline-zinc-50"><span className="flex size-7 items-center justify-center rounded-lg bg-neutral-950 text-white dark:bg-neutral-50 dark:text-neutral-950"><svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.75" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z" /><path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12" /><path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17" /></svg></span><span className="text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50">Lumora</span></a>
               <div ref={menuRef} id="nav-simple-menu" data-open={open ? "" : undefined {...dialog} className="max-lg:fixed max-lg:inset-y-0 max-lg:right-0 max-lg:z-50 max-lg:hidden max-lg:w-full max-lg:max-w-sm max-lg:flex-col max-lg:overflow-y-auto max-lg:bg-white max-lg:shadow-2xl max-lg:ring-1 max-lg:ring-neutral-950/10 max-lg:data-open:flex lg:flex lg:min-w-0 lg:flex-1 lg:items-center dark:max-lg:bg-neutral-900 dark:max-lg:ring-neutral-800">
                  <div className="flex h-16 shrink-0 items-center justify-between gap-4 border-b border-neutral-200 px-4 lg:hidden dark:border-neutral-800">
                     <span aria-hidden="true" className="flex items-center gap-2"><span className="flex size-7 items-center justify-center rounded-lg bg-neutral-950 text-white dark:bg-neutral-50 dark:text-neutral-950"><svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.75" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z" /><path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12" /><path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17" /></svg></span><span className="text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50">Lumora</span></span>
                  </div>
                  <ul className="flex flex-col gap-1 p-4 lg:flex-row lg:items-center lg:gap-7 lg:p-0">
                     <li><a href="#" className="flex items-center font-medium transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 max-lg:rounded-lg max-lg:px-3 max-lg:py-2.5 max-lg:text-base max-lg:text-neutral-950 max-lg:hover:bg-neutral-100 max-lg:aria-[current=page]:bg-neutral-100 lg:rounded-sm lg:text-sm lg:whitespace-nowrap lg:text-neutral-600 lg:hover:text-neutral-950 lg:aria-[current=page]:text-neutral-950 dark:focus-visible:outline-zinc-50 dark:max-lg:text-neutral-50 dark:max-lg:hover:bg-neutral-800 dark:max-lg:aria-[current=page]:bg-neutral-800 dark:lg:text-neutral-400 dark:lg:hover:text-neutral-50 dark:lg:aria-[current=page]:text-neutral-50">Product</a></li>
                     <li><a href="#" className="flex items-center font-medium transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 max-lg:rounded-lg max-lg:px-3 max-lg:py-2.5 max-lg:text-base max-lg:text-neutral-950 max-lg:hover:bg-neutral-100 max-lg:aria-[current=page]:bg-neutral-100 lg:rounded-sm lg:text-sm lg:whitespace-nowrap lg:text-neutral-600 lg:hover:text-neutral-950 lg:aria-[current=page]:text-neutral-950 dark:focus-visible:outline-zinc-50 dark:max-lg:text-neutral-50 dark:max-lg:hover:bg-neutral-800 dark:max-lg:aria-[current=page]:bg-neutral-800 dark:lg:text-neutral-400 dark:lg:hover:text-neutral-50 dark:lg:aria-[current=page]:text-neutral-50">Features</a></li>
                     <li><a href="#" aria-current="page" className="flex items-center font-medium transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 max-lg:rounded-lg max-lg:px-3 max-lg:py-2.5 max-lg:text-base max-lg:text-neutral-950 max-lg:hover:bg-neutral-100 max-lg:aria-[current=page]:bg-neutral-100 lg:rounded-sm lg:text-sm lg:whitespace-nowrap lg:text-neutral-600 lg:hover:text-neutral-950 lg:aria-[current=page]:text-neutral-950 dark:focus-visible:outline-zinc-50 dark:max-lg:text-neutral-50 dark:max-lg:hover:bg-neutral-800 dark:max-lg:aria-[current=page]:bg-neutral-800 dark:lg:text-neutral-400 dark:lg:hover:text-neutral-50 dark:lg:aria-[current=page]:text-neutral-50">Pricing</a></li>
                     <li><a href="#" className="flex items-center font-medium transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 max-lg:rounded-lg max-lg:px-3 max-lg:py-2.5 max-lg:text-base max-lg:text-neutral-950 max-lg:hover:bg-neutral-100 max-lg:aria-[current=page]:bg-neutral-100 lg:rounded-sm lg:text-sm lg:whitespace-nowrap lg:text-neutral-600 lg:hover:text-neutral-950 lg:aria-[current=page]:text-neutral-950 dark:focus-visible:outline-zinc-50 dark:max-lg:text-neutral-50 dark:max-lg:hover:bg-neutral-800 dark:max-lg:aria-[current=page]:bg-neutral-800 dark:lg:text-neutral-400 dark:lg:hover:text-neutral-50 dark:lg:aria-[current=page]:text-neutral-50">Customers</a></li>
                     <li><a href="#" className="flex items-center font-medium transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 max-lg:rounded-lg max-lg:px-3 max-lg:py-2.5 max-lg:text-base max-lg:text-neutral-950 max-lg:hover:bg-neutral-100 max-lg:aria-[current=page]:bg-neutral-100 lg:rounded-sm lg:text-sm lg:whitespace-nowrap lg:text-neutral-600 lg:hover:text-neutral-950 lg:aria-[current=page]:text-neutral-950 dark:focus-visible:outline-zinc-50 dark:max-lg:text-neutral-50 dark:max-lg:hover:bg-neutral-800 dark:max-lg:aria-[current=page]:bg-neutral-800 dark:lg:text-neutral-400 dark:lg:hover:text-neutral-50 dark:lg:aria-[current=page]:text-neutral-50">Docs</a></li>
                  </ul>
                  <div className="max-lg:mt-auto max-lg:grid max-lg:gap-2 max-lg:border-t max-lg:border-neutral-200 max-lg:p-4 lg:ml-auto lg:flex lg:items-center lg:gap-2 dark:max-lg:border-neutral-800">
                     <a href="#" className="inline-flex items-center justify-center rounded-lg text-sm font-medium whitespace-nowrap text-neutral-950 transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 max-lg:h-10 max-lg:border max-lg:border-neutral-200 max-lg:bg-white max-lg:px-4 max-lg:shadow-xs max-lg:hover:bg-neutral-50 lg:h-9 lg:px-3.5 lg:hover:bg-neutral-100 dark:text-neutral-50 dark:focus-visible:outline-zinc-50 dark:max-lg:border-neutral-700 dark:max-lg:bg-neutral-900 dark:max-lg:hover:bg-neutral-800 dark:lg:hover:bg-neutral-800">Sign in</a>
                  </div>
               </div>
               <a href="#" className="inline-flex h-9 items-center justify-center gap-2 rounded-lg bg-zinc-950 px-3.5 text-sm font-medium whitespace-nowrap text-white shadow-xs transition-colors duration-150 hover:bg-zinc-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 active:translate-y-px max-lg:ml-auto dark:bg-zinc-50 dark:text-zinc-950 dark:hover:bg-zinc-200 dark:focus-visible:outline-zinc-50">Start free trial</a>
               <button ref={toggleRef} type="button" id="nav-simple-toggle" onClick={() => setOpen(true)} aria-label="Menu" aria-expanded={open ? "true" : "false"} aria-controls="nav-simple-menu" className="group inline-flex size-9 shrink-0 cursor-pointer items-center justify-center rounded-lg text-neutral-950 transition-colors duration-150 hover:bg-neutral-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 lg:hidden dark:text-neutral-50 dark:hover:bg-neutral-800 dark:focus-visible:outline-zinc-50"><svg className="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.75" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true"><path d="M4 5h16" /><path d="M4 12h16" /><path d="M4 19h16" /></svg></button>
            </div>
            <div id="nav-simple-scrim" hidden={!open} onClick={() => setOpen(false)} className="fixed inset-0 z-40 bg-neutral-950/40 backdrop-blur-xs lg:hidden"></div>
         </nav>
    </navbar>
</div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">About Us</h1>
        <p class="mb-4">Welcome to our website! We are a team of passionate developers dedicated to creating innovative web solutions. Our mission is to deliver high-quality products that meet the needs of our clients and users.</p>
        <p class="mb-4">Our team consists of experienced professionals with expertise in various technologies and frameworks. We believe in continuous learning and staying up-to-date with the latest trends in web development.</p>
    </div>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-layout>
<body>
    <h1 class="text-2xl font-bold mb-4">Developer</h1>
    <ul>
        <li>Jevlin Misael Chandra</li>
        <li>Mellinda Anggryani</li>
    </ul>
    <h1 class="text-2xl font-bold mb-4">Mata Kuliah</h1>
    <p>Web Development</p>
    <h1 class="text-2xl font-bold mb-4">About Us</h1>
    <p>jadi dikelas webdev kali ini bu elza kasi kita AFL2 terus kelompoknya di spinwheel yahh dapat kelompok jevlin dan mellinda kemudian kita disuruh buat web sesuai tokoh pilihan sendiri jadi kita pilih raisa saja karena keren.</p>
    <p>Kami membangun website ini untuk memperkenalkan tokoh yang sangat kita kagumi, yaitu Raisa. Dengan menggunakan sistem laravel dan laravel.blade kami mencoba kemampuan kami dalam membuat sebuah website dari 0 hingga jadi</p>
</body>
</html>
</x-layout>
<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </div>
               <a href="#" className="flex shrink-0 items-center gap-2 rounded-md focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:focus-visible:outline-zinc-50"><span className="flex size-7 items-center justify-center rounded-lg bg-neutral-950 text-white dark:bg-neutral-50 dark:text-neutral-950"><svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.75" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z" /><path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12" /><path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17" /></svg></span><span className="text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50">Lumora</span></a>
               <nav aria-label="Footer">
                  <ul className="flex flex-wrap gap-x-6 gap-y-3">
                     <li><a href="#" className="rounded-sm text-sm text-neutral-600 transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Product</a></li>
                     <li><a href="#" className="rounded-sm text-sm text-neutral-600 transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Features</a></li>
                     <li><a href="#" className="rounded-sm text-sm text-neutral-600 transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Pricing</a></li>
                     <li><a href="#" className="rounded-sm text-sm text-neutral-600 transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Customers</a></li>
                     <li><a href="#" className="rounded-sm text-sm text-neutral-600 transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Docs</a></li>
                     <li><a href="#" className="rounded-sm text-sm text-neutral-600 transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Contact</a></li>
                  </ul>
               </nav>
            </div>
            <div className="flex flex-col gap-4 border-t border-neutral-200 py-6 text-sm text-neutral-600 sm:flex-row sm:items-center sm:justify-between dark:border-neutral-800 dark:text-neutral-400">
               <div className="flex flex-wrap items-center gap-x-4 gap-y-2">
                  <p>© 2026 Lumora Inc.</p>
                  <ul className="flex flex-wrap gap-x-4 gap-y-2">
                     <li><a href="#" className="rounded-sm whitespace-nowrap transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Privacy</a></li>
                     <li><a href="#" className="rounded-sm whitespace-nowrap transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Terms</a></li>
                     <li><a href="#" className="rounded-sm whitespace-nowrap transition-colors duration-150 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50">Cookies</a></li>
                  </ul>
               </div>
               <ul className="-ml-2 flex items-center gap-1 sm:-mr-2 sm:ml-0">
                  <li><a href="#" aria-label="Lumora on X" className="inline-flex size-8 items-center justify-center rounded-lg text-neutral-600 transition-colors duration-150 hover:bg-neutral-100 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50"><svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14.234 10.162 22.977 0h-2.072l-7.591 8.824L7.251 0H.258l9.168 13.343L.258 24H2.33l8.016-9.318L16.749 24h6.993zm-2.837 3.299-.929-1.329L3.076 1.56h3.182l5.965 8.532.929 1.329 7.754 11.09h-3.182z" /></svg></a></li>
                  <li><a href="#" aria-label="Lumora on GitHub" className="inline-flex size-8 items-center justify-center rounded-lg text-neutral-600 transition-colors duration-150 hover:bg-neutral-100 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50"><svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" /></svg></a></li>
                  <li><a href="#" aria-label="Lumora on LinkedIn" className="inline-flex size-8 items-center justify-center rounded-lg text-neutral-600 transition-colors duration-150 hover:bg-neutral-100 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50"><svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0" /></svg></a></li>
                  <li><a href="#" aria-label="Lumora on YouTube" className="inline-flex size-8 items-center justify-center rounded-lg text-neutral-600 transition-colors duration-150 hover:bg-neutral-100 hover:text-neutral-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:hover:text-neutral-50 dark:focus-visible:outline-zinc-50"><svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" /></svg></a></li>
               </ul>
            </div>
         </div>
      </footer>
