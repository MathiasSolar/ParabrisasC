@extends('layouts.app')

@section('title','ParabrisasCoyhaique')

@section('content')
    @include('components.carousel')
    <section class="index-page__aboutus" id="Nosotros">
        <h4 class="title">Nosotros</h4>
        <p class="normal-text">
            En Coyhaique Parabrisas, nos enorgullece ser su destino confiable para todas sus necesidades de reparación y reemplazo de ventanas de automóviles. Con años de experiencia en el sector, nos hemos convertido en un referente en la región cuando se trata de mantener la seguridad y la estética de su vehículo en perfectas condiciones.
        </p>
    </section>
    <section class="index-page__services" id="Servicios">
        <h4 class="title">Nuestros Servicios</h4>
        <article class="services__item">
            <picture>
                <img src="{{asset('img/Services/Parabrisa.png')}}" alt="Parabrisas">
            </picture>
            <div class="services__item-info">
                <h5 class="subtitle">Parabrisas</h5>
                <p class="normal-text" >
                    "La claridad y resistencia que tu vehículo merece. Con nuestros parabrisas, no solo garantizas una visión perfecta en la carretera, sino que también inviertes en seguridad y durabilidad. Es más que un simple vidrio, es una promesa de calidad y protección para tus viajes." 
                </p>
            </div>
        </article>
        <article class="services__item">
            <picture>
                <img src="{{asset('img/Services/Puerta.png')}}" alt="Vidrio de puerta">
            </picture>
            <div class="services__item-info">
                <h5 class="subtitle" >Vidrios de puertas</h5>
                <p class="normal-text" >
                    "Una combinación de diseño y fortaleza. Nuestros vidrios para puertas no solo embellecen tu vehículo, sino que también ofrecen la máxima protección y resistencia en cada trayecto. Elegancia y seguridad de la mano."
                </p>
            </div>
        </article>
        <article class="services__item">
            <picture>
                <img src="{{asset('img/Services/Luneta.png')}}" alt="Lunetas">
            </picture>
            <div class="services__item-info">
                <h5 class="subtitle" >Lunetas</h5>
                <p class="normal-text" >
                    "Visión trasera sin compromisos. Nuestras lunetas combinan transparencia de alta definición con una durabilidad insuperable, asegurando que tengas una perspectiva clara y segura en todo momento. Estilo y confianza en cada mirada hacia atrás."
                </p>
            </div>
        </article>
        <article class="services__item">
            <picture>
                <img src="{{asset('img/Services/lateral.png')}}" alt="Vidrios laterales">
            </picture>
            <div class="services__item-info">
                <h5 class="subtitle" >Vidrios laterales</h5>
                <p class="normal-text" >
                    "Miradas al horizonte con la máxima protección. Nuestros vidrios laterales ofrecen una claridad impecable, mientras garantizan seguridad y resistencia contra los elementos. Viaja con la tranquilidad de estar rodeado de la mejor calidad."
                </p>
            </div>
        </article>
    </section>
    <section class="location" id="Ubicacion">
        <div class="location_item">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1396.376858479433!2d-72.06007256303604!3d-45.57539104508353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdf2c495c6d21009%3A0x786766db86d34295!2sFrancisco%20Bilbao%201038!5e0!3m2!1ses-419!2scl!4v1693175326197!5m2!1ses-419!2scl" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location_item2">
            <p class="title">Ubicacion</p>
            <p class="normal-text">Francisco Bilbao #1038</p>
            <p class="normal-text">Coyhaique,Region de Aysen</p>
        </div>
    </section>

    <section class="galery">
        <div class="galery_item">
            <h1 class="title"> Galeria</h1>
            
        </div>
        <div class="galery_photo1">
            <img src="{{asset('img/Galery/Galery1.png')}}" alt="Galeria 1">
            <img src="{{asset('img/Galery/Galery2.png')}}" alt="Galeria 2">
            <img src="{{asset('img/Galery/Galery3.png')}}" alt="Galeria 3">
        </div>
        <div class="galery_photo2">
        <img src="{{asset('img/Galery/Alvarolaburando.jpeg')}}" alt="Galeria 4">
        <img src="{{asset('img/Galery/Alvarolaburando2.jpeg')}}" alt="Galeria 5">
        <img src="{{asset('img/Galery/Alvarolaburando2.jpeg')}}" alt="Galeria 5">
        </div>

    </section>
    @include('components.brands')
@endsection