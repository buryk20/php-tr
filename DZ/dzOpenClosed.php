<?php
interface FormatterInterface
{
    public function format($string);
}

class RawFormatter implements FormatterInterface
{
    public function format($string)
    {
        return $string;
    }
}

class DateFormatter implements FormatterInterface
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string;
    }
}

class DateFormatterWithDetails implements FormatterInterface
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

interface DeliveryInterface
{
    public function deliver($format);
}

class EmailDelivery implements DeliveryInterface
{
    public function deliver($format)
    {
        echo "Вывод формата ({$format}) по имейл";
    }
}

class SmsDelivery implements DeliveryInterface
{
    public function deliver($format)
    {
        echo "Вывод формата ({$format}) в смс";
    }
}

class ConsoleDelivery implements DeliveryInterface
{
    public function deliver($format)
    {
        echo "Вывод формата ({$format}) в консоль";
    }
}

class Logger
{
    private $formatter;
    private $delivery;

    public function __construct(FormatterInterface $formatter, DeliveryInterface $delivery)
    {
        $this->formatter = $formatter;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $formattedString = $this->formatter->format($string);
        $this->delivery->deliver($formattedString);
    }
}

$formatter = new RawFormatter();
$delivery = new SmsDelivery();
$logger = new Logger($formatter, $delivery);
$logger->log('Emergency error! Please fix me!');
