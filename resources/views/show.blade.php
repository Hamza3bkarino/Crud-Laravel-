<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($product as $product)
        <h1>Informations sur le produit : {{$product->RefPdt}}</h1>
        <div>
        <img src="{{ asset('storage/' . $product->image) }}" alt="">
            <div>
                <p>Reference produit : {{$product->RefPdt}}</p>
                <p>Libelle produit : {{$product->LibPdt}}</p>
                <p>Prix produit : {{$product->Prix}}</p>
                <p>Quantite produit : {{$product->Qte}}</p>
                <p>Description produit : {{$product->description}}</p>
                <p>Type produit : {{$product->type}}</p>
            </div>
        </div>
    @endforeach
</body>
</html>