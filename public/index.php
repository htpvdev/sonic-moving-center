<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ソニック引越しセンター</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="/">ソニック引越しセンター (Demoサイト)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">ホーム</a></li>
                        <li class="nav-item"><a class="nav-link" href="#plans">選べるプラン</a></li>
                        <li class="nav-item"><a class="nav-link" href="#clientVoice">お客様の声</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">お問い合わせ</a></li>
                        <li class="nav-item"><a class="nav-link link-primary" href="https://github.com/htpvdev/sonic-moving-center" target="_blank" rel="noopener noreferrer">ソースコード</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Modal -->
        <?php
            if ($_SERVER['REQUEST_URI'] === '/') {
                echo '
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">このサイトについて</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>これはギャグサイトで、実際に存在するものではありません。PHPアプリのデモンストレーション用に作成されたものです。</p>
                                <strong>個人情報は絶対に入力しないでください。HTTPS通信を使用していないため、通信内容は暗号化されていません。</strong>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">分かった！</button>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        ?>

        <!-- Header-->
        <header class="bg-dark py-5" id="home">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">「最速」の引越しを、<br>あなたに。</h1>
                            <p class="lead text-white-50 mb-4">ソニック引越しセンターは速さに特化した引越しサービスです。スピードを極め抜いた当社の引越しは、他の追随を許しません。人々は、当社の引越しトラックの影すらも視界に捉えることができないでしょう。</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#plans">さあ、引っ越そう。</a>
                                <!-- <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-speedometer2"></i></div>
                        <h2 class="h4 fw-bolder">業界最速</h2>
                        <p>毎年政府が発表する「最も速い引越し業者TOP10」に258回連続でランクイン。うち174回は、栄誉ある「ゴールデン引越しグローブ賞」を獲得しています。</p>
                        <a class="text-decoration-none" href="#!">
                            詳しくはこちら
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-truck"></i></div>
                        <h2 class="h4 fw-bolder">速さへのこだわり</h2>
                        <p>速ければ嬉しい、速ければ素晴らしい、速ければ何をしてもいい。これが当社の社訓です。当社はどれだけサービスの質が低くなろうとも、速さへの追求をやめません。</p>
                        <a class="text-decoration-none" href="#!">
                            詳しくはこちら
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">速すぎる！！</h2>
                        <p>お客様から、「当社の引越しが速すぎて困っている」といったお褒めの言葉をいただいております。お客様すら置き去りにする引越し会社、それがソニック引越しセンターです。</p>
                        <a class="text-decoration-none" href="#!">
                            詳しくはこちら
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing section-->
        <section class="bg-light py-5 border-bottom" id="plans">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">選べる爆速プラン</h2>
                    <p class="lead mb-0">〜全てを追い抜く「迅速(ハヤ)さ」を手に入れろ〜</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">夜逃げプラン</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">4万円〜</span>
                                    <span class="text-muted">/ 回</span>
                                </div>
                                <p>・夜逃げのように素早く、乱雑に引っ越します。</p>
                                <p>・コストを抑えることができますが、重要なもの以外は置いていく羽目になるでしょう。</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        最高速度 - <strong>時速120km</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>ご成約直後に引越しを開始します。</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        積載最大重量 - 2000kg
                                    </li>
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        段ボール等の荷物の梱包は行いません。
                                    </li>
                                    <li class="mb-2 text-muted">
                                        <i class="bi bi-x"></i>
                                        男たちが急いで荷物を積み込むため、荷物の扱いは非常に雑です。
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="./reservation.php?plan=yonige">このプランで引っ越す！</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card pro-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    ジェット機プラン
                                </div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">8億円〜</span>
                                    <span class="text-muted">/ 回</span>
                                </div>
                                <p>・自家用ジェットで快適に、音より速いお引越し。</p>
                                <p>・ソニック引越しセンターの名物です。</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        最高速度 - <strong>時速3,000km</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>圧倒的な速度でお荷物をお届けできます！</strong>
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        マッハ3の速度で航行するため、割れ物のお荷物は全て割れます。
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="./reservation.php?plan=plane">このプランで引っ越す！</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card enterprise-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">スペースシャトルプラン</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">5兆円〜</span>
                                    <span class="text-muted">/ 回</span>
                                </div>
                                <p>・地球の裏側も、周回軌道上からひとっ飛び。月面や火星までもお荷物をお届けします。</p>
                                <p>・宇宙規模でお急ぎの方は必見です!</p>
                                <p>・当社最高の速度と、最悪のコストパフォーマンスを兼ね備えています。</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        最高速度 - <strong>時速28,000km</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>最も速い引越し方法です！</strong>
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-check text-primary"></i>
                                        大気圏外のご住所にもお荷物をお届けします！
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        宇宙旅行はリスクがつきものです。お引越し(打ち上げ)の成功確率は約50%になります。
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        ロケット発車台はアメリカにあります。国内のお引っ越しをされるお客様も、一度アメリカまでお荷物を送ってください。
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="./reservation.php?plan=shuttle">このプランで引っ越す！</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials section-->
        <section class="py-5 border-bottom" id="clientVoice">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">お客様の声</h2>
                    <p class="lead mb-0">私たちは、お客様のご感想を力に変えています。</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <h5>助かりました！</h5>
                                        <p class="mb-1">ソニック引越しセンターの夜逃げプランは本当に素晴らしいです！ 引越しのスピードに重点を置いているため、引越しを急がなければならない人にとっては理想的な選択肢です。</p>
                                        <p class="mb-1">スタッフの方々が必死の形相で動いていて、荷物の積み降ろしはスムーズに進みました。</p>
                                        <p class="mb-1">荷物を裸で投げ入れるなどサービスの質は悪いですが、料金は本当にお得だと感じました。</p>
                                        <p class="mb-1">全体的に、ソニック引越しセンターの夜逃げプランは本当に素晴らしいサービスでした。</p>
                                        <div class="small text-muted">大阪在住 A様</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2-->
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <h5>「スペースシャトルプラン」は、本当に素晴らしいサービスだと思います！</h5>
                                        <p class="mb-1">これまでの引越しサービスとは全く違い、宇宙空間での引越しを経験できるのは興奮します。時速28,000kmというスピードは、まさに未来感覚ですね。</p>
                                        <p class="mb-1">リスクはあるとは言え、50%という確率はそれほど低くはないので、チャレンジしてみたい方にはピッタリのプランだと思います。</p>
                                        <p class="mb-1">もちろんコストは国家予算並でしたが、こんなに速い速度が出るなら納得できると思います。</p>
                                        <p class="mb-1">今後も引越しをする際には、ぜひスペースシャトルプランを利用したいと思います。</p>
                                        <div class="small text-muted">木星在住 B様</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 3-->
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <h5>お金持ちしか使えないね！</h5>
                                        <p class="mb-1">自家用ジェットでの引越しというのは、本当に驚くべき経験でした。最高速度が時速3,000kmというのは本当に驚異的で、強烈なGでクビが取れるかと思いました。</p>
                                        <p class="mb-1">ただ、ジェット機プランでは割れ物が全て割れてしまうというのは事実です。私の大切な10億円の壺がバラバラになってしまいました。</p>
                                        <p class="mb-1">それでも、ジェット機プランの特別な魅力は、スピードとエキサイティングな引越し体験にあります。</p>
                                        <p class="mb-1">料金は高額な部類に入ります(私にとっては大したことないです)が、特別な引越し体験をすることができると考えると、それだけの価値があると感じました。</p>
                                        <div class="small text-muted">インドネシア在住 C様</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section-->
        <section class="bg-light py-5" id="contact">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">ご要望をお聞かせください。</h2>
                    <p class="lead mb-0">あなたのご意見が、1km/hの速度向上につながります。</p>
                </div>

                <div class="row gx-5 justify-content-center">
                    <div class="alert alert-danger alert-dismissible fade show col-lg-6" role="alert">
                        ※このサイトは架空のものなので、個人情報は絶対に入力しないでください。
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
                    </div>
                </div>

                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">お名前</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">お名前の入力は必須です。</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">メールアドレス</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">メールアドレスの入力は必須です。</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">正しいメールアドレスの形式で入力してください。</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">お電話番号</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">電話番号の入力は必須です。</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">お問い合わせ内容</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">メッセージの入力は必須です。</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">送信が完了しました！</div>
                                    ちなみにこのデザインは、以下のサイトからダウンロードしました。
                                    <br />
                                    <a href="https://startbootstrap.com/template/business-frontpage">https://startbootstrap.com/template/business-frontpage</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">メッセージの送信に失敗しました。もう一度リトライしてください。</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">送信</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Button trigger modal -->
        <button style="display: none" id="bootModal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white"> &copy; 2023 - Sonic Movement, Inc. All Rights Reserved.</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            document.getElementById("bootModal").click();
        </script>
    </body>
</html>
