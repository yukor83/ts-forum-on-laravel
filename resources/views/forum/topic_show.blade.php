<x-layout.forum>
    <x-slot name="title"></x-slot>
    <x-slot name="content">
        <h1></h1>
        <p class="lead">Добро пожаловать!</p>
        <div class="pagination row">  
            <p>Cтраницы: 1,2,3,4,5,6 След.</p>
        </div>
        {{ $messages[1]['nick'] }}
        @each('forum.topic_message_list', $messages, 'message')
        <div class="pagination bottom row">  
            <p>Cтраницы: 1,2,3,4,5,6 След.</p>
        </div>
    </x-slot>
</x-layout.forum>



<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Forum</title>
</head>
<body>
    <h1>Топик № {{ $uuid }} @isset ($page), страница {{ $page }} @endisset</h1>
</body>
</html> -->
