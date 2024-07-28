<div>

    <select type="text" class="mr-10 w-2/6 ">
        <option value="">
            Выберите область
        </option>
        @foreach ($countries['areas'] as $key => $item)
            <option 
            value="{{$item['id']}}"
            label="{{$item['name']}}"
            wire:change="setArea('{{$key}}')"
            >
            </option>
        @endforeach
    </select>
    <!-- if (!empty($area)) -->
    <select class=" w-1/3" >
        <option>Выберите город</option>
        @foreach ($countries['areas'][$area || 0]['areas'] as $item)
        <option 
        
        label="{{$item['name']}}"
        >
    </option>
    @endforeach
</select>
<!-- endif -->
</div>