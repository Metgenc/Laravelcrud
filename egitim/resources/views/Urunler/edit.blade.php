<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ürün Editle</h1>
    <form method="post" action="{{route('urun.update', ['urun' => $urun])}}"> 

       
        @csrf
        @method('put')
        <div>   

            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div>
        <label>name</label>
        <input type="text" name="name" placeholder="Name" value="{{$urun->name}}"/> 
        </div>
        <div>
        <label>Qty</label>
        <input type="text" name="qty" placeholder="Qty" value="{{$urun->Qty}}"/> 
        </div>
        <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" value="{{$urun->Price}}"/> 
        </div>
        <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description" value="{{$urun->Description}}"/> 
        </div>
        <div>
            <input type="submit" value="Güncelle" />
        </div>




    </form>
    

    
</body>
</html>