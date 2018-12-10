import urllib3
import serial

#mainloop
while True:
    
            http = urllib3.PoolManager()
            print("Waiting for card...")
            ser = serial.Serial('/COM9', 9600)
            rfid_id = ser.readline()
            print (rfid_id)
            
            #convert byte type to string
            rfid= rfid_id.decode("utf-8")
            #print (rfid)
            #send data to server
            r= http.request('POST', 'http://192.168.100.7/attendance/add_data.php', fields={'RFID': rfid} )
            
        
print('end')

	