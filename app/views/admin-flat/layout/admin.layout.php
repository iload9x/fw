<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>{{# isset($seo['title']) ? $seo['title'] : '----' }}</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/vendor/toastr/toastr.min.css"/>
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/vendor/summernote/dist/summernote.css"/>
    <!-- App styles -->
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="{{# URL::base_path() }}/public/templates/admin-flat/styles/style.css">
    <link href="{{# URL::base_path() }}/public/templates/plugins/uploader/css/jquery.fileuploader.css" media="all" rel="stylesheet">
    <link href="{{# URL::base_path() }}/public/templates/plugins/uploader/css/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">
    {{if(isset($styles)):}}
    {{foreach($styles as $v):}}
    <link href="{{# URL::base_path('/') }}{{# $v}}" media="all" rel="stylesheet">
    {{endforeach}}
    {{endif}}
    <script type="text/javascript">
        var base_url = '{{# URL::base_path("/") }}';
    </script>

</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    {{{include admin-flat/header }}}
    <!-- End header-->

    <!-- Navigation-->
    {{{include admin-flat/menu }}}
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                       
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-shield"></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs">{{# $name }}</h3>
                            <small>
                                Special minimal admin theme with Dark UI style for monitoring or administration web applications.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
    {{{body}}}
    </div>
    </section>

    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="{{# URL::base_path() }}/public/templates/admin-flat/vendor/pacejs/pace.min.js"></script>
<script src="{{# URL::base_path() }}/public/templates/admin-flat/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{# URL::base_path() }}/public/templates/admin-flat/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{# URL::base_path() }}/public/templates/admin-flat/vendor/summernote/dist/summernote.min.js"></script>
<script src="{{# URL::base_path() }}/public/templates/admin-flat/vendor/toastr/toastr.min.js"></script>
<script src="{{# URL::base_path() }}/public/templates/admin-flat/vendor/chart.js/dist/Chart.min.js"></script>

<!-- App scripts -->
<script src="{{# URL::base_path() }}/public/templates/admin-flat/scripts/luna.js"></script>
<script src="{{# URL::base_path() }}/public/templates/admin-flat/scripts/app.js"></script>
<script src="{{# URL::base_path() }}/public/templates/plugins/uploader/js/jquery.fileuploader.min.js"></script>
<script src="{{# URL::base_path() }}/public/templates/plugins/uploader/js/custom.js"></script>
{{if(isset($scripts)):}}
{{foreach($scripts as $v):}}
<script src="{{# URL::base_path('/') }}{{# $v}}"></script>
{{endforeach}}
{{endif}}
</body>
</html>