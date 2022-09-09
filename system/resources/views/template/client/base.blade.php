<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-6" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My - Blog</title>
        <link rel="icon" type="image/x-icon" href="{{ url('public/client') }}/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('public/client') }}/css/styles.css" rel="stylesheet" />
        
    </head>
    <body>
        <!-- Navigation-->
       @include('template.client.section.navbar')

        <!-- Page Header-->
        @include('template.client.section.hero')

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
           @yield('client_content')
        </div>
        <!-- Footer-->
        @include('template.client.section.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ url('public/client') }}/js/scripts.js"></script>
    </body>
</html>
