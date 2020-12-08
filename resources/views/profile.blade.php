<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="edit m-2 ">
            <b>{{ 'Registration Profile' }}</b>
        </div>

        <div class="row">
                <h2><b>First Name</b> : {{ Auth::user()->first_name }}</h2>
                <h2><b>Last Name </b>: {{ Auth::user()->last_name }}</h2>
                <h2><b>User Name </b>: {{ Auth::user()->user_name }}</h2>
                <h2><b>Email </b>: {{ Auth::user()->email }}</h2>
            </div>
            </div>
        </div>






    </x-auth-card>
</x-guest-layout>
