<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encyclopedia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   
   <div class="d-block d-lg-none">
    <x-navbarMobile/>
   </div>

    <div class="container-fluid p-0 min-vh-100">
        <div class="row">
            <div class="d-none d-lg-block">
                <x-navbar/>

            </div>
            <div class="col-md-3 min-vh-100 p-0 col d-none d-lg-block bgThirdColor">
                <x-sidebar/>
            </div>
            <div class="col-lg-9 p-0 col">
               
                 {{$slot}}
            </div>

        </div>
        
       
        
    </div>

    <x-footer/>
</body>
</html>