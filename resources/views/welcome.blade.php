<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title>Rango</title>
</head>
<body>
    <header>
        <h1> Rango 🤖</h1>
    </header>
    <main>
        <h2>Gerador de receitas </h2>
        <p>
            Bem-vindo(a) ao nosso site, onde você pode encontrar receitas incríveis usando
            apenas os ingredientes que você já tem na sua geladeira.
            Com a ajuda da nossa avançada tecnologia de Inteligência Artificial,
            estamos aqui para tornar suas refeições verdadeiras obras de arte culinárias!
        </p>
        <article>
            <label>
                Ingredientes: 
            </label>
            <form method="post" action="{{route('ingredientsAction')}}">
                @csrf
                <input type="text" name="ingredients"/>
                <input type="submit" value="Gere as receitas" value="{{$ingredients ?? ''}}"/>
            </form>
        </article>
        @if(!empty($receita))
            {{!! preg_replace('/\r\n|n/', '<br>', $receita) !!}}
        @endif
    </main>
    <footer>
        Anna Carolina Braga - 2023
    </footer>
    
</body>
</html>
