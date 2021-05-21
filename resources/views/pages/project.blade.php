@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Many to many relationship </h1>
        <div class="row">
           <div class="col-md-6">
               <h5 class="text-center">project with only managers & subbordinates</h5>
               <table class="table-bordered table-striped" >
                   <thead>
                   <tr>
                       <th class="text-center">Sl</th>
                       <th class="text-center">Projects</th>
                       <th class="text-center">Users</th>
                       {{--                    <th class="text-center"> <input type="checkbox" id="checkAll"> Select All</th>--}}
                   </tr>
                   </thead>
                   <tbody>

                   @foreach ($projects as $project)

                       <tr>
                            <td>{{$loop->iteration}}</td>
                           <td class="text-center">{{$project->name}}</td>
                           <td class="text-center">
                               <ul>@foreach($project->users as $user)
                                       <li>{{$user->name}} ({{$user->project_user->created_at}})({{$user->project_user->is_manager}})</li>
                                   @endforeach
                               </ul>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
           <div class="col-md-6">
               <h5 class="text-center">project with only managers</h5>
               <table class="table-bordered table-striped" >
                   <thead>
                   <tr>
                       <th class="text-center">Projects</th>
                       <th class="text-center">Managers</th>
                       {{--                    <th class="text-center"> <input type="checkbox" id="checkAll"> Select All</th>--}}
                   </tr>
                   </thead>
                   <tbody>

                   @foreach ($projectsWithManagers as $projectM)

                       <tr>

                           <td class="text-center">{{$projectM->name}}</td>
                           <td class="text-center">
                               <ul>@foreach($projectM->managers as $userM)
                                       <li>{{$userM->name}} ({{$userM->pivot->created_at}}) ({{$userM->pivot->is_manager}})</li>
                                   @endforeach
                               </ul>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
        </div>


    </div>

@endsection

