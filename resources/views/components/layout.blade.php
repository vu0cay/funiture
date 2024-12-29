<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    <title>Pixel Positions</title>
    @Vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-10">
    <div class="space-y-10">
        <nav>
            <div class="flex justify-between items-center border-b border-white/10 p-5">
                
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo_ctuet.png')}}" class="size-14"  alt="">
                </a>

                <div class="font-bold space-x-8">
                    <a href="#">Mặt hàng</a>
                    <a href="#">Giỏ hàng</a>
                    <a href="#">Thông báo</a>
                    <a href="#">Hỗ trợ</a>
                </div>

                @auth
                    <div class="flex gap-3">
                        <a href="/jobs/create" class="">Đăng mặt hàng</a>
                        <form action="/logout" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Đăng xuất</button>
                        </form>
                    </div>
                @endauth
                    
                @guest    
                    <div class="flex gap-3">
                        <a href="/register" class="">Đăng ký</a>
                        <a href="/login" class="">Đăng nhập</a>
                    </div>
                @endguest
            </div>
        </nav>

        <!-- <main class="mx-auto max-w-[986px] space-y-10"> -->
        <main class="mx-auto max-w-[1280px] space-y-10">
            {{$slot}}
        </main>
    </div>
</body>
</html>