<head><script defer src="assets/js/main.js"></script><link href="assets/css/style.css" rel="stylesheet"></head><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // フォームデータ取得
  $name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '';
  $furigana = isset($_POST['furigana']) ? htmlspecialchars($_POST['furigana'], ENT_QUOTES, 'UTF-8') : '';
  $company = isset($_POST['company']) ? htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8') : '';
  $phoneNumber = isset($_POST['phoneNumber']) ? htmlspecialchars($_POST['phoneNumber'], ENT_QUOTES, 'UTF-8') : '';
  $email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : '';
  $body = isset($_POST['body']) ? nl2br(htmlspecialchars($_POST['body'], ENT_QUOTES, 'UTF-8')) : '';
  $meeting_hope = isset($_POST['meeting-hope']) ? $_POST['meeting-hope'] : '未選択';

    // 希望日時の取得
  function get_schedule($num) {
      $month = isset($_POST["schedule-month-$num"]) ? $_POST["schedule-month-$num"] : '';
      $date = isset($_POST["schedule-date-$num"]) ? $_POST["schedule-date-$num"] : '';
      $start_hour = isset($_POST["schedule-hour-$num"]) ? $_POST["schedule-hour-$num"] : '';
      $start_min = isset($_POST["schedule-minutes-$num"]) ? $_POST["schedule-minutes-$num"] : '';
      $end_hour = isset($_POST["schedule-hour-last-$num"]) ? $_POST["schedule-hour-last-$num"] : '';
      $end_min = isset($_POST["schedule-minutes-last-$num"]) ? $_POST["schedule-minutes-last-$num"] : '';

      if ($month && $date && $start_hour && $start_min && $end_hour && $end_min) {
          return "$month 月 $date 日 $start_hour:$start_min 〜 $end_hour:$end_min";
      }
      return "未指定";
    }

    $schedule_1 = get_schedule(1);
    $schedule_2 = get_schedule(2);
    $schedule_3 = get_schedule(3);

    // 送信先メールアドレス
    $to = "syu56981@gmail.com"; // ここに自分のメールアドレスを設定

    // メールの件名
    $subject = "【お問い合わせ】$name 様からのメッセージ";

    // メール本文
    $message = "
    お名前: $name
    読み方: $furigana
    会社名: $company
    電話番号: $phoneNumber
    E-mail: $email
    ご質問・ご相談内容:
    $body

    オンラインミーティング希望: $meeting_hope

    第一希望: $schedule_1
    第二希望: $schedule_2
    第三希望: $schedule_3
    ";

    // メールヘッダー
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // メール送信
    if (mail($to, $subject, $message, $headers)) {
      header("Location: index.php");
      exit();
    } else {
        echo "メールの送信に失敗しました。";
    }
} else {
    echo "不正なアクセスです。";
}
?>
