<?php


include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Toy.php';

$catsCategory = new Category ('Cats', 'Products for cats', 'https://png.pngtree.com/png-clipart/20230511/ourmid/pngtree-isolated-cat-on-white-background-png-image_7094927.png');

$dogsCategory = new Category ('Dogs', 'Products for dogs', 'https://img.freepik.com/free-psd/cute-brown-white-dog-scene_23-2150179279.jpg');

$leash = new Product ('Leash', 'Youcan use for your pets', 'https://m.media-amazon.com/images/I/81S1t0ZtzVL.jpg', 9.99, $dogsCategory);

$littleBell = new Product('Little Brass Bell', 'A little brass bell specifically designed for beautiful cats', 'https://www.petsy.online/cdn/shop/products/Untitleddesign-2020-06-13T185635.426.png?v=1592054802', 8.99, $catsCategory, 'croquettes', 600);

    $chickenBits = new Food('Chicken bits', 'Chicken bits full of proteins', 'https://shop-cdn-m.mediazs.com/bilder/trixie/premio/chicken/filet/bites/1/800/62415_pla_trixie_premio_chicken_filet_bites_50g_1.jpg', 13.99, $catsCategory, 'croquettes', 600);

    $cowBone = new Food('Cow bone', 'A big heavy bits for big dogs', 'https://m.media-amazon.com/images/I/81qqv7HrSeL._AC_SL1500_.jpg',18.91, $dogsCategory, 'croquettes', 600);
    
    $frisbee = new Toy('Frisbee', 'A wonderful pink frisbee, water resistant','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjsOQR7G7HpgO-vY57gVvykDW22Jw1l6fDZw&usqp=CAU', 17.99, $dogsCategory, 'Plastic full of petrol');
    
    $veganClew = new Toy('Clew', 'A wonderful vegan clew for your smart cat', 'https://c7.alamy.com/comp/BAR0P5/red-small-cat-and-big-clew-of-wool-isolated-on-white-BAR0P5.jpg', 29.66, $catsCategory, 'Vegan wool');
    
    $chiuauaKennel = new Kennel('Chiuaua Kennel', 'A kennel for annoying dogs', 'https://www.tiendanimal.es/dw/image/v2/BDLQ_PRD/on/demandware.static/-/Sites-kiwoko-master-catalog/default/dw3b95d464/images/large/8d9cf403baaa43278961f35c6167f805.jpg?sw=780&sh=780&q=85',19.99, $dogsCategory, 'small');
    
    $shepherdKennel = new Kennel('Shepherd Kennel', 'A kennel for watching dogs', 'https://i.etsystatic.com/7583922/r/il/7ef73f/1059263558/il_794xN.1059263558_qhur.jpg',56.99, $dogsCategory, 'huge');


$products = [
$leash, $littleBell, $chickenBits, $cowBone, $frisbee, $veganClew, $chiuauaKennel, $shepherdKennel
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    E-commerce
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3 mb-5 ">
                    <div class="card h-100">
                        <img src="<?php echo $product->image; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->description; ?>
                            </h5>
                            <h6 class="card-subtitle">
                                <?php echo $product->category->name; ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $product->description; ?>
                            </p>

                            <?php if ($product->getAdditionalInfo()){ ?>
                                <p>
                                    Additional info:
                                    <br>

                                    <?php echo $product->getAdditionalInfo(); ?>
                                </p>
                            <?php } ?>
                            <a href="#" class="btn btn-primary">
                                Acquista per soli <?php echo $product->price; ?>&euro;
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>




    
</body>
</html>