import webbrowser

def main1():
    id = '63010023'
    pwd = 'covid'
    url = 'https://esck.iccsys.com/fraternity/result.php?id=%s&pwd=%s' % (id, pwd)
    rurl = url
    chrome_path = "C:/Program Files (x86)/Google/Chrome/Application/chrome.exe %s"
    webbrowser.get(chrome_path).open(rurl);

if __name__ == "__main__":
    main1();