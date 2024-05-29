<?php

namespace App\Services;

use TelegramBot\Api\BotApi;

final class TelegramService
{

  /**
   * Sends a message to a specific chat ID using the Telegram bot API.
   *
   * @param int $chatId The ID of the chat to send the message to
   * @param string $message The message content to send
   */
  public static function send(int $chatId, string $message): void
  {

    $bot = new BotApi('6304534555:AAEfKOnRi8Pm1py4ZeOKWIT1nN6s1hOs7GU');
    $bot->sendMessage($chatId, sprintf("%s %s", $message, date("d.m.Y H:i:s")));

  }

}

