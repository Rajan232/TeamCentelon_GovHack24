@extends('layouts.admin')

@section('title', 'Traffic Management Dashboard')

@section('main')



<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>15</h3>
<p>New Crashes</p>
<div class="icon">

<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fff" class="bi bi-slash-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708"/>
</svg>

</div>
</div>

<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Crash Rate</p>
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fff" class="bi bi-car-front-fill" viewBox="0 0 16 16">
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
</svg>
</div>
</div>

<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>Vehicles Involved</p>
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fff" class="bi bi-car-front" viewBox="0 0 16 16">
  <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"/>
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"/>
</svg>
</div>
</div>

<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>10</h3>
<p>High Risk Zone</p>
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
</div>
</div>

<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>


<div class="row">

<section class="col-lg-7 connectedSortable ui-sortable">

<div class="card">
<div class="card-header ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">
<i class="fas fa-chart-pie mr-1"></i>
Crashes: Monthly Recap Report
</h3>
<div class="card-tools">
<ul class="nav nav-pills ml-auto">
<li class="nav-item">
<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
</li>

</ul>
</div>
</div>
<div class="card-body">
<div class="tab-content p-0">

<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<img src="dist/img/graph2.jpeg" id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 869px;" width="769" class="chartjs-render-monitor"></img>
</div>

</div>
</div>
</div>


<div class="card direct-chat direct-chat-primary">
<div class="card-header ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">People Reporting</h3>
<div class="card-tools">
<span title="3 New Messages" class="badge badge-primary">3</span>
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
<i class="fas fa-comments"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">

<div class="direct-chat-messages">

<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
</div>

<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
I have a crash reporting!
</div>

</div>


<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
</div>

<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
Hi Pierce. Tell me more about it
</div>

</div>


<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
</div>

<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
Please share your helpline number!
</div>

</div>


<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
</div>

<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">

<div class="direct-chat-text">
Please call us on 911
</div>

</div>

</div>


<div class="direct-chat-contacts">
<ul class="contacts-list">
<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Count Dracula
<small class="contacts-list-date float-right">2/28/2015</small>
</span>
<span class="contacts-list-msg">Can you please send a medic unit to 10th avenue cross road?</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Sarah Doe
<small class="contacts-list-date float-right">2/23/2015</small>
</span>
<span class="contacts-list-msg">Yes sure. Please share your number.</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Nadia Jolie
<small class="contacts-list-date float-right">2/20/2015</small>
</span>
<span class="contacts-list-msg">Its 75755757544545</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Nora S. Vans
<small class="contacts-list-date float-right">2/10/2015</small>
</span>
<span class="contacts-list-msg">Where is you currently?</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
John K.
<small class="contacts-list-date float-right">1/27/2015</small>
</span>
<span class="contacts-list-msg">I will share the location here.</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Kenneth M.
<small class="contacts-list-date float-right">1/4/2015</small>
</span>
<span class="contacts-list-msg">Okay Please!</span>
</div>

</a>
</li>

</ul>

</div>

</div>

<div class="card-footer">
<form action="#" method="post">
<div class="input-group">
<input type="text" name="message" placeholder="Type Message ..." class="form-control">
<span class="input-group-append">
<button type="button" class="btn btn-primary">Send</button>
</span>
</div>
</form>
</div>

</div>


<div class="card-header">
<h3 class="card-title">Recent Trends</h3>
</div>

<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">#</th>
<th>Vehicle Type</th>
<th>Crashes</th>
<th style="width: 40px">Casuality</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Sedan</td>
<td>
10
</td>
<td><span class="badge bg-danger">55%</span></td>
</tr>
<tr>
<td>2.</td>
<td>SUV</td>
<td>
12
</div>
</td>
<td><span class="badge bg-warning">70%</span></td>
</tr>
<tr>
<td>3.</td>
<td>Truck</td>
<td>
20
</div>
</td>
<td><span class="badge bg-primary">30%</span></td>
</tr>
<tr>
<td>4.</td>
<td>Motorcycle</td>
<td>
9
</div>
</td>
<td><span class="badge bg-danger">90%</span></td>
</tr>
</tbody>
</table>
</div>

<div class="card-footer clearfix">
<ul class="pagination pagination-sm m-0 float-right">
<li class="page-item"><a class="page-link" href="#">«</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">»</a></li>
</ul>
</div>



</section>


<section class="col-lg-5 connectedSortable ui-sortable">

<div class="card bg-gradient-primary">
<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">
<i class="fas fa-map-marker-alt mr-1"></i>
Traffic Insights
</h3>

<div class="card-tools">
<button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
<i class="far fa-calendar-alt"></i>
</button>
<button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>

</div>
<div class="card-body">

<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=victoria,%20Australia&amp;t=k&amp;z=10&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 590px; height: 400px;"></iframe><style>.mapouter{display:table;}.gmap_canvas{overflow:hidden;position:relative;height:400px;width:590px;background:#fff;}</style><a href="https://fnfmods.net/fnf-test/">fnf test</a><style>.gmap_canvas iframe{position:relative !important;z-index:2 !important;}.gmap_canvas a{color:#fff !important;position:absolute !important;top:0 !important;left:0 !important;z-index:0 !important;}</style></div></div>
</div>

<div class="card-footer bg-transparent">
<div class="row">
<div class="col-4 text-center">
<div id="sparkline-1"><canvas width="80" style="width: 80px; height: 50px;" height="50"></canvas></div>
<div class="text-white">Weather</div>
</div>

<div class="col-4 text-center">
<div id="sparkline-2"><canvas width="80" style="width: 80px; height: 50px;" height="50"></canvas></div>
<div class="text-white">Vehicle Types</div>
</div>

<div class="col-4 text-center">
<div id="sparkline-3"><canvas width="80" style="width: 80px; height: 50px;" height="50"></canvas></div>
<div class="text-white">Road Surface</div>
</div>

</div>

</div>
</div>


<div class="card bg-gradient-info">
<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">
<i class="fas fa-th mr-1"></i>
Crash Graph
</h3>
<div class="card-tools">
<button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<img src="dist/img/graph.png" class="chart chartjs-render-monitor" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 605px;" width="605" height="250"></img>
</div>

<div class="card-footer bg-transparent">
<div class="row">
<div class="col-4 text-center">
<div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>
<div class="text-white">Total crashes</div>
</div>

<div class="col-4 text-center">
<div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>
<div class="text-white">Minor crashes</div>
</div>

<div class="col-4 text-center">
<div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>
<div class="text-white">Major crashes</div>
</div>

</div>

</div>

</div>



</section>

</div>




@endSection

