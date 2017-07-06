@extends('layout.admin.template')
@section('title','bet322/admin/updateScore')
@section('content')
<section id="main-content">
            <section class="wrapper">
                <h3 ><i class="fa fa-angle-right" ></i> Update Score </h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <!-- <div class="content-panel"> -->
                            <h4 class="text-center">Match</h4>
                            
                            <div class="row mt">
                                <div class="col-lg-6"><!-- home team -->
                                    <h4 class="text-center"> <b class="text-center">Home team</b></h4>
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div class="text-center">
                                            <div class="row"> 
                                            <h3 style="color: red">
                                                Manchester city
                                            </h3>
                                            </div>
                                        </div> 

                                        <div class="text-center">
                                            <div class="row"> 
                                            <img src="{{ asset('img/login-bg.jpg') }}" class="img-circle" alt="Cinque Terre" width="150" height="150"> <br>
                                           
                                            </div>
                                        </div> 
                                    </div>
                                </div>       
                               <div class="col-lg-6"><!-- home team -->
                                    <h4 class="text-center"> <b class="text-center">Away team</b></h4>
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div class="text-center">
                                            <div class="row"> 
                                            <h3 style="color: red">
                                                Real Marrid
                                            </h3>
                                            </div>
                                        </div> 

                                        <div class="text-center">
                                            <div class="row"> 
                                            <img src="{{ asset('img/login-bg.jpg') }}" class="img-circle" alt="Cinque Terre" width="150" height="150"> <br>
                                           
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                            </div> <!-- end match -->
                           <!--  bet rate -->
                            <!-- <div class="form-panel"> -->
                                <div class="text-center">
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> Score </h4>
                               
                                <div class="form-group">
                                    <div class="row mt">
                                    <div class="col-lg-2 col-lg-offset-4">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>
                                     <div class="col-lg-2">
                                        <input name="homeRate" class="form-control" type="text">
                                    </div>

                                    <br>
                                </div> 
                                </div>
                               

                             
                         <!--    </div> -->
                         <!--  time -->
                            <!-- <div class="form-panel"> -->
                            
                                <div class="row">  
                                    <div class="col-lg-2 col-lg-offset-7"> 
                                    <button type="submit" value="Add" class="btn btn-theme"><i class="fa fa-check">Update Score</i>
                                    </button>
                                    </div>
                                     
                                    <button style="float: left" type="reset" value="Reset" class="btn btn-theme"><i class="fa fa-check">Reset</i></button>
                                    
                                </div>
                            </div>

                         <!--    </div> -->
                           


                        
                       <!--  </div> --><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->            
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
@endsection