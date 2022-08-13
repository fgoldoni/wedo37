<x-app-layout>
    @livewire('wedo.tickets.item', ['ticketId' => $ticket->id])

    <x-wedo.home.footer></x-wedo.home.footer>
</x-app-layout>
