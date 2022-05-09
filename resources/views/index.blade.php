@extends('layout.base')
@section('home')
    <section>
        @include('layout.menu')
       @include('layout.main')

        <div id="preloader">
            <div class="inner">
                <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
                <div id="loader">
                    <div class="bolinha"></div>
                </div>
            </div>
        </div>
    </section>
@endsection