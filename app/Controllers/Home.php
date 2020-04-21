<?php namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;

class Home extends BaseController
{

    protected $request;

    public function index()
    {
        $content = view('page/mainpage', $this->common_variables());
        return $this->masterPage($content);
    }

    public function hakkimizda()
    {
        $content = view('page/hakkimizda', $this->common_variables());
        return $this->masterPage($content, 'Hakkımızda - Kurumsal');
    }

    public function satisEkibiDestegi()
    {
        $content = view('page/satis-ekibi-destegi', $this->common_variables());
        return $this->masterPage($content, 'Satış Ekibi Desteği');
    }

    public function acentaIiliskileriYonetimi()
    {
        $content = view('page/acenta-iliskileri-yonetimi', $this->common_variables());
        return $this->masterPage($content, 'Acenta İlişkileri Yönetimi - Uzmanlığımız');
    }

    public function postIletisim()
    {
        $request = \Config\Services::request();
        $email = \Config\Services::email();

        $email->setFrom('it@projesatis.com');
        $email->setTo('ecamci@projesatis.com');
        $email->setTo('btekce@projesatis.com');

        $email->setSubject('Projesatis.com İletişim Formu');

        $name = $request->getGetPost('name');
        $mail = $request->getGetPost('email');
        $message = $request->getGetPost('message');

        $messageBody = "Name : " . $name . "<br/>";
        $messageBody .= "Email : " . $mail . "<br/>";
        $messageBody .= "Message :<br/>" . $message . "<br/><hr/><br/>";
        $messageBody .= "Time: :" . date('d-m-Y H:i');

        $email->setMessage($messageBody);

        helper('filesystem');

        write_file(WRITEPATH . "logs/mails.log", serialize( [
                'name' => $name,
                'email' => $mail,
                'message' => $message,
                'time' => date('d-m-Y H:i')
            ]  ) . PHP_EOL, "a");

        $email->send();
        return $this->iletisim();

    }

    public function iletisim()
    {
        $content = view('page/iletisim', $this->common_variables());
        return $this->masterPage($content, 'İletişim - Kurumsal');
    }

    public function kariyer()
    {
        $content = view('page/kariyer', $this->common_variables());
        return $this->masterPage($content, 'Kariyer');
    }

    public function kariyerDetay()
    {
        $content = view('page/kariyer-detay', $this->common_variables());
        return $this->masterPage($content, 'Proje Satış Danışmanı - Kariyer');
    }

    public function leadYonetimi()
    {
        $content = view('page/lead-yonetimi', $this->common_variables());
        return $this->masterPage($content, 'Lead Yönetimi - Uzmanlığımız');
    }

    public function pazarlamaDestegi()
    {
        $content = view('page/pazarlama-destegi', $this->common_variables());
        return $this->masterPage($content, 'Pazarlama Desteği - Uzmanlığımız');
    }

    public function projelerimiz()
    {
        $content = view('page/projelerimiz', $this->common_variables());
        return $this->masterPage($content, 'Projelerimiz');
    }

    public function raporlama()
    {
        $content = view('page/raporlama', $this->common_variables());
        return $this->masterPage($content, 'Raporlama - Uzmanlığımız');
    }

    public function satisEgitimleri()
    {
        $content = view('page/satis-egitimleri', $this->common_variables());
        return $this->masterPage($content, 'Satış Eğitimleri - Uzmanlığımız');
    }


    private function masterPage($content, $title = "")
    {
        $headConfig = array_merge($this->common_variables(), ['title' => $this->title($title)]);
        return view('welcome_message', [
            'head' => view('common/head', $headConfig),
            'header' => view('common/header', $this->common_variables()),
            'content' => $content,
            'footer' => view('common/footer', $this->common_variables()),
        ]);
    }

    private function common_variables()
    {
        return [
            'cdn' => "https://s3.eu-central-1.amazonaws.com/www.projesatis.com/"
        ];
    }

    private function title($title = "")
    {
        $title_seperator = " | ";
        return "{$title}{$title_seperator}Proje Satış A.Ş. - Güvenilir İş Ortağınız";
    }


    //--------------------------------------------------------------------

}
