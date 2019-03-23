@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-xs-12">
                <h4 class="page-title">Dashboard (EXAMPLE DATA)</h4> 
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <!--col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                            <h5 class="text-muted vb">STUDENTS</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-danger">{{ $students }}</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $students }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $students }}%"> <span class="sr-only">{{ $students }}% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!--col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">LECTURES</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-megna">{{ $lectures }}</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="{{ $lectures }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $lectures }}%"> <span class="sr-only">{{ $lectures }}% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!--col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">ATTENDANCES</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-primary">{{ $attendances }}</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $attendances }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $attendances }}%"> <span class="sr-only"> {{ $attendances }}% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!--row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Example Stats</h3>
                    <ul class="list-inline text-right">
                        <li>
                            <h5><i class="fa fa-circle m-r-5" style="color: #dadada;"></i>A View</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>B View</h5>
                        </li>
                    </ul>
                    <div id="morris-area-chart2"></div>
                    <div class="morris-hover-point"></div>
                </div>
            </div>
        </div>
        <!--row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">REGISTRATIONS
                        <div class="col-md-2 col-sm-4 col-xs-12 pull-right">
                            <select class="form-control pull-right row b-none">
                                <option>March 2016</option>
                                <option>April 2016</option>
                                <option>May 2016</option>
                                <option>June 2016</option>
                                <option>July 2016</option>
                            </select>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($users->isEmpty())
                                    <tr>
                                        <td colspan="2"><h4>No User yet.</h4></td>
                                    </tr>
                                @endif
                                @foreach($users as $index => $user)
                                    @if (Auth::user()->id === $user->id)
                                        @continue
                                    @endif

                                    <tr>
                                        <td class="txt-oflo">{{$user->first_name}}</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 © Pixel Admin brought to you by wrappixel.com </footer>
@endsection
@section('scripts')
    @parent
    <!--Counter js -->
    <script src="{{ asset('theme/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('theme/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('theme/plugins/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('theme/plugins/bower_components/morrisjs/morris.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('theme/pixel-html/js/dashboard1.js') }}"></script>
    <script src="{{ asset('theme/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
@endsection