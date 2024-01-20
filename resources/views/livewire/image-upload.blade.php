<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16" enctype="multipart/form-data">
        @if ($image)
            Preview:
            <div class="flex flex-wrap justify-center gap-6">
                @foreach ($image as $im)
                    <img src="{{ $im->temporaryUrl() }}" class="w-[110x] h-[90px] object-cover">
                @endforeach
            </div>
        @endif

        <input type="file" wire:model="image" class="mb-4" multiple>

        @error('image')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Save
            Photo</button>
    </form>

    <div class="flex flex-1  max-width-[100%]">

        @foreach ($images as $image)
            <div>
                <img src="{{ $image }}" class="col-6">
            </div>
        @endforeach
    </div>

</div>
