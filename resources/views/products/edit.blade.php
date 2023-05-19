<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Responden</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method('put')
        <div>
            <label >Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}"/>
        </div>
        <br>
        <div>
            <label >Qty</label>
            <input type="text" name="qty" placeholder="Qty"value="{{$product->qty}}"/>
        </div>
        <br>
        <div>
            <label >Price</label>
            <input type="text" name="price" placeholder="Price"value="{{$product->price}}"/>
        </div>
        <br>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="Description"value="{{$product->description}}"/>
        </div>
        <br>
        <div>
            <input type="submit" value="Simpan Perubahan" />
        </div>
    </form>
</body>
</html>
