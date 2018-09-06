@extends('frontEnd.layout')

@section('content')
    
    
    
    <section id="content">
        <div class="block3">

            <div class="portlet-header">
                
                    <ul class="breadcrumb">
                        <li><a href="{{ route('Home') }}"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i>
                        </li>
                        <li class="active">Lịch công tác</li>
                    </ul>

            </div>

            
            
            <div class="col-md-12">
                
                    

            </div>
        </div>
    </section>

@stop

@section('side-menu')

    @include('frontEnd.home.menu-side') 

@stop