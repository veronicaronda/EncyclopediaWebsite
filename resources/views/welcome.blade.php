<x-layout>   
    <div class="container-fluid">
        <div class="row flex-column align-items-center mt-5">          
            @if (session('message'))
            <div class="col-md-10 col ">
                <div class="alert alert-success"> {{ session('message') }}</div>
            </div>
            @endif
            <div class="col-10 mt-5">
                <form action="{{route('entry.search')}}" method="GET">                    
                    <div class="mb-3 position-relative d-flex align-items-center">
                        <input id="search" type="text" name="search" placeholder="Search entry" class="form-control">
                        <i class="fa-solid fa-magnifying-glass position-absolute ms-3 text-secondary"></i>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btnSubmit ">Search</button>
                    </div>                    
                </form>
            </div>
            <div class="col text-center mt-5">
                <h1>List of Entries</h1>
            </div>            
            @foreach ($entries as $entry)
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