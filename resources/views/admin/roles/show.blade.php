@extends('layouts.app')
@section('title') {{ __('Role Details') }} @endsection
@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ __('Role Details') }}: {{ $role->name }}
    </h2>

    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        {{ __('Permissions assigned to the role') }}
    </h4>
    <div class="p-4 mb-8 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3">{{ __('ID') }}</th>
                            <th class="px-4 py-3">{{ __('Name') }}</th>
                            <th class="px-4 py-3">{{ __('Description') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($role->permissions as $permission)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">{{ $permission->id }}</td>
                                <td class="px-4 py-3">{{ $permission->name }}</td>
                                <td class="px-4 py-3">{{ $permission->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        {{ __('Users with the role') }}
    </h4>
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
                            <th class="px-4 py-3">{{ __('Email') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($role->users as $user)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">{{ $user->id }}</td>
                                <td class="px-4 py-3">{{ $user->name }}</td>
                                <td class="px-4 py-3">{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection