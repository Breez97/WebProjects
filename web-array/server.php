<?php include 'array.php'?>

<?php
    //Вывод данных, полученных в форме
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
    $categoryProduct = $_GET["categoryProduct"];
    $subCategoryProduct = $_GET["subCategoryProduct"];
    $nameProduct = $_GET["nameProduct"];
    $priceProduct = $_GET["priceProduct"];
    $imageProduct = $_GET['imageProduct'];
    $descriptionProduct = $_GET["descriptionProduct"];
    $filePath = "images/" . $imageProduct;
    var_dump($filePath);
    //var_dump($categoryProduct);
    //var_dump($subCategoryProduct);
    //var_dump($nameProduct);
    //var_dump($priceProduct);
    //var_dump($descriptionProduct);

    //Добавление объекта в копию массива 
    echo "<pre>";
    var_dump($products);
    echo "</pre>";
    $products[$categoryProduct][$subCategoryProduct][$nameProduct] = 
    [
        "Price" => $priceProduct,
        "Image" => $filePath,
        "Description" => $descriptionProduct,
    ];
    echo "<pre>";
    var_dump($products);
    echo "</pre>";
    
    //Добавление нового объекта в файл JSON
    echo json_encode($_GET, JSON_UNESCAPED_UNICODE, JSON_UNESCAPED_SLASHES);

    $mas = 
    [
        $categoryProduct => 
        [
            $subCategoryProduct => 
            [
                $nameProduct => 
                [
                    "Price" => $priceProduct,
                    "Image" => $filePath,
                    "Description" => $descriptionProduct,
                ]
            ]
        ]
    ];

    $jsonData = json_encode($mas, JSON_UNESCAPED_UNICODE, JSON_UNESCAPED_SLASHES);
    file_put_contents('./jsonData.json', $jsonData);
?>
