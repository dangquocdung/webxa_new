<script type="text/javascript">
    jssor_3_slider_init = function() {

        var jssor_3_options = {
            $AutoPlay: 1,
            $AutoPlaySteps: 3,
            $SlideDuration: 1000,
            $SlideWidth: 250,
            $SlideSpacing: 3,
            $Cols: 5,
            $Align: 390,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 3
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_3_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_3_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };

    jssor_4_slider_init = function() {

        var jssor_4_options = {
            $AutoPlay: 1,
            $AutoPlaySteps: 3,
            $SlideDuration: 1000,
            $SlideWidth: 250,
            $SlideSpacing: 3,
            $Cols: 5,
            $Align: 390,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 3
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_4_slider = new $JssorSlider$("jssor_4", jssor_4_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_4_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_4_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>

<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .jssorb057 .i {position:absolute;cursor:pointer;}
    .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
    .jssorb057 .i:hover .b {stroke-opacity:.7;}
    .jssorb057 .iav .b {stroke-opacity: 1;}
    .jssorb057 .i.idn {opacity:.3;}

    .jssora073 {display:block;position:absolute;cursor:pointer;}
    .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
    .jssora073:hover {opacity:.8;}
    .jssora073.jssora073dn {opacity:.4;}
    .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
</style>

@if (!empty($MainMenuLinks))
    @foreach($MainMenuLinks as $MainMenuLink)

        <?php
            if ($MainMenuLink->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link = url(trans('backLang.code')."/" .$MainMenuLink->webmasterSection->$slug_var);
                }else{
                    $mmnnuu_link = url($MainMenuLink->webmasterSection->$slug_var);
                }
            }else{
                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link =url(trans('backLang.code')."/" .$MainMenuLink->webmasterSection->name);
                }else{
                    $mmnnuu_link =url($MainMenuLink->webmasterSection->name);
                }
            }
        ?>

        <div class="block3">
            <div class="box box-default">
                <div class="box-header with-border">
                    <img src="/images/background/lotus.ico" width="30px" style="padding: 3px">
                    <h4 class="box-title" title="">{{ $MainMenuLink->$link_title_var }}</h4>

                    <div class="box-tools pull-right">
                        <a class="btn btn-box-tool" href="{{ $mmnnuu_link }}"><i class="fa fa-folder-open"></i></a>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->

                @if ($MainMenuLink->webmasterSection->name == 'photos')
                    <div class="box-body">

                        <div id="jssor_3" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="frontEnd/img/spin.svg" />
                            </div>
                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">

                                    @foreach($MainMenuLink->webmasterSection->topics->where('status',1)->sortbyDesc('date') as $tin)
                                        <?php

                                            if ($tin->$title_var != "") {
                                                $title = $tin->$title_var;
                                            } else {
                                                $title = $tin->$title_var2;
                                            }
                                            if ($tin->$details_var != "") {
                                                $details = $details_var;
                                            } else {
                                                $details = $details_var2;
                                            }
                                            $section = "";
                                            try {
                                                if ($tin->section->$title_var != "") {
                                                    $section = $tin->section->$title_var;
                                                } else {
                                                    $section = $tin->section->$title_var2;
                                                }
                                            } catch (Exception $e) {
                                                $section = "";
                                            }

                                            if ($tin->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $topic_link_url = url(trans('backLang.code') . "/" . $tin->$slug_var);
                                                } else {
                                                    $topic_link_url = url($tin->$slug_var);
                                                }
                                            } else {
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $tin->webmasterSection->name, "id" => $tin->id]);
                                                } else {
                                                    $topic_link_url = route('FrontendTopic', ["section" => $tin->webmasterSection->name, "id" => $tin->id]);
                                                }
                                            }
                                        ?>
                                        
                                        <div>
                                            <a href="{{ $topic_link_url }}">
                                                <img data-u="image" src="/uploads/topics/{{ $tin->photo_file }}" title="{{ $tin->$link_title_var }}" />
                                            </a>
                                            <div style="background: url(./images/transparent.png) repeat-x; position: absolute; bottom: 0px; font-size: 0.9em; color: #ffffff; width:100%; text-align: center;" >
                                                <p style="padding: 5px 0">{{ $tin->$link_title_var }}</p>
                                                    
                                            </div>
                                            {{--  <p style="background: url(./images/transparent.png) repeat-x; position: absolute; bottom: 10px; left:5px; right:5px; font-size: 1.1em; color: #ffffff; text-align: center;">
                                                {{ $tin->$link_title_var }}
                                            </p>  --}}
                                        </div>
                                    @endforeach

                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                                </svg>
                            </div>
                        </div>
                        <script type="text/javascript">jssor_3_slider_init();</script>
                   
                    </div>
                @elseif ($MainMenuLink->webmasterSection->name == 'videos')
                    <div class="box-body">

                        <div id="jssor_4" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="frontEnd/img/spin.svg" />
                            </div>
                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">

                                    @foreach($MainMenuLink->webmasterSection->topics->where('status',1)->sortbyDesc('date') as $tin)
                                        <?php

                                            if ($tin->$title_var != "") {
                                                $title = $tin->$title_var;
                                            } else {
                                                $title = $tin->$title_var2;
                                            }
                                            if ($tin->$details_var != "") {
                                                $details = $details_var;
                                            } else {
                                                $details = $details_var2;
                                            }
                                            $section = "";
                                            try {
                                                if ($tin->section->$title_var != "") {
                                                    $section = $tin->section->$title_var;
                                                } else {
                                                    $section = $tin->section->$title_var2;
                                                }
                                            } catch (Exception $e) {
                                                $section = "";
                                            }

                                            if ($tin->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $topic_link_url = url(trans('backLang.code') . "/" . $tin->$slug_var);
                                                } else {
                                                    $topic_link_url = url($tin->$slug_var);
                                                }
                                            } else {
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $tin->webmasterSection->name, "id" => $tin->id]);
                                                } else {
                                                    $topic_link_url = route('FrontendTopic', ["section" => $tin->webmasterSection->name, "id" => $tin->id]);
                                                }
                                            }
                                        ?>
                                        
                                        <div>
                                            <a href="{{ $topic_link_url }}">
                                                @if (strlen($tin->photo_file) > 5 )
                                                    <img data-u="image" src="/uploads/topics/{{ $tin->photo_file }}" title="{{ $tin->$link_title_var }}" />
                                                @else
                                                    <img data-u="image" src="{{ URL::to('uploads/topics/no_image.jpg') }}" title="{{ $tin->$link_title_var }}" />
                                                @endif
                                                
                                            </a>
                                            <div style="background: url(./images/transparent.png) repeat-x; position: absolute; bottom: 0px; font-size: 0.9em; color: #ffffff; width:100%; text-align: center;" >
                                                <p style="padding: 5px">{{ $tin->$link_title_var }}</p>
                                                    
                                            </div>
                                            {{--  <p style="background: url(./images/transparent.png) repeat-x; position: absolute; bottom: 10px; left:5px; right:5px; font-size: 1.1em; color: #ffffff; text-align: center;">
                                                {{ $tin->$link_title_var }}
                                            </p>  --}}
                                        </div>
                                    @endforeach

                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                                </svg>
                            </div>
                        </div>
                        <script type="text/javascript">jssor_4_slider_init();</script>
                   
                    </div>
                    
                
                
                @endif
            </div>
        </div>

    @endforeach

@endif
