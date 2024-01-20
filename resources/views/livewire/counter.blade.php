<div class="p-16 flex justify-center items-center gap-6">
    <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-iningo-600 rounded text-white">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-iningo-600 rounded text-white">-</button>
</div>
