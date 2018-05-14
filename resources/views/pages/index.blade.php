@extends('layouts.app')

@section('content')
<h1 class='text-center'>{{$title}}</h1>
<p class='text-center'>Votre partenaire pour des voyages sur mesure sur-mesure</p> 
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 img-responsive" height="500" src="https://www.tematis.com/5115-large_default/sejour-luxe-en-laponie-finlande.jpg" alt="Voyage Laponie">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 img-responsive" height="500" src="https://files.guidedanmark.org/files/484/175400_Aarhus_OE-Foto-Dennis-Borup-Jakobsen.jpg?qfix" alt="Voyage Aarhus">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 img-responsive" height="500" src="https://lonelyplanetwp.imgix.net/2018/02/beach_seychelles_lonelyplanet-32af2dc7fd07.jpg?fit=min&q=40&sharp=10&vib=20&w=1470" alt="Voyage Seychelles">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <br><br>


                  
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Parcourez notre liste de voyages</h3>
                        <h4>Un large choix de voyages</h4>
                        <p>Sélectionnez un voyage parmi notre large choix de voyages et sélectionnez votre voyage préferré.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Lancez une recherche personnalisée</h3>
                        <h4>Affinnez votre recherche dans votre dashboard </h4>
                        <p>Grâce à notre recherche personnalisée, vous pouvez trouver le voyage de vos rêves en 2 clics.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Une nouvelle envie ? Rdv dans votre dashboard</h3> 
                        <h4>Relancez une recherche personnalisée</h4>
                        <p>Vous avez changé d'avis et vous souhaitez trouver de nouveaux voyages sur base 
                            de nouveaux critères ? Alors vous pouvez autant de recherches personnalisées que vous le souhaitez !
                        </p>
                    </div>
                </div>
            </div>
@endsection

