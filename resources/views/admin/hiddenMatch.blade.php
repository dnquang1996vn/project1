@extends('layout.admin.template')

@section('content')
<section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Hidden matches </h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                          @if (session('message'))
                                <div class="alert alert-success text-center">
                                <h2> {{ session('message') }} </h2>
                                </div>
                            @endif
                            <h4><i class="fa fa-angle-right"></i>List</h4>
                            <h4><i class="fa fa-angle-right"></i>total hidden matches:{{$hiddenMatches->count()}} </h4>
                            <a href={{route('showCreateForm')}}>
                                <button class="btn btn-primary btn-xs">
                                    <i class="fa fa-check "></i>create a new match
                                </button>
                            </a>    
                            
                            </form>
                            <table class="table table-hover table-striped table-advanced table-bordered"
                                   <thead>
                                    <tr>
                                        <th class="col-lg-0.5" class="numeric"> ID </th>
                                        <th class="col-lg-1" class="numeric"> Home team</th>
                                        <th class="col-lg-1" class="numeric"> Away team</th>
                                        <th class="col-lg-0.5" class="numeric"> Home Rate </th>
                                        <th class="col-lg-0.5" class="numeric"> Draw Rate </th>
                                        <th class="col-lg-0.5" class="numeric"> Away Rate </th>
                                        <th class="col-lg-2" class="numeric"> Starting match time </th>
                                        <th class="col-lg-2" class="numeric"> Finishing match time </th>
                                        <th class="col-lg-2" class="pull-center"> Closing bet time <br></th>
                                    <!--     <th class="col-lg-2" class="pull-left"> League </th> -->
                                        <th class="col-lg-2" class="pull-left"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                
                                    
                                    @foreach ($hiddenMatches as $hiddenMatch)
                                    <tr>
                                        <th class="col-lg-0.5" class="numeric"> {{$hiddenMatch->id}} </th>
                                        <th class="col-lg-1" class="numeric"> {{$hiddenMatch->home_team_name}} </th>
                                        <th class="col-lg-1" class="numeric"> {{$hiddenMatch->away_team_name}}</th>
                                        <th class="col-lg-0.5" class="numeric"> {{$hiddenMatch->home_rate}} </th>
                                        <th class="col-lg-0.5" class="numeric"> {{$hiddenMatch->draw_rate}} </th>
                                        <th class="col-lg-0.5" class="numeric"> {{$hiddenMatch->away_rate}} </th>
                                        <th class="col-lg-2" class="numeric"> {{$hiddenMatch->starting_time}} </th>
                                        <th class="col-lg-2" class="numeric"> {{$hiddenMatch->finishing_time}} </th>
                                        <th class="col-lg-2" class="pull-center"> {{$hiddenMatch->closing_bet}} <br></th>
                                    <!--     <th class="col-lg-2" class="pull-left"> League </th> -->
                                        <td>
                                        <form style="float: left;" method="post" action="{{ url('admin/hiddenMatch/delete') }}">
                                        {{ csrf_field() }}
                                            <input name="delete_id" value="{{$hiddenMatch->id}}" type="hidden">
                                            <button onclick="return confirm('Are you sure to delete this match?')" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o "></i>delete
                                            </button>
                                        </form>
                                      
                                           
                                            <a href="/admin/hiddenMatch/{{ $hiddenMatch->id }}/edit"><button class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil "></i>edit
                                            </button></a>
                                      
                                        <form style="float: left"method="post" action="{{ url('admin/hiddenMatch/public') }}">
                                        {{ csrf_field() }}
                                            <input name="public_id" value="{{$hiddenMatch->id}}" type="hidden">
                                            <button onclick="return confirm('After you public, you cannot edit anymore. Do you want to countinue?')" class= "btn btn-success btn-xs">
                                                <i class="fa fa-check "></i>public
                                            </button>
                                        </form>
                                       
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                            
                        </div><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->			
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
@endsection