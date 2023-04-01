<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Palestra Inizio da Gennaio 2024</title>     
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> 
        @vite(['resources/css/app.css', 'resources/js/app.js'])  
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0"> 
         <x-navbar/> 

          {{$slot}}
           
        </main>
        
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    
                </div>
            </div>
        </footer>
         
    </body>
</html> 