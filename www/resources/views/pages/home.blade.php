@include('layouts/header')

<section class="home">

    <div class="intro">
        <h1 class="main-title">
            <span>Choisissez votre</span>
            <span>Champion</span>
        </h1>
        <div class="intro-description">
            <p>Avec plus de 140 champions disponibles, vous en trouverez forcément un qui vous corresponde. Maîtrisez-en
                un, ou maîtrisez-les tous.
            </p>
        </div>
    </div>

    <div class="grid-list">
        @foreach($data['data'] as $champion)

            <a class="wrap" href="{{ route('champion.index', ['name' => $champion['id']]) }}">
                <span class="image-container">
                    <img src="http://ddragon.leagueoflegends.com/cdn/img/champion/loading/{{ $champion['id'] }}_0.jpg">
                </span>

                <span class="heading">
                    <p>{{ $champion['name'] }}</p>
                </span>
            </a>
        @endforeach
    </div>

</section>
@include('layouts/footer')
