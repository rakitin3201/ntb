@extends('layouts.app')

@section('content')
<div class="main">
    <div style="background-image: url('images/img1.jpg'); background-size: 100%; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-md-stretch">
                <div class="col-md-6 mb-3">
                    <div class="h-100 p-5 text-white">
                        <h1>COMPAGNIE DE <span class="fw-bolder fs-1">TRANSIT-DOUANE</span></h1>
                        <p>Nouramane Transit Burkina SA est une societe specialisé dans le transit, transport, consignation, declaration en Douane dirigée par une equipe jeune et dynamique. Elle a eu son agrement de commissionnaire agrée en douane depuis 2007 ce qui demontre une certaine experience confirmé dans le domaine.</p>
                        <a href="{{ route('about') }}" class="btn btn-sm btn-primary">Lire plus</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card text-white shadow-sm h-150" style="background-color: rgb(41, 64, 145)">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Transit d'exploitation</h5>
                            <div class="card-text">
                                Transfert d'un bureau de douanes interieure vers un  bureau de sortie. 
                            </div>
                            <div class="text-end">
                                <a href="{{ route('acceuil') }}" class="btn btn-sm btn-light">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-white shadow-sm h-150" style="background-color: rgb(41, 64, 145)">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Transit d'importation</h5>
                            <div class="card-text">
                                Transfert d'un bureau de douanes interieure vers un  bureau de sortie
                            </div>
                            <div class="text-end">
                                <a href="{{ route('acceuil') }}" class="btn btn-sm btn-light">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-white shadow-sm h-150" style="background-color: rgb(41, 64, 145)">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Transit interne</h5>
                            <div class="card-text">
                                Transfert d'un bureau de douanes interieure vers un  bureau de sortie
                            </div>
                            <div class="text-end">
                                <a href="{{ route('acceuil') }}" class="btn btn-sm btn-light">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-white mb-5" style="background-color: rgb(41, 64, 145)">
        <div class="container">
            <div class="row">
                <div class="col-md_12 p-3">
                    <h2>Procedures de transit types</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bolder">Douane de depart</h4>
                            <ul>
                                <li>Presentation de la declaration de transit douanier</li>
                                <li>Verification des machandises</li>
                            </ul>
                        </div>
                        <div>
                            <img width="auto" height="160" src="{{ asset('images/img1.jpg') }}" alt="Photos">
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bolder">Douane d'entrée</h4>
                            <ul>
                                <li>Presentation de la declaration de transit douanier</li>
                                <li>Verification des machandises</li>
                                <li>Pose de scellement de douane</li>
                                <li>Notification au bureau de douane de sortie</li>
                            </ul>
                        </div>
                        <div>
                            <img width="auto" height="160" src="{{ asset('images/img5.jpg') }}" alt="Photos">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-white mb-5" style="background-color: rgb(41, 64, 145)">
        <div class="container">
            <div class="row">
                <div class="col-md_12 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bolder">Douane de sortie</h4>
                            <ul>
                                <li>Verification des machandises</li>
                                <li>Appurement de garanti</li>
                            </ul>
                        </div>
                        <div>
                            <img width="auto" height="160" src="{{ asset('images/img1.jpg') }}" alt="Photos">
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="fw-bolder">Douane de destination</h4>
                            <ul>
                                <li>Presentation de la declaration de transit en douane</li>
                                <li>Fourniture de la garantie</li>
                                <li>Verifications des marchandises</li>
                                <li>Collecte des droits d'importation des taxes et des charges</li>
                            </ul>
                        </div>
                        <div>
                            <img width="auto" height="160" src="{{ asset('images/img5.jpg') }}" alt="Photos">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-9 p-3">
                    <h4 class="fw-bolder">DECLARARTION DES MARCHANDIES AUX FINS D'UNE OPERATION DE TRANSIT DOUNIER</h4>
                    <p>
                        Le lorem ipsum (également appelé faux-texte, lipsum, ou bolo bolo[1]) est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée.
                        Exemple d'utilisation de lorem ipsum afin d'attirer l'attention sur la mise en page plutôt que sur le contenu.
                        Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum. L'avantage du latin est que l'opérateur sait au premier coup d'œil que la page contenant ces lignes n'est pas valide et que l'attention du lecteur n'est pas dérangée par le contenu, lui permettant de demeurer concentré sur le seul aspect graphique.
                        Il circule des centaines de versions différentes du lorem ipsum, mais ce texte aurait originellement été tiré de l'ouvrage écrit par Cicéron en 45 av. J.-C., De finibus bonorum et malorum (Liber Primus, 32), texte populaire à cette époque, dont l'une des premières phrases est : « Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit… » (« Il n'existe personne qui aime la souffrance pour elle-même, ni qui la recherche ni qui la veuille pour ce qu'elle est… »).
                    </p>
                    <a class="btn btn-sm btn-primary" href="#">En savoir plus</a>
                </div>
                <div class="col-md-3 p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-5">
                            <div><img class="img-fluid img-thumbnail" src="{{ asset('images/img9.jpg') }}" alt="Photos"></div>
                            <div><img class="img-fluid img-thumbnail" src="{{ asset('images/img9.jpg') }}" alt="Photos"></div>
                        </div>
                        <div class="mx-3">
                            <div><img class="img-fluid img-thumbnail" src="{{ asset('images/img9.jpg') }}" alt="Photos"></div>
                            <div><img class="img-fluid img-thumbnail" src="{{ asset('images/img9.jpg') }}" alt="Photos"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
