@extends('layout.user.template')
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
                                <div class="col-lg-5"><!-- home team -->
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
                                <div class="col-lg-2"> <!-- score -->
                                <br> <br> <br> <br> 
                                <div class="text-center" style="color:red"> <h4> Bet rate </h4> </div>
                                    <div class="row">
                                        <div class="col-lg-4 text-center" > <h4> Home </h1> </div>
                                        <div class="col-lg-4 text-center"> <h4> Draw </h1> </div>
                                        <div class="col-lg-4 text-center"   ><h4> Away </h1> </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-lg-4 text-center" > <h4> 1 </h1> </div>
                                        <div class="col-lg-4 text-center"> <h4> 2 </h1> </div>
                                        <div class="col-lg-4 text-center"   ><h4> 3 </h1> </div>
                                    </div>
                                </div>       
                                <div class="col-lg-5"><!-- home team -->
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
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> Bet </h4>
                                </div>
                               
                        <form class="form-horizontal style-form" action="index.php?action=manage_add" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-4 control-label">Choose result</label>
                                <div class="col-sm-2">                                  
                                    <select class="form-control" title="Place" name="source">                                 
                                        <option value="USA">Home</option>
                                        <option value="Japan">Draw</option>
                                        <option value="Russia">Away</option>
                                       

                                    </select>
                                </div>    
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-4 control-label">Quantity</label>
                                <div class="col-sm-2">
                                    <input name="weight" class="form-control" type="text">
                                </div>
                                <strong>APC</strong>
                            </div>
                         </form>
                          <div class="col-lg-offset-6">    
                                    <button type="submit" value="Bet" class="btn btn-theme"><i class="fa fa-check">Add</i>
                                    </button>
                                    <div class="col-lg-2">
                                        <button  type="reset" value="Reset" class="btn btn-theme"><i class="fa fa-check">Reset</i></button> 
                                    </div>
                                </div>
                            </div>
                               

                             
                         <!--    </div> -->
                         <!--  time -->
                            <!-- <div class="form-panel"> -->
                            
                               
                         <!--    </div> -->
                           


                        
                       <!--  </div> --><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->            
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
@endsection