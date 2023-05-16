<?php
class Logger
{

    private $format;
    private $delivery;

    public function __construct($format, $delivery) {
        $this->format = $format;
        $this->delivery = $delivery;
    }

    public function log($string) {
        $formattedString = $this->format($string);
        $this->deliver($formattedString);
    }

    private function format($string) {
        switch ($this->format) {
            case 'raw':
                return $string;
                break;
            case 'with_date':
                return date('Y-m-d H:i:s') . $string;
                break;
            case 'with_date_and_details':
                return date('Y-m-d H:i:s') . $string . ' - With some details';
                break;
            default:
                die('Error format');
        }
    }

    private function deliver($formattedString) {
        switch ($this->delivery) {
            case 'by_email':
                echo "Вивід формату ({$formattedString}) по електронній пошті";
                break;
            case 'by_sms':
                echo "Вивід формату ({$formattedString}) в SMS";
                break;
            case 'to_console':
                echo "Вивід формату ({$formattedString}) в консоль";
                break;
            default:
                die('Error deliver');
        }
    }
}


$logger = new Logger('with_date_and_details', 'by_sms');
$logger->log("</br> Test");
// var_dump($logger);