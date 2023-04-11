<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $(function() {
                $(".slider-range").slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [75, 300]
                });

                var dateFormat = "yyyy/mm/dd",
                from = $("#from")
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true
                    })
                    .on( "change", function() {
                        to.datepicker( "option", "minDate", getDate(this) );
                    }),
                to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true
                })
                    .on( "change", function() {
                        from.datepicker( "option", "maxDate", getDate(this) );
                    });
                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch( error ) {
                        date = null;
                    }
                    return date;
                }
            });
        </script>
    </head>
    <body>
        @yield('content')
    </body>
</html>
