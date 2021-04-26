1)Pobrac pliki w katalogach jakich są

2)W katalogu Proces1_2 oraz Proces3 wpisać:
rpcgen -a app.x
make -f Makefile.app

3)Odpalić katalog Proces1_2 w dwóch okienkach i Proces3 w kolejnym

4)Odpalić proces1 w okienku Proces1_2: sudo ./app_server
(może zapytać o haslo. Jeśli tak to je wpisać)

5)Odpalić proces2 w okienku Proces1_2: sudo ./app_client localhost
(może zapytać o haslo. Jeśli tak to je wpisać) po czym wpisujemy wiadomosc jako liczbe dec i zatwierdzamy enterem.
proces2 konwertuje je do postaci hex

6) Odpalić proces3 w okienku Proces3: sudo ./app_client localhost
(może zapytać o haslo. Jeśli tak to je wpisać)
Proces3 odbiera nasza zkonwertowaną wiadomość od proces2 i wypisuje ją