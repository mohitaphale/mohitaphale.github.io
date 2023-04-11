from PIL import Image
import os

#images = os.listdir("../hills")
images = os.listdir("C:\\Users\\moap272824\\Desktop\\64GB_20.09.2022\\DCIM\\100EOS_R\\sHADI\\")
#images = "joel-filipe-_AjqGGafofE-unsplash.jpg"

def resize(path, name):
	img = Image.open(path)
	w, h = img.size

	w = int(w*0.7)
	h = int(h*0.7)

	newsize = (w,h)
	new_img = img.resize(newsize)
	new_img.save("_"+name, format='JPEG',quality=95)
	new_img.save("_"+name, format='JPEG', subsampling=0, quality=95)

for i in range(0,len(images)-1):
        print("C:\\Users\\moap272824\\Desktop\\64GB_20.09.2022\\DCIM\\100EOS_R\\sHADI\\"+images[i])
        resize("C:\\Users\\moap272824\\Desktop\\64GB_20.09.2022\\DCIM\\100EOS_R\\sHADI\\"+images[i], images[i])
