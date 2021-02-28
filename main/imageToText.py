import sys
import pytesseract
from PIL import Image
import re


def img2text(source):
    img = Image.open(source)
    pytesseract.pytesseract.tesseract_cmd = r'tesseract/4.1.1/bin/tesseract'
    text = pytesseract.image_to_string(img, lang='eng')
    return str(text)

def imgInfo(text):
    # receipt = {}

    splits = text.splitlines()
    # orgName = splits[0] + '' + splits[1]
    # total = r''
    # desc = ""
    # for i in splits:

    # tot = re.split(r'total', text.lower())
    # receipt['name'] = orgName

    return splits

if __name__ == "__main__":
    text = img2text(sys.argv[1])
    print(imgInfo(text))

    
    