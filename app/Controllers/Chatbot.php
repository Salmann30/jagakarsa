<?php

namespace App\Controllers;

use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class Chatbot extends BaseController
{
    public function handle()
    {
        // Ambil JSON dari fetch dan jadikan POST
        $data = json_decode($this->request->getBody(), true);
        if ($data && isset($data['message'])) {
            $_POST['message'] = $data['message'];
        }

        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        $config = [];
        $botman = BotManFactory::create($config);

        $faq = [
            'jam buka' => 'Kami buka setiap hari pukul 08.00 - 22.00',
            'alamat' => 'Alamat kami di Jl. Contoh No. 123',
            'pembayaran' => 'Kami menerima cash, QRIS, dan transfer bank'
        ];

        $botman->hears('(.*)', function ($bot, $message) use ($faq) {
            $text = strtolower($message);

            foreach ($faq as $key => $val) {
                if (str_contains($text, $key)) {
                    $bot->reply($val);
                    return;
                }
            }

            $bot->reply("Maaf, saya belum punya jawaban untuk pertanyaan itu.");
        });

        $botman->listen();
    }
}
