<div class="sidebar-module">
  <h4>Archives</h4>
  <ol class="list-unstyled">

  @foreach ($archived as $archive)
      
       <li><a href="/posts/?month={{$archive['month']}}&year={{$archive['year']}}">{{$archive['month']}}&nbsp;{{$archive['year']}}&nbsp; ({{$archive['published']}})</a></li>
  @endforeach
  </ol>
</div>