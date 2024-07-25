<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" x-data="{notification : null }" x-init="

                Echo.channel('notifeme').listen('Notificattion', (e) => {
                    console.log('hel');
                    console.log(e);
                    notification = e.message;
                });

                {{-- Echo.private('user.' + {{ auth()->id() }}).listen('notificationPrivate' , (e) => {
                    console.log(e);
                    notification = e.message;
                }); --}}


                ">
<div x-show="notification" class="bg-green-500 text-white p-3 rounded">
    <span x-text="notification"></span>
</div>

                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
