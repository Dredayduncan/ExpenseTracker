import sys
import pytesseract

import speech_recognition as sr
from PIL import Image


def img2text(source):
    img = Image.open(source)
    pytesseract.pytesseract.tesseract_cmd = r'tesseract/4.1.1/bin/tesseract'
    text = pytesseract.image_to_string(img, lang='eng')
    return text

# if __name__ == "__main__":
    # print(sys.argv[1])
    # with open(sys.argv[1], 'r'):
    #     print("file was opened")
    # print(img2text(sys.argv[1]))

    
    