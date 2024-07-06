
<x-layout>
    
    <div class="container-fluid">
        <div class="row vh-50 imgContainer text-center justify-content-center align-items-center  position-relative" style="background-image: url({{Storage::url($entry->img)}})">
            <h1 class="z-2 bgFirstColor thirdColor w-50 py-2"> {{$entry->title}}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row flex-column justify-content-center align-items-center ">
            @if (session('message'))
            <div class="col-md-10 col">
                <div class="alert alert-success"> {{ session('message') }}</div>
            </div>
            @endif
            
            <div class="col-10 col-md-8 py-4 borderBottom d-flex flex-column">
                @auth  
                <div class="d-flex justify-content-evenly w-100">
                    <a class="btnEditCostum px-4" href="{{route('entry.edit',compact('entry'))}}">Edit</a>
                    <form method="POST" action="{{route('entry.delete', compact('entry'))}}">
                        @csrf
                        @method('delete')
                        <button class=" btnDeleteCostum px-4" type="submit">Delete</button>
                    </form>
                </div>                
                @endauth
                <div class="d-flex flex-wrap justify-content-md-between mt-5">
                    <div class="d-flex flex-column col-md-6 col-12 ms-auto">
                        <p class="date">Published on {{$entry->created_at->format('d-m-Y')}}, by <span class="firstColor fw-bold ms-1"><a href="{{route('entry.user',$entry->user)}}">{{$entry->user->name}}</a></span> </p>
                        <p class="date m-0">Last edited on {{$entry->updated_at->format('d-m-Y, h:i')}}</p>
                    </div>
                    <div class="d-flex flex-column col-md-6 col-12 ">                        
                        <div class="d-flex flex-column  align-self-md-end">
                            <h4 class="categoryTxt mt-3 m-md-0">Category: 
                                <a class="fw-bold ps-2" href="{{route('entry.category',$entry->category)}}">{{$entry->category->name}}
                                </a>
                            </h4>
                            <div class="d-flex flex-wrap mt-3 m-md-0">
                                @foreach ($entry->tags as $tag)
                                <h4 class="categoryTxt"> 
                                    <a class="fw-bold ps-2" href="{{route('entry.tag',$tag)}}">
                                        #{{$tag->name}}
                                    </a>
                                </h4>                       
                            @endforeach  
                            </div>
                          

                        </div>
                        
                    </div>
                </div>    
             
                           
            </div>            
            
            <div class="col col-md-8">
                <div class="m-5 entryBody">
                    @markdown($entry->body)                   
                </div>
            </div>
        </div>
    </div>
    
    
</x-layout>