
<meta charset="utf-8" />
<!-- SEO -->
<title>{{{ $title }}}</title>
<meta name="author" content="">
<meta name="description" content="@yield('description')" />
<meta name="keywords" content="@yield('keywords')" />
<meta name="author" content="@yield('author')" />
<link rel="canonical" href="/" />
<!-- Google will often use this as its description of your page/site. Make it good. -->
<meta name="google-site-verification" content="">
<!-- TODO: Добавить схему в верстку! -->
<!-- Dublin Core Metadata : http://dublincore.org/ -->
<meta name="DC.title" content="{{{ $title }}}">
<meta name="DC.subject" content="@yield('description')">
<meta name="DC.creator" content="@yield('author')">

<!-- CSS Styles -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
{{ HTML::style('theme/css/foundation.css') }}
{{ HTML::style('theme/css/font-awesome.min.css') }}
{{ HTML::style('theme/css/styles.css') }}
<!-- JavaScripts -->
{{ HTML::script('theme/js/jquery.min.js') }}
{{ HTML::script('theme/js/jquery.fancybox-1.3.1.pack.js') }}
{{ HTML::script('theme/js/jquery.nivo.slider.pack.js') }}
{{ HTML::script('theme/js/foundation.min.js') }}
{{ HTML::script('theme/js/common.js') }}
