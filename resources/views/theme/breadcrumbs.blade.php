<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <nav aria-label="breadcrumb" role="navigation">
                <?php $segments = ''; ?>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    @foreach(Request::segments() as $segment)
                        <?php $segments .= '/'.$segment; ?>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ $segments }}">{{$segment}}</a>
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
</div>