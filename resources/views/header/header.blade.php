<!DOCTYPE html>
<html lang="en">
<head>
   <?global $meta_title ,$document_ready, $meta_desc, $keyword;?> 
   <title><?=$meta_title?></title> 
    <meta name="csrf-token" content="{{ Session::token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no,shrink-to-fit=no">
    <meta name="csrf-token" content="{{ Session::token() }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
	<script src="/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/fontawesome-all.min.js"></script>
    <script src="/js/workscript.js"></script>
    <link rel="stylesheet" href="/js/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/style.css?v=1">
    <link rel="stylesheet" href="/css/animate.css">
    <script src="/js/wow.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <script src="/js/jquery.spincrement.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery.min.js"></script>
    <script src="/js/lg-thumbnail.js"></script>
    <script src="/js/lg-fullscreen.min.js"></script>

	
    <meta name="description" content="<?=$meta_desc?>">	   
    <meta name="keywords" content="<?=$keyword?>">
    <meta property="og:title" content="<?=$meta_title?>">
    <meta property="og:image" content="<?=request()->root()?>/img/soc.jpg">
    <meta property="og:description" content="<?=$meta_desc?>">
    <meta property="og:url" content="<?=request()->root()?>">
    <meta property="og:type" content="website"> 
	
	@yield('js')  




</head>
<body>
<script>new WOW().init();</script>
<header>

    <div class="obj">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="logo">
                        <img src="/img/logo.png"/>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="menu">
                        <?foreach ($mmenus as $k){?>
                            <a href="<?=$k->link?>">
                                <span><?=$k->name?></span>
                            </a>
                        <?}?>
                    </div>

                </div>
                <div class="col-lg-2">
                    <button  type="button" class="btn btn-success callback">Заказать звонок</button>
                </div>
            </div>

        </div>
    </div>
</header>
 
@yield('content')


<footer id="footer">

</footer>

<?global $footer_ready;?>
<?=$footer_ready?>
<script src="/js/bootstrap.min.js" ></script>
<script src="{{asset('js/scrolling-nav.js')}}"></script>

</body>
</html>
