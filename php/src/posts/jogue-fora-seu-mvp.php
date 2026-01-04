<?php
$slug = "jogue-fora-seu-mvp";
$title = "Jogue Fora Seu MVP";
$subtitle = `"Se você não se envergonha da primeira versão do seu produto, lançou tarde demais." — Reid Hoffman`;
$tags = ["work"];
$publishedAt = "2026-01-04";
$language = "pt-BR";
$draft = false;

include_once "../constants/posts.php";
include_once "../utils/utils.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Beto Figueiredo" />
    <meta name="description" content="<?php echo $subtitle; ?>">

    <meta property="og:url" content="https://betofigueiredo.com/blog/<?php echo $slug; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title; ?> | Beto Figueiredo">
    <meta property="og:description" content="<?php echo $subtitle; ?>">
    <meta property="og:image" content="/assets/images/<?php echo $slug; ?>-cover.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="betofigueiredo.com">
    <meta property="twitter:url" content="https://betofigueiredo.com/blog/<?php echo $slug; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?> | Beto Figueiredo">
    <meta name="twitter:description" content="<?php echo $subtitle; ?>">
    <meta name="twitter:image" content="/assets/images/<?php echo $slug; ?>-cover.jpg">

    <title><?php echo $title; ?> | Beto Figueiredo</title>
    <?php include_once "../includes/assets.php"; ?>
  </head>

  <body>
    <div class="container px-5 mx-auto text-left">
      <?php include_once "../includes/menu.php"; ?>

      <p class="mt-24 text-center text-sm text-gray-700 tracking-wider">
        <?php echo formatDate($publishedAt); ?>
      </p>
      <h1 class="md:text-8xl md:leading-[1.1] text-5xl mt-8 mb-14 text-[#212830] font-display text-center">
        <?php echo $title; ?>
      </h1>
      <div class="my-12 text-center">
        <em class="relative text-xl leading-7 text-[#212830] font-serif">
          "Se você não se envergonha da primeira versão do seu produto, lançou tarde demais." — Reid Hoffman
          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>
        </em>
      </div>
      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        <i class="text-center w-full text-base">🇺🇸 <a href="/blog/throw-away-your-mvp" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">Versão em inglês</a></i>
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Toda startup passa por aquele momento emocionante: o MVP está no ar, os primeiros clientes chegam, a validação finalmente acontece. A ideia funciona. O produto resolve um problema real. É tentador acelerar nesse momento, adicionar features, conquistar mais clientes e crescer rapidamente. Mas é aqui que mora o perigo.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        O erro é simples: startups validam a ideia, conquistam clientes e começam a adicionar features novas em cima dessa fundação precária. Após um ou dois anos, o resultado é previsível: um software cheio de problemas técnicos, bugs recorrentes e uma base de código onde qualquer mudança quebra três coisas diferentes.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        Por que criar um MVP?
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        No início do projeto, sua ideia não foi validada. Na sua cabeça, faz todo sentido, mas até clientes reais usarem e pagarem pelo produto é só uma hipótese.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        O conceito de MVP existe para testar isso com o mínimo de investimento. Nesse momento não faz sentido perder tempo com arquitetura escalável, otimização de performance ou padrões de design. O objetivo é criar a versão mais simples que funcione.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Não há problema algum em fazer atalhos técnicos. A qualidade técnica é deliberadamente sacrificada em nome da velocidade de validação. E isso é correto — desde que você entenda que essa estrutura tem prazo de validade.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        O erro: construir sobre fundações frágeis
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        O problema começa quando você valida a ideia e já sai adicionando features em cima daquele MVP. Os clientes pedem melhorias, a concorrência chega e há pressão para crescer. Cada feature nova parece fazer sentido.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Mas não dá para construir software de qualidade em cima de uma estrutura feita nas coxas. Você não ergue um prédio de 20 andares sobre fundação de casa térrea. Em algum momento desaba — bugs constantes, sistema lento, impossibilidade de implementar coisas novas ou, pior, incidentes que afetam todos os clientes.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        Jogue fora seu MVP
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        A solução é contraintuitiva, mas necessária: defina o ciclo de vida e o critério de morte do seu MVP desde o início. Estabeleça métricas claras de validação — por exemplo: seis meses para adquirir cem clientes pagantes ou atingir R$ 50 mil em receita recorrente mensal.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Quando esse prazo chegar (ou essas métricas forem atingidas), pare tudo. Revise. Validou? Bateu as métricas? Clientes satisfeitos e pagando? Se sim, você tem um produto viável. Agora é hora de reconstruí-lo da maneira correta.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Reescreva com arquitetura adequada, testes automatizados, código limpo e pensando em escalabilidade. Reescrever um software com seis meses de vida é relativamente simples — a equipe lembra das decisões, o escopo é limitado, dá para gerenciar os clientes durante a transição.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Se você continuar empilhando features no MVP original, em dois ou três anos terá um sistema enorme e complexo. Refatorar ou reescrever levará meses, com bugs aparecendo a cada mudança e clientes sendo impactados o tempo todo.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        Quanto antes, melhor
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Quanto antes corrigir as fundações, menor o custo e o risco. Mate seu MVP assim que ele cumprir sua missão. Celebre o que aprendeu, agradeça pelos primeiros clientes e substitua por algo feito para durar.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Startups de sucesso não são as que nunca erram tecnicamente — são as que reconhecem os erros a tempo de corrigir antes que virem um problema irreversível. Seu MVP foi feito para morrer. Deixe isso acontecer.
      </p>

      <?php foreach ($tags as $tag) {
        echo "#" . $tag;
      } ?>

      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <div class="flex justify-between space-x-4 text-sm uppercase font-sans font-medium tracking-widest">
        <div>
          <?php getPreviousPost($slug, $postsList); ?>
        </div>
        <div>
          <?php getNextPost($slug, $postsList); ?>
        </div>
      </div>

      <?php include_once "../includes/footer.php"; ?>
    </div>
  </body>
</html>
