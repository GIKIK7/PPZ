# http://spyne.io/#inprot=Soap11&outprot=Soap11&s=rpc&tpt=WsgiApplication&validator=true

import logging
logging.basicConfig(level=logging.DEBUG)
from spyne import Application, rpc, ServiceBase, \
    Integer, Unicode
from spyne import Iterable
from spyne.protocol.soap import Soap11
from spyne.server.wsgi import WsgiApplication
class HelloWorldService(ServiceBase):
    globalny = ""
    @rpc(Integer, _returns=Iterable(Unicode))
    def say_hello(ctx, name):
        liczba_hex = hex(name).split('x')[-1]
        global globalny 
        globalny = liczba_hex
        print ("postac hexa=")
        print(liczba_hex)
        print("\n")
        print(globalny)
        
    @rpc(_returns=Iterable(Unicode))
    def lab4(ctx):
        print("--------------------------")
        global globalny
        print globalny
        return globalny
    
application = Application([HelloWorldService],
    tns='spyne.examples.hello',
    in_protocol=Soap11(),
    out_protocol=Soap11()
)
if __name__ == '__main__':
    # You can use any Wsgi server. Here, we chose
    # Python's built-in wsgi server but you're not
    # supposed to use it in production.
    from wsgiref.simple_server import make_server
    wsgi_app = WsgiApplication(application)
    server = make_server('127.0.0.1', 1234, wsgi_app)
    server.serve_forever()
