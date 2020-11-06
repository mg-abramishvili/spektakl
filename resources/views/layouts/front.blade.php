<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/css/front.css">
</head>
<body>
    @yield('content')
    <script>
        document.oncontextmenu = new Function("return false;");
    </script>
    <script>
        document.onkeydown = function(e){
            e = e || window.event;
            var key = e.which || e.keyCode;
            if(key===65){
                window.location.href = "http://localhost/shows";
            }
        }        
    </script>

<script>
    (function() {

        const idleDurationSecs = 180;    // X number of seconds
        const redirectUrl = 'http://localhost/';  // Redirect idle users to this URL
        let idleTimeout; // variable to hold the timeout, do not modify

        const resetIdleTimeout = function() {

            // Clears the existing timeout
            if(idleTimeout) clearTimeout(idleTimeout);

            // Set a new idle timeout to load the redirectUrl after idleDurationSecs
            idleTimeout = setTimeout(() => location.href = redirectUrl, idleDurationSecs * 1000);
        };

        // Init on page load
        resetIdleTimeout();

        // Reset the idle timeout on any of the events listed below
        ['click', 'touchstart', 'mousemove'].forEach(evt =>
            document.addEventListener(evt, resetIdleTimeout, false)
        );

    })();
    </script>
</body>
</html>