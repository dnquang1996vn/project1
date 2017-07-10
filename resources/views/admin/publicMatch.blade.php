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
                            <h4><i class="fa fa-angle-right"></i>total public matches:{{$publicMatches->count()}} </h4>
                            <table class="table table-hover table-striped table-advanced table-bordered"
                                   <thead>
                                    <tr>
                                        <th class="col-lg-0.5" class="numeric">ID </th>
                                        <th class="col-lg-1.5" class="numeric">Home team</th>
                                        <th class="col-lg-1.5" class="numeric">Away team</th>
                                        <th class="col-lg-1.5" class="numeric">Starting match time</th>
                                        <th class="col-lg-1.5" class="numeric">Finishing match time</th>
                                        <th class="col-lg-1.5" class="pull-center">Closing bet time<br></th>
                                        <th class="col-lg-0.5" class="pull-left">Score</th>
                                        <th class="col-lg-0.5" class="pull-left">detail</th>
                                        <th class="col-lg-0.5" class="pull-left">delete</th>
                                        <th class="col-lg-0.5" class="pull-left">update</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach($publicMatches as $publicMatch)
                                    <tr>
                                        <td class="col-lg-0.5" class="numeric"> 
                                            {{$publicMatch->id}}
                                        </td>
                                        <td class="col-lg-1.5" class="numeric">
                                            {{$publicMatch->home_team_name}}
                                        </td>
                                        <td class="col-lg-1.5" class="numeric">
                                            {{$publicMatch->away_team_name}}
                                        </td>
                                        <td class="col-lg-1.5" class="numeric">
                                            {{$publicMatch->starting_time}}
                                        </td>
                                        <td class="col-lg-1.5" class="numeric">
                                            {{$publicMatch->finishing_time}}
                                        </td>
                                        <td class="col-lg-1.5" class="pull-center">
                                            {{$publicMatch->closing_bet}}
                                        </td>
                                        <td class="col-lg-0.5" class="pull-left">
                                        @if (isset($publicMatch->home_score))
                                            <strong>
                                              {{$publicMatch->home_score}}-{{$publicMatch->away_score}}
                                            </strong>
                                        @else no result
                                        @endif
                                        </td>
                                        <td class="col-lg-0.5" class="pull-left">
                                            <button class="btn btn-primary btn-xs">detail<i class="fa fa-pencil"></i></button>
                                        </td>
                                        <td class="col-lg-0.5" class="pull-left">
                                            <form method="post" action="{{ url('admin/publicMatch/delete') }}">
                                        {{ csrf_field() }}
                                            <input name="delete_id" value="{{$publicMatch->id}}" type="hidden">
                                            <button onclick="return confirm('Are you sure to delete this match?')" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o "></i>delete
                                            </button>
                                        </form>
                                        </td>
                                        <td class="col-lg-0.5" class="pull-left">
                                        @if ($publicMatch->public == 2)
                                        @else
                                            <a href="{{route('showUpdateForm',$publicMatch->id)}}">
                                                <button class="btn btn-success btn-xs">update score<i class="fa fa-user"></i></button>
                                            </a>
                                        </td>
                                        @endif
                                         <!-- <td>
                                        <button class="btn btn-primary btn-xs">detail<i class="fa fa-pencil"></i></button>
                                        
                                        <button class="btn btn-danger btn-xs">delete<i class="fa fa-trash-o "></i></button>
                                        <button class="btn btn-success btn-xs">&nbsp &nbsp update score &nbsp &nbsp<i class="fa fa-user"></i></button>
                                  </td> -->
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