@extends('layout.admin.template')
@section('title','bet322/admin/hiddenMatch')
@section('content')
<section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> public matches </h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i>List</h4>
                            <h4><i class="fa fa-angle-right"></i>total public matches: </h4>
                            <table class="table table-hover table-striped table-advanced table-bordered"
                                   <thead>
                                    <tr>
                                        <th class="col-lg-0.5" class="numeric">ID </th>
                                        <th class="col-lg-1.5" class="numeric">Home team</th>
                                        <th class="col-lg-1.5" class="numeric">Away team</th>
                                        <th class="col-lg-1.5" class="numeric">Starting match time</th>
                                        <th class="col-lg-1.5" class="numeric">Finishing match time</th>
                                        <th class="col-lg-1.5" class="pull-center">Closing bet time<br></th>
                                        <th class="col-lg-1" class="pull-left">League</th>
                                        <th class="col-lg-0.5" class="pull-left">Score</th>
                                        <th class="col-lg-2" class="pull-left"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                   <tr>
                                        <td class="col-lg-0.5" class="numeric">1 </td>
                                        <td class="col-lg-1.5" class="numeric">manchester</td>
                                        <td class="col-lg-1.5" class="numeric">real</td>
                                        <td class="col-lg-1.5" class="numeric">9:30:20 12.2.2</td>
                                        <td class="col-lg-1.5" class="numeric">9:30:20 12.2.2</td>
                                        <td class="col-lg-1.5" class="pull-center">9:30:20 12.2.2<br></td>
                                        <td class="col-lg-1" class="pull-left">la liga</td>
                                         <td class="col-lg-0.5" class="pull-left">2-1</td>
                                         <td>
                                        <button class="btn btn-primary btn-xs">detail<i class="fa fa-pencil"></i></button>
                                        
                                        <button class="btn btn-danger btn-xs">delete<i class="fa fa-trash-o "></i></button>
                                        <button class="btn btn-success btn-xs">&nbsp &nbsp update score &nbsp &nbsp<i class="fa fa-user"></i></button>
                                  </td>
                                    </tr>

                                </tbody>
                            </table>


                            
                        </div><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->			
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
@endsection