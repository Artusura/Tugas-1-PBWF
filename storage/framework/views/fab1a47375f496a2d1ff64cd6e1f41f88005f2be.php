<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Show plo</h1>
    <?php for($i = 0; $i < count($produk); $i++): ?>
        <p><?php echo e('No : '. ($i+1) . ' Nama Kelas A :' . $produk[$i]); ?></p>
    <?php endfor; ?> 
</body>
</html>
<?php /**PATH /Users/highsierra/Documents/tugas/view-app/resources/views/produk/show.blade.php ENDPATH**/ ?>