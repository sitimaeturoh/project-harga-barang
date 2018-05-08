language: php

env:
    global:
    - 'FTP_USER=labsroom'
    - 'FTP_PASS=06APRIL98'

script:
 - "curl -u $FTP_USER:$FTP_PASS ftp://files.000webhost.com