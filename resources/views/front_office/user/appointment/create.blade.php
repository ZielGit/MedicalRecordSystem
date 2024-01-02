@section('title')
    {{ __('Schedule Appointments') }}
@endsection
<x-app-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="max-w-screen-2xl mx-auto">
            <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
                @include('front_office.partials.sidebar')

                <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
                    <main>
                        <div class="px-4 pt-6 pb-96">
                            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <!-- Card header -->
                                <div class="items-center justify-between lg:flex">
                                    <div class="mb-4 lg:mb-0">
                                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">{{ __('Schedule Appointments') }}</h3>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="flex flex-col mt-6">
                                    <div class="overflow-x-auto rounded-lg">
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden shadow sm:rounded-lg">
                                                <div class="grid grid-cols-4 gap-6">
                                                    <div class="col-span-4 sm:col-span-2">
                                                        <x-front.label for="medic" value="{{ __('Medic') }}" />
                                                        <x-front.input class="shadow-sm" type="text" name="medic" id="medic" placeholder="Medic" required />
                                                    </div>
                                                    {{-- El borde de los input se pasa un poco --}}
                                                    <div class="col-span-4 sm:col-span-2">
                                                        <x-front.label for="email" value="{{ __('Email') }}" />
                                                        <input type="email" name="email" id="email" class="shadow-sm mb-1 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="example@company.com" required>
                                                    </div>
                                                    <div class="col-span-4 sm:col-span-2">
                                                        <x-front.label for="date" value="{{ __('Select a Date') }}" />
                                                        <div class="relative">
                                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                                            </div>
                                                            <input datepicker type="text" id="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-4 sm:col-span-2">
                                                        <x-front.label for="time" value="{{ __('Select a Time') }}" />
                                                        <input type="time" name="time" id="time" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Green" required>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="flex items-center justify-between pt-3 sm:pt-6">
                                    {{-- <a href="#" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                        {{ __('Cancel') }}
                                    </a> --}}
                                    <x-front.button class="text-sm py-2.5">
                                        {{ __('Register') }}
                                    </x-front.button>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>
    
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    @endpush
</x-app-layout>