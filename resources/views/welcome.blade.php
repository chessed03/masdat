@include('layout.header')

<div class="row">

    <br>
    <form action="#">
        <div class="row g-3">
            <div class="col">

                <label for="date">Date</label>

                <input class="form-control" type="text" id="date" name="date" value="">

            </div>
            <div class="col">

                <label for="affiliate_id">Affiliate</label>

                <select class="form-select" aria-label="Default select example" id="affiliate_id" name="affiliate_id">
                    <option selected>Open this select menu</option>
                    @foreach( $affiliates as $key => $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="col">

                <label for="partner_id">Partner</label>

                <select class="form-select" aria-label="Default select example" id="partner_id" name="partner_id">
                    <option selected>Open this select menu</option>
                    @foreach( $partners as $key => $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="col">

                <label for="advertiser_id">Advertiser</label>

                <select class="form-select" aria-label="Default select example" id="advertiser_id" name="advertiser_id">
                    <option selected>Open this select menu</option>
                    @foreach( $advertisers as $key => $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="col">

                <label for="">&nbsp;</label>
                <br>
                <button type="submit" class="btn btn-primary">Search</button>

            </div>
        </div>
    </form>

{{--    <div class="col-6 p-5">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                Monthly data <strong> ( {{ $data->month }} ) </strong>--}}
{{--            </div>--}}
{{--            <ul class="list-group list-group-flush">--}}
{{--                <li class="list-group-item">Clicks: <span> <strong> {{ $data->countsMonthlyInfo->clicks }} </strong> </span></li>--}}
{{--                <li class="list-group-item">Spams: <span> <strong> {{ $data->countsMonthlyInfo->spams }} </strong> </span></li>--}}
{{--                <li class="list-group-item">Converstions: <span> <strong> {{ $data->countsMonthlyInfo->convertions }} </strong> </span></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="col-6 p-5">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                Quarterly data <strong> ( {{ $data->month }} - {{ $data->thirMonth }} ) </strong>--}}
{{--            </div>--}}
{{--            <ul class="list-group list-group-flush">--}}
{{--                <li class="list-group-item">Clicks: <span> <strong> {{ $data->countsQuarterlyInfo->clicks }} </strong> </span></li>--}}
{{--                <li class="list-group-item">Spams: <span> <strong> {{ $data->countsQuarterlyInfo->spams }} </strong> </span></li>--}}
{{--                <li class="list-group-item">Converstions: <span> <strong> {{ $data->countsQuarterlyInfo->convertions }} </strong> </span></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

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
