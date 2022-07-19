{{-- NavBar --}}

    <nav class="p-5  bg-blue-500 md:flex md:items-center md:justify-between shadow ">

        {{-- Logo --}}
        <div class="flex justify-between items-center">
            <a href="{{route('welcome')}}" class="text-2xl cursor-pointer">
                <img src="{{asset('images/logo-left.png')}}" class="h-12 inline" alt="" srcset="">
                <span class="text-white text-2xl font-[inter]">Rosto.infinity</span>
            </a>
            {{-- <span class="text-3xl cursor-pointer md:hidden mx-2 block">
              <ion-icon  name="menu" onclick="Menu(this)"></ion-icon >  
            </span> --}}
             <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
        </div>
        
        {{-- Humburger --}}


        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static  absolute bg-blue-500 w-full left-0 md:w-auto md:py-0 py-0 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="{{route('welcome')}}" class="text-xl hover:text-orange-300 duration-500">Accueil</a>
             </li>
             <li class="mx-4 my-6 md:my-0">
                 <a href="{{route('posts.create')}}" class="text-xl hover:text-orange-300 duration-500">Créer un nouveau post</a>
             </li>

             <li class="mx-4 my-6 md:my-0">
                <a href="{{route('conctact')}}" class="text-xl hover:text-orange-300 duration-500">Contact</a>
            </li>



            <li class="mx-4 my-6 md:my-0">
                <a href="#{{route('welcome')}}" class="text-xl hover:text-orange-300 duration-500">Blog</a>
            </li>
            <button class="px-5 py-2 bg-red-500 border text-white font-[inter rounded-3xl hover:bg-white-400 ">Connexion</button>
        </ul>

    </nav>

<script>
    // function Menu(e){
    //     let list = document.querySelector('ul');
    //     e.name ==='menu' ?
    //     (e.name ="close", list.classList.add('top-[80px]'),
    //     list.classList.add('opacity-100')):
    //     (e.name ="menu", list.classList.remove('top-[80px]'),
    //     list.classList.remove('opacity-100'));

    // }
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }

</script>
    


