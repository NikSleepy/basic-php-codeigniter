<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body class="container mt-4" >
    <h2>Edit product</h2>

    <form action="/product/update/<?= $product['id'] ?>" method="post">
    <div class="form-group" >
            <label for="name">Name product</label>
            <input name="name" type="text" class="form-control" value="<?= $product['name'] ?>" required/>
        </div>
        <div class="form-group" >
            <label for="price">price</label>
            <input name="price" type="text" class="form-control" value="<?= $product['price'] ?>" required/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/product" class="btn btn-secondary">back</a>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>