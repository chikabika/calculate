<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Calculator</h1>
    <form action="/calculator/calculate" method="post" class="mt-3">
        @csrf
        <div class="form-group">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" id="num1" class="form-control">
        </div>
        <div class="form-group">
            <label for="operator">Operation:</label>
            <select name="operator" id="operator" class="form-control">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
        </div>
        <div class="form-group">
            <label for="num2">Number 2:</label>
            <input type="number" name="num2" id="num2" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
    @isset($result)
        <h2 class="mt-3">Result: {{ $result }}</h2>
    @endisset
    @isset($errors)
        @foreach ($errors as $error)
            <p class="text-danger">{{ $error }}</p>
        @endforeach
    @endisset
</div>
<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
