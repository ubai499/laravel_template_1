@include('partial.head')
<div id="layout-wrapper">
    @include('partial.header')
    @include('partial.notification_remove')
    @include('partial.menu')
    <div class="main-content">
        @yield('content')
        @include('partial.footer')
    </div>
</div>
@include('partial.additional')
@include('partial.scripts')
@include('partial.toastr')