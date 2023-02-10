<?php
include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>BOOLSHOP</h1>
                    <h3>I nostri prodotti</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row m-4">
                <?php
                    foreach ($array_products as $key => $value) {
                ?>
                <div class="col-3">
                    <div class="card h-75">
                        <img src=" <?php echo $value->image ?>" class="card-img-top h-50" alt="image not found">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php
                                echo $value->name;
                                ?>
                            </h5>
                            <p class="card-text">

                            <p>
                                <i class="fa-solid fa-paw"></i>
                                <?php
                                echo $value->category;
                                ?>
                            </p>
                            <p>
                                <?php
                               echo $value->price.' €' ;
                                ?>
                            </p>
                            <?php if ($value->getType() == 'Food') { ?>
                            <p>
                                Peso: <?php echo $value->weight; ?>
                            </p>
                            <p>
                                Ingredienti: <?php echo $value->ingredients; ?>.
                            </p>
                            <?php } ?>
                            <?php if ($value->getType() == 'Other') { ?>
                            <p>
                                Materiali: <?php echo $value->materials; ?>.
                            </p>
                            <p>
                                Dimensioni: <?php echo $value->size; ?>
                            </p>
                            <?php } ?>
                            <?php if ($value->getType() == 'Game') { ?>
                            <p>
                                Caratteristiche: <?php echo $value->feature; ?>
                            </p>
                            <p>
                                Dimensioni: <?php echo $value->size; ?>.
                            </p>
                            <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>
</body>

</html>