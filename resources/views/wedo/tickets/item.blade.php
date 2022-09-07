<x-app-layout>
    @livewire('wedo.tickets.ticket', ['item' => json_encode($ticket)])

    <x-wedo.home.footer></x-wedo.home.footer>
</x-app-layout>
