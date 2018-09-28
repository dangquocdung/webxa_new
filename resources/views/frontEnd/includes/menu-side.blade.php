@php

    $file_var = 'file_'.trans('backLang.boxCode');
    $title_var = 'title_'.trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');

@endphp



<div class="block4" style="border:none;">
    {{Form::open(['route'=>['searchTopics'],'method'=>'POST','class'=>'form-search'])}}
    <div class="input-group input-group-sm">
        {!! Form::text('search_word',@$search_word, array('placeholder' => trans('frontLang.search'),'class' => 'form-control','id'=>'search_word','required'=>'')) !!}
        <span class="input-group-btn">
            <button type="submit" class="btn btn-theme"><i class="fa fa-search"></i></button>
        </span>
    </div>

    {{Form::close()}}
</div>



@if ($SideBanners->count() > 0)
    

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">
            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Liên kết phần mềm</h4>
        </div>

        @foreach ($SideBanners->where('type_id','1') as $SideBanner)
            <div class="box-banner">
                <a href="{!! $SideBanner->link_url !!}" target="_blank">
                    <img src="/uploads/banners/{!! $SideBanner->$file_var !!}" alt="{!! $SideBanner->$title_var !!}" title="{!! $SideBanner->$title_var !!}" width="100%">
                </a>
            </div>
        @endforeach
        
    </div>

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">
            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Liên kết website</h4>
        </div>

        @foreach ($SideBanners->where('type_id','2') as $SideBanner)
            <div class="box-banner">
                <a href="{!! $SideBanner->link_url !!}" target="_blank">
                    <img src="/uploads/banners/{!! $SideBanner->$file_var !!}" alt="{!! $SideBanner->$title_var !!}" title="{!! $SideBanner->$title_var !!}" width="100%">
                </a>
            </div>
        @endforeach
        
    </div>
    

@endif


<div class="block4">

    <div id="block-header-bd" class="block-header" style="margin-bottom: 0" data-toggle="collapse" href="#ban-do-dia-gioi">

        <h4>
            <img src="/images/background/lotus.ico" alt="" width="26px"> {!! trans('frontLang.map') !!}

            <i id="menu-bd" class="fa fa-chevron-down" style="position: absolute; top: 5px; right:12px;left: auto"></i>
        </h4>

    </div>

    <div id="ban-do-dia-gioi" class="panel-collapse collapse in">
        <a href="http://gis.chinhphu.vn/?r=d8urwW36Eim5fYUZebkjQ" target="_blank">

            <img src="/images/ban-do.jpg" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh" width="100%">
        </a>
    </div>

</div>

<div class="block4">

{{--  <iframe src="//iframe.dacast.com/b/117358/c/482245" width="300" height="200" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>  --}}




    <video width="352" height="198" controls>
        <source src="http://hatinhtv.vn:8134/hls-live/livepkgr/_definst_/liveevent/livestream1.m3u8" type="application/x-mpegURL">
    </video>
    
</div>

<div class="block4" style="border-radius: 5px">

    <div id="block-header-bd" class="block-header" style="margin-bottom: 0" data-toggle="collapse" href="#thoi-tiet-ha-tinh">

        <h4>
            <img src="/images/background/lotus.ico" alt="" width="26px"> Thời tiết Hà Tĩnh
        </h4>

    </div>

    <div class="clearfix"></div>

    <div id="thoi-tiet-ha-tinh" class="panel-collapse collapse in">
        <a href="http://www.nchmf.gov.vn/web/vi-VN/62/20/28/map/Default.aspx" target="_blank">
            <div style="padding: 5px 15px">

                <div id="thoi-tiet" class="thoi-tiet"></div>
            </div>

            
        </a>
    </div>

</div>

@if (!empty($RightMenuLinks))
<div class="right_1">
        
    @foreach($RightMenuLinks as $RightMenuLink)

        <?php
            if ($RightMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link = url(trans('backLang.code')."/" .$RightMenuLink->webmasterSection[$slug_var]);
                }else{
                    $mmnnuu_link = url($RightMenuLink->webmasterSection[$slug_var]);
                }
            }else{
                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link =url(trans('backLang.code')."/" .$RightMenuLink->webmasterSection['name']);
                }else{
                    $mmnnuu_link =url($RightMenuLink->webmasterSection['name']);
                }
            }
        ?>

        <div class="right-item">
    
            <a href="{{ (trim($RightMenuLink->link) !="") ? $RightMenuLink->link:$mmnnuu_link }}" class="icon" title="">

                @if (!empty($RightMenuLink->icon))
                    
                    <i class="fa {{$RightMenuLink->icon}} fa-2x" aria-hidden="true"></i>

                @else
    
                    <i class="fa fa-folder-open-o fa-2x" aria-hidden="true"></i>

                @endif
    
                <span class="nav-text">{{ $RightMenuLink->$title_var }} </span>
            </a>
        </div>
    
    @endforeach

</div>
@endif



<div class="block4">

    <div class="block-header" style="margin-bottom: 0">

        <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Thống kê</h4>

    </div>
    <div class="clearfix"></div>

    <div class="box-banner" style="text-align:center">

        <div style="padding: 5px 15px">

            <table style="text-align:left; font-size:0.9em; margin-bottom: 5px;">
                <tr>
                    <td>Số lượt truy cập hôm nay: &emsp;</td>
                    <th>{{ number_format($TodayVisitors) }}</th>
                </tr>
                <tr>
                    <td>Số lượt xem trang hôm nay: &emsp;</td>
                    <th>{{ number_format($TodayPages) }}</th>
                </tr>
            </table>

            <table style="text-align:left; font-size:0.9em">
                    
                    <tr>
                        <td>Tổng lượt truy cập: &emsp;</td>
                        <th>{{ number_format($Visitors) }}</th>
                    </tr>
                    <tr>
                        <td>Tổng lượt xem trang: &emsp;</td>
                        <th>{{ number_format($Pages) }}</th>
                    </tr>
                </table>

        </div>
    </div>
</div>

@if ($SideBanners->where('type_id','3')->count() > 0)
    
    

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">
            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Liên kết doanh nghiệp</h4>
        </div>

        @foreach ($SideBanners as $SideBanner)
            <div class="box-banner">
                <a href="{!! $SideBanner->link_url !!}" target="_blank">
                    <img src="/uploads/banners/{!! $SideBanner->$file_var !!}" alt="{!! $SideBanner->$title_var !!}" title="{!! $SideBanner->$title_var !!}" width="100%">
                </a>
            </div>
        @endforeach
        
    </div>

@endif







<script src="{{ URL::asset('frontEnd/js/hypersonic-weather.js') }}"></script>

<script>
    $('.thoi-tiet').hwPlugin({
        style: 'style6',
        country: 'Ha Tinh',
        temperature_metrics: 'C',
        
    });
</script>








