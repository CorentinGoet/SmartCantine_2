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
                            <th>Cantine</th><th>Capteur</th><th>Type</th><th>ID</th><th>Niveau Sonore</th><th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($cantine->capteurs as $capteur)
                                @foreach($capteur->mesures as $mesure)
                                    <tr>
                                        <td>{{$cantine->getId()}}</td>
                                        <td>{{$capteur->getId()}}</td>
                                        <td>{{$capteur->getType()}}</td>
                                        <td>{{$mesure->getId()}}</td>
                                        <td>{{$mesure->getNoiseLevel()}}</td>
                                        <td>{{$mesure->getDateMesure()}}</td>
                                    </tr>
                                @endforeach

                                @empty
                                    <p>Vous n'avez pas de mesures disponibles.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class=graph_1>
            <canvas id="graph"></canvas>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
            <script src={{asset("js/graph.js")}}></script>

        </div>
            </div>
        </div>
    </div>
@endsection

