<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>
<body>
    @include('partiels.navbar')


    <div class="container mx-auto">
        @yield('content')
    </div>




<script>
    // function Menu(e){
    //     let list = document.querySelector('ul');
    //     e.name ==='menu' ?
    //     (e.name ="close", list.classList.add('top-[80px]'),
    //     list.classList.add('opacity-100')):
    //     (e.name ="menu", list.classList.remove('top-[80px]'),
    //     list.classList.remove('opacity-100'));

    // }
    // function Menu(e){
    //   let list = document.querySelector('ul');
    //   e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    // }

</script>
    <script  nomodule type="module" src="{{asset('js/app.js')}}"></script>
</body>
</html>