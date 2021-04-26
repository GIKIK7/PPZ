/****
	Przyklad pliku RPCGEN
	Obliczanie sumy, roznicy i iloczynu dwoch liczb calkowitych
****/

/*************************************
	Wywolanie procedury odleglej dopuszcza tylko jeden
	argument wywolania i jeden zwracany wynik.
	Oba musza byc podane w formie wskaznikow

	Dlatego nalezy definiowac odpowiednie struktury
*************************************/
struct wejscie {
	int buff;
};
struct wyjscie {
	char buffer[255];
};
struct wejscie2 {
	int buff;
};
struct wyjscie2 {
	char buffer[255];
};
			/* definicja programu i jego wersji */

program TESTOWY{
	version PROBNA{
			/* definicja procedury nr 1 */
	wyjscie OBLICZENIA( wejscie) = 1;	
	} = 1;		/* nr wersji */	
} = 0x21000000;		/* nr programu */	

program TESTOWY2{
	version PROBNA2{
			/* definicja procedury nr 1 */
	wyjscie2 OBLICZENIA2( wejscie2) = 1;	
	} = 1;		/* nr wersji */	
} = 0x21000002;		/* nr programu */	
	
