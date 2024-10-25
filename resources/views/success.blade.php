<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're subscribed to Premium!") }}
                    {{-- @php
                        $subscription = auth()->user()->subscription('default');
                        $priceId = $subscription ? $subscription->price->id : null;
                    @endphp
                    @dd($priceId)
                    @switch($priceId)
                        @case('price_1QDjnWIHNpCbphmawX1kRzCy')
                            <p>A</p>
                        @break

                        @case('price_1QDjnWIHNpCbphmavUQCMEnF')
                            <p>B</p>
                        @break

                        @case('price_1QDjnWIHNpCbphmaLw6t0Phs')
                            <p>C</p>
                        @break

                        @default
                    @endswitch --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
