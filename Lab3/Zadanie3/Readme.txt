1) wpisujemy w konsoli make i zatwierdzamy enterem

2) dajemy plikom client, proces2.sh, proces3.sh uprawnienia poprzez komende chmod 777 [plik]

3) włączamy w drugim okienku proces2 przez:./proces2.sh

4) włączamy w trzecim okienku proces3 przez:./proces3.sh

5) ruszamy proces1 poprzez: ./client. Program poprosi o liczbe. Wpisujemy liczbe, zatwierdzamy enterem.

6) proces2 przyjmuje daną, konwertuje ją na hex i wysyła do procesu3. Proces3 odbiera daną i wypisuję ją.

(Client na końcu może wypisywać error o braku odpowiedzi z servera. Jest to normalnei nie trzeba się tym martwić)