/*
 * This is sample code generated by rpcgen.
 * These are only templates and you can use them
 * as a guideline for developing your own functions.
 */

#include "app.h"

void
testowy2_1(char *host)
{
	CLIENT *clnt;
	wyjscie2  *result_1;
	wejscie2  obliczenia2_1_arg;

#ifndef	DEBUG
	clnt = clnt_create (host, TESTOWY2, PROBNA2, "udp");
	if (clnt == NULL) {
		clnt_pcreateerror (host);
		exit (1);
	}
#endif	/* DEBUG */

	result_1 = obliczenia2_1(&obliczenia2_1_arg, clnt);
	if (result_1 == (wyjscie2 *) NULL) {
		clnt_perror (clnt, "call failed");
	}
	else
    {
        printf("%s\n", result_1->buffer);
    }
#ifndef	DEBUG
	clnt_destroy (clnt);
#endif	 /* DEBUG */
}


int
main (int argc, char *argv[])
{
	char *host;

	if (argc < 2) {
		printf ("usage: %s server_host\n", argv[0]);
		exit (1);
	}
	host = argv[1];
	testowy2_1 (host);
exit (0);
}
