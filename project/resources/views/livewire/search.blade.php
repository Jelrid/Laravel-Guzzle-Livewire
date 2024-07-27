<div class="relative w-full max-w-md sm:-ml-2 border border-sky-400">

    <select type="text" wire:model="searchTerm">
        @foreach ($countries['areas'] as $item)
        <optgroup label="{{$item['name']}}">
            @foreach ($item['areas'] as $city)
            <option>
                {{$city['name']}}
                </option>
                @endforeach
        </optgroup>    
        @endforeach
    </select>
</div>