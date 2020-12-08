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
                    Hello {{ Auth::user()->first_name }}!!. Scan the Qr-Code below to get your registration details.
                </div>
            </div>

            <div class="qr-position">
                <h4>Simple QrCode</h4>
                {!!QrCode::size(250)->color(39,57,219)->backgroundColor(255,255,255)->generate('emem')!!}
            </div>
        </div>
    </div>



</x-app-layout>
