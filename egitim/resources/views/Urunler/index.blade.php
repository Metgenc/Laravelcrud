<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Urunler</h1>
    <div>
        @if(session()->has('success'))
          <div>
            {{session('success')}}
           </div>
        @endif
    </div>
    <div>
        <div>

            <a href="{{route('urun.create')}}">Urun Olustur</a>
        </div>
        <table border="1">
            <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($urunler as $urun)

            <tr> 
                <td>{{$urun->id}}</td>
                <td>{{$urun->name}}</td>
                <td>{{$urun->qty}}</td>
                <td>{{$urun->price}}</td>
                <td>{{$urun->description}}</td>
                <td>
                    <a href="{{route('urun.edit', ['urun' => $urun])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('urun.delete', ['urun' => $urun])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach


        </table>
    </div>
    
</body>
</html>