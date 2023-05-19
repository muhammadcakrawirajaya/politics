<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>SURVEY CAPRES</h1>
    <div>
        @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>

        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}">Tambah Responden</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Surveyor</th>
                <th>Nama Responden</th>
                <th>No Urut Pilihan</th>
                <th>Alasan Memilih</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.destroy',['product'=>$product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
