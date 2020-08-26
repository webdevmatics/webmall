<div>

    <div class="row mb-4">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>2</option>
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>

        <div class="col">
            <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="Search Products...">
        </div>

    </div>

<br>


<table class="table">
    <thead>
        <tr>
            <th style="cursor: pointer;" wire:click="sortBy('name')">
                Name
                @include('partials._sort-icon',['field'=>'name'])
            </th>
            <th style="cursor: pointer;" wire:click="sortBy('description')" >
                Description
                @include('partials._sort-icon',['field'=>'description'])
            </th>
            <th style="cursor: pointer;" wire:click="sortBy('price')">
                Price
                @include('partials._sort-icon',['field'=>'price'])
            </th>
        </tr>
    </thead>

    @include('partials._spinner')

    <tbody >


        @foreach ($items as $item)

        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->price}}</td>
        </tr>

       @endforeach





    </tbody>
</table>

<div>
    <p>
        Showing {{$items->firstItem()}} to {{$items->lastItem()}} out of {{$items->total()}} items
    </p>
    <p>
        {{$items->onEachSide(4)->links()}}
    </p>
</div>



</div>
