<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Caminho para a imagem de entrada
$inputImagePath = '/opt/lampp/htdocs/img/amigo.jpeg';

// Dimensões desejadas para a imagem redimensionada
$targetWidth = 300;
$targetHeight = 200;

// Carrega a imagem de entrada
$inputImage = imagecreatefromjpeg($inputImagePath);

// Obtém as dimensões da imagem de entrada
$originalWidth = imagesx($inputImage);
$originalHeight = imagesy($inputImage);

// Cria uma nova imagem vazia para a imagem redimensionada
$outputImage = imagecreatetruecolor($targetWidth, $targetHeight);

// Redimensiona a imagem de entrada para a imagem redimensionada
imagecopyresampled(
    $outputImage,     // Imagem de destino (redimensionada)
    $inputImage,      // Imagem de origem (entrada)
    0, 0,             // Coordenadas x e y na imagem de destino
    0, 0,             // Coordenadas x e y na imagem de origem
    $targetWidth,     // Largura da imagem de destino
    $targetHeight,    // Altura da imagem de destino
    $originalWidth,   // Largura da imagem de origem
    $originalHeight   // Altura da imagem de origem
);

// Salva a imagem redimensionada em um arquivo
$outputImagePath = '/opt/lampp/htdocs/img/output.jpg';
imagejpeg($outputImage, $outputImagePath);

// Libera a memória usada pelas imagens
imagedestroy($inputImage);
imagedestroy($outputImage);

echo "Imagem redimensionada e salva com sucesso!";
?>
