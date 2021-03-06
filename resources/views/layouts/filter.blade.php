@if($filters->count() > 0)
    <div class="row justify-content-start" data-controller="screen--filter">
        @foreach($filters->where('display', true) as $filter)
            <div class="col-sm-auto align-self-start">
                {!! $filter->render() !!}
            </div>
        @endforeach
        <div class="col-sm-auto ml-auto align-self-end text-right">
            <div class="form-group">
                <div class="btn-group" role="group">
                    <button
                            data-action="screen--filter#clear"
                            class="btn btn-default">
                        <x-orchid-icon path="refresh"/>
                    </button>
                    <button type="submit"
                            form="filters"
                            class="btn btn-default">
                        <x-orchid-icon path="filter"/>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
