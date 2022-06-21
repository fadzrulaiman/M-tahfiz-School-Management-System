<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
<img src="{{ asset('global_assets/images/logo1.png')  }}" style="width: 40px;height: 40px;" class="mt-1">
    <div class="mt-2 mr-2 ml-3">
        <a href="{{ route('dashboard') }}" class="d-inline-block">
            <h4 class="text-bold text-white">{{ Qs::getSystemName() }}</h4>
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>
</div>
<!-- /main navbar -->
