<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>{{ $title }}</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/f2iszfmqdxchasb7622mt2qymtfbdf7228g5tuz3f68ohu7l/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
        .status-in-progress {
            background-color: blue;
            color: white;
            border-radius: 5px;
            padding: 3px 8px;
        }
    
        .status-done {
            background-color: green;
            color: white;
            border-radius: 5px;
            padding: 3px 8px;
        }
    </style>
</head>
@yield('container')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
<script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "bf83d30e-b8f4-4277-9498-b1f798af26b4";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
</script>
</body>

</html>
