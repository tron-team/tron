@extends('/widget/layout')


@section('body-attribute','data-spy="scroll" data-target="#sidebar" data-offset="120"')

@section('content')



    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-none">{{ $data->title  }}</h2>
                <p>{{ $data->brief }}</p>
                <hr class="tall mb-sm">
            </div>
        </div>
        <div class="row strategy-layer">
            <div class="col-md-9">
                <div class="banner">
                    <div class="ui-box">
                        <img class="ui-box-in" src={{ $data->image }}>
                    </div>
                </div>

                @foreach ($data->items as $content)
                    <div class="content" id="content-{{$content->id }}">

                        @if ($content->subTitle)
                            <div class="heading heading-border heading-middle-border">
                                <h3><strong>{{ $content->subTitle }}</strong></h3>
                            </div>
                        @endif
                        @foreach ($content->items as $key => $item )

                            <div class="item" id="item-{{$item->id }}">
                                <div class="heading  heading-middle-border-center">
                                    <h4>{{ $key+1 }}.{{ $item->title }}</h4>
                                </div>

                                <p>{{ $item->introduction }}</p>

                                <div class="info">
                                    @foreach ($item->images as $image)
                                        <img class="lazy images" src="{{ $image }}-w6">
                                    @endforeach
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-9">
                                            @if (isset($item->privilegePrice))
                                                <div class="price">

                                                    @if((strtotime($item->endOn) - time()) > 0)
                                                        <span class="iconfont iconColor">&#xe678;</span>
                                                    @else
                                                        <span class="iconfont ui-txt-main">&#xe678;</span>
                                                    @endif
                                                    <div class="priceRight">
                                                        <span class="privilegePrice ui-txt-main">{{ number_format($item->privilegePrice, 2, '.', '') }}</span><span
                                                                class="oriPrice">{{number_format($item->price, 2, '.', '') }}</span>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="counters">

                                                    <div class="counter counter-primary">
                                                        <strong><span data-to="{{ number_format($item->price, 2, '.', '') }}" data-plugin-options='{"decimals": 2}'>0</span>
                                                            <span style="font-size: 25px;">¥</span>
                                                        </strong>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ $item->uri }}">
                                                <button type="button" class="btn btn-3d btn-primary btn-lg btn-block">查看详情</button>
                                            </a>

                                        </div>
                                    </div>

                                    @if (isset($item->beginOn) && strtotime($item->beginOn) - time() < 0 && strtotime($item->endOn) - time() > 0)
                                        <div class="limit ui-clearfix">
                                            @if ($item->remainCount==0)

                                                <div class="limitLeft">已抢光<span class="remainTime"> </span>分钟后将恢复原价出售</div>
                                            @else
                                                <div class="limitLeft">还剩<span> {{ $item->remainCount }} </span>件&nbsp;&nbsp;
                                                </div>
                                                <div class="time limitRight">
                                                    <h4 class=" ui-clearfix">
                                                        <span class="iconfont"> &#xe672;&nbsp;</span>

                                                        <div class="wenzi"><span>距结束&nbsp;</span><span
                                                                    class="hours"></span>:<span
                                                                    class="minutes"></span>:<span
                                                                    class="seconds"></span></div>
                                                    </h4>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <hr class="pattern tall">
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="col-md-3">
                <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options='{"minWidth": 991, "containerSelector": ".strategy-layer", "padding": {"top": 110}}'>

                    <h4 class="heading-primary">导航</h4>
                    <ul class="nav nav-list mb-xl show-bg-active">
                        @foreach ($data->items as $content)
                            @if ($content->subTitle)
                                <li>
                                    <a data-hash data-hash-offset="85" href='#content-{{$content->id }}'>{{ $content->subTitle }}</a>
                                    <ul>
                                        @foreach ($content->items as $key => $item )
                                            <li><a data-hash data-hash-offset="85" href="#item-{{$item->id }}">{{ $item->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                @foreach ($content->items as $key => $item )
                                    <li><a data-hash data-hash-offset="85" href="#item-{{$item->id }}">{{ $item->title }}</a></li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>

                </aside>

            </div>
        </div>

    </section>


@stop
