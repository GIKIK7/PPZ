using System;
using System.Net;
using System.Net.Sockets;
using System.Text;

namespace socket
{
    class Program
    {
        static void Main(string[] args)
        {
			byte[] bytes = new Byte[1024];
			string data_decimal = null;
            string data = null;
			IPEndPoint localEndPoint = new IPEndPoint(IPAddress.Any, 20000);
			Socket listener = new Socket(AddressFamily.InterNetwork, SocketType.Stream, ProtocolType.Tcp );
			try {
				listener.Bind(localEndPoint);
				listener.Listen(10); 
				while (true) {
					try{
                        			data = null;
						Console.WriteLine("Waiting for a connection...");
						Socket handler = listener.Accept();
						Console.WriteLine($"Connection from {handler.RemoteEndPoint.ToString()}");
						handler.Receive(bytes);

                        data_decimal = BitConverter.ToString(bytes);

                        int length = (data_decimal.Length + 1) / 3;
                        byte[] arr1 = new byte[length];
                        for (int i = 0; i < length; i++)
                        {
                            arr1[i] = Convert.ToByte(data_decimal.Substring(3 * i, 2), 16);
                            //Console.WriteLine(arr1[i]);
                            data += Convert.ToChar(arr1[i]); 
                            if (arr1[i] == 0 ) break;
                        }
                        Console.WriteLine(data);

                        //Console.WriteLine($"Received: {data}");
                        handler.Send(bytes);
						handler.Shutdown(SocketShutdown.Both);
						handler.Close();
					} catch (Exception e) {
						Console.WriteLine(e.ToString());
					}
				}
			} catch (Exception e) {
				Console.WriteLine(e.ToString());
			}
			Console.WriteLine("\nPress ENTER to continue...");
			Console.Read();
        }
    }
}
