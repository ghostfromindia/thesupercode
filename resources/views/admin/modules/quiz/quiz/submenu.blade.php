<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary @if(url()->current() == route($route.'.index')) active @endif">
        <a href="{{ route($route.'.index') }}">Quiz list</a>
    </label>
    <label class="btn btn-secondary  @if(url()->current() == route($route.'.create')) active @endif" >
        <a href="{{ route($route.'.create') }}">Create new Quiz</a>
    </label>

    @if(!empty($obj->id))
    <label class="btn btn-secondary  @if(url()->current() == route($route.'.create')) active @endif" >
        <a href="{{ route('question.create',['id' => encrypt($obj->id)]) }}">Questions</a>
    </label>
    @endif

</div>