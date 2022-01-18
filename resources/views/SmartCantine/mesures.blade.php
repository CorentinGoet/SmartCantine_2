<!-- view presenting noise level measures -->
@extends('SmartCantine/layout_smart_cantine')

@section('smart_content')
    <div>
        <p>
            This is the display of noise levels !
        </p>


            <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
                <div class="container my-auto">
                    <div class="row justify-content-center">

                        <div class="col-xl-12 col-lg-7">
                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h2 class="m-0 font-weight-bold text-primary">Niveau sonore</h2>
                                </div>
                                <div class="card-body">
                                    <div class="line-chart">
                                        <canvas id="graph"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h2>Mesures</h2>
                    </div>
                    <div class="card-body">
                    <table class="table-responsive">
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
                </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        let graph_labels = @json($graph_data['labels']);
        let graph_values = @json($graph_data['values']);
    </script>
    <script src={{asset("js/chart.js/Chart.min.js")}}></script>
    <script src="{{asset("js/my_line_graph.js")}}"></script>
@endsection

