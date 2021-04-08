<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                     <a href=" {{ __('users/1') }} ">Acceder à mes posts </a>
                     
                </div>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf 
                        <input type="file" name="image">
                        <input type="submit" value="upload">
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- On crée la form
    - on crée alors la route avec route::méthodgetpost..('/upload ou autre, function (){
        on met ici ce qu'on veut faire 
    })
    csrf protection no one can submit your form with a data alétoire @crsf facilite ça 

    to create the data we need to say in the f°
    dd(request() -> all()); 
     name -> value to remove from being a field
    
    on utilise plutot comme synthace : function(Request $request) {
        dd(..)
    }

    retrieve the image from the request 
    au lieu dde all je met 
    file('image')
    il faut alors préciser dans form enctype multiform data pour qu'il comprenne le type
     
     ou au lieu de file on peut mettre ds dd ($request->image) il le comprendra car on a préciser enctype
     comment vérifier si l'image est la ou pas on peut mettre hasfile qui renvoit un booléan 
     to store the file :
     above dd 
     $request->image->store('image','public);
     return 'uploaded!!'
     dc ds storage image on peut avoir ça
pour le mettre dans public on précise ça en deuxième argmt
     -->