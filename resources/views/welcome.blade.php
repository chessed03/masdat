@include('layout.header')

<div class="row">

{{--    <form class="row gy-2 gx-3 align-items-center">--}}
{{--        <div class="col-auto">--}}
{{--            <label class="visually-hidden" for="autoSizingInput">Name</label>--}}
{{--            <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">--}}
{{--        </div>--}}
{{--        <div class="col-auto">--}}
{{--            <label class="visually-hidden" for="autoSizingInputGroup">Username</label>--}}
{{--            <div class="input-group">--}}
{{--                <div class="input-group-text">@</div>--}}
{{--                <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-auto">--}}
{{--            <label class="visually-hidden" for="autoSizingSelect">Preference</label>--}}
{{--            <select class="form-select" id="autoSizingSelect">--}}
{{--                <option selected>Choose...</option>--}}
{{--                <option value="1">One</option>--}}
{{--                <option value="2">Two</option>--}}
{{--                <option value="3">Three</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div class="col-auto">--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="checkbox" id="autoSizingCheck">--}}
{{--                <label class="form-check-label" for="autoSizingCheck">--}}
{{--                    Remember me--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-auto">--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </div>--}}
{{--    </form>--}}

    <div>

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

                @foreach( $data as $key => $report )
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

</div>

@include('layout.footer')
