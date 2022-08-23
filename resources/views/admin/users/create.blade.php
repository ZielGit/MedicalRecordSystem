@extends('layouts.app')
@section('title') {{ __('Create User') }} @endsection
@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ __('Create User') }}
    </h2>

    <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <form action="{{ route('admin.users.store') }}" method="post">
            @csrf
            <label class="block mb-4">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Name') }}</span>
                <input
                    type="text"
                    class="block w-full mt-1 text-sm text-gray-700 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="name"
                    value="{{ old('name') }}"
                />
            </label>
            @error('name')
                <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded relative mt-2" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror
            <label class="block mb-4">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Email') }}</span>
                <input
                    type="email"
                    class="block w-full mt-1 text-sm text-gray-700 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="email"
                    value="{{ old('email') }}"
                />
            </label>
            @error('email')
                <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded relative mt-2" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror
            <label class="block mb-4">
                <span class="text-gray-700 dark:text-gray-400">{{ __('Password') }}</span>
                <input
                    type="password"
                    class="block w-full mt-1 text-sm text-gray-700 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="password"
                    value="{{ old('password') }}"
                />
            </label>
            @error('password')
                <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded relative mt-2" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror
            <div class="mb-6">
                <span class="text-gray-700 dark:text-gray-400">
                    {{ __('Roles') }}
                </span>
                @foreach ($roles as $role)
                    <div class="flex mt-2 text-sm">
                        <label class="flex items-center text-gray-700 dark:text-gray-400">
                            <input
                                type="checkbox"
                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                name="roles[]"
                                value="{{ $role->id }}"
                            />
                            <span class="ml-2">{{ $role->name }}</span>
                        </label>
                    </div>
                @endforeach
                @error('roles')
                <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded relative mt-2" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror
            </div>
            <div class="flex justify-between">
                <button 
                    type="submit" 
                    class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                    {{ __('Create') }}
                </button>
                <a
                    href="{{ route('admin.users.index') }}" 
                    class="px-4 py-2 font-medium leading-5 text-slate-500 transition-colors duration-150 bg-slate-100 border border-transparent rounded-lg active:bg-slate-100 hover:bg-slate-200 focus:outline-none focus:shadow-outline-slate"
                >
                   {{ __('Cancel') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection