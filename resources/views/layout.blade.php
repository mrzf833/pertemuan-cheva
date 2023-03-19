<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(true)
        <p>true</p>
    @elseif (false)
        <p>false</p>
    @else
        <p>else</p>
    @endif

    @foreach ($datas as $data)
        <p>{{ $data }}</p>
    @endforeach


    forelse
    @forelse ($datas as $data)
        <p>{{ $data }}</p>
    @empty
        <p>Kosong</p>
    @endforelse

    judul : @yield("judul")

    @include('footer')
</body>
</html>