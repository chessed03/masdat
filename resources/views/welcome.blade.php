@include('layout.header')

<div class="row">

    <br>

    <div class="col-6 p-5">
        <div class="card">
            <div class="card-header">
                Monthly data <strong> ( {{ $data->month }} ) </strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Clicks: <span> <strong> {{ $data->countsMonthlyInfo->clicks }} </strong> </span></li>
                <li class="list-group-item">Spams: <span> <strong> {{ $data->countsMonthlyInfo->spams }} </strong> </span></li>
                <li class="list-group-item">Converstions: <span> <strong> {{ $data->countsMonthlyInfo->convertions }} </strong> </span></li>
            </ul>
        </div>
    </div>

    <div class="col-6 p-5">
        <div class="card">
            <div class="card-header">
                Quarterly data <strong> ( {{ $data->month }} - {{ $data->thirMonth }} ) </strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Clicks: <span> <strong> {{ $data->countsQuarterlyInfo->clicks }} </strong> </span></li>
                <li class="list-group-item">Spams: <span> <strong> {{ $data->countsQuarterlyInfo->spams }} </strong> </span></li>
                <li class="list-group-item">Converstions: <span> <strong> {{ $data->countsQuarterlyInfo->convertions }} </strong> </span></li>
            </ul>
        </div>
    </div>

    <div class="col-12">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Date</th>
                <th scope="col" class="text-center">Affiliate</th>
                <th scope="col" class="text-center">Partner</th>
                <th scope="col" class="text-center">Advertiser</th>
                <th scope="col" class="text-center">Lead</th>
                <th scope="col" class="text-center">ESP</th>
            </tr>
            </thead>
            <tbody>

                @foreach( $data->dataInfo as $key => $report )
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->name }}</td>
                        <td>{{ $report->date }}</td>
                        <td>{{ $report->affiliate }}</td>
                        <td>{{ $report->partner }}</td>
                        <td>{{ $report->advertiser }}</td>
                        <td>{{ $report->lead }}</td>
                        <td>{{ $report->esp }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{ debug($data) }}
</div>

@include('layout.footer')
