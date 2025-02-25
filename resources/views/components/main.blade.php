<div class="flex flex-col min-w-0 flex-1 overflow-hidden">
    <div class="lg:hidden print:hidden">
        <div class="flex items-center justify-between bg-gray-50 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-900 px-4 py-1.5">
            <div>
                <a href="{{ route('home') }}">
                    <img class="h-8 w-auto dark:hidden" src="https://www.jetorbit.com/wp-content/uploads/2019/05/hosting-murah-jetorbit-logo.svg" alt="jetorbit.com">
                    <img class="h-8 w-auto hidden dark:inline" src="https://jetorbit.com/cloud-hosting/wp-content/uploads/2021/05/logo-jetorbit-svg-1.svg" alt="jetorbit.com">
                </a>
            </div>
            <div>
                <button
                    type="button"
                    @click="isOpen = true"
                    class="-mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900"
                >
                    <span class="sr-only">Open sidebar</span>

                    <x-heroicon-o-bars-3 class="h-6 w-6" />
                </button>
            </div>
        </div>
    </div>
    <div class="flex-1 relative z-0 flex overflow-hidden">
        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
            <!-- Start main area-->
            <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
                {!! $slot !!}
            </div>
            <!-- End main area -->
        </main>
    </div>
</div>
