<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    </head>
    <body>
        <div id = "app">
            <script>
                fetch("http://localhost:3000/API/streamers")
                .then(
                    for(i=0; i < res.count(); i++) {
                        document.getElementById("app").innerHTML += res.data[i];
                    }
                )

            </script>
        </div>
    </body>
</html>