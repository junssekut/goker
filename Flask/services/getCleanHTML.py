from html import unescape
from bs4 import BeautifulSoup

def clean_html(input_html):
    decoded_html = unescape(input_html)
    soup = BeautifulSoup(decoded_html, 'html.parser')
    return soup.get_text()
