<div class="container nen-trang">
    <div class="porlet-main-footer">

        <div class="menu-bottom">

            <div id="top_nav" class="ddsmoothmenu">
                @include('frontEnd.includes.menu-bottom')
            </div>
        
        </div>

        <div class="main-footer-footer-wrapper">
            <div class="main-footer-footer-bg">
                <div class="container">
                    <div class="main-footer-logo hidden-xs">
                        <img src="/uploads/settings/{{ $WebsiteSettings->style_footer_bg }}">
                    </div>
                    <div class="main-footer-footer-content">
                        {!! $WebsiteSettings->site_footer !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
