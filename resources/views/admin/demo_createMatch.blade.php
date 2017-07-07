@extends('layout.admin.template')
@section('title','bet322/admin/create')
@section('content')
<section id="main-content">
            <section class="wrapper">
                <h3 ><i class="fa fa-angle-right" ></i> Create a new match </h3>
            <form style="float: left" method = "post" action="{{ url('admin/hiddenMatch/create') }}">
                {{ csrf_field() }}     
                <div class="row mt">
                    <div class="col-lg-12">
                        <!-- <div class="content-panel"> -->
                            <h4 class="text-center"><i class="fa fa-angle-right"></i>Match</h4>

                            <div class="row mt">
                                <div class="col-lg-6"><!-- home team -->
                                    <h4 class="text-center"> <b class="text-center">Home team</b></h4>
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <input class="form-control round-form " type="text" width="10px"><br>
                                        <!-- <div class="text-center">
                                            <div class="row"> 
                                            <img src="{{ asset('img/login-bg.jpg') }}" class="img-circle" alt="Cinque Terre" width="150" height="150"> <br>
                                            </div>
                                            <button class="btn btn-primary btn-xs">edit logo<i class="fa fa-pencil"></i></button>
                                        </div> -->
                                    </div>
                                </div>    
                                <div class="col-lg-6"><!-- away team -->
                                <h4 class="text-center"> <b class="text-center">away team</b></h4>
                                <div class="col-lg-6 col-lg-offset-3">
                                    <input class="form-control round-form " type="text" width="10px"><br>
                                   <!--  <div class="text-center">
                                        <div class="row"> 
                                        <img src="{{ asset('img/login-bg.jpg') }}" class="img-circle" alt="Cinque Terre" width="150" height="150"> <br>
                                        </div>
                                        <button class="btn btn-primary btn-xs">edit logo<i class="fa fa-pencil"></i></button>
                                    </div> -->
                                </div>
                                </div>
                            </div> <!-- end match -->
                           <!--  bet rate -->
                            <!-- <div class="form-panel"> -->
                                <div class="text-center">
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> Bet rate </h4>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-4 control-label">Home rate:</label>
                                    <div class="col-lg-2">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-4 control-label">Draw rate:</label>
                                    <div class="col-lg-2">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>
                                    <br>

                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-4 control-label">Away rate:</label>
                                    <div class="col-lg-2">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>
                                    <br>

                                </div>

                         <!--    </div> -->
                         <!--  time -->
                            <!-- <div class="form-panel"> -->
                                <div>
                                    <h4 class="mb"></h4>
                                </div>
                                <div class="text-center">
                                    <h4> Time </h4>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-4 control-label">Starting match time:</label>
                                    <div class="col-lg-2">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-4 control-label">Finishing match time:</label>
                                    <div class="col-lg-2">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>
                                    <br>

                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-4 control-label">Closing bet time:</label>
                                    <div class="col-lg-2">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>
                                    <br>

                                </div>
                                <div class="form-group">

                                <div>    
                                    <button type="submit" value="Add" class="btn btn-theme"><i class="fa fa-check">Add</i>
                                    </button>
                                    <div class="col-lg-1">
                                        <button style="float: left" type="reset" value="Reset" class="btn btn-theme"><i class="fa fa-check">Reset</i></button>
                                    </div>
                                </div>
                            </div>

                         <!--    </div> -->
                           


                        
                       <!--  </div> --><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->            
                </div><!-- /row -->


            </form>
            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
@endsection