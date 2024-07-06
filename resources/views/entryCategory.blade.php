<x-layout>
   
    <div class="container-fluid">
        <div class="row flex-column align-items-center mt-5">          
            <div class="col text-center mt-5">
                <h1>List of Entries by {{$category->name}}</h1>
            </div>
            
            @foreach ($category->entries as $entry)
            <div class="col-10  mt-5  cardContainer">
                <a href="{{route('entry.show', compact('entry'))}}">
                    <div class="card">
                        <div class="card-body text-center shadow bgFirstColor thirdColor">
                          <h3>{{$entry->title}}</h3>
                        </div>
                      </div>
                </a>
            </div>
    @endforeach

        </div>
    </div>
    
        
</x-layout>