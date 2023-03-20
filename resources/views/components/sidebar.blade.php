<div class="flex items-center shrink-0 px-2">
    <a href="https://jetorbit.com">
        <img class="w-full h-16 dark:hidden" src="https://www.jetorbit.com/wp-content/uploads/2019/05/hosting-murah-jetorbit-logo.svg" alt="jetorbit.com Logo" />
        <img class="w-full h-16 hidden dark:inline" src="https://jetorbit.com/cloud-hosting/wp-content/uploads/2021/05/logo-jetorbit-svg-1.svg" alt="jetorbit.com Logo" />
    </a>
</div>

{!! $errors->first('code', '<p class="mt-4 text-red-600 font-medium text-center">:message</p>') !!}

<nav class="mt-4" aria-label="Sidebar">
    <div class="space-y-1">
        {!! $slot !!}
    </div>
</nav>

<p class="mt-4 text-sm text-gray-500 text-center">
    Please note that all pasted data is publicly available.
</p>

<div class="mt-4 flex justify-center space-x-4">
    <a href="https://twitter.com/jetorbithost" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">Twitter</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
        </svg>
    </a>

    <a href="https://www.facebook.com/jetorbithost/" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">Facebook</span>
       
        <span class="svg-icon svg-icon-muted svg-icon-2hx h-6 w-6"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"/>
        <path d="M13.643 9.36206C13.6427 9.05034 13.7663 8.75122 13.9864 8.53052C14.2065 8.30982 14.5053 8.18559 14.817 8.18506H15.992V5.23999H13.643C13.1796 5.24052 12.7209 5.33229 12.293 5.51013C11.8651 5.68798 11.4764 5.94841 11.1491 6.27649C10.8219 6.60457 10.5625 6.99389 10.3857 7.42224C10.209 7.85059 10.1183 8.30956 10.119 8.77295V11.718H7.769V14.663H10.119V21.817C11.2812 22.0479 12.4762 22.0604 13.643 21.854V14.663H15.992L17.167 11.718H13.643V9.36206Z" fill="currentColor"/>
        </svg>
        </span>
    </a>
</div>

<div class="grow"></div>

<div class="mt-4 text-center">
    <button
        type="button" aria-pressed="false"
        class="darkModeToggle bg-gray-300 dark:bg-gray-500 relative inline-flex shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
    >
        <span class="sr-only">Use setting</span>

        <span class="translate-x-0 dark:translate-x-5 relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200">
            <span class="dark:hidden opacity-100 ease-in duration-200 dark:opacity-0 dark:ease-out dark:duration-100 absolute inset-0 h-full w-full flex items-center justify-center transition-opacity" aria-hidden="true">
                <x-heroicon-s-sun class="h-3 w-3 text-gray-400" />
            </span>

            <span class="hidden dark:flex opacity-0 ease-out duration-100 dark:opacity-100 dark:ease-in dark:duration-200 absolute inset-0 h-full w-full items-center justify-center transition-opacity" aria-hidden="true">
                <x-heroicon-s-moon class="h-3 w-3 text-gray-600" />
            </span>
        </span>
    </button>
</div>
