/*
 * This is sample code generated by rpcgen.
 * These are only templates and you can use them
 * as a guideline for developing your own functions.
 */

#include "app.h"

void DecToHexStr(int dec, char *str)
  { sprintf(str, "%X", dec); }

wyjscie *
obliczenia_1_svc(wejscie *argp, struct svc_req *rqstp)
{
    char tmp[100];
	static wyjscie  result;

	/*
	 * insert server code here
	 */
    
    
    
	//result.suma    = argp->x1 + argp->x2;
	
	printf("%x\n", argp->x1);
    
	DecToHexStr(argp->x1, tmp);
	
    printf("%x\n", argp->x2);
    
	return &result;
}

