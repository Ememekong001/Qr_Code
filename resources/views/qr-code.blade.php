<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="py-2">
        <div class="container ">
            <div class="overflow-hidden ">
                <div class="p-6 ">
                    <h4>Simple QrCode</h4>
                    {!!QrCode::size(250)->color(39,57,219)->backgroundColor(255,255,255)->generate('emem')!!}
                    {{-- Hello {{ Auth::user()->name }}!!. Let's help you plan your day. Create a task and add a description on how you plan to achieve it. --}}
                </div>
            </div>
        </div>


</x-app-layout>
