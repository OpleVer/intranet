@extends('layouts.app')

@section('content')
<div class="page-content">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Directorio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="profile-header row">
                               <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                                   <img src="assets/img/avatars/divyia.jpg" alt="" class="header-avatar">
                               </div>
                               <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                                   <div class="header-fullname">Kim Ryder</div>
                                   <a href="#" class="btn btn-palegreen btn-sm  btn-follow">
                                       <i class="fa fa-check"></i>
                                       Following
                                   </a>
                                   <div class="header-information">
                                       Kim is a software developer in Microsoft. She works in ASP.NET MVC Team and collaborates with other teams.
                                   </div>
                               </div>
                               <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                           <div class="stats-value pink">284</div>
                                           <div class="stats-title">FOLLOWING</div>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                           <div class="stats-value pink">803</div>
                                           <div class="stats-title">FOLLOWERS</div>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                           <div class="stats-value pink">1207</div>
                                           <div class="stats-title">POSTS</div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                           <i class="glyphicon glyphicon-map-marker"></i> Boston
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                           Rate: <strong>$250</strong>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                           Age: <strong>24</strong>
                                       </div>
                                   </div>
                               </div>
                           </div>






                </div>
            </div>
        </div>
    </div>
</div>






@endsection
