from suds.client import Client
import sys
hello_client = Client('http://localhost:8000/?wsdl')
print("podaj liczbe decymalnie")
l1 = input()
print hello_client.service.say_hello(l1)
