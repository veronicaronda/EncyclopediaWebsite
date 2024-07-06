<x-layout>
    <div class="container-fluid p-0 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row flex-column justify-content-center align-items-center ">
            <div class="col text-center mt-5"><h1>Edit Entry</h1></div>
            
            <div class="col-md-8 col shadow bgFirstColor mt-5 ">
                <form method="POST" action="{{route('entry.update',compact('entry'))}}" enctype="multipart/form-data" class="m-5 d-flex flex-column  border-rounded">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title">Add Entry Title</label>
                        <input type="text" class="form-control" name="title" value="{{$entry->title}}">
                    </div>
                    <div class="mb-3">   
                        <div class="col-3">
                            <img class="w-100 h-100" src="{{Storage::url($entry->img)}}" alt="">
                        </div>
                        
                        <label for="img">Add New Image</label>                  
                        <input type="file" name="img" class="form-control">
                    </div>
                    <div class="mb-3">   
                        <label>Select a Category</label>
                        <div class="categoryContainer position-relative d-flex flex-column justify-content-center ">
                            <div class="d-flex align-items-center justify-content-end position-relative w-100 h-100 mb-3 categoryBottomLine">
                                <select name="category_id" id="categorySelect" class="form-control shadow-none decorated">
                                    @foreach ($categories as $category)
                                        <option {{$category == $entry->category ? 'selected' : ''}}
                                            class="border-0" value="{{$category->id}}">
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="position-absolute fa-solid fa-chevron-down  ms-auto"></i>                                
                            </div>                           
                        </div>                       
                    </div>
                    <div class="mb-3 col-md-8 col">
                        <h4 class="titleTags">Select One or Multiple Tags</h4>    
                        <div class="btn-group d-flex flex-wrap mt-4" role="group" aria-label="Basic checkbox toggle button group">                            
                            @foreach ($tags as $tag)
                                <input type="checkbox" class="btn-check" id="btncheck{{$loop->iteration}}" name="tag_id[]" value={{$tag->id}} autocomplete="off" {{$entry->tags->contains($tag->id)?'checked':''}} >
                                <label class="btn border rounded-pill tags me-4" for="btncheck{{$loop->iteration}}">{{$tag->name}}</label>                     
                            @endforeach                    
                        </div>
                    </div>      
                    <div class="mb-3">  
                        <label for="body">Add Entry Body</label>
                        <textarea class="form-control" name="body"  cols="30" rows="10">{{$entry->body}}</textarea>
                    </div>
                    <div class="col-md-4 align-self-center d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary btnSubmit mt-2 ">Submit</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
{{-- <script>
    const checkbox = document.querySelectorAll('btn-check');
    checkbox.forEach((check) => {
        check.addEventListener('click',()=>{
            check.toggleAttribute('checked');

        })

    });
</script> --}}