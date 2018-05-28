<?php
// 创建一个监听socket，将其设置为非阻塞
$listen = socket_create( AF_INET, SOCK_STREAM, SOL_TCP );
socket_bind( $listen, '0.0.0.0', 9999 );
socket_listen( $listen );
// ⚠️⚠️⚠️⚠️⚠️⚠️ 这里设置非阻塞！
//socket_set_nonblock( $listen );
while( true ){
    $connect = socket_accept( $listen );
    if( $connect ){
        echo "有新的客户端".PHP_EOL;
    } else {
        echo "客户端连接失败".PHP_EOL;
    }
}