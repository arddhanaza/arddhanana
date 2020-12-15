<!DOCTYPE html>
<html lang="en" id="top">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <link href="{{'css/bootstrap.css'}}" rel="stylesheet">
    <link href="{{'css/custom.css'}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Source+Sans+Pro&display=swap"
          rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


@yield('body')


<footer class="text-center footer">
    <p class="footer-text  m-0 p-3">Arddhana Zhafran Amanullah <a href="{{route('allData')}}">I</a> 2020</p>
</footer>


<script
    crossorigin="anonymous"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{'js/bootstrap.js'}}"></script>
<script crossorigin="anonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script crossorigin="anonymous" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
