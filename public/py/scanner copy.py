#pip install pytesseract
#pip install pdf2image
#pip install -U sentence-transformers
#C:\Users\User\AppData\Local\Programs\Python\Python39\


import pytesseract
from pdf2image import convert_from_path
import glob
import os
import sys

#filename = sys.argv[1]

all_files = glob.glob(r"public/storage/uploads/"+ "011193080.3.pdf" ) # read all files one by one

#converting image and pdf to String and to txt file
text=""
for file in all_files:
  if '.png' in str(file):
    image_text= pytesseract.image_to_string(file)
    print(image_text)
  elif '.pdf' in str(file):
    pages = convert_from_path(file)
    for pageNum, imgBlob in enumerate(pages):
      text+= pytesseract.image_to_string(imgBlob, lang='eng')
segmented = text.split('#')
output=[]
for answer in segmented:
 answer = answer.replace('\n', '')
 output.append(answer)



Outputs = sorted(output, key=lambda s: int(s[0]) if s[0].isdigit() else float('inf'))

print(Outputs)
