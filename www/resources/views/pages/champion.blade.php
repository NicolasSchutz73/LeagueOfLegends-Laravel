<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

<div class="container">

    <section class="main">

        <div class="presentation">

            <div class="illustration">
                <img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{ $data[$name]['id'] }}_0.jpg"
                     alt="">
            </div>

            <div class="description">
                <div class="heading">
                    <h1 class="name">
                        <span>{{ $data[$name]['title'] }}</span>
                        <span id="strong">{{ $data[$name]['id'] }}</span>
                    </h1>
                </div>

                <div class="info">
                    <div class="specs">
                        <div class="specs-item">
                            <span>Rôle</span>
                            <span>{{ $data[$name]['tags'][0] }}</span>
                        </div>
                    </div>
                    <div class="lore">
                        <p>{{ $data[$name]['lore'] }}</p>
                    </div>
                </div>

                <div class="spells">

                    <div class="passive">
                        <img
                            src="http://ddragon.leagueoflegends.com/cdn/12.3.1/img/passive/{{ $data[$name]['passive']['image']['full'] }}"
                            alt="">
                        <div class="passive-info">
                            <span>Compétence passive</span>
                            <div class="passive-name">
                                <h2>{{ $data[$name]['passive']['name'] }}</h2>
                            </div>
                            <div class="passive-description">
                                <p>{{ $data[$name]['passive']['description'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="wrap">
                        @foreach($data[$name]['spells'] as $spell)
                            <div class="active">
                                <img
                                    src="http://ddragon.leagueoflegends.com/cdn/12.3.1/img/spell/{{ $spell['id'] }}.png"
                                    alt="">
                                <div class="active-info">
                                    <span>Compétence active</span>
                                    <h2>{{ strip_tags($spell['name']) }}</h2>
                                    <p>{{ $data[$name]['passive']['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
