from suds.client import Client
import sys
hello_client = Client('http://127.0.0.1:1234/?wsdl')
print("podaj liczbe decymalnie")
l1 = input()
hello_client.service.say_hello(l1)
