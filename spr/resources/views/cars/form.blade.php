<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('car.store')}}" method="post">
        @csrf
        <label for="Marka">
            Marka: <input type="text" name="Marka">
        </label><br><br>
        <label for="Model">
            Model: <input type="text" name="Model">
        </label><br><br>
        <label for="Cena">
            Cena: <input type="number" name="Cena">
        </label><br><br>
        <button type="submit">Dodaj</button>
    </form>
</body>
</html>
