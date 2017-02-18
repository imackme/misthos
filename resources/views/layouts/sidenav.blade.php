<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ route('dashboard') }}" class="site_title"><span>{{ config('app.name', 'Laravel') }}</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    @include('layouts/profile')
    <!-- /menu profile quick info -->
    <br />

    <!-- sidebar menu -->
    @include('layouts/sidemenu')
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    @include('layouts/sidefooter')
    <!-- /menu footer buttons -->
</div>