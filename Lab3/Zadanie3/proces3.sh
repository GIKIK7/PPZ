#!/bin/bash

host="127.0.0.2";
port=12346;

php -S ${host}:${port} server_2.php
