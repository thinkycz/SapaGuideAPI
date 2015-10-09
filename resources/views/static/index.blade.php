@extends('base')

@section('body')
<div class="wrapper">
    <div id="welcome" class="container">

        <div class="title">
            <h2>Vítejte v katalogu Sapa</h2>
        </div>
        <p>Tato stránka slouží jako aplikační rozhraní (API) pro iOS aplikaci Sapa Navigátor.</p>
        <p>Může ovšem také sloužit jako základní webové rozhraní pro procházení katalogu a přidávání nových položek. Berte prosím na vědomí, že některé funkce této stránky nemusejí fungovat správně a spolehlivě. Děkuji za pochopení!</p>
    </div>
    <div id="three-column" class="container">
        <div><span class="arrow-down"></span></div>
        <div id="tbox1">
            <div class="title">
                <h2>Co je to Sapa</h2>
            </div>
            <p>TTTM SAPA, vietnamsky Trung Tâm Thương Mại SAPA, doslovný překlad Obchodní Centrum SAPA, je velkoobchodní areál v Praze 4. V areálu nejsou ovšem pouze obchody, naleznete tu i mnoho dalších věcí, například školu, buddhistický chrám, asijské restaurace, nebo masážní salony.</p>
        </div>
        <div id="tbox2">
            <div class="title">
                <h2>K čemu to slouží?</h2>
            </div>
            <p>Díky veliké rozloze celého areálu a nedostatečnému počtu informačních tabulí je pro mnoho lidí orientace v areálu velice obtížná. Také chybí centrální katalog a mapa obchodů v areálu. Tato aplikace má za úkol tyto nedostatky alespoň částečně napravit.</p>
        </div>
    </div>
    <!--
    <div id="portfolio" class="container">
        <div class="column1">
            <div class="box">
                <h3>Vestibulum venenatis</h3>
                <p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
                <a href="#" class="button button-small">Etiam posuere</a> </div>
        </div>
        <div class="column2">
            <div class="box">
                <h3>Praesent scelerisque</h3>
                <p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
                <a href="#" class="button button-small">Etiam posuere</a> </div>
        </div>
        <div class="column3">
            <div class="box">
                <h3>Donec dictum metus</h3>
                <p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
                <a href="#" class="button button-small">Etiam posuere</a> </div>
        </div>
        <div class="column4">
            <div class="box">
                <h3>Mauris vulputate dolor</h3>
                <p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
                <a href="#" class="button button-small">Etiam posuere</a> </div>
        </div>
    </div>
    -->
</div>
@stop