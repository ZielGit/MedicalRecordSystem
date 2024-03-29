@extends('layouts.app')
@section('title') {{ __('Users List') }} @endsection
@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex justify-between my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Users List') }}
        </h2>
        @can('admin.users.create')
            <a
                href="{{ route('admin.users.create') }}" 
                class="p-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
                {{ __('Create New User') }}
            </a>
        @endcan
    </div>

    <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3">{{ __('ID') }}</th>
                            <th class="px-4 py-3">{{ __('Name') }}</th>
                            <th class="px-4 py-3">{{ __('Age') }}</th>
                            <th class="px-4 py-3">{{ __('Email') }}</th>
                            <th class="px-4 py-3">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($users as $user)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">{{ $user->id }}</td>
                                <td class="px-4 py-3">{{ $user->name }}</td>
                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($user->birthdate)->age }}</td>
                                <td class="px-4 py-3">{{ $user->email }}</td>
                                <td class="px-4 py-3">
                                    @can('admin.users.edit')
                                        <a
                                            href="{{ route('admin.users.edit', $user->id) }}" 
                                            class="px-4 py-2 mr-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-400 border border-transparent rounded-lg active:bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:shadow-outline-yellow"
                                        >
                                            {{ __('Edit') }}
                                        </a>
                                    @endcan
                                    @can('admin.users.show')
                                        <a
                                            href="{{ route('admin.users.show', $user->id) }}" 
                                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-sky-400 border border-transparent rounded-lg active:bg-sky-400 hover:bg-sky-500 focus:outline-none focus:shadow-outline-sky"
                                        >
                                            {{ __('Details') }}
                                        </a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>
    @if (session('store') == 'ok')
        <script>
            Toast.fire({
                icon: 'success',
                title: "{{ __('User has been created successfully') }}"
            })
        </script>
    @endif
    @if (session('update') == 'ok')
        <script>
            Toast.fire({
                icon: 'success',
                title: "{{ __('User has been updated successfully') }}"
            })
        </script>
    @endif
@endpush