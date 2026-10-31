<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدونة | المتحدة لنقل العفش والمكيفات بالرياض</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --primary: #14283f;
            --accent: #f5a623;
            --bg: #f6f8fb;
            --text: #667085;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: "Cairo", sans-serif;
            background: var(--bg);
            color: var(--text)
        }

        a {
            text-decoration: none
        }

        ul {
            list-style: none
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px
        }

        /* ================= Header ================= */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: var(--primary);
            box-shadow: 0 4px 20px rgba(0, 0, 0, .15);
        }

        .site-header .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            min-height: 78px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
        }

        .brand-icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: var(--accent);
            color: var(--primary);
            font-size: 1.2rem;
        }

        .brand-name {
            display: flex;
            flex-direction: column;
            font-weight: 800;
            font-size: 1.25rem;
            line-height: 1.2;
        }

        .brand-name small {
            font-size: .72rem;
            font-weight: 600;
            opacity: .8;
        }

        .navbar-collapse {
            display: flex;
            align-items: center;
            flex: 1;
            gap: 20px;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 4px;
            margin: 0 auto;
        }

        .nav-link {
            position: relative;
            display: block;
            padding: 10px 14px;
            color: rgba(255, 255, 255, .85);
            font-weight: 600;
            font-size: .95rem;
            transition: color .25s;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: 2px;
            right: 14px;
            left: 14px;
            height: 2px;
            background: var(--accent);
            transform: scaleX(0);
            transition: transform .25s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--accent);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1);
        }

        .btn-main {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 24px;
            border-radius: 40px;
            background: var(--accent);
            color: var(--primary);
            font-weight: 800;
            font-size: .95rem;
            transition: transform .25s, box-shadow .25s;
        }

        .btn-main:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(245, 166, 35, .4);
        }

        .navbar-toggler {
            display: none;
            width: 44px;
            height: 44px;
            border: 1px solid rgba(255, 255, 255, .3);
            border-radius: 10px;
            background: transparent;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
        }

        @media(max-width:991px) {
            .navbar-toggler {
                display: block
            }

            .navbar-collapse {
                display: none;
                position: absolute;
                top: 100%;
                right: 0;
                left: 0;
                flex-direction: column;
                align-items: stretch;
                padding: 16px;
                background: var(--primary);
                border-top: 1px solid rgba(255, 255, 255, .1);
                box-shadow: 0 16px 30px rgba(0, 0, 0, .2);
            }

            .navbar-collapse.show {
                display: flex
            }

            .navbar-nav {
                flex-direction: column;
                align-items: stretch;
                margin: 0
            }

            .nav-link::after {
                display: none
            }

            .nav-cta {
                justify-content: center
            }
        }

        /* ================= Hero ================= */
        .blog-hero {
            position: relative;
            padding: 110px 0 90px;
            text-align: center;
            color: #fff;
            overflow: hidden;
            background: linear-gradient(135deg, var(--primary), #0d1b2c);
        }

        .blog-hero::after {
            content: "";
            position: absolute;
            inset: auto -10% -60% -10%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, .08), transparent 60%);
        }

        .blog-hero .container {
            position: relative;
            z-index: 1
        }

        .section-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 30px;
            background: rgba(245, 166, 35, .15);
            color: var(--accent);
            font-weight: 700;
            font-size: .9rem;
        }

        .blog-hero h1 {
            font-weight: 800;
            font-size: clamp(1.9rem, 4vw, 3rem);
            margin: 14px 0
        }

        .blog-hero h1 span {
            color: var(--accent)
        }

        .blog-hero p {
            max-width: 640px;
            margin: 0 auto;
            opacity: .85;
            line-height: 2
        }

        .blog-breadcrumb {
            display: inline-flex;
            gap: 8px;
            margin-top: 22px;
            font-size: .95rem;
            opacity: .9
        }

        .blog-breadcrumb a {
            color: #fff
        }

        .blog-breadcrumb a:hover {
            color: var(--accent)
        }

        /* ================= Section + grid ================= */
        .blog-section {
            padding: 80px 0
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px
        }

        /* Card */
        .blog-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 28px rgba(20, 40, 63, .08);
            transition: transform .3s, box-shadow .3s;
            animation: fadeUp .5s ease both;
        }

        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(20, 40, 63, .16)
        }

        .blog-card-image {
            position: relative;
            display: block;
            aspect-ratio: 16/10;
            overflow: hidden
        }

        .blog-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s
        }

        .blog-card:hover .blog-card-image img {
            transform: scale(1.08)
        }

        .blog-date {
            position: absolute;
            top: 14px;
            right: 14px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--accent);
            color: var(--primary);
            font-weight: 700;
            font-size: .8rem;
            padding: 6px 12px;
            border-radius: 30px;
        }

        .blog-card-body {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 22px
        }

        .blog-card-body h3 {
            font-size: 1.15rem;
            font-weight: 700;
            line-height: 1.7;
            margin-bottom: 10px
        }

        .blog-card-body h3 a {
            color: var(--primary)
        }

        .blog-card-body h3 a:hover {
            color: var(--accent)
        }

        .blog-card-body p {
            line-height: 1.9;
            font-size: .95rem;
            margin-bottom: 18px
        }

        .blog-read-more {
            margin-top: auto;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            font-weight: 700;
            transition: gap .25s, color .25s;
        }

        .blog-read-more:hover {
            gap: 14px;
            color: var(--accent)
        }

        /* Empty */
        .blog-empty {
            text-align: center;
            padding: 70px 20px;
            background: #fff;
            border-radius: 18px
        }

        .blog-empty i {
            font-size: 3.5rem;
            color: var(--accent);
            margin-bottom: 18px
        }

        .blog-empty h3 {
            color: var(--primary)
        }

        /* Pagination (Bootstrap 5 markup) */
        .blog-pagination {
            display: flex;
            justify-content: center;
            margin-top: 50px
        }

        .blog-pagination .pagination {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            list-style: none;
            justify-content: center
        }

        .blog-pagination .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 44px;
            height: 44px;
            padding: 0 12px;
            border: 0;
            border-radius: 10px;
            background: #fff;
            color: var(--primary);
            font-weight: 700;
            box-shadow: 0 4px 14px rgba(20, 40, 63, .08);
            transition: .25s;
        }

        .blog-pagination .page-link:hover {
            background: var(--accent);
            color: var(--primary)
        }

        .blog-pagination .active .page-link {
            background: var(--primary);
            color: #fff
        }

        .blog-pagination .disabled .page-link {
            opacity: .4;
            pointer-events: none
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        @media(max-width:991px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media(max-width:640px) {
            .blog-grid {
                grid-template-columns: 1fr
            }

            .blog-hero {
                padding: 80px 0 60px
            }

            .blog-section {
                padding: 55px 0
            }
        }
    </style>
</head>

<body>

    <!-- ============ HEADER ============ -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}#home">
                    <span class="brand-icon"><i class="fa-solid fa-truck-fast"></i></span>
                    <span class="brand-name">المتحدة <small>لنقل العفش والمكيفات</small></span>
                </a>

                <button class="navbar-toggler" type="button" id="navToggler" aria-controls="mainNav"
                    aria-expanded="false" aria-label="فتح القائمة">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#home">الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#services">خدماتنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#why-us">لماذا نحن</a></li>
                        <li class="nav-item"><a class="nav-link active" href="{{ route('blog.index') }}">المدونة</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#works">أعمالنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">تواصل معنا</a></li>
                    </ul>
                    <a class="btn btn-main nav-cta" href="tel:0575103571">
                        <i class="fa-solid fa-phone"></i>
                        اتصل الآن
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- ============ HERO ============ -->
    <section class="blog-hero">
        <div class="container">
            <span class="section-tag"><i class="fa-solid fa-newspaper"></i> مدونة المتحدة</span>
            <h1>مقالات ونصائح <span>نقل العفش</span> والمكيفات</h1>
            <p>تعرّف على أحدث المقالات والنصائح حول نقل الأثاث وفك وتركيبه ونقل المكيفات وتخزين العفش داخل الرياض
                وخارجها.</p>
            <nav class="blog-breadcrumb">
                <a href="{{ url('/') }}">الرئيسية</a>
                <i class="fa-solid fa-angle-left"></i>
                <span>المدونة</span>
            </nav>
        </div>
    </section>

    <!-- ============ BLOG LIST ============ -->
    <section class="blog-section">
        <div class="container">

            @if ($posts->count())
                <div class="blog-grid">
                    @foreach ($posts as $post)
                        <article class="blog-card" style="animation-delay: {{ $loop->index * 60 }}ms">
                            <a href="{{ url('blog/' . $post->id) }}" class="blog-card-image">
                                <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/1.jpg') }}"
                                    alt="{{ $post->title }}" loading="lazy">
                                <span class="blog-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $post->created_at->locale('ar')->translatedFormat('d F Y') }}
                                </span>
                            </a>

                            <div class="blog-card-body">
                                <h3><a href="{{ url('blog/' . $post->id) }}">{{ $post->title }}</a></h3>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 140) }}</p>
                                <a href="{{ url('blog/' . $post->id) }}" class="blog-read-more">
                                    اقرأ المزيد <i class="fa-solid fa-arrow-left"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="blog-empty">
                    <i class="fa-regular fa-folder-open"></i>
                    <h3>لا توجد مقالات حاليًا</h3>
                    <p>سيتم نشر المقالات هنا قريبًا.</p>
                </div>
            @endif

        </div>
    </section>

    <script>
        // فتح وقفل قائمة الموبايل (بدون Bootstrap)
        (function() {
            var btn = document.getElementById('navToggler');
            var nav = document.getElementById('mainNav');
            btn.addEventListener('click', function() {
                var open = nav.classList.toggle('show');
                btn.setAttribute('aria-expanded', open);
            });
        })();
    </script>
</body>

</html>
