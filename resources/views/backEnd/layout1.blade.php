<!DOCTYPE html>
<html  lang="{{ trans('backLang.code') }}" dir="ltr">
<head>
    @include('backEnd.includes.head')
    @yield('headerInclude')
</head>
<body>

<div class="app" id="app">

    
                @yield('content')
  
</div>



@yield('footerInclude')

</body>
</html>
