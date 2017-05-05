<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>
        {{# isset($seo['title']) ? $seo['title'] : '---'; }}
    </title>
    <meta name="description" content="{{# isset($seo['description']) ? $seo['description'] : '---'; }}" />
    <meta name="keywords" content="{{# isset($seo['keywords']) ? $seo['keywords'] : '---'; }}" />
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{# isset($seo['name']) ? $seo['name'] : '---'; }}" />
    <meta itemprop="description" content="{{# isset($seo['description']) ? $seo['description'] : '---'; }}" />
    <meta itemprop="image" content="Data/CropImage/images/v-636224495592938830/dienthoaihot_netx200x200.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Open Graph data -->
    <meta property="og:title" content="{{# isset($seo['title']) ? $seo['title'] : '---'; }}" />
    <meta property="og:url" content="{{# URL::thisUrl() }}" />
    <meta property="og:image" content="Data/CropImage/images/v-636224495592938830/dienthoaihot_netx200x200.jpg" />
    <meta property="og:description" content="{{# isset($seo['description']) ? $seo['description'] : '---'; }}" />
    <meta property="og:site_name" content="{{# URL::base_path() }}" />
    <meta property="fb:app_id" content="{{# isset($seo['app_id']) ? $seo['app_id'] : '---'; }}" />
    <meta property="og:type" name="og_type" content="article" />
    <meta property="og:locale:alternate" content="vi_VN" />
    <meta property="article:author" content="{{# isset($seo['author']) ? $seo['author'] : '---'; }}" />
    <meta property="article:publisher" content="{{# isset($seo['publisher']) ? $seo['publisher'] : '---'; }}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="author" content="{{# URL::base_path() }}" />
    <meta name="language" content="vietnamese" />
    <meta name="geo.region" content="Vietnamese" />
    <meta name="revisit-after" content="1 days" />
    <meta name="robots" content="index,follow" />
    <link href="{{# URL::base_path('public/templates/front/')}}Content/images/v-636173931411383511/fape.jpg" rel="shortcut icon" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
    window.jQuery || document.write('<script src="../code.jquery.com/jquery-1.11.3.min.js">\x3C/script>')
    </script>
    <script type="text/javascript">
    window.jQuery || document.write('<script src="index.html">\x3C/script>')
    </script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="{{# URL::base_path('public/templates/front/')}}Content/utils/zebradialog/default/v-636025530866807538/zebradialog.css" rel="stylesheet" />
    <link type="text/css" href="{{# URL::base_path('public/templates/front/')}}Content/utils/fancybox/v-636025546430416994/jquery.fancybox.css" rel="stylesheet" />
    <script type="text/javascript" src="{{# URL::base_path('public/templates/front/')}}Content/utils/fancybox/v-636025546430547076/jquery.fancybox.pack.js"></script>
    <link type="text/css" href="{{# URL::base_path('public/templates/front/')}}Content/utils/owl.carousel/v-636123995592049995/owl.carousel.css" rel="stylesheet" />
    <script type="text/javascript" src="{{# URL::base_path('public/templates/front/')}}Content/utils/owl.carousel/v-636123995592069996/owl.carousel.js"></script>
    <link type="text/css" href="{{# URL::base_path('public/templates/front/')}}Content/skins/v-636149779988914051/jquery.mmenu.all.css" rel="stylesheet" />
    <script type="text/javascript" src="{{# URL::base_path('public/templates/front/')}}Content/js/v-636149948392151178/jquery.mmenu.min.all.js"></script>
    <script type="text/javascript" src="{{# URL::base_path('public/templates/front/')}}Content/js/v-636149948392141178/jquery.mixitup.js"></script>
    <script type="text/javascript" src="{{# URL::base_path('public/templates/front/')}}Content/js/v-636149948392171180/jquery.sticky.js"></script>
    <link type="text/css" href="{{# URL::base_path('public/templates/front/')}}Content/skins/v-636288241457666634/style.css" rel="stylesheet" />
    <script type="text/javascript" src="{{# URL::base_path('public/templates/front/')}}Content/js/v-636280238867550571/library.js"></script>
</head>

<body>
    <div class="wrapper">
        {{{include front/layout/header.layout}}}
        {{{body}}}
        <!-- Footer -->
        {{{include front/layout/footer.layout}}}
        <!-- Footer -->
    </div>
    <div>
        <a id="callToMe" href="tel:0129.628.3333"></a>
    </div>
</body>

</html>
