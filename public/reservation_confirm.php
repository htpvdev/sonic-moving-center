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
                        <li class="nav-item"><a class="nav-link link-primary" href="https://github.com/htpvdev/sonic-moving-center" target="_blank" rel="noopener noreferrer">ソースコード(GitHub)</a></li>
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
                            <h1 class="display-5 fw-bolder text-white mb-2">最終確認です！</h1>
                            <p class="lead text-white-50 mb-4">以下の内容でお引越しの依頼を受け付けます。「確定」をクリックすると、ご依頼が完了します。</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-light py-5 col-lg-6 mx-auto mb-auto" id="contact">
          <table class="table table-hover h5">
            <tbody>
              <tr>
                <th scope="row">お引越しプラン</th>
                <td><?= $planTextList[$_POST['plan']]['name'] ?? 'エラー' ?></td>
              </tr>
              <tr>
                <th scope="row">お名前</th>
                <td><?=
                  $_POST['firstName'].$_POST['lastName'].' ('.$_POST['kanaFirstName'].$_POST['kanaLastName'].')'
                  ?? 'エラー' ?>
                </td>
              </tr>
              <tr>
                <th scope="row">ご住所</th>
                <td><?= $_POST['address'] ?? 'エラー' ?></td>
              </tr>
              <tr>
                <th scope="row">メールアドレス</th>
                <td><?= $_POST['email'] ?? 'エラー' ?></td>
              </tr>
              <tr>
                <th scope="row">お電話番号</th>
                <td><?= $_POST['phone'] ?? 'エラー' ?></td>
              </tr>
              <tr>
                <th scope="row">ご要望</th>
                <td><?= $_POST['message'] != '' ? $_POST['message'] : 'なし' ?></td>
              </tr>
            </tbody>
          </table>

          <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
              <form action="./reservation_complete.php" method="POST">
                <!-- Submit Button-->
                <div class="row">
                  <div class="d-grid col-6"><button class="btn btn-danger btn-lg" type="button" onclick="location.href='./reservation.php?plan=<?= $_POST['plan'] ?? '' ?>'">戻る</button></div>
                  <div class="d-grid col-6"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">確定</button></div>
                </div>
              </form>
            </div>
          </div>
        </section>

        <br><br>

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
    </body>
</html>
