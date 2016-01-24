@extends('/widget/layout')
@section('content')

    <section>
        <div class="container strategy-list">
            <div class="row">
                @foreach( $data->items as $item)
                    <div class="col-md-6 strategy-item">

                        <a href="/strategy/{{ $item->id }}">
												<span class="thumb-info thumb-info-centered-info thumb-info-hide-info-hover">
													<span class="thumb-info-wrapper">
														<img src="{{ $item->bannerNotBorderImg }}" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">{{ $item->title }}</span>
														</span>
													</span>
												</span>
                        </a>


                    </div>
                @endforeach

            </div>
        </div>
    </section>
@stop