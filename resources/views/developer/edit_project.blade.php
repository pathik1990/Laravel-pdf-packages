@extends('theme.default')

@section('content')

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Api keys</h4>
                <p class="mb-30">Projects and keys</p>
            </div>
        </div>
        <form method="post" action="{{ route('update-project', $project->id) }}">
            @csrf
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>{{ __('Project Name') }}</label>
                        <input class="form-control" type="text" name="project_name" id="project_name" placeholder="{{ __('Project Name') }}" value="{{ $project->project_name }}" required autocomplete="project_name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="input-group mb-0">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection