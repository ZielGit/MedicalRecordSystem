<div class="flex flex-col overflow-y-auto md:flex-row">
    <div class="h-32 md:h-auto md:w-1/2">
        <img 
            aria-hidden="true" 
            class="object-cover w-full h-full dark:hidden"
            src="{{ asset('windmill/img/login-office.jpeg') }}" 
            alt="Office" 
        />
        <img 
            aria-hidden="true" 
            class="hidden object-cover w-full h-full dark:block"
            src="{{ asset('windmill/img/login-office-dark.jpeg') }}" 
            alt="Office" 
        />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
            {{ $slot }}
        </div>
    </div>
</div>
