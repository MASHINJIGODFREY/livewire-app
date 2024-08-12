<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name', 'Page Title') }} | Todo APP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .checkmark::before {
                content: "\2713";
            }
            .starmark::before {
                content: "\2605";
            }
            .plusmark::before {
                content: "\002B";
            }
            .minusmark::before {
                content: "\2212";
            }
            .rightarrow::before {
                content: "\2192";
            }
            .rightarrow-hooked::before {
                content: "\21AA";
            }
            .leftarrow::before {
                content: "\2190";
            }
            .ballotbox::before {
                content: "\2610";
            }
            .ballotbox-checked::before {
                content: "\2611";
            }
            .crossmark::before {
                content: "\274C";
            }
            .refreshmark::before {
                content: "\21BB";
            }
            .floppydisk::before {
                content: "\1F4BE";
            }
            .hourglass::before {
                content: "\23F3";
            }
            .lowpriority::before {
                content: "\1F7E2";
            }
            .mediumpriority::before {
                content: "\1F53A";
            }
            .highpriority::before {
                content: "\1F534";
            }
        </style>
    </head>
    <body>
        {{ $slot }}
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
