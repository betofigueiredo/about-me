<?php
$slug = "o-sentido-da-vida";
$title = "O Sentido da Vida";
$subtitle = `"Aquele que tem um porquê para viver pode suportar quase qualquer como." — Friedrich Nietzsche`;
$tags = ["life"];
$publishedAt = "2025-07-12";
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
          "Aquele que tem um porquê para viver pode suportar quase qualquer como." — Friedrich Nietzsche
          <div class="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10"></div>
        </em>
      </div>
      <div class="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]"></div>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        <i class="text-center w-full text-base">🇺🇸 <a href="/blog/the-meaning-of-life" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">Versão em inglês</a></i>
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Há algumas semanas, assisti um documentário sobre saúde mental nos esportes radicais (<a href="https://www.youtube.com/watch?v=zBCxypVJIN8&ab_channel=DirtyHabits" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">aqui</a>). A história seguia um kite surfer americano bem-sucedido — patrocínios, viagens, a tal "vida dos sonhos" que alimenta os feeds do Instagram. Mas então, um dia, os ataques de pânico e a depressão chegaram. O documentário é interessante, mas toca apenas a superfície de algo muito mais profundo.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        A Ilusão do Prazer
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Logo aos seis minutos, o atleta lamenta como seu esporte favorito se transformou em trabalho: "Agora você tem que performar, não pode simplesmente curtir. Mas a vida deveria ser sobre isso, apenas aproveitar o processo."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Aqui mora o problema. A vida não se resume a isso.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Como G.K. Chesterton observou sabiamente: uma sociedade que só se diverte não se divertirá por muito tempo. É uma verdade que corta fundo. Quando vivemos apenas para o prazer, construímos castelos de areia. As conquistas verdadeiras exigem sacrifício — e é precisamente no sacrifício que encontramos significado.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Todos conhecemos a sensação boa de começar algo novo. É excitante, divertido. Mas com o tempo, as coisas começam a ficar difíceis. Se você realmente quer construir algo verdadeiro, precisa persistir quando a diversão acaba.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        Pressão
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Em outro trecho do documentário, o atleta menciona a pressão dos patrocinadores. Isso me lembrou de uma história que Shaquille O'Neal contou sobre seu pai. Após uma derrota contra os Knicks, Shaq recebeu uma ligação: "Apareça na minha casa às 5h da manhã."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        O pai o levou para um passeio de carro até pararem perto de um viaduto, onde uma família de moradores de rua vivia em uma barraca improvisada.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        "O que aconteceu no jogo ontem?", perguntou o pai.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        "Senti a pressão", respondeu Shaq.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Nesse momento, o pai aponta para a família: "Isso é pressão. Perder um jogo onde, mesmo após a derrota, você receberá seu salário milionário, não é pressão. Não saber se você conseguirá alimentar seus filhos — isso é pressão."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Pressão real não vem de expectativas sobre nós mesmos, mas de responsabilidades para com os outros.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        Propósito Além de Si Mesmo
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Tudo isso me fez pensar em dois outros atletas: o surfista Adriano de Souza e o lutador de jiu-jitsu Gutemberg Pereira. Em uma conversa recente, quando perguntado sobre seus sonhos e objetivos, Gutemberg respondeu que seu maior sonho já havia sido realizado. Surpreendentemente, não era um título mundial ou reconhecimento profissional, mas algo muito mais profundo: "Comprei uma casa para minha mãe."
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Adriano expressou algo semelhante. Após vencer uma etapa do tour mundial, quando questionado sobre o que faria com o prêmio, mencionou ter realizado seu sonho de dar uma casa à sua mãe.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Por que esses homens não sucumbem à depressão? Por que permanecem firmes enquanto outros, com muito mais recursos e liberdade, desmoronam?
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        A diferença é que eles assumiram responsabilidades que transcendem seus próprios interesses. Todos nós necessitamos desse tipo de propósito. O problema fundamental da busca pela mera felicidade é sua fragilidade — quando as tempestades da vida aparecem, a felicidade vai embora. Precisamos de algo mais profundo. São as responsabilidades que assumimos perante os outros que nos fornecem a força para superar adversidades.
      </p>
      <h2 class="text-4xl mt-16 mb-8 text-[#212830] font-display">
        A Força do Sacrifício
      </h2>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        O kite surfer do documentário estava perdido porque tinha apenas a si mesmo como referência. Sem um "por que" que justificasse o esforço, cada dificuldade se tornava insuportável. Quando você vive apenas para si, cada obstáculo é uma afronta pessoal.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Acredito profundamente no conceito de dever. Vivemos em uma sociedade obcecada por direitos, mas que frequentemente negligencia seus deveres. Discutimos extensivamente sobre o que gostamos ou queremos fazer, mas raramente sobre o que devemos fazer.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Mas como identificar nossos deveres verdadeiros? Refletindo sobre essa questão, percebi que a pergunta estava mal formulada desde o início. O ponto crucial não é "por que" fazemos algo, mas "por quem" o fazemos.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Nietzsche estava certo, mas eu acrescentaria: o porquê mais poderoso não é um conceito abstrato, é uma pessoa concreta. É a mãe que precisa da casa, o filho que precisa do pai, a esposa que precisa do marido. Quando temos por quem lutar, cada obstáculo se torna um teste de caráter. O sacrifício deixa de ser sofrimento para se tornar propósito.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        O sentido da vida não está em ser feliz. Está em ser útil a alguém que importa mais que você mesmo.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Isso é ilustrado perfeitamente em um episódio de Os Simpsons. Homer trabalhava na usina nuclear e odiava profundamente seu emprego. Quando finalmente conseguiu economizar dinheiro suficiente, decidiu realizar seu sonho de deixar a usina e trabalhar em um boliche, onde se sentia verdadeiramente feliz.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        No entanto, a felicidade durou pouco. Marge descobriu que estava grávida novamente, o que significava que a família precisaria de mais dinheiro e estabilidade financeira. Relutantemente, Homer foi obrigado a deixar o emprego dos sonhos no boliche e retornar para a detestada usina nuclear para sustentar a família em crescimento.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Ao final do episódio, Homer está feliz com sua família, e seus filhos perguntam: se ele está tão feliz com a nova filha, por que não tem nenhuma foto dela? O final precisa ser assistido para ser compreendido completamente.
      </p>
      <p class="text-lg mb-7 leading-8 text-[#212830] font-serif">
        Aqui tem uma versão resumida de 3 minutos. Assista, vale a pena: <a href="https://www.youtube.com/watch?v=x2mS3uDqQL4&ab_channel=ThingsICantFindOtherwise" target="_blank" rel="noopener" class="hover:text-[#b8b836] underline text-[#959544] transition-all">https://www.youtube.com/watch?v=x2mS3uDqQL4&ab_channel=ThingsICantFindOtherwise</a>
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
