<!-- view presenting noise level measures -->
@extends('SmartCantine/layout_smart_cantine')

@section('smart_content')
    <div>
        <p>
            This is the display of noise levels !
        </p>

        <div>
            <div class="content-wrapper">
                <div class="grid-margin stretch-card">
                    <table  class="table">
                        <thead>
                        <tr>
                            <th>Cantine</th><th>Capteur</th><th>Type</th><th>ID</th><th>Niveau Sonore</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($cantine->capteurs as $capteur)
                                @foreach($capteur->mesures as $mesure)
                                    <tr>
                                        <td>{{$cantine->id}}</td>
                                        <td>{{$capteur->id}}</td>
                                        <td>{{$capteur->type}}</td>
                                        <td>{{$mesure->id}}</td>
                                        <td>{{$mesure->noise_level}}</td>
                                    </tr>
                                @endforeach

                                @empty
                                    <p>Vous n'avez pas de mesures disponibles.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div>
                    <canvas></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

