<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary @if(url()->current() == route($route.'.index')) active @endif">
        <a href="{{ route($route.'.index') }}">Channel list</a>
    </label>
    <label class="btn btn-secondary  @if(url()->current() == route($route.'.create')) active @endif" >
        <a href="{{ route($route.'.create') }}">Create new channel</a>
    </label>
</div>