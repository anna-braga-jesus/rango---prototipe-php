<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title>Rango</title>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            const profileImages = document.querySelectorAll(".profile-image-option");

            function selectProfileImage(selectedImage) {
                profileImages.forEach(function(image) {
                    if (image !== selectedImage) {
                        image.style.display = "none";
                    }
                });

                selectedImage.classList.add("selected");
            }

            profileImages.forEach(function(image) {
                image.addEventListener("click", function() {
                    selectProfileImage(image);
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <h1> Rango 🤖</h1>
        <nav>
            <a href="/"> Voltar </a>
        </nav>
    </header>
    <main>
        <p>
            <h3>😁 Escolha uma imagem para o seu perfil:</h3>
        </p>
        <div class="profile-images-container">
            <img 
            class="profile-image-option" 
            src="https://img.freepik.com/vetores-premium/vetor-de-design-de-modelo-de-logotipo-de-comida-de-ginasio-emblema-conceito-de-design-simbolo-criativo-icone_316488-1764.jpg?w=2000" 
            alt="Imagem 1">
            
            <img 
            class="profile-image-option" 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTR1VadFTj1J9QDi5Og26Eg8m5WfIEZ1x52sQ&usqp=CAU"
             alt="Imagem 2">

            <img 
            class="profile-image-option" 
            src="https://img.freepik.com/vetores-premium/ilustracao-do-vetor-de-comida-japonesa-simbolo-de-sushi_463676-272.jpg?w=2000" 
            alt="Imagem 3">

            <img 
            class="profile-image-option" 
            src="https://static.vecteezy.com/ti/vetor-gratis/p1/6065313-coreano-tradicional-comida-bibimbap-ou-ou-bi-bim-bop-korea-concept-clip-art-for-restaurants-menus-or-recipes-hand-drawn-or-doodle-sign-symbol-icon-ou-logo-isolated-cartoon-vector-ilustracao-vetor.jpg" 
            alt="Imagem 4">

        </div>

    </main>
    <footer>
        Anna Carolina Braga - 2023
    </footer>
</body>
</html>
