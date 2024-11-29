<?php

declare(strict_types=1);

use Flasher\Prime\Configuration;

return Configuration::from([
    // Default notification library (e.g., 'flasher', 'toastr', 'noty', 'notyf', 'sweetalert')
    'default' => 'flasher',

    // Path to the main PHPFlasher JavaScript file
    'main_script' => '/vendor/flasher/flasher.min.js',

    // List of CSS files to style your notifications
    'styles' => [
        '/vendor/flasher/flasher.min.css',
    ],

    // Set global options for all notifications (optional)
    'options' => [
        'timeout' => 5000, // Time in milliseconds before the notification disappears
        'position' => 'bottom-right', // Where the notification appears on the screen
    ],

    // Automatically inject JavaScript and CSS assets into your HTML pages
    'inject_assets' => true,

    // Enable message translation using Laravel's translation service
    'translate' => true,

    // URL patterns to exclude from asset injection and flash_bag conversion
    'excluded_paths' => [],

    // Map Laravel flash message keys to notification types
    'flash_bag' => [
        'success' => ['success'],
        'error' => ['error', 'danger'],
        'warning' => ['warning', 'alarm'],
        'info' => ['info', 'notice', 'alert'],
    ],

    // Set criteria to filter which notifications are displayed (optional)
    // 'filter' => [
    //     'limit' => 5, // Maximum number of notifications to show at once
    // ],

    // Define notification presets to simplify notification creation (optional)
    'presets' => [
        'message_received' => [
            'type' => 'info',
            'title' => 'Bilgilendirme',
            'message' => 'Gönderdiğiniz mesaj bizlere başarıyla ulaştı. En kısa sürede sizinle iletişime geçeceğiz.',
        ],
        'message_receive_error' => [
            'type' => 'error',
            'title' => 'Bir Hata Oluştu!',
            'message' => 'Üzgünüz, mesajınızı gönderirken bir sorun meydana geldi. Lütfen formu tekrar kontrol edin ve tekrar deneyin. Sorunun devam etmesi halinde bizimle iletişime geçebilirsiniz.',
        ],
    ],
]);
