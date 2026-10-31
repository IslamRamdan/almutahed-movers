<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} | المتحدة لنقل العفش والمكيفات بالرياض</title>
    <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 155) }}">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 155) }}">
    <meta property="og:image" content="{{ $post->image ? asset('storage/' . $post->image) : asset('images/1.jpg') }}">
    <meta property="og:type" content="article">
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

        html {
            scroll-behavior: smooth
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
            color: #fff
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
            line-height: 1.2
        }

        .brand-name small {
            font-size: .72rem;
            font-weight: 600;
            opacity: .8
        }

        .navbar-collapse {
            display: flex;
            align-items: center;
            flex: 1;
            gap: 20px
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 4px;
            margin: 0 auto
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
            color: var(--accent)
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1)
        }

        .btn-main {
            display: inline-flex;
            align-items: center;
            justify-content: center;
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
            box-shadow: 0 8px 20px rgba(245, 166, 35, .4)
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
        }

        /* ================= Hero ================= */
        .post-hero {
            position: relative;
            padding: 90px 0 120px;
            text-align: center;
            color: #fff;
            overflow: hidden;
            background: linear-gradient(135deg, var(--primary), #0d1b2c);
        }

        .post-hero::after {
            content: "";
            position: absolute;
            inset: auto -10% -60% -10%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, .08), transparent 60%);
        }

        .post-hero .container {
            position: relative;
            z-index: 1;
            max-width: 900px
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

        .post-hero h1 {
            font-weight: 800;
            font-size: clamp(1.6rem, 3.6vw, 2.6rem);
            line-height: 1.7;
            margin: 16px 0
        }

        .post-meta {
            display: inline-flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 18px;
            font-size: .95rem;
            opacity: .9
        }

        .post-meta i {
            color: var(--accent);
            margin-left: 6px
        }

        .blog-breadcrumb {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-top: 22px;
            font-size: .9rem;
            opacity: .9
        }

        .blog-breadcrumb a {
            color: #fff
        }

        .blog-breadcrumb a:hover {
            color: var(--accent)
        }

        /* ================= Layout ================= */
        .post-section {
            padding: 0 0 80px;
            margin-top: -70px;
            position: relative;
            z-index: 2
        }

        .post-layout {
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 28px;
            align-items: start
        }

        /* Article */
        .post-article {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(20, 40, 63, .1)
        }

        .post-cover {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            display: block
        }

        .post-body {
            padding: 36px
        }

        .post-content {
            color: #475467;
            font-size: 1.05rem;
            line-height: 2.1;
            overflow-wrap: anywhere
        }

        .post-content h2,
        .post-content h3,
        .post-content h4 {
            color: var(--primary);
            font-weight: 800;
            line-height: 1.7;
            margin: 30px 0 12px
        }

        .post-content h2 {
            font-size: 1.5rem;
            padding-right: 14px;
            border-right: 4px solid var(--accent)
        }

        .post-content h3 {
            font-size: 1.25rem
        }

        .post-content p {
            margin-bottom: 16px
        }

        .post-content ul,
        .post-content ol {
            margin: 0 0 16px;
            padding-right: 24px
        }

        .post-content ul {
            list-style: disc
        }

        .post-content li {
            margin-bottom: 6px
        }

        .post-content img {
            max-width: 100%;
            height: auto;
            border-radius: 14px;
            margin: 14px 0
        }

        .post-content a {
            color: var(--primary);
            font-weight: 700;
            border-bottom: 2px solid var(--accent)
        }

        .post-content blockquote {
            margin: 20px 0;
            padding: 18px 22px;
            background: var(--bg);
            border-right: 4px solid var(--accent);
            border-radius: 12px;
            color: var(--primary);
            font-weight: 600
        }

        .post-content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 16px;
            display: block;
            overflow-x: auto
        }

        .post-content th,
        .post-content td {
            border: 1px solid #e4e7ec;
            padding: 10px 14px
        }

        .post-content th {
            background: var(--primary);
            color: #fff
        }

        /* Share */
        .post-share {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            margin-top: 34px;
            padding-top: 24px;
            border-top: 1px solid #eef0f4
        }

        .post-share strong {
            color: var(--primary);
            margin-left: 6px
        }

        .share-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 0;
            display: grid;
            place-items: center;
            color: #fff;
            font-size: 1.05rem;
            cursor: pointer;
            transition: transform .25s;
        }

        .share-btn:hover {
            transform: translateY(-3px)
        }

        .share-wa {
            background: #25d366
        }

        .share-fb {
            background: #1877f2
        }

        .share-x {
            background: #111
        }

        .share-copy {
            background: var(--primary)
        }

        /* Prev / Next */
        .post-nav {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-top: 24px
        }

        .post-nav a {
            display: flex;
            flex-direction: column;
            gap: 6px;
            padding: 20px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(20, 40, 63, .07);
            transition: transform .3s, box-shadow .3s;
        }

        .post-nav a:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 34px rgba(20, 40, 63, .14)
        }

        .post-nav small {
            color: var(--accent);
            font-weight: 800
        }

        .post-nav span {
            color: var(--primary);
            font-weight: 700;
            line-height: 1.7
        }

        .post-nav .next {
            text-align: left
        }

        .post-nav .only-next {
            grid-column: 2
        }

        /* Sidebar */
        .post-sidebar {
            position: sticky;
            top: 100px;
            display: flex;
            flex-direction: column;
            gap: 22px
        }

        .side-card {
            background: #fff;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 8px 28px rgba(20, 40, 63, .08)
        }

        .side-card h3 {
            color: var(--primary);
            font-size: 1.1rem;
            font-weight: 800;
            margin-bottom: 18px;
            padding-right: 12px;
            border-right: 4px solid var(--accent)
        }

        .side-post {
            display: flex;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #eef0f4
        }

        .side-post:last-child {
            border-bottom: 0;
            padding-bottom: 0
        }

        .side-post:first-of-type {
            padding-top: 0
        }

        .side-post img {
            width: 78px;
            height: 66px;
            object-fit: cover;
            border-radius: 10px;
            flex-shrink: 0
        }

        .side-post h4 {
            color: var(--primary);
            font-size: .92rem;
            font-weight: 700;
            line-height: 1.7;
            transition: color .25s
        }

        .side-post:hover h4 {
            color: var(--accent)
        }

        .side-post small {
            color: var(--text);
            font-size: .78rem
        }

        .side-cta {
            background: linear-gradient(135deg, var(--primary), #0d1b2c);
            color: #fff;
            text-align: center
        }

        .side-cta h3 {
            color: #fff;
            border: 0;
            padding: 0
        }

        .side-cta p {
            opacity: .85;
            line-height: 1.9;
            font-size: .93rem;
            margin-bottom: 18px
        }

        .side-cta .btn-main {
            width: 100%;
            margin-bottom: 10px
        }

        .side-cta .btn-wa {
            background: #25d366;
            color: #fff
        }

        /* Floating buttons */
        .floating-contact {
            position: fixed;
            left: 18px;
            bottom: 18px;
            z-index: 999;
            display: flex;
            flex-direction: column;
            gap: 10px
        }

        .floating-contact a {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: #fff;
            font-size: 1.35rem;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .25);
            transition: transform .25s
        }

        .floating-contact a:hover {
            transform: scale(1.1)
        }

        .floating-phone {
            background: var(--primary)
        }

        .floating-whatsapp {
            background: #25d366
        }

        /* Toast */
        .copy-toast {
            position: fixed;
            bottom: 90px;
            right: 50%;
            transform: translateX(50%) translateY(20px);
            background: var(--primary);
            color: #fff;
            padding: 10px 22px;
            border-radius: 30px;
            font-weight: 700;
            opacity: 0;
            pointer-events: none;
            transition: .3s;
            z-index: 1001
        }

        .copy-toast.show {
            opacity: 1;
            transform: translateX(50%) translateY(0)
        }

        @media(max-width:991px) {
            .post-layout {
                grid-template-columns: 1fr
            }

            .post-sidebar {
                position: static
            }
        }

        @media(max-width:640px) {
            .post-hero {
                padding: 70px 0 100px
            }

            .post-body {
                padding: 22px
            }

            .post-nav {
                grid-template-columns: 1fr
            }

            .post-nav .only-next {
                grid-column: auto
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
    <section class="post-hero">
        <div class="container">
            <span class="section-tag"><i class="fa-solid fa-newspaper"></i> مدونة المتحدة</span>
            <h1>{{ $post->title }}</h1>

            <div class="post-meta">
                <span><i
                        class="fa-regular fa-calendar"></i>{{ $post->created_at->locale('ar')->translatedFormat('d F Y') }}</span>
                <span><i
                        class="fa-regular fa-clock"></i>{{ max(1, ceil(str_word_count(strip_tags($post->content)) / 180)) }}
                    دقائق قراءة</span>
            </div>

            <nav class="blog-breadcrumb">
                <a href="{{ url('/') }}">الرئيسية</a>
                <i class="fa-solid fa-angle-left"></i>
                <a href="{{ route('blog.index') }}">المدونة</a>
                <i class="fa-solid fa-angle-left"></i>
                <span>{{ \Illuminate\Support\Str::limit($post->title, 40) }}</span>
            </nav>
        </div>
    </section>

    <!-- ============ POST ============ -->
    <section class="post-section">
        <div class="container">
            <div class="post-layout">

                <!-- Main -->
                <div>
                    <article class="post-article">
                        <img class="post-cover"
                            src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/1.jpg') }}"
                            alt="{{ $post->title }}">

                        <div class="post-body">
                            <div class="post-content">
                                {!! $post->content !!}
                            </div>

                            <div class="post-share">
                                <strong>شارك المقال:</strong>
                                <a class="share-btn share-wa" target="_blank" rel="noopener" aria-label="واتساب"
                                    href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}"><i
                                        class="fa-brands fa-whatsapp"></i></a>
                                <a class="share-btn share-fb" target="_blank" rel="noopener" aria-label="فيسبوك"
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a class="share-btn share-x" target="_blank" rel="noopener" aria-label="إكس"
                                    href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}"><i
                                        class="fa-brands fa-x-twitter"></i></a>
                                <button type="button" class="share-btn share-copy" id="copyLink"
                                    aria-label="نسخ الرابط"><i class="fa-solid fa-link"></i></button>
                            </div>
                        </div>
                    </article>


                </div>

                <!-- Sidebar -->
                <aside class="post-sidebar">
                    @if (!empty($related) && $related->count())
                        <div class="side-card">
                            <h3>مقالات أخرى</h3>
                            @foreach ($related as $item)
                                <a href="{{ url('blog/' . $item->id) }}" class="side-post">
                                    <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/1.jpg') }}"
                                        alt="{{ $item->title }}" loading="lazy">
                                    <div>
                                        <h4>{{ \Illuminate\Support\Str::limit($item->title, 55) }}</h4>
                                        <small>{{ $item->created_at->locale('ar')->translatedFormat('d F Y') }}</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endif

                    <div class="side-card side-cta">
                        <h3>تحتاج خدمة نقل عفش؟</h3>
                        <p>تواصل معنا الآن لترتيب نقل الأثاث والمكيفات داخل الرياض وخارجها.</p>
                        <a href="tel:0575103571" class="btn btn-main"><i class="fa-solid fa-phone"></i>
                            0575103571</a>
                        <a href="https://wa.me/966575103571" target="_blank" rel="noopener"
                            class="btn btn-main btn-wa"><i class="fa-brands fa-whatsapp"></i> تواصل عبر واتساب</a>
                    </div>

                    <a href="{{ route('blog.index') }}" class="btn btn-main">
                        <i class="fa-solid fa-arrow-right"></i> العودة لكل المقالات
                    </a>
                </aside>

            </div>
        </div>
    </section>

    <!-- Floating -->
    <div class="floating-contact">
        <a href="tel:0575103571" class="floating-phone" aria-label="اتصل بنا"><i class="fa-solid fa-phone"></i></a>
        <a href="https://wa.me/966575103571" target="_blank" rel="noopener" class="floating-whatsapp"
            aria-label="تواصل عبر واتساب"><i class="fa-brands fa-whatsapp"></i></a>
    </div>

    <div class="copy-toast" id="copyToast">تم نسخ الرابط</div>

    <script>
        (function() {
            // قائمة الموبايل
            var btn = document.getElementById('navToggler');
            var nav = document.getElementById('mainNav');
            btn.addEventListener('click', function() {
                var open = nav.classList.toggle('show');
                btn.setAttribute('aria-expanded', open);
            });

            // نسخ الرابط
            var copy = document.getElementById('copyLink');
            var toast = document.getElementById('copyToast');
            copy.addEventListener('click', function() {
                var done = function() {
                    toast.classList.add('show');
                    setTimeout(function() {
                        toast.classList.remove('show');
                    }, 1800);
                };
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(window.location.href).then(done);
                } else {
                    var t = document.createElement('input');
                    t.value = window.location.href;
                    document.body.appendChild(t);
                    t.select();
                    document.execCommand('copy');
                    document.body.removeChild(t);
                    done();
                }
            });
        })();
    </script>
</body>

</html>
