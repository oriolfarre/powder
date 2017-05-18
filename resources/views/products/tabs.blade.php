<!-- Nav tabs -->
<div class="container">
  <div class="row">
      <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="{{(Request::is('taules'))?'active':''}}"><a href="{{url('/taules')}}">Taules</a></li>
        <li role="presentation" class="{{(Request::is('fixacions'))?'active':''}}"><a href="{{url('/fixacions')}}">Fixacions</a></li>
        <li role="presentation" class="{{(Request::is('botes'))?'active':''}}"><a href="{{url('/botes')}}">Botes</a></li>
      </ul>
  </div>
</div>
