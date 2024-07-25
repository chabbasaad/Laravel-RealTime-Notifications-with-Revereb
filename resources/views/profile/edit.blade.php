<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

            <form method="POST" action="{{ route('profile.test') }}">
                @csrf
                <input type="text" name="name" class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-full" placeholder="Name">
                <button type="submit" class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-full text-left">
                    {{ __('run event') }}
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
