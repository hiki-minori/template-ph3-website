<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/reset.css">
  <link rel="stylesheet" href="./styles/style.css" media="">
  <script defer src="/top/script.js"></script>
  <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
  <script defer src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-2-1/js/5-2-1.js"></script>
  <title>Document</title>
</head>
<body>
    <x-app-layout>
  <header>
    <div class="logoArea">
      <img src="/img/logo.svg" alt="posse">
    </div>
    <div class="openbtn2 button"  id="modalOpen"><span></span><span></span>
      <div id="easyModal">
          <ul class="logoList" id="logoList-js">
            <li><a href="">POSSEとは</a></li>
            <li><a href="">クイズ</a></li>
          </ul>
      </div>
    </div>
      <ul class="logoListPC" >
        <li><a href="">POSSEとは</a></li>
        <li><a href="">クイズ</a></li>
        <li><a href="https://twitter.com/posse_program"><img src="/img/icon/icon-twitter.svg" alt="twitter"></a></li>
        <li><a href="https://www.instagram.com/posse_programming/"><img src="/img/icon/icon-instagram.svg" alt="instagram"></a></li>
      </ul>
  </header>
  </x-app-layout>

  <main>
    <section class="heroSection">
      <div class="heroImg">
          <img src="/img/img-hero.jpg" alt="">
        <div class="heroInner">
          <h1 class="heroDescription">学生プログラミングコミュニティ POSSE（ポッセ）</h1>
          <span class="heroBest">自分史上最高<br>を仲間と。</span>
        </div>
        <div class="heroScroll">Scroll Down</div>
      </div>
    </section>
    <section class="aboutPosse">
      <h2 class="aboutPosseJpn">
        POSSEとは
        <span class="aboutPosseEng">About POSSE</span>
      </h2>
      <div class="aboutPosseContents">
        <div class="aboutImg">
          <img src="/img/img-about.jpg" alt="">
        </div>
        <div class="aboutPosseDescription">
        学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。
          <br>プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！
          <br>それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
        </div>
      </div>
    </section>
    
    <section class="lineSection">
      <div class="lineInner">
        <div class="lineContents">
          <div class="lineTitles">
            <div class="lineIcon">
              <img src="/img/icon/icon-line.svg" alt="lineicon">
            </div>
            <h2 class="posseOfficialLine">POSSE公式LINE</h2>
          </div>
            <div class="lineDescription">
              <br>公式LINEにてご質問を随時受け付けております。</br>
              <br>詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致します。</br>
              <br>下記ボタンより友達追加をお願いします！</br>
            </div>
            <div class="lineLink">
              <p>LINE追加</p>
              <i class="lineLinkIcon"><img src="/icon/icon-link-dark.svg" alt=""></i>
            </div>
        </div>
      </div>
    </section>
    <section>
      <div class="fixedBanner" >
        <div class="lineIcon2">
        <img src="/img/icon/icon-line.svg" alt="">
        </div>
        <div  class="bannerDescription">
          <p>POSSE公式LINEで<br>最新情報をGET!</p>
        </div>
      </div>
    </section>

    
    <footer id="footer" role="contentinfo">
      <div class="footerWrapper">
          <span class="footerImg">
            <img src="/img/logo.svg" alt="POSSEロゴ">
          </span>
          <div class="footerSite">
            <p>POSSE公式サイト</p>
          </div>
        <div class="iconWrapper">
          <div class="twitterIcon">
            <a href="https://twitter.com/posse_program"><img src="/img/icon/icon-twitter.svg" alt="twitter"></a>
          </div>
          <div class="instagramIcon">
            <a href="https://www.instagram.com/posse_programming/"><img src="/img/icon/icon-instagram.svg" alt="instagram"></a>
          </div>
        </div>
      
      <div class="footerBottom">
        ©︎2022 POSSE
      </div>
    </div>

    </footer>
  </main>
    
  
</body>
</html>
