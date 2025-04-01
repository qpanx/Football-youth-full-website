<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('color/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="icon" type="imge/png" href="main-color.png">
    <title>Welcome</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('color/swiper-bundle.min.css')}}">
</head>
<body>
<header>
    <nav style="display: flex; justify-content: space-between;" class="navbar">
        <a href="#" class="logo"><img width="60" height="70" src="main-color.png"><a>
                <ul class="menu-links">
                    <span id="close-menu-btn" class="material-symbols-outlined">close</span>
                    <li><a href="#hero-section">Home</a></li>
                    @foreach(\App\Models\Section::all() as $section)
                        <li><a href="#{{ str($section->title)->slug() }}">{{ $section->title }}</a></li>
                    @endforeach
                </ul>
                <span id="menu-btn" class="material-symbols-outlined">menu</span>
    </nav>
</header>


<section dir="rtl" id="hero-section" class="hero-section">
    <div class="content">
        <h1>مستقبل فارس الشمال</h1>
        <p>
            يتجسد في شباب وناشئي كرة القدم الذين يمثلون الأمل والطموح. هؤلاء اللاعبين الصغار يتدربون بجد واجتهاد، حاملين على عاتقهم أحلام الجماهير وآمال النادي. من خلال التزامهم وتفانيهم، يسعون لتحقيق البطولات ورفع راية فارس الشمال عالياً. إنهم ليسوا مجرد لاعبين، بل هم قادة المستقبل الذين سيواصلون مسيرة النجاح والتفوق
        </p>
        <button>إضغط</button>
    </div>
</section>
<!----->

<div class="slide-container">
    <div class="slide-container1 swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (3).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (4).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (5).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (3).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (3).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (3).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (3).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (3).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overly"></span>

                        <div class="card-image">
                            <img src="../imgs/wallpaperflare.com_wallpaper (3).jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Lionel Messi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex debitis libero ea eaque id eligendi commodi itaque porro, velit iusto sunt necessitatibus dolores maxime corporis minus consequuntur obcaecati, nulla totam.</p>

                        <button class="button1">للمزيد</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>


    <script src="{{url('color/swiper-bundle.min.js')}}"></script>
    <script src="{{url('color/script.js')}}"></script>
</div>


<script>
    const header = document.querySelector("header");
    const menuBtn = document.querySelector("#menu-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");

    menuBtn.addEventListener("click", () => {
        header.classList.toggle("show-mobile-menu");
    });

    closeMenuBtn.addEventListener("click", () => {
        menuBtn.click();
    });
</script>
</body>
</html>
