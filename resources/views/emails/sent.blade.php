@extends('templates.main-template')
@section('content')

<div class="hbox hbox-auto-xs hbox-auto-sm" ng-controller="MailCtrl">
  
  @include('partials.email-sidebar')
  
  <div class="col">
    
    <div>
      <!-- header -->
      <div class="wrapper bg-light lter b-b">
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-sm btn-bg btn-default"><i class="fa fa-chevron-left"></i></button>
          <button type="button" class="btn btn-sm btn-bg btn-default"><i class="fa fa-chevron-right"></i></button>
        </div>
        <div class="btn-toolbar">
          <div class="btn-group dropdown">
            <button class="btn btn-default btn-sm btn-bg dropdown-toggle" data-toggle="dropdown">
              <span class="dropdown-label">Filter</span>                    
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu text-left text-sm">
              <li><a ui-sref="app.mail.list({fold:'unread'})">Unread</a></li>
              <li><a ui-sref="app.mail.list({fold:'starred'})">Starred</a></li>
            </ul>
          </div>
          <div class="btn-group">
            <button class="btn btn-sm btn-bg btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
          </div>
        </div>
      </div>
      <!-- / header -->

      <!-- list -->
      <ul class="list-group list-group-lg no-radius m-b-none m-t-n-xxs">
        <li class="list-group-item clearfix b-l-3x b-l-info">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip m-l-sm"></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/10">Angular is Awesome</a><span class="label bg-light m-l-sm ">angular</span></div>
            <div class="text-ellipsis m-t-xs ">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper Neque quam. Aliquam sollicitudin venenati</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x b-l-primary">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/9">Bootstrap components written in pure AngularJS</a><span class="label bg-light m-l-sm ">bootstrap</span></div>
            <div class="text-ellipsis m-t-xs ">Retur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibu</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x b-l-info">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip m-l-sm"></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/8">Nesting view in Angular</a><span class="label bg-light m-l-sm ">angular</span></div>
            <div class="text-ellipsis m-t-xs ">Neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x b-l-info">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/7">Lazy loading Angular controllers, directives and services</a><span class="label bg-light m-l-sm ">angular</span></div>
            <div class="text-ellipsis m-t-xs ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin v</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x b-l-warning">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/6">What a hot day</a><span class="label bg-light m-l-sm ">client</span></div>
            <div class="text-ellipsis m-t-xs ">Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/5">Oho!</a><span class="label bg-light m-l-sm "></span></div>
            <div class="text-ellipsis m-t-xs ">Turpis egestas lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x b-l-success">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/4">Meeting</a><span class="label bg-light m-l-sm ">work</span></div>
            <div class="text-ellipsis m-t-xs ">Fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque qua</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/3">Product version released</a><span class="label bg-light m-l-sm "></span></div>
            <div class="text-ellipsis m-t-xs ">Consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. V</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">5 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/2">Hi, What's up</a><span class="label bg-light m-l-sm "></span></div>
            <div class="text-ellipsis m-t-xs ">Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales</div>
          </div>      
        </li>
        <li class="list-group-item clearfix b-l-3x b-l-success">
          <a class="avatar thumb pull-left m-r" href="#/app/page/profile">
            <img ng-src="{{ asset('img/a0.jpg') }}" src="{{ asset('img/a0.jpg') }}">
          </a>
          <div class="pull-right text-sm text-muted">
            <span class="hidden-xs ">6 months ago</span>
            <i class="fa fa-paperclip ng-hide m-l-sm" ng-show=""></i>
          </div>
          <div class="clear">
            <div><a  class="text-md " href="#/app/mail/1">Kick-off meeting at 5:00 pm</a><span class="label bg-light m-l-sm ">work</span></div>
            <div class="text-ellipsis m-t-xs ">Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales</div>
          </div>      
        </li>
      </ul>
      <!-- / list -->
    </div>

  </div>
</div>
@stop