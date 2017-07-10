@extends('layout.admin.template')
@section('title','bet322/admin/create')
@section('content')
{{ csrf_field() }}
<section id="main-content">
            <section class="wrapper">
                <h3 ><i class="fa fa-angle-right" ></i> Create a new match </h3>
                <div class="row mt">
                    <div class="col-lg-12">
                     current time: {{date('Y-m-d H:i:s')}}
                        <!-- <div class="content-panel"> -->
                        <form method="post" action="{{ url('admin/hiddenMatch/create') }}">
                                {{ csrf_field() }}
                           

                           
    
                            <h4 class="text-center"><i class="fa fa-angle-right"></i>Match</h4>
                            
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Home Team Name:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "homeName" type="text" 
                                        placeholder = "enter home name" value = "{{ old('homeName') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('homeName') }}</span><br>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Away Team Name:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "awayName" type="text" 
                                        placeholder = "enter away name" value = "{{ old('awayName') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('awayName') }}</span><br>
                                    </div>
                                    <br>
                                </div><br><br>
                           <!--  bet rate -->
                            <!-- <div class="form-panel"> -->
                            <div><br></div><div><br></div>
                                <div class="text-center">
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> Bet rate </h4>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Home rate:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "homeRate" type="text" 
                                        placeholder = "enter home rate" value = "{{ old('homeRate') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('homeRate') }}</span><br>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Draw rate:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "drawRate" type="text" 
                                        placeholder = "enter draw rate" value = "{{ old('drawRate') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('drawRate') }}</span><br>
                                    </div>
                                    <br>

                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Away rate:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "awayRate" type="text" 
                                        placeholder = "enter away rate" value = "{{ old('awayRate') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('awayRate') }}</span><br>
                                    </div>
                                    <br>

                                </div>

                         <!--    </div> -->
                         <!--  time -->
                            <!-- <div class="form-panel"> -->
                                <div>
                                    <h4 class="mb"></h4>
                                </div>
                               <br><br><br>
                               <div><br></div><div><br></div>
                                <div class="text-center">
                                <br>
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> Time </h4>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Starting match time:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "startingMatchTime" type="datetime-local"  value = "{{ old('startingMatchTime') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('startingMatchTime') }}</span><br>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Finishing match time:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "finishingMatchTime" type="datetime-local"  value = "{{ old('finishingMatchTime') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('finishingMatchTime') }}</span><br>
                                    </div>
                                    <br>

                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-lg-offset-3 control-label">Closing bet time:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control round-form " name = "closingBetTime" type="datetime-local" value = "{{ old('closingBetTime') }}" width="10px"><br>
                                        <span class="text-danger">{{ $errors->first('closingBetTime') }}</span><br>
                                    </div>
                                    <br><br><br><br>    

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
                           


                        </form>
                       <!--  </div> --><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->            
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
@endsection