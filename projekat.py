import pytesseract
from googletrans import Translator, constants
from pprint import pprint
import argparse

# construct the argument parser and parse the arguments
ap = argparse.ArgumentParser()
ap.add_argument("-i", "--image", type=str, default="Kurapikaaaa.png",
    help="name of image file")
ap.add_argument("-f","--fromlanguage", type=str, default="auto",
    help="language to translate from")
ap.add_argument("-t", "--tolanguage", type=str, default="en",
    help="language to translate to")
args = vars(ap.parse_args())

trans_to_tess = {'af': 'afr', 'am': 'amh', 'ar': 'ara', 'az': 'aze_cyrl', 'be': 'bel',
                 'bn': 'ben', 'bs': 'bos', 'bg': 'bul', 'ca': 'cat', 'ceb': 'ceb', 'ny': 'chi_sim',
                 'co': 'cos', 'zh-cn': 'chi_sim', 'zh-tw': 'chi_tra', 'cs': 'ces', 'da': 'dan', 'de': 'deu',
                 'cy': 'cym', 'en': 'eng', 'eo': 'epo', 'et': 'est', 'tl': 'fil', 'fi': 'fin', 'fr': 'fra', 'hi': 'hin',
                 'hr': 'hrv', 'it': 'ita', 'ko': 'kor', 'ja': 'jpn', 'mk': 'mkd', 'ru': 'rus', 'sr': 'srp', 'sl': 'slv',
                 'es': 'spa', 'uk': 'ukr'}

pytesseract.pytesseract.tesseract_cmd = r'C:\Users\MLADEN\AppData\Local\Programs\Tesseract-OCR\tesseract'
if(args["fromlanguage"] != "auto" and args["fromlanguage"] in trans_to_tess):
    img_text = pytesseract.image_to_string(r'C:\wamp\www\TranslateFromImage\uploads\\' + args["image"], lang=trans_to_tess[args["fromlanguage"]])
else:
    img_text = pytesseract.image_to_string(r'C:\wamp\www\TranslateFromImage\uploads\\' + args["image"])




#img_text = pytesseract.image_to_string(r'C:\wamp\www\TranslateFromImage\uploads\\' + args["image"])
#print(img_text,'\n')


# init the Google API translator
translator = Translator(service_urls=['translate.googleapis.com'])

# translate a spanish text to arabic for instance
translation = translator.translate(img_text, src=args["fromlanguage"], dest=args["tolanguage"])
#print(f"{translation.origin} ({translation.src}) --> {translation.text} ({translation.dest})")
print(translation.text.encode(encoding="ascii",errors="xmlcharrefreplace").decode('utf-8'))
