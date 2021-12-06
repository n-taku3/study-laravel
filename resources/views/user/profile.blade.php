<!-- View stored in resources/views/greeting.blade.php -->

<html>
    <body>
        <h1>Hello!! {{$id}}</h1>
        @foreach ($foos as $foo)
          <div>{{ $foo->name }}</div>
        @endforeach

        <hr>
        <h2>
          {{ $builder_foo[0]->name }}
        </h2>
    </body>
</html>
