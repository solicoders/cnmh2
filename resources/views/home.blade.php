@extends('layouts.app')

@section('content')
<div class="p-4">
    <div class="card card-dark" style="display: flex; flex-direction: column;">
        <div class="card-header">
            <h3 class="card-title">Tableau de board</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background:#00838f;">
                <div class="inner">
                    <h3>{{$dossierCount}}</h3>

                    <p>Nombre des dossiers</p>
                </div>
                <div class="icon">
                    <i class="fas fa-folder-open"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">

            <div class="small-box" style="background:#FFD54F;">
                <div class="inner">
                    <h3>{{$patientCount}}</h3>
                    <p>Nombre des bénéficiaires</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background:#fd5c63;">
                <div class="inner">
                    <h3>{{$Consultation}}</h3>
                    <p>Nombre des consultations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-folder-open"></i>
                </div>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background:#1cb36c;">
                <div class="inner">
                    <h3>{{$dossierEnAttend}}</h3>
                    <p class="text-dark">Dossiers en attente</p>
                </div>
                <div class="icon">
                    <i class="fas fa-folder-open"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection