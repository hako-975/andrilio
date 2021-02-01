<!-- script loader -->
<script>
    function fadeOut(el){
        el.style.opacity = 1;

        (function fade() {
            if ((el.style.opacity -= .1) < 0) {
                el.style.display = "none";
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }

    function fadeIn(el, display){
        el.style.opacity = 0;
        el.style.display = display || "block";

        (function fade() {
            var val = parseFloat(el.style.opacity);
            if (!((val += .1) > 1)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }

    document.onreadystatechange = function () {
        var state = document.readyState;
        if (state == 'interactive') {
            document.getElementById("main_content").style.display = "none";
        } else if (state == 'complete') {
            document.getElementById('interactive');
            var loader = document.getElementById('loader-wrapper');
            var main_content = document.getElementById('main_content');
            fadeOut(loader);
            fadeIn(main_content);
        }
    }
</script>
<!-- ./script loader -->

<!doctype html>
<html lang="en" class="h-100" id="page-top">
    <head>
        <style>
            #loader-wrapper {
              width: 100%;
              height: 100%;
              position: absolute;
              top: 0;
              left: 0;
              display: flex;
              justify-content: center;
              align-items: center;
            }
        </style>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
        
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables/css/dataTables.bootstrap4.min.css'); ?>">

        <!-- FancyBox CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/vendor/fancybox/jquery.fancybox.min.css'); ?>">
        
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome/css/all.min.css'); ?>">

        <!-- Andrilio CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/css/andrilio.css'); ?>">

        <!-- Favicon -->
        <link rel="icon" href="<?= base_url('assets/img/img_favicon/') . $portfolio['img_favicon']; ?>">

        <title><?= $title; ?></title>

    </head>
    <body class="d-flex flex-column h-100">
        <div id="loader-wrapper">
            <div class="spinner-border text-red-brown" role="status">
              <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div id="main_content">
