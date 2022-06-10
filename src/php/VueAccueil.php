<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Twitch Stats</title>
        <link rel="stylesheet" href="Twitch Stats.css">
    </head>

<body>
    <div id="main-nav" class="navbar navbar-default">
        <div class=fond-couleur1>
        <div class="container">
            <div class="navbar-header" style="float:left">
                <img class="Logo" src="TwitchStats.png">
            </div>
        </div>
        <div class="container">
            <form class="search-form" id="index-search-form" action="/search">
                <input type="search" name="q" minlength="5" required="" autocomplete="off" placeholder="Recherche ton steameur/euse" autofocus="">
                    <button type="submit" class="fas fa-search" >
                        <img  class="loupe" src="loupe recherche.png">
                    </button>
                </form>
        </div>
        </div>
        <div class="fond-couleur">
            <div class="container">
                <div id="live-panels">
                    <template id="live panel template">
                        #document-fragment
                        <div class="stats">
                            <div class="stats panel block">
                                <div class="valeur" style="text-align: center;"></div>
                                <div class="label" style="text-align: center;"></div>
                            </div>
                        </div>
                    </template>
                    <div class="stats">
                        <div class="stats panel block">
                            <div class="valeur" style="text-align: center;">000</div>
                            <div class="label" style="text-align: center;">Viewers qui regardent</div>
                        </div>
                    </div>
                    <div class="stats">
                        <div class="stats panel block">
                            <div class="valeur" style="text-align: center;">000</div>
                            <div class="label" style="text-align: center;">Chaîne en live</div>
                        </div>
                    </div>
                    <div class="stats">
                        <div class="stats panel block">
                            <div class="valeur" style="text-align: center;">000</div>
                            <div class="label" style="text-align: center;">Nombre de sub</sub></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-index-page">
            <div class="row" style="margin-top: 30px;">
                <div class="colonne stream">
                    <h4 class="headline">Les meilleurs stream de la semaine
                        <small class="value-title">Pic de viewers</small>
                    </h4>
                    <div id="list_streamer">
                        <script>
                            fetch("http://localhost:3000/API/streamers")
                            .then(res => (
                                document.getElementById("list_streamers").innerHTML = res.data[0];
                                )
                            )
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>