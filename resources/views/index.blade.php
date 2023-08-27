@extends('layouts.app')

@section('title','Parabrisas')

@section('content')
    @include('components.carousel')
    <section class="index-page__aboutus">
        <h4 class="title">Nosotros</h4>
        <p class="normal-text">
            En Coyhaique Parabrisas, nos enorgullece ser su destino confiable para todas sus necesidades de reparación y reemplazo de ventanas de automóviles. Con años de experiencia en el sector, nos hemos convertido en un referente en la región cuando se trata de mantener la seguridad y la estética de su vehículo en perfectas condiciones.
        </p>
    </section>



    <section class="location">
        <div class="location_item">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1396.376858479433!2d-72.06007256303604!3d-45.57539104508353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdf2c495c6d21009%3A0x786766db86d34295!2sFrancisco%20Bilbao%201038!5e0!3m2!1ses-419!2scl!4v1693175326197!5m2!1ses-419!2scl" width="700" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location_item2">
            <p class="title">Ubicacion</p>
            <p class="normal-text">Francisco Bilbao #1038</p>
            <p class="normal-text">Coyhaique,Region de Aysen</p>
        </div>
    </section>


    @include('components.brands')
@endsection