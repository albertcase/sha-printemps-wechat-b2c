
<?php
// require_once dirname(__FILE__).'/swiftmailer/lib/swift_required.php';
// require_once dirname(__FILE__).'/swiftmailer/SwiftMailer.php';
  class swiftmail{

    private $smtp = 'smtp.exmail.qq.com';
    private $port = '25';
    private $user = 'printemps@samesamechina.com';
    private $password = 'Same2016';
    private $from = array('printemps@samesamechina.com' => 'Printemps');
    private $to = array('dirk.wang@samesamechina.com'=>'DIRC');
    private $mailer;
    private $mails = array();
    private $SwiftMailer;

    public function __construct(){
      Yii::$enableIncludePath = false;
      Yii::import('ext.mailer.swiftmailer.lib.swift_required', 1);
      Yii::import('ext.mailer.swiftmailer.SwiftMailer', 1);
      $this->SwiftMailer = new SwiftMailer();
      $transport = $this->SwiftMailer->smtpTransport($this->smtp, $this->port)
      ->setUsername($this->user)
      ->setPassword($this->password);
      $this->mailer = $this->SwiftMailer->mailer($transport);
    }

   public function buildemil($data){
    $datain = array(
      'from' => $this->from,
      'to' => $this->to,
      'body' => $this->body($data),
      'subject' => 'An appointment from :'.$data['firstname'],
    );
    return $datain;
   }

  public function addmemmail(array $datain = array()){
    $message = $this->SwiftMailer->newMessage($datain['subject'])
    ->setFrom($datain['from'])
    ->setTo($datain['to'])
    ->setBody($datain['body'] ,'text/html');
    array_push($this->mails ,$message);
  }

  public function body($data){
    $body =
      '<html>'.
      ' <head></head>'.
      ' <body>'.
      '<span style="color:#090">名字:</span>&nbsp;'.$data['firstname'].'<br>'.
      '<span style="color:#090">姓:</span>&nbsp;'.$data['secondname'].'<br>'.
      '<span style="color:#090">称呼:</span>&nbsp;'.$data['sex'].'<br>'.
      '<span style="color:#090">希望联系方式:</span>&nbsp;'.$data['contacttype'].'<br>'.
      '<span style="color:#090">联系号码:</span>&nbsp;'.$data['contact'].'<br>'.
      '<span style="color:#090">寻找的产品类型:</span>&nbsp;'.$data['product'].'<br>'.
      '<span style="color:#090">寻找的品牌:</span>&nbsp;'.$data['brandname'].'<br>'.
      '<span style="color:#090">希望预约日期:</span>&nbsp;'.$data['ddata'].'<br>'.
      '<span style="color:#090">希望预约时间:</span>&nbsp;'.$data['dtime'].'<br>'.
      ' </body>'.
      '</html>';
    return $body;
  }

  public function pushmail($data){
    $this->addmemmail($this->buildemil($data));
  }

  public function send(){
      foreach($this->mails as $x)
        $this->mailer->send($x);
  }
}
?>
