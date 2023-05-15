<?php
class Logger
{

    private $format;
    private $delivery;

    public function __construct($format, $delivery)
    {
        $this->format = $format;

        $this->delivery = $delivery;
    }

    public function log($format)
    {
        $this->deliver($this->format($format));

    }

    public function format($string)
    {
        var_dump($string);
        switch ($this->format) {
            case 'raw' :
                {
                    // var_dump($string);
                    return $string;
                }
                break;
            case 'with_date':
                {
                    return date('Y-m-d H:i:s') . $string;
                }
                break;
            case 'with_date_and_details':
                {
                    return date('Y-m-d H:i:s') . $string . ' - With some details';
                }
                break;
            default:
            {
                die('Error format');
            }
        }
    }

    public function deliver($format)
    {
        switch ($this->delivery) {
            case 'by_email' :
                {
                    echo "Вывод формата ({$format}) по имейл";
                }
                break;
            case 'by_sms':
                {
                    echo "Вывод формата ({$format}) в смс";
                }
                break;
            case 'to_console':
                {
                    echo "Вывод формата ({$format}) в консоль";
                }
                break;
            default:
            {
                die('Error deliver');
            }
        }
    }

}

$logger = new Logger('raw', 'by_sms');
$logger->log('Emergency error! Please fix me! </br>');