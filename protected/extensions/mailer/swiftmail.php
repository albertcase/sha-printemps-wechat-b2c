
<?php
// require_once dirname(__FILE__).'/swiftmailer/lib/swift_required.php';
// require_once dirname(__FILE__).'/swiftmailer/SwiftMailer.php';
  class swiftmail{

    private $smtp = 'smtp.exmail.qq.com';
    private $port = '25';
    private $user = 'printemps@samesamechina.com';
    private $password = 'Same2016';
    private $from = array('printemps@samesamechina.com' => 'WECHAT Printemps');
    private $to = array('dirk.wang@samesamechina.com'=>'DIRC', 'echarlet@printemps.fr' => 'Echarlet');
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
      'subject' => 'Demande de RDV PSP via WECHAT Printemps',
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
      '<span style="color:#090">First Name:</span>&nbsp;'.$data['firstname'].'<br>'.
      '<span style="color:#090">Family Name:</span>&nbsp;'.$data['secondname'].'<br>'.
      '<span style="color:#090">Title:</span>&nbsp;'.$data['sex'].'<br>'.
      '<span style="color:#090">Preferred way to contact:</span>&nbsp;'.$data['contacttype'].'<br>'.
      '<span style="color:#090">Call No./Email Address:</span>&nbsp;'.$data['contact'].'<br>'.
      '<span style="color:#090">Type:</span>&nbsp;'.str_replace('|', ' | ', $data['product']).'<br>'.
      '<span style="color:#090">Brand:</span>&nbsp;'.$data['brandname'].'<br>'.
      '<span style="color:#090">Appointment Date:</span>&nbsp;'.$data['ddata'].'<br>'.
      '<span style="color:#090">Appointment Time:</span>&nbsp;'.$data['dtime'].'<br>'.
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
