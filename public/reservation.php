<?php

$planTextList = [
    'yonige' => [
        'name' => '夜逃げプラン',
        'text' => 'すぐに駆けつけ、あなたの夜逃げのようなお引越しをサポートします。',
    ],
    'plane' => [
        'name' => 'ジェット機プラン',
        'text' => '音速を越える準備を始めましょう。',
    ],
    'shuttle' => [
        'name' => 'スペースシャトルプラン',
        'text' => 'このご予約は小さな一歩ですが、<br>お引越しにとっては大きな一歩です。',
    ],
];

$plan = $_GET['plan'] ?? null;

// planが指定されていない場合はindex.phpにリダイレクト
if (!isset($planTextList[$plan])) {
    header('Location: ./index.php');
    exit;
}

?>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php#home">ホーム</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#plans">選べるプラン</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#clientVoice">お客様の声</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#contact">お問い合わせ</a></li>
                        <li class="nav-item"><a class="nav-link link-primary" href="https://github.com/htpvdev/sonic-moving-center" target="_blank" rel="noopener noreferrer">ソースコード</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-5" id="home">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">「<?= $planTextList[$plan]['name']??'夜逃げプラン' ?>」をお選びいただきありがとうございます。</h1>
                            <p class="lead text-white-50 mb-4">あとは依頼をするだけです。<?= $planTextList[$plan]['text']??'すぐに駆けつけ、あなたの夜逃げのようなお引越しをサポートします。'?></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-light py-5" id="contact">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">お引越しに必要な情報をご入力ください。</h2>
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
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./reservation_confirm.php" name="form1" method="POST">
                            <input type="hidden" name="plan" value="<?= $plan ?>">
                            <!-- Name input-->
                            <div class="row g3">
                                <div class="form-floating mb-3 col-6">
                                    <input class="form-control" name="firstName" id="firstName" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="firstName">名字</label>
                                    <div class="invalid-feedback" data-sb-feedback="firstName:required">名字の入力は必須です。</div>
                                </div>
                                <div class="form-floating mb-3 col-6">
                                    <input class="form-control" name="lastName" id="lastName" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="lastName">名前</label>
                                    <div class="invalid-feedback" data-sb-feedback="lastName:required">名前の入力は必須です。</div>
                                </div>

                                <div class="form-floating mb-3 col-6">
                                    <input class="form-control" name="kanaFirstName" id="kanaFirstName" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="kanaFirstName">名字(カナ)</label>
                                    <div class="invalid-feedback" data-sb-feedback="kanaFirstName:required">名字(カナ)の入力は必須です。</div>
                                </div>
                                <div class="form-floating mb-3 col-6">
                                    <input class="form-control" name="kanaLastName" id="kanaLastName" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="kanaLastName">名前(カナ)</label>
                                    <div class="invalid-feedback" data-sb-feedback="kanaLastName:required">名前(カナ)の入力は必須です。</div>
                                </div>
                            </div>

                            <!-- Address address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="address" id="address" type="text" placeholder="name@example.com" data-sb-validations="required" />
                                <label for="address">ご住所</label>
                                <div class="invalid-feedback" data-sb-feedback="address:required">ご住所の入力は必須です。</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">メールアドレス</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">メールアドレスの入力は必須です。</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">正しいメールアドレスの形式で入力してください。</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">お電話番号</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">電話番号の入力は必須です。</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                <label for="message">お引越しの際のご要望</label>
                            </div>

                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage"></div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">メッセージの送信に失敗しました。もう一度リトライしてください。</div></div>

                            <!-- Submit Button-->
                            <div class="row">
                                <div class="d-grid col-6"><button class="btn btn-danger btn-lg" type="button" onclick="history.back()">戻る</button></div>
                                <div class="d-grid col-6"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit" onclick="realSubmit();">送信</button></div>
                            </div>

                            <div style="display: none;"><button type="submit" id="realSubmitBtn">submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white"> &copy; 2023 - Sonic Moving Center. All Rights Reserved.</p></div>
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
            function realSubmit() {
                document.getElementById('realSubmitBtn').click();
            }
        </script>
    </body>
</html>
