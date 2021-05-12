from suds.client import Client
import sys
hello_client = Client('http://localhost:8000/?wsdl')
l1 = sys.argv[1]
l2 = sys.argv[2]
print hello_client.service.say_hello(l1, l2)
