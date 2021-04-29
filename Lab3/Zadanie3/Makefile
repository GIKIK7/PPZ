CFLAGS = -O2 -Wall
LDFLAGS = -s
CC = gcc
LD = ld
MAKE = make

CLIENT_CFLAGS=`xmlrpc-c-config  libwww-client --cflags`
CLIENT_LDFLAGS=`xmlrpc-c-config libwww-client --libs`


all: client

#server: server.c
#	$(CC) $(CFLAGS) -c $<
#	$(CC) $(LDFLAGS) $< -o $@

client: proces1.c
	$(CC) $(CLIENT_CFLAGS)	$(CFLAGS)  -c $<
	$(CC) $(CLIENT_LDFLAGS)	$(LDFLAGS) $< -o $@


clean:
	rm -f client server *.o 

