@extends('layout.layout')

@section('title', 'bet322/admin')


@section('sidebar')
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a ><img src="public/site/assets/img/logo.png" class="img-circle" width="60"></a></p>
            <h5 class="centered">account</h5>
            <h5 class="centered">Balance: money $</h5>
            <li class="mt">
                <a class="active" href="index.php?action=home">
                    <i class="fa fa-home"></i>
                    <span>MAIN PAGE</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-user"></i>
                    <span>Create a match</span>
                </a>
            </li>

           
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-dollar"></i>
                    <span>Hidden matches</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-medkit"></i>
                    <span>Public matches</span>
                </a>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
@endsection