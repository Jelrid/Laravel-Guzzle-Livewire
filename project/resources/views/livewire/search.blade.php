<div class="relative w-full max-w-md sm:-ml-2 border border-sky-400">

    <select type="text" wire:model="searchTerm">
        @foreach ($countries['areas'] as $item)
            <option>
                {{$item['name']}}
            </option>
        @endforeach
    </select>
</div>