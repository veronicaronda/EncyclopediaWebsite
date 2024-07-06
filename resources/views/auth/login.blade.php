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
        <div class="row flex-column justify-content-center align-items-center mt-5">
            <div class="col text-center mt-5"><h1>Log in</h1></div>
            
            <div class="col-md-8 col shadow bgFirstColor mt-5 ">
                <form method="POST" action="{{route('login')}}"  class="m-5 d-flex flex-column  border-rounded">
                    @csrf
                    <div class="mb-3">
                        <label>Email</label>
                      <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">   
                        <label>Password</label>                  
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <p class="textSmall thirdColor">Not signed in? <a class="fourthColor" href="{{route('register')}}">Sign in</a></p>
                    </div>
                                        
                    <div class="col-md-4 align-self-center d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary btnSubmit mt-2 ">Log In</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>