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
                                <br> <br> <br> <br> <br> <br>
                                    <div class="row">
                                        <div class="col-lg-5 text-center" style="color: red"> <h1> 2 </h1> </div>
                                        <div class="col-lg-2 text-center" style="color: red"> <h1> - </h1> </div>
                                        <div class="col-lg-5 text-center" style="color: red "   ><h1> 2 </h1> </div>
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
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> User bet list </h4>
                                </div>
                                <table class="table table-hover table-striped table-advanced table-bordered"
                                   <thead>
                                    <tr>
                                        <th class="col-lg-3" class="numeric">Account </th>
                                        <th class="col-lg-2" class="numeric">Bet</th>
                                        <th class="col-lg-2" class="numeric">Quantity</th>
                                        <th class="col-lg-2" class="numeric">Refund</th>
                                        <th class="col-lg-2" class="pull-left"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                   <tr>
                                        <td class="col-lg-3" class="numeric">quang </td>
                                        <td class="col-lg-2" class="numeric">home</td>
                                        <td class="col-lg-2" class="numeric">500apc</td>
                                        <td class="col-lg-2" class="numeric">0apc</td>
                                        
                                        <td>
                                        <button class="btn btn-primary btn-xs">detail<i class="fa fa-pencil"></i></button>
                                        
                                        <button class="btn btn-danger btn-xs">delete<i class="fa fa-trash-o "></i></button>
                                        <button class="btn btn-success btn-xs">&nbsp &nbsp update score &nbsp &nbsp<i class="fa fa-user"></i></button>
                                  </td>
                                    </tr>

                                </tbody>
                            </table>

                               

                             
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