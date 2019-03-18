@extends('layouts.app')

@section('content')
<div id="page-wrapper" style="min-height: 431px;">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                </ol>
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
                            <h5 class="text-muted vb">MYNEW CLIENTS</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
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
                            <h5 class="text-muted vb">NEW PROJECTS</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
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
                            <h5 class="text-muted vb">NEW INVOICES</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-primary">157</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
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
                    <h3 class="box-title">Sales Difference</h3>
                    <ul class="list-inline text-right">
                        <li>
                            <h5><i class="fa fa-circle m-r-5" style="color: #dadada;"></i>Site A View</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>Site B View</h5>
                        </li>
                    </ul>
                    <div id="morris-area-chart2" style="height: 370px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="370" version="1.1" width="1120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.515625" y="331" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,331H1095" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="254.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,254.5H1095" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="178" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,178H1095" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="101.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">225</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,101.5H1095" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,25H1095" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="1095" y="343.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="920.0824751825651" y="343.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="745.16495036513" y="343.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="570.2474255476951" y="343.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="394.8506746348699" y="343.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="219.93314981743495" y="343.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="45.015625" y="343.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><path fill="#f4f4f4" stroke="none" d="M45.015625,331L219.93314981743495,198.4L394.8506746348699,249.4L570.2474255476951,259.6L745.16495036513,147.4L920.0824751825651,223.89999999999998L1095,76L1095,331L45.015625,331Z" fill-opacity="0.7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.7;"></path><path fill="none" stroke="#cccccc" d="M45.015625,331L219.93314981743495,198.4L394.8506746348699,249.4L570.2474255476951,259.6L745.16495036513,147.4L920.0824751825651,223.89999999999998L1095,76" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.015625" cy="331" r="0" fill="#cccccc" stroke="#cccccc" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="219.93314981743495" cy="198.4" r="0" fill="#cccccc" stroke="#cccccc" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="394.8506746348699" cy="249.4" r="0" fill="#cccccc" stroke="#cccccc" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="570.2474255476951" cy="259.6" r="0" fill="#cccccc" stroke="#cccccc" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="745.16495036513" cy="147.4" r="0" fill="#cccccc" stroke="#cccccc" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="920.0824751825651" cy="223.89999999999998" r="0" fill="#cccccc" stroke="#cccccc" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="1095" cy="76" r="0" fill="#cccccc" stroke="#cccccc" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#e7dedc" stroke="none" d="M45.015625,331L219.93314981743495,229L394.8506746348699,269.8L570.2474255476951,127L745.16495036513,178L920.0824751825651,239.2L1095,178L1095,331L45.015625,331Z" fill-opacity="0.7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.7;"></path><path fill="none" stroke="#cbb2ae" d="M45.015625,331L219.93314981743495,229L394.8506746348699,269.8L570.2474255476951,127L745.16495036513,178L920.0824751825651,239.2L1095,178" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.015625" cy="331" r="0" fill="#cbb2ae" stroke="#cbb2ae" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="219.93314981743495" cy="229" r="0" fill="#cbb2ae" stroke="#cbb2ae" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="394.8506746348699" cy="269.8" r="0" fill="#cbb2ae" stroke="#cbb2ae" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="570.2474255476951" cy="127" r="0" fill="#cbb2ae" stroke="#cbb2ae" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="745.16495036513" cy="178" r="0" fill="#cbb2ae" stroke="#cbb2ae" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="920.0824751825651" cy="239.2" r="0" fill="#cbb2ae" stroke="#cbb2ae" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="1095" cy="178" r="0" fill="#cbb2ae" stroke="#cbb2ae" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 7.01562px; top: 231px; display: none;"><div class="morris-hover-row-label">2010</div><div class="morris-hover-point" style="color: #ccc">
Site A:
0
</div><div class="morris-hover-point" style="color: #cbb2ae">
Site B:
0
</div></div></div>
                </div>
            </div>
        </div>
        <!--row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Recent sales
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
                                    <th>STATUS</th>
                                    <th>DATE</th>
                                    <th>PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="txt-oflo">Pixel admin</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 18</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Real Homes</td>
                                    <td>EXTENDED</td>
                                    <td class="txt-oflo">April 19</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Medical Pro</td>
                                    <td>TAX</td>
                                    <td class="txt-oflo">April 20</td>
                                    <td><span class="text-danger">-$24</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Hosting press</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 21</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Helping Hands</td>
                                    <td>MEMBER</td>
                                    <td class="txt-oflo">April 22</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Digital Agency</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 23</td>
                                    <td><span class="text-danger">-$14</span></td>
                                </tr>
                                <tr>
                                    <td class="txt-oflo">Helping Hands</td>
                                    <td>MEMBER</td>
                                    <td class="txt-oflo">April 22</td>
                                    <td><span class="text-success">$64</span></td>
                                </tr>
                            </tbody>
                        </table> <a href="#">Check all the sales</a> </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- row -->
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Recent Comments</h3>
                    <div class="comment-center">
                        <div class="comment-body">
                            <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                        </div>
                        <div class="comment-body">
                            <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> </div>
                            <div class="mail-contnet">
                                <h5>Sonu Nigam</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                        </div>
                        <div class="comment-body b-none">
                            <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> </div>
                            <div class="mail-contnet">
                                <h5>Arijit Sinh</h5> <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. </span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">You have 5 new messages</h3>
                    <div class="message-center">
                        <a href="#">
                            <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                        </a>
                        <a href="#">
                            <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                        </a>
                        <a href="#">
                            <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                        </a>
                        <a href="#">
                            <div class="user-img"> <img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Genelia Deshmukh</h5> <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> </div>
                        </a>
                        <a href="#" class="b-none">
                            <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 © Pixel Admin brought to you by wrappixel.com </footer>
</div>
@endsection